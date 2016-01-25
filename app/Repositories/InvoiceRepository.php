<?php

namespace App\Repositories;
use App\Invoicess;

class InvoiceRepository implements  IInvoiceRepository
{

    public function getAllInvoicesFromDatabase(){
        return Invoicess::all();
    }
    public function all(){
            return Invoicess::all();
    }

    public function paginate($perPage = 15, $columns = array('*')){

    }

    public function create(array $data){

    }

    public function update(array $data, $id){

    }

    public function delete($id){

    }

    public function find($id, $columns = array('*')){

    }

    public function findBy($field, $value, $columns = array('*')){

    }
}
