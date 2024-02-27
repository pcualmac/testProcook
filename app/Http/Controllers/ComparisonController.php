<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\ComparisonProductRequest;
use App\Models\Product;

class ComparisonController extends Controller
{
    public function index(ComparisonProductRequest $request) //ComparisonProductRequest $request
    {
        $comparison['product_1'] = Product::where('id', $request->product_1)->first();
        $comparison['product_2'] = Product::where('id', $request->product_2)->first();
        if(!empty($request->product_3)){
            $comparison['product_3'] = Product::where('id', $request->product_3)->first();
        }
        if(!empty($request->product_4)){
            $comparison['product_4'] = Product::where('id', $request->product_4)->first();
        }
        // dd($comparison);
        return view('comparison',  [
            'data' => $comparison,
        ]);
    }
}
