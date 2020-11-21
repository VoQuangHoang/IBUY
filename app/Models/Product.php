<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'id_category','name_product','price_product','description_product','quantity_product','image_product'
    ];
    protected $primaryKey = 'id_product';
 	protected $table = 'product';
 	public function Category(){
 		return $this->hasMany('App\Models\Category','id_category','id_category');
 	}
}
