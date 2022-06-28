<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Chaco;
use App\Models\Gossip;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Division;
use App\Models\ChacoPers;
use App\Models\Secretariat;
use App\Models\Subdivision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function loginPage(){
        return view('/page/admin/login',[
            "title" => "PresMUN 2022 || LOGIN"
        ]);
    }
    public function routes($page, Request $request){
        if ($request->session()->has('admin')) {
            switch ($page) {
                case 'admin':
                    return view('/page/admin/admin',[
                        "title" => "PresMUN 2022 || ADMIN",
                        "admin" => User::getAll()
                    ]);
                    break;
                case 'dashboard':
                    return view('/page/admin/dashboard',[
                        "title" => "PresMUN 2022 || DASHBOARD"
                    ]);
                    break;
                case 'article':
                    return view('/page/admin/article',[
                        "title" => "PresMUN 2022 || ARTICLE",
                        "articles" => Article::getAll()
                    ]);
                    break;
                case 'secre':
                    return view('/page/admin/secre',[
                        "title" => "PresMUN 2022 || SECRETARIAT",
                        "secres" => Secretariat::getAll(),
                        "divisions" => Division::getAll()
                    ]);
                    break;
                case 'gallery':
                    return view('/page/admin/gallery',[
                        "title" => "PresMUN 2022 || GALLERY",
                        "galleries" => Gallery::getAll()
                    ]);
                    break;
                case 'chaco':
                    return view('/page/admin/chaco',[
                        "title" => "PresMUN 2022 || CHAIRS & COUNCILS",
                        "chacos" => Chaco::getAll(),
                        "chaco_pers" => ChacoPers::getAll()
                    ]);
                    break;
                case 'gossip':
                    return view('/page/admin/gossip',[
                        "title" => "PresMUN 2022 || GOSSIP",
                        "gossips" => Gossip::getAll(),
                        "chacos" => Chaco::getAll()
                    ]);
                    break;
                case 'division':
                    return view('/page/admin/division',[
                        "title" => "PresMUN 2022 || DIVISIONS",
                        "divisions" => Division::getAll(),
                        "subdivisions" => Subdivision::getAll()
                    ]);
                    break;
                default:
                    return view('/page/admin/dashboard',[
                        "title" => "PresMUN 2022 || DASHBOARD"
                    ]);
                    break;
            }
        }
        else
        {
            return redirect('/');
        }
    }

    public function getById($page, $id){
        switch ($page) {
            case 'secre':
                $data = Secretariat::getById($id);
                return json_encode($data);
                break;
            case 'chaco':
                $data = Chaco::getById($id);
                return json_encode($data);
                break;
            case 'admin':
                $data = User::getById($id);
                return json_encode($data);
                break;
            case 'chaco_pers':
                $data = ChacoPers::getById($id);
                return json_encode($data);
                break;
            case 'article':
                $data = Article::getById($id);
                return json_encode($data);
                break;
            case 'gossip':
                $data = Gossip::getById($id);
                return json_encode($data);
                break;
            case 'gallery':
                $data = Gallery::getById($id);
                return json_encode($data);
                break;
            case 'division':
                $data = Division::getById($id);
                return json_encode($data);
                break;
            case 'subdivision':
                $data = Subdivision::getById($id);
                return json_encode($data);
                break;
            default:
                return redirect('admin/dashboard');
                break;
        }
    }

    public function getAll($page){
        switch ($page) {
            case 'secre':
                $data = Secretariat::getAll();
                return json_encode($data);
                break;
            case 'chaco':
                $data = Chaco::getAll();
                return json_encode($data);
                break;
            case 'chaco_pers':
                $data = ChacoPers::getAll();
                return json_encode($data);
                break;
            case 'article':
                $data = Article::getAll();
                return json_encode($data);
                break;
            case 'gossip':
                $data = Gossip::getAll();
                return json_encode($data);
                break;
            case 'gallery':
                $data = Gallery::getAll();
                return json_encode($data);
                break;
            case 'division':
                $data = Division::getAll();
                return json_encode($data);
                break;
            case 'subdivision':
                $data = Subdivision::getAll();
                return json_encode($data);
                break;
            default:
                return redirect('admin/dashboard');
                break;
        }
    }

    public function delete($page, $id){
        switch ($page) {
            case 'secre':
                $res = Secretariat::getById($id);
                $path = 'storage/'.$res->s_image;
                Secretariat::deleteById($id);
                File::delete($path);
                return redirect('/admin/secre');
                break;
            case 'chaco':
                Chaco::deleteById($id);
                return redirect('/admin/chaco');
                break;
            case 'admin':
                User::deleteById($id);
                return redirect('/admin/admin');
                break;
            case 'chaco_pers':
                $res = ChacoPers::getById($id);
                $path = 'storage/'.$res->cp_image;
                ChacoPers::deleteById($id);
                File::delete($path);
                return redirect('/admin/chaco');
                break;
            case 'article':
                $res = Article::getById($id);
                $path = 'storage/'.$res->cp_image;
                Article::deleteById($id);
                File::delete($path);
                return redirect('/admin/article');
                break;
            case 'gossip':
                Gossip::deleteById($id);
                return redirect('/admin/gossip');
                break;
            case 'gallery':
                $res = Gallery::getById($id);
                $path = 'storage/'.$res->ga_image;
                Gallery::deleteById($id);
                File::delete($path);
                return redirect('/admin/gallery');
                break;
            case 'division':
                Division::deleteById($id);
                return redirect('/admin/division');
                break;
            case 'subdivision':
                Subdivision::deleteById($id);
                return redirect('/admin/division');
                break;
            default:
                return redirect('admin/dashboard');
                break;
        }
    }

    public function insert($page, Request $request){
        switch ($page) {
            case 'secre':
                Secretariat::add(
                    $request->division_id,
                    $request->subdivision_id,
                    $request->file('image')->store('secretariats'), 
                    $request->name,
                    $request->achievements,
                    $request->description
                );
                return redirect('/admin/secre');
                break;
            case 'admin':
                User::add(
                    $request->username,
                    Hash::make($request->password)
                );
                return redirect('/admin/admin');
                break;
            case 'chaco':
                Chaco::add(
                    $request->name,
                    $request->file('image')->store('chaco'),
                    $request->topic,
                    $request->description
                );
                return redirect('/admin/chaco');
                break;
            case 'chaco_pers':
                ChacoPers::add(
                    $request->name,
                    $request->file('image')->store('chacoPers'),
                    $request->role,
                    $request->institution,
                    $request->chacos_id,
                    $request->achievements,
                    $request->description
                );
                return redirect('/admin/chaco');
                break;
            case 'article':
                Article::add(
                    $request->file('image')->store('article'),
                    $request->title,
                    $request->headline,
                    $request->description
                );
                return redirect('/admin/article');
                break;
            case 'gossip':
                Gossip::add(
                    $request->message,
                    $request->title,
                    $request->sender,
                    $request->receiver
                );
                return redirect('/admin/gossip');
                break;
            case 'gallery':
                Gallery::add(
                    $request->file('image')->store('gallery'),
                    $request->title
                );
                return redirect('/admin/gallery');
                break;
            case 'division':
                Division::add(
                    $request->name,
                    $request->description
                );
                return redirect('/admin/division');
                break;
            case 'subdivision':
                Subdivision::add(
                    $request->division_id,
                    $request->name,
                    $request->description
                );
                return redirect('/admin/division');
                break;
            default:
                return redirect('admin/dashboard');
                break;
        }
    }

    public function edit($page, $id, Request $request){
        switch ($page) {
            case 'secre':
                $image = '';
                $res = Secretariat::getById($id);
                $path = 'storage/'.$res->s_image;
                if($request->file('image') == '')
                {
                    $image = $res->s_image;
                }
                else
                {
                    $image = $request->file('image')->store('secretariats');
                    File::delete($path);
                }
                Secretariat::updateData(
                    $request->id,
                    $request->division_id, 
                    $request->subdivision_id, 
                    $image, 
                    $request->name,
                    $request->achievements,
                    $request->description
                );
                return redirect('/admin/secre');
                break;
            case 'admin':
                User::updateData(
                    $request->id,
                    $request->username,
                    $request->password
                );
                return redirect('/admin/admin');
                break;
            case 'chaco':
                $image = '';
                $res = Chaco::getById($id);
                $path = 'storage/'.$res->c_image;
                if($request->file('image') == '')
                {
                    $image = $res->c_image;
                }
                else
                {
                    $image = $request->file('image')->store('chaco');
                    File::delete($path);
                }
                Chaco::updateData(
                    $request->id,
                    $request->name,
                    $image,
                    $request->topic,
                    $request->description
                );
                return redirect('/admin/chaco');
                break;
            case 'chaco_pers':
                $image = '';
                $res = ChacoPers::getById($id);
                $path = 'storage/'.$res->cp_image;
                if($request->file('image') == '')
                {
                    $image = $res->cp_image;
                }
                else
                {
                    $image = $request->file('image')->store('chacoPers');
                    File::delete($path);
                }
                ChacoPers::updateData(
                    $request->id,
                    $request->name,
                    $image,
                    $request->role,
                    $request->institution,
                    $request->chacos_id,
                    $request->achievements,
                    $request->description
                );
                return redirect('/admin/chaco');
                break;
            case 'article':
                $image = '';
                $res = Article::getById($id);
                $path = 'storage/'.$res->a_image;
                if($request->file('image') == '')
                {
                    $image = $res->a_image;
                }
                else
                {
                    $image = $request->file('image')->store('article');
                    File::delete($path);
                }
                Article::updateData(
                    $request->id,
                    $image,
                    $request->title,
                    $request->headline,
                    $request->description
                );
                return redirect('/admin/article');
                break;
            case 'gossip':
                Gossip::updateData(
                    $request->id,
                    $request->message,
                    $request->title,
                    $request->sender,
                    $request->receiver
                );
                return redirect('/admin/gossip');
                break;
            case 'gallery':
                $image = '';
                $res = Secretariat::getById($id);
                $path = 'storage/'.$res->ga_image;
                if($request->file('image') == '')
                {
                    $image = $res->ga_image;
                }
                else
                {
                    $image = $request->file('image')->store('gallery');
                    File::delete($path);
                }
                Gallery::updateData(
                    $request->id,
                    $image,
                    $request->title
                );
                return redirect('/admin/gallery');
                break;
            case 'division':
                Division::updateData(
                    $request->id,
                    $request->name,
                    $request->description
                );
                return redirect('/admin/division');
                break;
            case 'subdivision':
                Subdivision::updateData(
                    $request->id,
                    $request->division_id,
                    $request->name,
                    $request->description
                );
                return redirect('/admin/division');
                break;
            default:
                return redirect('admin/dashboard');
                break;
        }
    }

    public function login(Request $request){
        $data = User::getFirst();

        if(Hash::check('presidentmunadmin', $data->u_password))
        {
            $request->session()->put('admin', 'true');
            return redirect('/admin/dashboard');
        }
        else
        {
            return redirect('/admin/login');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
