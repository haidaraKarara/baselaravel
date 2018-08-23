<?php
/**
 * Classe EtudiantController
 * @author : A.Haidara
 * @since : 02-07-2018
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Http\Requests\EtudiantRequest;
class EtudiantController extends Controller
{
    /**
     * Ajouter un étudiant
     * 
     * @return sur la vue précédente
     */
    public function add (EtudiantRequest $request)
    {
        Etudiant::create($request->all());
        #retrun view('home')
        return back()->with('status',trans('etudiant.msgenregistrementok'));
    }

    /**
     * Afficher les informaions d'un étudiant.
     * 
     * @param int $id: id de l'étudiant
     * @return view : show
     */
    public function show($id)
    {
        $etudiant = Etudiant::findorfail($id);
        return view('etudiant.show',compact('etudiant'));
    }

    /**
     * Afficher le formulaire pour la modification
     * 
     * @param int $id : id  de l'étudiant
     * @return view : Vue Edit pour étudiant
     */
    public function edit($id)
    {
        $etudiant = Etudiant::findorfail($id);//Si l'id n'existe pas une erreur 404 est retournée
        return view('etudiant.edit',compact('etudiant'));    
    }

    /**
     * Valider la modification sur le formulaire 
     * 
     * @param int $id (id de l'étudiant) , request ce qui a été posté par les inputs
     * @return sur la vue précédente
     */
    public function update(EtudiantRequest $request,$id)
    {
        $etudiant = Etudiant::findorfail($id);//Si l'id n'existe pas une erreur 404 est retournée
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->save();
        return back()->with('status',trans('etudiant.msgmiseajourok'));
    }

    /**
     * Supprimer un étudiant
     * 
     * @param ind $id (id de l'étudiant)
     * @return sur la vue précédente
     */
    public function delete ($id)
    {
        $etudiant = Etudiant::destroy($id);
        return back()->with('status',trans('etudiant.msgsuppressionreussi'));
    }
}
