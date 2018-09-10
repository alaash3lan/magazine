@extends('layouts.admin')


@section('content')

<h2>{{Auth::user()->name}}</h2>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Example</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>name</th>
                    <th>id</th>
                    <th>role</th>

                    <th>active</th>
                    <th>edit</th>
                   
                </tr>
                </thead>
                
                <tbody>
                        @forelse ($users as $user)
                        <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->id}}</td>
                               <td>{{$user->role->name}}</td>
                               <td>{{$user->status ? 'active' : 'disabled'}}</td>
                               
                                <td>
                                    <div>

                                        {!! Form::model($user, ['method' =>'PATCH', 'action' => ['DashAdminController@update' ,$user->id] ])  !!}
                                        
                                        
                                        
                                        <div class="form-group">
                                        
                                            {!! Form::submit('change',['class'=>'btn btn-danger']) !!}
                                        </div>
                                        
                                        {{ Form::close() }}
                                        </div>
                                </td>
                               
                            </tr>

                          
                    @empty
                        <p>No news</p>
                    @endforelse  
                    {{ $users->links() }}  

                   
                
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@endsection