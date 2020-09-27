<?php
include '../config.php';
$errormsg="";
$query = mysqli_query($conn,"select * from admin");
    $rows = mysqli_fetch_assoc($query);
    $num=mysqli_num_rows($query);
	if ($num == 1) {
        $oldpwd=$rows['Password'];
    }

if (isset($_POST['login'])){
    $opwd=$_POST['opwd'];
    $newpwd=$_POST['newpwd'];

$cnewpwd=$_POST['cnewpwd'];
if($newpwd==$cnewpwd){


    if($oldpwd==$opwd){
        $uname='admin';
        $sql = "UPDATE admin SET Password='".$newpwd."'WHERE Username='$uname'";
        if (mysqli_query($conn,$sql)){
            $errormsg= "New Password Updated";
            }
        else
        {
            $errormsg="Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }else{
        $errormsg='Your current password is incorrect';
    }
}else{
    $errormsg= 'Confirm password does not match';
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
    <title>Covid - 19</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
  <style>#wgtmsr{
 width:250px;   
}
</style>

<link href="../main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                
                <div class="widget-content-left mr-3">
                    
                </div>
                <b>Covid  - 19 Admin</b>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
             
        </div> 
             
           <div id="changetheme"></div>
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="dashboard.php">
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        Volunteers
                                    </a>
                                </li>
                                <li  >
                                    <a href="frp.php">
                                        <i class="metismenu-icon pe-7s-medal"></i>
                                        First Responders
                                    </a>
                                </li>
                                <li>
                                    <a href="epass.php">
                                        <i class="metismenu-icon pe-7s-ticket"></i>
                                       E-Pass
                                    </a>
                                </li>
                                <li>
                                    <a href="relief.php">
                                        <i class="metismenu-icon pe-7s-drop"></i>
                                       Relief Materials
                                    </a>
                                </li>
                                <li>
                                    <a href="counselling.php">
                                        <i class="metismenu-icon pe-7s-coffee"></i>
                                       Counselling
                                    </a>
                                </li>
                                <li>
                                    <a href="changepassword.php"  class="mm-active">
                                        <i class="metismenu-icon pe-7s-lock"></i>
                                        Change Password
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
                                        <i class="metismenu-icon pe-7s-power"></i>
                                        Logout
                                    </a>
                                </li>  
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                <div class="app-main__inner">
                        <div class="row"> 
                        <div class="col-md-3">
                               &nbsp;
                           </div>
                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Change Password</h5>
                                        <form  action="changepassword.php" method="POST">
                                            <div class="position-relative form-group"><label for="exampleEmail" class="">Old Password</label><input name="opwd" id="opwd" placeholder="Old Password" type="password" class="form-control"></div>
                                            <div class="position-relative form-group"><label for="examplePassword" class="">New Password</label><input name="newpwd" id="npwd" placeholder="New Password" type="password" class="form-control"></div>
                                            <div class="position-relative form-group"><label for="examplePassword" class="">Confirm Password</label><input name="cnewpwd" id="cnpwd" placeholder="Confirm Password" type="password" class="form-control"></div>
                                           
                                            
                                            <button name="login" class="mt-1 btn btn-primary">Submit</button>
                                            <div id="errormsg"><?php echo $errormsg;?></div>
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
