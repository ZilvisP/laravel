<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'size',
        'name',
        'extension',
        'path',
        'model_id',
        'url',
        'model_type',
    ];


}
//tipo ta image uplada susikurt modeli
//nusikopint manageri ir meigracija ir tada patobulint ir klaidas istaisyt
