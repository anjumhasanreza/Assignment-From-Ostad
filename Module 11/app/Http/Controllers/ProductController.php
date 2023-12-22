<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products')->get();
        return view("frontend.pages.products.index", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = DB::table('groups')->get();
        $categorys = DB::table('categories')->get();
        $brands = DB::table('brands')->get();
        $styles = DB::table('styles')->get();
        $sizes = DB::table('sizes')->get();
        $colors = DB::table('colors')->get();
        $uoms = DB::table('uoms')->get();
        return view("frontend.pages.products.create", compact('groups','categorys','brands','styles','sizes','colors','uoms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:50', 'unique:products'],
            'description' => ['nullable', 'string', 'max:255'],
            'unit_price' => ['required','decimal'],
            'other_charge' => ['required','decimal'],
            'purchase_price' => ['required','decimal'],
            'profit_margin' => ['required','decimal'],
            'sale_price' => ['required','decimal'],
            'final_sale_price' => ['required','decimal'],
            'discount_type' => ['nullable','string'],
            'discount_amount' => ['nullable','decimal'],
            'opening_stock' => ['nullable','decimal'],
            'stock_adjust' => ['nullable','decimal'],
            'adjust_note' => ['nullable', 'string', 'max:255'],
            'group_id' => ['required', 'integer'],
            'category_id' => ['required', 'integer'],
            'brand_id' => ['required', 'integer'],
            'style_id' => ['required', 'integer'],
            'size_id' => ['required', 'integer'],
            'color_id' => ['required', 'integer'],
            'uom_id' => ['required', 'integer'],
            'status' => ['required', 'in:active,inactive'],
            "imagess"         => 'required|image|mimes:jpg,png,jpeg',
        ]);


        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'remark' => $request->input('remark'),
            'status' => $request->input('status'),

        ];


        $group = DB::table('groups')->find($request->input('group_id'));
        $category = DB::table('categorys')->find($request->input('category_id'));
        $brand = DB::table('brands')->find($request->input('brand_id'));
        $style = DB::table('styles')->find($request->input('style_id'));
        $size = DB::table('sizes')->find($request->input('size_id'));
        $color = DB::table('colors')->find($request->input('color_id'));
        $uom = DB::table('uoms')->find($request->input('uom_id'));
        
        DB::table('products')->insert($data);
        return redirect()->route('product.index')->with('success', 'Product has been successfully added.');

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
        $product = DB::table('products')->find($id);
        return view("frontend.pages.products.edit", compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            // 'title' => ['required', 'string', 'max:50', 'unique:products'],
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


        DB::table('products')->where('id', $id)->update($data);
        return redirect()->route('product.index')->with('success', 'Product has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
