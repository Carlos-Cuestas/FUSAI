<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Summary of User
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * Summary of timestamp
     * @var
     */
    public $timestamps = false;
    protected $guarded = [
        'id'
    ];


    public function agencia(){
        return $this -> belongsTo(Agencia::class);
    }

    public function tipousuario(){
        return $this -> belongsTo(Tipousuario::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

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
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function passwordToNull()
    {
        $this->attributes['password'] = null;
    }
}
