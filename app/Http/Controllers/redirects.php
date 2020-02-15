<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class redirects extends Controller
{
    
    protected function index(){
      $Producten =  DB::table('Producten')->get();

        return view('home', ['Producten' => $Producten]);
    }
}
