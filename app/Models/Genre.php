<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';

    protected $fillable = [
        'name',
        'description',
    ];

    public $timestamps = false;

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
