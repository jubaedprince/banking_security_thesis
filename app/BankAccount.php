<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $fillable = ['balance'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
