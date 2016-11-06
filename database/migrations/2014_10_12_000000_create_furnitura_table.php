<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFurnituraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('furnitura', function(Blueprint $table)
		{
			$table->increments('No')->unsigned();
			$table->string('id')->unique();
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');
			$table->integer('cat2_id')->unsigned()->nullable();
			$table->foreign('cat2_id')->references('id')->on('categories');
			$table->string('title', 255);
			$table->string('sef', 255);
			$table->text('introtext')->nullable();
			$table->text('fulltext')->nullable();
			$table->string('artikul', 255);
			$table->string('otdelka', 255)->nullable();
			$table->string('pcs', 255);
			$table->text('description')->nullable();
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
		Schema::drop('furnitura');
	}

}
