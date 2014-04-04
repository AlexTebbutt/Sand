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
				'created_at' => '2014-04-02 15:45:02',
				'updated_at' => '2014-04-03 08:58:37',
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
				'created_at' => '2014-04-02 15:45:02',
				'updated_at' => '2014-04-03 08:58:27',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'TBWA',
				'address' => '76 - 80 Whitfield St.,London',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 10,
				'created_at' => '2014-04-02 15:45:02',
				'updated_at' => '2014-04-02 15:45:02',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'Four23',
				'address' => 'Berry House, Berry Street',
				'post_code' => 'EC1V 0AA',
				'main_phone' => '',
				'importance' => 10,
				'created_at' => '2014-04-02 15:45:02',
				'updated_at' => '2014-04-02 15:45:02',
			),
			4 => 
			array (
				'id' => 5,
				'name' => 'Coppafeel',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 10,
				'created_at' => '2014-04-03 16:21:17',
				'updated_at' => '2014-04-03 16:21:17',
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
				'created_at' => '2014-04-03 16:22:21',
				'updated_at' => '2014-04-03 16:22:21',
			),
			6 => 
			array (
				'id' => 7,
				'name' => 'Ibiza Rocks',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 8,
				'created_at' => '2014-04-03 16:22:44',
				'updated_at' => '2014-04-03 16:22:44',
			),
			7 => 
			array (
				'id' => 8,
				'name' => 'Sophie Edginton',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 8,
				'created_at' => '2014-04-03 16:22:55',
				'updated_at' => '2014-04-03 16:22:55',
			),
			8 => 
			array (
				'id' => 9,
				'name' => 'Breed',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 7,
				'created_at' => '2014-04-03 16:23:06',
				'updated_at' => '2014-04-03 16:23:06',
			),
			9 => 
			array (
				'id' => 10,
				'name' => 'Lima London',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 7,
				'created_at' => '2014-04-03 16:23:20',
				'updated_at' => '2014-04-03 16:24:25',
			),
			10 => 
			array (
				'id' => 11,
				'name' => 'S&H',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 10,
				'created_at' => '2014-04-03 16:23:28',
				'updated_at' => '2014-04-03 16:23:28',
			),
			11 => 
			array (
				'id' => 12,
				'name' => 'Causeway',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 9,
				'created_at' => '2014-04-03 16:23:43',
				'updated_at' => '2014-04-03 16:23:43',
			),
			12 => 
			array (
				'id' => 13,
				'name' => 'Leapfrog',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 8,
				'created_at' => '2014-04-03 16:24:21',
				'updated_at' => '2014-04-03 16:24:21',
			),
			13 => 
			array (
				'id' => 14,
				'name' => 'GPStudio',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => 9,
				'created_at' => '2014-04-03 16:24:40',
				'updated_at' => '2014-04-03 16:24:40',
			),
			14 => 
			array (
				'id' => 15,
				'name' => 'Cue & Co',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => NULL,
				'created_at' => '2014-04-03 16:25:02',
				'updated_at' => '2014-04-03 16:25:02',
			),
			15 => 
			array (
				'id' => 16,
				'name' => 'Cavo Alkyoni',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => NULL,
				'created_at' => '2014-04-03 16:25:22',
				'updated_at' => '2014-04-03 16:25:22',
			),
			16 => 
			array (
				'id' => 17,
				'name' => 'RSBP',
				'address' => '',
				'post_code' => '',
				'main_phone' => '',
				'importance' => NULL,
				'created_at' => '2014-04-03 16:25:32',
				'updated_at' => '2014-04-03 16:25:32',
			),
		));
	}

}
