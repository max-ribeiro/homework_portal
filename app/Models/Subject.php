<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Nome da tabela no banco
     */
    protected $table = 'subjects';

    /**
     * Atributos que podem ser atribuídos em massa
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Atributos que devem ser tratados como datas
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
        'id' => 'integer',
        'name' => 'string',
    ];

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:45',
            ],
        ];
    }
}
