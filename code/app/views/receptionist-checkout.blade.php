@extends('layoutReceptionist')

@section('title')
Add User
@stop
@section('nav')
<li>

	<a onclick="myFunction()" type="submit" style="background-color:#FF8C00; color:white;">
		<span class="glyphicon glyphicon-user">logout
		</span>
	</a>
</li>
@stop

@section('body')
<h1>Check IN</h1>
<div style="background-color:white">
	<div class="container">
		<div class="row">
			<div align="center">
				<div class="box" border="20" >
					<div class="container">
						<div class="col-md-11">
							<form action="{{ url('/checkout') }}" method="post">
								<?php 
								$room = RoomDB::where('available','=',false)->get();
								for($i = 0 ; $i < count($room) ; $i++){
									echo "<br><input type='radio' name='roomNumber' value='".$room[$i]->roomNumber."'> ".$room[$i]->roomNumber;
								}
								?>	
								<br><br>
								<button  type="submit" class="btn btn-primary btn-lg active">submit</button>
								<br><br>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<form id="myForm"action="{{ url('/logout') }}" method="post">
	</form>
	<script type="text/javascript">
		function myFunction() {
			document.getElementById("myForm").submit();
		}
		

	</script>

	@stop