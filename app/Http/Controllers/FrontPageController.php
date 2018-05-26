<?php

namespace App\Http\Controllers;

use App\BannerImage;
use App\FrontPage;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        $articles = FrontPage::orderBy('order','ASC')->get();
        $banner_images = BannerImage::orderBy('order','Asc')->get();

        return view('frontpage.index',[
            'articles' => $articles,
            'banner_images' => $banner_images
        ]);
    }
}
