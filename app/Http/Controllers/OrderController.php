<?php

namespace App\Http\Controllers;

use App\Repository\CartRepository;
use App\Repository\OrderRepository;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $orderRepository;
    private $cartRepository;

    public function __construct(OrderRepository $orderRepository, CartRepository $cartRepository)
    {
        $this->middleware('auth');
        $this->orderRepository = $orderRepository;
        $this->cartRepository = $cartRepository;
    }

    public function index()
    {
        return view();
    }

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'phonenumber' => 'required| numeric | min: 10',
            'address' => 'required'
        ]);
        $this->orderRepository->create($request);
        return redirect('home');
    }
}
