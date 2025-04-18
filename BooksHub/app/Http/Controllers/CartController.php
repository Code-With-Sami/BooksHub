<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Controllers\OrderController;

class CartController extends Controller
{
    // Show cart page
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    // Add item to cart using an anchor tag link
    public function addToCart($book_id)
    {
        $book = Book::findOrFail($book_id);
        $cart = session()->get('cart', []);

        if (isset($cart[$book->id])) {
            $cart[$book->id]['quantity'] += 1; // Default quantity = 1, increase if already in cart
        } else {
            $cart[$book->id] = [
                'title' => $book->title,
                'price' => $book->price,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.index')->with('success', 'Book added to cart!');
    }

    // Remove item from cart
    public function removeFromCart($book_id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$book_id])) {
            unset($cart[$book_id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Item removed from cart.');
    }

    // Clear cart
    public function clearCart()
    {
        session()->forget('cart');
        return back()->with('success', 'Cart cleared.');
    }
}
