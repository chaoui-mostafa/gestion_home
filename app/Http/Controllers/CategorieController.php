<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all(); // Utilisation du modèle Categorie pour récupérer tous les éléments
        return view('index', compact('categories')); // Correction de la variable passée à la vue
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
