<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    /**
    * @var string[]
    */
    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];
}
