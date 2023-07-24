<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant; // Assurez-vous d'importer le modèle Etudiant

class EtudiantController extends Controller
{
    public function showForm()
    {
        return view('inscrire');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',   
            'date_naissance' => 'required|date', 
            'cycle' => 'required',
            'niveau_etude' => 'required',
            'annee_academique' => 'required',
            'photo' => 'required|image', 
        ]);

        // Validation passed
        echo 'Verification passed';

        $etudiant = new Etudiant();
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->date_naissance = $request->input('date_naissance');
        $etudiant->cycle = $request->input('cycle');
        $etudiant->niveau_etude = $request->input('niveau_etude');
        $etudiant->annee_academique = $request->input('annee_academique');

        // Traitement de l'image téléchargée
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('photos'), $fileName);
            $etudiant->photo = $fileName;
        }

        $etudiant->save();

        return redirect()->back()->with('success', 'Inscription réussie !');
    }




    public function index()
    {
        $etudiants = Etudiant::all();
        return view('liste', compact('etudiants'));
    }


 public function destroy($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();
return redirect()->route('delete')->with('success', 'Étudiant supprimé avec succès !');

    }



    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);

        return view('detail', ['etudiant' => $etudiant]);
    }

   public function sho($id)
    {
        $etudiant = Etudiant::findOrFail($id);

        return view('carte', ['etudiant' => $etudiant]);
    }











}



