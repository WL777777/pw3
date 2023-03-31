<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamacao extends Model
{
    // protected $table="tbReclamacao";
    //colocar o nome da tabela
    protected $table = "tbreclamacao";

            // campos da minha tabela
    protected $fillable = ['idRec', 'idLab','pc','titulo', 'descricao', 'dtCriacao'];

    public $timestamps = false;
    // para não preencher data, ela vai ir automática
}
