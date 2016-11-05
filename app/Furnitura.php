<?php 

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Furnitura extends Model {

	use Searchable;

	protected $table = 'furnitura';
    

}
