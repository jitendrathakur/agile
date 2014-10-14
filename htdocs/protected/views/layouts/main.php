<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Goodfelow| Control Panel | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar 
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        Daterange picker 
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
         bootstrap wysihtml5 - text editor -->
         
        <link href="css/datepicker/bootstrap-datepicker.css" rel="stylesheet" type="text/css" />

        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <link href="css/chosen/chosen.css" rel="stylesheet" type="text/css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Control Panel
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        
                        
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - COO, CTO
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="index.php?r=profile/profile/update" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="index.php?r=user/user/logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/logo.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Goodfellow <br/>Occupational Therapy</p>

                        </div>
                    </div>
                    <!-- search form --><!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
						
						<li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Students</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">                            
                                <li><a href="index.php?r=treatmentdirects/create"><i class="fa fa-angle-double-right"></i> Treatment Note</a></li>
                                <li><a href="index.php?r=students/list"><i class="fa fa-angle-double-right"></i> Students</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Direct Services</a></li>
                               <!-- <li><a href="#"><i class="fa fa-angle-double-right"></i> Indirect Services</a></li> -->
                            </ul>
                        </li>
						
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-building-o"></i>
                                <span>School</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="index.php?r=districts"><i class="fa fa-angle-double-right"></i> District</a></li>
                                <li><a href="index.php?r=schools"><i class="fa fa-angle-double-right"></i> School</a></li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?r=billingreports">
                                <i class="fa fa-laptop"></i>
                                <span>Billing</span>
                                
                            </a>
                            
                        </li>
						<li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>Therapist</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="index.php?r=profile/profile/update"><i class="fa fa-angle-double-right"></i> Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php echo $content; ?>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
      
        <!-- jQuery UI 1.10.3
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar
        <script src="js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <!-- daterangepicker
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        
        -->
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        
        <script src="js/plugins/JavaScriptSpellCheck/include.js" type="text/javascript"></script>
        
        <!--
        <script src="js/plugins/JavaScriptSpellCheck/extensions/fancybox/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
        <link rel="stylesheet" href="js/plugins/JavaScriptSpellCheck/extensions/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
        -->
        
        <link rel="stylesheet" href="js/plugins/clockpicker/bootstrap-clockpicker.css" type="text/css" media="screen" />
        <script src="js/plugins/clockpicker/jquery-clockpicker.min.js" type="text/javascript"></script>

        <script src="js/plugins/chosen/chosen.jquery.js" type="text/javascript"></script>
        
        
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- Page script -->
       
    
    </body>
</html>