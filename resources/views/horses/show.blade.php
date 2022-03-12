@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="{{ route('horse.index') }}" class="btn btn-light mb-1"
                    style="width: 25%; border: 1px solid rgb(213, 213, 213); width: 100%">Index</a>
                <button class="btn btn-light mb-1" data-toggle="modal" data-target="#exampleModal17" type="button"
                    style="width: 25%; border: 1px solid rgb(213, 213, 213); width: 100%"><i
                        class="fas fa-external-link-alt"></i></button>
            </div>

            <div class="col-md-10">
                @if (session()->has('success'))
                    <a href="" onClick="window.location.reload();" style="text-decoration: none">
                        <div class="alert alert-success mb-2"
                            style="background-color: #dbf0f0; border: none; color: rgb(121, 178, 182);">
                            <i class="fas fa-check"></i>
                            {{ session()->get('success') }}
                        </div>
                    </a>
                @endif
                @if ($errors->any())
                    <a href="" onClick="window.location.reload();" style="text-decoration: none">
                        <div class="alert alert-danger" style="border: none">
                            <i class="fas fa-exclamation"></i>
                            @foreach ($errors->all() as $error)
                                Naam paard is verplicht.
                            @endforeach
                        </div>
                    </a>
                @endif

                <div class="d-flex justify-content-center mb-1">
                    <button class="btn btn-light" data-toggle="modal" data-target="#exampleModal12" type="button"
                        style="width: 26%; border: 1px solid rgb(213, 213, 213);"><i class="fas fa-info"></i></button>
                    <button class="btn btn-light ml-1" data-toggle="modal" data-target="#exampleModal13" type="button"
                        style="width: 25%; border: 1px solid rgb(213, 213, 213);"><i class="fas fa-phone"></i></button>
                    <button class="btn btn-light ml-1" data-toggle="modal" data-target="#exampleModal14" type="button"
                        style="width: 24%; border: 1px solid rgb(213, 213, 213);"><i class="fas fa-list"></i></button>
                    <button class="btn btn-light ml-1" data-toggle="modal" data-target="#exampleModal15" type="button"
                        style="width: 24%; border: 1px solid rgb(213, 213, 213);"><i class="fas fa-edit"></i></button>
                </div>
                <div class="card mb-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 mt-3" style="position: relative">
                                <p><span style="font-weight: bold">Situatie: </span> {{ $horses->content13 }} </p>
                                <p><span style="font-weight: bold">Klachten: </span> {{ $horses->content14 }} </p>
                                <p style="margin-bottom: 50px"><span
                                        style="font-weight: bold; margin-bottom: 50px">Veranderingen: </span>
                                    {{ $horses->content15 }} </p>
                                <span style="float: right; margin-right: 8px">
                                    <i class="far fa-edit" data-toggle="modal" data-target="#exampleModal30"
                                        style="font-size: 35px; cursor: pointer; color: rgb(230, 230, 230); position: absolute; right: 15px; bottom: 10px;"></i>
                                </span>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6"
                                style="background-color: rgb(245, 245, 245, 0.8); padding: 15px; position: relative; min-height: 250px">
                                <div class="row">
                                    <div class="col-6">
                                        <p><span style="font-weight: bold">Naam: </span> {{ $horses->content1 }}</p>
                                        <p><span style="font-weight: bold">Eigenaar: </span> {{ $horses->content2 }}</p>
                                        <p><span style="font-weight: bold">Geslacht: </span> {{ $horses->content3 }}</p>
                                        <p><span style="font-weight: bold">Leeftijd: </span> {{ $horses->content4 }}</p>

                                    </div>
                                    <div class="col-6" style="position: relative">
                                        <a href="" data-toggle="modal" data-target="#exampleModal401">
                                            <img class="show_image_hover" src="/storage/images/{{ $horses->image }}"
                                                alt="">

                                        </a>
                                    </div>
                                    <span style="float: right">
                                        <i class="far fa-image" data-toggle="modal" data-target="#exampleModal16" style="font-size: 35px; cursor: pointer; color: rgb(230, 230, 230); position: absolute;
                                                right: 15px; bottom: 10px">
                                        </i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-light mb-1" type="button"
                        style="width: 25%; border: 1px solid rgb(213, 213, 213); width: 100%" data-toggle="modal"
                        data-target="#exampleModal">
                        <i class="fas fa-chevron-circle-right"></i>
                        Start Consult
                    </button>
                </div>

                <div class="row d-flex justify-content-left">

                    @foreach ($horses->sessies as $sessie)
                        <div class="col-md-4 mb-1">
                            <a href="/sessies/{{ $sessie->id }}" style="text-decoration: none; color: rgb(59, 59, 59)">
                                <div class="card mt-1" style="height: auto" id="show_card">
                                    <div class="card-header" style="height: auto">
                                        <h6>
                                            {{ $sessie->con1 }}
                                            <span style="float: right">
                                                {{ $sessie->con182 }}
                                            </span>
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <h6 style="font-size: 15px"> Info:
                                            {{ $sessie->con2 }}
                                        </h6>
                                    </div>
                            </a>
                            <div class="card-footer" style="background-color: white">
                                <i class="{{ $sessie->con3 }} ml-2" style="color: orange; font-size: 10px"></i>
                                <i class="{{ $sessie->con8 }} ml-2" style="color: rgb(0, 255, 21); font-size: 10px"></i>
                                <i class="{{ $sessie->con9 }} ml-2" style="color: rgb(0, 60, 255); font-size: 10px"></i>
                                <i class="{{ $sessie->con10 }} ml-2"
                                    style="color: rgb(238, 255, 0); font-size: 10px"></i>
                                <i class="{{ $sessie->con11 }} ml-2"
                                    style="color: rgb(225, 0, 255); font-size: 10px"></i>
                                <i class="{{ $sessie->con12 }} ml-2" style="color: rgb(255, 0, 76); font-size: 10px"></i>
                                <i class="{{ $sessie->con13 }} ml-2"
                                    style="color: rgb(0, 255, 255); font-size: 10px"></i>
                                <i class="{{ $sessie->con14 }} ml-2" style="color: rgb(0, 141, 0); font-size: 10px"></i>
                                <i class="{{ $sessie->con171 }} ml-2"
                                    style="color: rgb(144, 201, 144); font-size: 10px"></i>
                                <i class="{{ $sessie->con175 }} ml-2"
                                    style="color: rgb(144, 160, 230); font-size: 10px "></i>

                            </div>
                        </div>

                </div>
                <br>
                @endforeach
            </div>
        </div>
    </div>

    {{-- MODALS --}}

    <div class="modal fade bd-example-modal-lg" id="exampleModal302" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include('partials.deletesessie')
    </div>

    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include('partials.nieuwconsult')
    </div>

    <div class="modal fade bd-example-modal-lg" id="exampleModal12" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include('partials.info')
    </div>

    <div class="modal fade bd-example-modal-lg" id="exampleModal13" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include('partials.contact')
    </div>

    <div class="modal fade bd-example-modal-xl" id="exampleModal14" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include('partials.consulten')
    </div>


    <div class="modal fade bd-example-modal-xl" id="exampleModal401" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include('partials.fotooverzichtpaard')
    </div>

    </div>


    <div class="modal fade bd-example-modal-xl" id="exampleModal15" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include('partials.edit')
    </div>

    <div class="modal fade bd-example-modal-xl" id="exampleModal16" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include('partials.fotoshow')
    </div>

    <div class="modal fade bd-example-modal-sm" id="exampleModal30" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include('partials.situatie')
    </div>



@endsection
