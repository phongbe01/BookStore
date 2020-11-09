<?php


namespace App\Repository;


use App\Publisher;

class PublisherRepository implements CommonRepository
{

    public function count()
    {
        return Publisher::count();
    }


    public function list($pageSize)
    {
        // TODO: Implement list() method.
        return Publisher::all();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        return Publisher::findOrFail($id);
    }

    public function create($request)
    {
        // TODO: Implement create() method.
        $pub = new Publisher();
        $pub->publishname = $request->publishname;
        $pub->image = $request->file->store('/image/publisher', 'public');
        $pub->save();
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
        $publisher = $this->findById($id);
        $publisher->publishname = $request->publishname;
        $publisher->image = $request->image;
        $publisher->save();
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $publisher = $this->findById($id);
        $publisher->delete();
    }

    public function storeImage($param)
    {
        if (request()->has('image'))
        {
            $param->image = request()->image->store('storage', 'public');
        }
    }
}
