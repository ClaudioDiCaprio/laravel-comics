<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $comics = config("comics");
    $links = config("links");
    $combo = config("colist");
    $shopo = config("shopList");
    $dichos = config("dcLinks");
    $socials = config("social");
    
 
    return view('home', ["comics"=>$comics,"links"=>$links,"combo"=>$combo,"shopo"=>$shopo,"dichos"=>$dichos,"socials"=>$socials]);
});
