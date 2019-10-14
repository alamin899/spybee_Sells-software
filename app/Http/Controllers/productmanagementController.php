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

//                 echo '<label>Name:</label>'.$customer->customername.'<hr><label>Email:</label>'.$customer->customeremail.'<hr><label>Phone:</label>'.$customer->phone.'<hr><label>Address:</label>'.
//                     $customer->customeraddress;<input type="text" class="form-control" >  <input type="text" class="form-control" value="fd">


                echo '<div class="form-group col-md-3">
      <label for="inputCity">Customer name</label>
      <label class="form-control">'.$customer->customername.'</label>
    </div>
    
    <div class="form-group col-md-3">
      <label for="inputCity">Customer Email</label>
      <label class="form-control">'.$customer->customeremail.'</label>
    </div>
    
    <div class="form-group col-md-3">
      <label for="inputCity">Customer Phone</label>
      <label class="form-control">'.$customer->phone.'</label>
    </div>
    
    <div class="form-group col-md-3">
      <label for="inputCity">Customer Address</label>
      <label class="form-control">'.$customer->customeraddress.'</label>
    </div>';
            }

            public function sellsproduct(Request $request){


                $id=$request->customer;
                $date=$request->selldate;
                $invoice=$request->sellsno;

                $customer=DB::table('customers')->where('id',$id)->first();
                foreach ($request->serial as $key=>$v){ //serial is not mendatory you can give other field
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
            public function addproduct(Request $request){
                     $insert=DB::table('products')->insert(
                         [
                             'pdisplayname'=>$request->pdisplayname,
                             'pname'=>$request->pname,
                             'pserialno'=>$request->pserialno,
                             'pbrand'=>$request->pbrand,
                             'pmodel'=>$request->pmodel,
                             'pwarrenty'=>$request->pwarrenty,
                             'pbuydate'=>$request->pbuydate,
                             'pbuyprice'=>$request->pbuyprice,
                             'psellprice'=>$request->psellprice,
                             'profileimage'=>$request->profileimage,
                             'quantity'=>$request->quantity,
                             'vendor'=>$request->vendor,
                             'pshortdesc'=>$request->pshortdesc,
                             'pfulldesc'=>$request->pfulldesc,
                         ]
                     );
                if ($insert){
                    return response()->json("success");
                }
                else
                    return response()->json("error");
            }
}
