<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('objects', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');
			$table->string('title', 255);
			$table->string('sef', 255);
			$table->text('introtext')->nullable();
			$table->text('fulltext')->nullable();
			$table->string('image', 255)->nullable();
			$table->string('metatitle', 255)->nullable();
			$table->string('metakey', 255)->nullable();
			$table->string('metadesc', 255)->nullable();
			$table->integer('hits');
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
		Schema::drop('objects');
	}

}
