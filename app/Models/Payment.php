<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['payment_id','payment_method','payment_status'];
    protected $primaryKey = 'payment_id';
    protected $table = 'payment';
}
