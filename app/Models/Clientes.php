<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    
    protected $fillable=['id', 'codigo', 'nome', 'fantasia', 'tipo_pessoa', 
    'cpf_cnpj', 'endereco', 'numero', 'complemento', 'bairro', 'cidade', 'uf', 'cep'];

    protected $table='cliente';
    
}
