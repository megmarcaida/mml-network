<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
  protected $fillable = [
      'userid','address','city','country','postal_code', 'about_me','status'
  ];

  public function user()
 {
     return $this->belongsTo('App\User');
 }
}
