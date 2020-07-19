@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="jobber-candidate-detail">
                <div id="about">
                    <h5 class="mb-3">About Me</h5>
                    <div class="border p-3">
                        <header class="card-header">
                            <p class="card-header-title">photo profil : {{ $candidat->photo_profil }}</p>
                        </header>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-account"></i>
                                    <div class="feature-info-content pl-3">
                                        <label class="mb-0">Email:</label>
                                        <div class="content"><p>{{ $candidat->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-curriculum"></i>
                                    <div class="feature-info-content pl-3">
                                        <label class="mb-0">numero télephone:</label>
                                        <div class="content"><p>{{ $candidat->num_portable }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-appointment"></i>
                                    <div class="feature-info-content pl-3">
                                        <label class="mb-0"> date naissance :</label>
                                        <div class="content"><p>{{ $candidat->date_nais }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-map"></i>
                                    <div class="feature-info-content pl-3">
                                        <label class="mb-0">Addresse :</label>
                                        <div class="content"><p>{{ $candidat->adresse }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-man"></i>
                                    <div class="feature-info-content pl-3">
                                        <label class="mb-0">genre :</label>
                                        <div class="content"><p>{{ $candidat->genre }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-approval"></i>
                                    <div class="feature-info-content pl-3">
                                        <label class="mb-0">Profession:</label>
                                        <div class="content"><p>{{ $candidat->profession }}</p></div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-approval"></i>
                                    <div class="feature-info-content pl-3">
                                        <label class="mb-0">Salaire:</label>
                                        <div class="content"><p>{{ $candidat->salaire }}</p></div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex">
                                    <i class="font-xll text-primary align-self-center flaticon-approval"></i>
                                    <div class="feature-info-content pl-3">
                                        <label class="mb-0">Description:</label>
                                        <div class="content"><p>{{ $candidat->description }}</p></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection