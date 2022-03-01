<?php

namespace App\Http\Controllers;
use  App\Models\Registration;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function Create(Request $request)
    {
        // dd($request->all());

        try{
             $request->validate([
            'name'=>'required|unique:registrations',
            'gender'=>'required',
            // 'address'=>'required|alpha',
            'email'=>'required|unique:registrations',
            'phone'=>'required|unique:registrations'
            // 'phon_no'=>'required|digits:11',
            // 'branch'=>'required|alpha'
        ]);
       $user= Registration::create([

          'name'=>$request->name,
          'gender'=>$request->gender,
          'email'=>$request->email,
          'password'=>bcrypt($request->password),
          'phone'=>$request->phone,
          ]);
          return response()->json([
              'success'=>true,
              'data'=>$user,
              'message'=>'successfully',
              'code'=>200
          ]);
}
catch (Exception $e) {
     return response()->json([
              'success'=>Fail,
              'message'=>$e->getMessage(),
              'code'=>200
     ]);

}
    }




 public function View()
 {

  $user= Registration::all();
   return response()->json([
              'success'=>true,
              'data'=>$user,
              'message'=>'successfully',
              'code'=>200
          ]);


 }











}
