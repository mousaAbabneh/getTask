<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class S extends Model
{
    protected $table='S';
    protected $fillable = [
        'id', 'awd', 'cod','fees','paid_at',
    ];
}
