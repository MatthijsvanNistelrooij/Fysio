@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row">

<div class="col-md-2">
    <a href="{{ route('dog.index') }}" class="btn btn-success mb-1" style="width: 100%; color: white"><i class="fas fa-dog"></i> </a>
    <button class="btn btn-success mb-1" data-toggle="modal" data-target="#exampleModal17" type="button" style="width: 100%; color: white"><i class="fas fa-external-link-alt"></i></button>
    <div class="card mb-1 d-none d-lg-block" style="height: auto; border-radius: 5px">
        <img src="/images/logo2.png" alt="" style="width: 100%; margin-top: 80%; margin-bottom: 25px">
    </div>
</div>
<div class="col-md-10">


<button class="btn btn-success mb-1" style="width: 100%;">
    <a href="{{ URL::to('/dogs/' . $consults->dog_id ) }}" style="text-decoration: none; color: rgb(255, 255, 255)">
        <i class="far fa-arrow-alt-circle-left"></i>
        Terug naar Hond ID: {{ $consults->dog_id}}
    </a>
</button>

<button class="btn btn-success mb-1" style="width: 100%; color: white">
    <a href="/consults/{{$consults->id}}" style="text-decoration: none; color: rgb(255, 255, 255)">
        <i class="far fa-arrow-alt-circle-left"></i>
        Terug naar Consult ID: {{ $consults->id}}
    </a>
</button>

<div class="card mt-1" style="font-family: 'Padauk', sans-serif; padding-right: 3%">

    <div class="card-body">
        <div class="rapport">
        <h6 style="text-align: center"> {{ $consults->con1 }}, {{ $consults->updated_at->format('d-m-Y') }} </h6>

        <div class="row">
            <div class="col" style="margin: 30px">
                <h6 style="font-size: 15px"> Info:
                    {{ $consults->con2 }}
                </h6>
            </div>
        </div>


    {{-- OEFENINGEN --}}

    <div class="row ml-2 mr-2 mt-2 mb-3">

    <div class="col-md-4 mb-2">
        <iframe width="100%" style="margin: 5px" height="100%" src="{{ $consults->con171 }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="col-md-4 mb-2">
        <iframe width="100%" style="margin: 5px" height="100%" src="{{ $consults->con172 }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="col-md-4 mb-2">
        <iframe width="100%" style="margin: 5px" height="100%" src="{{ $consults->con173 }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

</div>

</div>
</div>
</div>
@endsection
