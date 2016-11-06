<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		$this->call('XLSSeeder');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
