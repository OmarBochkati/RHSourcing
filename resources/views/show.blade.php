@extends('layouts.app')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <p><b>{{ $post->type_post }}</b></p>
                        <p> {{ $post->description }}</p>
                        <h4>Afficher les commentaires</h4>
                        <hr />

                        @include('commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])

                       <hr />
                        <h4>Ajouter un commentaire</h4>
                        <form method="post" action="{{ route('comment.store') }}">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="body"></textarea>
                                <input type="hidden" name="post_id" value="{{ $post->id }}" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-warning" value="Ajouter un commentaire" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection