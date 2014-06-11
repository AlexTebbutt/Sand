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
				'id' => 8,
				'title' => 'Add \'Complete Task\' functionality',
				'note' => 'Style check box next to task
Use AJAX to complete a task once the box is checked
Use AJAX to reload tasks',
				'user_id' => 1,
				'due_date' => NULL,
				'complete' => 0,
				'created_at' => '2014-05-01 08:53:05',
				'updated_at' => '2014-05-01 08:53:05',
			),
			1 => 
			array (
				'id' => 12,
				'title' => 'Build a user show page',
				'note' => 'Display all current users. Link through to edit a specific user. Super admins only should have access to this.',
				'user_id' => 1,
				'due_date' => NULL,
				'complete' => 0,
				'created_at' => '2014-05-09 22:38:26',
				'updated_at' => '2014-05-09 22:40:13',
			),
			2 => 
			array (
				'id' => 14,
				'title' => 'Build \'Create a new user\' page',
				'note' => '',
				'user_id' => 1,
				'due_date' => NULL,
				'complete' => 0,
				'created_at' => '2014-05-09 22:39:52',
				'updated_at' => '2014-05-09 22:40:02',
			),
			3 => 
			array (
				'id' => 15,
				'title' => 'Build a Roles management page',
				'note' => '',
				'user_id' => 1,
				'due_date' => NULL,
				'complete' => 0,
				'created_at' => '2014-05-09 22:40:26',
				'updated_at' => '2014-05-09 22:40:26',
			),
		));
	}

}
