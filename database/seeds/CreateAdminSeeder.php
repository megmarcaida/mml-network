<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'firstname' => 'admin',
          'middlename' => '',
          'lastname' => '',
          'username' => 'admin',
          'email' => 'marcaidameg@gmail.com',
          'password' => bcrypt('qweqwe'),
          'admin' => 1,
          'mobile' => '+639477277091',
          'status' => 1,
      ]);

      DB::table('mml_accounts')->insert([
        'userid' => DB::getPdo()->lastInsertId(),
        'account_no' => '0000082894',
        'sponsor_id' => '0000000000',
        'upline_id' => '0000000000',
        'position' => 0,
        'pvpairs' => 0,
        'rightpv' => 0,
        'leftpv' =>0,
        'totaldirect' => 0,
        'rightGroup' => 0,
        'leftGroup' => 0,
        'datetomaintain' => date("Y-m-d h:i:s"),
        'dateentry' => date("Y-m-d h:i:s"),
        'isSeventhPair' => 0,
        'isUpgraded' => 0,
        'status' => 1
      ]);
    }
}
