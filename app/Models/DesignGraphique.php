<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignGraphique extends Model
{
    use HasFactory;
    protected $table = 'graphistes';
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
