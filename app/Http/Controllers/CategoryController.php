<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::where('id', '>', 1)->paginate(10);
        return view('categories',['category'=>$category]);
    }

    public function tambah()
    {
        return view('categories/tambah');
    }

    public function store(Request $request)
    {
        //insert data ke table pegawai
        DB::table('categories')->insert([
            'name' => $request->nama,
            'user_id' => $request->user_id
        ]);

        //alihkan halaman ke halaman categories
        return redirect('/categories');
    }

    public function edit($id)
    {
        //menambil data categories
        $category = DB::table('categories')->where('id',$id)->get();

        return view('categories/edit',['category'=> $category]);
    }

    public function update(Request $request)
    {
           //update data ke table pegawai
           DB::table('categories')->where('id', $request->id)->update([
            'name' => $request->nama,
            'user_id' => $request->user_id
           ]);

        //alihkan halaman ke halaman categories
        return redirect('/categories');
    }

    public function hapus($id)
    {
        //menghapus data 
        DB::table('categories')->where('id',$id)->delete();

        return redirect('/categories');
    }
    
}
