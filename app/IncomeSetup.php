<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomeSetup extends Model
{
  protected $fillable = [
      'sponsor_income','pairing_income','direct_income','indirect_income', 'leadership_income','status'
  ];
}
