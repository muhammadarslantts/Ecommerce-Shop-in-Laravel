<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function openHomePage()
    {
        $products = Product::all();
        // there are three way to pass varible in view,
        // return view('site.index', compact('products'));
        // return view('site.index', ['products' => $products]);
        return view('site.index')->with('products', $products);
    }
    public function openProductDetails()
    {
        return view('site.product-detail');
    }


    public function openCartPage()
    {
        return view('site.cart');
    }
    public function openCheckoutPage()
    {
        return view('site.checkout');
    }

    public function addProductIntoCart(Request $request)
    {
        $product_id = $request->product_id;
        $product = Product::find($product_id);
        if (!$product) {
            return response()->json([
                'error' => 'unable to find this product'
            ], 404);
        }
        $cart = session()->get('cart');
        $productid = $product->id;
        // session()->flush();
        if (!$cart) {
            $cart = [
                $productid  => [
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                    'image' => $product->gallery ? $product->gallery->image : '',
                ]

            ];
            session()->put('cart', $cart);
        }
        if (isset($cart[$productid])) {
            $cart[$productid]['quantity']++;
            session()->put('cart', $cart);
        } else {
            $cart[$productid] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'image' => $product->gallery ? $product->gallery->image : '',
            ];
            session()->put('cart', $cart);
        }



        return response()->json([
            'products' => $cart,

        ], 201);
    }
    public function calculatecartitems()
    {
        $cart = session()->get('cart');
        $totalcartitems = count($cart);
        return response()->json([

            'totalcartitems' => $totalcartitems
        ], 201);
    }
}
