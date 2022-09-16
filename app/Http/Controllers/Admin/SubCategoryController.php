<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SubCategoryController extends Controller
{
    public function index()
    {
        $category = Category::latest()->get();
        return view('admin.pages.blogSubCategory',compact('category'));
    }

    public function show()
    {
        $subCategory = SubCategory::with('category')->latest()->get();
        return view('admin.pages.blogSubCategoryShow',compact('subCategory'));
    }

    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $category = SubCategory::create([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'status' => $request->status,
            ]);
            if(!empty($category)){
                DB::commit();
                return Redirect::route('blog.sub.category.show')->with('Sub Category saved correctly!!!');
            }
            throw new \Exception('Failed!');
        }catch(Exception $ex){
            DB::rollBack();
            return Redirect::back();
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $subCategory = SubCategory::find($id);
            if (empty($subCategory))
            {
                throw new \Exception('Failed!');
            }
            $deleteSubCategory = $subCategory->delete();
            if (!empty($deleteSubCategory))
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
