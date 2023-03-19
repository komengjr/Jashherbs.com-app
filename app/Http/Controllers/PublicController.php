<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PublicController extends Controller
{
    public function index()
    {
        $cat = DB::table('tbl_cat')->where('status_cat',1)->get();
        $postinganbarang = DB::table('tbl_item')->get();
        return view('index',['cat'=>$cat, 'postinganbarang'=>$postinganbarang]);
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
