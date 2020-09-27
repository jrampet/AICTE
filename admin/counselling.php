<?php
include '../config.php';
$states='<option>Andhra Pradesh</option><option>Arunachal Pradesh</option><option>Assam</option><option>Bihar</option><option>Chhattisgarh</option><option>Goa</option><option>Gujarat</option><option>Haryana</option><option>Himachal Pradesh</option><option>Jammu and Kashmir</option><option>Jharkhand</option><option>Karnataka</option><option>Kerala</option><option>Madhya Pradesh</option><option>Maharashtra</option><option>Manipur</option><option>Meghalaya</option><option>Mizoram</option><option>Nagaland</option><option>Odisha</option><option>Punjab</option><option>Rajasthan</option><option>Sikkim</option><option>Tamil Nadu</option><option>Telangana</option><option>Tripura</option><option>Uttarakhand</option><option>Uttar Pradesh</option><option>West Bengal</option><option>Andaman and Nicobar Islands</option><option>Chandigarh</option><option>Dadra and Nagar Haveli</option><option>Daman and Diu</option><option>Delhi</option><option>Lakshadweep</option><option>Puducherry</option>';
$sql = "Select * from counsellling";
$result=mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);
$reliefmaterials='';
$i=0;
while($row = mysqli_fetch_array($result)){
	
    $name[$i]=$row['Name'];
    $Number[$i]=$row['Contact'];
    $Email[$i]=$row['Email'];
    $date[$i]=$row['Date'];
    $time[$i]=$row['Time'];
    $url[$i]=$row['URL'];
    if(!$url[$i]) $url[$i]='<input type="text" class="form-control" name="url'.$i.'">';
    $i++;
    
}

if(isset($_POST['save'])){
    
        $savid=$_POST['save'];
        if($url[$savid]){
            echo '<script>alert("Meeting link already submitted")</script>';
        }else{
            $emails=$Email[$savid];
            $urlid='url'.$savid;
          
            $urldid="";
           
          
           if(isset($_POST[$urlid])) $urldid=$_POST[$urlid];
           
           if($urldid=="")  echo '<script>alert("Please enter URL")</script>';
          else{
             
            $assignsql = "UPDATE counsellling SET URL='".$urldid."' WHERE Email='$emails'";
            if(mysqli_query($conn,$assignsql)){
                echo '<script>alert("Sucess")</script>';
            }
          }
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
                                    <a href="relief.php" >
                                        <i class="metismenu-icon pe-7s-drop"></i>
                                       Relief Materials
                                    </a>
                                </li>
                                <li>
                                    <a href="counselling.php" class="mm-active">
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
                                <h5 class="card-title">First Repsonders</h5>
                                <form action="counselling.php" method="POST">
                                <table class="mb-0 table table-striped">
                                    <thead>
                                    <tr>
                                        
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Date </th>
                                        <th>Time </th>
                                        <th>Meeting url</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="quotetable">
                                        <?php
                                        $i=0;
                                        while($i<$num){
                                            echo '<tr>                                       
                                            <td>'.$name[$i].'.</td>
                                            <td>'.$Number[$i].'</td>
                                            <td>'.$Email[$i].'</td>
                                            <td>'.$date[$i].'</td>
                                            <td>'.$time[$i].'</td>
                                            <td>'.$url[$i].'
                                               
                                               
                                            </td>
                                            <td> 
                                                <button name="save" value="'.$i.'" class="btn-wide btn btn-success">Save</button>
                                               
                                                
                                            </td>
                                        </tr>';
                                        $i++;
                                        }
                                        ?>
                                    <!-- <tr>                                       
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>Catalog</td>
                                        <td> 
                                            <button class="btn-wide btn btn-success">Show</button>
                                            <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                            
                                        </td>
                                    </tr> -->
                                   
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
