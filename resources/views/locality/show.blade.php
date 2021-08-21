@extends('layouts.app')
@section('title','Information localité')

@section('content')
   <p>
       {{ $locality->postal_code }} {{ $locality->locality }}
   </p> 
   <ul>
       @foreach ($locality->locations as $location)

       <li>{{ $location->designation }}</li>
           
       @endforeach
      
      
   </ul>




   <nav> <a href="{{ route('locality_index') }}">Retour à l'index</a> </nav>
@endsection
