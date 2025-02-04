<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Category;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    public function show()
    {
        // $book = Book::findOrFail();
        return view('admin.books');
    }

    public function createBooks()
    {
        return view('admin.create-books');  
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
