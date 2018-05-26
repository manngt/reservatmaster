<?php

namespace App\Http\Controllers;

use App\IdentityDocumentType;
use Illuminate\Http\Request;

class DocumentTypeController extends Controller
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

        $document_types = IdentityDocumentType::all();

        return view('documenttype.index',compact('document_types'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('documenttype.create');

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

            'name' => 'required',
            'description' => 'required'
        ]);

        $request['id'] = time();

        IdentityDocumentType::create($request->all());

        return redirect()->route('documenttype.index')

            ->with('Correcto','Tipo de documento creado');
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
        $document_type = IdentityDocumentType::find($id);

        return view('documenttype.edit',[
            'document_type' => $document_type
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
            'description' => 'required'
        ]);

        IdentityDocumentType::find($id)->update($request->except('id'));


        return redirect()->route('documenttype.index')

            ->with('Correcto','Tipo de documento actualizado');

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
            IdentityDocumentType::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('documenttype.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('documenttype.index')

            ->with('Correcto','Tipo de documento eliminado');
    }
}
