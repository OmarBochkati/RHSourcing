@extends('layouts.app')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'une post</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">type post</label>
                        <div class="control">
                            <input class="input @error('type_post') is-danger @enderror" type="text" name="type_post" value="{{ old('type_post') }}" placeholder="Type de post">
                        </div>
                        @error('type_post')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">date de publication</label>
                        <div class="control">
                            <input class="input" type="date" name="date_publication" value="{{ old('date_publication') }}">
                        </div>
                        @error('date_publication')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description" placeholder="Description du film">{{ old('description') }}</textarea>
                        </div>
                        @error('description')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
