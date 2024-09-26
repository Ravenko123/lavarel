<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{ 
    public function index () {
        $users = [
            [
                "name" => "Mario"
            ],
            [
                "name" => "Luigi"
            ]
        ];
        return view(
            'dashboard',
            [
                "users" => $users
            ]
        );
    }
}
