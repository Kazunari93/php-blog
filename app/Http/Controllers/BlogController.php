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


    /** ブログ詳細を表示
     * 
     *  @param int $id
     *  @return view
     */

    public function showDetail($id)
    {
        $blog = Blog::find($id);

        if (is_null($blog)) {
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('blog'));
        }

        return view('blog.detail', ['blog' => $blog]);
    }
}
