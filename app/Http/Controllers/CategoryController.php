<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MyBaseController;
use App\Http\Requests;
use App\Http\Requests\StoreCategoryRequest;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends MyBaseController
{
    /**
     * Create a category
     *
     * @return void
     */
    public function addCategory()
    {
        $categories = Category::all();

        $data = ['categories'=>$categories];

        return view('layouts.addcategory',$data);
    }

    public function storeCategory(StoreCategoryRequest $request)
    {
      $v = $request->input('mutilan');
      dd(array_keys($v));

    //
           $category = new Category();
           $category->name = $request->input('category.name');
           $category->pid = $request->input('category');
           $category->slug = $request->input('category.slug');

           if(!$category->save())
           {
                $request->session()->flash('error', trans('main.create_failed'));
                return redirect()->back()->withInput();
           }

           $request->session()->flash('success', trans('main.create_success'));
           return redirect()->back();
    }
}
