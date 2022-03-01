<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class registrationCreate extends Controller
{
   public  function create(){
         return view('admin.layouts.registration');
    }
    public function process(Request $request){
        Registration::create([
  'name' =>$request->input('name'),
    'email' =>$request->input('password'),
        ]);
    }
}








