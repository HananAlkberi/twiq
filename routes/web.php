<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneAppController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/getwelcome',[PhoneAppController::class,"GetWelcome"]); 

Route::get('/getphone',[PhoneAppController::class,"GetPhoneData"])->name("getlist"); 

Route::get('/checkout/{id}',[PhoneAppController::class,"GetPhoneDataid"])->name("getlistid");

Route::get('/checkout', function () {
    return view('checkout');
})->name("checkout");

Route::get('/', function () {

    $p="Welcome To Laravel";

    return view('welcome',["ha"=>$p,"ab"=>"Send To Email"]);
})->name("Welcome");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/twiq', function () {
    return view('twiq');
})->name("twiq");

Route::get('/sa', function () {
    return view('saudi');
});

Route::get('/hanan', function () {
    return view('hanan.ha');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/phonedisplay', function () {

    $phone=[
  
        'Type' =>'iphone 14',
        'Price'=>3500 ,
        'Color'=>'black' , 
       ];
     
       return view('phonedetails',$phone);
});

Route::get('/oldphone', function () {
    return view('old.oldphone');
});

Route::get('/phone', function () {
    $phone=[
  
        ['Type' =>'Iphone 14','Price'=>3500 ,'Color'=>'Black'],
        ['Type' =>'Samsung','Price'=>2500 ,'Color'=>'White'],
        ['Type' =>'us','Price'=>1000 ,'Color'=>'Gold']
         
       ];
     
       return view('phone',["phone"=>$phone]);
});