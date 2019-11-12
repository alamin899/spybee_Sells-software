<?php

namespace App\Http\Controllers;

use App\customer;
use App\product;
use Barryvdh\DomPDF\Facade as PDF;
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
        $product=DB::table('products')->paginate(10);
        return view('adminPannel.productmanagement.viewproductlist',['products'=>$product,'no'=>1]);
    }
    //sells product view
    public function viewsell(){
        $invoices=DB::table('invoicenos')->orderBy('id','desc')->pluck('invoiceno')->first();
        $totalinvoice=$invoices+1;
        $customers=DB::table('customers')->get();
        $products=DB::table('products')->get();
//            echo $user;
        return view('adminPannel.productmanagement.sellproduct',['customers'=>$customers,'invoices'=>$totalinvoice,'products'=>$products]);
            }


            public function customerinfo($id){
                 $customer=DB::table('customers')->where('id',$id)->first();

//                 echo '<label>Name:</label>'.$customer->customername.'<hr><label>Email:</label>'.$customer->customeremail.'<hr><label>Phone:</label>'.$customer->phone.'<hr><label>Address:</label>'.
//                     $customer->customeraddress;<input type="text" class="form-control" >  <input type="text" class="form-control" value="fd">
                echo '<div class="form-group col-md-3">
              <label for="inputCity">Customer name</label>
              <input type="text" class="form-control" name="customername" value="'.$customer->customername.'" readonly>
            
            </div>
            
            <div class="form-group col-md-3">
              <label for="inputCity">Customer Email</label>
              <input type="text" class="form-control" name="customeremail" value="'.$customer->customeremail.'" readonly>
              
            </div>
            
            <div class="form-group col-md-3">
              <label for="inputCity">Customer Phone</label>
            <input type="text" class="form-control" name="phone" value="'.$customer->phone.'" readonly>
            </div>
            
            <div class="form-group col-md-3">
              <label for="inputCity">Customer Address</label>
              <input type="text" class="form-control" name="customeraddress" value="'.$customer->customeraddress.'" readonly>
            </div>';
            }

            public function productinfo(Request $request){
                     $id=$request->product;

                $dropproduct=DB::table('products')->where('id','=',$id)->get();

               return view('adminPannel.productmanagement.sellproduct',['dproduct'=>$dropproduct]);


            }

//            this code is protect for update product
            protected function updatequantity($pid,$pquantity){
                $dbpqty= DB::table('products')->where('id','=',$pid)->first();
                $db=$dbpqty->quantity;;
                $finalquantity=$db-$pquantity;
                return DB::table('products')->where('id','=',$pid)->update(['quantity'=>$finalquantity]);
            }
    //           End this code is protect for update product

            public function sellsproduct(Request $request){
                $id=$request->customer;
                $date=$request->selldate;
                $invoice=$request->sellsno;


                $customer=DB::table('customers')->where('id',$id)->first();
                foreach ($request->pserial as $key=>$v){ //serial is not mendatory you can give other field
                   $sells= DB::table('sellproducts')->insert(
                        [
                            'customer_id' => $id,
                            'sellsdate' => $date,
                            'sellsinvoice'=>$invoice,
                            'productid'=>$request->productid[$key],
                            'productname'=>$request->pname[$key],
                            'productserialno'=>$request->pserial[$key],
                            'productunitprice'=>$request->punitprice[$key],
                            'productquantity'=>$request->pquantity[$key],
                            'productwarrenty'=>$request->pwarrenty[$key],
                            'total_amount'=>$request->ptotalprice[$key]

                        ]
                    );
                   $pid=$request->productid[$key];
                   $pqnt=$request->pquantity[$key];
                   $this->updatequantity($pid,$pqnt);

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

            public function  productdropdown($id){

                $product=DB::table('products')->where('id',$id)->first();

                echo '<div class="col"><label>product name</label><textarea type="text" id="productname" name="pname" class="form-control"  rows="2">'.$product->pname.'</textarea></div>
                <div class="col"><label>product Desc.</label><textarea type="text" id="description" name="pshortdesc" class="form-control"  rows="2">'.$product->pshortdesc.'</textarea></div>
                <div class="col"><label>product Serial</label><textarea type="text" id="serial" name="pserialno" class="form-control"  rows="2" ></textarea></div>
                <div class="col"><label>Quantity</label><input type="number"    id="quantity" name="quantity"  class="form-control"  ></div>
                <div class="col"><label>Warrenty</label><input type="text"    id="warrenty" name="pwarrenty" class="form-control"  value="'.$product->pwarrenty.'"></div>
                <div class="col"><label>Unit Price</label><input type="text"    id="unitprice" name="psellprice"  class="form-control"  value="'.$product->psellprice.'"></div>
                <div class="col"><label>Total Price</label><input type="text"    id="totalprice" name="totalprice"  class="form-control"  ></div>';

            }
//            public function productdatatable(){
//
//                $products=product::all();
////                '.route('indicustupdate',['id'=>$customers->id]).'
////                '. route('indivicustomerview',['id'=>$customers->id]) .'
//                return Datatables::of($products)
//                    ->addColumn('action', function ($products) {
//
//                        return  '<a href="" onclick="return confirm();"  class="delete btn btn-danger btn-sm">
//                Dele</a>
//                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
//                        <a href="" class="btn btn-sm btn-success"> View</a>  ';})
//                    ->rawColumns(['action'])
//                    ->make(true);
////
//
//            }

public function productstock(){
        $product=DB::table('products')->paginate(10);
        return view('adminPannel.productmanagement.productstock',['products'=>$product]);
}
}
