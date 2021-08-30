@extends('layouts.app')

@section('title','Liste des rôles')

@section('content')
<h1>Liste des {{ $resource }}</h1>
    
        @foreach ($roles as $role)
          <p> {{ $role->id }} <a href="{{ route('role_show',$role->id) }}"> {{ $role->role }} </a>
              <form action="{{ route('role_destroy', $role->id ) }}" method="post">
                  @method('DELETE')
                  @csrf
                  <button>Supprimer role</button>
              </form>
          </p>
        @endforeach
     
@endsection