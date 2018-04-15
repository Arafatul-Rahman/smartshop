@extends('admin.master')

@section('content')
	<hr>


<div class="container" style="width: 600px;">
	

<!-- <form action="/Category/save"  method="post" enctype="multipart/form-data"> -->
	{!! Form::open(['url' => 'menufracturer/update','method'=>'POST','name'=>'formedit']) !!}
  <div class="form-group">
    <label for="text" > Menufracturer Name</label>
    <input type="text" class="form-control" id="email" name="manufacturerName" value="{{$menufracturersbyid->manufacturerName }}">
    <input type="hidden" class="form-control" name="id" value="{{$menufracturersbyid->id}}">
  </div>
 <div class="form-group">
  <label for="comment">Menufracturer Description</label>
  <textarea class="form-control" rows="5" id="comment" name="manufacturerdescription">{{$menufracturersbyid->manufacturerdescription}}</textarea>
</div>
  <div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="menustatusinfo">
    <option>select public status</option>
    <option value="1">Publish</option>
    <option value="0">unpublish</option>
    
  </select>
</div>
  <button type="submit" name="btn" class="btn btn-default" style="width: 570px; background-color:lightgreen">Update Menufaturer info</button>
{!! Form::close() !!}
</div>
	
<script>
	document.forms['formedit'].elements['menustatusinfo'].value={{$menufracturersbyid->menustatusinfo}}
</script>
@endsection