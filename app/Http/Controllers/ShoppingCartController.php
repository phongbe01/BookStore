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
        $carts = $this->cartRepository->index();
        return view('cart.index', compact('carts'));
    }

    public function addToCart(Request $request, $productId)
    {
        $itemQty = $request->get('qty');
        $this->cartRepository->addToCart($request,$productId,$itemQty == null ? 1 : $itemQty);
        $total = $this->cartRepository->index()->totalQty;
        return response()->json(['status' => 200, 'total' => $total]);
    }
    public function removeProductIntoCart($productId)
    {
        $this->cartRepository->removeProductIntoCart($productId);
        $carts = $this->cartRepository->index();
        $total = $carts->totalQty;
        $html = view('cart.empty', compact('carts'))->render();
        return response()->json(['html' => $html, 'total' => $total]);
    }

    public function updateProductIntoCart(Request $request, $productId)
    {
        $param = $request->get('param');
        $this->cartRepository->updateProductIntoCart($param,$productId);
        $totalQty = $this->cartRepository->index()->totalQty;
        $totalPrice = $this->cartRepository->index()->totalPrice;
        return response()->json(['status' => 200, 'totalQty' => $totalQty, 'totalPrice' => $totalPrice]);

    }

    public function back()
    {
        return redirect()->back();
    }
}
