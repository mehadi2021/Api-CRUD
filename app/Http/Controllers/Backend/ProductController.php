<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function productList()
    {
        return view('admin.layouts.product-list');
    }

    public function productCreate()
    {
        return view('admin.layouts.product-create');

    }

    public function productStore(Request $request)
    {
        try {
           Product::create([
               'name' => $request->input('nme'),
               'price' => $request->input('price'),
               'description' => $request->input('description'),
           ]);
           return redirect()->route('admin.products')->with('success', 'Product created successfully');
        }catch (\Throwable $throwable){
            return redirect()->back();
        }
    }



}
