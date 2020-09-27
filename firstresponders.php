<?php 
    include 'config.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $cnumber=$_POST['cnumber'];
        $anumber=$_POST['canumber'];
        $id=getgeneratedId();
        $sql = "INSERT INTO firstresponders (ID,Name,Email,Contact,AlternateContact) VALUES ('$id','$name','$email','$cnumber','$anumber') ";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Submitted Successfully")</script>';
                
        }else{
            echo '<script>alert("Error occured")</script>';
        }
    }
    echo 'submit';
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
   

<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                
                 
                <b>covid 19 </b>
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
                                    <a href="index.html" >
                                        <i class="metismenu-icon pe-7s-graph1"></i>
                                       Statistics
                                    </a>
                                </li>
                                <li  >
                                    <a href="volunteers.php">
                                        <i class="metismenu-icon pe-7s-plus"></i>
                                       Volunteers Registration
                                    </a>
                                </li>
                                <li>
                                    <a href="medicalstore.html">
                                        <i class="metismenu-icon pe-7s-box1"></i>
                                       Medical Store
                                    </a>
                                </li>
                                <li>
                                    <a href="firstresponders.php"  class="mm-active">
                                        <i class="metismenu-icon pe-7s-medal"></i>
                                        First Responders registration
                                    </a>
                                </li>
                                <li>
                                    <a href="patient.html">
                                        <i class="metismenu-icon pe-7s-server"></i>
                                        Patient input data
                                    </a>
                                </li>
                                <li>
                                    <a href="doctorap.html">
                                        <i class="metismenu-icon pe-7s-like"></i>
                                       Doctor's online appointment
                                    </a>
                                </li>
                                <li>
                                    <a href="helpline.html">
                                        <i class="metismenu-icon pe-7s-call"></i>
                                      Toll free number
                                    </a>
                                </li>
                                <li>
                                    <a href="funds.html">
                                        <i class="metismenu-icon pe-7s-gift"></i>
                                        Funds
                                    </a>
                                </li>
                                <li>
                                    <a href="reliefmaterials.php" >
                                        <i class="metismenu-icon pe-7s-drop"></i>
                                        Providing Relief materials 
                                    </a>
                                </li>
                                <li>
                                    <a href="needcounselling.php" >
                                        <i class="metismenu-icon pe-7s-coffee"></i>
                                        Need counsellling?
                                    </a>
                                </li>
                                <li>
                                    <a href="govt.html">
                                        <i class="metismenu-icon pe-7s-user"></i>
                                        Governmet Service
                                    </a>
                                </li>
                                <li>
                                    <a href="epass.php" >
                                        <i class="metismenu-icon pe-7s-ticket"></i>
                                        Pass Service
                                    </a>
                                </li>
                                <li>
                                    <a href="awareness.html">
                                        <i class="metismenu-icon pe-7s-light"></i>
                                       Covid Awareness
                                    </a>
                                </li>
                                <li>
                                    <a href="elearning.html">
                                        <i class="metismenu-icon pe-7s-bookmarks"></i>
                                        Elearning
                                    </a>
                                </li>
                                
                               
                                
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                    <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">First Responders</h5>
                        <form class="" method="POST" action="firstresponders.php">
                        
                        <div class="position-relative row form-group"><label for="exampleCity" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10"><input name="name" id="exampleCity" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10"><input name="email" id="exampleEmail"  type="email" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="exampleCity" class="col-sm-2 col-form-label">Number</label>
                        <div class="col-sm-10"><input name="cnumber" id="exampleCity" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="exampleCity" class="col-sm-2 col-form-label">Alternate Number</label>
                        <div class="col-sm-10"><input name="canumber" id="exampleCity" type="text" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-check">
                                <div class="col-sm-10 offset-sm-2">
                                    <button class="btn btn-secondary" name='submit'>Submit</button>
                                </div>
                            </div>
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
                                              Covid-19
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
<script type="text/javascript" src="./assets/scripts/main.js"></script>

<script type="text/javascript" src="./js/themes.js"></script>
<script type="text/javascript" src="./js/config.js"></script>
<script type="text/javascript" src="./js/"></script>
</body>
</html>
