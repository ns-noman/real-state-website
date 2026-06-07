<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyers extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'profession',
        'contactno',
        'email',
        'maillingAddress',
        'preferedLoc',
        'preferedSize',
        'carparkingReq',
        'expectedHOD',
        'facing',
        'preferedFlr',
        'numOfbedRoom',
        'numOfBathRoom',
        'readStatus',
    ];
}
