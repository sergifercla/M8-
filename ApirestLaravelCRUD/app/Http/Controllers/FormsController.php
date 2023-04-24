<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $forms = Forms::all();
      return $forms;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $forms = new Forms();
       $forms->nombre = $request-> nombre;
       $forms->apellido1 = $request-> apellido1;
       $forms->apellido2 = $request-> apellido2;
       $forms->email = $request-> email;
       $forms->telefono = $request-> telefono;
       $forms->genero = $request-> genero;
       $forms->fNacimiento = $request-> fNacimiento;
       $forms->nPadre = $request-> nPadre;
       $forms->nMadre = $request-> nMadre;
       $forms->nHermanos = $request-> nHermanos;
       $forms->adulto = $request-> adulto;


       $forms->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $forms = Forms :: findOrFail($request->id);
        $forms->nombre = $request-> nombre;
        $forms->apellido1 = $request-> apellido1;
        $forms->apellido2 = $request-> apellido2;
        $forms->email = $request-> email;
        $forms->telefono = $request-> telefono;
        $forms->genero = $request-> genero;
        $forms->fNacimiento = $request-> fNacimiento;
        $forms->nPadre = $request-> nPadre;
        $forms->nMadre = $request-> nMadre;
        $forms->nHermanos = $request-> nHermanos;
        $forms->adulto = $request-> adulto;

        $forms->save();
        return $forms;
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $forms = Forms::destroy($request->id);
        return $forms;
    }
}
