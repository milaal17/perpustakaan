<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'visit_date',
    ];
}
