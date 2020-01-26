<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('User');
    }

    public function getOrders()
    {
        $email = Auth::user()->email;
        $orders = DB::table('customer_orders')->select('customer', 'order_total', 'order_number')
        ->where('customer', $email)
        ->groupBy('customer', 'order_total', 'order_number')
        ->orderBy('order_number', 'asc')
        ->get();

        $skus = DB::table('customer_orders')->select('order_number', 'sku')
        ->where('customer', $email)
        ->orderBy('order_number', 'asc')
        ->get();


        return view('User')->with('orders', $orders)->with('skus', $skus);

    }
}
