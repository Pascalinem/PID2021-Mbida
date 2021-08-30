@extends('layouts.app')
@section('title','Liste des artistes')

@section('content')
<h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artists as $artist)
                <tr>
                    <td>{{ $artist->firstname }}</td>
                    <td> 
                        <a href="{{ route('artist_show',$artist->id) }}"> {{ $artist->lastname }}</a>
                    </td>
                    <td>
                        <form action="{{ route('artist_destroy', $artist->id ) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button>Supprimer artiste</button>
                        </form>
                    </td>

                </tr>
                
            @endforeach
        </tbody>
    </table>    
    
@endsection