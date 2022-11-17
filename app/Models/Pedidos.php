<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $fillable=['numero', 'data_pedido', 'data_previsao_entrega', 'valor_total'];

    protected $table='pedido';
}
