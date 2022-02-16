@extends('master')
@section('content')
<div class=" custome-product">

	
	<div class="col-sm-10">
		<div class="trending-wrapper">
			<h3>My order</h3>
			
			@foreach ($orders as $item)
			<div class=" row serched-item card-list-divider">
				<div class="col-sm-4">
					<a href="detail/{{$item->id}}">	
			      		<img class="trending-img" src="{{$item->gallery}}" >
			      		
			    	</a>	
				</div>
				<div class="col-sm-4">
			      		<div class="">
			          		<h3>Name:{{$item->name}}</h3>
			          		<h5>Delivery status:{{$item->status}}</h5>
			          		<h5>Address:{{$item->address}}</h5>
			          		<h5>Payment Status:{{$item->payment_status}}</h5>
			          		<h5>Payment Status:{{$item->payment_method}}</h5>
	      
			          
			       		</div>
			    		
				</div>
				

		       
		   </div>
		   @endforeach
		   
		</div>
		

	</div>


</div>






@endsection