<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = [
            (object) [
                "image"=>'banner1.jpg',
                "image_mobile"=>'imagem1',
                "subtitle"=>'imagem1'
            ],
            (object) [
                "image"=>'banner2.jpg',
                "image_mobile"=>'imagem2',
                "subtitle"=>'imagem2'
            ]
        ];
        
        return view('pages.home', [
            'title' => 'Home',
            'banners' => $banners
        ]);
    }
}
