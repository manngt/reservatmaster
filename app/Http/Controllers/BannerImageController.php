<?php

namespace App\Http\Controllers;

use App\BannerImage;
use Illuminate\Http\Request;

class BannerImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $banner_images = BannerImage::all();

        return view('bannerimage.index',compact('banner_images'));

    }

    public function create()
    {

        return view('bannerimage.create');

    }

    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required',
            'order' => 'required|numeric|unique:banner_images',
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        $banner_image = $request->all();

        if($request['image'])
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/banners'), $imageName);
            $banner_image['image'] = $imageName;

        }

        BannerImage::create($banner_image);

        return redirect()->route('bannerimage.index')
            ->with('Correcto','Imagen guardada');

    }

    public function edit($id)
    {

        $banner_image = BannerImage::find($id);

        return view('bannerimage.edit',compact('banner_image'));

    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'order' => 'required|numeric',
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        $banner_image = $request->all();

        if($request['image'])
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/banners'), $imageName);
            $banner_image['image'] = $imageName;

        }

        BannerImage::find($id)->update($banner_image);

        return redirect()->route('bannerimage.index')
            ->with('Correcto','Imagen actualizada');

    }
    public function destroy($id)
    {

        BannerImage::find($id)->delete();

        return redirect()->route('bannerimage.index')
            ->with('Correcto','Imagen Eliminada');

    }
}
