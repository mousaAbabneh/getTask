<?php

namespace App\Http\Controllers;

use App\A;
use Illuminate\Http\Request;
use App\AppCover;
use App\S;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    function isDifferent(){
      $arr=array();
        $aa=S::all();
        foreach($aa as $a){
        $aw = DB::table('a')->where('awb', $a->awb)->get();
        if($aw->isEmpty())
        array_push($arr,$a);
            }
      return $arr;
    }

      public function isPaid(Request $request) {

        $aw = DB::table('a')->where('awb', $request->input('awb'))->get();
        
        if($aw->isEmpty())
        return response()->json([], 200);          

        else
        return response()->json([
            "message" => $aw
        ], 201);    
      }
  
}
