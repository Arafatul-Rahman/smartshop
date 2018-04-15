<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Prodauct;
use DB;

class prodauctController extends Controller
{
    public function createMProduct(){
    	$categories = Category::where('statusinfo',1)->get();
    	$menufracturers = Manufacturer::where('menustatusinfo',1)->get();
    	return view('admin.product.createMProduct',['categories'=>$categories],['menufracturers'=>$menufracturers]);
    }
    public function storeProduct(Request $request){
    		$this->validate($request,[
     		'productName'=>'required',
            'productPrice'=>'required',
     		'productImage'=>'required',


     	]);

    		$productImage=$request->file('productImage');
    		$name=$productImage->getClientOriginalName();
    		$uploadPath=('productImage/');
    		$productImage->move($uploadPath, $name);
    		$imageUrl=$uploadPath.$name;

    		
    	
    		$products=new Prodauct();
    		$products->productName=$request->productName;
    		$products->categoryid=$request->categoryid;
    		$products->menufracturerid=$request->menufracturerid;
    		$products->productPrice=$request->productPrice;
    		$products->productQantity=$request->productQantity;
    		$products->shortDiscription=$request->shortDiscription;
    		$products->longDiscription=$request->longDiscription;
    		$products->productImage=$imageUrl;
    		$products->productstatusinfo=$request->productstatusinfo;
    		$products->save();
    		return redirect('/product/add')->with('massege','insert product succsesfully');


    }
    public function manageProduct(){
    	$products=DB::table('prodaucts')
		    		->join('categories','prodaucts.categoryid','=','categories.id')
		    		->join('manufacturers','prodaucts.menufracturerid','=','manufacturers.id')
		    		->select('prodaucts.id','prodaucts.productName','prodaucts.productstatusinfo','prodaucts.productPrice','prodaucts.productQantity','categories.categoryName','manufacturers.manufacturerName')
		    		->get();
		    		
    	 return view('admin.product.manageProduct',['products'=>$products]);
    }
    public function showProduct($id){
    	$productsById=DB::table('prodaucts')
		    		->join('categories','prodaucts.categoryid','=','categories.id')
		    		->join('manufacturers','prodaucts.menufracturerid','=','manufacturers.id')
		    		->select('prodaucts.*','categories.categoryName','manufacturers.manufacturerName')
		    		->where('prodaucts.id',$id)
		    		->first();
		    		
		    		return view('admin.product.showProduct',['product'=>$productsById]);
    }

    public function editProduct($id){

        $categories = Category::where('statusinfo',1)->get();
        $menufracturers = Manufacturer::where('menustatusinfo',1)->get();

    	$productsById=Prodauct::where('id',$id)->first();

    	return view('admin.product.editProduct',['productsById'=>$productsById,'categories'=>$categories,'menufracturers'=>$menufracturers]);
    }

    public function updateProduct(Request $request){
       $imageUrl=$this->imageExistStatus($request);
       $products=Prodauct::find($request->productid);
            $products->productName=$request->productName;
            $products->categoryid=$request->categoryid;
            $products->menufracturerid=$request->menufracturerid;
            $products->productPrice=$request->productPrice;
            $products->productQantity=$request->productQantity;
            $products->shortDiscription=$request->shortDiscription;
            $products->longDiscription=$request->longDiscription;
            $products->productImage=$imageUrl;
            $products->productstatusinfo=$request->productstatusinfo;
            $products->save();
            return redirect('/product/manage')->with('massege','update succsessfully done');

    }
    private function imageExistStatus($request){
        $productsById=Prodauct::where('id',$request->productid)->first();
        $productImage=$request->file('productImage');
        if ($productImage) {
            unlink($productsById->productImage);
            $name=$productImage->getClientOriginalName();
            $uploadPath=('productImage/');
            $productImage->move($uploadPath, $name);
            $imageUrl=$uploadPath.$name;
            }
            else{
                $imageUrl=$productsById->productImage;


            }
            return $imageUrl;
        


    }

    public function deleteProduct($id){
        $product= Prodauct::find($id);
        $product->delete();
        return redirect('/product/manage')->with('massege','delete succsessfully done');

    }
}
