<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vendormanagementController extends Controller
{
public function vendoraddview(){

    return view('adminPannel.vendormanagement.vendoraddview');
}
public function vendorlist(){
    $venodors=DB::table('vendors')->orderBy('id', 'desc')->get();
    return view('adminPannel.vendormanagement.vendorlist',['vendors'=>$venodors]);
}
public function addvendorarea(){
    return view('adminPannel.vendormanagement.addvendorarea');
}
public function vendorareainsert(Request $request){
    $insert=DB::table('vendorareas')->insert(
        [
            'vendorarea'=>$request->vendorarea,

        ]
    );
    if ($insert){
        return response()->json("success");
    }
    else
        return response()->json("error");

}
//Vendor insert

public function vendorinsert(Request $request){
    $insert=DB::table('vendors')->insert(
        [
            'vname'=>$request->vname,
            'vemail'=>$request->vemail,
            'vphone'=>$request->vphone,
            'cpname'=>$request->cpname,
            'cpemail'=>$request->cpemail,
            'cpmob1'=>$request->cpmob1,
            'cpmob2'=>$request->cpmob2,
            'varea'=>$request->varea,
            'companyname'=>$request->companyname,
            'vsaddress'=>$request->vsaddress,
            'vfaddress'=>$request->vfaddress,

        ]
    );
    if ($insert){
        return response()->json("success");
    }
    else
        return response()->json("error");

}
public function email_available(Request $request){
    if($request->get('email'))
    {
        $email = $request->get('email');
        $data = DB::table("users")->where('email', $email)->count();
        if($data > 0)
        {
            echo 'not_unique';
        }
        else
        {
            echo 'unique';
        }
    }
}

    public function phone_available(Request $request){
        if($request->get('phone'))
        {
            $phone = $request->get('phone');
            $data = DB::table("users")->where('phone', $phone)->count();
            if($data > 0)
            {
                echo 'not_unique';
            }
            else
            {
                echo 'unique';
            }
        }
    }


}
