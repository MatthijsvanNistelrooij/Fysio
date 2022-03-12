@extends('layouts.app')
@section('content')
    <div
        style="background: rgb(2,0,36);
                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(130,176,121,0.37298669467787116) 55%,
         rgba(0,212,255,1) 100%); margin-top: 10%; height: 50vh">
        <div class="row" style="padding: 5%">
            <div class="col-sm mb-1 p-1" style="padding: 0%">
                <div class="card img__wrap" style="overflow: hidden; height: auto; width: 80%; margin-left: 10%">
                    <a href="{{ route('horse.index') }}">
                        <img alt="Card image cap" class="card-img-top embed-responsive-item" src="/images/horse_icon.jpg" />
                        <p class="img__description" style="padding-top: 20%;">Equine</p>
                    </a>
                </div>
            </div>
            <div class="col-sm mb-1 p-1" style="padding: 0%">
                <div class="card img__wrap" style="overflow: hidden; height: auto; width: 80%; margin-left: 10%">
                    {{-- <a href="{{ route('dog.index') }}"> --}}
                    <a href="">
                        <img alt="Card image cap" class="card-img-top embed-responsive-item" src="/images/dog_icon.jpg" />
                        <p class="img__description" style="padding-top: 20%;">Canine</p>
                    </a>
                </div>
            </div>

            <div class="col-sm mb-1 p-1" style="padding: 0%">
                <div class="card img__wrap" style="overflow: hidden; height: auto; width: 80%; margin-left: 10%">
                    <a href="{{ route('horse.index') }}">
                        <img alt="Card image cap" class="card-img-top embed-responsive-item" src="/images/cat_icon.jpg" />
                        <p class="img__description" style="padding-top: 20%;">Feline</p>
                    </a>
                </div>
            </div>
            <div class="col-sm mb-1 p-1" style="padding: 0%">
                <div class="card img__wrap" style="overflow: hidden; height: auto; width: 80%; margin-left: 10%">
                    {{-- <a href="{{ route('dog.index') }}"> --}}
                    <a href="">
                        <img alt="Card image cap" class="card-img-top embed-responsive-item" src="/images/cavia_icon.jpg" />
                        <p class="img__description" style="padding-top: 20%;">Cavies</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
