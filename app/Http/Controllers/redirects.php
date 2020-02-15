<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;
use DB;
class redirects extends Controller
{
    
    protected function index(){
      $Producten =  DB::table('Producten')->get();
      // dd($Producten);

        return view('home', ['Producten' => $Producten]);
    }
    protected function detail_product($id){
      // 
      $Producten = DB::table('Producten')->where('id',$id)->get(); 
      return view('detail', ['Producten' => $Producten]);

    }
}
