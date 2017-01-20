<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MyBaseController;
use App\Http\Requests;
use App\Model\Category;
use App\Model\Language;
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
        $lans = Language::all();
        $categories = Category::all();

        $data = ['lans'=>$lans,'categories'=>$categories];

        return view('layouts.addcategory',$data);
    }
}
