<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virtual extends Model
{
    use HasFactory;

    protected $table = 'virtuals';
    protected $guarded = false;
}
