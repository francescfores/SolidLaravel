<?php
/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 25/01/16
 * Time: 16:48
 */
namespace App\Repositories;

interface IUserRepository
{
    public function all();

    public function paginate($perPage = 15, $columns = array('*'));

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id, $columns = array('*'));

    public function findBy($field, $value, $columns = array('*'));
}