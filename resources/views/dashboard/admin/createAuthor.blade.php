@extends('layouts.admin')


@section('content')


<h1>create article</h1>

{!! Form::open(['method' =>'Post', 'action' => 'DashAdminController@store' , 'files'=>'true'])  !!}

<div class="form-group">
    {!! Form::label('name','name:') !!}
    {!! Form::text('name',null,['class'=>'form-control', 'required']) !!}
</div>


<div class="form-group">
    {!! Form::label('email','email:') !!}
    {!! Form::email('email',null,['class'=>'form-control', 'required']) !!}
</div>




<div class="form-group">
    {!! Form::label('photo_id','photo:') !!}
    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('role_id','role:') !!}

    {!! Form::select('role_id', $roles, null, ['placeholder' => 'Pick a category...','class'=>'form-control' , 'required']) !!}

</div>

<div class="form-group">

    {!! Form::submit('create ',['class'=>'btn btn-primary']) !!}
</div>

{{ Form::close() }}



@endsection
