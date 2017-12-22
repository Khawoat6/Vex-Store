<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',['as'=>'index.index','uses'=>'Homecontroller@index']);

Route::get('/support',['as'=>'support.support','uses'=>'Homecontroller@support']);

Route::get('/contact',['as'=>'contact.contact','uses'=>'Homecontroller@contact']);

Route::get('/logins',['as'=>'login.login','uses'=>'Homecontroller@login']);

Route::get('/collection',['as'=>'collection.collection','uses'=>'Homecontroller@collection']);

Route::get('/orderStatus',['as'=>'orderStatus.orderStatus','uses'=>'Homecontroller@orderStatus']);

Route::get('/registers','Homecontroller@regis');
Route::post('/registers','Homecontroller@addregis');

Route::get('/order','Homecontroller@order');
Route::get('/orders/{id}','Homecontroller@orders');
Route::post('/order','Homecontroller@addOrder');


Route::get('/admin/dashboard',['as'=>'dashboard.dashboard','uses'=>'Admincontroller@dashboard']);
Route::get('/admin/product',['as'=>'product.product','uses'=>'Admincontroller@product']);
Route::get('/admin/product/addproduct',['as'=>'addproduct.addproduct','uses'=>'Admincontroller@addproduct']);

Route::post('/admin/product/addproduct','Admincontroller@insertProduct');

Route::get('/admin/product/update/{id}','Admincontroller@updateProduct');

Route::post('/admin/product/update/{id}','Admincontroller@productUpdate');


Route::get('/admin/product/{id}','Admincontroller@deleteProduct');

Route::get('/admin/order','Admincontroller@order');
Route::get('/admin/order/view/{id}','Admincontroller@viewOrder');
Route::get('/admin/order/update/{id}','Admincontroller@orderUpdate');
Route::post('/admin/order/update/{id}','Admincontroller@updateOrder');

Route::get('/admin/order/{id}','Admincontroller@deleteOrder');



Auth::routes();


