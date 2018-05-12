<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">


    <link href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">

    <script type="text/javascript" href="{{asset('js/jaba.js')}}">
    </script>
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css" />


    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>

    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/flags.css')}}" rel="stylesheet">


    <link href="{{asset('asset/audio2_html5.css')}}" rel="stylesheet" type="text/css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="{{asset('/public/asset/js/jquery.mousewheel.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/public/asset/js/jquery.touchSwipe.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/public/asset/js/audio2_html5.js')}}" type="text/javascript"></script>


    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="{{asset('js/jquery.smooth-scroll.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>



    <title>ERS Music</title>

    <script type="text/javascript">
    </script>

    <script>
        jQuery(function() {

            jQuery('#audio2_html5_white').audio2_html5({
                skin: 'whiteControllers',
                autoPlay:false,
                initialVolume:0.5,
                responsive:true
            });


        });
    </script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">  <img style="height:50px;" src={{asset('img/musicworldlive.png')}}></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <div class="dropdown show">
                    <a class="btn  dropdown-toggle text-white" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background:#343A40;color:white;">

                        @foreach($Categories as $category)
                            <a class="dropdown-item text-white" href="{{route('PlayCat',['category'=>$category->category])}}">{{$category->category}}</a>
                        @endforeach
                    </div>
                </div>


                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('ShowCountry')}}"><i class="fa fa-globe"></i> Countries</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')


@yield('footer')

<script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>