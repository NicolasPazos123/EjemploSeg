<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email'];

    public function interes()
    {
        return $this->belongsToMany(Interes::class);
    }
}
