<?php

class TasksTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	
		Task::truncate();

		Task::Create([
			
			'title' => 'Finish To Do Module',
			'note' => 'Some notes relating to what I need to do to finish this',
			'user_id' => '1',
			'due_date' => '2014-05-12 13:01:00',
			'complete' => FALSE	
			
		]);

		Task::Create([
			
			'title' => 'Make a nice Coffee',
			'note' => 'Mocha please, no sugar',
			'user_id' => '1',	
			'complete' => FALSE
						
		]);

		Task::Create([
			
			'title' => 'Plan the wedding',
			'note' => 'Arrrggghhh, too much to do!!!',
			'user_id' => '2',	
			'complete' => FALSE
						
		]);

		Task::Create([
			
			'title' => 'Make a wedding music list',
			'note' => 'Lots of songs!!',
			'user_id' => '2',	
			'complete' => FALSE
						
		]);

	}

}

?>