<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualType extends Model
{
    use HasFactory;

    protected $table = 'virtual_types';
    protected $guarded = false;
}
