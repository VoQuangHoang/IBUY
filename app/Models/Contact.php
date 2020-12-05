<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = true;
    protected $fillable = ['contact_id','contact_name','contact_email','contact_phone','contact_message'];
    protected $primaryKey = 'contact_id';
    protected $table = 'contact';
}