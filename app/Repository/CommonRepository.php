<?php


namespace App\Repository;


interface CommonRepository
{
    public function list($pageSize);
    public function findById($id);
    public function create($request);
    public function update($request, $id);
    public function delete($id);
}
