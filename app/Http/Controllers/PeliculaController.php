<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['peliculas']=Pelicula::paginate(5);
        return view('peliculas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosPelicula = request()->all();

        $datosPeli = request()->except('_token');
        Pelicula::insert($datosPeli);

        return response()->json($datosPeli);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pelicula=Pelicula::findOrFail($id);
        return view('peliculas.edit',compact('pelicula') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Pelicula $pelicula
     * @return \Illuminate\Http\Response     
     */
    public function destroy($id)
    {
        //
        Pelicula::destroy($id);
        return redirect('peliculas');
    }
}
