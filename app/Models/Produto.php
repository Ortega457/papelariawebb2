<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Produto extends Model
{
    use HasFactory;


    protected $table = 'produtos';

    protected $fillable = [
        'nome',
        'descricao',
        'valor',
        'imagem',
        'categoria_id',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function getMarcaNomeAttribute()
    {
        return $this->categorias->nome;
    }
}
