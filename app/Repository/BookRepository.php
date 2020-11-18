<?php


namespace App\Repository;


use App\Book;
use Illuminate\Support\Facades\DB;

class BookRepository implements CommonRepository
{
    public function count()
    {
        return Book::count();
    }

    public function list($pageSize)
    {
        // TODO: Implement list() method.
        $result = DB::table('books')
            ->leftJoin('authors', 'authors.id', '=', 'authorID')
            ->leftJoin('publishers', 'publishers.id', '=', 'publisherID')
            ->leftJoin('categories', 'categories.id', '=', 'categoryID')
            ->select('books.id', 'books.title', 'books.summary', 'books.image', 'books.price', 'books.quantity', 'authors.authorname as author', 'publishers.publishname as publisher', 'categories.categoryname as category')
            ->take($pageSize)
            ->get();
        return $result;
    }

    public function NovelList()
    {
        $result = DB::table('books')
            ->leftJoin('authors', 'authors.id', '=', 'authorID')
            ->leftJoin('publishers', 'publishers.id', '=', 'publisherID')
            ->leftJoin('categories', 'categories.id', '=', 'categoryID')
            ->select('books.id', 'books.title', 'books.summary', 'books.image', 'books.price', 'books.quantity', 'authors.authorname as author', 'publishers.publishname as publisher', 'categories.categoryname as category')
            ->where('books.categoryID', '=', '1')
            ->take(4)
            ->get();
        return $result;
    }

    public function EconomicList()
    {
        $result = DB::table('books')
            ->leftJoin('authors', 'authors.id', '=', 'authorID')
            ->leftJoin('publishers', 'publishers.id', '=', 'publisherID')
            ->leftJoin('categories', 'categories.id', '=', 'categoryID')
            ->select('books.id', 'books.title', 'books.summary', 'books.image', 'books.price', 'books.quantity', 'authors.authorname as author', 'publishers.publishname as publisher', 'categories.categoryname as category')
            ->where('books.categoryID', '=', '2')
            ->take(4)
            ->get();
        return $result;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        return Book::findOrFail($id);
    }

    public function create($request)
    {
        // TODO: Implement create() method.
        $book = new Book();
        $book->title = $request->title;
        $book->summary = $request->summary;
        $book->image = $request->file->store('/image/book', 'public');
        $book->price = $request->price;
        $book->quantity = $request->quantity;
        $book->authorID = $request->author;
        $book->publisherID = $request->publisher;
        $book->categoryID = $request->category;
        $book->save();

    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
        $book = $this->findById($id);
        $book->title = $request->title;
        $book->summary = $request->summary;
        $book->image = $request->file->store('/image/book', 'public');
        $book->price = $request->price;
        $book->quantity = $request->quantity;
        $book->authorID = $request->author;
        $book->publisherID = $request->publisher;
        $book->categoryID = $request->category;
        $book->save();
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $book = $this->findById($id);
        $book->delete();
    }

    public function findByCode($params, $pageSize, $pageNumber)
    {
        $result = DB::table('books')
            ->leftJoin('authors', 'authors.id', '=', 'authorID')
            ->leftJoin('publishers', 'publishers.id', '=', 'publisherID')
            ->leftJoin('categories', 'categories.id', '=', 'categoryID')
            ->select('books.id', 'books.title', 'books.summary', 'books.image', 'books.price', 'books.quantity', 'authors.authorname as author', 'publishers.publishname as publisher', 'categories.categoryname as category', 'books.publisherID', 'books.authorID');
        if($params != null)
        {
            foreach ($params as $param)
            {
                if ($param['value'] != null)
                {
                    $result->Where($param['field'], 'like',  $param['value'] . '%');
                }
            }
        }
        $count = $result->count();
        $result->skip($pageNumber)->take($pageSize);
        return ['result' => $result->get(), 'count' => $count];
    }
}
