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
        $invoices=DB::table('invoicenos')->orderBy('id','desc')->pluck('invoiceno')->first();
        $totalinvoice=$invoices+1;
        $customers=DB::table('customers')->get();
        return view('adminPannel.productmanagement.sellproduct',['customers'=>$customers],['invoices'=>$totalinvoice]);
            }


            public function customerinfo($id){
                 $customer=DB::table('customers')->where('id',$id)->first();

                 echo '<label>Name:</label>'.$customer->customername.'<hr><label>Email:</label>'.$customer->customeremail.'<hr><label>Phone:</label>'.$customer->phone.'<hr><label>Address:</label>'.
                     $customer->customeraddress;
            }

            public function sellsproduct(Request $request){

                $id=$request->customer;
                $customer=DB::table('customers')->where('id',$id)->first();



                return view('adminPannel.productmanagement.invoice',['products'=>$request],['customer'=>$customer]);

            }
}
