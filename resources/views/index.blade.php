@extends('layouts.app')
@section('css')
    <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.4em;
        }
        .is-info {
            margin: 0.3em;
        }
    </style>
@endsection

@section('content')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Posts</p>

            <a class="button is-info" href="{{ route('posts.create') }}">Créer un post</a>

        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                    <tr>

                        <th>type post</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr @if($post->deleted_at) class="has-background-grey-lighter" @endif>
                            <td><strong>{{ $post->type_post }}
                                    <br>
                                    <span class="glyphicon glyphicon-pencil"></span> {{ $post->user->name }} le {!! $post->created_at->format('d-m-Y') !!}
                                    </em> </strong></td>

                            <td>
                                @if($post->deleted_at)
                                    <form action="{{ route('posts.restore', $post->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button class="button is-primary" type="submit">Restaurer</button>
                                    </form>
                                @else
                                    <a class="button is-primary" href="{{ route('posts.show', $post->id) }}">Voir</a>
                                @endif
                            </td>
                            <td>
                                @if($post->deleted_at)
                                @else
                                    <a class="button is-warning" href="{{ route('posts.edit', $post->id) }}">Modifier</a>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('posts.destroy' , $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button is-danger" type="submit">Supprimer</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </div>
    <footer class="card-footer">
        {{ $posts->links() }}
    </footer>
    </div>
@endsection
