@extends('layouts.app')

@section('title','Fiche d\'un artiste')
@section('content')
    <h1> {{ $artist->firstname }} {{ $artist->lastname }}</h1>
    <h5>Liste des types de l'artiste<h5>
       <ul> 
        @foreach ($artist->types as $type)
            <li>{{ $type->type }}</li>
        @endforeach
       </ul>

       <div> <a href="{{ route('artist_edit',$artist->id) }}">Modifier</a></div>
       
    <nav> <a href="{{ route('artist_index') }}">Retour à l'index</a> </nav>
@endsection