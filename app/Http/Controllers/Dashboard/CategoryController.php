<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\PatchRequest;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::paginate(2);
        return view('dashboard.categories.index', compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=new Category();
        return view('dashboard.categories.create', compact('category'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    { 
        Category::create($request->validated());
        return to_route('categories.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

        return view('dashboard.categories.show',['category'=>$category]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit',compact('category'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatchRequest $request, Category $category)
    {
        $category->update($request->validated());
        return to_route('categories.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
         return to_route('categories.index');
        //
    }
}
