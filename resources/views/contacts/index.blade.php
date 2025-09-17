<h1>Liste des contacts</h1>

<a href="{{ route('contacts.create') }}">Ajouter un contact</a>

<ul>
    @foreach($contacts as $contact)
    <li>
        {{ $contact->prenom }} {{ $contact->nom }} - {{ $contact->telephone }}
        <a href="{{ route('contacts.show', $contact) }}">Voir</a>
        <a href="{{ route('contacts.edit', $contact) }}">Modifier</a>
        <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    </li>
    @endforeach
</ul>
