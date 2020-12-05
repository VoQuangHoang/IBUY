<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    
    protected $fillable = ['order_detail_id','order_id','product_id','product_name','product_price','product_sales_quantity'];
    protected $primaryKey = 'order_detail_id';
    protected $table = 'order_detail';
}
