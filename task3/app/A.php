<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class A extends Model
{
    protected $table='a';
    protected $fillable = [
        'id', 'awd', 'cod','fees','paid_at',
    ];
}
