<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PublicController extends Controller
{
    public function index(){
        return view('/page/public/landing',[
            "title" => "PresMUN 2022 || HOME"
        ]);
    }
    public function routes($page){
        switch ($page) {
            case 'article':
                return view('/page/public/article',[
                    "title" => "PresMUN 2022 || ARTICLE",
                    "articles" => Article::getAll()
                ]);
                break;
            case 'about':
                return view('/page/public/about',[
                    "title" => "PresMUN 2022 || ABOUT"
                ]);
                break;
            case 'secre':
                return view('/page/public/secre',[
                    "title" => "PresMUN 2022 || SECRETARIAT"
                ]);
                break;
            case 'gallery':
                return view('/page/public/gallery',[
                    "title" => "PresMUN 2022 || GALLERY"
                ]);
                break;
            default:
                return view('/page/public/landing',[
                    "title" => "PresMUN 2022 || HOME"
                ]);
                break;
        }
    }
}
