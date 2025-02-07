<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
 public function index()
 {
     $orders = Order::with('user')->get();
     return view('orders.index', compact('orders'));
 }

    public function show(Order $order)
    {
        $order->load('orderDetails.product');
        return view('orders.show', compact('order'));
    }

    public function details($id)
    {
        $order = Order::with('orderDetails.product')->findOrFail($id);
        return view('orders.details', compact('order'));
    }

    public function store()
    {
        $user = Auth()->user();
        $cart = session()->get('cart');
        var_dump($cart);

        DB::beginTransaction();
        try {
            $order =new Order();
            $order->user_id = $user->id;
            $order->save();

            foreach ($cart as $product_id => $amount) {
                $product = Product::find($product_id);
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $product_id;
                $orderDetail->amount = $amount;
                $orderDetail->price = $product->price;
                $orderDetail->save();
            }

            DB::commit();
            session()->put('cart', []);
           
        } catch (\Exception $e) {
            DB::rollBack();
            // return redirect()->back()->with('error', 'Order failed to create');
            echo $e->getMessage();
        }
    }


}
