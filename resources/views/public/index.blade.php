@extends('public.nav')
@section('content')
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<div class="container">
    <div class="col-md-12 search-input-home">

        <center>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({
                    google_ad_client: "ca-pub-5910248571874032",
                    enable_page_level_ads: true
                });
            </script>
            <h3 style="font-size:80px;"></h3>
            <br />
            <p></p>

            <form action="{{route('SearchTrack')}}" method="post">
                @csrf
            <div class="col-md-7 col-md-offset-2">
                <input type="text" name="name" id="name" class="form-control" style="padding: 10px !important;font-size: 18px !important;" placeholder="Search for a genre/artist/song" required>
            </div>

            <div class="col-md-2 search-buton">
                <center> <button class="btn btn-dark">Search</button></center>
            </div>

            </form>
        </center>
    </div>

    <h2 class="text-center">Just press "Play" and Enjoy all best European Music Online</h2>
    <br><br>

<div class="player">
    <div class="audio2_html5">
        <audio id="audio2_html5_white" preload="metadata">
            <div class="xaudioplaylist" >
                @foreach($songs as $song)
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
</div>
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5910248571874032",
            enable_page_level_ads: true
        });
    </script>

    </div>
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
@endsection

@section('footer')
    
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
