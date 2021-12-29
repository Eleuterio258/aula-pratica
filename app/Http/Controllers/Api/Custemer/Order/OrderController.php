<?php

namespace App\Http\Controllers\Api\Custemer\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function orderpending()
    {
        $orders =  Order::where('status', '0')
            ->where('user_id', Auth()->user()->id)->get();
        $order = array();
        foreach ($orders as $item) {

            $data = [
                "order_data" => date('d-m-y', strtotime($item->created_at)),
                "order_tacking" => $item->order_tacking,
                "total_price" => $item->total_price,
                "status" => $item->status == "0" ? 'Pending' : 'Complete',

            ];

            array_push($order, $data);
        }

        return $order;
    }
    public function ordercomplete()
    {
        $orders =  Order::where('status', '1')
            ->where('user_id', Auth()->user()->id)->get();
        $order = array();
        foreach ($orders as $item) {

            $data = [
                "order_data" => date('d-m-y', strtotime($item->created_at)),
                "order_tacking" => $item->order_tacking,
                "total_price" => $item->total_price,
                "status" => $item->status == "0" ? 'Pending' : 'Complete',

            ];

            array_push($order, $data);
        }

        return $order;
    }


    public function index()
    {
        $orders =  Order::all();
        $order = array();
        foreach ($orders as $item) {

            $data = [
                "order_data" => date('d-m-y', strtotime($item->created_at)),
                "order_tacking" => $item->order_tacking,
                "total_price" => $item->total_price,
                "status" => $item->status == "0" ? 'Pending' : 'Complete',

            ];

            array_push($order, $data);
        }

        return $order;
    }


    public function orderdetalhe($id)
   // public function orderdetalhe()
    {

        $orders =  Order::where('id', $id)->where('delivery_id','2')->first();
       // $orders =  Order::where('status', '1');
         $order = [];
          foreach ($orders->orderItems as $item) {
              $data = [
                  'name' =>  $item->products->name,
                  'quantity' => $item->quantity,
                  'price' => $item->price,
              ];

              array_push($order, $data);
          }


         $orderAddress = [
             'fistName' => $orders->fname,
             'lastName' => $orders->lname,
             'email' => $orders->email,
             'phone' => $orders->phone,
             'adress' => $orders->address,
             'postalcode' => $orders->postalcode,
             'city' => $orders->city,
             'province' => $orders->province,
             'status' => $orders->status,
             'frete' => $orders->frete,
             'subtotal' => $orders->subtotal,
             'total' => $orders->total_price,
             'order_tacking' => $orders->order_tacking,
             'order_data' => date('d-m-y', strtotime($orders->created_at)),
             'order_items' => $order,
         ];

        return $orderAddress;
    }


    public function allOrderDetalhe()
    {


        $orders =  Order::where('delivery_id', '2')->get();
        //  $orders =  Order::where('status', '1');
        // $order = [];
        // foreach ($orders->orderItems as $item) {
        //     $data = [
        //         'name' =>  $item->products->name,
        //         'quantity' => $item->quantity,
        //         'price' => $item->price,
        //     ];

        //     array_push($order, $data);
        // }


        // $orderAddress = [
        //     'fistName' => $orders->fname,
        //     'lastName' => $orders->lname,
        //     'email' => $orders->email,
        //     'phone' => $orders->phone,
        //     'adress' => $orders->address,
        //     'postalcode' => $orders->postalcode,
        //     'city' => $orders->city,
        //     'province' => $orders->province,
        //     'status' => $orders->status,
        //     'frete' => $orders->frete,
        //     'subtotal' => $orders->subtotal,
        //     'total' => $orders->total_price,
        //     'order_tacking' => $orders->order_tacking,
        //     'order_data' => date('d-m-y', strtotime($orders->created_at)),
        //     'order_items' => $order,
        // ];

        return $orders;
    }
}
