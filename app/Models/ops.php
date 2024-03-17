<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ops extends Model
{
    use HasFactory;
    protected $table="ops";
    protected $fillable = [
        'id',
        'numero',
        'libelle',
        'regellement',
        'elaboration',
        'type',
        'montant',
        'created_at',
        'updated_at'
    ];
}
