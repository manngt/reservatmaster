<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $levels = Level::all();

        return view('level.index',compact('levels'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('level.create',[
            'edit' => false
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:levels|numeric',
            'name' => 'required',
        ]);

        Level::create($request->all());

        return redirect()->route('level.index')

            ->with('Correcto','Nivel creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $level = Level::find($id);

        return view('level.edit',[
            'level' => $level,
            'edit' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
        ]);

        Level::find($id)->update($request->except('id'));


        return redirect()->route('level.index')

            ->with('Correcto','Nivel actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try
        {
            Level::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('level.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('level.index')

            ->with('Correcto','Nivel eliminado');
    }
}
