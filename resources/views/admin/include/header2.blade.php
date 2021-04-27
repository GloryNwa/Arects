<!doctype html>
<html lang="en">


<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 12:07:25 GMT -->
<head>
<title>Arect DASHBOARD</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">


<link rel="icon" href="/arects/images/logo1.PNG" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="/assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="/assets/vendor/toastr/toastr.min.css">

<!-- <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="/assets/vendor/fullcalendar/fullcalendar.min.css">
<!-- <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css"> -->
<!-- MAIN CSS -->
<link rel="stylesheet" href="/assets1/css/main.css">
<link rel="stylesheet" href="/assets1/css/color_skins.css">
</head>
<body class="theme-blue">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="/arects/images/logo1.PNG" alt="Arect"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand">
                <img src="/arects/images/logo1.PNG" alt="Arects" style="height:40px;width:150px">               
            </div>
            
            <div class="navbar-right">
                <!-- <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>                -->

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">                        
                      
                        <li><a href="{{route('logout')}}" class="icon-menu"><i class="icon-login"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="/arects/images/vect.jpg" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Admin</strong></a>                    
                    <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                        <li class="divider"></li>
                        <li><a href="{{route('logout')}}"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
               
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#hr_menu">Main Nav</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#project_menu">Uploads</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sub_menu"><i class="icon-grid"></i></a></li>                
                <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li> -->
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane animated fadeIn active" id="hr_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li class="active"><a href="{{route('dashboard')}}"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>  
                               
                    </nav> 
                </div>
                <div class="tab-pane animated fadeIn" id="project_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                        <li><a href="/upload/client"><i class="icon-arrow-up"></i><span>Clients</span></a></li>
                
                            <li><a href="/ongoing/projects"><i class="icon-arrow-up"></i><span>Ongoing Projects</span></a></li>

                            <li><a href="/past/projects"><i class="icon-arrow-up"></i><span>Past Projects</span></a></li>

                           
                        </ul>                        
                    </nav>                    
                </div>

                <div class="tab-pane animated fadeIn" id="sub_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                           
                            <ul class="main-menu metismenu">
                             <li><a href="/manage/clients"><i class="icon-settings"></i><span>Manage Clients</span></a></li>
                            <li><a href="/manage/ongoing/projects"><i class="icon-settings"></i><span>Manage Ongoing Projects</span></a></li>
                            
                            <li><a href="/manage/past/projects"><i class="icon-settings"></i>Manage Past Projects</a></li>
                        </ul>  
                           
                        </ul>
                    </div>
                </div>             
            </div>          
        </div>
    </div>

