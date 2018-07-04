<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserInformation;
use App\mml_accounts;

use Auth;

class UsersController extends Controller
{
  public function index(){
    $user = User::where('users.id',Auth::user()->id)->join('mml_accounts','users.id','=','mml_accounts.userid')->first();
    $getAccount = mml_accounts::where('userid',Auth::user()->id)->first();
    $accounts = mml_accounts::where('sponsor_id',$getAccount['account_no'])->join('users', 'mml_accounts.userid','=','users.id')->get();

    $userInfo = UserInformation::whereId(Auth::user()->id)->first();
    if($userInfo == null){
      return view('profile', ['user'=>$user,'userInfo'=>$userInfo,'message'=>'','error'=>'Please set a user information.','accounts'=>$accounts]);
    }

    return view('profile', ['user'=>$user,'userInfo'=>$userInfo,'message'=>'','error'=>'','accounts'=>$accounts]);
  }

  public function updateProfile(Request $request){

    $user = User::whereId(Auth::user()->id)->first();
    $getAccount = mml_accounts::where('userid',Auth::user()->id)->first();
    $accounts = mml_accounts::where('sponsor_id',$getAccount['account_no'])->get();
    $userInfo = UserInformation::whereId(Auth::user()->id)->first();

    User::whereId(Auth::user()->id)->update([
        'firstname' => $request['firstname'],
        'middlename' => $request['middlename'],
        'lastname' => $request['lastname'],
        'username' => $request['username'],
        'email' => $request['email'],
        'mobile' => $request['mobile'],
        'status' => 1
    ]);


    if($userInfo != null){

        UserInformation::whereId(Auth::user()->id)->update([
            'address' => $request['address'],
            'city' => $request['city'],
            'country' => $request['country'],
            'postal_code' => $request['postal_code'],
            'about_me' => $request['about_me'],
            'status' => 1
        ]);
        return view('profile')->with(['user'=>$user,'userInfo'=>$userInfo,'message'=>'User information successfully updated!','error'=>'','accounts'=>$accounts]);
    }else{

          UserInformation::create([
              'userid' => Auth::user()->id,
              'address' => $request['address'],
              'city' => $request['city'],
              'country' => $request['country'],
              'postal_code' => $request['postal_code'],
              'about_me' => $request['about_me'],
              'status' => 1
          ]);
          $userInfo = UserInformation::whereId(Auth::user()->id)->first();
          return view('profile')->with(['user'=>$user,'userInfo'=>$userInfo,'message'=>'User information successfully added!','error'=>'','accounts'=>$accounts]);
    }

    //return redirect('admin/master-file')->with(['message'=>'Successfully updated!','isActive'=>1]);
  }
}
