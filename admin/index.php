<?php 
$error='';
if (isset($_POST['login'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
	else
	{
		include '../config.php';
		$email=$_POST['username'];
		$password=$_POST['password'];

		$query = mysqli_query($conn,"select * from admin where Password='$password' AND Username='$email'");
		$rows = mysqli_fetch_assoc($query);
		$num=mysqli_num_rows($query);
		if ($num == 1) {
			
            
			header( "Refresh:1; url=dashboard.php"); 
		} 
		else 
		{
			$error = "Username or Password is invalid";
			echo $error;
		}
		mysqli_close($conn); 
	}
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> Covid  - 19 Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-firestore.js"></script>

<link href="../main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                
                <div class="widget-content-left mr-3">
                   
                </div>
                <b>Covid  - 19 Admin</b>
                
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <div class="widget-content-left mr-3">
                       
                    </div>
                </div><b>Covid  - 19 Admin</b>
            </div>
             
        </div> 
             
           <div id="changetheme"></div>
            <div class="app-main col-md-12">
                   <div class="app-main__outer ">

                    <div class="app-main__inner ">
                      
                        <div class="row"> 
                           <div class="col-md-3">
                               &nbsp;
                           </div>
                            <div class="col-md-4">
                                <div class="main-card mb-4 card">
                                    <div class="card-shadow-primary border card card-body border-danger">
                                      <h5 class="card-title">Covid - 19 Admin Login</h5>
                                          
                                        <form action="index.php" method="POST">
                                            <div class="position-relative form-group"><label for="examplePassword" class="">Username</label><input name="username" id="email" placeholder="Username" type="text" class="form-control"></div>
                                            <div class="position-relative form-group"><label for="examplePassword" class="">Password</label><input name="password" id="password" placeholder="Password" type="password" class="form-control"></div>
                                            
                                           
                                            
                                            <button name='login' class="mt-1 btn btn-primary">Login</button>
                                            <div id="errormsg"><?php echo $error;?></div>
                                        </form>
                                   
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                               Covid  - 19 Admin
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                               
                            </div>
                        </div>
                    </div>    </div>
               
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="../assets/scripts/main.js"></script>


</body>
</html>
