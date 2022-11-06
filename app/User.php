<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\VerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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

    public function document()
    {
        return $this->hasOne(Document::class, 'user_id');
    }
    public function withdraw()
    {
        return $this->hasMany(Withdraw::class, 'user_id');
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span style='color: red;'>UNVERIFIED!</span>";
        }
        return "<span style='color: green;'>VERIFIED!</span>";
    }



}
