<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Kalnoy\Nestedset\NestedSet;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function($table)
		{
			$table->increments('id')->unsigned();
			NestedSet::columns($table);
		//	вместо NestedSet::columns($table); можно использовать 3 такие столбца
		//	$table->unsignedInteger('_lft');
		//	$table->unsignedInteger('_rgt');
		//	$table->tinyInteger('parent_id')->unsigned()->nullable();
			$table->tinyInteger('level')->unsigned();
			$table->string('type', 20);
			$table->string('menutype', 20);
			$table->string('title', 100);
			$table->string('sef', 50)->nullable();
			$table->string('path', 200)->nullable();
			$table->string('class', 50);
			$table->text('body')->nullable();
			$table->string('image', 255)->nullable();
			$table->string('metatitle', 255)->nullable();
			$table->string('metakey', 255)->nullable();
			$table->string('metadesc', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}

}