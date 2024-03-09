<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function delete($table,$id){
        $param=array('is_deleted'=>1);        
        DB::table($table)->where('id',$id)->update($param);
    }
}
