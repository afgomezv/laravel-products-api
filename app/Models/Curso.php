<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'description', 'category'];
    // protected $guarded = ['status']; // Este ignorará el campo status en la asignación masiva.
    protected $guarded = []; // Este ignorará todos los campos en la asignación masiva.
}
