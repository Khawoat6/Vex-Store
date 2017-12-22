<!DOCTYPE html>
<html>
<head>
	  <title>Admin</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
  <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

</head>


<body class="hold-transition skin-blue sidebar-mini" style="font-family: 'Kanit', sans-serif;">
<div class="wrapper">
  <header class="main-header" >
    <a href="#" class="logo" style="text-decoration:none;" > 
     <b style="font-size: 18px;">Vex</b>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        <span class="glyphicon glyphicon-log-out"></span> Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
          </li>
        </ul>
      </div>
  </nav>                    
  </header>

  <!-- ========================================================================================== -->

  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/dist/img/avatar04.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>
      
      <ul class="sidebar-menu">
        
        <li class="header" style="font-size: 15px;" ></li>
        <li class="treeview">
          <a href="/">
            <i class="fa fa-fw fa-home" ></i>
            <span>Home</span>
        
          </a>
        
        </li>

         <li class="treeview">
          <a href="/admin/dashboard">
            <i class="fa fa-fw fa-dashboard " ></i>
            <span>Dashboard</span>
        
          </a>
        
        </li>
        

        <li class="header" style="font-size: 15px;">Management</li>

         <li class="treeview  active menu-open">
          <a href="/admin/product">
            <i class="fa fa-fw fa-shopping-bag"></i>
            <span>Product</span>
        
          </a>
        
        </li>

         <li class="treeview">
          <a href="/admin/order">
            <i class="fa fa-th-list"></i>
            <span>Order List</span>
        
          </a>
        
        </li>
        

       
      
  </aside>

<div class="content-wrapper" style="background-color: white">
  
    <!-- ====================== Main ===========================  -->

    <section class="content" style="position: relative;bottom: 20px">
     <div class="row">
        <div class="col-xs-16" > 
     
          <h1 style="position: relative;bottom: 5px;left: 15px;">Add Product</h1>
         
     
          <br><br>
          <div class="col-xs-12" >
            
             <form action="/admin/product/addproduct" method="post" enctype="multipart/form-data" onsubmit="return confirm('Confirm?')">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label class="col-sm-2 control-label">Choose Image:</label>

            <input type="file" name="photo" required >

            <br>
            <label class="col-sm-12 control-label">Product Code: </label><br>
            <div class="col-sm-3">
              <input type="text" class="form-control " maxlength="64"  name="Code" id="Code" required>
              </div>
            <br><br><br>

            <label class="col-sm-12 control-label">Product Name: </label><br>
            <div class="col-sm-6">
              <input type="text" class="form-control " maxlength="64"  name="Name" id="Name" required>
          </div>
            <br> <br><br>

            <label class="col-sm-12 control-label">Product Detail:</label> <br>
            <div class="col-sm-6">
            <textarea name = "Detail" id="Detail" type="text" class="form-control"
                   style="border-radius: 3px;resize:none;height: 100px" required></textarea>
         
            </div>

            <br> <br><br><br> <br><br>
            <label class="col-sm-12 control-label">Brand: </label> <br>
            <div class="col-sm-3">
            <input type="text" class="form-control " maxlength="64"  name="brand" id="brand" required>
         
            </div>
            <br> <br><br>
            
             <label class="col-sm-12 control-label">Price: </label> <br>
            <div class="col-sm-3">
            <input type="text" class="form-control " maxlength="64"  name="Price" id="Price" required>
            </div>
            <br><br><br>
            <button class="btn btn-danger btn-flat" name="action" id="action" type= "submit" style="background-color: #00a65a;border-color: #00a65a">Save</button>
             <a href="/admin/product">
              <button class="btn btn-danger btn-flat" name="action" id="action" type="button">Cancel
              </button></a>
          </form>




        </div>
      </div>
    </section>
    
</div>



  <footer class="main-footer"">
    <div class="pull-right hidden-xs"></div>
      <strong>Copyright &copy; 2017</strong><a> All rights reserved.</a>
  </footer>   

  <div class="control-sidebar-bg"></div>

 </div>

<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/plugins/fastclick/fastclick.js"></script>
<script src="/dist/js/app.min.js"></script>
<script src="/dist/js/demo.js"></script>

</body>
</html>