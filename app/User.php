<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    //spatie permissions
    use HasRoles;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

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

    public function members()
    {
        return $this->hasMany(Members::class);
    }public function about()
    {
        return $this->hasMany(About::class);
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }
    public function reference()
    {
        return $this->hasMany(Reference::class);
    }
    public function article()
    {
        return $this->hasMany(Article::class);
    }
    public function contact()
    {
        return $this->hasMany(Contact::class);
    }
    public function ress()
    {
        return $this->hasMany(ress::class);
    }
}
