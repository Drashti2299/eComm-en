@extends('master')
@section('content')
<div class=" custome-product">

	
		<div class="col-sm-10">
	<table class="table table-hover">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>${{$total}}</td>
        
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
        
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
        
      </tr>
      <tr>
        <td>Total</td>
        <td>$ {{$total + 10}}</td>
        
      </tr>
    </tbody>
  </table>
</div>
	

	<div>
	<form action="orderplace" method="POST">
		@csrf
	  <div class="form-group">
	    
	    <textarea name="address" class="form-control" placeholder="enter the address" ></textarea>
	  </div>
	  <div class="form-group">
	    <label >Payment</label><br>
	    <input type="radio" value="cash" name="payment"><span>Net banking</span><br>
	     <input type="radio"  value="cash" name="payment"><span>pay on delivery</span><br>
	      <input type="radio"  value="cash" name="payment"><span>EMI </span>
	  </div>
	  
	  <button type="submit" class="btn btn-default" >Order now</button>
	</form>
	</div>


</div>






@endsection