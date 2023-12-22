<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = DB::table('brands')->get();
        return view("frontend.pages.brands.index", compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("frontend.pages.brands.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:50', 'unique:brands'],
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

        
        DB::table('brands')->insert($data);
        return redirect()->route('brand.index')->with('success', 'Brand has been successfully added.');

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
        $brand = DB::table('brands')->find($id);
        return view("frontend.pages.brands.edit", compact('brand'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        
        $request->validate([
            // 'title' => ['required', 'string', 'max:50', 'unique:brands'],
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


        DB::table('brands')->where('id', $id)->update($data);
        return redirect()->route('brand.index')->with('success', 'Brand has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
