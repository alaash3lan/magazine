@extends('layouts.magazine')
@section('content')
<div class=" container">
<div class="row last-section">
    <div class="col-md-12 col-xs-12 col-sm-12">




        
@forelse($articles as $article)

      <div class=" col-md-3  col-xs-12 col-sm-12 section-item   ">
          
          <div class="   section-item">
          <div class="section-content">    
          <img  src="{{ asset('images/'. $article->photo->file)}}">
              <h3><a href="{{route('article.show',[$article->id])}}">{{$article->title}}</a></h3>  
          <span>{{$article->created_at->diffForHumans()}}</span> <span><a>/  4 comment </a></span>	
  
          <p>  {{str_limit($article->body, 200)}} <br><a class="btn bttn btn-hover">Continue Reading → </a> </p>
              </div>
          </div>
        </div>	

          @empty
          <p>No news</p>
          @endforelse




          
         
        </div>
  
  </div>
</div>
      
@endsection