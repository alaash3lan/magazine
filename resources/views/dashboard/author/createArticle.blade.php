@extends('layouts.admin')


@section('content')


<h1>create article</h1>

{!! Form::open(['method' =>'Post', 'action' => 'ArticlesController@store' , 'files'=>'true'])  !!}

<div class="form-group">
    {!! Form::label('title','title:') !!}
    {!! Form::text('title',null,['class'=>'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('article','article:') !!}
    {!! Form::textarea('body',null,['class'=>'form-control','rows'=>'5' ,'required']) !!}
</div>




<div class="form-group">
    {!! Form::label('photo_id','photo:') !!}
    {!! Form::file('photo_id',null,['class'=>'form-control', 'required']) !!}
</div>


<div class="form-group">
    {!! Form::label('category_id','subcategory:') !!}

    {!! Form::select('category_id', $cat, null, ['placeholder' => 'Pick a category...','class'=>'form-control' , 'required']) !!}

</div>

<div class="form-group">

    {!! Form::submit('create ',['class'=>'btn btn-primary']) !!}
</div>

{{ Form::close() }}



@endsection
