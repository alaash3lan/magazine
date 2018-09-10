@extends('layouts.magazine')
@section('content')
<div class=" container">
<div class="row last-section">
    <div class="col-md-12 col-md-12 ">




        


      <div  col-md-12-12 section-item   ">
          
          <div class="   section-item">
          <div class="section-content">    
          <img  style="width: 43%;
          height: 310px;" src="{{ asset('images/'. $article->photo->file)}}">
              <h3><a href="{{route('article.show',[$article->id])}}">{{$article->title}}</a></h3>  
          <span>{{$article->created_at->diffForHumans()}}</span> <span><a>/  4 comment </a></span>	
  
          <p>  {{$article->body}} <br> </p>
              </div>
          </div>
        </div>	

      




          
         
        </div>
  
  </div>
</div>
      
@endsection