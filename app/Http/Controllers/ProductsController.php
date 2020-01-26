<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductsController extends Controller
{
    public function create(Request $request){
        DB::table('products')->insertGetId([
            'name' => $request['name'],
            'type' => $request['type'],
            'quantity' => $request['quantity'],
            'price'=> $request['price']
        ]);

        return response('success', 200);
        /*
        return Products::inser([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'api_token' => Str::random(80),
        ]);
        */
    }

    public function update(Request $request){

    }

    public function delete(Request $request){

    }
}
