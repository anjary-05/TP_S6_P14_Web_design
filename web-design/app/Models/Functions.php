<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Functions
{
    public function  loginin($email,$password){
        $sql="select count(*) from admin where email='%s' and password='%s'";
        $sql=sprintf($sql,$email,$password);
        $data=DB::select($sql);
        return $data[0]->count;
    }
    public function listdomaine(){
        return DB::select("select * from domaine");
    }
    public function listcatgerieIA(){
        return DB::select("select * from categorie_IA");
    }
    public function getidbytable($table,$id){
        $sql="select * from %s where id='%s'";
        $sql=sprintf($sql,$table,$id);
        $data=DB::select($sql);
        return $data[0]->id;
    }
    public function insertcontenu_IA($idcategorie,$iddomaine,$titre,$auteur,$contenu,$image,$extension){
        //$titre=str_replace($titre,"''","'");
        //$contenu=str_replace($contenu,"''","'");
        //$image=str_replace($image,"''","'");
        $sql="insert into contenu_IA values (default,'%s','%s','%s','%s','now()','%s','%s','%s')";
        $sql="insert into contenu_IA values (default,?,?,?,?,'now()',?,?,?)";
        $data=[$idcategorie,$iddomaine,$titre,$auteur,$contenu,$image,$extension];
        //echo $sql;
        DB::insert($sql,$data);
    }
    public function listinfo_contenuIA($nbpage=3){
        //$sql="select * from info_contenuIA";
        //return DB::select($sql);
        return DB::table("info_contenuia")->simplePaginate($nbpage);
    }
    public function getalllsearch($search){
        $listchaine=explode(" ",$search);
        return $listchaine;
    }
    public function  selectsearch($search){
        $sql="select   id,titre ,auteur ,date_sortie,contenu,image,extension,categorie,domaine from info_contenuIA where";
        $data=$this->getalllsearch($search);
        $concat=" ";
        $b=0;
        for($i=0;$i<count($data);$i++){
            if(gettype($data[$i])=='string'){
                $minisql2[$b]=" or
                           ( LOWER(titre) like '%".strtolower($data[$i])."%'
                           or LOWER(auteur) like '%".strtolower($data[$i])."%'
                           or LOWER(contenu) like '%".strtolower($data[$i])."%'
                           or LOWER(domaine) like '%".strtolower($data[$i])."%'
                           or  LOWER(contenu) like '%".strtolower($data[$i])."%')";
                $concat.=$minisql2[$b];
            }
            $b++;
        }
        $str=str_replace('where  or','where ',$sql.$concat);
        //echo $str;
        $queryBuilder = DB::table(DB::raw("($str) as results"));
        return $result = $queryBuilder->simplePaginate(3);
    }
    public function date_inword($date){
        $date=\Carbon\Carbon::createFromFormat('Y-m-d', $date);
        return $date->format('j F Y');
    }
    public function getinfocontenuIA($crypterid){
        $sql="select * from info_contenuia where  md5(id::text)='%s'";
        $sql=sprintf($sql,$crypterid);
        $data=DB::select($sql);
        return $data[0];
    }
}
