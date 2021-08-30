@extends('layouts.app')

@section('title','Liste des localités')

@section('content')
<h1>Liste des {{ $resource }}</h1>
<p>
    <table>
        <thead>
            <tr>
                <th>Code postal</th>
                <th>Localité</th>
            </tr>
        </thead>
    </p>
        <tbody>
            @foreach ($localities as $locality)
            <tr>
                <td>{{ $locality->postal_code }}</td>
                <td>{{ $locality->locality }}  </td>
                <td>
                    <form action="{{ route('locality_destroy', $locality->id ) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button>  Supprimer localite</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>    

    </table>

    
@endsection