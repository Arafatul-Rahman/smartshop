<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Prodauct;

class welcomeControler extends Controller
{
    public function index(){
    	$publishedproducts=Prodauct::where('productstatusinfo',1)->get();

    	return view('fonEnd.home.homecontent',['publishedproducts'=>$publishedproducts]);
    }

    public function categoryContent($id){
    	$publishcategoryproducts=Prodauct::where('categoryid',$id)->where('productstatusinfo',1)->get();
    	$productsByid=Prodauct::where('id',$id)->first();
    	
    	return view('fonEnd.category.category',['publishcategoryproducts'=>$publishcategoryproducts,'productsByid'=>$productsByid]);
    }
    public function productdetails($id){
    	$productsByid=Prodauct::where('id',$id)->first();


    	return view('fonEnd.productdetails.productdetails',['productsByid'=>$productsByid]);
    }

    public function contact(){
        return view('fonEnd.contact.contact');
    }
}