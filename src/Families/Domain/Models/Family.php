<?php

namespace Src\Families\Domain\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $table = 'table_families';
    protected $fillable = ['nombre','comentarios'];

    protected $attributes = [
        'nombre' => 'name',
        'comentarios' => 'comments',
    ];

}
