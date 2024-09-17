<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});


Route::get('form', function(){
    $data = request()->all();
    //dd($data);
    return view('form')->with('data',$data);
});

Route::get('/test', function(){
    $product = new Product;
    $product->name = 'ipod';
    $product->price = 19.99;
    $product->manufacturer_id = 1;
    $product->save();
    $id = $product->id;
    dd($id);
});