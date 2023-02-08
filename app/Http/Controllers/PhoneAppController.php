<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PhoneAppController extends Controller
{
    public function GetWelcome()
    {
        $phone=[
  
            ['Type' =>'Iphone 14','Price'=>3500 ,'Color'=>'Black'],
            ['Type' =>'Samsung','Price'=>2500 ,'Color'=>'White'],
            ['Type' =>'Huwaui','Price'=>1000 ,'Color'=>'Gold']
             
           ];
         
           return view('welcome',["phone"=>$phone]);
    }


public function GetPhoneData()
{
    $phones=DB::table('products')
    ->get();
    return view('showphone',["ph"=>$phones]);    
}

public function GetPhoneDataid($id)
{
    $phones=DB::table('products')->find($id);
    return view('checkout',["ph"=>$phones]);    
}

}