@extends('layouts.app')

@section('content')
    <h1>Aggiungi una nuova foto</h1>
    <form action="{{ route('websites.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title">Titolo:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div class="mb-3">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div class="mb-3 form-check">
            <label for="imageUrl">URL immagine</label>
            <input type="file" name="image_url" id="image_url" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
