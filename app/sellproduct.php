<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sellproduct extends Model
{

    protected $fillable=['customer_id','sellsdate','sellsinvoice','productname','productserialno','productunitprice','productquantity','productwarrenty','total_amount'];
}
