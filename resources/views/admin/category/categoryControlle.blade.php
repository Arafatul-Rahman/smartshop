@extends('admin.master')

@section('content')

<hr>
<div class="container" style="width: 600px;">
	<h3 class="text-center text-success">{{Session::get('massege')}}</h3>

<!-- <form action="/Category/save"  method="post" enctype="multipart/form-data"> -->
	{!! Form::open(['url' => 'category/save','method'=>'POST']) !!}
  <div class="form-group">
    <label for="text" > Category Name</label>
    <input type="text" class="form-control" id="email" name="categoryName">
    <span class="text-danger">{{ $errors->has('categoryName') ? $errors->first('categoryName') : '' }}</span>
  </div>
 <div class="form-group">
  <label for="comment">Category Description</label>
  <textarea class="form-control" rows="5" id="comment" name="categorydes"></textarea>
  <span class="text-danger">{{ $errors->has('categorydes') ? $errors->first('categorydes') : '' }}</span>
 
</div>
  <div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="statusinfo">
    <option>select public status</option>
    <option value="1">Publish</option>
    <option value="0">unpublish</option>
    
  </select>
</div>
  <button type="submit" name="btn" class="btn btn-default" style="width: 570px; background-color:lightgreen">Save new info</button>
{!! Form::close() !!}
</div>

@endsection