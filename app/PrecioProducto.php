<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;
class PrecioProducto extends Model
{
    //

    public $table = 'precio_producto';
    protected $fillable = [
    'idcliente', 'idproducto', 'precio_unitario',
    ];



  /*  public function producto(){
        return $this->belongsTo(Producto::class);
    }*/

    public function producto(){
        return $this->belongsTo(Producto::class); //devuelve un solo objeto
        //hasMany devuelve un array de objetos relacionados
    }


}
