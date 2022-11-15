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
        Notification::route('slack', 'https://hooks.slack.com/services/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')
            ->notify(new SlackTest($request->text));
        return;
    }
}
