@extends('fonend.master')

@section('maincontent')
<div class="page-head">
  <div class="container">
    <h3>Single</h3>
  </div>
</div>
<!-- //banner -->
<!-- single -->
<div class="single">
  <div class="container">
    <div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
      <div class="grid images_3_of_2">
        <div class="flexslider">
          <!-- FlexSlider -->
            <script>
            // Can also be used with $(document).ready()
              $(window).load(function() {
                $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
                });
              });
            </script>
          <!-- //FlexSlider-->
          <ul class="slides">
            <li data-thumb="{{asset($productsByid->productImage)}}">
              <div class="thumb-image"> <img src="{{asset($productsByid->productImage)}}" data-imagezoom="true" class="img-responsive"> </div>
            </li>
            <li data-thumb="{{asset($productsByid->productImage)}}">
              <div class="thumb-image"> <img src="{{asset($productsByid->productImage)}}" data-imagezoom="true" class="img-responsive"> </div>
            </li> 
            <li data-thumb="{{asset($productsByid->productImage)}}">
              <div class="thumb-image"> <img src="{{asset($productsByid->productImage)}}" data-imagezoom="true" class="img-responsive"> </div>
            </li>
            <li data-thumb="{{asset($productsByid->productImage)}}">
              <div class="thumb-image"> <img src="{{asset($productsByid->productImage)}}" data-imagezoom="true" class="img-responsive"> </div>
            </li> 
          </ul>
          <div class="clearfix"></div>
        </div>  
      </div>
    </div>
    <div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
          <h3>{{$productsByid->productName}}</h3>
          <p><span class="item_price">BDT.{{$productsByid->productPrice}}</span> <del>{{$productsByid->productPrice*1.2}}</del></p>
          <div class="rating1">
            <span class="starRating">
              <input id="rating5" type="radio" name="rating" value="5">
              <label for="rating5">5</label>
              <input id="rating4" type="radio" name="rating" value="4">
              <label for="rating4">4</label>
              <input id="rating3" type="radio" name="rating" value="3" checked="">
              <label for="rating3">3</label>
              <input id="rating2" type="radio" name="rating" value="2">
              <label for="rating2">2</label>
              <input id="rating1" type="radio" name="rating" value="1">
              <label for="rating1">1</label>
            </span>
          </div>
          <div class="description">
            <h5>Check delivery, payment options and charges at your location</h5>
            <input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
            <input type="submit" value="Check">
          </div>
      
          <div class="occasional">
            <h5>Types :</h5>
            <div class="colr ert">
              <label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>
            </div>
            <div class="colr">
              <label class="radio"><input type="radio" name="radio"><i></i>Sports Shoes</label>
            </div>
            <div class="colr">
              <label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>
            </div>
            <div class="clearfix"> </div>
          </div>
          {!! Form::open(['url' => '/add-to-cart','method'=>'POST']) !!}

          <div class="occasional">
            <h5>Quantity</h5>
            <input type="number" name="qty" value="1" class="item_add hvr-outline-out button2" min="1">
            <input type="hidden" name="id" value="{{$productsByid->id}}" class="item_add hvr-outline-out button2" >
          </div>
      


          <div class="occasion-cart">
            <input type="submit" name="addtocart" value=" Add to Cart " class="item_add hvr-outline-out button2">
          </div>
          {!! Form::close() !!}
          
    </div>
        <div class="clearfix"> </div>

        <div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
          <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
              <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews(1)</a></li>
              <li role="presentation" class="dropdown">
                <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Information <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                  <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">cleanse</a></li>
                  <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">fanny</a></li>
                </ul>
              </li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
                <h5>Product Brief Description</h5>
                  {!!$productsByid->longDiscription!!}
              </div>
              <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
                <div class="bootstrap-tab-text-grids">
                  <div class="bootstrap-tab-text-grid">
                    <div class="bootstrap-tab-text-grid-left">
                      <img src="images/men3.jpg" alt=" " class="img-responsive">
                    </div>
                    <div class="bootstrap-tab-text-grid-right">
                      <ul>
                        <li><a href="#">Admin</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
                      </ul>
                      <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
                        suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
                        vel eum iure reprehenderit.</p>
                    </div>
                    <div class="clearfix"> </div>
                  </div>
                  
                  <div class="add-review">
                    <h4>add a review</h4>
                    <form>
                      <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                      <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                      
                      <textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                      <input type="submit" value="SEND">
                    </form>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown1" aria-labelledby="dropdown1-tab">
               {!!$productsByid->shortDiscription!!}
              </div>
              <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown2" aria-labelledby="dropdown2-tab">
             {!!$productsByid->longDiscription!!}
              </div>
            </div>
          </div>
        </div>
  </div>
</div>
@endsection