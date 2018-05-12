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
                    @if($CountSongs>0)
                    <div class="container">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Artist</th>
                                <th scope="col">Category</th>
                                <th scope="col">Country</th>
                                
                                <th scope="col"><a class="btn btn-info" href="{{route('home')}}">+Add New</a></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Songs as $song)
                            <tr>
                                <th scope="row">{{$song->name}}</th>
                                <td>{{$song->artist}}</td>
                                <td>{{$song->category}}</td>
                                <td>{{$song->country}}</td>
                                
                                <td>
                                    <form action="{{route('DelSong',['Id'=>$song->Id])}}" method="get">
                                        <button onclick="return confirm('Вы уверены?');" class="btn btn-danger">Del</button>
                                        {{csrf_field()}}
                                    </form>
				</td>
                                <td>
                                    <a class="btn btn-success" href="{{route('EditSong',['Id'=>$song->Id])}}">Edit</a>
                                </td>

                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                        @endif
                    @if($CountSongs == 0)
                        <h1 class="text-center text-info">Список песен пуст!</h1>
                        <a class="btn btn-info" href="{{route('home')}}">+Add New</a>
                        @endif

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection