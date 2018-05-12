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
                        <form action="{{route('UpdateCat')}}" method="post">
                            <div class="form-group">
                                <label for="Category">Category</label>
                                @foreach($Category as $item)
                                    <input type="hidden" name="id" id="id" value="{!! $item->id !!}">
                                <input type="text" class="form-control" id="Category" name="Category" value="{!! $item->Category !!}" required>
                                    @endforeach
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                            <button class="btn btn-danger" type="reset">Reset</button>

                            {{csrf_field()}}
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection