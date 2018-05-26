<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'lastName' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'birthday'=>'required',
            'title' => 'required',
            'position' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = $request->except('password_confirmation');

        if($request['picture'])
        {
            $imageName = time().'.'.request()->picture->getClientOriginalExtension();
            request()->picture->move(public_path('images/users'), $imageName);
            $banner_image['picture'] = $imageName;

        }

        $request['id'] = time();
        $request['password'] = bcrypt($request['password']);

        User::create($user);

        return redirect()->route('user.index')
            ->with('Correcto','Usuario creado');
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
        $user = User::find($id);

        return view('user.edit',compact('user'));
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
            'lastName' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'birthday'=>'required',
            'title' => 'required',
            'position' => 'required',
            'email' => 'required|unique:users',
            'password' => 'confirmed',
            'password_confirmation' => ''
        ]);

        $user = $request->except('password_confirmation');

        User::find($id)->update($user);

        return redirect()->route('user.index')
            ->with('Correcto','Usuario actualizado');
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
            User::find($id)->delete();
        }
        catch (QueryException $qe)
        {
            return redirect()->route('user.index')
                ->with('Incorrecto',$qe->getMessage());
        }

        return redirect()->route('user.index')

            ->with('Correcto','Usuario eliminado');
    }
}
