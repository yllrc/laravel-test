<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\TestEvent;

class EventController extends Controller
{
    public function test(Request $request)
    {
        return view('event-test');
    }

    public function send(Request $request)
    {
        TestEvent::dispatch($request->text);
    }
}
