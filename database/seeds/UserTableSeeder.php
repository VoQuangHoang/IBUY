<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Admin',
        	'gender' => 'Nam',
        	'image' => '1608007979.JPG',
        	'email' => 'admin@mail.com',
        	'phone' => '0853344503',
        	'address' => 'Admin',
        	'roles_id' => '1',
        	'password' => '$2y$10$Bod2w7U6ZyJ0ptwt.1uQ0.XbbN8rw7rgEeEFC0o7nDLrDJ9DdAmyi',
        ]);
    }
}
