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
                <div class="container">
                    <form  method="post" action="{{ route('uploadFile') }}" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name track</label>
                            <input type="text" name="name" class="form-control"  id="name"  placeholder="Track..." required>
                        </div>
                        <div class="form-group">
                            <label for="artist">Artist</label>
                            <input type="text" id="artist" name="artist" class="form-control" placeholder="Artist..." required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category">
                                @foreach($Category as $item)
                                    <option>{{$item->Category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Continent">Country select</label>
                            <select class="form-control" id="country" name="country">
                                @foreach($Country as $item)
                                    <option>{{$item->Country}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="song">Song</label>
                            <input type="file" class="form-control-file" name="song" id="song" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" name="image" id="image" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Загрузить</button>
			    <button class="btn btn-danger" type="reset">Reset</button>
                            {{csrf_field()}}
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
