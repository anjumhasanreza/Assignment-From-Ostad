<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StyleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $styles = DB::table('styles')->get();
        return view("frontend.pages.styles.index", compact('styles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("frontend.pages.styles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:50', 'unique:styles'],
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

        
        DB::table('styles')->insert($data);
        return redirect()->route('style.index')->with('success', 'Style has been successfully added.');

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
        $style = DB::table('styles')->find($id);
        return view("frontend.pages.styles.edit", compact('style'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        
        $request->validate([
            // 'title' => ['required', 'string', 'max:50', 'unique:styles'],
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


        DB::table('styles')->where('id', $id)->update($data);
        return redirect()->route('style.index')->with('success', 'Style has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
