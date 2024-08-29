<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\filters\Filterable;
use Orchid\Screen\AsSource;

class Aspirante extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;
    protected $fillable = ["nombre", "apellido", "telefono"];
}
