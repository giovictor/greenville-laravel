<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use DB;

class SearchController extends Controller
{
    public function borrowerBookSearch(Request $request)
    {
        $request->validate([
            'q'=>'required',
            'type'=>'required'
        ]);

        $q = $request->input('q');
        $type = $request->input('type');

        $results = DB::table('book')
                    ->join('bookauthor', 'bookauthor.accession_no', '=', 'book.accession_no')
                    ->join('author', 'author.authorID', '=', 'bookauthor.authorID')
                    ->leftJoin('publisher', 'publisher.publisherID', '=', 'book.publisherID')
                    ->join('classification', 'classification.classificationID', 'book.classificationID')
                    ->select('book.accession_no', 'booktitle', DB::raw("GROUP_CONCAT(DISTINCT author SEPARATOR', ') AS authors"), 'classification', 'publisher', 'publishingyear')
                    ->groupBy('book.accession_no', 'booktitle', 'classification', 'publisher', 'publishingyear')
                    ->where($type, 'LIKE', '%'.$q.'%')
                    ->paginate(10);

        return view('borrower.searchresults', compact('results','type'));
    }
}


