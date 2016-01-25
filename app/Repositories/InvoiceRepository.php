<?php

namespace App\Repositories;
use App\Invoicess;

class InvoiceRepository extends Repo
{


    function model()
    {
        return Invoicess::class;
    }
}
