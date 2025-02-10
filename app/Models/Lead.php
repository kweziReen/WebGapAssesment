<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'leads';

    protected $fillable = ['cellphone', 'email'];

    const CELLPHONE = 'cellphone';
    const EMAIL = 'email';
}
