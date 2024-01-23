<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//para traer una definicion de atributos


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //metodo que se encarga de convertir los nombres de mayusculas a minusculas
    protected function name(): Attribute
    {
        return new Attribute(
            //ahora dentro de esta funcion retornaremos el metodo get y set los que se guardaran en una funcion flecha
            //Get para que el valor que me tome lo convierta el primer caracter en mayuscula
            get: fn($valor) => ucwords($valor),
            //set para decirle que el valor de letra me lo convierta en minuscula
            set: fn($valor) => strtolower($valor)
        );
    }

    
}
