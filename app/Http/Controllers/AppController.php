<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        // return "Coding with Hrithik";
        return view("dashboard");
    }
    public function about(){
        // return "Coding with Hrithik";
        return view("about");
    }
}
