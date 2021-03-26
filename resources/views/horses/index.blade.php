@extends('layouts.app')

@section('content')



@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<br>
<table class="table table-striped table-bordered" style="margin-top: 20px; background-color: white; border-radius: 10px">
    <thead>
        <tr>
            <td class="top" style="padding-top: 15px">ID</td>
            <td class="top" style="padding-top: 15px">Naam Paard</td>
            <td class="top" style="padding-top: 15px">Leeftijd</td>
            <td class="top" style="padding-top: 15px">Eigenaar</td>
            <td class="top" style="padding-top: 15px">Telefoonnummer</td>
            <td class="top" style="padding-top: 15px">Email</td>
            <td class="top" style="padding-top: 15px">        <div class="search">
                <div class="input-group">
                    <br>
        <div class="form-outline" style="margin-top: -5px; border: 2px solid wheat; border-radius: 8px">
            <input type="search" id="form1" class="form-control"/>
        </div>
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

            <a class="btn btn-small btn-info" href="{{ URL::to('horses/' . $value->id . '/edit') }}" style="margin-bottom: 5px">Aanpassen</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>

</div>


@endsection
