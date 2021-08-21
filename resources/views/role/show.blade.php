@extends('layouts.app')

@section('title','Fiche d\'un rôle')

@section('content')
    
<p>{{ $role->id }} {{ $role->role }}</p>
<nav> <a href="{{ route('role_index') }}">Retour à la liste des rôles</a> </nav>
@endsection