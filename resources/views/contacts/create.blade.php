
@extends('layouts.app')

@section('content')
<h1>Ajouter un contact</h1>
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <label>Prénom:</label>
    <input type="text" name="prenom" required><br>

    <label>Nom:</label>
    <input type="text" name="nom" required><br>

    <label>Adresse:</label>
    <input type="text" name="adresse" required><br>

    <label>Téléphone:</label>
    <input type="text" name="telephone" required><br>


    <div class="mb-3">
        <label>Ville</label>
        <input type="text" name="ville" class="form-control" required>
    </div>
    <button type="submit">Enregistrer</button>
</form>
@endsection
