<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;
    protected $fillable=[
        'filename',
        'id_user',
        'id_plans'
    ];
}
