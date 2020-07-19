
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('candidats.create') }}" method="POST">

                    <div class="section-title-02 mb-2">
                        <h4>Informations de base</h4>
                    </div>
                    <div class="cover-photo-contact">
                        <div class="upload-file">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input">
                                <label class="custom-file-label">Télécharger une photo de couverture</label>
                            </div>
                        </div>
                    </div>
                            <div class="form-group">
                                <input type="text" class="form-control  @error('date_nais') is-invalid @enderror" name="date_nais" id="date_nais" placeholder="Votre date_nais" value="{{ old('date_nais') }}">
                                @error('date_nais')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control  @error('num_portable') is-invalid @enderror" name="num_portable" id="num_portable" placeholder="Votre num_poratble" value="{{ old('num portable') }}">
                                @error('num_portable')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label class="d-block mb-3">Genre</label>
                                <div class="custom-control custom-radio d-inline">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Mâle</label>
                                </div>
                                <div class="custom-control custom-radio d-inline ml-3">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" checked="checked">
                                    <label class="custom-control-label" for="customRadio2">Femelle</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control  @error('Profession') is-invalid @enderror" name="Profession" id="Profession" placeholder="Votre nom" value="{{ old('profession') }}">
                                @error('Proffision')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control  @error('salaire') is-invalid @enderror" name="salaire" id="salaire" placeholder="Votre nom" value="{{ old('Salaire') }}">
                                @error('salaire')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control  @error('Description') is-invalid @enderror" name="description" id="description" placeholder="Votre description" value="{{ old('Description') }}">
                                @error('date_nais')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">

                            <button type="submit" class="btn btn-primary" >
                                {{ __('save') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


