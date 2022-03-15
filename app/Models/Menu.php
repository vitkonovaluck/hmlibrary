<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';
    protected $guarded = false;
    //protected $fillable = ['menu_main', 'menu_name', 'menu_page', 'published', 'created_by', 'modified_by'];

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    // Get children category
    public function children() {
        return $this->hasMany(self::class, 'menu_main');
    }
}
