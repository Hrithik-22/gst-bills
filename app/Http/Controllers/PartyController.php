<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use function Opis\Closure\unserialize;

class PartyController extends Controller
{
    //
    #Function to load parties
    public function index(){
    //    Get all parties
    $parties=Party::all();
        return view("party.index",compact('parties'));
    }

    // function to load add party view
    public function addParty(){
        // return "Coding with Hrithik";
        return view("party.add");
    }
    // Function to create/store party
    public function createParty(Request $request){
        
        // Validation
        $request->validate(
            [
                'party_type' =>'required',
                'full_name' => 'required|string|min:2|max:20',
                'phone_no' => 'required|numeric',
                'address' => 'required|max:255',
                'account_holder_name' => 'required|string|min:2|max:20',
                'account_no' => 'required|numeric',
                'bank_name' =>'required|max:255',
                'ifsc_code' => 'required|max:50',
                'branch_address' => 'required|max:255',
                
            ]);
        
        
        // echo "<pre>";
        // print_r($request->all());


        
        $param=$request->all();
        unset($param['_token']);
        Party::create($param);
    
        //redirect to add party back
        return redirect()->route('addParty')->withStatus("Party Created Successfully");

        // use this for laravel 9+
        // return redirect()->route('addParty')->with('success', 'Party created successfully');
    
    }
    // function to load add party view
    public function editParty(){
        // return "Coding with Hrithik";
        return view("party.edit");
    }
}