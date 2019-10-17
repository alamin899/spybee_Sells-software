<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=['pdisplayname','pname','pserialno','pbrand','pmodel','pwarrenty','pbuydate','pbuyprice','psellprice','profileimage','quantity','vendor','pshortdesc','pfulldesc'];
}
