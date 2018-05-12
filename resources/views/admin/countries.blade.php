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
                    @if($CountCountries>0)
                    <div class="container">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Country</th>
                                <th scope="col">Continent</th>
                                <th><a class="btn btn-info" href="{{route('AddCountry')}}">+Add New</a></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Countries as $country)
                                <tr>
                                    <th scope="row">{{$country->Country}}</th>
                                    <td>{{$country->Continent}}</td>
                                    <td>
                                        <form action="{{route('DelCountry',['id'=>$country->Id])}}" method="get">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
					<td><a class="btn btn-info" href="{{route('EditCountry',['Id'=>$country->Id])}}">Edit</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                        @endif
                    @if($CountCountries == 0)
                        <h1 class="text-info text-center">Стран нет!</h1>
                        <a class="btn btn-info" href="{{route('AddCountry')}}">+Add New</a>
                        @endif

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection