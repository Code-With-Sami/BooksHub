<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Book;

class BooksController extends Controller
{
    public function show()
    {
        $books = Book::with('category')->get();
        return view('admin.books', compact('books'));

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
        if ($request->hasFile('cover_image')) {
            $img = time().'-'.$request->cover_image->getClientOriginalName();
            $request->cover_image->move(public_path('booksImages'),$img);
            $books->cover_image = $img;
        }
        if ($request->hasFile('file_url')) {
            $file = time().'-'.$request->file_url->getClientOriginalName();
            $request->file_url->move(public_path('booksPDF'),$file);
            $books->file_url = $file;
        }
        $books->stock_quantity = request('stock_quantity');
        $books->language = request('language');
        $books->pages = request('pages');
        $books->publication_date = request('publication_date');
        $books->isbn = request('isbn');
        $books->save();

        return redirect('admin-books');
    }

    public function editBooks($id)
    {
        $book = Book::with('category')->find($id);
        $categories = Category::all();
        return view('admin.edit-books', compact('book', 'categories'));
    }

    public function updateBooks(Request $request, $id): RedirectResponse
    {
        $books = Book::find($id);

        $books->title = request('title');
        $books->author = request('author');
        $books->category_id = request('category_id');
        $books->description = request('description');
        $books->price = request('price');
        $books->format = request('format');
        if ($request->hasFile('cover_image')) {
            $img = time().'-'.$request->cover_image->getClientOriginalName();
            $request->cover_image->move(public_path('booksImages'),$img);
            $books->cover_image = $img;
        }
        if ($request->hasFile('file_url')) {
            $file = time().'-'.$request->file_url->getClientOriginalName();
            $request->file_url->move(public_path('booksPDF'),$file);
            $books->file_url = $file;
        }
        $books->stock_quantity = request('stock_quantity');
        $books->language = request('language');
        $books->pages = request('pages');
        $books->publication_date = request('publication_date');
        $books->isbn = request('isbn');
        $books->save();

        return redirect('admin-books');
    }

    public function deleteBooks($id)
    {
        Book::find($id)->delete();
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
