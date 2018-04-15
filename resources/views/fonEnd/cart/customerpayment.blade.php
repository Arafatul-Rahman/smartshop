@extends('fonEnd.master')
@section('maincontent')
<style>
      td{
            padding: 20px;
      }
      th{
            padding: 20px;
      }
</style>
  <div class="panel panel-default">
      <br>
      <br>
               <h3 class="text-center text-success">dear <span style="color: red;">{{Session::get('customername')}}</span> please payment hare </h3>
            </div>
            <br>
            <br>
            <table class=" well table-bordered" style="margin-left: 300px;">
            	<tr>
            		<th>Cash on Delivary</th>
            		<td>
            			<input type="radio" name="cash" value="cash"> Cash on Delivary
            		</td>
            	</tr>
            	<tr>
            		<th>Paypal</th>
            		<td>
            			<input type="radio" name="cash" value="paypal"> Paypal</td>
            	</tr>
            	<tr>
            		<th>Bkash</th>
            		<td>
            			<input type="radio" name="cash" value="Bkash" > Bkash</td>
            	</tr>
            	<tr>
            		<th>Dutch Bangla</th>
            		<td>
            			<input type="radio" name="cash" value="Bkash" > Dutch Bangla</td>

            			
            	</tr>

            	<tr>
            		<th>now payment</th>
            		<td><input type="submit" name="cash" value="submit" ></td>
            	</tr>

            	
            	            
            	
            </table>
@endsection