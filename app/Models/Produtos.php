<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $fillable=['nome', 'codigo', 'preco', 'preco_promocional', 'unidade', 'gtin',
    'tipoVariacao', 'localizacao', 'preco_custo', 'preco_custo_medio', 'situacao'];

    protected $table='produto';
}
