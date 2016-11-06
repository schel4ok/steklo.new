<?php namespace App;

use Kalnoy\Nestedset\Node;

class Category extends Node {

	public $timestamps = false;
	public $test = 23;

    // Get items from category.
    public function faq()
    { return $this->hasMany('App\Faq'); }

    public function furnitura()
    { return $this->hasMany('App\Furnitura'); }

    public function link()
    { return $this->hasMany('App\Link'); }

    public function news()
    { return $this->hasMany('App\News'); }

    public function object()
    { return $this->hasMany('App\Object'); }

    public function page()
    { return $this->hasMany('App\Page'); }

    public function uslugi()
    { return $this->hasMany('App\Uslugi'); }

}
