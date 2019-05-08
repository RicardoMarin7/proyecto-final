<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array(
            'name'=>'admin',
            'display_name'=>'Administrador',
            'description'=>'Acceso a todo',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ));

        DB::table('roles')->insert(array(
            'name'=>'user',
            'display_name'=>'Usuario',
            'description'=>'Acceso Restringido',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ));
    }
}
