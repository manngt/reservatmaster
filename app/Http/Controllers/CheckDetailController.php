<?php

namespace App\Http\Controllers;

use App\Check;
use App\CheckDetail;
use Illuminate\Http\Request;

class CheckDetailController extends Controller
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

        $check_details = CheckDetail::all();

        return view('checkdetail.index',compact('check_details'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $checks = Check::all();
        return view('checkdetail.create',[
            'checks' => $checks,
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

            'check_id' => 'required',
            'description' => 'required',
            'amount' => 'required',

        ]);

        $request['id'] = time();

        CheckDetail::create($request->all());

        return redirect()->route('checkdetail.index')

            ->with('Correcto','Detalle creados');
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
        $check_detail = CheckDetail::find($id);

        return view('checkdetail.edit',[
            'check_detail' => $check_detail,
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

            'check_id' => 'required',
            'description' => 'required',
            'amount' => 'required',

        ]);

        CheckDetail::find($id)->update($request->except('id'));


        return redirect()->route('checkdetail.index')

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
            CheckDetail::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('checkdetail.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('checkdetail.index')

            ->with('Correcto','Cuenta eliminada');
    }
}
