<?php

namespace App\Http\Controllers;

use App\Repository\BookRepository;
use App\Repository\CartRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $bookRepository;
    private $cartRepository;

    public function __construct(BookRepository $bookRepository, CartRepository $cartRepository)
    {
//        $this->middleware('auth');
        $this->bookRepository = $bookRepository;
        $this->cartRepository = $cartRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $carts = $this->cartRepository->index();
        return view('cart.payment', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $book = $this->bookRepository->findById($id);
        $books = $this->bookRepository->listByCategory($book->categoryID)->take(4);
        return view('frontend.book.detail', compact('book', 'books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showByCategory($categoryId)
    {
        $books = $this->bookRepository->listByCategory($categoryId);
        return view('frontend.book.listByCategory', compact('books'));
    }
}
