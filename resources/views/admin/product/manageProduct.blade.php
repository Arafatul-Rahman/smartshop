@extends('admin.master')

@section('content')
<hr>
<div class="container-flude">
  <h2>All Menufractrer hare</h2>
  <h3 class="text-center text-success">{{Session::get('massege')}}</h3>
  <hr>
                                                                                        
  <div class="table-responsive">          
  <table class="table table-striped table-bordered" style="width: 100%">
    <thead>
    	

      <tr>
        <th>#</th>
        <th>Product Name</th>
        <th>Category Name</th>
        <th>menufracturer Name</th>
        <th>Product Price</th>
        <th>Product Qantity</th>
        <th>Status</th>
        <th>Action</th>
        <!-- <th>updated</th> -->
        
      </tr>
    </thead>
    <tbody>
    	@foreach($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->productName}}</td>
        <td>{{$product->categoryName}}</td>
        <td>{{$product->manufacturerName}}</td>
        <td>TK.{{$product->productPrice}}</td>
        <td>{{$product->productQantity}}</td>
        <td>{{$product->productstatusinfo ==1 ?"Publish":"Unpublish" }}</td>
        
       
        
        <td>
          <a href="{{url('/product/show/'.$product->id)}}" class="btn btn-info" title="Product View">
            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
          </a>
        	<a href="{{url('/product/edit/'.$product->id)}}" class="btn btn-success" title="Product Edit">
        		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        	</a>
          

        	<a href="{{url('/product/delete/'.$product->id)}}" class="btn btn-danger" onclick="return confirm('Are You sure delete ?')" title="Product Delete">
        		<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
        	</a>
        	
 
        </td>
       
        
        
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>

@endsection