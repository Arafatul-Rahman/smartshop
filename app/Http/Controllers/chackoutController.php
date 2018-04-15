<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerSignup;
use Session;
use Mail;
use App\Shipping;

class chackoutController extends Controller
{
     public function registration(Request $request){
		$customerSignup = new CustomerSignup();
    	$customerSignup->name=$request->name;
    	$customerSignup->email=$request->email;
    	$customerSignup->password=bcrypt($request->password); 
    	$customerSignup->phoneNumber=$request->phoneNumber;
    	$customerSignup->adress=$request->adress;
    	$customerSignup->save();

    	$customerSignupId=$customerSignup->id;
    	session::put('customerSignupId',$customerSignupId);
    	session::put('customername',$customerSignup->name);

    	$data=$customerSignup->toArray();
    	Mail::send('fonEnd.mail.sendmail',$data,function($message) use($data){
    		$message->to($data['email']);
    		$message->subject('confermation massege');

    	});
    	

     

    	return redirect('/checkout/shipping');


     }
     public function shippingForm(){
       $customer= CustomerSignup::find(session::get('customerSignupId'));
        return view('fonEnd.cart.shippingForm',['customer'=>$customer]);
     }
     public function customerpayment(Request $request){
        $customershipping= new Shipping();
        $customershipping->name=$request->name;
        $customershipping->email=$request->email;
        $customershipping->phoneNumber=$request->phoneNumber;
        $customershipping->adress=$request->adress;
        $customershipping->save();

        $customershippingId=$customershipping->id;
        session::put('customershippingId',$customershippingId);
        return redirect('/customer/paymentinfo');
        
     }
     public function paymentinfo(){
        return view('fonEnd.cart.customerpayment');
     }

      public function customerlogin(Request $request){

        $customer = CustomerSignup::where('email',$request->email)->first();
        if (password_verify($request->password, $customer->password)) {

            session::put('customerId',$customer);
        session::put('customername',$customer->name);

            return redirect('/customer/paymentinfo');
        }else{
            return redirect('/checkout')->with('message','**Please Input Valid Email and Password');
        }

        
    }
}
