<?php

class ContactsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('contacts')->truncate();
        
		\DB::table('contacts')->insert(array (
			0 => 
			array (
				'id' => 1,
				'client_id' => 6,
				'name' => 'Rob Kent',
				'role' => 'Senior Project Manager',
				'email' => 'Rob.Kent@spreadingjam.com',
				'main_phone' => '020 3128 6886',
				'mobile_phone' => '',
				'created_at' => '2014-04-03 16:32:34',
				'updated_at' => '2014-04-03 16:32:34',
			),
			1 => 
			array (
				'id' => 2,
				'client_id' => 6,
				'name' => 'Seb Carder',
				'role' => '',
				'email' => 'Sebastian.Carder@spreadingjam.com',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-03 16:32:57',
				'updated_at' => '2014-04-03 16:37:35',
			),
			2 => 
			array (
				'id' => 3,
				'client_id' => 3,
				'name' => 'Natalie Lennon',
				'role' => 'Account Executive',
				'email' => 'natalie.lennon@tbwa.com',
				'main_phone' => '020 7573 6509',
				'mobile_phone' => '',
				'created_at' => '2014-04-03 16:33:29',
				'updated_at' => '2014-04-03 16:37:41',
			),
			3 => 
			array (
				'id' => 4,
				'client_id' => 3,
				'name' => 'Olga Bortkevica',
				'role' => 'Account Manager',
				'email' => 'olga.bortkevica@tbwa.com',
				'main_phone' => '020 7573 6678',
				'mobile_phone' => '',
				'created_at' => '2014-04-03 16:38:36',
				'updated_at' => '2014-04-03 16:38:36',
			),
			4 => 
			array (
				'id' => 5,
				'client_id' => 8,
				'name' => 'Sophie Edginton',
				'role' => 'CEO',
				'email' => 'svedginton@hotmail.com',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-03 16:39:04',
				'updated_at' => '2014-04-03 16:39:04',
			),
			5 => 
			array (
				'id' => 6,
				'client_id' => 4,
				'name' => 'Sinead McCarthy',
				'role' => 'Digital Project Manager',
				'email' => 'sinead@four23.net',
				'main_phone' => '020 7253 7219',
				'mobile_phone' => '',
				'created_at' => '2014-04-03 18:20:37',
				'updated_at' => '2014-04-03 18:20:37',
			),
			6 => 
			array (
				'id' => 7,
				'client_id' => 5,
				'name' => 'Maren Hallenga',
				'role' => 'CEO',
				'email' => 'maren@coppafeel.org',
				'main_phone' => '01872 519239',
				'mobile_phone' => '',
				'created_at' => '2014-04-03 19:06:51',
				'updated_at' => '2014-04-03 19:06:51',
			),
			7 => 
			array (
				'id' => 8,
				'client_id' => 9,
				'name' => 'Olivia Triggs',
				'role' => '',
				'email' => 'olivia@breedlondon.com',
				'main_phone' => '020 7269 0196',
				'mobile_phone' => '0777 599 2006',
				'created_at' => '2014-04-03 21:22:20',
				'updated_at' => '2014-04-03 21:22:20',
			),
			8 => 
			array (
				'id' => 9,
				'client_id' => 11,
				'name' => 'Julian Wakely',
				'role' => 'Head of Interactive',
				'email' => 'Julian.Wakeley@sudler.com',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-03 21:22:52',
				'updated_at' => '2014-04-03 21:22:52',
			),
			9 => 
			array (
				'id' => 10,
				'client_id' => 12,
				'name' => 'Garry Monaghan',
				'role' => 'CEO',
				'email' => 'garrypmonaghan@gmail.com',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-03 21:23:22',
				'updated_at' => '2014-04-03 21:23:22',
			),
		));
	}

}
