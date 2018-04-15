@extends('admin.master')

@section('content')
<hr>
<div class="container-flude">
  <h2>All Categories hare</h2>
  <h3 class="text-center text-success">{{Session::get('massege')}}</h3>
  <hr>
                                                                                        
  <div class="table-responsive">          
  <table class="table table-striped table-bordered" style="width: 100%">
    <thead>
    	

      <tr>
        <th>#</th>
        <th>Category Name</th>
        <th>Category description</th>
        <th>Action</th>
        <th>action</th>
        <!-- <th>updated</th> -->
        
      </tr>
    </thead>
    <tbody>
    	@foreach($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->categoryName}}</td>
        <td>{{$category->categorydes}}</td>
        <td>{{$category->statusinfo ==1 ?"Publish":"Unpublish" }}</td>
        
        <td>
        	<a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-success">
        		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        	</a>

        	<a href="{{url('/category/delete/'.$category->id)}}" class="btn btn-danger" onclick="return confirm('Are You sure delete ?')">
        		<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
        	</a>
        	
 
        </td>
       <!-- <td>{{$category->updated_at}}</td> -->
        
        
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>

@endsection