<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //dd(Comics::all());
        //prints all comics
        $comics = Comics::all();
        
        return view('admin.comics.index', compact('comics'));
        

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return view('admin.comics.create');
         

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //Validate

        $valdata = $request->validate([
            'Title' => 'required|min:2|max:200',
            'cover_image' => 'required',
            
        ]);

        dd($valdata);
        

        $data = $request->all();
        //First method
        /*$newComic = new Comics();
        
        $newComic->title = $data['title'];

        $newComic->cover_image = $data['cover_image'];
       
        */


        //Create the resource

        Comics::create($data);
        /*$newComic->fill($data);
        $newComic->save();*/

        
        //Post/Redirect/Get pattern
        return to_route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comics $comic)
    {
        //
        //dd($comics);
        //prints selected comics
        return view('admin.comics.show' , compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comics $comic)
    {
        //dd($comics);
        return view('admin.comics.edit',compact('comic'));
        return to_route('comics.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comics $comics)
    {
        //dd($request->all(), $comics);
        
        $comics->update($request->all());
        return to_route('comics.index');
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comics $comic)
    {
        //dd($comic);
        
        $comic->delete();
        return to_route('comics.index');

    }
}
