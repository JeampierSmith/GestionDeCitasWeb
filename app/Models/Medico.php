<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }

    public function clinica()
    {
        return $this->belongsTo(Clinica::class);
    }
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
