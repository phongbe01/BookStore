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
     * @param BookRepository $bookRepository
     */
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $novels = $this->bookRepository->EconomicList();
        return view('home', compact('novels'));
    }
}
