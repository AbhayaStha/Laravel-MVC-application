<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Manufacturer;

Route::get('/', function () {
    return view('welcome');
});


Route::get('form', function(){
    $data = request()->all();
    //dd($data);
    return view('form')->with('data',$data);
});

Route::get('/test', function(){
    // $product = new Product;
    // $product->name = 'ipod';
    // $product->price = 19.99;
    // $product->manufacturer_id = 1;
    // $product->save();
    // $id = $product->id;
    // dd($id);

    // $product = Product::create(array('name'=>'Fold', 'price'=>7777, 'manufacturer_id'=>2));
    // dd($product);
});

Route::get('/test1', function () {

    $products = Manufacturer::find(1)->products;
    dd($products);
});

Route::get('/test2', function () {

    $manufacturer = Product::find(2)->manufacturer;
    echo ($manufacturer);
});