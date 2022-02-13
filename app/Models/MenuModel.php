<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    use HasFactory;
    //table name
    protected $table = 'menus';
    protected $fillable = ['name'];

    public function items()
    {
        return $this->hasMany('App\Models\items');
    }

    //get menus with items
    public static function getMenusWithItems()
    {
        return self::with('items')->get();
    }
}