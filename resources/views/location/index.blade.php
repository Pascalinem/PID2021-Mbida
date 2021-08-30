@extends('layouts.app')

@section('title','Liste des lieux de spectacle')

@section('content')
<h1> Liste des lieux</h1>

@foreach ($locations as $location)
    <p>{{ $location->id }} {{ $location->slug}} {{ $location->designation }} {{ $location->address }} {{ $location->locality_id }} {{ $location->website}} {{ $location->phone }}   </p>
    
@endforeach
    
@endsection