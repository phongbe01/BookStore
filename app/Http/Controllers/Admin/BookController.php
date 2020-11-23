<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Publisher;
use App\Repository\AuthorRepository;
use App\Repository\BookRepository;
use App\Repository\CategoryRepository;
use App\Repository\PublisherRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    private $bookRepository;
    private $authorRepository;
    private $publisherRepository;
    private $categoryRepository;

    public function __construct(BookRepository $bookRepository, AuthorRepository $authorRepository, PublisherRepository $publisherRepository, CategoryRepository $categoryRepository)
    {
        $this->bookRepository = $bookRepository;
        $this->authorRepository = $authorRepository;
        $this->publisherRepository = $publisherRepository;
        $this->categoryRepository = $categoryRepository;
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
        $categories = $this->categoryRepository->list();
        return view('admin.book.index', compact('count', 'books', 'publishers', 'authors', 'categories'));
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
        $authors = $this->authorRepository->list(1);
        $publishers = $this->publisherRepository->list();
        $categories = $this->categoryRepository->list();
        return  view('admin.book.create', compact('authors', 'publishers', 'categories'));
//        return response()->json($html);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'authorID' => 'required',
            'publisherID' => 'required',
            'categoryID' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required | numeric',
        ]);
        $this->bookRepository->create($request);
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $book = $this->bookRepository->findById($id);
        $publishers = $this->publisherRepository->list(10);
        $authors = $this->authorRepository->list(100);
        $categories = $this->categoryRepository->list();
        return view('admin.book.edit', compact('book', 'publishers', 'authors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
//        dd($request->all());
        $this->bookRepository->update($request, $id);
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $this->bookRepository->delete($id);
        $books = $this->bookRepository->list(10);
        $html = view('admin.book.table', compact('books'))->render();
        return response()->json(['html' => $html, 'count' => count($books)]);
    }
}
