<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return Category::all();
    }

    public function create(Request $request)
    {
        $category = new Category;
        $category->jenis_kategori = $request->jenis_kategori;
        $category->gaji = $request->gaji;
        $category->save();

        return $category;
    }

    public function update(Request $request, $id)
    {
        $jenis_kategori = $request->jenis_kategori;
        $gaji = $request->gaji;

        $category = Category::find($id);
        $category->jenis_kategori = $jenis_kategori;
        $category->gaji = $gaji;
        $category->save();

        return $category;
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return $category;
    }
}
