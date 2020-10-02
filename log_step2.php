<link rel="stylesheet" href="css/logcss.css">
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								
							</div>
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Authentication</a>
							</div>
							<div class="col-xs-3">
								
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="verify_code.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="password" name="code" id="code" tabindex="2" class="form-control" placeholder="Code">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" style="background-color:#33610b;" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Continue Login">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script>

function compare(){
	
	var x = document.getElementById("passwordx").value;
	var y = document.getElementById("confirm-password").value;
	
	if(x==y){
		return true;
	}else{
		document.getElementById("passwordx").style.color = "red";
		document.getElementById("confirm-password").style.color = "red";
		return false;
	}
	
	
	
	
	
	
	
}


	</script>