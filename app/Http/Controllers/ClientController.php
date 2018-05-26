<?php

namespace App\Http\Controllers;

use App\Client;
use App\Country;
use App\IdentityDocumentType;
use Illuminate\Http\Request;

class ClientController extends Controller
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

        $clients = Client::all();



        return view('client.index',compact('clients'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $document_types = IdentityDocumentType::select('id','name')->get();
        $countries = Country::select('id','name')->get();

        return view('client.create',[
            'document_types' => $document_types,
            'countries' => $countries
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
            'identity_document_type_id' => 'required',
            'identity_number' => 'required',
            'country_id'=> 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'birthday' => 'required',
        ]);

        $request['id'] = time();

        client::create($request->all());

        return redirect()->route('client.index')

            ->with('Correcto','Huesped creado');
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
        $client = Client::find($id);
        $document_types = IdentityDocumentType::select('id','name')->get();
        $countries = Country::select('id','name')->get();

        return view('client.edit',[
            'client' => $client,
            'document_types' => $document_types,
            'countries' => $countries
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
            'identity_document_type_id' => 'required',
            'identity_number' => 'required',
            'country_id'=> 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'birthday' => 'required',
        ]);

        Client::find($id)->update($request->except('id'));


        return redirect()->route('client.index')

            ->with('Correcto','Cliente actualizado');

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
            Client::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('client.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('client.index')

            ->with('Correcto','Cliente eliminado');
    }
}
