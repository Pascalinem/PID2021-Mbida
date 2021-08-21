@extends('layouts.app')
@section('title','Information localité')

@section('content')
   <p>
       {{ $locality->postal_code }} {{ $locality->locality }}
   </p> 
   <nav> <a href="{{ route('locality_index') }}">Retour à l'index</a> </nav>
@endsection
