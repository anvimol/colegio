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
        factory(App\User::class)->create([
        	'name' => 'anvimol', 
        	'email' => 'anvimol@gmail.com', 
        	'password' => bcrypt('Marron6966'),
        	'role_id' => 1,
        ]);

        factory(App\User::class, 100)->create();
    }
}
