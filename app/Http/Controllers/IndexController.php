<?php
/**
 * Classe Controlleur Index : Point d'accès de la plate-forme
 * @author : A.Haidara
 * @since : 02-07-2018
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Fonction home : Permet de communiquer avec la vue home (/view/home)
     */
    public function index ()
    {
        return view('welcome');
    }
}
