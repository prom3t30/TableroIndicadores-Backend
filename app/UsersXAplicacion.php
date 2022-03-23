<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsersXAplicacion extends Model
{
    use SoftDeletes;
    protected $table = 'usersxaplicacion';
    protected $fillable = ['pantalla_id', 'rol_id'];

    
    public function rol(){
        return $this->belongsTo('App\Rol');
    }

    public function aplicacion(){
        return $this->belongsTo('App\Aplicacion');
    }

}
