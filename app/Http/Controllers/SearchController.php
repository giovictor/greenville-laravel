<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Classification;

class SearchController extends Controller
{
    public function basicSearch(Request $request)
    {
        $request->validate([
            'q'=>'required',
            'type'=>'required'
        ]);

        if(request('type')=='author') {
            $results = Book::with('authors')->whereHas('authors', function($query) {
                $query->where(request('type'), 'LIKE', '%'.request('q').'%');
            })->paginate(10);
        } else if(request('type')=='publisher') {
            $results = Book::with('publisher')->whereHas('publisher', function($query) {
                $query->where(request('type'), 'LIKE', '%'.request('q').'%');
            })->paginate(10);
        } else {
            $results = Book::with('authors', 'classification', 'publisher')->where(request('type'), 'LIKE', '%'.request('q').'%')->paginate(10);
        }

        return view('borrower.searchresults', compact('results'));
    }

    public function collections($id)
    {
        $classification = Classification::where('classificationID', '=' , $id)->first();
        $collections = Book::with('authors','publisher')->where('classificationID','=', $id)->paginate(10);
        return view('borrower.collections', compact('classification','collections'));
    }

    public function collectionsSearch(Request $request, $id)
    {
        $classification = Classification::where('classificationID', '=' , $id)->first();

        $request->validate([
            'q'=>'required',
            'type'=>'required'
        ]);

        if(request('type')=='author') {
            $collections = Book::with('authors')->whereHas('authors', function($query) {
                $query->where(request('type'), 'LIKE', '%'.request('q').'%');
            })->where('classificationID','=',$id)->paginate(10);
        } else if(request('type')=='publisher') {
            $collections = Book::with('publisher')->whereHas('publisher', function($query) {
                $query->where(request('type'), 'LIKE', '%'.request('q').'%');
            })->where('classificationID','=',$id)->paginate(10);
        } else {
            $collections = Book::with('authors', 'classification', 'publisher')->where(request('type'), 'LIKE', '%'.request('q').'%')->where('classificationID','=',$id)->paginate(10);
        }

        return view('borrower.collections', compact('classification','collections'));
    }

}


