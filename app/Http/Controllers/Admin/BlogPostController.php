<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Post;
use App\Models\Admin\SubCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use function Ramsey\Uuid\v1;

class BlogPostController extends Controller
{
    public function index()
    {
        $category = Category::latest()->get();
        return view('admin.pages.blogPost',compact('category'));
    }

    public function getSubCategory($category_id): \Illuminate\Http\JsonResponse
    {
        $subCategory = SubCategory::where("category_id",$category_id)->get(["name","id"]);
        return response()->json($subCategory);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'image' => 'mimes:jpeg,bmp,png'
        ]);
        try{
            DB::beginTransaction();
            if ($request->hasFile('image'))
            {
                $imageName = time().'.'.$request->image->extension();
                $request->image->storeAs('public/image', $imageName);
                $post = Post::create([
                    'category_id' => $request->category_id,
                    'sub_category_id' => $request->sub_category_id,
                    'title' => $request->title,
                    'slug' => Str::slug($request->title),
                    'details' => $request->details,
                    'status' => $request->status,
                    'image' => $imageName,
                ]);
            }
            if(!empty($post)){
                DB::commit();
                return Redirect::route('blog.post.show')->with('Blog Post Successfully Added');
            }
            throw new \Exception('Failed!');
        }catch(Exception $ex){
            DB::rollBack();
            return Redirect::back();
        }
    }

    public function show()
    {
        $post = Post::with('category','subcategory')->latest()->get();
        return view('admin.pages.blogPostShow',compact('post'));
    }

    public function edit($slug)
    {
        $category = Category::latest()->get();
        $post = Post::where('slug',$slug)->with('category','subcategory')->first();
        return view('admin.pages.editBlogPost',compact('post','category'));
    }

    public function update(Request $request ,$id)
    {
        try {
            $post = Post::find($id);

            if (empty($post)) {
                throw new \Exception('Failed!');
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/image', $imageName);
            $update_post = $post->update([
                'category_id' => $request->category_id,
                'sub_category_id' => $request->sub_category_id,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'details' => $request->details,
                'status' => $request->status,
                'image' => $imageName,
            ]);

            if (!empty($update_post)) {
                DB::commit();
                return Redirect::route('blog.post.show')->with('Blog Update Successfully Added');
            } else {
                throw new \Exception('Failed!');
            }
        } catch (\Exception $ex) {
            DB::rollBack();
            return Redirect::back();
        }
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        Storage::delete('public/image/' . $post->image);
        $post->delete();
        return Redirect::back();
    }

}
