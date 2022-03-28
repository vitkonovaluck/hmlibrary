<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    use HasFactory;

    protected $table = 'static_pages';
    protected $guarded = false;

    protected $fillable = [ 'name', 'text', 'frame', 'frame1', 'created_by', 'modified_by'];


}
