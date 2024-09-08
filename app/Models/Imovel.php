<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = ["endereco", "descricao", "proprietario", "foto"];
    use HasFactory;
}
