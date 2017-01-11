<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MyBaseController;
use App\Http\Requests;
use Illuminate\Http\Request;

class ProductController extends MyBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * List products
     * @return void
     */
    public function show()
    {
        return view('layouts.product');
    }

}
