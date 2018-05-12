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
                    @if($CountCat>0)
                    <div class="container">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Category</th>
                                <th scope="col"><a class="btn btn-info" href="{{route('AddCategory')}}">+Add New</a></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Categories as $category)
                                <tr>
                                    <th scope="row">{{$category->Category}}</th>
                                    <td>
                                            <form action="{{route('DelCat',['id'=>$category->id])}}" method="get">
                                                <button onclick="return confirm('Вы уверены?');" class="btn btn-danger">Del</button>
                                                {{csrf_field()}}
                                            </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('EditCat',['id'=>$category->id])}}">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                        @endif
                    @if($CountCat == 0)
                        <h1 class="text-center text-info">Категорий нет!</h1>
                        <a class="btn btn-info" href="{{route('AddCategory')}}">+Add New</a>
                        @endif

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection