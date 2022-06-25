<?php

namespace App\Http\Controllers;

use App\Models\Chaco;
use App\Models\Gallery;
use App\Models\Article;
use App\Models\ChacoPers;
use App\Models\Division;
use App\Models\Gossip;
use App\Models\Secretariat;

class PublicController extends Controller
{
    public function index(){
        return view('/page/public/landing',[
            "title" => "PresMUN 2022 || HOME",
            "chacos" => Chaco::getAll()
        ]);
    }
    public function routes($page){
        switch ($page) {
            case 'article':
                return view('/page/public/article',[
                    "title" => "PresMUN 2022 || ARTICLE",
                    "chacos" => Chaco::getAll(),
                    "articles" => Article::getAll()
                ]);
                break;
            case 'gossip':
                return view('/page/public/gossip',[
                    "title" => "PresMUN 2022 || GOSSIP BOX",
                    "chacos" => Chaco::getAll(),
                    "gossips" => Gossip::getAll()
                ]);
                break;
            case 'secre':
                return view('/page/public/secre',[
                    "title" => "PresMUN 2022 || SECRETARIAT",
                    "chacos" => Chaco::getAll(),
                    "secres" => Secretariat::getAll(),
                    "divisions" => Division::getAll()
                ]);
                break;
            case 'gall':
                return view('/page/public/gallery',[
                    "title" => "PresMUN 2022 || GALLERY",
                    "chacos" => Chaco::getAll(),
                    "galleries" => Gallery::getAll()
                ]);
                break;
            default:
                return view('/page/public/landing',[
                    "title" => "PresMUN 2022 || HOME",
                    "chacos" => Chaco::getAll()
                ]);
                break;
        }
    }

    public function article($id){
        return view('/page/public/articledtl',[
            "title" => "PresMUN 2022 || ARTICLE",
            "chacos" => Chaco::getAll(),
            "article" => Article::getById($id)
        ]);
    }

    public function chaco($id){
        return view('/page/public/chaco',[
            "title" => "PresMUN 2022 || ARTICLE",
            "chacos" => Chaco::getAll(),
            "chaco" => Chaco::getById($id),
            "pers" => ChacoPers::getByChacoId($id)
        ]);
    }
}
