<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'menuID',
        'menuName',
        'subMenuName',
        'title',
        'shortDetails',
        'longDetails',
        'image',
    ];
}
