@extends('fonend.master')

@section('maincontent')
<div class="page-head">
	<div class="container">
		<h3></h3>
	</div>
</div>
<!-- Electronics -->
<div class="electronics">
	<div class="container">
		<div class="clearfix"></div>
			<div class="ele-bottom-grid">
				<h3><span>Latest </span>Collections</h3>
				<p>In Bangladesh all latest conllection is hare</p>
				@foreach($publishcategoryproducts as $publishcategoryproduct)
					<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset($publishcategoryproduct->productImage)}}" alt="" class="pro-image-front">
									<img src="{{asset('fontEnd/images/')}}//ph1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{url('/products-details/'.$publishcategoryproduct->id)}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">{{$publishcategoryproduct->productName}}</a></h4>
									<div class="info-product-price">
										<span class="item_price">BDT{{$publishcategoryproduct->productPrice}}</span>
										<del>{{$publishcategoryproduct->productPrice*1.2}}</del>
										
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						@endforeach
				
					
			</div>
	</div>
</div>
<!-- //Electronics -->

@endsection