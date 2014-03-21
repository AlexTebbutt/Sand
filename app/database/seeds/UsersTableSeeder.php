<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	
		User::truncate();

		User::Create([
			
			'username' => 'Alex',
			'email' => 'alex@ifnotwhynot.com',
			'password' => '1234',
			'active' => TRUE
						
		]);

		User::Create([
			
			'username' => 'Shikha',
			'email' => 'shikha007@hotmail.com',
			'password' => '4321',
			'active' => TRUE
						
		]);

	}

}

?>