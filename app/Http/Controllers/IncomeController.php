<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function getDirects(){
      return view('direct');
    }

    public function getIndirects(){
      return view('indirect');
    }

    public function getGenealogy(){
      return view('genealogy');
    }
}
