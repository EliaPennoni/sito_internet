@extends('layouts.app')

@section('content')
    <h1>Il tuo post</h1>

    <div class="post">
        <h3>{{ $website->title }}</h3>
        <p><strong>Descrizione:</strong>{{ $website->description }}</p>
        <p><strong>Luogo:</strong>{{ $website->location }}</p>
        <p><strong>Data:</strong> {{ $website->taken_at }}</p>
        <p><strong>Categoria:</strong> {{ $website->category }}</p>
        <div>
            <img src="{{ $website->imageUrl }}" alt="{{ $website->title }}" style="max-width: 100%; height: auto;">
        </div>
        <a href="{{ route('websites.index') }}">Torna all'elenco</a>
    </div>
@endsection
