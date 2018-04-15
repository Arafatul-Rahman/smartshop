@extends('admin.master')

@section('content')
  <hr>
  
  {!! Form::open(['url' => 'product/update','name'=>'formproduct','method'=>'POST','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
    <label for="text" > product Name</label>
    <input type="text" class="form-control" id="email" name="productName" value="{{$productsById->productName}}">
    <input type="hidden" class="form-control" id="email" name="productid" value="{{$productsById->id}}">
    <span class="text-danger">{{ $errors->has('productName') ? $errors->first('productName') : '' }}</span>
  </div>




<div class="form-group">
  <label for="sel1"> Category Name</label>
  
 
  <select class="form-control" id="sel1" name="categoryid">
    <option>select Category Name</option>
    @foreach($categories as $category)
    <option value="{{$category->id}}">{{$category->categoryName}}</option>
    
    @endforeach
  </select>
  
</div>
<div class="form-group">
  <label for="sel1"> Menufracturer Name</label>
  
 
  <select class="form-control" id="sel1" name="menufracturerid">
    <option>select menufracturer Name</option>
    @foreach($menufracturers as $menufracturer)
    
    <option value="{{$menufracturer->id}}">{{$menufracturer->manufacturerName}}</option>
  

    
    @endforeach
  </select>

  
</div>


 <div class="form-group">
    <label for="text" > product Price</label>
    <input type="number" class="form-control" id="email" name="productPrice" value="{{$productsById->productPrice}}">
    <span class="text-danger">{{ $errors->has('productPrice') ? $errors->first('productPrice') : '' }}</span>
  </div>
   <div class="form-group">
    <label for="text" > product Qantity</label>
    <input type="number" class="form-control" id="email" name="productQantity" value="{{$productsById->productQantity}}">
    <span class="text-danger">{{ $errors->has('productQantity') ? $errors->first('productQantity') : '' }}</span>
  </div> <div class="form-group">
    <label for="text" > Short Discription</label>
    <textarea class="form-control" rows="3" id="comment" name="shortDiscription">{{$productsById->shortDiscription}}</textarea>
    <span class="text-danger">{{ $errors->has('shortDiscription') ? $errors->first('shortDiscription') : '' }}</span>
  </div>
   <div class="form-group">
    <label for="text" >Long Discription</label>
    <textarea class="form-control" rows="5" id="comment" name="longDiscription">{{$productsById->longDiscription}}</textarea>
    <span class="text-danger">{{ $errors->has('longDiscription') ? $errors->first('longDiscription') : '' }}</span>
  </div>

  <div class="form-group">
    <label for="text" > product Image</label>
    <input type="file" class="form-control" id="email" name="productImage" accept="Image/" value="{{$productsById->productImage}}">
    <img src="{{asset($productsById->productImage)}}" alt="{{$productsById->productName}}" height="100px" width="100pxpx">
    <span class="text-danger">{{ $errors->has('productImage') ? $errors->first('productImage') : '' }}</span>
  </div>

<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="productstatusinfo">
    <option>select public status</option>
    <option value="1">Publish</option>
    <option value="0">unpublish</option>
    
  </select>
</div>

  <button type="submit" name="btn" class="btn btn-default" style="width: 570px; background-color:lightgreen">Update new info</button><br><br>
{!! Form::close() !!}
</div>
  
<script>
  document.forms['formproduct'].elements['productstatusinfo'].value={{$productsById->productstatusinfo}}
  document.forms['formproduct'].elements['categoryid'].value={{$productsById->categoryid}}
  document.forms['formproduct'].elements['menufracturerid'].value={{$productsById->menufracturerid}}

  
</script>

@endsection