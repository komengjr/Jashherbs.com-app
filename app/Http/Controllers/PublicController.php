<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function listproduct()
    {
        return view('shop.listproduct');
    }
    public function blog()
    {
        return view('blog.view');
    }
    public function contact()
    {
        return view('contact.view');
    }
}
