<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('TasksTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('ClientsTableSeeder');		
		$this->call('ContactsTableSeeder');
		$this->call('PhasesTableSeeder');
		$this->call('ProjectsTableSeeder');
	}

}