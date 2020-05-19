<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name'=>'Ali',
            'email'=>'admin@test.com',
            'password' => bcrypt('12345678'),
            'role_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);

        DB::table('users')->insert([

            'name'=>'Abu',
            'email'=>'student@test.com',
            'password' => bcrypt('12345678'),
            'role_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        
        ]);

        DB::table('users')->insert([

            'name'=>'Atan',
            'email'=>'staff@test.com',
            'password' => bcrypt('12345678'),
            'role_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        
        ]);
    }
}
