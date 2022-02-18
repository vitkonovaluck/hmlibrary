<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Menus extends Model
{
    //use HasFactory;
    protected $fillable = ['menu_name', 'menu_parent', 'menu_slug', 'published'];

    // Mutators
    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }


    public function children(){
        return $this->hasMany(self::class,'menu_parrent');
    }
}
