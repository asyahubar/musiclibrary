@extends('layouts.app')

@section('content')

    <div><a href="{{ route('library.index') }}">Cancel</a></div>

    <form action="{{ route('library.store') }}" method="POST">

    </form>

@endsection