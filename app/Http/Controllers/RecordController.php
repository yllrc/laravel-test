<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    /**
     * 測驗結果紀錄頁
     *
     * @param  Request $request
     * @return \Illuminate\View\View
     */
    public function record(Request $request)
    {
        return view('record');
    }
}
