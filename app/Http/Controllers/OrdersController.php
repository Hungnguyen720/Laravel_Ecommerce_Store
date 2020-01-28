<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class OrdersController extends Controller
{
    public function getOrders(Request $request){

        $orders = DB::table('customer_orders')->get();
        return $orders;

    }

    public function update(Request $request){

    }

    public function delete(Request $request){

    }
}
