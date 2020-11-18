<?php


namespace App\Repository;


use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderRepository
{

    public function getAll()
    {
        return Order::all();
    }

    public function findById($id)
    {
        return Order::findOrFail($id);
    }

    public function getBillId()
    {
        $bills = $this->getAll();
        foreach ($bills as $bill)
        {
            $billId = mt_rand(0,100000000);
            if ($billId !== $bill->id)
            {
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
        $bill->address = $request->address;
        $bill->phonenumber = $request->phonenumber;
        $bill->save();
        $this->storeBillProduct($billId);
        Session::put('cart',null);


    }

    public function getProductFromSession()
    {
        $products = [];
        foreach (Session::get('cart')->items as $product)
        {
            array_push($products,$product);
        }
        return $products;
    }

    public function storeBillProduct($bookID)
    {
        $products = $this->getProductFromSession();
        foreach ($products as $product)
        {
            DB::table('ordersdetail')->insert([
                'bookID' => $bookID,
                'product_id' => $product['item'] -> id,
                'quantity' => $product['qty']
            ]);
        }

    }

    public function getByUser($id)
    {
        return $this->billRepository->findByUSer($id);
    }
}
