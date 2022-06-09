<?php

namespace App\Http\Controllers;

use App\Models\Asistente;
use Illuminate\Http\Request;
use App\Models\Profesor;

/**
 * Class AsistenteController
 * @package App\Http\Controllers
 */
class AsistenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistentes = Asistente::paginate();

        return view('asistente.index', compact('asistentes'))
            ->with('i', (request()->input('page', 1) - 1) * $asistentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asistente = new Asistente();
        $profesors=Profesor::pluck('nombre', 'id');
        return view('asistente.create', compact('asistente', 'profesors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Asistente::$rules);

        $asistente = Asistente::create($request->all());

        return redirect()->route('asistentes.index')
            ->with('success', 'Asistente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asistente = Asistente::find($id);

        return view('asistente.show', compact('asistente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistente = Asistente::find($id);
        $profesors=Profesor::pluck('nombre', 'id');
        return view('asistente.edit', compact('asistente', 'profesors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Asistente $asistente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistente $asistente)
    {
        request()->validate(Asistente::$rules);

        $asistente->update($request->all());

        return redirect()->route('asistentes.index')
            ->with('success', 'Asistente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asistente = Asistente::find($id)->delete();

        return redirect()->route('asistentes.index')
            ->with('success', 'Asistente deleted successfully');
    }
}
