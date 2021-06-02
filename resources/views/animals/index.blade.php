@extends('layouts.app')

@section('content')


<div class="form-group">
    <div class="row">
        <div class="col-sm">
            <div class="text-center">
                <div class="card-header" style="text-align: center; font-weight: bold; background-color: rgb(36, 172, 193); color: white; border-radius: 5px 5px 0 0">

                    Start Sessie

                </div>
        </div>
        <div class="card" style="border-radius: 0 0 10px 10px; overflow: hidden; border:1px solid rgb(221, 221, 221); padding: 5px; background-color: rgb(255, 255, 255)">
        <br>
        <label class="title"> &nbsp; Selecteer Diersoort</label>
        <div class="center" style="text-align: center; margin-left: 10%">
            <select id="select" class="form-control" style="width: 80%">
                <option value="...">...</option>
                <option value="...">Kat</option>
                <option value="...">Hond</option>
                <option value="...">Paard</option>
                <option value="...">Parkiet</option>

            </select>
        </div>

            <br>
            <div class="center" style="text-align: center">
           <a href="/horses/create">
                <button class="btn btn-success" style="text-align: center" type="submit">
                    <i class="fas fa-chevron-circle-right"></i>
                    Verder
                </button>
            </a>

            </div>

<br>
        </div>

        <br>
        <br>
        <br>
        <br>
    </div>

    </div>

</div>

{{-- <table class="table table-striped table-bordered" style="margin-top: 20px; background-color: white; border-radius: 10px; border:none">
    <thead>
        <tr>
            <td class="top" style="padding-top: 15px">Naam Paard</td>
            <td class="top" style="padding-top: 15px">Leeftijd</td>
            <td class="top" style="padding-top: 15px">Eigenaar</td>
            <td class="top" style="padding-top: 15px">Email</td>
            <td class="top" style="padding-top: 15px">&nbsp;
     </td>
        </tr>
    </thead>
    <tbody>

        @foreach($horses as $key => $value)

    <tr style="cursor: pointer">
        <td style="padding-top: 15px">{{ $value->name_horse }}</td>
        <td style="padding-top: 15px">{{ $value->age }}</td>
        <td style="padding-top: 15px">{{ $value->name }} {{ $value->name_owner }}</td>
        <td style="padding-top: 15px">{{ $value->email }}</td>
    <td>

            <a class="btn btn-small btn-success" href="{{ URL::to('horses/' . $value->id) }}" style="margin-bottom: 5px">
                <i class="fas fa-sign-in-alt"></i>
            </a>
&nbsp;
            <a class="btn btn-small btn-info" href="{{ URL::to('horses/' . $value->id . '/edit') }}" style="margin-bottom: 5px">
                <i class="far fa-edit"></i>
            </a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</div> --}}




@endsection
