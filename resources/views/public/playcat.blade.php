@extends('public.nav')
@section('content')
    <div class="col-md-12 search-input-home">

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-5910248571874032",
                enable_page_level_ads: true
            });
        </script>
        <br><br><br>
        <center>

            <h1>{{$category}}</h1>
        </center>

<center>
            <div class="container resultsContainer">
                <form action="{{route('SearchCountry')}}" method="post">
                    @csrf
                    <div class="col-md-7 col-md-offset-2">
                        <input type="text" name="name" id="name" class="form-control" style="padding: 10px !important;font-size: 18px !important;" placeholder="Search for a category" required>
                    </div>
                    <div class="col-md-2 search-buton">
                        <center><button class="btn btn-dark">Search</button></center>
                    </div>
                </form>
            </div>
</center>
<br><br>
@if($TrackList->count()>0)
        <div class="player">
            <center>
                <div class="audio2_html5">
                    <audio id="audio2_html5_white" preload="metadata">
                        <div class="xaudioplaylist">
                            @foreach($TrackList as $song)
                                 <ul>
                        <li class="xtitle">{{$song->name}}</li>
                        <li class="xauthor">{{$song->artist}}</li>
                        @if($song->image == "")
                            <li class="ximage"></li>
                        @endif
                        @if(isset($song->image))
                        <li class="ximage">/public/images/{{$song->image}}</li>
                        @endif
			<li class="xcategory">ALL CATEGORIES;{{$song->category}}</li>
                        <li class="xsources_mp3">/public/songs/{{$song->song}}</li>
                    </ul>
                            @endforeach
                        </div>
                        No HTML5 audio playback capabilities for this browser. Use <a href="https://www.google.com/intl/en/chrome/browser/">Chrome Browser!</a>
                    </audio>
                </div>
            </center>
        </div>
@endif
@if($TrackList->count() == 0)
<center><h1>Tracks not found with this category.</h1></center>
@endif
        <br /><br /><br /><br /><br /><br /><br />
        <br /><br /><br /><br /><br /><br /><br />
        <br /><br /><br /><br /><br /><br /><br />
        <br /><br /><br /><br /><br /><br /><br />
    </div>


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