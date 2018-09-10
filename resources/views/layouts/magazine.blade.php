<!DOCTYBE html >

<html ng-app="mainApp">
<head><title>DemoNews</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link href="{{ asset('css/magazine.css') }}" rel="stylesheet">
    {{-- <link href="{{asset('font-awesome-4.5.0/css/font-awesome.min')}}" rel="stylesheet" type="text/css"> --}}


    {{--<link href="font-awesome-4.5.0/css/font-awesome.min.css">--}}
    {{--<link href="font-awesome-4.5.0/css/font-awesome.css">--}}

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Font+Name"> --}}


      {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> --}}
    <script src="{{ asset('js/magazine.js') }}" defer></script>




</head>
<body>

<!--first navbar -->
<div class="nav-frist">
    <nav class="navbar navbar-inverse" ng-controller="mainCtrl">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbarArchives">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="navbar-brand navbar-right" >T-Magazine</ul>

            </div>

            <div class="collapse navbar-collapse" id="myNavbarArchives">
                <ul class="nav navbar-nav">
                    <li><a href="#">Arshives</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-facebook-official fa-2x"  aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>

                </ul>

            </div>

        </div>
    </nav>
</div>

<!--start section header -->
<div class="section-header">
    <div class="container">
        <div class="logo-header ">
            <h1>
                Time Magazine
            </h1>
        </div>
        <img class="Adds-header" src="image/add1.png" alt="Adds-header">
    </div>
</div>

<!--start Second navbar -->
<div class="nav-seconed">
    <nav class="navbar navbar-inverse" ng-controller="mainCtrl">
        <div class="container">


            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand  navbar-brand-logo Logo-active" href="#">
                    <div class="logo"><img alt="Task Helper Logo" src=
                    "{{asset('logo.png')}}"></div>

                </a>
            </div>



            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                <li class="activee"><a href="{{url('/')}}" class="allNews">All news</a></li>

                   
                    

                    

                    @foreach (App\Category::All() as $cat)
               <li><a href="{{route('category',[$cat->id])}}">{{$cat->name}}</a></li>

                                            @endforeach


                   





                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <div>
                        {{-- <form action="#">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" style="margin-top: -5px;" type="button">Go!</button>
                          </span>
                        </div><!-- /input-group -->
                    </form> --}}


                <form  class="customform s-12 l-8" method="GET" action="{{ route('search') }}">
                            <div ><input class="form-control" name = "search" type="search" placeholder="Search form" title="Search form" /></div>
                            <div class="s-3"><button  type="submit">Search</button></div>
                         </form>
    
                      </div><!-- /.col-lg-6 -->
                </ul>
            </div>
        </div>
    </nav>
</div>












<!--start haot new  and marquee -->
<div class="container-fluid section-hotnews" >
    <div class="title-hotnews container">
        <span class="nameTitle">Breaking News</span>
        <marquee id="section-hotnews"  WIDTH="83%" onmouseover="this.stop();" onmouseout="this.start();">

            @forelse (App\Article::latest()->paginate(4) as $new)

            <small>{{$new->created_at->diffForHumans()}}</small>
            <a href="{{route('article.show',[$new->id])}}" > {{$new->title}}
            </a>
                
            @empty
                
            @endforelse
           


            
        </marquee>
    </div>
</div>

<!--start div  content this div changed  by  ajax code -->
<div  class="change-content  content container-fluid">
    @yield('content')
</div>

<!--footer section  is fixed  -->
<div class=" footer" id="footer" >
    <div class="container first-section" >
        <div class="col-md-12">
            <div class="col-md-4 About-footer">
                <div class="content-footer">
                    <h2>About</h2>
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod.</p>
                </div>
                <div class="button-btn">
                    <span class="facebook"><a href="#" ><i class="fa fa-facebook-official fa-2x"  aria-hidden="true"></i></a></span>
                    <span class="instagram"><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></span>
                    <span class="twitter"><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></span>
                </div>

            </div>

            <div class="col-md-4 Subscribe-footer">
                <div class="content-footer">
                    <h2>Subscribe via Email</h2>
                    <p>Enter your email address to subscribe to this blog and receive notifications of new posts by email.</p>
                </div>

                <input type="email" class="form-control" placeholder="Email Address">
                <button class="btn btn-block bttn btn-hover">Subscribe </button>

            </div>
            <div class="col-md-4 meta-footer">

                <div class="content-footer">
                    <h2>Meta</h2>
                    <li>Comments RSS</li>
                    <li>Entries RSS</li>
                    <li>Log in</li>


                </div>

            </div>
        </div>

        <div class=" Secont-section">

            <div class="col-md-12">
                <p> Copyright © 2016 Time-Magazine. Designed by<strong> IntCore</strong></p>


            </div>
        </div>

    </div>
</div>



<!--icon scroll-up -->

<div id="scroll-up">
    <i class="fa fa-chevron-circle-up fa-3x fa-fw"></i>
</div>
<!--end icon scroll-up-->

<script src="js/news.js" type="text/javascript"></script>
</body>
</html>
