<?php

namespace App\Models;

use Laravel\Cashier\Billable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'firstname',
        'lastname',
        'langue',
        'email',
        'password',
        'avatar',
        'card_brand',
        'card_last_four',
        'stripe_id',
        'trial_ends_at',

    ];

    protected $table = 'users';


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'card_brand',
        'card_last_four',
        'stripe_id',
        'trial_ends_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


     /**
     * The User's representation(s) - Relationship.
     */
    public function representations()
    {
        return $this->belongsToMany('App\Models\Representation');
    }

    /**
     * The User's representation(s) - Relationship.
     */
    public function representationUser()
    {
        return $this->hasMany('App\Models\RepresentationUser');
    }
}
