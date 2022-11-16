<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SlackTest;

class SlackController extends Controller
{
    //
    public function test(Request $request)
    {
        return view('slack-test');
    }

    public function send(Request $request)
    {
        Notification::route('slack', config('app.slack_webhook_url'))
            ->notify(new SlackTest($request->text));
        return;
    }
}
