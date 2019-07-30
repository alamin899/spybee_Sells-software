<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vendormanagementController extends Controller
{
public function vendoraddview(){

    return view('adminPannel.vendormanagement.vendoraddview');
}
//vendor area list view

public function vendorlist(){
    $venodors=DB::table('vendors')->orderBy('id', 'desc')->get();
    return view('adminPannel.vendormanagement.vendorlist',['vendors'=>$venodors]);
}
public function addvendorarea(){
    $area=DB::table('vendorareas')->get();
    return view('adminPannel.vendormanagement.addvendorarea',['vendorarea'=>$area]);
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

    //individual vendor view
    public function indivivendorview($id){
        $vendors=DB::table('vendors')->where('id',$id)->first();
        return view('adminPannel.vendormanagement.individualviewupdate',['data'=>"view"],['vendor'=>$vendors]);

    }
    //update view vendor
    public function updatevendorview($id){
        $vendors=DB::table('vendors')->where('id',$id)->first();
        return view('adminPannel.vendormanagement.individualviewupdate',['data'=>"update"],['vendor'=>$vendors]);
    }

    //delete specific vendor
    public function deltevendor($id){
        $delete=DB::table('vendors')->where('id',$id)->delete();
        if ($delete){
            return response()->json("success");
        }
        else
            return response()->json("error");
    }

    //vendor update here
public function vendorupdate(Request $request){
    $id=$request->id;

    $update=DB::table('vendors')->where('id',$id)->update([
        'vname'=>$request->vname,
        'vemail'=>$request->vemail,
        'vphone'=>$request->vphone,
        'companyname'=>$request->companyname,
        'cpname'=>$request->cpname,
        'cpemail'=>$request->cpemail,
        'cpmob1'=>$request->cpmob1,
        'cpmob2'=>$request->cpmob2,
        'varea'=>$request->varea,
        'vsaddress'=>$request->vsaddress,
        'vfaddress'=>$request->vfaddress,

    ]);
    if ($update){
        return response()->json("success");
    }
    else
        return response()->json("error");
}

public function deletearea($id){
    $delete=DB::table('vendorareas')->where('id',$id)->delete();
    if ($delete){
        return response()->json("success");
    }
    else
        return response()->json("error");
}

}
