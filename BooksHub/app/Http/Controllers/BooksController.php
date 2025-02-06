<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Book;

class BooksController extends Controller
{
    public function show()
    {
        // $book = Book::findOrFail();
        $categories = Category::all();
        return view('admin.books', compact('categories'));
    }
    
    public function createBooks()
    {  
        $categories = Category::all();
        return view('admin.create-books', compact('categories'));  
    }

    public function storeBooks(Request $request) 
    {
        $books = new Book();

        $books->title = request('title');
        $books->author = request('author');
        $books->category_id = request('category_id');
        $books->description = request('description');
        $books->price = request('price');
        $books->format = request('format');
        if ($request->hasFile('cover_img')) {
            $img = time().'-'.$request->cover_img->getClientOriginalName();
            $request->cover_img->move(public_path('booksImages'),$img);
            $books->cover_img = $img;
        }
        // $books->file_url = request('file_url');
        $books->stock_quantity = request('stock_quantity');
        $books->language = request('language');
        $books->pages = request('pages');
        $books->publication_date = request('publication_date');
        $books->isbn = request('isbn');
        // $books->rating = request('rating');
        // $books->rating_count = request('rating_count');
        $books->save();

        return redirect('admin-books');
    }

    public function rateBook(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|numeric|min:0|max:5',
        ]);

        $book = Book::findOrFail($id);
        $book->updateRating($request->rating);

        return back()->with('success', 'Thank you for your rating!');
    }

    public function booksCategories()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }

    public function createCategories()
    {
        return view('admin.create-categories');
    }

    public function storeCategories(Request $request)
    {
        $category = new Category();
        $category->name = $request->title;
        $category->description = $request->description;
        $category->save();
        return redirect('admin-categories');
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('admin.edit-categories', compact('category'));
    }
    
    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->title;
        $category->description = $request->description;
        $category->save();
        return redirect('admin-categories');
    }

    public function deleteCategory($id)
    {
        Category::find($id)->delete();
        return redirect('admin-categories');
    }

}
