<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('links', function(Blueprint $table)
		{
        $table->increments('id');
        $table->integer('category_id')->unsigned();
        $table->foreign('category_id')->references('id')->on('categories');
        $table->string('title', 255);
        $table->string('url', 255);
        $table->string('sef', 255)->nullable();
        $table->text('description')->nullable();
        $table->tinyInteger('version');
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
		Schema::drop('links');
	}

}
