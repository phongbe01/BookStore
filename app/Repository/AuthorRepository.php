<?php


namespace App\Repository;


use App\Author;
use Illuminate\Support\Facades\Auth;

class AuthorRepository implements CommonRepository
{

    public function count()
    {
        return Author::count();
    }


    public function list($pageSize)
    {
        // TODO: Implement list() method.
        return Author::all();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        return Auth::findOrFail($id);
    }

    public function create($request)
    {
        // TODO: Implement create() method.
        $author = new Author();
        $author->authorname = $request->name;
        $author->save();
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
        $author = $this->findById($id);
        $author->authorname = $request->name;
        $author->save();
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $author = $this->findById($id);
        $author->delete();
    }
}
