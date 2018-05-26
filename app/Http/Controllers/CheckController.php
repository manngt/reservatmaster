<?php

namespace App\Http\Controllers;

use App\Check;
use App\Client;
use Illuminate\Http\Request;

class CheckController extends Controller
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

        $checks = check::all();



        return view('check.index',compact('checks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('check.create',[
            'clients' => $clients,
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
            'client_id' => 'required'
        ]);

        $request['id'] = time();

        Check::create($request->all());

        return redirect()->route('check.index')

            ->with('Correcto','Cuenta creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $check = Check::find($id);

        return view('check.show',compact('check'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $check = Check::find($id);

        $clients = Client::all();

        return view('check.edit',[
            'check' => $check,
            'clients' => $clients,
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
            'client_id' => 'required'
        ]);

        Check::find($id)->update($request->except('id'));


        return redirect()->route('check.index')

            ->with('Correcto','Cuenta actualizada');

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
            Check::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('check.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('check.index')

            ->with('Correcto','Cuenta eliminada');
    }
}
