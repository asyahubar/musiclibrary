@extends('layouts.app')

@section('content')

<div class="add-new"><a href="{{ route('library.create') }}">Add new</a></div>

@dd($albums->first())
    @foreach($artists as $artist)
        <div class="artist">
            <h2>{{ $artist->name }}</h2>
            <hr>
            <div class="albums">
                {{-- each album will be loppped --}}
                <div class="single-album">
                    <img src="" alt="Album cover">
                    <h3>Album title</h3>
                    {{-- a loop to display each song --}}
                    <div class="songs">
                        <ul>
                            <li>Song title</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

