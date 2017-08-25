<?php

namespace App\Http\Services;

use App\Role;

class AuthorizationService
{
    public function get()
    {
        return Role::orderBy('title')->get();
    }
}
