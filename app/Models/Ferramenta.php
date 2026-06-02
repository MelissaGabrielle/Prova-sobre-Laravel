<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ferramenta extends Model
{
    protected $fillable = ['nome','marca','modelo','material_cabo','tamanho_chave','tensao_eletrica','peso','quanti_estoque','estoque_min'];

}
