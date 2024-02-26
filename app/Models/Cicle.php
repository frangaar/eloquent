<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cicle extends Model
{
    use HasFactory;

    protected $table = 'cicles';
    protected $primaryKey = 'id';
    //public $incrementing = false
    //protected $keyType = 'string';
    public $timestamps = false;

    /**
     * Get all of the cursos for the Cicle
     *
     * @return \Illuminate\DatCursloquent\Relations\HasMany
     */
    public function cursos()
    {
        return $this->hasMany(Cursos::class, 'cicles_id');
    }


}
