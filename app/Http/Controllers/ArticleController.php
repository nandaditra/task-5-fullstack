<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $article = Article::where('id', '>', 1)->paginate(10);
        return view('articles',['article'=>$article]);
    }

    public function tambah()
    {
        return view('articles/tambah');
    }

    public function store(Request $request)
    {
        //insert data ke table article
        DB::table('articles')->insert([
            'title' => $request->title,
            'content' => $request->content,
            'images' => $request->images,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
        ]);

        // alihakn ke halamana ke halaman article
        return redirect('/articles');
    }

    public function edit($id) {
        //menambil data categories
        $article = DB::table('articles')->where('id',$id)->get();

        return view('articles/edit',['article'=> $article]);
    }

    public function update(Request $request)
    {
           //update data ke table pegawai
           DB::table('articles')->where('id', $request->id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'images' => $request->images,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
           ]);

        //alihkan halaman ke halaman categories
        return redirect('/articles');
    }

    
    public function hapus($id)
    {
        //menghapus data 
        DB::table('articles')->where('id',$id)->delete();

        return redirect('/articles');
    }
}
