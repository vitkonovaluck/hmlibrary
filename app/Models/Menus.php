<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Menus extends Model
{
    //use HasFactory;
    protected $fillable = ['menu_name', 'menu_parrent', 'menu_slug', 'published'];

    // Mutators
    public function setMenuSlugAttribute($value) {
        $this->attributes['menu_slug'] = Str::slug( mb_substr($this->menu_name, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }


    public function children(){
        return $this->hasMany(self::class,'menu_parrent');
    }
}
