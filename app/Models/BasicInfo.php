<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInfo extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'title',
        'favIcon',
        'logo',
        'contact',
        'email',
        'address',
        'fbLink',
        'instraLink',
        'youTubeLink',
    ];
}
