<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())
            ->with('items.product')
            ->orderBy('created_at','desc')
            ->get();

        return view('orders.index', compact('orders'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity'   => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->input('product_id'));

        $order = Order::create([
            'order_number' => Str::uuid(),
            'user_id'      => Auth::id(),
        ]);

        OrderItem::create([
            'order_id'   => $order->id,
            'product_id' => $product->id,
            'quantity'   => $request->input('quantity'),
            'price'      => $product->price,
        ]);

        return redirect()->route('orders.index')
                         ->with('success', 'Order created successfully!');
    }
}
