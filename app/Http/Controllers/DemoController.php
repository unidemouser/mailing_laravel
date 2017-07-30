<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class DemoController extends Controller
{
    public function sendmail(){
        $input=Input::all();
        Mail::to('rahul.niraula@gmail.com')->send(new Email($input));
        return redirect()->back();
    }
}
