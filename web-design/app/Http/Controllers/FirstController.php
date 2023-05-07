<?php

namespace App\Http\Controllers;

use App\Models\Functions;
use App\Models\Produits;
use http\env\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Routing\Controller as BaseController;

class FirstController extends BaseController
{
    /*public  function  index(){
        $produits=new Produits();
        $datap=$produits->getproduits();
        return view('Listproduits',
            [
                'produits'=>$datap
            ]);
    }
    public function getdata(){
        $id=\request('id');
        return view('test',
            [
                'id'=>$id
            ]);
    }
    public function list_ecommerce(){
        return view('e_commerceliste');
    }*/
    public function redirect_login(){
        return view('Baccoffice.loginadmin');
    }
    public function login(){
          $email=\request('email');
          $password=\request('password');
          $function=new Functions();
          $data=$function->loginin($email,$password);
          if($data==0){
              $message="erreur de connexion";
              return redirect()->route('connexion',['message'=>$message]);
          }else{
              $message="vous etez connectez";
              $domaine=$function->listdomaine();
              $categorie=$function->listcatgerieIA();
              $data=$function->listinfo_contenuIA();
              return view('Baccoffice.gereradmin',
                  ['message'=>$message,
                   'domaine'=>$domaine,
                   'categorie'=>$categorie,
                      'data'=>$data,
                      'function'=>$function
                  ]);
          }
    }
    public function insertcontenuIA(){
        $idcategorie=\request('idcategorie');
        $iddomaine=\request('iddomaine');
        $titre=(\request('titre'));
        $auteur=\request('auteur');
        $contenu=\request('contenu');
        $image=\request()->file('image');
        if($image!=''){
            $extension = $image->getClientOriginalExtension();
            $imagePath = $image->getPathname();
            $contents = file_get_contents($imagePath);
            $imageData = base64_encode($contents);
        }
        $functions=new Functions();
        $functions->insertcontenu_IA($idcategorie,$iddomaine,$titre,$auteur,$contenu,$imageData,$extension);
        $domaine=$functions->listdomaine();
        $categorie=$functions->listcatgerieIA();
        $data=$functions->listinfo_contenuIA();
        $message="";
        return view('Baccoffice.gereradmin',
            ['message'=>$message,
                'domaine'=>$domaine,
                'categorie'=>$categorie,
                '$data'=>$data,
                'function'=>$functions
            ]);
    }
    public function frontoffice(){
        $functions=new Functions();
        $data=$functions->listinfo_contenuIA();
        return view('Front-Office.accueilIA',[
            'data'=>$data,
            'function'=>$functions
        ]);
    }
    public function search(){
        $search = \request('search');
        $functions = new Functions();
        $result = $functions->selectsearch($search);
        return view('Front-Office.accueilIA',[
            'data' => $result,
            'function' => $functions
        ]);
    }
    public function fichedetail(){
        $id=\request('id');
        $functions=new Functions();
        $result=$functions->getinfocontenuIA($id);
        return view('Front-Office.detailIA', [
            'data'=>$result,
             'function'=>$functions
        ]
        );
    }
}

