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
        App\User::create([
			'name' => 'admin',
			'password' => bcrypt('admin'),
			'email' => 'forumadmin@dev.com',
			'admin' => 1,
			'avatar' => asset('/avatars/avatar.png')
		
		]);
		
		App\User::create([
			'name' => 'Lola doe',
			'password' => bcrypt('password'),
			'email' => 'loladoe@dev.com',
			'avatar' => asset('/avatars/avatar.png')
		
		]);
    }
}
