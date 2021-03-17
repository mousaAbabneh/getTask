<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppCover extends Model
{
    protected $table='app';
    protected $fillable = [
        'id', 'name', 'token','created_at','updated_at',
    ];
}
