<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    // Se você estiver usando o Laravel 8 ou superior, você também precisa definir o uso do HasFactory
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    
    // Permitir mass assignment para esses campos
    protected $fillable = ['name', 'phone'];

    // ou você pode querer proteger sua aplicação contra mass assignment definindo o array $guarded
    // protected $guarded = [];
}