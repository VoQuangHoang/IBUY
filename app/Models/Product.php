<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'Id_category','Name_product','Price_product','Description_product','Quantity_product','Image_product'
    ];
    protected $primaryKey = 'id_product';
 	protected $table = 'product';
 	public function Category(){
 		return $this->hasMany('App\Models\Category','Id_category','id_category');
 	}
}
