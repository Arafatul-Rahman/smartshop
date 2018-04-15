<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;

class menufracturerController extends Controller
{
    public function createMenufracturer(){
    	return view('admin.Menufracturer.menufracturerControl');
    }

    public function storeMenufracturer(Request $request){
    	$this->validate($request,[
    		'manufacturerName'=>'required',
     		'manufacturerdescription'=>'required',

    	]);
    	$menufracturer = new Manufacturer();
    	$menufracturer->manufacturerName = $request->manufacturerName;
    	$menufracturer->manufacturerdescription = $request->manufacturerdescription;
    	$menufracturer->menustatusinfo = $request->menustatusinfo;
    	$menufracturer->save();
    	return redirect('/menufracturer/add')->with('massege','insert succsessfully done');

    	
    }
    public function manageMenufracturer(){
    	$menufracturers= manufacturer::all();
    	return view('admin.Menufracturer.manageMenufracturer',['menufracturers'=>$menufracturers]);
    }
    public function editMenufracturer($id){
    	$menufracturersbyid=Manufacturer::where('id',$id)->first();
    	return view('admin.Menufracturer.editMenufracturer',['menufracturersbyid'=>
    		$menufracturersbyid]);
    }

    public function updateMenufracturer(Request $request){

    	

    
    	$menufracturer=Manufacturer::find($request->id);

    	$menufracturer->manufacturerName = $request->manufacturerName;
    	$menufracturer->manufacturerdescription = $request->manufacturerdescription;
    	$menufracturer->menustatusinfo = $request->menustatusinfo;
    	$menufracturer->save();
    	return redirect('/menufracturer/manage')->with('massege','Update succsessfully done');

    }
    public function deleteMenufracturer($id){
    	$menufracturer=Manufacturer::find($id);
    	$menufracturer->delete();
    	return redirect('/menufracturer/manage')->with('massege','delete succsessfully done');

    }

}