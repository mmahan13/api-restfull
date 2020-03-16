<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;
    protected $table = 'portal.productos';
    protected $fillable = ['id_user', 'ref', 'id_categoria', 'producto', 'descriptionxs', 'descriptionlg', 'id_iva'];

}
