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
        'categoryName',
        'thumbnail_img',
        'background_img',
        'ataglance_img',
        'features_img',
        'booknow_img',
    ];
}
