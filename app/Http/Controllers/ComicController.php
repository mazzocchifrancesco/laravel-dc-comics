<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Comic::all();
        $menuLinks = config('data.home.menuLinks');
        $bluebarLinks = config('data.home.bluebarLinks');
        $footerLinks = config('data.home.footerLinks');

        return view("comics.index", compact("products", "menuLinks", "bluebarLinks", "footerLinks"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuLinks = config('data.home.menuLinks');
        $bluebarLinks = config('data.home.bluebarLinks');
        $footerLinks = config('data.home.footerLinks');
        return view("comics.create", compact("menuLinks", "bluebarLinks", "footerLinks"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => "required | max:50",
                'description' => "required",
                'thumb' => "required | max:200",
                'price' => "required | max:10",
                'series' => "required | max:50",
                'sale_date' => "required",
                'type' => "required | max:20",
            ],
            [
                'title.required' => 'devi inserire un titolo'
            ]
        );
        $data = $request->all();

        $comic = new Comic();
        // inserisce tutto in blocco 
        $comic->fill($data);
        // $comic->title = $data["title"];
        // $comic->description = $data["description"];
        // $comic->thumb = $data["thumb"];
        // $comic->price = $data["price"];
        // $comic->series = $data["series"];
        // $comic->sale_date = $data["sale_date"];
        // $comic->type = $data["type"];
        $comic->save();

        // return view("pastas.show", compact("pasta"));
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $menuLinks = config('data.home.menuLinks');
        $bluebarLinks = config('data.home.bluebarLinks');
        $footerLinks = config('data.home.footerLinks');

        return view("comics.show", compact("comic", "menuLinks", "bluebarLinks", "footerLinks"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $menuLinks = config('data.home.menuLinks');
        $bluebarLinks = config('data.home.bluebarLinks');
        $footerLinks = config('data.home.footerLinks');

        return view("comics.edit", compact("comic", "menuLinks", "bluebarLinks", "footerLinks"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
