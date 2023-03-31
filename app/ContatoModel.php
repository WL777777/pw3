<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContatoModel extends Model
{
        //colocar o nome da tabela
    protected $table = "tbcontato";

            // campos da minha tabela
    protected $fillable = ['idContato', 'nome','email', 'assunto', 'mensagem'];

    public $timestamps = false;
    // para não preencher data, ela vai ir automática
}
