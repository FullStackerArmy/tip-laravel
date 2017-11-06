@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado</div>

                <div class="panel-body">
                    <div class="container-fluid">
                        @foreach(\App\Article::all() as $article)
                            @if($loop->iteration == 1 || $loop->index % 3 == 0)
                                <div class="row">
                            @endif
                                <div class="col col-md-4">
                                    <h4 class="media-heading">{{ $article->name }}</h4>
                                    <p>{{ $article->description }}</p>
                                </div>
                            @if($loop->last || $loop->iteration % 3 == 0)
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
