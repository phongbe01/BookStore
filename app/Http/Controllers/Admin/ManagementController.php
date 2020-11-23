<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\BookRepository;
use App\Repository\CategoryRepository;
use App\Repository\OrderRepository;
use App\Repository\UserRepository;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    private $orderRepository;
    private $bookRepository;
    private $userRepository;
    private $cateRepository;

    public function __construct(OrderRepository $orderRepository, BookRepository $bookRepository, UserRepository $userRepository, CategoryRepository $categoryRepository)
    {
        $this->bookRepository = $bookRepository;
        $this->orderRepository = $orderRepository;
        $this->userRepository = $userRepository;
        $this->cateRepository = $categoryRepository;
    }

    public function index()
    {
        $orders = $this->orderRepository->filterOrderByStatus();
        $months = $this->orderRepository->totalOrderByMonth();
        return view('admin.management', compact('orders', 'months'));
    }
}
