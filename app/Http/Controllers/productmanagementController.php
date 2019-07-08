<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
