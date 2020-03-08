<?php

namespace LaravelForum\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function notifications()
    {
        // mark all read
        auth()->user()->unreadNotifications->markAsRead();
        // display all notifications
        return view('users.notification', [
            'notifications' => auth()->user()->notifications()->paginate(5)
        ]);
    }
}
