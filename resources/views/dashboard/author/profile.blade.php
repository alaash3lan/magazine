@extends('layouts.admin')


@section('content')

<h2>{{$user->name}}</h2>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Example</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>title</th>
                    <th>body</th>
                    <th>edit or delete</th>
                   
                </tr>
                </thead>
                
                <tbody>
                    <?php $articles =$user->articles()->paginate(6); ?>
                        @forelse ($articles as $article)
                        <tr>
                                <td>{{$article->title}}</td>
                                <td>{{str_limit($article->body, 20)}}</td>
                                <td><a href="{{ route('editArticle',$article->id) }}">edit</a></td>
                               
                            </tr>

                          
                    @empty
                        <p>No news</p>
                    @endforelse  
                    {{ $articles->links() }}  

                   
                
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@endsection