<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterFile extends Model
{
  protected $fillable = [
      'company_name','company_abbr','company_address','company_owner', 'company_contact_no','status'
  ];
}
