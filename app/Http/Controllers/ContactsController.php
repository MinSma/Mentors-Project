<?php

namespace App\Http\Controllers;

use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Admin;

class ContactsController extends Controller
{
    public function show() {
        return view('contactus.index');
    }

    public function mailToAdmin(ContactFormRequest $message, Admin $admin) {
        $admin->notify(new InboxMessage($message));

        return redirect()->back()->with('message', 'thanks for the message! We will get back to you soon!');
    }
}
