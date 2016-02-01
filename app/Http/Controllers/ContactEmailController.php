<?php

namespace App\Http\Controllers;

use App\Jobs\Sendsubscriptionemail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ContactEmailController extends Controller
{
    public function send(Request $request){


        //dd(Input::all());
       // $user = User::findOrFail($id);

        $this->sendemail();
        //TODO:SEND EMAIL

        //FLASH NOTIFICACION
/*        $request->session()->flash(
          'notification',
          'All ok'
        );*/
        //REDIRECT

        return redirect()->route('welcome');
    }

    public function sendEmail(){
        $this->dispatch(new Sendsubscriptionemail());
    }
}

