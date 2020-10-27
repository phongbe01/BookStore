<?php


namespace App\Repository;


use App\Publisher;

class PublisherRepository implements CommonRepository
{

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
        $param = [
            'publishname' => $request->publishname,
            'image' => $request->image,
        ];
        Publisher::updateOrCreate($param);

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
}
