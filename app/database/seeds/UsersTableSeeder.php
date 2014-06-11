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
				'role_id' => 1,
				'last_login' => '2014-06-06 13:02:02',
				'enabled' => 1,
				'remember_token' => 'oN5MgND3miAfjze7tciiOJV6XsokkmHn1eBBaMFU3jrPy9xQ416MlcwUvCIn',
				'created_at' => '2014-04-29 16:42:40',
				'updated_at' => '2014-06-06 17:02:02',
			),
			1 => 
			array (
				'id' => 3,
				'username' => 'Danny',
				'email' => 'danny.bull@digi-nut.co.uk',
				'password' => '$2y$10$/Ct.2JjsQ8YQCVFg3Krd5Of6Ah/GOdY3boQG7wugTtfPpF1qq0YOy',
				'role_id' => 1,
				'last_login' => '0000-00-00 00:00:00',
				'enabled' => 1,
				'remember_token' => '',
				'created_at' => '2014-04-29 16:42:40',
				'updated_at' => '2014-04-29 16:42:40',
			),
		));
	}

}
