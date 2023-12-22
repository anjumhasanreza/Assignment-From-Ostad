<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view("frontend.pages.categorys.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("frontend.pages.categorys.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:50', 'unique:Categories'],
            'description' => ['nullable', 'string', 'max:255'],
            'remark' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:active,inactive'],
        ]);


        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'remark' => $request->input('remark'),
            'status' => $request->input('status'),

        ];

        
        DB::table('categories')->insert($data);
        return redirect()->route('category.index')->with('success', 'Category has been successfully added.');





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
        $categorie = DB::table('categories')->find($id);
        return view("frontend.pages.categorys.edit", compact('categorie'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        
        $request->validate([
            // 'title' => ['required', 'string', 'max:50', 'unique:categories'],
            'title' => ['required', 'string', 'max:50'],
            'description' => ['nullable', 'string', 'max:255'],
            'remark' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:active,inactive'],
        ]);


        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'remark' => $request->input('remark'),
            'status' => $request->input('status'),

        ];


        DB::table('categories')->where('id', $id)->update($data);
        return redirect()->route('category.index')->with('success', 'Category has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
