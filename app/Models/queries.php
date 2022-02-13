<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queries extends Model
{
    use HasFactory;
    protected $table = 'queries';
    protected $fillable = ['name', 'email', 'phone', 'query'];

    
}