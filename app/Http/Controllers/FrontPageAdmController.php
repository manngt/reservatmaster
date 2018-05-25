<?php

namespace App\Http\Controllers;

use App\BannerImages;
use App\FrontPage;
use Illuminate\Http\Request;

class FrontPageAdmController extends Controller
{
    public function index()
    {
        $articles = FrontPage::orderBy('order')->get();

        return view('frontpageadm.index',[

           'articles' => $articles

        ]);
    }

    public function show()
    {

    }

    public function create()
    {
        return view('frontpageadm.create');
    }

    public function store(Request $request)
    {
        FrontPage::create($request->all());

        return redirect()->route('frontpageadm.index')
            ->with('Correcto',"Contenido agregado");
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
