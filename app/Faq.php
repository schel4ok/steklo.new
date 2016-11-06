<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model {

	protected $table = 'faq';
	
    public function category()
    {  return $this->belongsTo('App\Category'); }
}
