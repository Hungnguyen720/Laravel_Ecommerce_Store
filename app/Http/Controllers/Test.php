<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Test extends Controller
{
    public function index(){

        $users = DB::table('users')->get();
        return $users;

    }
}
