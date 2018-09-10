@extends('layouts.admin')


@section('content')


<h1>edit </h1>


{!! Form::model($article,['method' =>'PATCH', 'action' => ['ArticlesController@update', $article->id] , 'files'=>'true'])  !!}

<div class="form-group">
    {!! Form::label('title','title:') !!}
    {!! Form::text('title',$article->title,['class'=>'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('article','article:') !!}
    {!! Form::textarea('body',$article->body,['class'=>'form-control','rows'=>'5' ,'required']) !!}
</div>




<div class="form-group">
    {!! Form::label('photo_id','photo:') !!}
    {!! Form::file('photo_id',['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('category_id','subcategory:') !!}

    {!! Form::select('category_id', $cat,null, ['placeholder' => 'Pick a category...','class'=>'form-control' , 'required']) !!}

</div>

<div class="form-group">

    {!! Form::submit('save ',['class'=>'btn btn-primary']) !!}
</div>

{{ Form::close() }}



{!! Form::model($article, ['method' =>'DELETE', 'action' => ['ArticlesController@destroy' ,$article->id] ])  !!}



<div class="form-group">

    {!! Form::submit('delete',['class'=>'btn btn-primary']) !!}
</div>

{{ Form::close() }}





@endsection
