<?php

namespace App\Http\Controllers;

use App\Notifications\loginnotification;
use Illuminate\Support\Facades\Input;
use Notification;
use App\User;
use Illuminate\Http\Request;
//use Illuminate\Notifications\Notification;
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
           $remember=Input::get('remember');
//           Notification::send($user,new loginnotification($email));

//           Notification::route('mail', 'alaminhossen899@gmail.com')->notify(new loginnotification('alaminhossen899@gmail.com'));
//             if (!empty($remember)){
//                 Auth::login(Auth::user()->id,true);
//             }

           return view('adminPannel.home.home');

       }
       return redirect()->back()->with('error', 'Your Email or Password is Incorrect');

   }
public function dashbord(){
       return view('adminPannel.home.home');
}
// Testing multiple data insert
public function indexs(){
       return view('adminPannel.productmanagement.invoice');
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

public function test(){
//       $user=DB::table('sellproducts')
//           ->join('customers','customers.id','=','sellproducts.customer_id')
////           ->select('customers.customername')
//           ->groupBy('sellproducts.customer_id')
//           ->get();

//       return $user;
}
//public function testing(Request $request){
//    echo $request->customername;
//}

}
