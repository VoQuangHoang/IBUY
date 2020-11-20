<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'name_category','image_category'
    ];
    protected $primaryKey = 'id_category';
 	protected $table = 'categories';
 	public function Product(){
 		return $this->hasMany('App\Models\Product','id_category','id_category');
 	}
}
