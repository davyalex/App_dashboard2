<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matiere extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}