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
    protected $fillable = ['parent_id', 'menu_name', 'menu_page', 'published', 'created_by', 'modified_by','slug'];

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->menu_name, 0, 40), '-');
    }

    // Get children category
    public function children() {
        return $this->hasMany(self::class, 'parent_id');
    }
}


