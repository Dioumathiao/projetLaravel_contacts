<h1>Détails du contact</h1>
<p>Prénom: {{ $contact->prenom }}</p>
<p>Nom: {{ $contact->nom }}</p>
<p>Adresse: {{ $contact->adresse }}</p>
<p>Téléphone: {{ $contact->telephone }}</p>
<p>Ville: {{ $contact->ville }}</p>
<a href="{{ route('contacts.index') }}">Retour</a>
