<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'address',
        'area',
        'locationLink',
        'details',
        'features',        
        'qoute',
        'typeID',
        'typeName',
        'categoryID',
        'categoryName'
    ];
}
