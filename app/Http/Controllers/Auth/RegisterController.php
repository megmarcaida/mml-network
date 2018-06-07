<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\mml_accounts;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'middlename' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'mobile' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
            'admin' => 0,
            'status' => 1
        ]);

        $account = mml_accounts::create([
          'userid' => $user->id,
          'account_no' => "000000003",
          'sponsor_id' => $data['sponsor_id'],
          'upline_id' => $data['upline_id'],
          'position' => 0,
          'pvpairs' => 0,
          'rightpv' => 0,
          'leftpv' => 0,
          'totaldirect' => 0,
          'rightGroup' => 0,
          'leftGroup' => 0,
          'datetomaintain' => date("Y-m-d h:i:s"),
          'dateentry' => date("Y-m-d h:i:s"),
          'isSeventhPair' => 0,
          'isUpgraded' => 0,
          'status' => 1
        ]);

        return $user;
    }

    public function getSponsor(Request $request)
    {
        if ($request->sponsorid == null){
          return redirect('/login');
        }

        $user = mml_accounts::where('account_no',$request->sponsorid)->join('users','users.id', '=' , 'mml_accounts.userid')->firstOrFail();

        if($user == null){
          return redirect('/login');
        }else{
          $name = $user->firstname . " " . $user->lastname;
          $sponsor_id = $request->sponsorid;
          return view('auth.register',['name' => $name, 'sponsor_id' => $sponsor_id]);
        }
    }

    public function generateAccountNumber() {
      $number = mt_rand(1000000000, 9999999999); // better than rand()

      // call the same function if the barcode exists already
      if (accountNumberExists($number)) {
          return generateAccountNumber();
      }

      // otherwise, it's valid and can be used
      return $number;
    }

    function accountNumberExists($number) {
      // query the database and return a boolean
      // for instance, it might look like this in Laravel
      return mml_accounts::where('account_no','=',$number)->exists();
  }

}
