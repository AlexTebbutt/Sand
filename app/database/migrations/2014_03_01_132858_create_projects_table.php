<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id');
			$table->integer('contact_id');
			$table->string('name');
			$table->date('start_date')->nullable();			
			$table->date('due_date')->nullable();
			$table->date('golive_date')->nullable();
			$table->integer('likelihood')->nullable();
			$table->string('resource')->nullable();
			$table->integer('projectphase_id');
			$table->integer('percentage_complete')->default('0');
			$table->string('estimate_number')->nullable();
			$table->string('estimate_link')->nullable();
			$table->string('invoice_number')->nullable();
			$table->string('invoice_link')->nullable();
			$table->integer('paymentphase_id')->default(1);
			$table->decimal('value', 9, 2)->nullable();
			$table->integer('estimated_development_time')->nullable();
			$table->integer('actual_development_time')->nullable();
			$table->date('completed_date')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
