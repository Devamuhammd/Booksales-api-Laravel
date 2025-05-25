<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'bio',
        'birth_date'
    ];

    protected $casts = [
        'birth_date' => 'date'
    ];

    // Relationship with books if needed later
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}