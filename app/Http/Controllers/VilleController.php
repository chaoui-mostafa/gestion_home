<?php

namespace App\Http\Controllers;

use App\Models\ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    public function index()
    {
        $villes = ville::all(); // Utilisation du modèle Item pour récupérer tous les éléments
        return view('index', compact('villes')); // Correction de la variable passée à la vue
    }

    public function contact()
    {
        return view('contact'); // Correction du nom de la vue
    }

    public function trending()
    {
        return view('trending');
    }

    public function explore()
    {
        return view('explore');
    }
}
