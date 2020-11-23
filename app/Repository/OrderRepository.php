<?php


namespace App\Repository;


use App\Book;
use App\Order;
use App\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderRepository
{

    public function getAll()
    {
        $orders = DB::table('orders')
            ->leftJoin('statuses', 'statuses.id', '=', 'orders.status')
            ->select('orders.id', 'orders.userID', 'orders.total', 'orders.created_at', 'orders.name', 'orders.address', 'orders.phonenumber', 'statuses.statusname', 'statuses.color', 'orders.status')
            ->get();
        return $orders;
    }

    public function orderDetail($id)
    {
        $detail = DB::table('ordersdetail')
            ->leftJoin('books', 'books.id', '=', 'ordersdetail.bookID')
            ->select( 'books.title', 'books.image', 'ordersdetail.quantity', 'books.price')
            ->where('ordersdetail.ordercode', '=', $id);
        return $detail->get();
    }

    public function findById($id)
    {
        $order = DB::table('orders')
            ->leftJoin('statuses', 'statuses.id', '=', 'orders.status')
            ->select('orders.id', 'orders.userID', 'orders.total', 'orders.created_at', 'orders.name', 'orders.address', 'orders.phonenumber', 'statuses.statusname', 'statuses.color')
            ->where('orders.id', $id)
            ->first();
        return $order;
    }

    public function changeStatusId($id)
    {
        $color = DB::table('orders')
            ->leftJoin('statuses', 'statuses.id', '=', 'orders.status')
            ->select('statuses.color')
            ->where('orders.id', $id)
            ->first();
        return $color;
    }

    public function getBillId()
    {
        $bills = $this->getAll();
        foreach ($bills as $bill) {
            $billId = mt_rand(0, 100000000);
            if ($billId !== $bill->id) {
                return $billId;
            }
            return 'request time out';
        }

    }

    public function create($request)
    {
        $billId = $this->getBillId();
        $bill = new Order();
        $bill->id = $billId;
        $bill->userID = Auth::user()->id;
        $bill->total = Session::get('cart')->totalPrice;
        $bill->name = $request->name;
        $bill->address = $request->address;
        $bill->phonenumber = $request->phonenumber;
        $bill->status = 1;
        $bill->save();
        $this->storeBillProduct($billId);
        Session::put('cart', null);
    }

    public function getProductFromSession()
    {
        $products = [];
        foreach (Session::get('cart')->items as $product) {
            array_push($products, $product);
        }
        return $products;
    }

    public function storeBillProduct($billId)
    {
        $products = $this->getProductFromSession();
        foreach ($products as $product) {
            DB::table('ordersdetail')->insert([
                'bookID' => $product['item']->id,
                'quantity' => $product['qty'],
                'ordercode' => $billId,
            ]);

            $book = Book::findOrFail($product['item']->id);
            $book->quantity = $book->quantity - $product['qty'];
            $book->save();
        }

    }

    public function getByUser($id)
    {
        $orders = Order::where('userID', $id)->orderBy('created_at', 'desc')->get();
        return $orders;
    }

    public function filter($params)
    {
        $result = DB::table('orders')
            ->leftJoin('statuses', 'statuses.id', '=', 'orders.status')
            ->select('orders.id', 'orders.userID', 'orders.total', 'orders.created_at', 'orders.name', 'orders.address', 'orders.phonenumber', 'statuses.statusname', 'statuses.color', 'orders.status');
            if ($params != null) {
                foreach ($params as $param) {
                    if ($param['value'] != null) {
                        $result->where($param['field'], 'like', $param['value'] . '%');
                    }
                }
            }
        $count = $result->count();
        return ['result' => $result->get(), 'count' => $count];
    }
}
