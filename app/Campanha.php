<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    protected $table = "campanha";
    protected $primaryKey = "id";
    protected $fillable = [
        "titulo", "descricao", "imagem", "inicio", "fim", "categoria"
    ];

    public function categoria(){
        return $this->hasOne(Categoria::class, 'id', 'categoria');
    }
}
