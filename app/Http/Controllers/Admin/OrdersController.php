<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\Repository\OrderRepository;
use App\Status;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    private $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $orders = $this->orderRepository->getAll();
        $statues = Status::all();
        return view('admin.order.index', compact('orders', 'statues'));
    }

    public function filter(Request $request)
    {
        $params = $request->get('params');
        $array = $this->orderRepository->filter($params);
        $orders = $array['result'];
        $count = $array['count'];
        $html = view('admin.order.table', compact('orders'))->render();
        return response()->json(['key' => $html, 'count' => $count]);
    }

    public function changeOrderStatus(Request $request)
    {
        $statusCode = $request->get('status');
        $id = $request->get('orderID');
        $order = Order::findOrFail($id);
        $order->status = $statusCode;
        $order->save();
        return response()->json($this->orderRepository->changeStatusId($id));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $order = $this->orderRepository->findById($id);
        $statues = Status::all();
        $ordersDetail = $this->orderRepository->orderDetail($id);
        return view('admin.order.edit', compact('order', 'ordersDetail', 'statues'));
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
