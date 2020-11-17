<?php

namespace App\Http\Controllers;

use App\Repository\BookRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $bookRepository;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $book = $this->bookRepository->EconomicList();
        dd($book);
        return view('home');
    }
}
