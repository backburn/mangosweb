<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $connection = 'realmd';
    protected $table = 'account';
}
