<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterFile;
use App\IncomeSetup;

class MasterFileController extends Controller
{

    public function getInfoMF()
    {
        $getMasterfile = MasterFile::whereId(1)->first();
        $getIncomeSetup = IncomeSetup::whereId(1)->first();
        if($getMasterfile != null){
          return view('admin/master-file',['master_file'=>$getMasterfile, 'income_setup'=>$getIncomeSetup]);
        }
    }

    public function saveMasterFile(Request $request){

      $getMasterfile = MasterFile::whereId(1)->first();

      if($getMasterfile != null){

          $masterfile = MasterFile::whereId(1)->update([
              'company_name' => $request['company_name'],
              'company_abbr' => $request['company_abbr'],
              'company_address' => $request['company_address'],
              'company_contact_no' => $request['company_contact_no'],
              'company_owner' => $request['company_owner'],
              'status' => 1
          ]);

      }else{

            $masterfile = MasterFile::create([
                'company_name' => $request['company_name'],
                'company_abbr' => $request['company_abbr'],
                'company_address' => $request['company_address'],
                'company_contact_no' => $request['company_contact_no'],
                'company_owner' => $request['company_owner'],
                'status' => 1
            ]);

      }
      return redirect('admin/master-file')->with(['message'=>'Successfully updated!','isActive'=>1]);
    }

    public function saveIncomeSetup(Request $request){
      $getIncomeSetup = IncomeSetup::whereId(1)->first();

      if($getIncomeSetup != null){

          $incomesetup = IncomeSetup::whereId(1)->update([
              'sponsor_income' => $request['sponsor_income'],
              'pairing_income' => $request['pairing_income'],
              'direct_income' => $request['direct_income'],
              'indirect_income' => $request['indirect_income'],
              'leadership_income' => $request['leadership_income'],
              'status' => 1
          ]);

      }else{

            $incomesetup = IncomeSetup::create([
                'sponsor_income' => $request['sponsor_income'],
                'pairing_income' => $request['pairing_income'],
                'direct_income' => $request['direct_income'],
                'indirect_income' => $request['indirect_income'],
                'leadership_income' => $request['leadership_income'],
                'status' => 1
            ]);

      }
      return redirect('admin/master-file')->with(['message'=>'Successfully updated!','isActive'=>2]);
    }

}
