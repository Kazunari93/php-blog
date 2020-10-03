<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /** ブログ一覧を表示
     * 
     *  @return view
     */

    public function showList()
    {
        $blogs = Blog::all();
        //中身みれる&ここで処理が止まる
        //dd($blogs);
        return view('blog.list', ['blogs' => $blogs]);
    }
}
