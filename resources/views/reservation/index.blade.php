@extends('layouts.app')
@section('title','Liste des réservations')

@section('content')
<h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th> ID réservation </th>
                <th> Représentation n° </th>
                <th> ID utilisateur </th>
                <th> Nombre de places </th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td><a href="{{ route('reservation_show',$reservation->id) }}">  {{ $reservation->id }} </a> </td>
                    <td>{{ $reservation->representation_id }}</td>
                    <td> 
                        <a href="{{ route('reservation_show',$reservation->id) }}"> {{ $reservation->user_id }}</a>
                    </td>
                    <td>{{ $reservation->places}}</td>

                    <td>
                        <form action="{{ route('reservation_destroy', $reservation->id ) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button>Supprimer la reservation</button>
                        </form>
                    </td>

                </tr>
                
            @endforeach
        </tbody>
    </table>   
  
    
    <article class="card uper">
        <div class="card-header">
          <h3>Ajouter une nouvelle réservation</h3>
        </div>
      
        <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
          @endif
      
            <form method="post" action="{{ route('reservation_index') }}">
      .         @csrf
      @method('PUT')
                <div class="form-group">
                    <label for="representation_id">numéro de représentation:</label>
                    <input type="text" class="form-control" name="representation_id"/>
                </div>
      
                <div class="form-group">
                    <label for="user_id">ID utilisateur:</label>
                    <input type="text" class="form-control" name="user_id"/>
                </div>
                <div class="form-group">
                    <label for="places">Nombre de places :</label>
                    <input type="text" class="form-control" name="places"/>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </article>
        
@endsection