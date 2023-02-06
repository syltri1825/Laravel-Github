<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCVideo extends Model
{
    use HasFactory;
    protected $table = 'monteurscadreursvideos';
    protected $fillable = [
        'name',
        'firstName',
        'email',
        'mobile',
        'old',
        'filiere',
        'image'
    ];
}
