<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([

            'name'=>'admin',
            'description'=>'Assigning and modifying the security attributes of a user, role, or rights profile. Creating and modifying rights profiles.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);

        DB::table('roles')->insert([

            'name'=>'student',
            'description'=>'This student role and dont have any specialities',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        
        ]);

    }
}
