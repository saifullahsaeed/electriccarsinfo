<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'company_id'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $guarded = ['id'];
    protected $table = 'cars';
    protected $primaryKey = 'id';

    //one to one relationship with companies
    public function company()
    {
        return $this->hasOne('App\Models\companies', 'id', 'company_id');
    }

    //one to many relationship with images return collection
    public function images($id)
    {
        return $this->hasMany('App\Models\images', 'car_id', $id);
    }
}