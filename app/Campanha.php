<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;

class Campanha extends Model
{
    protected $table = "campanha";
    protected $primaryKey = "id";
    protected $fillable = [
        "titulo", "descricao", "imagem", "inicio", "fim", "id_categoria"
    ];

    public function categoria(){
        return $this->hasOne(Categoria::class, 'id', 'id_categoria');
    }
}