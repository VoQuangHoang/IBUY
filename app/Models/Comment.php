<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['id_comment','id_user','id_product','content'];
    protected $primaryKey = 'id_comment';
    protected $table = 'comments';
}
