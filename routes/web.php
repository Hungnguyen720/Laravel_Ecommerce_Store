<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'LandingPageController@index')->name('landingPage');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function () {

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::prefix('user')->group(function () {

    Route::get('/orders', 'UserController@getOrders')->name('user.orders');
});

Route::prefix('api')->group(function () {

    Route::get('/orders', 'OrdersController@getOrders')->name('orders.all');
    Route::post('/orders', 'OrdersController@createOrders')->name('orders.create');
    Route::get('/orders/totalsales', 'OrdersController@getOrderstotalsales')->name('orders.totalsales');
    Route::get('/orders/totalorders', 'OrdersController@getOrdersCountByDay')->name('orders.countbyday');
    Route::get('/orders/pendingfulfillment', 'OrdersController@getOrdersPendingFulfillment')->name('orders.pendingfulfillment');
});

Route::prefix('shop')->group(function () {

    Route::get('/', 'CartController@index')->name('cart.home');
    Route::get('/{product}', 'ShopController@show')->name('shop.show');
});



Route::prefix('cart')->group(function () {

    Route::get('/', 'CartController@index')->name('cart.index');
    Route::post('/', 'CartController@index')->name('cart.store');
});




Route::get('products/details/{id}', function ($id) {
    $products = DB::table('products')->where('id', $id)->get();
    foreach ($products as $product) {
        $id = $product->id;
        $name = $product->name;
        $type = $product->type;
        $img = $product->img;
        $quantity = $product->quantity;
        $price = $product->price;
    }
    return view('product_details')
        ->with('id', $id)
        ->with('name', $name)
        ->with('type', $type)
        ->with('img', $img)
        ->with('quantity', $quantity)
        ->with('price', $price);
});

Route::get('/men', 'ShopController@categoryMenView');

Route::get('/women', 'ShopController@categoryWomenView');

Route::get('/women/collection/{collection}', 'ShopController@collectionView');


Route::get('/men/collection/{collection}', 'ShopController@collectionView');


Route::get('/products/collection/{collection_name}', function () {
    return view('products');
});



Route::get('api/products', function () {
    return DB::table('products')->get();
});

Route::post('/products', 'ProductsController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
