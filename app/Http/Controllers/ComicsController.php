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
        //
        //dd($request->all());

        $data = $request->all();
        //First method
        /*$newComic = new Comics();
        
        $newComic->title = $data['title'];

        $newComic->cover_image = $data['cover_image'];
       
        */
        Comics::create($data);
        /*$newComic->fill($data);
        $newComic->save();*/
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comics $comics)
    {
        //dd($request->all(), $comics);
        
        $comics->update($request->all());
        return to_route('admin.comics.index');
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comics $comics)
    {
        //
    }
}
