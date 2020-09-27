<?php
include '../config.php';
$i=0;
$sql = "Select * from reliefmatierials";
$result=mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)){
	//echo $row1['Name'];
    $id=$row['Id'];
    $name[$i]=$row['Name'];
    $contact[$i]=$row['Number'];
    $email[$i]=$row['Email'];
   $material[$i]=$row['Material'];
   $unit[$i]=$row['Unit'];

    
    
    $i++;
    
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
                                    <a href="dashboard.php" >
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        Volunteers
                                    </a>
                                </li>
                                <li  >
                                    <a href="frp.php" >
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
                                    <a href="relief.php" class="mm-active">
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
                                    <a href="changepassword.php">
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
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Relief Materials</h5>
                                <form action="frp.php" method="POST">
                                <table class="mb-0 table table-striped">
                                    <thead>
                                    <tr>
                                        
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Matierial</th>
                                        <th>Unit</th>
                                    </tr>
                                    </thead>
                                    <tbody id="quotetable">
                                        <?php
                                        $i=0;
                                        while($i<$num){
                                            echo '<tr>                                       
                                            <td>'.$name[$i].'.</td>
                                            <td>'.$contact[$i].'</td>
                                            <td>'.$email[$i].'</td>
                                            <td>'.$material[$i].'</td>
                                            <td>'.$unit[$i].'</td>
                                           
                                        </tr>';
                                        $i++;
                                        }
                                        ?>
                                
                                   
                                    </tbody>
                                </table>
                                </form>
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
