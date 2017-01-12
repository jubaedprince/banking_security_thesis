<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'national_id', 'mobile_number', 'address', 'date_of_birth'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        return $this->is_admin;
    }

    public function bankAccount()
    {
        return $this->hasOne('App\BankAccount');
    }

    public function relatedTransactions()
    {
        return Transaction::where('to_user_id', $this->id)->orWhere('from_user_id', $this->id)->get();
    }
}

