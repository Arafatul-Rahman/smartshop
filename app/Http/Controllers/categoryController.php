<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Category;
class categoryController extends Controller
{
    public function createCategory(){
    	return view('admin.category.categoryControlle');
    }

     public function storCategory(Request $request){

     	$this->validate($request,[
     		'categoryName'=>'required',
     		'categorydes'=>'required',


     	]);
    	//return $request->all();
    	$category = new Category();
    	$category->categoryName=$request->categoryName;
    	$category->categorydes=$request->categorydes;
    	$category->statusinfo=$request->statusinfo;
    	$category->save();
    	return redirect('/category/add')->with('massege','insert succsessfully done');

    }

    public function manageCategory(){
    	$categories=category::all();
    	return view('admin.category.manageCategory',['categories'=>$categories]);
    	
    }

    public function editCategory($id){
    	//return $id;
    	$categoryByid=Category::where('id',$id)->first();
    	return view('admin.category.editCategory',['categoryByid'=>$categoryByid]);
    }

    public function updateCategory(Request $request){
    	

 

    	$category = Category::find($request->id);
    	$category->categoryName=$request->categoryName;
    	$category->categorydes=$request->categorydes;
    	$category->statusinfo=$request->statusinfo;
    	$category->save();
    	return redirect('/category/manage')->with('massege','update succsessfully done');

    }

    public function deleteCategory($id){
    	$category= Category::find($id);
    	$category->delete();
    	return redirect('/category/manage')->with('massege','delete succsessfully done');

    }

    
}
