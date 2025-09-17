<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
// Afficher la liste des contacts
public function index()
{
$contacts = Contact::all();
return view('contacts.index', compact('contacts'));
}

// Afficher un formulaire pour ajouter un contact
public function create()
{
return view('contacts.create');
}

// Ajouter un contact en base
public function store(Request $request)
{
$request->validate([
'prenom' => 'required|string|max:255',
'nom' => 'required|string|max:255',
'adresse' => 'required|string',
'telephone' => 'required|string',
'grib' => 'nullable|string|max:13',
]);

Contact::create($request->all());

return redirect()->route('contacts.index')
->with('success', 'Contact ajouté avec succès.');
}

// Afficher les détails d’un contact
public function show(Contact $contact)
{
return view('contacts.show', compact('contact'));
}

// Modifier un contact
public function edit(Contact $contact)
{
return view('contacts.edit', compact('contact'));
}

// Sauvegarder la modification
public function update(Request $request, Contact $contact)
{
$request->validate([
'prenom' => 'required|string|max:255',
'nom' => 'required|string|max:255',
'adresse' => 'required|string',
'telephone' => 'required|string',
'grib' => 'nullable|string|max:13',
]);

$contact->update($request->all());

return redirect()->route('contacts.index')
->with('success', 'Contact modifié avec succès.');
}

// Supprimer un contact
public function destroy(Contact $contact)
{
$contact->delete();

return redirect()->route('contacts.index')
->with('success', 'Contact supprimé.');
}
}
