@extends('fonEnd.master')
@section('maincontent')
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-12">
                

            <div class="panel panel-default">
               <h3 class="text-center text-success">dear <span style="color: red;">{{Session::get('customername')}}</span> please your shipping information.if chakout and shiping are samne then just click save shipping </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <!-- <div class="panel panel-default"> -->
              

                <div class="panel-body">
                   {!! Form::open(['url' => 'cheakout/payment','method'=>'POST','class'=>'form-horizontal']) !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $customer->name }}" required autofocus placeholder="name">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $customer->email }}" required placeholder="example@gmail.com">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                  
                        <div class="form-group{{ $errors->has('phoneNumber') ? ' has-error' : '' }}">
                            <label for="phoneNumber" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="password" type="number" class="form-control" name="phoneNumber" required placeholder="phone Number" value="{{$customer->phoneNumber}}">

                                @if ($errors->has('phoneNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="adress" required placeholder="adress" value="{{$customer->adress}}">

                                @if ($errors->has('adress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    save shipping
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        

          
        </div>
    </div>
</div>
@endsection