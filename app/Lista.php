<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model{
    //especificando a tabela
    protected $table = 'lista';
    // create_at ou update_at 
    public $timestamps = false;
}