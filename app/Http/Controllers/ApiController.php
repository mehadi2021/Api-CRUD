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
catch (exception $e) {

}
    }
}
