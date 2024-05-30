<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IllinoisModel extends Model
{
    use HasFactory;
    const CREATED_AT = 'creation_date';
	const UPDATED_AT = 'updated_date';
	protected $table = 'illinois';
	protected $primaryKey = 'id_illinois';
}
