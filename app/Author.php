<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Author extends Model
{
    protected $table = 'author';

    protected $primaryKey = 'authorID';


    public function books()
    {
        return $this->belongsToMany(Book::class, 'bookauthor', 'authorID', 'accession_no');
    }
}
