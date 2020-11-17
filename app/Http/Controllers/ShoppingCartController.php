<?php

namespace App\Http\Controllers;

use App\Repository\CartRepository;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public $cartRepository;

    public function __construct(CartRepository $cartRepository)
    {

        $this->cartRepository = $cartRepository;
    }

    public function index()
    {
        $cart = $this->cartRepository->index();
//        return view('template.cart.shopping-cart', compact('cart'));
    }

    public function addToCart(Request $request, $productId)
    {
        $itemQty = $request->get('qty');
        $this->cartRepository->addToCart($request,$productId,$itemQty);
        return redirect()->route('cart.index');
    }
    public function removeProductIntoCart($productId)
    {
        $this->cartRepository->removeProductIntoCart($productId);
        return redirect()->back();
    }

    public function updateProductIntoCart(Request $request, $productId)
    {
        $this->cartRepository->updateProductIntoCart($request,$productId);
        return redirect()->back();
    }

    public function back()
    {
        return redirect()->back();
    }
}
