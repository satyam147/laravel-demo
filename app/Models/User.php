<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use HasFactory;

    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
        return 'username';
    }

    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
        return $this->{$this->getAuthIdentifierName()};
    }

    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
        return $this->password;
    }

    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
        if (! empty($this->remember_token)) {
            return $this->{$this->remember_token};
        }
    }

    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
        if (! empty($this->remember_token)) {
            $this->{$this->remember_token} = $value;
        }
    }

    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
        return $this->remember_token;
    }
}
