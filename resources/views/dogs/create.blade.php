@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">Nieuw paard toevoegen:</div>
        <div class="card-body" style="padding: 5%">
            <form action="{{ route('dogs.store') }}" method="POST">
            @csrf
            <label for="content" class="mt-2">Naam paard:</label>
            <input type="text" class="form-control" name="content1">
            <label for="content" class="mt-2">Eigenaar:</label>
            <input type="text" class="form-control" name="content2">
            <div class="d-flex justify-content-end">
                <button class="btn btn-info mt-4" style="color: white" type="submit">
                    <i class="fas fa-check"></i>
                    Opslaan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
