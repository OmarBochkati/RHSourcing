@extends('layouts.app')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un account</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('candidats.update', $candidat->id) }}" method="POST">
                    <div class="field">
                        <label class="label">télecharge photo</label>
                        <div class="control">
                            <input class="input @error('photo_profil') is-danger @enderror" type="file" name="photo_profil" value="{{ old('photo_profil') }}" placeholder="télecharge photo">
                        </div>
                        @error('photo_profil')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">date naissance</label>
                        <div class="control">
                            <input class="input @error('date_nais') is-danger @enderror" type="date" name="date_nais" value="{{ old('date_nais') }}" placeholder="date naissance">
                        </div>
                        @error('date_nais')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">numero portable</label>
                        <div class="control">
                            <input class="input @error('num_portable') is-danger @enderror" type="number" name="num_portable" value="{{ old('num_portable') }}" placeholder="numero portable">
                        </div>
                        @error('num_portable')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">email</label>
                        <div class="control">
                            <input class="input @error('email') is-danger @enderror" type="text" name="email" value="{{ old('email') }}" placeholder="email">
                        </div>
                        @error('email')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">adresse</label>
                        <div class="control">
                            <input class="input @error('adresse') is-danger @enderror" type="text" name="adresse" value="{{ old('adresse') }}" placeholder="adresse">
                        </div>
                        @error('adresse')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">genre</label>
                        <div class="control">
                            <input class="input @error('genre') is-danger @enderror" type="text" name="genre" value="{{ old('genre') }}" placeholder="genre">
                        </div>
                        @error('genre')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">profession</label>
                        <div class="control">
                            <input class="input @error('profession') is-danger @enderror" type="text" name="profession" value="{{ old('profession') }}" placeholder="profession">
                        </div>
                        @error('profession')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">salaire</label>
                        <div class="control">
                            <input class="input @error('salaire') is-danger @enderror" type="number" name="salaire" value="{{ old('salaire') }}" placeholder="salaire">
                        </div>
                        @error('salaire')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description" placeholder="Description du candidat">{{ old('description') }}</textarea>
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
