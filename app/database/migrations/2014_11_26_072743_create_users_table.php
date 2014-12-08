<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

			//llaves foraneas
			$table->integer('department_id')->unsigned();
			$table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');;

			$table->integer('cost_center_id')->unsigned();
			$table->foreign('cost_center_id')->references('id')->on('cost_centers')->onDelete('cascade');;

			$table->string('username');
			$table->string('password');
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
		Schema::drop('users');
	}

}
