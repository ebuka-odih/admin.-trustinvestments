<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', '=', 'admin@trustinvestmentsco.co')->first();
        if($admin === null){
            DB::table('users')->insert([
                'name' => 'Admin Admin',
                'admin' => 1,
                'email' => 'admin@trustinvestmentsco.co',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('TRUSTINVESTMENTsCO'),
            ]);
        }
    }

}
