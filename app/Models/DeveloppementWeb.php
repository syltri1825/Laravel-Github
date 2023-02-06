<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloppementWeb extends Model
{
    use HasFactory;
    protected $table = 'developpeurwebs';
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
