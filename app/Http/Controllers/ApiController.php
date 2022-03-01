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

 public function Search ($id)
 {

  $user= Registration::find($id);
  if($user)
   return response()->json([
              'success'=>true,
              'data'=>$user,
              'message'=>'successfully',
              'code'=>200
          ]);
          else
   return response()->json([
              'message'=>'Data not found',
              'code'=>401
          ]);
        }

 public function Update(Request  $request,$id)
 {

 $m=Registration::find($id);
 if($m)
 {
       $m->update([

          'name'=>$request->name,
          'gender'=>$request->gender,
          'email'=>$request->email,
          'password'=>bcrypt($request->password),
          'phone'=>$request->phone,
          ]);
   return response()->json([
              'success'=>true,
              'data'=>$m,
              'message'=>'successfully',
              'code'=>200
          ]);
        }
        else
        {
            return response()->json([
              'message'=>'Data not found',
              'code'=>401
          ]);
        }

    }


        public function Delete($id)
 {

 $m=Registration::find($id);
 if($m)
 {
       $m->delete();
   return response()->json([
              'success'=>true,
              'data'=>$m,
              'message'=>'This data delete  successfully',
              'code'=>200
          ]);
        }
        else
        {
            return response()->json([
              'message'=>'Data not found',
              'code'=>401
          ]);
        }

        }







}
