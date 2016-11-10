<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
        protected $connection = 'chars';
	protected $table = 'characters';
}
