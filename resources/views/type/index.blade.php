@extends('layouts.app')

@section('title','Liste des types')
@section('content')
<h1>Liste des {{ $resource }}</h1>
    
        @foreach ($types as $type)
            <p>{{ $type->id}} <a href="{{ route('type_show',$type->id) }}"> {{ $type->type }}  </a> 
                
                    <form action="{{ route('type_destroy', $type->id ) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button>Supprimer type</button>
                    </form>
            </p>
            
        @endforeach
    
    
@endsection