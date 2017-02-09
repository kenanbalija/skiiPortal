<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url"           content="http:://www.fahrocatovic.ba" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Fahro Catovic" />
    <meta property="og:description"   content="Porofolio website" />
    <meta property="og:image"         content="http:://www.fahrocatovic.ba/favicon.ico" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fahro Ćatović') }}</title>


    <!-- Styles -->
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <!-- Dropzone -->
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <!-- Lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>


    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="/css/master.css"> -->
<!-- <link rel="stylesheet" href="/css/master2.css">
<link rel="stylesheet" href="/css/animate.css">
<link rel="stylesheet" href="/css/owl.carousel.css">
<link rel="stylesheet" href="/css/owl.theme.css">
<link rel="stylesheet" href="/css/responsive.css">
<link rel="stylesheet" href="/css/style.css"> -->

<!-- Favicons
================================================== -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">


<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{ url('css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('fonts/font-awesome/css/font-awesome.css') }}">

<!-- Slider
================================================== -->
<link href="{{ url('css/owl.carousel.css') }}" rel="stylesheet" media="screen">
<link href="{{ url('css/owl.theme.css') }}" rel="stylesheet" media="screen">

<!-- Stylesheet
================================================== -->
<link rel="stylesheet" type="text/css"  href="{{ url('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/responsive.css') }}">

<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="{{ url('js/modernizr.custom.js') }}"></script>
<!-- google plus -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
{{----}}
    <div id="app">
        {{--facebook--}}
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        {{--twitter--}}
        <script>window.twttr = (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0],
                    t = window.twttr || {};
                if (d.getElementById(id)) return t;
                js = d.createElement(s);
                js.id = id;
                js.src = "https://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);

                t._e = [];
                t.ready = function(f) {
                    t._e.push(f);
                };

                return t;
            }(document, "script", "twitter-wjs"));</script>

      <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/home')}}"><img id="logo" src="{{asset('/img/logo.png')}}" alt="">Fahro <strong>Ćatović</strong></a>
          </div>


          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ url('/home') }}">Početna</a></li>
              <li><a href="{{ url('/galerija') }}">Galerija</a></li>
              <li><a href="{{ url('/novosti') }}">Novosti</a></li>
              <li><a href="{{ url('/rezultati') }}">Rezultati</a></li>
              <li><a href="{{ url('/sponzori') }}">Sponzori</a></li>
                @if(Auth::user())
                    <li id="no-border"><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>logout</a></li>
                @endif
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
        <div>
            @yield('content')

        </div>
        <br><br><br><br>
        <nav id="footer">
            <div class="container">
                <div class="pull-left fnav">
                    <p>ALL RIGHTS RESERVED. COPYRIGHT © 2017. Designed by <a href="https://www.linkedin.com/in/nermin-sabanovic-b0526611b?authType=NAME_SEARCH&authToken=X43J&locale=en_US&srchid=3448065021486406699658&srchindex=1&srchtotal=1&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A3448065021486406699658%2CVSRPtargetId%3A499293365%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue%2CauthType%3ANAME_SEARCH">Nermin Šabanović</a> and Coded by <a href="https://www.linkedin.com/in/kenan-balija-97258497?authType=NAME_SEARCH&authToken=YLbV&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A344806502%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1486406745160%2Ctas%3Akenan%20balija">Kenan Balija</a></p>
                </div>
                <div class="pull-right fnav">
                    <ul class="footer-social">
                        <li><a href="https://www.facebook.com/fahro.catovic"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/fahro-catovic-aa80645"><i class="fa fa-linkedin"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
                        <li><a href="https://twitter.com/fahrocatovic"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('js/jquery.1.11.1.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{url('js/SmoothScroll.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery.isotope.js')}}"></script>
    <script src="{{url('js/owl.carousel.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'novost_body' );
        </script>
        <script>
            CKEDITOR.replace( 'results' );
        </script>
    <!-- Javascripts
    ================================================== -->
        <script async src="https://static.addtoany.com/menu/page.js"></script>
    </div>
    <!-- Scripts -->
    <script src="{{ url('/js/app.js')}}"></script>
    <script type="text/javascript" src="{{url('js/main.js')}}"></script>
    <!-- Dropzone -->
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<!-- Lightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.min.js.map"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>

</body>
</html>
