<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    use HasFactory;

    protected $table        = 'user_domicilio';

    protected $fillable = [
        'user_id',
        'domicilio',
        'numero_ext',
        'colonia',
        'codigo_postal',
        'ciudad'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function usuario()
    {
        return $this->hasOne('App\Models\User', 'id','user_id');
    }
}
