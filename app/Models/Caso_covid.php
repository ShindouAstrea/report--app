<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caso_covid extends Model
{
    use HasFactory;
    use HasRelationships;
    protected $table = 'casos_covid';
    
}
