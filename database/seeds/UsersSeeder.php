<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'name'=>'admin',
            'surname'=>'admin',
            'email'=>'admin@admin.com',
            'role_id'=>'1',
            'email_verified_at'=>Carbon::now(),
            'password'=>Hash::make('MexicoMereceUnCambio'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ));
    }
}
