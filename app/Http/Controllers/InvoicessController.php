<?php

namespace App\Http\Controllers;

use App\Invoicess;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InvoicessController extends Controller
{
    public function index(){

        if(!Auth::check()){
            return "Forbidden!";
        }
        $database_invoices = $this->getAllInvoicesFromDatabase();
        $invoices = $this->tranform($database_invoices);

        return view('invoices', compact('invoices'));

        /*
         //Amb compact fem el mateix que amb el següent exemple
        $data['invoices'] = $fomrated_invoices;
        return view('invoices', $data);*/
    }

    private function getAllInvoicesFromDatabase(){
        return Invoicess::all();
    }
    private function tranform($database_invoices){
        return $database_invoices;
    }
}
