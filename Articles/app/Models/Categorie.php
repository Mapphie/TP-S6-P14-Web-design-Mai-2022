<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable =[
        'id',
        'nom',
    ];

    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
    ];

    protected $table = 'categorie';

    public $timestamps = false;
}
