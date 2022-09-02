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
        \App\Blog\Testimonials\Testimonial::create([
            'name' => 'ali',
            'description'=>'الراجل ده ميه الميه وشغله عالي اوي'
        ]);

        $user= DB::table('users')->where('email','ali@ali.com')->first();

        if (!$user){
            \App\Blog\users\User::create([
                'name' => 'ali',
                'email'=>'ali@ali.com',
                'mobile_number'=>'01211440047',
                'password'=>\Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'admin'
            ]);
        }
    }
}
