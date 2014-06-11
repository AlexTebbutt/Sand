<?php

class ClientsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('clients')->truncate();
        
		\DB::table('clients')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Draft FCB',
				'address' => '84 Eccleston Square,
London,
UK',
				'post_code' => 'SW1V 1PX',
				'main_phone' => '',
				'importance' => 10,
				'created_at' => '2014-04-03 12:45:02',
				'updated_at' => '2014-04-04 05:58:37',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Start JG',
				'address' => 'An Address,
A street',
				'post_code' => 'SW87',
				'main_phone' => '',
				'importance' => 10,
				'created_at' => '2014-04-03 12:45:02',
				'updated_at' => '2014-04-04 05:58:27',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'TBWA',
				'address' => '76 - 80 Whitfield St.,London',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 10,
				'created_at' => '2014-04-03 12:45:02',
				'updated_at' => '2014-04-03 12:45:02',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'Four23',
				'address' => 'Berry House, Berry Street',
				'post_code' => 'EC1V 0AA',
				'main_phone' => '',
				'importance' => 10,
				'created_at' => '2014-04-03 12:45:02',
				'updated_at' => '2014-04-03 12:45:02',
			),
			4 => 
			array (
				'id' => 5,
				'name' => 'Coppafeel',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 10,
				'created_at' => '2014-04-04 13:21:17',
				'updated_at' => '2014-04-04 13:21:17',
			),
			5 => 
			array (
				'id' => 6,
				'name' => 'Jam',
				'address' => '60 Great Portland Street,
London',
				'post_code' => 'W1W 7RT',
				'main_phone' => '',
				'importance' => 10,
				'created_at' => '2014-04-04 13:22:21',
				'updated_at' => '2014-04-04 13:22:21',
			),
			6 => 
			array (
				'id' => 7,
				'name' => 'Ibiza Rocks',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 8,
				'created_at' => '2014-04-04 13:22:44',
				'updated_at' => '2014-04-04 13:22:44',
			),
			7 => 
			array (
				'id' => 8,
				'name' => 'Sophie Edginton',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 8,
				'created_at' => '2014-04-04 13:22:55',
				'updated_at' => '2014-04-04 13:22:55',
			),
			8 => 
			array (
				'id' => 9,
				'name' => 'Breed',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 7,
				'created_at' => '2014-04-04 13:23:06',
				'updated_at' => '2014-04-04 13:23:06',
			),
			9 => 
			array (
				'id' => 10,
				'name' => 'Lima London',
				'address' => '31 Rathbone Place
London W1T 1JH
Restaurant : 0203 002 2640
Head Office: 0207 0258 008',
				'post_code' => 'W1T 1JH',
				'main_phone' => '0203 002 2640',
				'importance' => 7,
				'created_at' => '2014-04-04 13:23:20',
				'updated_at' => '2014-04-10 11:52:26',
			),
			10 => 
			array (
				'id' => 11,
				'name' => 'S&H',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 10,
				'created_at' => '2014-04-04 13:23:28',
				'updated_at' => '2014-04-04 13:23:28',
			),
			11 => 
			array (
				'id' => 12,
				'name' => 'Causeway',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 9,
				'created_at' => '2014-04-04 13:23:43',
				'updated_at' => '2014-04-04 13:23:43',
			),
			12 => 
			array (
				'id' => 13,
				'name' => 'Leapfrog',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 8,
				'created_at' => '2014-04-04 13:24:21',
				'updated_at' => '2014-04-04 13:24:21',
			),
			13 => 
			array (
				'id' => 14,
				'name' => 'GPStudio',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 9,
				'created_at' => '2014-04-04 13:24:40',
				'updated_at' => '2014-04-04 13:24:40',
			),
			14 => 
			array (
				'id' => 15,
				'name' => 'Cue & Co',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => NULL,
				'created_at' => '2014-04-04 13:25:02',
				'updated_at' => '2014-04-04 13:25:02',
			),
			15 => 
			array (
				'id' => 16,
				'name' => 'Cavo Alkyoni',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => NULL,
				'created_at' => '2014-04-04 13:25:22',
				'updated_at' => '2014-04-04 13:25:22',
			),
			16 => 
			array (
				'id' => 17,
				'name' => 'RSBP',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => NULL,
				'created_at' => '2014-04-04 13:25:32',
				'updated_at' => '2014-04-04 13:25:32',
			),
			17 => 
			array (
				'id' => 18,
				'name' => 'Atticus Associates',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 0,
				'created_at' => '2014-04-10 11:20:30',
				'updated_at' => '2014-04-10 11:20:30',
			),
			18 => 
			array (
				'id' => 19,
				'name' => 'IOVOX',
				'address' => '99c Talbot Road
London, W11 2AT',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 0,
				'created_at' => '2014-04-10 11:20:40',
				'updated_at' => '2014-04-10 11:20:40',
			),
			19 => 
			array (
				'id' => 20,
				'name' => 'Fox Collective',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 0,
				'created_at' => '2014-04-12 09:13:11',
				'updated_at' => '2014-04-12 09:13:11',
			),
			20 => 
			array (
				'id' => 21,
				'name' => 'INITIALS Marketing',
				'address' => '',
				'post_code' => '',
				'main_phone' => '020 7747 7400',
				'importance' => 0,
				'created_at' => '2014-04-17 12:34:01',
				'updated_at' => '2014-04-17 12:34:01',
			),
			21 => 
			array (
				'id' => 22,
				'name' => 'Medway Council',
				'address' => 'Gun Wharf
Dock Road
Chatham
Kent ',
				'post_code' => 'ME4 4TR',
				'main_phone' => '01634 337083',
				'importance' => 9,
				'created_at' => '2014-04-30 07:18:21',
				'updated_at' => '2014-04-30 07:18:21',
			),
			22 => 
			array (
				'id' => 23,
				'name' => 'Home Associates',
				'address' => 'Bellissimoto
36 Raymouth Road
London ',
				'post_code' => 'SE16 2DB',
				'main_phone' => '020 7183 3223',
				'importance' => 2,
				'created_at' => '2014-05-07 20:28:13',
				'updated_at' => '2014-05-07 20:28:13',
			),
			23 => 
			array (
				'id' => 24,
				'name' => 'Not Known',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 0,
				'created_at' => '2014-05-07 20:30:02',
				'updated_at' => '2014-05-07 20:30:02',
			),
			24 => 
			array (
				'id' => 25,
				'name' => 'Achieve Events',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 10,
				'created_at' => '2014-05-07 23:08:09',
				'updated_at' => '2014-05-07 23:08:09',
			),
			25 => 
			array (
				'id' => 26,
			'name' => 'Northern Ireland Rare Disease Partnership (NIRDP)',
				'address' => '6 Ava Crescent
Belfast',
				'post_code' => 'BT7 3DU',
				'main_phone' => '',
				'importance' => 7,
				'created_at' => '2014-05-27 06:50:12',
				'updated_at' => '2014-05-27 06:50:12',
			),
			26 => 
			array (
				'id' => 27,
				'name' => 'Colorido Studios Ltd',
				'address' => '5th floor
28 Throgmorten Street
London',
				'post_code' => 'EC2N 2AN',
				'main_phone' => '',
				'importance' => 9,
				'created_at' => '2014-05-29 21:38:23',
				'updated_at' => '2014-05-29 21:38:23',
			),
			27 => 
			array (
				'id' => 28,
				'name' => 'Ragdoll Productions',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 10,
				'created_at' => '2014-06-10 14:01:05',
				'updated_at' => '2014-06-10 14:01:05',
			),
		));
	}

}
