@extends('admin.master')

@section('content')
	<hr>


<div class="container" style="width: 600px;">
	

<!-- <form action="/Category/save"  method="post" enctype="multipart/form-data"> -->
	{!! Form::open(['url' => 'category/update','method'=>'POST','name'=>'formedit']) !!}
  <div class="form-group">
    <label for="text" > Category Name</label>
    <input type="text" class="form-control" id="email" name="categoryName" value="{{$categoryByid->categoryName}}">
    <input type="hidden" class="form-control" name="id" value="{{$categoryByid->id}}">
  </div>
 <div class="form-group">
  <label for="comment">Category Description</label>
  <textarea class="form-control" rows="5" id="comment" name="categorydes">{{$categoryByid->categorydes}}</textarea>
</div>
  <div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="statusinfo">
    <option>select public status</option>
    <option value="1">Publish</option>
    <option value="0">unpublish</option>
    
  </select>
</div>
  <button type="submit" name="btn" class="btn btn-default" style="width: 570px; background-color:lightgreen">Update Category info</button>
{!! Form::close() !!}
</div>
	
<script>
	document.forms['formedit'].elements['statusinfo'].value={{$categoryByid->statusinfo}}
</script>
@endsection