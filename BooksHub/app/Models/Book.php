<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'category_id', 'description', 'price', 'format', 'file_url', 'cover_image', 'stock_quantity', 'language', 'pages', 'publication_date', 'isbn', 'rating', 'rating_count'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Function to update the book's rating
    public function updateRating($newRating)
    {
        // Calculate the new average rating
        $totalRatings = ($this->rating * $this->rating_count) + $newRating;
        $this->rating_count += 1;
        $this->rating = $totalRatings / $this->rating_count;

        // Save the new rating and rating count
        $this->save();
    }
}

