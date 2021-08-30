@extends('layouts.app')

@section('title','Fiche d\'un rôle')

@section('content')
    
<p>{{ $role->id }} {{ $role->role }}</p>

<div> <a href="{{ route('role_edit',$role->id) }}">Modifier</a></div>

<nav> <a href="{{ route('role_index') }}">Retour à la liste des rôles</a> </nav>
@endsection