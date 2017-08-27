<?php

namespace App\Http\ViewComposers;

use Auth;
use DB;
use Illuminate\View\View;

class NotificationComposer
{
    private $notifications;

    public function compose(View $view)
    {
        if (! Auth::check()) {
            $this->notifications = null;
        } else {
            $this->notifications = \DB::table('notifications')->whereNull('read_at')->latest()->get();
            ;
        }

        return $view->with('unreadNotifications', $this->notifications);
    }
}
