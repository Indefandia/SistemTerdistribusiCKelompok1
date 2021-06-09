<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.chat.index');
    }
}
