@extends('layouts.app')

@section('content')


@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="subnav" style="border: 1px solid rgb(148, 148, 148);
margin-bottom: 2%; background-color: white; border-radius: 10px">


@foreach($horses as $key => $value)
<br>
<h4 style="margin: 0.5%; margin-left: 2%; margin-right: 2%; color: rgb(163, 163, 163)">Naam Paard: {{ $value->name_horse }}
    &nbsp; &nbsp;

    Datum invoer: {{ $value->datum }}
    &nbsp; &nbsp;
    <a class="btn btn-small btn-info" href="{{ URL::to('horses/' . $value->id . '/edit') }}" style="margin-top: -5px; float: right">Aanpassen</a>
</h2>
<br>


@endforeach

</div>



<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'Administratief')" id="defaultOpen">Administratief</button>
  <button class="tablinks" onclick="openTab(event, 'Algemeen')">Algemene Historie</button>
  <button class="tablinks" onclick="openTab(event, 'Onderzoek')">Onderzoek</button>
  <button class="tablinks" onclick="openTab(event, 'Behandeling_laser')">Behandeling Laser</button>
  <button class="tablinks" onclick="openTab(event, 'Behandeling_fysio')">Behandeling Fysio</button>

</div>


<div id="Administratief" class="tabcontent">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td style="font-weight: bold">Naam Eigenaar</td>
                <td style="font-weight: bold">Achternaam</td>
                <td style="font-weight: bold">Telefoonnummer</td>
                <td style="font-weight: bold">Adres</td>
                <td style="font-weight: bold">Email</td>


            </tr>
        </thead>
        <tbody>
            @foreach($horses as $key => $value)
            <tr>
                <td>{{ $value->name }}</td>
                <td>{{ $value->name_owner }}</td>
                <td>{{ $value->phone_number }}</td>
                <td>{{ $value->address }}</td>
                <td>{{ $value->email }}</td>

            </td>
        </tr>
        </tbody>
<br>
<table class="table table-striped table-bordered">
<thead>
    <br>
    <tr>
        <td style="font-weight: bold">Naam Paard</td>
        <td style="font-weight: bold">Leeftijd</td>
        <td style="font-weight: bold">Geslacht</td>
        <td style="font-weight: bold">Ras</td>
        <td style="font-weight: bold">Aankoopkeuring</td>
        <td style="font-weight: bold">Alternatief Adres</td>

    </tr>
</thead>
<tbody>
        <tr>
            <td>{{ $value->name_horse }}</td>
            <td>{{ $value->age }}</td>
            <td>{{ $value->gender }}</td>
            <td>{{ $value->breed }}</td>
            <td>{{ $value->aankoopkeuring }}</td>
            <td>{{ $value->alternatief_adres }}</td>

        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
</div>


<div id="Algemeen" class="tabcontent">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td style="font-weight: bold">Bezit eigenaar</td>
                <td style="font-weight: bold">Huisvesting & ondergrond</td>
                <td style="font-weight: bold">Medicijnen</td>

            </tr>
        </thead>
        <tbody>
            @foreach($horses as $key => $value)
            <tr>
                <td>{{ $value->bezit_eigenaar }}</td>
                <td>{{ $value->huisvesting }}</td>
                <td>{{ $value->medicijnen }}</td>

            </td>
        </tr>
        </tbody>
<br>
<table class="table table-striped table-bordered">
<thead>
    <br>
    <tr>

        <td style="font-weight: bold">Voorgeschiedenis</td>
        <td style="font-weight: bold">Voeding/hoeven</td>
        <td style="font-weight: bold">Overige aandoeningen</td>

    </tr>
</thead>
<tbody>
        <tr>
            <td>{{ $value->voorgeschiedenis }}</td>
            <td>{{ $value->voeding }}</td>
            <td>{{ $value->overig }}</td>

        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
</div>


<div id="Onderzoek" class="tabcontent">
    <table class="table table-striped table-bordered">
        <thead>
</div>
<br>
    <tr>
        <td style="font-weight: bold">Klachten</td>
        <td style="font-weight: bold">Stoornissen</td>
        <td style="font-weight: bold">Voorgeschiedenis</td>
        <td style="font-weight: bold">BAR</td>
    </tr>
</thead>
<tbody>
    @foreach($horses as $key => $value)
    <tr>
        <td>{{ $value->klacht }}</td>
        <td>{{ $value->stoornissen }}</td>
        <td>{{ $value->voorgeschiedenis }}</td>
        <td>{{ $value->huisvesting }}</td>
    </td>
</tr>
</tbody>
</tr>
@endforeach
</tbody>
<table class="table table-striped table-bordered">
    <thead>
</div>
<br>
<tr>
    <td style="font-weight: bold">Inspectie in stand</td>

</tr>
</thead>
<tbody>
@foreach($horses as $key => $value)
<tr>
    <td>{{ $value->inspectie_stand }}</td>
    </tr>
</tbody>
</tr>
@endforeach
</tbody>

<table class="table table-striped table-bordered">
    <thead>
</div>
<br>
<tr>
    <td style="font-weight: bold">Oriënterende palpatie</td>

</tr>
</thead>
<tbody>
@foreach($horses as $key => $value)
<tr>
    <td>{{ $value->orienterende_palpatie }}</td>
</td>
</tr>
</tbody>
</tr>
@endforeach
</tbody>
<table class="table table-striped table-bordered">
    <thead>
</div>
<br>
<tr>
    <td style="font-weight: bold">Inspectie in beweging</td>

</tr>
</thead>
<tbody>
@foreach($horses as $key => $value)
<tr>
    <td>{{ $value->bewegingsonderzoek}}</td>

</td>
</tr>
</tbody>
</tr>
@endforeach
</tbody>



</table>
</div>





<div id="Behandeling_laser" class="tabcontent">
    <table class="table table-striped table-bordered">
        <thead>
<br>

            <tr>
                <td style="font-weight: bold">Datum</td>
                <td style="font-weight: bold">Behandeling Laser</td>
            </tr>
        </thead>
        <tbody>
            @foreach($horses as $key => $value)

            <tr>
                <td>{{ $value->datum }}</td>
                <td>{{ $value->behandeling }}</td>
            </td>
        </tr>
        <tr>
            <td>{{ $value->datum }}</td>
            <td>{{ $value->behandeling }}</td>
        </td>
    </tr>
    <tr>
        <td>{{ $value->datum }}</td>
        <td>{{ $value->behandeling }}</td>
    </td>
    </tr>
    <tr>
        <td>{{ $value->datum }}</td>
        <td>{{ $value->behandeling }}</td>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>

</div>





    <div id="Behandeling_fysio" class="tabcontent">
        <table class="table table-striped table-bordered">
            <thead>
            <br>

                <tr>
                    <td style="font-weight: bold">Datum</td>
                    <td style="font-weight: bold">Behandeling Fysio</td>
                </tr>
            </thead>
            <tbody>
                @foreach($horses as $key => $value)

                <tr>
                    <td>{{ $value->datum }}</td>
                    <td>{{ $value->behandeling }}</td>
                </td>
            </tr>
            <tr>
                <td>{{ $value->datum }}</td>
                <td>{{ $value->behandeling }}</td>
            </td>
        </tr>
        <tr>
            <td>{{ $value->datum }}</td>
            <td>{{ $value->behandeling }}</td>
        </td>
        </tr>
        <tr>
            <td>{{ $value->datum }}</td>
            <td>{{ $value->behandeling }}</td>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>

    </div>





{{-- SCRIPT SCRIPT SCRIPT --}}

<script>
    function openTab(evt, tabName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
    </script>




@endsection
