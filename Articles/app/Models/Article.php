<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    public $incrementing = true;
    public $timestamps= false;
    protected $fillable = [

        'titre',
        'resume',
        'image',
        'id_categorie',
        'contenu',
        'date'
    ];

    protected $casts = [
        'id' => 'integer',
        'titre' => 'string',
        'resume' => 'string',
        'image' => 'string',
        'id_categorie' => 'integer',
        'contenu' => 'string',
        'date'=>'date',
        'etat' =>'integer',
    ];

    protected $table = 'article';
    protected $id = 'id';

    public function categorie(){
        return $this->belongsTo(Categorie::class,'id_categorie');
    }

    protected $primaryKey = 'id';

}
