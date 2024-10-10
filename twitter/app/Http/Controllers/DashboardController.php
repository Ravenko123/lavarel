<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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
                "users" => $users,
                "posts" => Post::orderBy('likes','ASC')->get(),
            ]
        );
    }
}
