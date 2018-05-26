<?php

namespace App\Http\Controllers;

use App\BannerImages;
use App\FrontPage;
use Illuminate\Http\Request;

class FrontPageAdmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $request->validate([
            'title' => 'required',
            'article' => 'required',
            'order' => 'required|numeric|unique:front_pages',
        ]);
        FrontPage::create($request->all());

        return redirect()->route('frontpageadm.index')
            ->with('Correcto',"Contenido agregado");
    }

    public function edit($id)
    {

        $article = FrontPage::find($id);

        return view('frontpageadm.edit',compact('article'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'article' => 'required',
            'order' => 'required|numeric',
        ]);

        FrontPage::find($id)->update($request->all());

        return redirect()->route('frontpageadm.index')
            ->with('Correcto','Articulo actualizado');

    }

    public function destroy($id)
    {

        FrontPage::find($id)->delete();

        return redirect()->route('frontpageadm.index')
            ->with('Correcto','Articulo Eliminado');

    }
}
