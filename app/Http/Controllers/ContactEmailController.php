<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ContactEmailController extends Controller
{
    public function send(Request $request){

        dd(Input::all());

        //TODO:SEND EMAIL

        //FLASH NOTIFICACION
        $request->session()->flash(
          'notification',
          'All ok'
        );
        //REDIRECT

        return redirect()->route('welcome');
    }
}
