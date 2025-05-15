<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/about', function (){
    return view('frontend.about');
});
Route::get('/product', function (){
    return view('frontend.shop');
});
Route::get('/blog', function (){
    return view('frontend.blog');
});
Route::get('/services', function (){
    return view('frontend.services');
});
Route::get('/contact', function (){
    return view('frontend.contact');
});
Route::get('/gas-burner-honeywell', function (){
    return view('frontend.product.burner-control.honeywell');
});
Route::get('/gas-burner-kromschroeder', function (){
    return view('frontend.product.burner-control.kromschroeder');
});
Route::get('/flame-monitoring-honeywell', function (){
    return view('frontend.product.flame-monitoring.honeywell');
});
Route::get('/flame-monitoring-kromschroeder', function (){
    return view('frontend.product.flame-monitoring.kromschroeder');
});
Route::get('/gas-train-components-honeywell', function (){
    return view('frontend.product.gas-train.honeywell');
});
Route::get('/gas-train-components-kromschroeder', function (){
    return view('frontend.product.gas-train.kromschroeder');
});
Route::get('/gas-train-components-maxon', function (){
    return view('frontend.product.gas-train.maxon');
});
Route::get('/ignition-transformer-honeywell', function (){
    return view('frontend.product.ignition-transformer.honeywell');
});
Route::get('/ignition-transformer-kromschroeder', function (){
    return view('frontend.product.ignition-transformer.kromschroeder');
});
Route::get('/industrial-burners-kromschroeder', function (){
    return view('frontend.product.industrial-burner.kromschroeder');
});
Route::get('/industrial-burners-maxon', function (){
    return view('frontend.product.industrial-burner.maxon');
});
Route::get('/industrial-burners-eclipse', function (){
    return view('frontend.product.industrial-burner.eclipse');
});