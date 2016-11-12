<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Hashing\BcryptHasher;

class MangosUserProvider extends EloquentUserProvider {

    public function __construct()
    {
        $this->model = BcryptHasher::class;
        $this->hasher = \App\User::class;
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        $hashed_password = sha1(strtoupper($user->username . ':' . $credentials['password']));
        if ($hashed_password == $user->getAuthPassword()) {
            return true;
        }
        return false;
    }
}
