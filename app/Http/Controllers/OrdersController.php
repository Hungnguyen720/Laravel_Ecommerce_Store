<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class OrdersController extends Controller
{
    public function getOrders(Request $request){

        $orders = DB::table('customer_orders_details')->get();
        return $orders;

    }

    public function getOrdersCountByDay(Request $request){

        $orders = DB::table('customer_orders')
        ->select('order_date', DB::raw('count(*) as total'))
        ->groupBy('order_date')
        ->orderBy('order_date', 'asc')
        ->get();
        return $orders;

    }

    public function getOrdersTotalSales(Request $request){

        $orders = DB::table('customer_orders_details')
            ->select('order_total', 'order_number', 'date_ordered')
            ->groupBy('order_number', 'order_total', 'date_ordered')
            ->orderBy('date_ordered', 'asc')
            ->get();
        return $orders;

    }

    public function getOrdersPendingFulfillment(Request $request){

        $count = DB::table('customer_orders')
            ->where('fulfillment_status', 'open')
            ->count();

        return $count;

    }




    public function update(Request $request){

    }

    public function delete(Request $request){

    }
}
