<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/adminImages/favicon.png')}}">
    <title>FoodPicky Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/adminCss/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/adminCss/helper.css')}}" rel="stylesheet">
    <link href="{{asset('css/adminCss/style.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
         <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="{{asset('images/adminImages/logo.png')}}" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="{{asset('images/adminImages/logo-text.png')}} " alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                     
                       
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                           
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                      
                          <!-- Profile -->
                     <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('images/adminImages/users/5.jpg')}} " alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="dashboard.php">Dashboard</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-label">Log</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/users">All Users</a></li>
								<li><a href="/users/add">Add Users</a></li>
								
                               
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Store</span></a>
                            <ul aria-expanded="false" class="collapse">
							<li><a href="/restaurants/all">All Restaurants</a></li>
								<li><a href="/categories/add">Add Category</a></li>
                                <li><a href="/restaurants/add">Add Restaurant</a></li>
                                
                            </ul>
                        </li>
                       <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="/foods">All Dishes</a></li>
								<li><a href="/foods/add">Add Dish</a></li>
                              
                                
                            </ul>
                        </li>
						 <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hide-menu">Orders</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="/orders">All Orders</a></li>
								  
                            </ul>
                        </li>
                         
                            </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper" style="height:1200px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
             <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
              
						     <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All stores data</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
								
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
											 <th>Cat.</th>
                                                <th>Restaurant-Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Site</th>
                                                <th>Open Hrs</th>
                                                <th>Close Hrs</th>
												<th>Open Days</th>
												  <th>Address</th>
												  <th>Image</th>
												  <th>Date</th>
												   <th>Action</th>
												  
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>Cat.</th>
                                                <th>Restaurant-Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Site</th>
                                                <th>Open Hrs</th>
                                                <th>Close Hrs</th>
												<th>Open Days</th>
												  <th>Address</th>
												  <th>Image</th>
												  <th>Date</th>
												   <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
										
                        @if(count($restaurants)==0)                
                                        <!--No restaurant td  -->
                       <td colspan="11"><center>No Restaurant Data!</center></td> 

                       @else
@foreach ($restaurants as $restaurant)


				<tr><td>{{$restaurant->category->CategoryName}}</td>
                <td>{{$restaurant->title}}</td>
                <td>{{$restaurant->email}}</td>
                <td>{{$restaurant->phone}}</td>
                <td>{{$restaurant->website}}</td>
                <td>{{$restaurant->o_hr}}</td>
                <td>{{$restaurant->c_hr }}</td>
                <td>{{$restaurant->o_days }}</td>

                <td>{{$restaurant->address}}</td>
                
                <td><div class="col-md-3 col-lg-8 m-b-10">
                <center><img src="{{asset('images/Res_img/'.$restaurant->image)}}" class="img-responsive radius"  style="min-width:150px;min-height:100px;"/></center>
                </div></td>
                
                <td>{{$restaurant->date}}</td>
                        <td><a href="/restaurants/remove/{{$restaurant->id}}" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
                        <a href="/restaurants/update/{{$restaurant->id}}" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-settings"></i></a>
				</td>
                
                         </tr>
					
        @endforeach
       @endif															 
				
                                 
                                                        
                                                            
                                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						 </div>
                      
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2024 All rights reserved. </footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{asset('js/adminJs/lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('js/adminJs/lib/bootstrap/js/popper.min.js')}} "></script>
    <script src="{{asset('js/adminJs/lib/bootstrap/js/bootstrap.min.js')}} "></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('js/adminJs/jquery.slimscroll.js')}} "></script>
    <!--Menu sidebar -->
    <script src="{{asset('js/adminJs/sidebarmenu.js')}} "></script>
    <!--stickey kit -->
    <script src="{{asset('js/adminJs/lib/sticky-kit-master/dist/sticky-kit.min.js')}} "></script>
    <!--Custom JavaScript -->
    <script src="{{asset('js/adminJs/custom.min.js')}}"></script>

    <script src="{{asset('js/adminJs/lib/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('js/adminJs/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/adminJs/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('js/adminJs/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}"></script>
    <script src="{{asset('js/adminJs/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('js/adminJs/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('js/adminJs/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('js/adminJs/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('js/adminJs/lib/datatables/datatables-init.js')}}"></script>
</body>

</html>