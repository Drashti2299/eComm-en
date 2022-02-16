@extends('master')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4 custom-login">
			<form action="/register" method="POST">
  				@csrf 
  				<div class="form-group">
  					 

  					<label for="email"> User Name:</label>
				    <input type="text" class="form-control" name="name" placeholder="Enter user name " id="email"><br>
  					
  				    <label for="email">Email address:</label>
				    <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
				 </div>
				 <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd">
				 </div>
				 
  <button type="submit" class="btn btn-primary">Registers</button>
</form>

			
		</div>
		

	</div>
	



</div>
@endsection