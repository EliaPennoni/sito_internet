@extends('layouts.app')

@section('content')

    <h1>Modifica il tuo post</h1>

    <form action="{{ route('websites.update', $website->id) }}" method="post">
        @csrf
        @method('PUT')
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
            <input type="text" name="imageUrl" id="imageUrl" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
