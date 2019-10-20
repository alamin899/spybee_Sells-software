<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable=['customername','customercompany','customeremail','customercontact','customeraltcontact','phone','phone1','customeraddress','profileimage'];

}
