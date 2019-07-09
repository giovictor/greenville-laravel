@extends('index')

@section('content')

@include('../partials.basicsearch')

@include('../partials.errors')

<div class="table-responsive searchresults">
    <table class="table table-hover">
        <tr>
            <th>Accession No.</th>
            <th>Title</th>
            <th>Authors</th>
            <th>Publication Details</th>
            <th>Classification</th>
        </tr>

        @foreach($results as $book)
            <tr>
                <td>{{$book->accession_no}}</td>
                <td>{{$book->booktitle}}</td>
                <td>{{$book->authors}}</td>
                <td>{{$book->publisher}} c{{$book->publishingyear}}</td>
                <td>{{$book->classification}}</td>
            </tr>
        @endforeach
    </table>
    {{$results->appends(request()->query())->links()}}
</div>

@endsection
