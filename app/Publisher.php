<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Publisher extends Model
{
    protected $table = 'publisher';

    protected $primaryKey = 'publisherID';

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
