@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        @foreach ($games as $game)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ $game->title }}</div>
                <div class="card-body">{{ $game->description }}</div>
                <div class="card-body">{{ $game->thumb }}</div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection