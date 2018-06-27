<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mml_accounts;
use Auth;

class IncomeController extends Controller
{
    public function getDirects(){
      return view('direct');
    }

    public function getIndirects(){
      return view('indirect');
    }

    public function getGenealogy(){

      //head
      $getAccountNo = mml_accounts::where("userid",Auth::user()->id)->first();


      //LEFT DOWNLINE

      //second left downline
      $getGenealogyLeftSecond = mml_accounts::where("upline_id",$getAccountNo['account_no'])->where("position",0)->first();


      //third - left - left downline
      $getGenealogyLeftLeftThird = mml_accounts::where("upline_id",$getGenealogyLeftSecond['account_no'])->where("position",0)->first();

      //fourth - left -left downline
      $getGenealogyLeftLeftLeftFourth = mml_accounts::where("upline_id",$getGenealogyLeftLeftThird['account_no'])->where("position",0)->first();

      //fourth - left -left downline
      $getGenealogyLeftLeftRightFourth = mml_accounts::where("upline_id",$getGenealogyLeftLeftThird['account_no'])->where("position",1)->first();



      //third - left - right downline
      $getGenealogyLeftRightThird = mml_accounts::where("upline_id",$getGenealogyLeftSecond['account_no'])->where("position",1)->first();

      //fourth - left -right downline
      $getGenealogyLeftRightLeftFourth = mml_accounts::where("upline_id",$getGenealogyLeftRightThird['account_no'])->where("position",0)->first();

      //fourth - left -left downline
      $getGenealogyLeftRightRightFourth = mml_accounts::where("upline_id",$getGenealogyLeftRightThird['account_no'])->where("position",1)->first();



      //RIGHT - DOWNLINE

      //second - right downline
      $getGenealogyRightSecond = mml_accounts::where("upline_id",$getAccountNo['account_no'])->where("position",1)->first();


      //third - right - left downline
      $getGenealogyRightLeftThird = mml_accounts::where("upline_id",$getGenealogyRightSecond['account_no'])->where("position",0)->first();

      //fourth left -left downline
      $getGenealogyRightLeftLeftFourth = mml_accounts::where("upline_id",$getGenealogyRightLeftThird['account_no'])->where("position",0)->first();

      //fourth left -left downline
      $getGenealogyRightLeftRightFourth = mml_accounts::where("upline_id",$getGenealogyRightLeftThird['account_no'])->where("position",1)->first();


      //third - right - right downline
      $getGenealogyRightRightThird = mml_accounts::where("upline_id",$getGenealogyRightSecond['account_no'])->where("position",1)->first();

      //fourth - left -right downline
      $getGenealogyRightRightLeftFourth = mml_accounts::where("upline_id",$getGenealogyRightRightThird['account_no'])->where("position",0)->first();

      //fourth - left -left downline
      $getGenealogyRightRightRightFourth = mml_accounts::where("upline_id",$getGenealogyRightRightThird['account_no'])->where("position",1)->first();




      return view('genealogy',
      ['getGenealogyLeftSecond'=>$getGenealogyLeftSecond,
       'getGenealogyLeftLeftThird'=>$getGenealogyLeftLeftThird,
       'getGenealogyLeftLeftLeftFourth'=>$getGenealogyLeftLeftLeftFourth,
       'getGenealogyLeftLeftRightFourth'=>$getGenealogyLeftLeftRightFourth,
       'getGenealogyLeftRightThird'=>$getGenealogyLeftRightThird,
       'getGenealogyLeftRightLeftFourth' => $getGenealogyLeftRightLeftFourth,
       'getGenealogyLeftRightRightFourth' => $getGenealogyLeftRightRightFourth,
       'getGenealogyRightSecond' => $getGenealogyRightSecond,
       'getGenealogyRightLeftThird' => $getGenealogyRightLeftThird,
       'getGenealogyRightLeftLeftFourth' => $getGenealogyRightLeftLeftFourth,
       'getGenealogyRightLeftRightFourth' => $getGenealogyRightLeftRightFourth,
       'getGenealogyRightRightThird' => $getGenealogyRightRightThird,
       'getGenealogyRightRightLeftFourth' => $getGenealogyRightRightLeftFourth,
       'getGenealogyRightRightRightFourth' => $getGenealogyRightRightRightFourth
      ]);
    }

    public function getBinaryGenealogy(){

      //head
      $getAccountNo = mml_accounts::where("userid",Auth::user()->id)->first();


      //LEFT DOWNLINE

      //second left downline
      $getGenealogyLeftSecond = mml_accounts::where("upline_id",$getAccountNo['account_no'])->where("position",0)->first();


      //third - left - left downline
      $getGenealogyLeftLeftThird = mml_accounts::where("upline_id",$getGenealogyLeftSecond['account_no'])->where("position",0)->first();

      //fourth - left -left downline
      $getGenealogyLeftLeftLeftFourth = mml_accounts::where("upline_id",$getGenealogyLeftLeftThird['account_no'])->where("position",0)->first();

      //fourth - left -left downline
      $getGenealogyLeftLeftRightFourth = mml_accounts::where("upline_id",$getGenealogyLeftLeftThird['account_no'])->where("position",1)->first();



      //third - left - right downline
      $getGenealogyLeftRightThird = mml_accounts::where("upline_id",$getGenealogyLeftSecond['account_no'])->where("position",1)->first();

      //fourth - left -right downline
      $getGenealogyLeftRightLeftFourth = mml_accounts::where("upline_id",$getGenealogyLeftRightThird['account_no'])->where("position",0)->first();

      //fourth - left -left downline
      $getGenealogyLeftRightRightFourth = mml_accounts::where("upline_id",$getGenealogyLeftRightThird['account_no'])->where("position",1)->first();



      //RIGHT - DOWNLINE

      //second - right downline
      $getGenealogyRightSecond = mml_accounts::where("upline_id",$getAccountNo['account_no'])->where("position",1)->first();


      //third - right - left downline
      $getGenealogyRightLeftThird = mml_accounts::where("upline_id",$getGenealogyRightSecond['account_no'])->where("position",0)->first();

      //fourth left -left downline
      $getGenealogyRightLeftLeftFourth = mml_accounts::where("upline_id",$getGenealogyRightLeftThird['account_no'])->where("position",0)->first();

      //fourth left -left downline
      $getGenealogyRightLeftRightFourth = mml_accounts::where("upline_id",$getGenealogyRightLeftThird['account_no'])->where("position",1)->first();


      //third - right - right downline
      $getGenealogyRightRightThird = mml_accounts::where("upline_id",$getGenealogyRightSecond['account_no'])->where("position",1)->first();

      //fourth - left -right downline
      $getGenealogyRightRightLeftFourth = mml_accounts::where("upline_id",$getGenealogyRightRightThird['account_no'])->where("position",0)->first();

      //fourth - left -left downline
      $getGenealogyRightRightRightFourth = mml_accounts::where("upline_id",$getGenealogyRightRightThird['account_no'])->where("position",1)->first();




      return view('binary-genealogy',
      ['getGenealogyLeftSecond'=>$getGenealogyLeftSecond,
       'getGenealogyLeftLeftThird'=>$getGenealogyLeftLeftThird,
       'getGenealogyLeftLeftLeftFourth'=>$getGenealogyLeftLeftLeftFourth,
       'getGenealogyLeftLeftRightFourth'=>$getGenealogyLeftLeftRightFourth,
       'getGenealogyLeftRightThird'=>$getGenealogyLeftRightThird,
       'getGenealogyLeftRightLeftFourth' => $getGenealogyLeftRightLeftFourth,
       'getGenealogyLeftRightRightFourth' => $getGenealogyLeftRightRightFourth,
       'getGenealogyRightSecond' => $getGenealogyRightSecond,
       'getGenealogyRightLeftThird' => $getGenealogyRightLeftThird,
       'getGenealogyRightLeftLeftFourth' => $getGenealogyRightLeftLeftFourth,
       'getGenealogyRightLeftRightFourth' => $getGenealogyRightLeftRightFourth,
       'getGenealogyRightRightThird' => $getGenealogyRightRightThird,
       'getGenealogyRightRightLeftFourth' => $getGenealogyRightRightLeftFourth,
       'getGenealogyRightRightRightFourth' => $getGenealogyRightRightRightFourth
      ]);
    }
}
