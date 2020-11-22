<?php

namespace App\Http\Controllers;

use App\Repository\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $OrderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->OrderRepository = $orderRepository;
    }

    public function getBills()
    {
        $orders = $this->OrderRepository->getByUser(Auth::user()->id);
        if (!empty($orders))
        {
            return view('user.listOrder', compact('orders'));
        }
        return view();
    }

    public function getBillDetail($id)
    {
        $orders = $this->OrderRepository->orderDetail($id);
        return view('user.orderDetail', compact('orders'));
    }
}
