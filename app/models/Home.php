<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Home extends Eloquent {
    use SoftDeletingTrait;
    protected $dates = ["deleted_at"];
    
    protected $fillable = array(
        'nombre',
        'construccion',
        'terreno',
        'banos',
        'frente',
        'fondo',
        'municipalidad',
        'zona',
        'project_id',
        'descripcion',
        'phone',
        'initial_price',
        'last_price',
        'typeOfMoney'
    );
}