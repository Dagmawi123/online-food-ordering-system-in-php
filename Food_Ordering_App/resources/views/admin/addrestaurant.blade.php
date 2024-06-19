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
                    <a class="navbar-brand" href="/adminstrator">
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
                                    <li><a href="/adminstrator/logout"><i class="fa fa-power-off"></i> Logout</a></li>
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
                                <li><a href="/adminstrator">Dashboard</a></li>
                                
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
							<li><a href="/orders/all">All Orders</a></li>
								  
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
                @if($errors->has('title') || $errors->has('phone') || $errors->has('website') || $errors->has('email') || $errors->has('image'))
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        @error('title')
            <strong>{{ $message }}</strong><br>
        @enderror
        @error('phone')
            <strong>{{ $message }}</strong><br>
        @enderror
        @error('website')
            <strong>{{ $message }}</strong><br>
        @enderror
        @error('email')
            <strong>{{ $message }}</strong><br>
        @enderror
        @error('image')
            <strong>{{ $message }}</strong><br>
        @enderror
    </div>
@endif
									
								
								
					    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Add Restaurant</h4>
                            </div>
                            <div class="card-body">
                                <form action='/restaurants/add' method='post'  enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                      
                                      <hr>
                                      <div class="row p-t-20">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Restaurant Name</label>
                                                  <input type="text" name="title"  value="{{old('title')}}"   class="form-control" placeholder="John doe">
                                                 </div>
                                          </div>
                                          <!--/span-->
                                          <div class="col-md-6">
                                              <div class="form-group has-danger">
                                                  <label class="control-label">Bussiness E-mail</label>
                                                  <input type="text" name="email"  value="{{old('email')}}"  class="form-control form-control-danger" placeholder="example@gmail.com">
                                                  </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <!--/row-->
                                      <div class="row p-t-20">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Phone </label>
                                                  <input type="text" name="phone"  value="{{old('phone')}}"  class="form-control" placeholder="0935502020">
                                                 </div>
                                          </div>
                                          <!--/span-->
                                          <div class="col-md-6">
                                              <div class="form-group has-danger">
                                                  <label class="control-label">website URL</label>
                                                  <input type="text" name="website"  value="{{old('website')}}"  class="form-control form-control-danger" placeholder="http://example.com">
                                                  </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <!--/row-->
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Opening Hours</label>
                                                  <select name="o_hr" class="form-control custom-select"  data-placeholder="Choose a Category" >
                                                      <option value="6am">6am</option>
                                                      <option value="7am">7am</option> 
                                                      <option value="8am">8am</option>
                                                      <option value="9am">9am</option>
                                                      <option value="10am">10am</option>
                                                      <option value="11am">11am</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <!--/span-->
                                           <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Closing Hours</label>
                                                  <select name="c_hr" class="form-control custom-select"    data-placeholder="Choose a Category" >
                                                      <option value="4pm">4pm</option> 
                                                      <option value="5pm">5pm</option>
                                                      <option value="6pm">6pm</option>
                                                      <option value="7pm">7pm</option>
                                                      <option value="8pm">8pm</option>
                                                  </select>
                                              </div>
                                          </div>
                                          
                                           <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Open Days</label>
                                                  <select name="o_days" class="form-control custom-select"  data-placeholder="Choose a Category" tabindex="1">
                                                      <option value="mon-tue">mon-tue</option>
                                                      <option value="mon-wed">mon-wed</option> 
                                                      <option value="mon-thu">mon-thu</option>
                                                      <option value="mon-fri">mon-fri</option>
                                                      <option value="mon-sat">mon-sat</option>
                                                      <option value="24hr-x7">24hr/7</option>
                                                  </select>
                                              </div>
                                          </div>
                                          
                                          
                                          <div class="col-md-6">
                                              <div class="form-group has-danger">
                                                  <label class="control-label">Image</label>
                                                  <input type="file" name="image"  id="lastName"  class="form-control form-control-danger" placeholder="12n">
                                                  </div>
                                          </div>
                                          <!--/span-->
                                          
                                           <div class="col-md-12">
                                              <div class="form-group">
                                                  <label class="control-label">Select Category</label>
                                                  <select name="Cat_Id" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                      <!-- iterate through each Category -->
                                                       @foreach ($categories as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->CategoryName}}</option>
                                                       @endforeach
                                              
                                                   </select>
                                              </div>
                                          </div>
                                          
                                          
                                          
                                          
                                      </div>
                                      <!--/row-->
                                      <h3 class="box-title m-t-40">Address</h3>
                                      <hr>
                                      <div class="row">
                                          <div class="col-md-12 ">
                                              <div class="form-group">
                                                  
                                                  <textarea name="address" type="text" style="height:100px;" class="form-control" >{{old('address')}}</textarea>
                                              </div>
                                          </div>
                                      </div>
                                    
                                          <!--/span-->
                                      </div>
                                  </div>
                                  <div class="form-actions">
                                      <input type="submit" name="submit" class="btn btn-success" value="save"> 
                                      <a href="/restaurants/all" class="btn btn-inverse">Cancel</a>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
					
					
					
					
					
					
					
					
					
					
					
					
					
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
        
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
</body>

</html>