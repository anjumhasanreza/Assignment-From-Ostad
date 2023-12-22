<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = DB::table('sizes')->get();
        return view("frontend.pages.sizes.index", compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("frontend.pages.sizes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:50', 'unique:sizes'],
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

        
        DB::table('sizes')->insert($data);
        return redirect()->route('size.index')->with('success', 'Size has been successfully added.');

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
        $size = DB::table('sizes')->find($id);
        return view("frontend.pages.sizes.edit", compact('size'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        
        $request->validate([
            // 'title' => ['required', 'string', 'max:50', 'unique:sizes'],
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


        DB::table('sizes')->where('id', $id)->update($data);
        return redirect()->route('size.index')->with('success', 'Size has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
