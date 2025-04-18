<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        // Fetch orders only for the logged-in user
        $orders = Order::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('user-orders', compact('orders'));
    }

    public function show($id)
    {
        // Fetch a specific order if it belongs to the logged-in user
        $order = Order::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        return view('user-order-show', compact('order'));
    }
}
