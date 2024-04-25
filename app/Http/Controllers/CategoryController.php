<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view("category.index", ["categories" => $categories]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')
            ->orderBy('name')
            ->get();
        return view("category.index", ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        $categories = Category::all();

        return view("category.index", ["categories" => $categories]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        $categories = Category::with('products')->get();

        return view("category.index", ['category'=>$category,"categories" => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $category = Category::find($id);
            $category->name = $request->name;
            $category->description = $request->description; 
            $category->save();

            $categories = Category::all();

        return view("category.index", ["categories" => $categories]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category= Category::find($id);
        $category->delete();

        $categories = Category::all();

        return view("category.index", ["categories" => $categories]);

    }
}
