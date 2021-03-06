<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('users')->truncate();


    	factory(App\User::class)->create([
        	'name' => 'Luis',
        	'email' => 'luis_angel584@hotmail.com',
        	'role' => 'admin',
        	'password' => 'secret'
        	]);
        factory(App\User::class, 49)->create();
    }
}
