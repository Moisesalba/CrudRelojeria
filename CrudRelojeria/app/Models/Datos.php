<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    public function datos()
    {
        return $this->hasMany(Compra::class);
    }
    use HasFactory;
}