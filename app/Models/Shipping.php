<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $timestamps = true;
    protected $fillable = ['shipping_id','shipping_name','shipping_address','shipping_phone','shipping_email','shipping_note'];
    protected $primaryKey = 'shipping_id';
    protected $table = 'shipping';
}
