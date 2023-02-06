<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignWeb extends Model
{
    use HasFactory;
    protected $table = 'designerwebs';
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
