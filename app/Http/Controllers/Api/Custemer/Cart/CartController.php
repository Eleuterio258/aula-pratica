<?php

namespace App\Http\Controllers\Api\Custemer\Cart;


use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{



    public function addToCard(Request $request)
    {

        if (Cart::where('product_id', $request->product_id)->where('user_id', Auth()->user()->id)->exists()) {
            Cart::where('product_id', $request->product_id)->where('user_id', Auth()->user()->id)->increment('quantity');
            return response()->json(['success' => 'Product is update in your cart'], 200);
        } else {
            $cart = Cart::query()->create([
                'user_id' => Auth()->user()->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);

            return response()->json(['data' => 'ok'], 200);
        }
    }

    public function getCart()
    {

        try {
            $carts = Cart::where('user_id',  Auth()->user()->id)->get();
            $cart = array();

            $total = 0;

            foreach ($carts as $item) {

                $data = [
                    "id" => $item->id,
                    "quantity" => $item->quantity,
                    "product_id" => $item->products->id,
                    "sub_total" => $item->quantity * $item->products->price,
                    "product" => [
                        "id" => $item->products->id,
                        "name" => $item->products->name,
                        "price" => $item->products->price,
                        "description" => $item->products->description,
                        "category" => $item->products->category->name,
                        "stock" => $item->products->stock,
                        "rating" => $item->products->rating,
                        "image" => $item->products->image,
                    ],

                ];
                $total += ($item->quantity * $item->products->price);
                array_push($cart, $data);
            }

            return response()->json([
                'cart' => $cart,
                "count" =>  $carts->count(),
                "total" => $total
            ], 200);
        } catch (\Exception $exception) {
            return response()->json(['data' => $exception], 500);
        }
    }

    public function delete($id)
    {
        try {
            $cart = Cart::query()->where('product_id', $id)->delete();
            return response()->json(['data' => 'ok'], 200);
        } catch (\Exception $exception) {
            return response()->json(['data' => $exception], 500);
        }
    }

    public function clerCart()
    {
        try {
            $cart =new Cart();
            $cart->delete();
            return response()->json(['data' => 'ok'], 200);
        } catch (\Exception $exception) {
            return response()->json(['data' => $exception], 500);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $cart = Cart::query()->where('product_id', $id)->first();
            $cart->quantity = $request->quantity;
            $cart->update();
            return response()->json(['data' => 'ok'], 200);
        } catch (\Exception $exception) {
            return response()->json(['data' => $exception], 500);
        }
    }

    public function incremento(Request $request)
    {


        try {
            Cart::where('product_id', $request->product_id)->where('user_id', Auth()->user()->id)->increment('quantity');
            return response()->json(['data' => 'ok'], 200);
        } catch (\Exception $exception) {
            return response()->json(['data' => $exception], 500);
        }
    }

    public function decremento(Request $request)
    {
        try {
            Cart::where('product_id', $request->product_id)->where('user_id', Auth()->user()->id)->decrement('quantity');

            return response()->json(['data' => 'ok'], 200);
        } catch (\Exception $exception) {
            return response()->json(['data' => $exception], 500);
        }
    }
}
