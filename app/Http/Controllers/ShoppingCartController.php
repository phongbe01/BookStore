<?php

namespace App\Http\Controllers;

use App\Repository\CartRepository;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
//        dd($carts);
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
        $total = $this->cartRepository->index()->totalQty;
        return response()->json(['status' => 200, 'total' => $total]);
    }

    public function updateProductIntoCart(Request $request, $productId)
    {
        $param = $request->get('param');
        $this->cartRepository->updateProductIntoCart($param,$productId);
//        return redirect()->back();
        $total = $this->cartRepository->index()->totalQty;
        return response()->json(['total' => $total]);

    }

    public function back()
    {
        return redirect()->back();
    }
}
