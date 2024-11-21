@extends('layouts.app')

@section('content')
    <h1>Foto dei tuoi viaggi</h1>
    <a href="{{ route('websites.create') }}">Aggiungi una nuova foto</a>

    <table>
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Descrizione</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($websites as $website)
                <tr>
                    <td>{{ $website->title }}</td>
                    <td>{{ $website->description }}</td>
                    <td>
                        <a href="{{ route('websites.edit', $website->id) }}">Modifica</a>
                        <form action="{{ route('websites.destroy', $website->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
