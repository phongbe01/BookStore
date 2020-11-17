<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{
    public $items= null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart)
        {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function  add($item, $id,$itemQty)
    {
        $storeItem = ['qty' => $itemQty,'price'=> $item->price, 'item' => $item];
        if ($this->items)   {
            if (array_key_exists($id,$this->items)) {
                $storeItem = $this->items[$id];
            }
        }
        $storeItem['price'] = $item->price * $storeItem['qty'];
        $this->items[$id] = $storeItem;
        $this->totalQty = $this->totalQty + $storeItem['qty']  ;
        $this->totalPrice += $storeItem['price'];
    }

    public function remove($id)
    {
        if ($this->items) {
            $productsIntoCart = $this->items;
            if (array_key_exists($id, $productsIntoCart)) {
                $priceProDelete = $productsIntoCart[$id]['price'];
                $qtyProDelete = $productsIntoCart[$id]['qty'];
                $this->totalPrice -= $priceProDelete;
                $this->totalQty -= $qtyProDelete;
                //giam tong so luong san pham co trong gio hang
                // $this->totalQty--;
                unset($productsIntoCart[$id]);
//                dd($productsIntoCart[$id]);
                $this->items = $productsIntoCart;
            }
        }
    }
    public function update($request, $id)
    {
        if ($this->items) {
            $itemsIntoCart = $this->items;
            if (array_key_exists($id, $itemsIntoCart)) {
                $itemUpdate = $itemsIntoCart[$id];
                //update tong so luong san pham trong gio hang
                $qtyUpdate = $request->qty - $itemUpdate['qty'];
                $this->totalQty += $qtyUpdate;
                //update tong gia cua gio hang
                $priceUpdate = $itemUpdate['item']->price * $request->qty - $itemUpdate['price'];
                $this->totalPrice += $priceUpdate;
                //update so luong san pham do
                $itemUpdate['qty'] = $request->qty;
                //update tong gia cua san pham do
                $itemUpdate['price'] = $itemUpdate['item']->price * $request->qty;
                $this->items[$id] = $itemUpdate;
            }
        }
    }
}
