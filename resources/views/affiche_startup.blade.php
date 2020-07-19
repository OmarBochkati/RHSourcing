@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Créer groupe</p>
        </header>
        <div class="card-content">
            <div class="content">
                <div class="field">
                    <label class="label">nom group</label>
                    <div class="control">
                        <input class="input @error('nom_group') is-danger @enderror" type="text" name="nom_group" value="{{ old('nom_group') }}" placeholder="nom_group">
                    </div>
                    @error('nom_group')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>




            </div>
        </div>
    </div>
    </div>
    <footer class="card-footer">
        {{ $candidats ?? '' ?? ''->links() }}
    </footer>
@endsection