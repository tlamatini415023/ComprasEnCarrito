<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $category=Category::all();
        return view('dashboard.category.index',['category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $category= new Category();
        $category->name=$request->input('name');
        $category->description=$request->input('description');
        $category->state=$request->input('state');
        $category->save();
        return view("dashboard.category.message",['msg'=>"Categoria agregada con exito"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $category=Category::find($id);
        return view('dashboard.category.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $category=Category::find($id);
        $category->name=$request->input('name');
        $category->description=$request->input('description');
        $category->state=$request->input('state');
        $category->save();
        return view("dashboard.category.message",['msg'=>"Categoria actualizada con exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $category=Category::find($id);
        $category->delete();
        return redirect("dashboard/category");
    }
}
