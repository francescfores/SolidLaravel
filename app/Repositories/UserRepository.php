<?php
/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 25/01/16
 * Time: 16:19
 */

namespace App\Repositories;


class UserRepository implements  IInvoiceRepository
{

    public function all()
    {
        // TODO: Implement all() method.
    }

    public function paginate($perPage = 15, $columns = array('*'))
    {
        // TODO: Implement paginate() method.
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function find($id, $columns = array('*'))
    {
        // TODO: Implement find() method.
    }

    public function findBy($field, $value, $columns = array('*'))
    {
        // TODO: Implement findBy() method.
    }

    public function getAllInvoicesFromDatabase()
    {
        // TODO: Implement getAllInvoicesFromDatabase() method.
    }
}