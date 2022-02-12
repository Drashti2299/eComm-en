@extends('master')
@section('content')

<h1 class="text-center">Login Form</h1>
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4 custom-login">
			<form action="login" method="POST">
  				<div class="form-group">
  					@csrf  
  					
  				    <label for="email">Email address:</label>
				    <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
				 </div>
				 <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd">
				 </div>
				 <div class="form-group form-check">
				    <label class="form-check-label">
				      <input class="form-check-input" type="checkbox"> Remember me
				    </label>
  				</div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>

			
		</div>
		

	</div>
	



</div>
@endsection