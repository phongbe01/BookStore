<?php


namespace App\Repository;



use App\Book;
use App\Cart;
use Illuminate\Support\Facades\Session;

class CartRepository
{
    public function index()
    {
        return $cart = Session::get('cart');
    }

    public function addToCart($request, $productId,$itemQty)
    {
        $product = Book::findOrFail($productId);
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
        } else {
            $oldCart = null;
        }
        //khoi tao gio hang
        $cart = new Cart($oldCart);
        if ($itemQty == null)
        {
            $itemQty = 1;
        }
        $cart->add($product, $product->id,$itemQty);
        //luu du lieu gio hang vao session
        Session::put('cart', $cart);
        Session::flash('success', 'Thêm sản phẩm khỏi giỏ hàng thành công');

    }

    public function removeProductIntoCart($productId)
    {
        // TODO: Implement removeProductIntoCart() method.
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count($oldCart->items) > 0) {
                $cart = new Cart($oldCart);
                $cart->remove($productId);
                Session::put('cart', $cart);
                Session::flash('success', 'Xóa sản phẩm khỏi giỏ hàng thành công');
            } else {
                Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
            }
        } else {
            Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
        }

    }

    public function updateProductIntoCart($request, $productId)
    {
        // TODO: Implement updateProductIntoCart() method.
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count($oldCart->items) > 0) {
                $cart = new Cart($oldCart);
                $cart->update($request, $productId);
                //dd($cart);
                Session::put('cart', $cart);
                //   Session::flash('success', 'Cập nhật thành công!');
            } else {
                Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
            }
        } else {
            Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
        }

    }
}
