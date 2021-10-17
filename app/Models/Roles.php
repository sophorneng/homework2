<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
        'status'
    ];

    public function user()
    {
        // which have forign key it is child
        //kon vea is belong to 
        // use belong to if forign key in ah na we use belong to ah ng
        return $this->belongsTo(User::class);
    }
    
}
