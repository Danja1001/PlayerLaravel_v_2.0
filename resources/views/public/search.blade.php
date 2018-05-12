@extends('public.nav')
@section('content')
    <div class="container">
        <div class="col-md-12 search-input-home">
    @if($countSongs>0)

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-5910248571874032",
                enable_page_level_ads: true
            });
        </script>
<br><br><br>
        <center> <h3 class="text-dark">Found: {{$countSongs}}</h3></center>
        <div class="player">
                <div class="audio2_html5">
                    <audio id="audio2_html5_white" preload="metadata">
                        <div class="xaudioplaylist" style="float:right;">
                            @foreach($result as $song)
                                <ul>
                                    <li class="xtitle">{{$song->name}}</li>
                                    <li class="xauthor">{{$song->artist}}</li>
                                    <li class="ximage">/public/images/{{$song->image}}</li>
                                    <li class="xcategory">ALL CATEGORIES;{{$song->category}}</li>
                                    <li class="xsources_mp3">/public/songs/{{$song->song}}</li>
                                </ul>
                            @endforeach
                        </div>
                        No HTML5 audio playback capabilities for this browser. Use <a href="https://www.google.com/intl/en/chrome/browser/">Chrome Browser!</a>
                    </audio>
                </div>
        </div>
    @endif

    @if($countSongs == 0)
<br><br><br><br><br><br>
        <center>
        <h3>Not Found<hr>:(</h3>
        </center>
    @endif

    </div>

    </div>
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
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



