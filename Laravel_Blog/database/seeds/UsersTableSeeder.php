<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=4;$i++){
            DB::table('users')->insert([
                'name' => 'User_'.rand(1,4),
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('secret'),
          ]);
        }

        DB::table('users')->insert([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
