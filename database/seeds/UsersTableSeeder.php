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
        factory(App\User::class, 100)->create();

        App\User::create([

        	'name'=>'alexis',
        	'email'=>'admin@admin.com',
        	'password'=> bcrypt('admin'),
        	'remember_token' => str_random(10),
        ]);
    }
}
