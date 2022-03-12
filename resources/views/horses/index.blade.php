@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="{{ route('horse.index') }}" class="btn btn-light mb-1"  style="width: 25%; border: 1px solid rgb(213, 213, 213); width: 100%">Index</a>
                <button class="btn btn-light mb-1" data-toggle="modal" data-target="#exampleModal17" type="button"
                   style="width: 25%; border: 1px solid rgb(213, 213, 213); width: 100%"><i class="fas fa-external-link-alt"></i></button>
            </div>
            <div class="col-md-10">
                @if (session()->has('success'))
                    <a href="" onClick="window.location.reload();" style="text-decoration: none">
                        <div class="alert alert-success mb-2"
                            style="background-color: #dbf0f0; border: none; color: rgb(121, 178, 182)">
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
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-search"></i></span>
                    </div>
                    <select class="form-select" id="select">
                        <option value="">Zoek op naam paard...</option>
                        @foreach ($horses as $key => $value)
                            <option value="{{ URL::to('/horses/' . $value->id) }}">{{ $value->content1 }} ,
                                {{ $value->content2 }} {{ $value->content8 }}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-info" style="border-radius: 0 5px 5px 0; color: white"
                            onclick="redirectToMyPage();">
                            <i class="fas fa-check"></i>
                        </button>
                    </div>
                </div>

                @if ($horses->count() > 0)
                    <div class="row pt-5 pl-3 pr-3">
                        <div class="col">
                            <strong>
                                Naam
                            </strong>
                        </div>
                        <div class="col">
                            <strong>
                                Eigenaar
                            </strong>
                        </div>
                        <div class="col">
                            <strong>
                                Consulten
                            </strong>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <hr size="sm">
                @else
                    <div class="mt-5">
                        <p style="text-align: center; margin-top: 2%">
                            Er zijn nog geen invoeren.
                        </p>
                        <div style="text-align: center">
                            <button class="btn btn-info mb-1" data-toggle="modal" data-target="#exampleModal17"
                                type="button" style="width: 30%; color: white">
                                <i class="fas fa-external-link-alt"></i>&nbsp; Nieuwe Invoer</button>
                        </div>

                    </div>
                @endif

                @foreach ($horses as $horse)
                    <div class="row pt-3 pr-3 pl-3">
                        <div class="col">
                            <a href="{{ URL::to('/horses/' . $horse->id) }}"
                                style="text-decoration: none; color: gray">{{ $horse->content1 }} </a>
                        </div>
                        <div class="col">
                            <a href="{{ URL::to('/horses/' . $horse->id) }}"
                                style="text-decoration: none; color: gray">{{ $horse->content2 }}
                                {{ $horse->content8 }}</a>
                        </div>
                        <div class="col">
                            {{ $horse->sessies->count() }}
                        </div>
                        <div class="col">
                            <i class="fas fa-trash mt-1" style="color: red; float: right; cursor: pointer"
                            data-toggle="modal" data-target="#exampleModal300"></i>
                        </div>
                    </div>
                    <hr size="sm" class="m-1">
                @endforeach

            </div>

        </div>
        <div class="modal fade bd-example-modal-lg" id="exampleModal300" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            @include('partials.delete')
        </div>

    </div>

    <script>
        function redirectToMyPage() {
            location.href = document.getElementById('select').value;
        }
    </script>

@endsection
