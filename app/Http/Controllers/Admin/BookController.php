<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Publisher;
use App\Repository\AuthorRepository;
use App\Repository\BookRepository;
use App\Repository\PublisherRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $bookRepository;
    private $authorRepository;
    private $publisherRepository;
    private $categoryRepository;

    public function __construct(BookRepository $bookRepository, AuthorRepository $authorRepository, PublisherRepository $publisherRepository)
    {
        $this->bookRepository = $bookRepository;
        $this->authorRepository = $authorRepository;
        $this->publisherRepository = $publisherRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $books = $this->bookRepository->list(10);
        $count = $this->bookRepository->count();
        $publishers = $this->publisherRepository->list(10);
        $authors = $this->authorRepository->list(100);
        return view('admin.book.index', compact('count', 'books', 'publishers', 'authors'));
    }

    public function search(Request $request)
    {
        $pageSize = $request->get('pageSize');
        $pageNumber = $request->get('pageNumber');
        $params = $request->get('params');
        $array = $this->bookRepository->findByCode($params, ($pageSize == null)? 10: $pageSize,($pageNumber == null)? 0: $pageNumber);
        $books = $array['result'];
        $count = $array['count'];
        $lastIndex = $books->count();
        $table = view('admin.book.table', compact('books'))->render();
        return response()->json(['table' => $table, 'count' => $count, 'lastIndex' => $lastIndex]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.book.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
