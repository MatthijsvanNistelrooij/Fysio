

@extends('layouts.app')

@section('content')

</div>

@if(count($errors) > 0)
<ul class="list-group">
    @foreach($errors->all() as $error)
    <li class="list-group-item text-danger">
        {{ $error }}
    </li>
    @endforeach
    <br>
</ul>
@endif

<style>
    .form-control{
        padding: 6px 12px;
        margin-left: 4%;
        margin-right: 5%;
        max-width: 90%;
    }
    .title {
        margin-left: 5%;
        padding-bottom: 6px;
    }

</style>


        <div class="card" style="margin-top: 20px; border-radius: 10px">
            <form action="{{ route('horses.store') }}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}


<div class="card-header"
style="background-color: rgb(234, 247, 233); color: white; border-radius: 10px 10px 0 0px; color: rgb(39, 39, 79)">
Diersoort toegoegen</div>

<br>
<br>


        <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <label for="title" style="font-weight: bold" class="title">Voeg Diersoort Toe</label>
                        <input type="text" name="diersoort" placeholder="Voeg diersoort toe" class="form-control">
                    </div>
                    {{-- <div class="col-sm" style="padding-top: 38px">
                        <input type="text" name="name_owner" placeholder="achternaam" class="form-control">
                    </div> --}}
                </div>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Opslaan
                    </button>
                </div>
                <br>
            </div>
        </form>
    </div>
</div>




@endsection
