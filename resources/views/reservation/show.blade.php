@extends('layouts.app')

@section('title','Fiche d\'une réservation')
@section('content')

    <h5>information réservation numéro {{ $reservation->id }}<h5>
       
       
            <p>{{ $reservation->user_id}}</p>
            <p>  {{$reservation->representation_id }}</p>
       

       <div> <a href="{{ route('reservation_edit',$reservation->id) }}">Modifier</a></div>
       
    <nav> <a href="{{ route('reservation_index') }}">Retour à l'index</a> </nav>
@endsection