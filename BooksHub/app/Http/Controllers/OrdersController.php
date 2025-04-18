<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Book;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;

class OrdersController extends Controller
{
    /// Show all orders (Admin Panel)
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders',  compact('orders'));
    }

    // Show a single order details
    public function show($id)
    {
        $order = Order::with('items.book')->findOrFail($id);
        return view('admin.order-details', compact('order'));
    }

    // Store a new order (User places an order with multiple books)
    public function store(Request $request)
    {
        // $request->validate([
        //     'books' => 'required|array',
        //     'books.*.book_id' => 'required|exists:books,id',
        //     'books.*.quantity' => 'required|integer|min:1',
        //     'shipping_address' => 'required|string',
        //     'payment_method' => 'required|string'
        // ]);

        $totalPrice = 0;
        foreach ($request->books as $book) {
            $bookData = Book::findOrFail($book['book_id']);
            $totalPrice += $bookData->price * $book['quantity'];
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $totalPrice,
            'status' => 'Pending',
            'payment_status' => 'Pending',
            'payment_method' => $request->payment_method,
            'shipping_address' => $request->shipping_address,
            'order_notes' => $request->order_notes ?? null,
            'tracking_number' => null
        ]);

        foreach ($request->books as $book) {
            OrderItem::create([
                'order_id' => $order->id,
                'book_id' => $book['book_id'],
                'quantity' => $book['quantity'],
                'price' => Book::find($book['book_id'])->price
            ]);
        }

        // return back()->with('success', 'Order placed successfully!');
    }

    // Update order status (Admin Panel)
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Pending,Processing,Shipped,Delivered',
            'payment_status' => 'required|in:Pending,Paid,Failed'
        ]);

        $order = Order::findOrFail($id);
        $order->update([
            'status' => $request->status,
            'payment_status' => $request->payment_status,
        ]);

        return back()->with('success', 'Order updated successfully!');
    }

    public function updateTracking(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:Pending,Processing,Shipped,Delivered,Cancelled',
        'tracking_number' => 'nullable|string'
    ]);

    $order = Order::findOrFail($id);
    $order->update([
        'status' => $request->status,
        'tracking_number' => $request->tracking_number
    ]);

    return back()->with('success', 'Tracking updated successfully!');
}

    // Delete an order
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->items()->delete(); // Delete order items first
        $order->delete();

        return back()->with('success', 'Order deleted successfully!');
    }

    public function userOrders()
    {
    $orders = Order::where('user_id', Auth::id())->with('items.book')->latest()->get();
    return view('orders.user_orders', compact('orders'));
    }
}
