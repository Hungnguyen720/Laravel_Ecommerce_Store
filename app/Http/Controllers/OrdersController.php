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

    public function getOrdersGroupByDay(Request $request){

        $orders = DB::table('customer_orders')
        ->select('date_ordered')
        ->groupBy('date_ordered')
        ->orderBy('date_ordered', 'asc')
        ->get();
        return $orders;

    }

    public function getOrdersTotalSales(Request $request){

        $orders = DB::table('customer_orders')
            ->select('order_total', 'order_number', 'date_ordered')
            ->groupBy('order_number', 'order_total', 'date_ordered')
            ->orderBy('date_ordered', 'asc')
            ->get();
        return $orders;

    }



    public function update(Request $request){

    }

    public function delete(Request $request){

    }
}
