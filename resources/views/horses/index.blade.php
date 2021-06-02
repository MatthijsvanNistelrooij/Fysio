@extends('layouts.app')

@section('content')

<div class="form-group">

    <div class="row">

        <div class="col-sm">

            <div class="text-center">

                <div class="card-header" style="text-align: center; font-weight: bold; background-color: rgb(36, 172, 193); color: white; border-radius: 5px 5px 0 0">

                    <a href="/animals/index">

                        <button class="btn btn-light btn-sm" style="float: left; margin-top: -3px; margin-left: -10px">

                            <i class="fas fa-arrow-circle-left"></i>

                            Start</button>

                        </a>

                    Index

                    <i class="fas fa-search"></i>

                    <a href="/">

                        <button class="btn btn-light btn-sm" style="float: right; margin-top: -3px; margin-right: -10px">

                            Home

                            <i class="fas fa-home"></i>

                        </button>

                </a>
                </div>
        </div>
        <div class="card" style="border-radius: 0 0 10px 10px; overflow: hidden; border:1px solid rgb(221, 221, 221); padding: 5px; background-color: rgb(255, 255, 255)">

           <br><br>

        <br>
        <div class="center" style="text-align: center; margin-left: 10%">
            <select id="select" class="form-control" style="width: 80%">
                <option value="">...</option>
                @foreach($horses as $key => $value)


                {{-- go to show --}}
                {{-- <option value="{{ URL::to('horses/' . $value->id) }}">{{ $value->name_horse }} ({{ $value->datum }})</option> --}}

                {{-- go to edit --}}
                <option value="{{ URL::to('horses/' . $value->id . '/edit') }}">{{ $value->name_horse }} ({{ $value->datum }})</option>

                @endforeach
            </select>
        </div>

            <br>
            <div class="center" style="text-align: center">
                <button class="btn btn-success" style="text-align: center" type="submit" onclick="redirectToMyPage();">
                    <i class="fas fa-chevron-circle-right"></i>
                    Verder
                </button>
            </div>
<br>
<br>
        </div>

        <br>
        <br>
        <br>
        <br>
    </div>

    </div>

</div>



{{-- MAKE SELECT LINK CLICKABLE --}}

<script>
     function redirectToMyPage(){
            location.href = document.getElementById('select').value;
        }
</script>

@endsection
