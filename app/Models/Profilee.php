<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profilee extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'city',
    ];
    protected $primaryKey = 'pro_id';
}
