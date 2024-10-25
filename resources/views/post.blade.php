@extends('layouts.main')


@section('container')
@foreach ($blog as $blogest)
    <div class="p-4">
        <h1>{{ $blogest["tittle"] }}</h1>
        <h5>{{ $blogest["athor"] }}</h5>
        <p>{{  $blogest["topic"] }}</p>
    </div>
@endforeach
@endsection