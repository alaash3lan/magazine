@extends('layouts.magazine')
@section('content')

<div class=" container" id="content" >
	 
		
    <div class="row">
        
    

    <!--end second-section -->		
            
    <!--threed-section top stories carousel-multiItem -->  
    <div class="row threed-section">
      <div class="start-content">
        <span href="#" class="span-featured2">Top Stories</span>
    
        <div class="carousel carousel-multiItem slide" id="carousel-itemm">
          <div class="carousel-inner">


@forelse (App\Article::orderBy('views', 'desc')->paginate(6) as $article)
    


            <div class="item active">


              <div class="col-xs-12 col-sm-4 col-md-4 hover">
                <a href="{{route('article.show',[$article->id])}}" ><img src="{{ asset('images/'. $article->photo->file)}}" class="img-responsive"></a>
                <div class="data-enter" id="data-enter">
    
                  <h3><a>{{$article->title}}</a></h3>
    
                <span class="date">{{$article->created_at->diffForHumans()}}</span>
                  <span class="comment">0 Comment</span>
                </div>
              </div>
            </div>

            @empty
    
            @endforelse


          </div>
          <a class="left carousel-control" href="#carousel-itemm" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#carousel-itemm" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>




      </div>
    </div>	
    <!--end threed-section-->
    <!--start in new section  four-section-->	
















        <div class="row four-section">
      <div class="start-content-Poltics">
        <span href="#" class="span-featured3">Poltics</span>
         <div class="col-md-12">
        <div class=" col-md-8 col-xs-12 col-sm-12  poltics-left ">
            
            

@forelse($politic as $article)
<div class="col-md-4 col-sm-8 section-tree">
    <div class="section-content">
        <img src="{{ asset('images/'. $article->photo->file)}}">
    <h3> <a href="{{route('article.show',[$article->id])}}"> {{$article->title}} </a></h3>
        <span> {{$article->created_at->diffForHumans()}}</span> <span><a>/  4 comment </a></span>
        <p>
            {{str_limit($article->body, 200)}}
            <br><a href="{{route('article.show',[$article->id])}}">[...]</a></p>
    </div>
</div>
@empty
<p>No news</p>
@endforelse

        
    
    
        </div>




             
             <div class=" col-md-4 col-xs-12 col-sm-12 poltic-right">
                 <ul class="nav nav-tabs">
        <li class="active"><a  href="#home-Recent">Recent</a></li>
    
      </ul>
    
                 
      <div class="tab-content">
        <div id="home-Recent" class="tab-pane fade  in active home-Recent">
         <br>
            
         @forelse (App\Article::latest()->paginate(4) as $new)

        

         <div class="content-rescnt">    
            <img src="{{asset('images/'. $article->photo->file)}}">
               <p><a href="{{route('article.show',[$article->id])}}">{{$new->title}}</a></p>
               <br>
          </div>
             
         @empty
             
         @endforelse

        
            
        
            
            
            </div>
          
          
        <div id="menu-popular" class="tab-pane fade">
           <div class="popular-content ">    
               <h4><a>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
               <span><a> 7 comment</a></span>           
         <hr>   
        </div>
              <div class="popular-content ">    
                  <h4><a>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
                  <span> <a> 6 comment</a></span>           
         <hr>   
        </div>
              <div class="popular-content ">    
                  <h4><a>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
                  <span><a> 5 comment</a></span>           
         <hr>   
        </div>
            
            
        </div>
    </div>
                 
     </div>	
             
             
    <!--end panel -->         
             
             
     </div>
          
     </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!--end four-section -->
    <!--start five-sectio -->
    <div class="row five-section">
             <div class="start-content-Poltics">
         <div class="col-md-12">
        <div class=" col-md-8 col-xs-12 col-sm-12  world-left ">
            
        <div class=" col-md-4  col-xs-12 col-sm-8 sub-First  hover">
                    
    
          
        </div>
            
         
        
         
    <!--start adds -->
            
        
            
       </div>
             
             
         <div class=" col-md-4 col-xs-12 col-sm-12 world-right">
             
        
             
            <div class="content-world-right panel "> 
            <div class="panel-heading">	
             <h3>Follow us</h3>
                </div>	
        <div class="panel-body">		
           <p>Let's connect on any of these social networks!</p> 
             <div class="button-btn">
            <span class="facebook"><a href="#" ><i class="fa fa-facebook-official fa-3x"  aria-hidden="true"></i></a></span>
            <span class="instagram"><a href="#"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></span>
             <span class="twitter"><a href="#"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a></span> 
             </div> 
             </div>	 
             </div>
        </div> 
    </div>
    </div>
    </div>


































    
            
    <!--end five-section -->
    <!--start six-sectio -->		
            
        <div class="row six-section">
             <div class="start-content-Poltics">

        <span href="#" class="span-featured3">Travel</span>
         <div class="col-md-12">
             <div class="col-md-8 col-xs-12 col-sm-12 sub-First ">
            <div class="col-md-6 col-xs-12 col-sm-12 Travel-first-section  "	>

              

    @forelse($travel as $article)

                <div class="col-md-12 hover">
                    <div class="containt-sub">
                
               <a href="{{route('article.show',[$article->id])}}" ><img src="{{ asset('images/'. $article->photo->file)}}"></a>
                <div class="subFirst-item" id="subFirst-item">
    
                  <h3><a href="{{route('article.show',[$article->id])}}">{{$article->title}}</a></h3>
    
                  <span class="date">{{$article->created_at->diffForHumans()}}</span>
                  <span class="comment">0 Comment</span>
                </div>
                
            </div>
                </div>	



                @empty
                <p>No news</p>
                @endforelse
                





            </div> 



   
            
        
        
             
         </div>	 
    </div>		
    </div>		
    </div>	
            
    <!--end six-section -->
    <!--start seven-section -->





        <div class="row seven-section">
      <div class="start-content-Sport">
        <span href="#" class="span-featured1">Sport</span>
        <div class=" col-md-12 col-xs-12 col-sm-12  ">
            
                @forelse($sport as $article)

            <div class="col-md-3  col-xs-12 col-sm-12 section-item">
            <div class="section-content">    
            <img src="{{ asset('images/'. $article->photo->file)}}">
                <h3><a href="{{route('article.show',[$article->id])}}">{{$article->title}}</a></h3>  
            <span> may 26,2016</span> <span><a>/  4 comment </a></span>	
    
            <p>{{str_limit($article->body, 200)}}  <br> <a>[...]</a></p>
                </div>
            </div>

            {{-- <div class="col-md-12 hover">
                <div class="containt-sub">
            
           <a href="{{route('article.show',[$article->id])}}" ><img src=""></a>
            <div class="subFirst-item" id="subFirst-item">

              <h3><a>{{$article->title}}</a></h3>

              <span class="date">May 29,2015</span>
              <span class="comment">0 Comment</span>
            </div>
            
        </div>
            </div>	 --}}



            @empty
            <p>No news</p>
            @endforelse
       
           
            
            </div>	
        </div>
    
    </div>
    <!--end seven section -->
            
            
            
    <!--start video section-->
    
    <!--end video section-->
            
    <!--start last section-->
            
            
            <div class="row last-section">
      <div class="start-content-Sport">
        <span href="#" class="span-featured">Others</span>
        <div class=" col-md-12 col-xs-12 col-sm-12  ">




            @forelse(App\Article::paginate(4)->shuffle() as $article)
            
            <div class="col-md-3  col-xs-12 col-sm-12 section-item">
            <div class="section-content">    

                <img src="{{ asset('images/'. $article->photo->file)}}">
                <h3><a href="{{route('article.show',[$article->id])}}">{{$article->title}}</a></h3>  
            <span> may 26,2016</span> 
           
            <span> <a>/{{$article->category->name}}</a></span>	
    
            <p>This is some dummy copy. You’re not really supposed to read this dummy copy, it is just a place holder for people who need some type to visualize what the actual copy might look like if it were real content. If you want to read, I might suggest a good  <br><a href="{{route('article.show',[$article->id])}}" class="btn bttn btn-hover">Continue Reading → </a> </p>
                
          </div>
            </div>


            @empty
            
            @endforelse
       
            
            
            </div>














            
            </div>	
          
          </div>
    
    </div>
                
    <!--end last section-->			
                
            <div id='page_navigation'></div>
    
    </div><

@endsection
