<?php

namespace App\Http\ViewComposers;

use Auth;
use App\User;
use Illuminate\View\View;

class AuthenticatedUserComposer
{
    private $user;

    public function compose(View $view)
    {
        if (! Auth::check()) {
            $this->user = new User;
        } else {
            $this->user = Auth::user();
        }

        return $view->with('loggedInAs', $this->user);
    }
}
