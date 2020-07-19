@extends('layouts.app')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Mon cv</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('cv.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">télecharge cv</label>
                        <div class="control">
                            <input class="input @error('fichier') is-danger @enderror" type="file" name="fichier" value="{{ old('fichier') }}" placeholder="télecharge cv">
                        </div>
                        @error('fichier')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">niveau</label>
                        <div class="control">
                            <input class="input @error('niveau') is-danger @enderror" type="text" name="niveau" value="{{ old('niveau') }}" placeholder="niveau">
                        </div>
                        @error('niveau')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">experience</label>
                        <div class="control">
                            <input class="input @error('experience') is-danger @enderror" type="text" name="experience" value="{{ old('experience') }}" placeholder="experience">
                        </div>
                        @error('experience')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">diplome</label>
                        <div class="control">
                            <input class="input @error('diplome') is-danger @enderror" type="text" name="diplome" value="{{ old('diplome') }}" placeholder="diplome">
                        </div>
                        @error('diplome')
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
