<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{ 
    public function index () {
        $users = [
            [
                "name" => "drake1",
                "vek" => "13"
            ],
            [
                "name" => "drake2",
                "vek" => "8"
            ],
            [
                "name" => "drake3",
                "vek" => "9"
            ],
        ];
        return view(
            'dashboard',
            [
                "users" => $users
            ]
        );
    }
}
