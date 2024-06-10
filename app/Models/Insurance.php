<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    protected $table = 'insurances';

    public $timestamps = true;

    protected $fillable = ['name', 'states_ab', 'logo_consulta_ohath'];

    //Relacion uno a muchos
    public function plates()
    {
        return $this->hasMany(Plates::class);
    }

}
