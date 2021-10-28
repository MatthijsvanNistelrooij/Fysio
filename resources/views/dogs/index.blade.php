@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">

<div class="col-md-2">
    <a href="{{ route('dog.index') }}" class="btn btn-success mb-1" style="width: 100%; color: white"><i class="fas fa-dog"></i> </a>
    <button class="btn btn-success mb-1" data-toggle="modal" data-target="#exampleModal100" type="button" style="width: 100%; color: white"><i class="fas fa-external-link-alt"></i></button>

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
<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-search"></i></span>
    </div>
    <select class="form-select" id="select">
        <option value="">Zoek op naam hond...</option>
        @foreach($dogs as $key => $value)
        <option value="{{ URL::to('/dogs/' . $value->id ) }}">{{ $value->content1 }}, {{ $value->content2 }} {{ $value->content8 }}</option>
        @endforeach
    </select>
    <div class="input-group-append">
        <button class="btn btn-success" style="border-radius: 0 5px 5px 0; color: white" onclick="redirectToMyPage();">
            <i class="fas fa-check"></i>
        </button>
    </div>
    </div>

    <table class="table table-hover table-sm mt-5">
        @if ($dogs->count() > 0 )

        <thead>

        <tr>
          <th scope="col">#</th>
          <th >Naam</th>
          <th >Datum</th>
          <th >Eigenaar</th>
          <th >Con.</th>
          <th style="text-align: right">Verwijder</th>
        </tr>
      </thead>
      @else
      <div class="mt-5">
        <p style="text-align: center; margin-top: 2%">
            Er zijn nog geen invoeren.
        </p>
        <div style="text-align: center" >
            <button class="btn btn-success mb-1" data-toggle="modal" data-target="#exampleModal100" type="button" style="width: 30%; color: white"><i class="fas fa-external-link-alt"></i>
            &nbsp;Nieuwe Invoer</button>
        </div>
      </div>
      @endif
      <tbody>
          @foreach ($dogs as $dog )
        <tr>
              <th scope="row">{{ $dog->id }}</th>
              <td><a href="{{ URL::to('/dogs/' . $dog->id ) }}" style="text-decoration: none">{{ $dog->content1 }}  </a></td>
              <td><a href="{{ URL::to('/dogs/' . $dog->id ) }}" style="text-decoration: none">{{ $dog->updated_at->format('d-m') }}</a></td>
              <td><a href="{{ URL::to('/dogs/' . $dog->id ) }}" style="text-decoration: none">{{ $dog->content2 }} {{ $dog->content8 }}</a></td>
              <td>{{ $dog->consults->count() }}</td>
              <td>
                <i class="fas fa-trash mt-1" style="color: red; float: right; cursor: pointer" data-toggle="modal" data-target="#exampleModal300"></i>
            </td>
          </tr>
          @endforeach
      </tbody>
      </table>
    </div>

</div>
<div class="modal fade bd-example-modal-lg" id="exampleModal300" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('partials.deletehond')
</div>

</div>

<script>
     function redirectToMyPage(){
            location.href = document.getElementById('select').value;
        }
</script>

@endsection
