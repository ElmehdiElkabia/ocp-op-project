<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ops extends Model
{
    use HasFactory;

    protected $table = "ops";
    protected $fillable = [
        'numero',
        'libelle',
        'elaboration',
        'type',
        'montant',
        'regellement',
    ];
}
