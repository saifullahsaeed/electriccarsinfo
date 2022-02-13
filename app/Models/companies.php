<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $hidden = ['created_at', 'updated_at'];
    protected $guarded = ['id'];

    //one to one relationship with users
    public function user()
    {
        return $this->hasOne('App\Models\users', 'id', 'user_id');
    }

    //one to many relationship with menus
    public function menus()
    {
        return $this->hasMany('App\Models\menus', 'company_id', 'id');
    }

    //one to many relationship with cars
    public function cars()
    {
        return $this->hasMany('App\Models\cars', 'company_id', 'id');
    }
}