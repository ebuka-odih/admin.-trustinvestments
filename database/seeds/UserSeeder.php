<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', '=', 'user@trustinvestmentcap.com')->first();
        if($admin === null){
            DB::table('users')->insert([
                'name' => 'Admin Admin',
                'admin' => 0,
                'email' => 'user@trustinvestmentcap.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('TrustInvestCap'),
            ]);
        }
    }


}
