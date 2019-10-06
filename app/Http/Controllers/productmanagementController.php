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
                $date=$request->selldate;
                $invoice=$request->sellsno;

                $customer=DB::table('customers')->where('id',$id)->first();
                foreach ($request->serial as $key=>$v){
                   $sells= DB::table('sellproducts')->insert(
                        [
                            'customer_id' => $id,
                            'sellsdate' => $date,
                            'sellsinvoice'=>$invoice,
                            'productname'=>$request->description[$key],
                            'productserialno'=>$request->serial[$key],
                            'productunitprice'=>$request->unitprice[$key],
                            'productquantity'=>$request->qty[$key],
                            'productwarrenty'=>$request->warrenty[$key],
                            'total_amount'=>$request->amount[$key]

                        ]
                    );
                }
                if ($sells){
                    DB::table('invoicenos')->insert(
                        ['invoiceno' => $invoice]
                    );

                    return view('adminPannel.productmanagement.invoice',['products'=>$request],['customer'=>$customer]);

                }







            }
}
