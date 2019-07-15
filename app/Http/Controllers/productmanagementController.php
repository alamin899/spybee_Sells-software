<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productmanagementController extends Controller
{
    public function addproductview(){
        return view('adminPannel.productmanagement.addproductview');
    }
    public function addproductwarrenty(){
        return view('adminPannel.productmanagement.productwarrenty');
    }
    public function viewproductlist(){
        return view('adminPannel.productmanagement.viewproductlist');
    }
    //sells product view
    public function viewsell(){
        $customers=DB::table('customers')->get();
        return view('adminPannel.productmanagement.sellproduct',['customers'=>$customers]);
            }
}
