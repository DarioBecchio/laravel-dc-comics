<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;

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
        return view('admin.comics.index', ['comics'=>Comics::all()]);
        return view('layouts.comics.welcome', ['comics'=>Comics::all()]);

        
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
        dd($request->all());

        $data = $request->all();

        $newComic = new Comics();
        /*
        $newComic->title = $data['title'];

        $newComic->cover_image = $data['cover_image'];
       
        
        */
        $newComic->fill($data);
        $newComic->save();
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
    public function edit(Comics $comics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comics $comics)
    {
        //
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comics $comics)
    {
        //
    }
}
