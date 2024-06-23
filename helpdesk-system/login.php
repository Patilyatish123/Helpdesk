<?php 
include 'init.php';
if($users->isLoggedIn()) {
	header('Location: ticket.php');
}
$errorMessage = $users->login();
include('inc/header.php');
?>
<title>Helpdesk System with PHP & MySQL</title>
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php include('inc/container.php');?>
<div class="container contact">	
	<h2>GET LOGIN</h2>
	<div class="login1">	
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading" >
				<div class="panel-title">User Login</div>                        
			</div> 
			<div  class="panel-body" >
				<?php if ($errorMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
				<?php } ?>
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
					<div  class="input-group">
						<span class="input-group-addon"><i class="fa-solid fa-user"></i></span>
						<input type="text" class="form-control" id="email" name="email" placeholder="email" required>                                        
					</div>                                
					<div  class="input-group">
						<span class="input-group-addon"><i class="fa-solid fa-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password"placeholder="password" required>
					</div>
					<div  class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-success">						  
						</div>						
					</div>	
					<div  class="form-group">                               
						<div class="col-sm-12 controls">
												
						</div>						
					</div>	
				</form>   
			</div>                     
		</div>  
	</div>
	</div>
</div>	





				<!---
				 
				<div class="login-form">
    <h2>MEMBER LOGIN</h2>
   <form id="loginform" class="form-horizontal" role="form" method="POST" action="">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Username">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="Password">
        </div>
        
        <button type="submit">Sign In</button>

        <div class="extra">
            <a href="#">Forgot Password ?</a>
            <a href="#">Create an Account</a>
        </div>

    </form>
</div>
				
				
				
				
				->
<?php include('inc/footer.php');?>