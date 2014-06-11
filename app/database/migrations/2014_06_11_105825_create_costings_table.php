<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('costings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id');
			$table->integer('paymentphase_id');
			$table->string('reference')->nullable();
			$table->string('link')->nullable();
			$table->decimal('value', 9, 2)->nullable();			
			$table->longtext('note')->nullable();
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
		Schema::drop('costing');
	}

}
