<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationsController extends Controller
{
    public function index(Request $request)
    {
        $read = ($request->has('type') ? $request->type : null);

        if ($read && $read == 'read') {
            $notifications = \DB::table('notifications')->where('read_at', '!=', null)->latest()->get();
        } elseif ($read && $read == 'unread') {
            $notifications = \DB::table('notifications')->whereNull('read_at')->latest()->get();
        } else {
            $notifications = \DB::table('notifications')->latest()->get();
        }

        return view('admin.notifications.index', compact('notifications'));
    }
}
