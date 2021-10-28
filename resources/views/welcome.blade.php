@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-2">
        <div class="card mb-1 d-none d-lg-block" style="height: auto; border-radius: 5px">
            <img src="/images/logo2.png" alt="" style="width: 100%; margin-top: 80%; margin-bottom: 25px">
        </div>
    </div>
        <div class="col-md-10">
            <div class="container">
                <div class="row">
                    <div class="col-sm mb-2">
                        <div class="card img__wrap" style="border-radius: 25px; overflow: hidden; height: 260px;">
                            <a href="{{ route('horse.index') }}">
                                <img alt="Card image cap" class="card-img-top embed-responsive-item" src="/images/horse_icon.jpg" />
                                <p class="img__description" style="padding-top: 20%;">Equine</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm mb-2">
                        <div class="card img__wrap" style="border-radius: 25px; overflow: hidden; height: 260px;">
                            <a href="{{ route('dog.index') }}">
                                <img alt="Card image cap" class="card-img-top embed-responsive-item" src="/images/dog_icon.jpg"/>
                                <p class="img__description" style="padding-top: 20%;">Canine</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm mb-2">
                        <div class="card img__wrap" style="border-radius: 25px; overflow: hidden; height: 260px;">
                            <a href="{{ route('horse.index') }}">
                            <img alt="Card image cap" class="card-img-top embed-responsive-item" src="/images/cat_icon.jpg" />
                            <p class="img__description" style="padding-top: 20%;">Feline</p>
                        </a>
                        </div>
                    </div>
                    <div class="col-sm mb-2">
                        <div class="card img__wrap" style="border-radius: 25px; overflow: hidden; height: 260px;">
                            <a href="{{ route('dog.index') }}">
                            <img alt="Card image cap" class="card-img-top embed-responsive-item" src="/images/cavia_icon.jpg" />
                            <p class="img__description" style="padding-top: 20%;">Cavies</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


