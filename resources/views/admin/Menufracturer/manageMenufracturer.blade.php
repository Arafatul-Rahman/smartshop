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
        <th>Menufracturer Name</th>
        <th>Menufracturer description</th>
        <th>Statu</th>
        <th>Action</th>
        <!-- <th>updated</th> -->
        
      </tr>
    </thead>
    <tbody>
    	@foreach($menufracturers as $menufracturer)
      <tr>
        <td>{{$menufracturer->id}}</td>
        <td>{{$menufracturer->manufacturerName}}</td>
        <td>{{$menufracturer->manufacturerdescription}}</td>
        <td>{{$menufracturer->menustatusinfo ==1 ?"Publish":"Unpublish" }}</td>
        
        <td>
        	<a href="{{url('/menufracturer/edit/'.$menufracturer->id)}}" class="btn btn-success">
        		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        	</a>

        	<a href="{{url('/menufracturer/delete/'.$menufracturer->id)}}" class="btn btn-danger" onclick="return confirm('Are You sure delete ?')">
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