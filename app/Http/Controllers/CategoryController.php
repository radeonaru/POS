<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function food_beverage(){
        return view('blog.food_beverage');
    }

    public function beauty_health(){
        return view('blog.beauty_health');
    }

    public function home_care(){
        return view('blog.home_care');
    }

    public function baby_kid(){
        return view('blog.baby_kid');
    }
}
