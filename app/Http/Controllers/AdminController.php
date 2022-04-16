<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function routes($page){
        switch ($page) {
            case 'login':
                return view('/page/admin/login',[
                    "title" => "PresMUN 2022 || CHAIRS & COUNCILS"
                ]);
                break;
            case 'dashboard':
                return view('/page/admin/dashboard',[
                    "title" => "PresMUN 2022 || CHAIRS & COUNCILS"
                ]);
                break;
            case 'chaco':
                return view('/page/admin/chaco',[
                    "title" => "PresMUN 2022 || CHAIRS & COUNCILS"
                ]);
                break;
            case 'article':
                return view('/page/admin/article',[
                    "title" => "PresMUN 2022 || ARTICLE"
                ]);
                break;
            case 'secre':
                return view('/page/admin/secre',[
                    "title" => "PresMUN 2022 || SECRETARIAT"
                ]);
                break;
            case 'gallery':
                return view('/page/admin/gallery',[
                    "title" => "PresMUN 2022 || GALLERY"
                ]);
                break;
            default:
                return view('/page/admin/dashboard',[
                    "title" => "PresMUN 2022 || DASHBOARD"
                ]);
                break;
        }
    }
}
