<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Nome da tabela
     */
    protected $table = 'grades';

    /**
     * Campos que podem ser preenchidos em massa
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Campos tratados como datas
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Casts automáticos
     */
    protected $casts = [
        'id'   => 'integer',
        'name' => 'string',
    ];
}
