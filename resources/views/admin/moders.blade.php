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
                    @if($CountModers>0)
                        <div class="container">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col"><a class="btn btn-info" href="{{route('AddModerator')}}">+Add New</a></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($moders as $moder)
                                    <tr>
                                        <th scope="row">{{$moder->name}}</th>
                                        <td>{{$moder->email}}</td>
                                        <td>{{$moder->password}}</td>
                                        <td>
                                            <form action="{{route('DelModer',['id'=>$moder->id])}}" method="get">
                                                <button onclick="return confirm('Вы уверены?');" class="btn btn-danger">Del</button>
                                                {{csrf_field()}}
                                            </form>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                    @if($CountModers == 0)
                        <h1 class="text-center text-info">Список модераторов пуст!</h1>
                        <a class="btn btn-info" href="{{route('AddModerator')}}">+Add New</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection