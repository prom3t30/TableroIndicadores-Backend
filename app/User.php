<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;


    use SoftDeletes;
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'email_verified_at', 'password', 'cedula', 'estado', 'rol_id','codigoCentro', 'created_at', 'updated_at'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }
    public function aplicacion()
    {
        return $this->belongsTo('App\Aplicacion');
    }
    /* public function aplicaciones()
    {
        return $this->belongsToMany('App\userXAplicacion');
    } */
}
