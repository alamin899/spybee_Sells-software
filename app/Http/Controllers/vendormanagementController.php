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
    return view('adminPannel.vendormanagement.vendorlist');
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
}
