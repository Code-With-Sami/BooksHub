<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Controllers\OrdersController;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        return view('checkout', compact('cart'));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'shipping_address' => 'required|string',
            'payment_method' => 'required|string'
        ]);

        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Calculate total price
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }

        // Create order
        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $totalPrice,
            'status' => 'Pending',
            'payment_status' => 'Pending',
            'payment_method' => $request->payment_method,
            'shipping_address' => $request->shipping_address,
            'tracking_number' => null
        ]);

        // Store order items
        foreach ($cart as $book_id => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'book_id' => $book_id,
                'quantity' => $item['quantity'],
                'price' => $item['price']
            ]);
        }

        // Clear cart after order is placed
        session()->forget('cart');

        return redirect()->route('user.orders')->with('success', 'Order placed successfully!');
    }
}
