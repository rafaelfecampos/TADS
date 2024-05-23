<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(15);
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
    public function store(Request $request)
    {
        $data = $request->all();

        try {
            $category = Category::create($data);
            flash('Categoria criada com sucesso!')->success();
            return redirect()->route('categories.index');
        } catch (\Exception $e) {
            $message = 'Erro ao criar categoria!';

            if(env('APP_DEBUG')){
                $message = $e->getMessage();
            }

            flash($message)->warning();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->all();
        try {
            $category->update($data);
            flash('Categoria atualizada com sucesso!')->success();
            return redirect()->route('categories.index');
        } catch (\Exception $e) {
            $message = 'Erro ao atualizar categoria!';

            if(env('APP_DEBUG')){
                $message = $e->getMessage();
            }

            flash($message)->warning();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete()
            flash('Categoria removida com sucesso!')->success();
            return redirect()->route('categories.index');
        } catch (\Exception $e) {
            $message = 'Erro ao romover categoria!';

            if(env('APP_DEBUG')){
                $message = $e->getMessage();
            }

            flash($message)->warning();
            return redirect()->back();
        }
    }
}
