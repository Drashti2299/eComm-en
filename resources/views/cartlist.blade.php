@extends('master')
@section('content')
<div class=" custome-product">

	
	<div class="col-sm-10">
		<div class="trending-wrapper">
			<h3>Result for Product</h3>
			@foreach ($products as $item)
			<div class=" row serched-item card-list-divider">
				<div class="col-sm-4">
					<a href="detail/{{$item->id}}">	
			      		<img class="trending-img" src="{{$item->gallery}}" >
			      		
			    	</a>	
				</div>
				<div class="col-sm-4">
			      		<div class="">
			          		<h3>{{$item->name}}</h3>
			          		<h5>{{$item->description}}</h5>
	      
			          
			       		</div>
			    		
				</div>
				<div class="col-sm-3">
					<button class="btn btn-warning">Remove from cart</button>
				</div>

		       
		   </div>
		   @endforeach
		</div>


	</div>


</div>






@endsection