<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.pages.blogCategory');
    }

    public function show()
    {
        $category = Category::latest()->get();
        return view('admin.pages.blogCategoryShow',compact('category'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:20',
        ]);
        try{
            DB::beginTransaction();
            $category = Category::create([
                'name' => $request->name,
                'status' => $request->status,
            ]);
            if(!empty($category)){
                DB::commit();
                return Redirect::route('blog.category.show')->with('Category saved correctly!!!');
            }
            throw new \Exception('Failed!');
        }catch(Exception $ex){
            DB::rollBack();
            return Redirect::back();
        }
    }

    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        return view('admin.pages.blogCategoryUpdate',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
        ]);
        try {
            $category = Category::find($id);
            if (empty($category)) {
                throw new \Exception('Failed!');
            }
            $updateCategory = $category->update([
                'name' => $request->name,
                'status' => $request->status,
            ]);
            if (!empty($updateCategory)) {
                DB::commit();
                return Redirect::route('blog.category.show')->with('Category Update correctly!!');
            }
        } catch (\Exception $ex) {
            DB::rollBack();
            return Redirect::route('all.category')->with('Category Update Fail!!');
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $category = Category::find($id);
            if (empty($category))
            {
                throw new \Exception('Failed!');
            }
            $deleteCategory = $category->delete();
            if (!empty($deleteCategory))
            {
                DB::commit();
                return Redirect::back()->with('msg', 'Delete Successfully');
            }
        } catch (\Exception $ex) {
            DB::rollBack();
            return Redirect::back();
        }
    }
}
