@extends('index')

@section('content')

<h3>Welcome to your dashboard, {{Auth::user()->name}}!</h3>

@endsection
