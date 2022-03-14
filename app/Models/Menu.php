<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';
    protected $guarded = false;
    //protected $fillable = ['menu_main', 'menu_name', 'menu_page', 'published', 'created_by', 'modified_by'];

    // Get children category
    public function children() {
        return $this->hasMany(self::class, 'menu_main');
    }
}
