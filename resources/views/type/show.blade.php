@extends('layouts.app')

@section('title','Fiche d\'un type')
@section('content')

  <p>  {{ $type->id }} {{ $type->type }}</p>
  <nav> <a href="{{ route('type_index') }}"> Retour à la liste </a>  </nav>
    
@endsection