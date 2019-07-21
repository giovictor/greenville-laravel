<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BorrowerBookSearchRequest;
use App\Repositories\BookRepositoryInterface;
use App\Repositories\ClassificationRepositoryInterface;
use App\Book;
use App\Classification;
class SearchController extends Controller
{
    public $book;
    public $classification;

    public function __construct(BookRepositoryInterface $book, ClassificationRepositoryInterface $classification)
    {
        $this->book = $book;
        $this->classification = $classification;
    }

    public function basicSearch(BorrowerBookSearchRequest $request)
    {
        $q = $request->validated()['q'];
        $type = $request->validated()['type'];
        $results = $this->book->basicSearch($q, $type);
        return view('borrower.searchresults', compact('results'));
    }

    public function collections($id)
    {
        $classification = $this->classification->getClassificationByID($id);
        $collections = $this->book->getBooksByClassification($id);
        return view('borrower.collections', compact('classification','collections'));
    }

    public function collectionsSearch(BorrowerBookSearchRequest $request, $id)
    {
        $classification =  $this->classification->getClassificationByID($id);
        $q = $request->validated()['q'];
        $type = $request->validated()['type'];
        $collections = $this->book->collectionsSearch($q, $type,$id);
        return view('borrower.collections', compact('classification','collections'));
    }

}


