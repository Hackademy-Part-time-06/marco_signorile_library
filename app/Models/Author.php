<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable=['name','surname','date_birth'];
    protected $casts = [
        'date_birth'=>'date', 
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
