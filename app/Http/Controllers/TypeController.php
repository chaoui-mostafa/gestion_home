<?php

namespace App\Http\Controllers;

use App\Models\type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = type::all(); // Utilisation du modèle Item pour récupérer tous les éléments
        return view('index', compact('types')); // Correction de la variable passée à la vue
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
