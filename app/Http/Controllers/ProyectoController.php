<?php namespace App\Http\Controllers;

use App\Http\Requests\StoreProyectoRequest;
use App\Http\Requests\UpdateProyectoRequest;
use App\Models\Proyecto;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view( "proyectos/inicio", [ "proyectos" => Proyecto::simplePaginate() ] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view( "proyectos/crear" );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( StoreProyectoRequest $request ): RedirectResponse
    {
        Proyecto::create( $request->validated() );

        return redirect( "proyectos" )->with( "mensaje", "Guardado con Éxito" );
    }

    /**
     * Display the specified resource.
     */
    public function show( Proyecto $proyecto ): View
    {
        return view( "proyectos/mostrar", [ "proyecto" => $proyecto ] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Proyecto $proyecto ): View
    {
        return view( "proyectos/editar", [ "proyecto" => $proyecto ] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( UpdateProyectoRequest $request, Proyecto $proyecto ): RedirectResponse
    {
        $proyecto->update( $request->validated() );

        return redirect( "proyectos" )->with( "mensaje", "Editado con Éxito" );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Proyecto $proyecto ): RedirectResponse
    {
        $proyecto->delete();

        return redirect( "proyectos" )->with( "mensaje", "Eliminado con Éxito" );
    }
}
