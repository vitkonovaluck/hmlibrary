<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'plans';
    protected $guarded = false;
    protected $fillable = ['main','week','name','text','place','date1','date2'];

    public function children() {
        return $this->hasMany(self::class, 'main');
    }
}
