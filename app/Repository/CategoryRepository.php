<?php


namespace App\Repository;


use App\Category;

class CategoryRepository implements CommonRepository
{

    public function list($pageSize = null)
    {
        // TODO: Implement list() method.
        return Category::all();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function create($request)
    {
        // TODO: Implement create() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
