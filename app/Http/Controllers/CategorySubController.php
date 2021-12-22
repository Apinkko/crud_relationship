<?php

namespace App\Http\Controllers;

use App\Models\CategorySub;
use App\Http\Requests\StoreCategorySubRequest;
use App\Http\Requests\UpdateCategorySubRequest;
use App\Models\Category;

class CategorySubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_subs = CategorySub::all();

        return view('category_subs.index', compact('category_subs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('category_subs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategorySubRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorySubRequest $request)
    {
        CategorySub::query()->create($request->validated());

        return redirect()->route('category_subs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorySub  $categorySub
     * @return \Illuminate\Http\Response
     */
    public function show(CategorySub $categorySub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorySub  $categorySub
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorySub $category_sub)
    {

        $categories = Category::all();

        return view('category_subs.edit', compact('category_sub', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorySubRequest  $request
     * @param  \App\Models\CategorySub  $categorySub
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorySubRequest $request, CategorySub $category_sub)
    {
        $category_sub->update($request->validated());

        return redirect()->route('category_subs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorySub  $categorySub
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorySub $category_sub)
    {
        $category_sub->delete();

        return back();
    }
}
