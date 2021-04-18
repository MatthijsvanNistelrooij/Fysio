@extends('layouts.app')

@section('content')



@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<br>

<div class="search">
    <div class="input-group">
        <br>
        <div class="form-outline">

          <input type="search" id="form1" placeholder="zoek op klantnaam" class="form-control"/>
        </div>
        &nbsp;
        <a href="/horses/index">
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
              </button>
                </a>
         </div>
</div>


<br>
<table class="table table-striped table-bordered" style="margin-top: 20px; background-color: white; border-radius: 10px; border:none">
    <thead>
        <tr>
            <td class="top" style="padding-top: 15px">ID</td>
            <td class="top" style="padding-top: 15px">Naam Paard</td>
            <td class="top" style="padding-top: 15px">Leeftijd</td>
            <td class="top" style="padding-top: 15px">Eigenaar</td>
            <td class="top" style="padding-top: 15px">Telefoonnummer</td>
            <td class="top" style="padding-top: 15px">Email</td>
            <td class="top" style="padding-top: 15px">&nbsp;Action
     </td>
        </tr>
    </thead>
    <tbody>

        @foreach($horses as $key => $value)

    <tr style="cursor: pointer">
        <td style="padding-top: 15px">{{ $value->id }}</td>
        <td style="padding-top: 15px">{{ $value->name_horse }}</td>
        <td style="padding-top: 15px">{{ $value->age }}</td>
        <td style="padding-top: 15px">{{ $value->name }} {{ $value->name_owner }}</td>
        <td style="padding-top: 15px">{{ $value->phone_number }}</td>
        <td style="padding-top: 15px">{{ $value->email }}</td>
    <td>

            <a class="btn btn-small btn-success" href="{{ URL::to('horses/' . $value->id) }}" style="margin-bottom: 5px">Openen</a>
&nbsp;
            <a class="btn btn-small btn-info" href="{{ URL::to('horses/' . $value->id . '/edit') }}" style="margin-bottom: 5px">Aanpassen</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>

</div>


@endsection
