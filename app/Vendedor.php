<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    //

    public $table= 'vendedors';
    protected $fillable =[ 
        'nombre' , 'apellido' ,'rif', 'direccion' , 'telefono',
    ];

    public function role(){
        return $this->belongsTo(Role::class);

    }
    
    public function hasRoles(array $roles){
        foreach ($roles as $role){
             if ($this->role->nombre === $role){
             
                return true;
            }
          
        }
      
        return false;
    } 


  /*  public function user(){
        return $this->hasOne(User::class); //devuelve un solo objeto
        //hasMany devuelve un array de objetos relacionados
    }*/
}
