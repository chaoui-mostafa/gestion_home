<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeRequest;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Type;
use App\Models\Ville;
use App\Models\Categorie;

class HomeController extends Controller
{
    public function index()
    {
        $categories = categorie::all();
        $types = Type::all();
        $villes = Ville::all();
        $homes = Home::all(); // Corrected from $home to $homes
        return view('index', compact('categories', 'types', 'villes', 'homes'));
    }
    public function SidBaar(){
        $categories = Categorie::all();
        $types = Type::all();
        $villes = Ville::all();
        $homes = Home::all(); // Corrected from $home to $homes
        return view('admin.List', compact('categories', 'types', 'villes', 'homes'));
    }
    public function search(Request $request)
    {
        $homes = Home::query();

        if ($request->has('category')) {
            $homes->where('categorie_id', $request->category);
        }

        if ($request->has('type')) {
            $homes->where('type_id', $request->type);
        }

        if ($request->has('ville')) {
            $homes->where('ville_id', $request->ville);
        }

        if ($request->has('searchTitle')) {
            $searchTitle = $request->input('searchTitle');
            $homes->where('type_id', 'LIKE', "%{$searchTitle}%");
        }

        // Retrieve the filtered results
        $trendingHomes = $homes->get();

        // Get all categories, types, and cities for the form
        $categories = Categorie::all();
        $types = Type::all();
        $villes = Ville::all();

        return view('trending', compact('categories', 'types', 'villes', 'trendingHomes'));
    }
    public function show($id)
    {
        $home = Home::findOrFail($id);
        return view('show', compact('home'));
    }
    public function affichage()
    {
        $home = Home::all();

        return view('affichage', compact('home'));
    }
    public function store(HomeRequest $request)
    {

        $formFields = $request->validated();

        // Handle image upload
        $formFields['image_home'] = $request->file('image_home')->store('images', 'public');

        Home::create($formFields);

        return redirect()->route('admin.index')->with('success', 'Home created successfully.');
    }
    public function create()
    {
        $home = Home::all();
        $villes = Ville::all();
        $types = Type::all();
        $categories = Categorie::all();
        return view('admin.create', compact('home', 'villes', 'categories', 'types'));
    }

    /* public function filter(Request $request)
        {
            $id = $request->input('id');
            $categories = Categorie::where('id', $id)->get();
            return view('index', compact('categories'));
        }*/

    public function contact()
    {
        return view('contact');
    }

    public function trending()
    {
        $trendingHomes = Home::all(); // Consider pagination for large datasets
        return view('trending', compact('trendingHomes'));
    }
    public function explore()
    {
        return view('explore');
    }
    public function destroy($id)
    {
        // Assuming your model is named Home and you want to delete a record based on its ID
        $home = Home::find($id);

        if ($home) {
            $home->delete();
            // Redirect to the route named 'admin.create'
            return redirect()->route('admin.create')->with('success', 'Record deleted successfully');
        } else {
            // Handle case where the record with the provided ID is not found
            return redirect()->route('admin.create')->with('error', 'Record not found');
        }
    }
    public function edit($id)
    {
        $home = Home::findOrFail($id); // Fetch the home by ID
        return view('admin.create', compact('home'));
    }
    public function update(Request $request, $id)
    {
        $home = Home::findOrFail($id); // Fetch the home by ID
        $formFields = $request->validate([
            // Define validation rules here
        ]);
        $home->update($formFields); // Update the home
        return redirect()->route('home.edit', ['id' => $home->id]); // Redirect to edit page or wherever you want
    }
   
}
