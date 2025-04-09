<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table        = 'actividades';

    protected $fillable = [
        'categoria_id',
        'titulo',
        'descripcion',
        'fecha_de_vencimiento',
        'prioridad'

    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function usuario()
    // {
    //     return $this->hasOne('App\Models\User', 'id','user_id');
    // }
}
