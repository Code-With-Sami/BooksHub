<?php

use App\Models\Order;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Show all orders (Admin Panel)
    public function index()
    {
        $orders = Order::latest()->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }

    // Show a single order details
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

    // Store a new order (User places an order)
    public function store(Request $request)
    {

        $book = Book::findOrFail($request->book_id);
        $totalPrice = $book->price * $request->quantity;

        Order::create([
            'user_id' => Auth::id(),
            'book_id' => $request->book_id,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
            'status' => 'Pending',
            'payment_status' => 'Pending',
            'payment_method' => $request->payment_method,
            'shipping_address' => $request->shipping_address,
            'order_notes' => $request->order_notes ?? null,
            'tracking_number' => null
        ]);

        return back()->with('success', 'Order placed successfully!');
    }

    // Update order status (Admin Panel)
    public function update(Request $request, $id)
    {

        $order = Order::findOrFail($id);
        $order->update([
            'status' => $request->status,
            'payment_status' => $request->payment_status,
            'tracking_number' => $request->tracking_number
        ]);

        return back()->with('success', 'Order updated successfully!');
    }

    // Delete an order
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return back()->with('success', 'Order deleted successfully!');
    }
}
