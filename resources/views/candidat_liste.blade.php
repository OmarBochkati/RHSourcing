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

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">

    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Candidats</p>



        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                    <tr>

                        <th>photo profil</th>
                        <th>email</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($candidats as $candidat)
                        <tr @if($candidat->deleted_at) class="has-background-grey-lighter" @endif>
                            <td><strong>{{ $candidat->photo_profil }}

                                    </strong></td>
                            <td><strong>{{ $candidat->email }}</strong></td>

                            <td>

                                @if($candidat->deleted_at)
                                    <form action="{{ route('candidats.restore', $candidat->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button class="button is-primary" type="submit">Restaurer</button>
                                    </form>
                                @else
                                    <a class="button is-primary" href="{{ route('candidats.show', $candidat->id) }}">Voir</a>
                                @endif
                            </td>
                            <td>
                                @if($candidat->deleted_at)
                                @else
                                    <a class="button is-warning" href="{{ route('candidats.edit', $candidat->id) }}">Modifier</a>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('candidats.destroy' , $candidat->id) }}" method="post">
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
        {{ $candidats ?? ''->links()}}
    </footer>
        </section>
@endsection