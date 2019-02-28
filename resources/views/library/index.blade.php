@extends('layouts.app')

@section('content')



<div class="add-new"><a href="{{ route('library.create') }}">Add new</a></div>

    <songs-component></songs-component>

    {{-- @foreach($artists as $artist)
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
                @foreach($artist->albums as $album)
                    <div class="single-album">
                        <img src="{{ $album->cover_url }}" alt="Album cover" width="200" height="200">
                        <h3>
                            {{ $album->title }}
                            <span class="badge">album</span>
                        </h3>
                        @foreach($album->songs as $song)
                            <div class="songs">
                            <ul>
                                @if($song->album_id === $album->id)
                                <li>
                                    {{ $song->title }}
                                    <span class="badge">song</span>
                                </li>
                                @endif
                            </ul>
                        </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach --}}

@endsection

