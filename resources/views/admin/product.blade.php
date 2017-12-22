<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
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
          <a href="#">
            <i class="fa fa-fw fa-shopping-bag"></i>
            <span>Product</span>
        
          </a>
        
        </li>

         <li class="treeview">
          <a href="#">
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
     
          <h1 style="position: relative;bottom: 5px;left: 15px;">Product List</h1>
         
          <div class="col-sm-1">
          <a href="#" style="color: white">
              <button class="btn btn-block btn-success btn-lg" style="bottom: 80px;top: -5px;height: 35px;width: 45px;font-size: 15px">  
              <span class="glyphicon glyphicon-plus"></span>
              </button>
          </a></div>

                    <br><br><br><br>
          <div class="col-xs-12" >
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" >
        <thead>

            <tr>
                <th width="2%">#</th>
                <th width="15%">Product Code</th>
                <th width="50%">Product Name</th>
                <th width="20%">Price</th>
                <th width="20%">Tools</th>
            </tr>
        </thead>
        <tbody>

            <tr>
              <td align="center">1</td>
              <td align="center">11123</td>
              <td align="center">??????</td>
              <td align="center">14900</td>
              <td align="center">
                 <a style="color: white" 
                          href="#">
                            <button type="button" class="btn btn-danger btn-flat" style="background:#f39c12;border-color: #e08e0b;border-radius: 3px;height: 30px;">
                          
                            <span class="glyphicon glyphicon-pencil"></span>
                          </button> </a>

                          <a style="color: white" 
                          href="#">
                          <button type="button" class="btn btn-danger btn-flat" style="border-radius: 3px;height: 30px;" onclick="return confirm('ยืนยันต้องการที่จะลบ ?')">
                            <span class="glyphicon glyphicon-trash"></span> 
                          </button> </a> 
              </td>
                    
            </tr>

        </tbody>
    </table>
    <script>
  $('#example').dataTable( {
    "language": {

       "search":           "",
       "paginate": {
          "previous":     "Previous",
          "next":         "Next",
      },
       "zeroRecords":      "No matching records found",
        "info":             "Showing _START_ to _END_ of _TOTAL_ entries",
        "lengthMenu":       "Showing _MENU_ entries",
    }

  } );
  </script>




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