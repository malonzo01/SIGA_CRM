<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;

class Usuario extends User
{
	use HasFactory;

	const CREATED_AT = 'creation_date';
	const UPDATED_AT = 'updated_date';

	protected $table = 'users';
	protected $primaryKey = 'iduser';
	protected $fillable = [
        'iduser','username'];
}
