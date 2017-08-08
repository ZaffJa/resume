<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function main()
    {
        return view('resume');
    }

    public function send(Request $request)
    {
        Mail::to('zafrizulkipli@gmail.com')->send(new OrderShipped($request->all()));

        return 200;

    }
}
