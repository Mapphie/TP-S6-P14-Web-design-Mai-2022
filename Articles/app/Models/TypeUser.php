<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable =[
        'id',
        'nom',
    ];

    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
    ];

    protected $table = 'typeuser';
}
