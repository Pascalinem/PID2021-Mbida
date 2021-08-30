@extends('layouts.app')

@section('title','Fiche d\'un type')
@section('content')

  <p>  {{ $type->id }} {{ $type->type }}</p>
  <h5>Liste d'artistes avec cette fonction</h5>
  <ol>
  @foreach ($type->artists as $artist)
     <li>{{ $artist->firstname }} {{ $artist->lastname }}</li> 
  @endforeach
  </ol>
  
  <div> <a href="{{ route('type_edit',$type->id) }}">Modifier</a></div>

  <nav> <a href="{{ route('type_index') }}"> Retour à la liste </a>  </nav>
    
@endsection