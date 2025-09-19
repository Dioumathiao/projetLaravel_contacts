@extends('layouts.app')

@section('content')
<h1>Modifier le contact</h1>

<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Prénom :</label>
    <input type="text" name="prenom" value="{{ $contact->prenom }}" required>

    <label>Nom :</label>
    <input type="text" name="nom" value="{{ $contact->nom }}" required>

    <label>Adresse :</label>
    <input type="text" name="adresse" value="{{ $contact->adresse }}" required>

    <label>Téléphone :</label>
    <input type="text" name="telephone" value="{{ $contact->telephone }}" required>

    <div class="mb-3">
        <label for="ville" class="form-label fw-semibold">Ville</label>
        <input id="ville" type="text" name="ville" class="form-control form-control-lg" value="{{ old('ville', $contact->ville) }}" required>
    </div>


    <button type="submit">Enregistrer</button>
</form>

<a href="{{ route('contacts.index') }}">Retour</a>
@endsection
