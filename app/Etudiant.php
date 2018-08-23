<?php
/**
 * Classe Etudiant : décrit le modèle d'un étudiant
 * @author : A.Haidara
 * @since : 02-07-2018
*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //Permet au modèle de ne pas se planter lors d'un create par exemple et de
    //prendre que les données qui l'intéresse : Etudiant::create($request->all()) 
    //où on lui envoie tte données du request et le token n'en fait pas partie du model
    protected $guarded =  array();
    public $timestamps = false;
}
