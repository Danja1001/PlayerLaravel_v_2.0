@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Dashboard</div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($Songs as $song)
                        <form  method="post" action="{{route('UpdateSong')}}" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name track</label>
                                <input type="text" name="name" class="form-control"  id="name"  value="{!! $song->name !!}">
                                <input type="hidden" name="Id" id="Id" value="{!! $song->Id !!}">
                            </div>
                            <div class="form-group">
                                <label for="artist">Artist</label>
                                <input type="text" id="artist" name="artist" class="form-control" value="{!! $song->artist !!}">
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" name="category">
                                    @foreach($Categories as $category)
                                        <option>{!! $category->Category !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Continent">Country select</label>
                                <select class="form-control" id="country" name="country">
                                    @foreach($Countries as $country)
                                        <option>{!! $country->Country !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="song">Song</label>
                                <audio controls>
                                    <source src="/public/songs/{!! $song->song !!}">
                                </audio>
                                <input type="hidden" name="song" id="song" value="{!! $song->song !!}">
                                <input type="file" class="form-control-file" name="song" id="song" value="{!! $song->song !!}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="image">Img</label>
                                <input type="hidden" name="image" id="image" value="{!! $song->image !!}">
                                <img src="/public/images/{{$song->image}}" alt="click" class="img-thumbnail">
                                <input type="file" class="form-control-file" name="image" id="image" value="{!! $song->image !!}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <button class="btn btn-default" type="submit">Обновить</button>
                                {{csrf_field()}}
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection