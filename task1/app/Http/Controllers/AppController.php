<?php

namespace App\Http\Controllers;

use App\A;
use Illuminate\Http\Request;
class AppController extends Controller
{
    function index(){
    }



    public function getAllStudents() {
        // logic to get all students goes here
      }
  
      public function create(Request $request) {
        // logic to create a student record goes here


        
        $post=new A();
        $post->token=$request->token;
        $post->name=$request->name;
        $post->created_at=time();
        $post->save();
        return response()->json([
            "message" => "student record created"
        ], 201);    
      }
  
      public function getStudent($id) {
        // logic to get a student record goes here
      }
  
      public function updateStudent(Request $request, $id) {
        // logic to update a student record goes here
      }
  
      public function deleteStudent ($id) {
        // logic to delete a student record goes here
      }
}
