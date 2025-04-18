<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Category;
use App\Models\Book;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Submission;
use App\Models\Competition;

class UsersController extends Controller
{
    public function index() 
    {
        // Get one featured book per category
        $featuredBooks = Category::with(['books' => function ($query) {
            $query->orderBy('id', 'asc')->limit(1); // Get oldest book in category
        }])->get()->pluck('books')->flatten();
    
        // Get one top category book per category (excluding the featured book)
        $topCategoryBooks = Category::with(['books' => function ($query) {
            $query->orderBy('id', 'desc')->limit(1); // Get latest book in category
        }])->get()->pluck('books')->flatten();

        // Get top ordered books
        $topOrderedBooks = Book::select('books.id', 'books.title', 'books.author', 'books.cover_image', 'books.price', 'books.category_id')
        ->selectRaw('COUNT(order_items.book_id) as order_count')
        ->join('order_items', 'books.id', '=', 'order_items.book_id')
        ->groupBy('books.id', 'books.title', 'books.author', 'books.cover_image', 'books.price', 'books.category_id') // Explicit group by
        ->orderBy('order_count', 'desc')
        ->limit(5)
        ->get();

        // Winnner Details
        $winners = Submission::where('status', 'Winner')->with('user', 'competition')->get();

        return view('index', compact('featuredBooks', 'topCategoryBooks', 'topOrderedBooks', 'winners'));
    
    }

    public function about() 
    {
        // Get one top category book per category (excluding the featured book)
        $topCategoryBooks = Category::with(['books' => function ($query) {
            $query->orderBy('id', 'desc')->limit(1); // Get latest book in category
        }])->get()->pluck('books')->flatten();

        return view('about', compact('topCategoryBooks'));    
    }

    public function shop() 
    {
        // Fetch all categories with their books
        $categories = Category::with('books')->get();
        
        // Fetch all books for the shop page
        $books = Book::with('category')->paginate(12); // Paginate books (12 per page)
        
        return view('shop', compact('categories', 'books'));
    }

    public function shopDetails($id) 
    {
        // Fetch book details
        $book = Book::with('category')->findOrFail($id);
    
        // Fetch related books (same category but exclude the current book)
        $relatedBooks = Book::where('category_id', $book->category_id)
                            ->where('id', '!=', $id)
                            ->limit(5)
                            ->get();
    
        return view('shop-details', compact('book', 'relatedBooks'));
    }

    public function competitions() 
    {
        return view('competitions');    
    }

    public function cart($id) 
    {
        $books = Book::all();
        return view('cart');    
    }

    public function checkout() 
    {
        return view('checkout');    
    }

    public function feedback() 
    {
        return view('feedback');    
    }

    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Process the form (e.g., save to DB or send email)
        return back()->with('success', 'Message sent successfully!');
    }
}
