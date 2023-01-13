<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'regiones';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idRegion';
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
    
    public function reportes(){
        return $this->hasMany(Caso_covid::class,'idRegion','idRegion');
    }

    
}
