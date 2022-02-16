@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{$post->title}}</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        @if ($post->published)
                            <h5>Stato: <span class="badge badge-pill badge-success">Pubblicato</span></h5>
                        @else
                            <h5>Stato: <span class="badge badge-pill badge-info text-white">Bozza</span></h5>
                        @endif
                    </div>
                    {{$post->content}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection