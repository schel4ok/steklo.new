<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Uslugi extends Model {

	protected $table = 'uslugi';
	
    public function category()
    {  return $this->belongsTo('App\Category'); }
    

}
