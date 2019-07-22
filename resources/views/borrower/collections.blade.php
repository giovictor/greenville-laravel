@extends('index')

@section('content')

<div class="collectionsearch">
    <h2>{{strtoupper($classification->classification)}}</h2>
    <h4>Search for Greenville College's {{$classification->classification}} collections</h4>
    <form action={{route('collectionssearch', ['id'=>$classification->classificationID])}} method="GET" class="form-inline" id="collectionssearchform">
        <div class="form-group">
            Limit to: <select name="type" class="form-control searchtype">
                <option value="booktitle">Title</option>
                <option value="author">Author</option>
                <option value="publisher">Publisher</option>
                <option value="publishingyear">Year</option>
            </select>
        </div>
        <div class="form-group">
            <input class="form-control collectionssearchbox" type="text" name="q">
            <button id="button" class="btn btn-success btn-sm collectionssearchbtn" type="submit">Search</button>
        </div>
    </form>
</div>


@include('../partials.errors')

<div class="table-responsive searchresults">
    <table class="table table-hover">
        <tr>
            <th>Accession No.</th>
            <th>Title</th>
            <th>Authors</th>
            <th>Publication Details</th>
        </tr>

        @foreach($collections as $book)
            <tr>
                <td>{{$book->accession_no}}</td>
                <td>{{$book->booktitle}}</td>
                <td>
                    @foreach($book->authors as $authors)
                        {{$authors->author}}
                    @endforeach
                </td>
                <td>{{!empty($book->publisher) ? $book->publisher->publisher : ''}} c{{$book->publishingyear}}</td>
            </tr>
        @endforeach
    </table>
    {{$collections->appends(request()->query())->links()}}
</div>

@endsection
