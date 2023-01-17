<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * 測驗頁
     *
     * @param  Request $request
     * @return \Illuminate\View\View
     */
    public function quiz(Request $request)
    {
        return view('quiz');
    }
}
