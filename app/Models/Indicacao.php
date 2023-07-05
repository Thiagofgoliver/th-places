<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicacao extends Model
{
    protected $table = 'indicacaos'; // Nome da tabela no banco de dados

    protected $fillable = [
        'user_id',
        // Adicione outras colunas da tabela "indicacaos" aqui, se houver
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


   
