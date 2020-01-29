<?php

namespace App\Http\Controllers;


use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $items = Category::latest()->paginate(10);

        return view('category.index')->with(['items' => $items]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Category $request)
    {


        return  $item = Category::create([

            'name' => $request->name,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Category $category)
    {
        return  view('category.show')->with(['category' => $category ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Category $category)
    {
        return  view('category.edit')->with(['category' => $category ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Category $request
     * @param Category $category
     * @return bool
     */
    public function update(\App\Http\Requests\Category $request, Category $category)
    {
        return $category->update([
            'name' => $request->name
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return bool
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        return  $category->delete();
    }
}
