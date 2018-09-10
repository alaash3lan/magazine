@extends('layouts.admin')


@section('content')


<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
<li class="breadcrumb-item active">welcom {{Auth::user()->name}}</li>
</ol>

@endsection
