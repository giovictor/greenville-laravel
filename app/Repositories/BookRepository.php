<?php

namespace App\Repositories;

use App\Book;
use App\Classification;

class BookRepository implements BookRepositoryInterface {

    public function basicSearch($q, $type)
    {
        if($type=='author') {
            $results = Book::with('authors')->whereHas('authors', function($query)  use($q, $type) {
                $query->where($type, 'LIKE', '%'.$q.'%');
            })->paginate(10);
        } else if($type=='publisher') {
            $results = Book::with('publisher')->whereHas('publisher', function($query) use($q, $type) {
                $query->where($type, 'LIKE', '%'.$q.'%');
            })->paginate(10);
        } else {
            $results = Book::with('authors', 'classification', 'publisher')->where($type, 'LIKE', '%'.$q.'%')->paginate(10);
        }
        return $results;
    }

    public function collectionsSearch($q, $type, $id)
    {
        if($type=='author') {
            $collections = Book::with('authors')->whereHas('authors', function($query)  use($q, $type) {
                $query->where($type, 'LIKE', '%'.$q.'%');
            })->where('classificationID','=',$id)->paginate(10);
        } else if($type=='publisher') {
            $collections = Book::with('publisher')->whereHas('publisher', function($query) use($q, $type) {
                $query->where($type, 'LIKE', '%'.$q.'%');
            })->where('classificationID','=',$id)->paginate(10);
        } else {
            $collections = Book::with('authors', 'classification', 'publisher')->where($type, 'LIKE', '%'.$q.'%')->where('classificationID','=',$id)->paginate(10);
        }
        return $collections;
    }

    public function getBooksByClassification($id)
    {
        return Book::with('authors','publisher','classification')->where('classificationID','=', $id)->paginate(10);
    }
}

?>
