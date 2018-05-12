@extends('public.nav')
@section('content')
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5910248571874032",
            enable_page_level_ads: true
        });
    </script>
    <br>
    <center>
    <div class="container resultsContainer">
        <form action="{{route('SearchCountry')}}" method="post">
            @csrf
            <div class="col-md-7 col-md-offset-2">
                <input type="text" name="name" id="name" class="form-control" style="padding: 10px !important;font-size: 18px !important;" placeholder="Search for a country" required>
            </div>
            <div class="col-md-2 search-buton">
                <center><button class="btn btn-dark">Search</button></center>
            </div>
        </form>
        </form>
    </div>
    </center>
    
<div class="container resultsContainer">
    <h2 class="search-text"><center>If you want to search for a country, please select the continent first!</center><center> Thank you!<center></h2>
</div>
<br><br>
<center>
<div class="continents-list">
<div class="continents-tabs">
@foreach($ListContinents as $item)
	<a href="{{route('ShowByCont',['Continent'=>$item->Continent])}}" class="btn btn-dark" style="color:white;">{{$item->Continent}}</a>
    @endforeach
</div>
    </div>
</center>

    <h3 class="text-dark">All Countries</h3>

    <div class="row">
        @foreach($Countries as $country)
    <div class="col-md-3">
        <a class="text-dark" href="{{route('PlayCountry',['Country'=>$country->Country])}}">  <div class="span3"><img class="{{$country->Class}}" src="{{asset('img/blank.gif')}}" alt="Algeria" /> {{$country->Country}}</div></a>
    </div>
        @endforeach
    </div>









<br><br>

@endsection

@section('footer')
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5910248571874032",
            enable_page_level_ads: true
        });
    </script>
    <footer class="py-5 bg-dark">
        <div class="container">
             <p class="m-0 text-center text-white">&copy; <a class="text-white" href="http://startuper.be">Startuper2018</a></p>
        </div>
        <!-- /.container -->
    </footer>
    <!-- The player -->
    @endsection
    </body>
    </html>