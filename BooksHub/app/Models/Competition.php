<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'description', 'category', 'start_time', 'end_time', 'is_active'];

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
