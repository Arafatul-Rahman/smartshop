@extends('admin.master')

@section('content')

<hr>

<table class="table table-bordered table-hover">
  <tr>
    <th>product Id</th>
    <th>{{$product->id}}</th>
  </tr>
   <tr>
    <th>product Name</th>
    <th>{{$product->productName}}</th>
  </tr>
   <tr>
    <th>Category Name</th>
    <th>{{$product->categoryName}}</th>
  </tr>
   <tr>
    <th> Manufracturer Name </th>
    <th>{{$product->manufacturerName}}</th>
  </tr>
   <tr>
    <th>product price</th>
    <th>{{$product->productPrice}}</th>
  </tr>
   <tr>
    <th>product qantity</th>
    <th>{{$product->productQantity}}</th>
  </tr>
   <tr>
    <th>short Description</th>
    <th>{{$product->shortDiscription}}</th>
  </tr>
   <tr>
    <th>long Description</th>
    <th>{{$product->longDiscription}}</th>
  </tr>
   <tr>
    <th>Image</th>
    <th><img src="{{asset($product->productImage)}}" alt="{{$product->productName}}" height="60px" width="60px;"> </th>
  </tr>
   <tr>
    <th>Status</th>
    <th>{{$product->productstatusinfo ==1 ?"Publish":"Unpublish" }}</th>
  </tr>
  
  
</table>


@endsection