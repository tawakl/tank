<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= DB::table('users')->where('email','admin@admin.com')->first();

        if (!$user){
            \App\Blog\users\User::create([
                'name' => 'admin',
                'email'=>'admin@admin.com',
                'mobile_number'=>'01211440047',
                'password'=>\Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'admin'
            ]);
        }
    }
}
