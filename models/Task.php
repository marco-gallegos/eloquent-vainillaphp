<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Task extends Eloquent{
    protected $table = "tasks";
    protected $primaryKey = "idtask";
    //public $timestamps = false;

    protected $fillable = [
        "nombre"
    ];

}
?>