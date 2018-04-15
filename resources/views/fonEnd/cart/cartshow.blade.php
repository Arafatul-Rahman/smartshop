@extends('fonEnd.master')
@section('maincontent')

<!-- //banner -->
<!-- check out -->
<div class="checkout">
	<div class="container">
		<h3>{{Session::get('massege')}}</h3>
		<h3>My Shopping Bag</h3>
		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			<table class="timetable_sub">
				
				<thead>
					<tr> 
						<th>Remove</th>
						<th>Product</th>
						<th>Quantity</th>
						<th>Product Name</th>
						<th>Price</th>
						<th>Total Price</th>
					</tr>
				</thead>
					<tr class="rem1">
						@php ($sum =0)
						
						@foreach($productshowall as $productshow)
						<td class="invert-closeb">
							<div class="rem">
								<a href="{{url('/cart/delete',['rowId'=>$productshow->rowId])}}" class="btn btn-danger" onclick="return confirm('Are You sure delete ?')" title="Product Delete">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</a>
							</div>
							
						</td>
						
						
						<td class="invert-image"><a href=" "><img src="{{asset($productshow->options->Image)}}" alt=" " class="img-responsive" /></a></td>

						 
  
    
    {!! Form::open(['url' => 'cart/update','method'=>'POST','enctype'=>'multipart/form-data']) !!}
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									
									<input type="number" value="{{$productshow->qty}}" name="qty" min="1">
									<input type="hidden" value="{{$productshow->rowId}}" name="rowId">
										
									
								</div>
																
							</div>
							<br>
							<input type="submit" value="Update" name="btn">
						</td>
						{!! Form::close() !!}
						
						<td class="invert">{{$productshow->name}}</td>
						<td class="invert">BDT.{{$productshow->price}}</td>
						<td class="invert">BDT.{{$productshow->price*$productshow->qty}}</td>

						

						
					</tr>
					 <?php $sum = $sum+$productshow->price*$productshow->qty;
					 
					 ?>
					@endforeach
					
					
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>

								<!--quantity-->
			</table>
		</div>
		<div class="checkout-left">	
				
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="{{url('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
				</div>
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Shopping basket</h4>
					
					
					<ul>
						
						<li>Total<i>-</i> <span>{{$sum}}</span></li>
						<li>With Vat<i>-</i> <span>{{$vat=$sum*1.03}}</span></li>
						<li>Shiping Cost<i>-</i> <span>{{$sc=50}}</span></li>
						<li>Item Total<i>-</i> <span><h4>{{$vat+$sc}}</h4></span></li>

						
						
					
					</ul>


					
				</div>
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="{{url('/checkout')}}"><span class="glyphicon glyphicon-menu-" aria-hidden="true"></span>Check Out</a>
				</div>
				<div class="clearfix"> </div>
				
			</div>
			
	</div>

</div>	

@endsection