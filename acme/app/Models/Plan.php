<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'page',
        'address',
        'date_update',
        'date_previus',
        'id_zone',
        'id_user'
    ];
}
