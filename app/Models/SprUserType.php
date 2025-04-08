<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SprUserType extends Model
{
   protected $table = 'spr_users_types';
    protected $fillable = ['id', 'type', 'description'];
}
