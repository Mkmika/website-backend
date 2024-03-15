@extends('layout')

@section('title', 'Toutes nos offres')

@section('content')
<div class="flex flex-wrap">
    @foreach ($emplois as $emploi)
        @include('emploi', ['donnee' => $emploi ])
    @endforeach
</div>

@endsection
