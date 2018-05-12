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
                        <form action="{{route('UpdateCountry')}}" method="post">
                            @foreach($Country as $item)
                            <div class="form-group">
                                <label for="Country">Country</label>
                                <input type="hidden" value="{!! $item->Id !!}" name="Id" id="Id">
                                <input type="text" class="form-control" id="Country" name="Country"  value="{{$item->Country}}" required>

                            </div>
                            <div class="form-group">
                                <label for="Continent">Continent</label>
                                <input type="text" class="form-control" id="Continent" name="Continent" value="{{$item->Continent}}" required>
                            </div>
                            @endforeach
                                <input type="hidden" id="Class" name="Class" value="flag flag-default">
                            <button type="submit" class="btn btn-success">Save</button>
                            {{csrf_field()}}
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection