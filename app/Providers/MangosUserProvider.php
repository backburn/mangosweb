<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Authenticatable;

class MangosUserProvider extends EloquentUserProvider {
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        $hashed_password = sha1(strtoupper($user->username . ':' . $credentials['password']));
        if ($hashed_password == $user->getAuthPassword()) {
            return true;
        }
        return false;
    }
}
