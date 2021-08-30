@extends('layouts.app')

@section('title', 'Modifier une réservation')

@section('content')
    <form action="{{ route('reservation_update' , $reservation->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="representation_id">N° représentation</label>
            <input type="number" id="representation_id" name="representation_id" 
	       @if(old('representation_id'))
                value="{{ old('representation_id') }}" 
            @else
                value="{{ $reservation->representation_id }}" 
            @endif
	           class="@error('representation_id') is-invalid @enderror">

	@error('representation_id')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <div>
            <label for="user_id">Numéro utilisateur</label>
            <input type="number" id="user_id" name="user_id" 
	       @if(old('user_id'))
                value="{{ old('user_id') }}" 
            @else
                value="{{ $reservation->user_id }}" 
            @endif
	           class="@error('user_id') is-invalid @enderror">

	@error('user_id')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>
        <div>
            <label for="places">Nombre de places </label>
            <input type="number" id="places" name="places" 
	       @if(old('places'))
                value="{{ old('places') }}" 
            @else
                value="{{ $reservation->places }}" 
            @endif
	           class="@error('places') is-invalid @enderror">

	@error('places')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <button>Modifier</button>

        <a href="{{ route('reservation_show',$reservation->id) }}">Annuler</a>
    </form>

@if ($errors->any())
    <div class="alert alert-danger">
	   <h2>Liste des erreurs de validation</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <nav><a href="{{ route('reservation_index') }}">Retour à l'index</a></nav>


   
@endsection
