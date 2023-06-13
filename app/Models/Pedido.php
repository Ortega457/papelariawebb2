<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['cliente_id', 'produto_id', 'quantidade'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function getTotalPedidoAttribute()
    {
        return $this->quantidade * $this->produto->valor;
    }
}
