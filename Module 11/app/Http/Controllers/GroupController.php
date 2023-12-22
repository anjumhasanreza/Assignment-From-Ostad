<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = DB::table('groups')->get();
        return view("frontend.pages.groups.index", compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("frontend.pages.groups.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:50', 'unique:groups'],
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

        
        DB::table('groups')->insert($data);
        return redirect()->route('group.index')->with('success', 'Group has been successfully added.');





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
        $group = DB::table('groups')->find($id);
        return view("frontend.pages.groups.edit", compact('group'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        
        $request->validate([
            // 'title' => ['required', 'string', 'max:50', 'unique:groups'],
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


        DB::table('groups')->where('id', $id)->update($data);
        return redirect()->route('group.index')->with('success', 'Group has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
