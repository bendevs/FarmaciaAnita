<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidades';
    protected $fillable = ['nombre', 'desc', 'activo', 'borrado', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

    public function scopeBorrado($query)
    {
        return $query->where('borrado','0');
    }
}
