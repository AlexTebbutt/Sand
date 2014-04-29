<?php

class TasksTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tasks')->truncate();
        
		\DB::table('tasks')->insert(array (
			0 => 
			array (
				'id' => 1,
				'title' => 'Finish To Do Module',
				'note' => 'Some notes relating to what I need to do to finish this',
				'user_id' => 1,
				'due_date' => '2014-05-12 13:01:00',
				'complete' => 0,
				'created_at' => '2014-04-29 01:42:40',
				'updated_at' => '2014-04-29 01:42:40',
			),
			1 => 
			array (
				'id' => 2,
				'title' => 'Make a nice Coffee',
				'note' => 'Mocha please, no sugar',
				'user_id' => 1,
				'due_date' => NULL,
				'complete' => 0,
				'created_at' => '2014-04-29 01:42:40',
				'updated_at' => '2014-04-29 01:42:40',
			),
			2 => 
			array (
				'id' => 3,
				'title' => 'Plan the wedding',
				'note' => 'Arrrggghhh, too much to do!!!',
				'user_id' => 2,
				'due_date' => NULL,
				'complete' => 0,
				'created_at' => '2014-04-29 01:42:40',
				'updated_at' => '2014-04-29 01:42:40',
			),
			3 => 
			array (
				'id' => 4,
				'title' => 'Make a wedding music list',
				'note' => 'Lots of songs!!',
				'user_id' => 2,
				'due_date' => NULL,
				'complete' => 0,
				'created_at' => '2014-04-29 01:42:40',
				'updated_at' => '2014-04-29 01:42:40',
			),
		));
	}

}
