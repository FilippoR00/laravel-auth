@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nuovo Post</div>
                <div class="card-body">
                    <form action="{{route("posts.store")}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Titolo:</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il nome del post">
                        </div>
                        <div class="form-group">
                            <label for="content">Contenuto:</label>
                            <textarea class="form-control" id="content" rows="6" name="content" placeholder="Inserisci il contenuto del post"></textarea>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="published" name="published">
                            <label class="form-check-label" for="published">Pubblica</label>
                        </div>
                        <a href="{{route("posts.store")}}"><button type="submit" class="btn btn-primary">Crea post</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection