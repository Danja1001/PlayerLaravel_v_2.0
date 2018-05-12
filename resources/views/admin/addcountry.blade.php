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
                        <form action="{{route('StoreCountry')}}" method="post">
                            <div class="form-group">
                                <label for="Country">Country</label>
                                <input type="text" class="form-control" id="Country" name="Country" placeholder="Enter Country" required>
                            </div>
                            <div class="form-group">
                                <label for="Continent">Continent</label>
                                <input type="text" class="form-control" id="Continent" name="Continent" placeholder="Continent" required>
                            </div>
                                <input type="hidden" id="Class" name="Class" value="flag flag-default">
                            <button type="submit" class="btn btn-success">+Add</button>
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