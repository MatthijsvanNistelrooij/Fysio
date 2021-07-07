@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10">
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">
                <i class="fas fa-search"></i>
            </label>
                <select class="form-select" id="select">
                    <option value="">zoek op paard...</option>
                    @foreach($horses as $key => $value)
                    <option value="{{ URL::to('/horses/' . $value->id ) }}">{{ $value->name_horse }} ( {{ $value->achternaam }}, {{ $value->name_owner }}  ) </option>
                    @endforeach
                </select>
          </div>
    </div>
    <div class="col-md-2">
        <div class="center" style="text-align: right">
            <button class="btn btn-success" style="text-align: center; width: 100%" type="submit" onclick="redirectToMyPage();">
                <i class="fas fa-chevron-circle-right"></i>
                Verder
            </button>
    </div>
</div>
<div>
    <img src="/images/horses2.png" alt="" style="width: 60%; margin: 10%; margin-left: 20%; border:1px solid rgb(194, 194, 194)">
</div>
<br>




<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})


     function redirectToMyPage(){
            location.href = document.getElementById('select').value;
        }

</script>
@endsection
