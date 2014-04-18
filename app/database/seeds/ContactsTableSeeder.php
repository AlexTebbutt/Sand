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
			10 => 
			array (
				'id' => 11,
				'client_id' => 15,
				'name' => 'Zena Bentzen',
				'role' => 'Account Manager',
				'email' => 'zena@cuedevelopments.co.uk',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-09 13:58:29',
				'updated_at' => '2014-04-09 13:58:29',
			),
			11 => 
			array (
				'id' => 12,
				'client_id' => 7,
				'name' => 'Michael Fensom',
				'role' => 'Project Manager',
				'email' => 'michael.fensom@ibizarocks.com',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-09 14:11:50',
				'updated_at' => '2014-04-09 14:11:50',
			),
			12 => 
			array (
				'id' => 13,
				'client_id' => 13,
				'name' => 'Ben Potter',
				'role' => 'Commercial Director',
				'email' => 'Ben.Potter@Leapfrogg.co.uk',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-09 14:18:45',
				'updated_at' => '2014-04-09 14:18:45',
			),
			13 => 
			array (
				'id' => 14,
				'client_id' => 13,
				'name' => 'Anna Taylor',
				'role' => '',
				'email' => 'Anna.Taylor@Leapfrogg.co.uk',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-09 14:19:08',
				'updated_at' => '2014-04-09 14:19:08',
			),
			14 => 
			array (
				'id' => 15,
				'client_id' => 14,
				'name' => 'Chris Poulton',
				'role' => 'Director / Owner',
				'email' => 'Chris@gpstudio.uk.com',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-09 14:22:13',
				'updated_at' => '2014-04-09 14:22:13',
			),
			15 => 
			array (
				'id' => 16,
				'client_id' => 16,
				'name' => 'Jo Hughes',
				'role' => '',
				'email' => 'jo@skoposdesign.com',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-09 14:22:43',
				'updated_at' => '2014-04-09 14:22:43',
			),
			16 => 
			array (
				'id' => 17,
				'client_id' => 17,
				'name' => 'Rachel Carless',
				'role' => '',
				'email' => 'rachel.carless@rspb.org.uk',
				'main_phone' => '01273 763 374',
				'mobile_phone' => '',
				'created_at' => '2014-04-09 14:23:14',
				'updated_at' => '2014-04-09 14:23:14',
			),
			17 => 
			array (
				'id' => 18,
				'client_id' => 2,
				'name' => 'Mark Moses',
				'role' => 'Senior Account Manager',
				'email' => 'mark.moses@startjg.com',
				'main_phone' => '020 7269 0101',
				'mobile_phone' => '07715 291997',
				'created_at' => '2014-04-09 14:23:59',
				'updated_at' => '2014-04-09 14:23:59',
			),
			18 => 
			array (
				'id' => 19,
				'client_id' => 19,
				'name' => 'Ryan Gallagher',
				'role' => 'CEO',
				'email' => 'ryan@iovox.com',
				'main_phone' => '020 7099 1077',
				'mobile_phone' => '',
				'created_at' => '2014-04-09 14:24:41',
				'updated_at' => '2014-04-09 14:24:41',
			),
			19 => 
			array (
				'id' => 20,
				'client_id' => 18,
				'name' => 'Debbie J Cole',
				'role' => '',
				'email' => 'debbie.jcole@atticus-associates.com',
				'main_phone' => '',
				'mobile_phone' => '07786 802 790',
				'created_at' => '2014-04-09 14:25:07',
				'updated_at' => '2014-04-09 14:25:07',
			),
			20 => 
			array (
				'id' => 21,
				'client_id' => 10,
				'name' => 'Justine Henry',
				'role' => 'Marketing Coordinator',
				'email' => 'justine@limalondon.com',
				'main_phone' => '0203 002 2640',
				'mobile_phone' => '',
				'created_at' => '2014-04-09 14:51:53',
				'updated_at' => '2014-04-09 14:51:53',
			),
			21 => 
			array (
				'id' => 22,
				'client_id' => 11,
				'name' => 'Mark Gledhill',
				'role' => '',
				'email' => 'mark.gledhill@sudler.com',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-09 14:57:16',
				'updated_at' => '2014-04-09 14:57:16',
			),
			22 => 
			array (
				'id' => 23,
				'client_id' => 1,
				'name' => 'Vishal Raval',
				'role' => 'Project Manager',
				'email' => 'vishal.ravel@fcbinferno.com',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-09 15:03:20',
				'updated_at' => '2014-04-09 15:03:20',
			),
			23 => 
			array (
				'id' => 24,
				'client_id' => 2,
				'name' => 'Tom Lowndes',
				'role' => 'Senior Producer',
				'email' => 'tom.lowndes@startjg.com',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-09 15:07:45',
				'updated_at' => '2014-04-09 15:07:45',
			),
			24 => 
			array (
				'id' => 25,
				'client_id' => 11,
				'name' => 'Ruari Burgham',
				'role' => '',
				'email' => 'ruari.burgham@sudler.com',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-10 09:28:46',
				'updated_at' => '2014-04-17 15:50:56',
			),
			25 => 
			array (
				'id' => 26,
				'client_id' => 20,
				'name' => 'Tony Fox',
				'role' => '',
				'email' => 'tony@unknown.com',
				'main_phone' => '',
				'mobile_phone' => '',
				'created_at' => '2014-04-10 12:37:49',
				'updated_at' => '2014-04-10 12:37:49',
			),
			26 => 
			array (
				'id' => 27,
				'client_id' => 21,
				'name' => 'Initials Marketing Person',
				'role' => '',
				'email' => 'info@initialsmarketing.co.uk',
				'main_phone' => '020 7747 7400',
				'mobile_phone' => '',
				'created_at' => '2014-04-16 15:34:35',
				'updated_at' => '2014-04-16 15:34:35',
			),
		));
	}

}
