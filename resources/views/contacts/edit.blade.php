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

    <button type="submit">Enregistrer</button>
</form>

<a href="{{ route('contacts.index') }}">Retour</a>
@endsection
