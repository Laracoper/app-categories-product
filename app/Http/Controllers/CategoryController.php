<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Controllers\DataController;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\MyClass\MyController;
use App\Models\Product;

use function Laravel\Prompts\progress;

class CategoryController extends Controller
{
    // public function tt(){
    //     $r = new MyController;
    //     $res = $r->cess('hello alexey proger');
    //     return view('categories.create',compact('res'));
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $categories = Category::all();
        // $products = Product::all();
        $categories = Category::with('products')->get();
        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('categories.index')->with('success', 'create category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

        // $products = Category::findOrFail(8)->products;
        $categories = Category::with('products')->get();

        // foreach ($categories as $category) {
        //     foreach ($category->products as $name) {
        //         echo $name->category_name;
        //     }
        // }

        // $category = Category::find($category->id);

        return view('categories.show', compact('category', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
