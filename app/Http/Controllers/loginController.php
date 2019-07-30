<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
   public function index(Request $request){

       if (Auth::attempt([
           'email'=>$request->email,
           'password'=>$request->password
       ])){

           $email=$request->email;
           $user=DB::table('users')->where('email','=',$email)->first();
           $request->session()->put('name',$user->name);


           return view('adminPannel.home.home');

       }
       return redirect()->back()->with('error', 'Your Email or Password is Incorrect');

   }
public function dashbord(){
       return view('adminPannel.home.home');
}
// Testing multiple data insert
public function indexs(){
       return view('test');
}

public function submit(Request $request)
{
    $rows=$request->row;
    print_r($rows);
//$data=DB::table('tests')->insert($rows);
//if ($data){
//    echo "success";
//}
}

}
