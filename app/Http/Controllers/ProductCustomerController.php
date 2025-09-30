<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCustomerController extends Controller
{
    public function index()
    {
        $products =[
            [ 'id' => 1, 'name' => 'Produk A','customer' => 'PT. ABC'],
            [ 'id' => 2, 'name' => 'Produk B','customer' => 'PT. DEF'],
            [ 'id' => 3, 'name' => 'Produk C','customer' => 'PT. GHI'],
           
        ];
        return view('product-customer.index', compact('products'));
        
    }
}
