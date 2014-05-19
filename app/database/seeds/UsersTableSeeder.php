<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->truncate();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => 1,
				'username' => 'Alex',
				'email' => 'alex.tebbutt@digi-nut.co.uk',
				'password' => '$2y$10$hGbLQZ1JGN2nab9te61pfeJ2aCalDVjbhhmHDin09RobFAPYfqwNe',
				'remember_token' => '',
				'enabled' => 1,
				'role_id' => '1',				
				'created_at' => '2014-04-29 06:42:40',
				'updated_at' => '2014-04-29 06:42:40',
			),
			1 => 
			array (
				'id' => 2,
				'username' => 'Shikha',
				'email' => 'shikha007@hotmail.com',
				'password' => '$2y$10$r9q30TV/ZqNSXCjnoypHFegbpUP5L3Lplk2P.UvDhNPdGdhbWjmBO',
				'remember_token' => '',
				'enabled' => 1,
				'role_id' => '4',
				'created_at' => '2014-04-29 06:42:40',
				'updated_at' => '2014-04-29 06:42:40',
			),
			2 => 
			array (
				'id' => 3,
				'username' => 'Danny',
				'email' => 'danny.bull@digi-nut.co.uk',
				'password' => '$2y$10$/Ct.2JjsQ8YQCVFg3Krd5Of6Ah/GOdY3boQG7wugTtfPpF1qq0YOy',
				'remember_token' => '',
				'enabled' => 1,
				'role_id' => '1',
				'created_at' => '2014-04-29 06:42:40',
				'updated_at' => '2014-04-29 06:42:40',
			),
		));
	}

}
