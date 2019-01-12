<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Usuario extends Eloquent{
    protected $table = "usuarios";
    protected $primaryKey = "idusuario";
}
?>