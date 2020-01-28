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


Route::prefix('admin')->group(function(){

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

});

Route::prefix('user')->group(function(){

    Route::get('/', 'UserController@index')->name('user.profile');
    Route::get('/orders', 'UserController@getOrders')->name('user.orders');

});

Route::prefix('api')->group(function(){

    Route::get('/orders', 'OrdersController@getOrders')->name('orders.all');
    Route::post('/orders', 'OrdersController@createOrders')->name('orders.create');

});




Route::middleware('auth:api')->get('/users', function (){
    return DB::table('users')->get();
});

Route::get('products/details/{id}', function ($id){
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

Route::get('/products/list', function (){
    return view('products');
});

Route::get('api/products', function (){
    return DB::table('products')->get();
});

Route::post('/products', 'ProductsController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


