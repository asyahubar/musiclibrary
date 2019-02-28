@extends('layouts.app')

@section('content')

    <div><a href="{{ route('library.index') }}">Cancel</a></div>

    <form action="{{ route('library.store') }}" method="POST">
        <div class="form-group">
            <select name="artist_id" id="artist_id">
                <option value=""></option>
            @foreach($artists as $value => $id)
                    <option value="{{ $id }}">{{ $value }}</option>
                @endforeach
            </select>
            <input class="w-25 p-3 form-control" type="text" placeholder="Artist title" name="artist_name" id="artist">
        </div>
        <div class="form-group">
            <input class="w-25 p-3 form-control" type="text" placeholder="Album title">
        </div>
        <div class="form-group">
            <label for="cover_url">Album cover</label>
            <input type="file" class="w-25 p-3 form-control-file" id="exampleFormControlFile1" name="cover_url">
        </div>
    </form>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Add new song</h1>
                <form action="/songs" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="title">Title
                        </label>
                        <input type="text" class="form-control" id="title" name="title">

                    </div>

                    <div class="form-group">
                        <label for="artist_id">Select artist
                        </label>
                        <select name="artist_id" id="artist_id">
                            <option value=""></option>
                            @foreach($artists as $id => $artist)
                                <option value="{{$id}}">{{$artist}}</option>
                            @endforeach
                        </select>


                    </div>

                    <div class="form-group">
                        <label for="artist">-- or enter new
                        </label>
                        <input type="text" class="form-control" id="artist" name="artist">


                    </div>

                    <div class="form-group">
                        <label for="album_id">Select album
                        </label>
                        <select name="album_id" id="album_id">
                            <option value=""></option>
                            @foreach($albums as $id => $album)
                                <option value="{{$id}}">{{$album}}</option>
                            @endforeach
                        </select>


                    </div>

                    <div class="form-group">
                        <label for="album">-- or enter new
                        </label>
                        <input type="text" class="form-control" id="album" name="album">


                    </div>

                    <div>
                        <button class="btn btn-primary">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection