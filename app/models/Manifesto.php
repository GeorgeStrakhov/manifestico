<?php

class Manifesto extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function tags()
	{
		return $this->belongsToMany('Tag');
	}

}