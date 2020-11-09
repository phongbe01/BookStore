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
            ->leftJoin('authors', 'authors.id', '=', 'auhthorID')
            ->leftJoin('publishers', 'publishers.id', '=', 'publisherID')
            ->leftJoin('categories', 'categories.id', '=', 'categoryID')
            ->select('books.id', 'books.title', 'books.summary', 'books.image', 'books.price', 'books.quantity', 'authors.authorname as author', 'publishers.publishname as publisher', 'categories.categoryname as category')
            ->take($pageSize)
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
        $param = [
            'title' => $request->title,
            'summary' => $request->summary,
            'image' => $request->file->store('/image/book', 'public'),
            'price' => $request->price,
            'quantity' => $request->quantity,
            'authorID' => $request->author,
            'publisherID' => $request->publisher,
            'categoiryID' => $request->category
        ];

        Book::updateOrCreate($param);

    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
        $book = $this->findById($id);
        $book->title = $request->title;
        $book->summary = $request->summar;
        $book->image = $request->file->store('/image/book', 'public');
        $book->price = $request->price;
        $book->quantity = $request->quantity;
        $book->authorID = $request->author;
        $book->publisherID = $request->publisher;
        $book->categoiryID = $request->categor;
        $book->save();
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $book = $this->findById($id);
        $book->delete();
    }
}
