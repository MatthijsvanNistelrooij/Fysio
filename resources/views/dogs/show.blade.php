@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-2">
        <a href="{{ route('dog.index') }}" class="btn btn-success mb-1" style="width: 100%; color: white"><i class="fas fa-dog"></i> </a>
        <button class="btn btn-success mb-1 " data-toggle="modal" data-target="#exampleModal100" type="button" style="width: 100%; color: white"><i class="fas fa-external-link-alt"></i></button>
        <div class="card mb-1 d-none d-lg-block" style="height: auto; border-radius: 5px">
            <img src="/images/logo2.png" alt="" style="width: 100%; margin-top: 80%; margin-bottom: 25px">
        </div>
    </div>
    <div class="col-md-10">

    @if (session()->has('success'))
    <a href="" onClick="window.location.reload();" style="text-decoration: none">
        <div class="alert alert-success mb-2" style="background-color: #dbf0f0; border: none; color: rgb(121, 178, 182)">
            <i class="fas fa-check"></i>
            {{ session()->get('success') }}
        </div>
    </a>
    @endif

    <div class="card mb-1">
        <div class="card-header d-flex justify-content-center">
            <button class="btn btn-light" data-toggle="modal" data-target="#exampleModal201" type="button" style="width: 24%; border: 1px solid rgb(213, 213, 213);"><i class="fas fa-info"></i></button>
            <button class="btn btn-light ml-1" data-toggle="modal" data-target="#exampleModal202" type="button" style="width: 24%; border: 1px solid rgb(213, 213, 213);"><i class="fas fa-phone"></i></button>
            <button class="btn btn-light ml-1" data-toggle="modal" data-target="#exampleModal203" type="button" style="width: 24%; border: 1px solid rgb(213, 213, 213);"><i class="fas fa-list"></i></button>
            <button class="btn btn-light ml-1" data-toggle="modal" data-target="#exampleModal400" type="button" style="width: 24%; border: 1px solid rgb(213, 213, 213);"><i class="fas fa-image"></i></button>

            <button class="btn btn-success ml-1" data-toggle="modal" data-target="#exampleModal204" type="button" style="width: 24%; color: white"><i class="fas fa-edit"></i></button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 mt-3" style="position: relative">
                    <p><span style="font-weight: bold">Situatie: </span> {{ $dogs->content13 }} </p>
                    <p><span style="font-weight: bold">Klachten: </span> {{ $dogs->content14 }} </p>
                    <p style="margin-bottom: 50px"><span style="font-weight: bold; margin-bottom: 50px">Veranderingen: </span> {{ $dogs->content15 }} </p>
                    <span style="float: right; margin-right: 8px">
                        <i class="far fa-edit" data-toggle="modal" data-target="#exampleModal205" style="font-size: 35px; cursor: pointer; color: rgb(230, 230, 230); position: absolute; right: 15px; bottom: 10px;"></i>
                    </span>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6" style="background-color: rgb(245, 245, 245, 0.8); padding: 15px; position: relative; min-height: 250px">
                <div class="row">
                    <div class="col-6">
                        <p><span style="font-weight: bold">Naam: </span> {{ $dogs->content1 }}</p>
                        <p><span style="font-weight: bold">Eigenaar: </span> {{ $dogs->content2 }}</p>
                        <p><span style="font-weight: bold">Geslacht: </span> {{ $dogs->content3 }}</p>
                        <p><span style="font-weight: bold">Leeftijd: </span> {{ $dogs->content4 }}</p>

                    </div>
                    <div class="col-6" style="position: relative">
                        <img src="/storage/images/{{ $dogs->image }}" alt="" style="width: 80%; height: auto; float: right; position: absolute; top: 0px; right: 15px;">
                    </div>
                    <span style="float: right">
                        <i class="far fa-image" data-toggle="modal" data-target="#exampleModal206"
                        style="font-size: 35px; cursor: pointer; color: rgb(230, 230, 230); position: absolute;
                        right: 15px; bottom: 10px"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<button class="btn btn-success mb-1" type="button" style="width: 100%; color: white" data-toggle="modal" data-target="#exampleModal101">
    <i class="fas fa-chevron-circle-right"></i>
    Start Consult
</button>

<div class="row d-flex justify-content-left">
    @foreach ($dogs->consults as $consult )
    <div class="col-md-4 mb-1">
        <a href="/consults/{{$consult->id}}" style="text-decoration: none; color: rgb(59, 59, 59)">
            <div class="card mt-1" style="height: auto"  id="show_card">
                <div class="card-header" style="height: auto">
                    <h6 style="font-size: 15px">
                        {{ $consult->con1 }}
                     <span style="float: right; font-size: 12px">
                        {{ $consult->updated_at->format('d-m-Y') }}
                    </span>
                </div>
                <div class="card-body">
                    <h6 style="font-size: 15px"> Info:
                        {{ $consult->con2 }}
                    </h6>
                </div>
            </a>
                <div class="card-footer" style="background-color: white">
                        <i class="{{ $consult->con3}} ml-2" style="color: orange; font-size: 10px"></i>
                        <i class="{{ $consult->con8}} ml-2" style="color: rgb(0, 255, 21); font-size: 10px"></i>
                        <i class="{{ $consult->con9}} ml-2" style="color: rgb(0, 60, 255); font-size: 10px"></i>
                        <i class="{{ $consult->con10}} ml-2" style="color: rgb(238, 255, 0); font-size: 10px"></i>
                        <i class="{{ $consult->con11}} ml-2" style="color: rgb(225, 0, 255); font-size: 10px"></i>
                        <i class="{{ $consult->con12}} ml-2" style="color: rgb(255, 0, 76); font-size: 10px"></i>
                        <i class="{{ $consult->con13}} ml-2" style="color: rgb(0, 255, 255); font-size: 10px"></i>
                        <i class="{{ $consult->con14}} ml-2" style="color: rgb(0, 141, 0); font-size: 10px"></i>
                </div>
            </div>

    </div>
    <br>
    @endforeach
</div>

{{--  MODALS --}}

<div class="modal fade bd-example-modal-sm" id="exampleModal101" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.nieuwconsulthond')
</div>
</div>
</div>



<div class="modal fade bd-example-modal-sm" id="exampleModal201" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.infohond')
</div>
</div>
</div>

<div class="modal fade bd-example-modal-sm" id="exampleModal202" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.contacthond')
</div>
</div>
</div>


<div class="modal fade bd-example-modal-sm" id="exampleModal203" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.consultenhond')
</div>
</div>
</div>


<div class="modal fade bd-example-modal-sm" id="exampleModal302" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.deleteconsult')
</div>
</div>
</div>

<div class="modal fade bd-example-modal-sm" id="exampleModal206" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.fotoshond')
</div>
</div>
</div>

<div class="modal fade bd-example-modal-sm" id="exampleModal400" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.fotooverzichthond')
</div>
</div>
</div>



<div class="modal fade bd-example-modal-sm" id="exampleModal205" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.situatiehond')
</div>
</div>
</div>


<div class="modal fade bd-example-modal-sm" id="exampleModal204" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.edithond')
</div>
</div>
</div>
</div>

@endsection
