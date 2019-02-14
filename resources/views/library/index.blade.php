@extends('layouts.app')

@section('content')

<div class="add-new"><a href="{{ route('library.create') }}">Add new</a></div>

    @foreach($artists as $artist)
        <div class="artist">
            <h2>
                {{ $artist->name }}
                <span class="type">artist</span>
                 |
                <span class="option-for-item">
                    <a href="{{ route('library.edit', $artist->id) }}">edit</a>
                    <a href="{{ route('library.destroy', $artist->id) }}">delete</a>
                </span>
            </h2>
            <hr>
            <div class="albums">
                {{-- each album will be loppped --}}
                @foreach($artist->albums as $album)
                    <div class="single-album">
                        <img src="{{ $album->cover_url }}" alt="Album cover" width="200" height="200">
                        <h3>
                            {{ $album->title }}
                            <span class="type">album</span>
                             |
                            <span class="option-for-item">
                                <a href="{{ route('library.edit', $album->id) }}">edit</a>
                                <a href="{{ route('library.destroy', $album->id) }}">delete</a>
                            </span>
                        </h3>
                        {{-- a loop to display each song --}}
                        @foreach($album->songs as $song)
                            <div class="songs">
                            <ul>
                                <li>
                                    {{ $song->title }}
                                    <span class="type">song</span>
                                     |
                                    <span class="option-for-item">
                                        <a href="{{ route('library.edit', $song->id) }}">edit</a>
                                        <a href="{{ route('library.destroy', $song->id) }}">delete</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

@endsection

