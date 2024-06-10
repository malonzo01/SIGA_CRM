<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plates extends Model
{
    use HasFactory;
    protected $table = 'plates';

    public $timestamps = true;

    protected $fillable = [
        'vin',
        'plate',
        'date_issue',
        'date_exp',
        'days',
        'seller',
        'dealer_number',
        'make',
        'model',
        'year',
        'body_style',
        'major_color',
        'minor_color',
        'name1',
        'name2',
        'address',
        'city',
        'state',
        'zip',
        'email',
        'phone',
        'user_id',
        'insurance_id',
        'status',
    ];

    // Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacion uno a muchos inversa
    public function insurance()
    {
        return $this->belongsTo(Insurance::class);
    }

}
