<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(['country_id'=>1,'name'=>'Jorge David','email'=>'jorgedjr21@gmail.com','ukey'=>str_random(60),'password'=>Hash::make('210191Jj'),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('users')->insert(['country_id'=>1,'name'=>'Demo User','email'=>'demo@demo.com','ukey'=>str_random(60),'password'=>Hash::make('demo'),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
    }
}
