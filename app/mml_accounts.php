<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mml_accounts extends Model
{
    protected $fillable = [
        'userid','account_no','sponsor_id','upline_id', 'position','pvpairs', 'rightpv','leftpv','totaldirect','rightGroup','leftGroup','datetomaintain','dateentry','isSeventhPair','isUpgraded','status'
    ];

    public function user()
   {
       return $this->belongsTo('App\User');
   }
}
