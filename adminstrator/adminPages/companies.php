<?php
    require '../../app/action.php';
    require '../../components/adminAside.php';
    require '../../components/adminNavbar.php';
    require '../../components/adminFooter.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tanzania ICT Awards | Companies</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 300px;
  top: 0;
  width: 50%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.errorMsg{border:1px solid red; }
.message{color: red; font-weight:bold; }

</style>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php echo $adminNav ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php echo $aside ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Companies</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./admnHome.php">Home</a></li>
              <li class="breadcrumb-item active">Companies</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <a style="cursor:pointer" id="myBtn" class="nav-link">New Company</a>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card-body table-responsive p-0">
              <table id="table_id" class="display table table-hover text-nowrap">
                <thead>
                  <?php 
                  $sql = "SELECT * FROM wapendekezwa ORDER BY id DESC";
                  $results = $con->query($sql);

                    if ($results->num_rows > 0) {
                      echo '<tr>
                      <th>No</th>
                      <th>Company Name</th>
                      <th>Email Address</th>
                      <th>Phone</th>
                      <th>Type</th>
                      <th>Action</th>
                    </tr>';
                    }
                  ?>
                </thead>
                <tbody>
                  <?php 
                    $NO = 1;
                    $more = "<select>
                    <option>Select</option>
                    <option>Update</option>
                    <option>Delete</option>
                    <option>Disable</option>
                    </select>"; 
                    if ($results->num_rows > 0) {
                      while($row = $results->fetch_assoc()) {
                        $compnyName = $row["companyName"];
                        $address = $row["companyAddress"];
                        $contacts=$row["contact"];
                        $normineeTypeID=$row["type"];
                        
                        $nomineeTypeName = "SELECT name FROM normineeType WHERE id = '$normineeTypeID'";
                        $normineeName = $con->query($nomineeTypeName);
                        if($normineeName->num_rows > 0){
                          while($normineeNames = $normineeName->fetch_assoc()){
                            $Nnamee = $normineeNames["name"];
                          }
                        }
                        echo "<tr><td>" . $NO. "</td><td>". $compnyName."</td><td>". $address."</td><td>".$contacts."</td><td>". $Nnamee."</td><td><a>$more</a></td>";
                        $NO++;
                      }
                    } else {
                      echo "<tr><td>No Company registered</td></tr>";
                    }
                  ?>
                  </tr>
                </tbody>
              </table>
              
            <!-- /.card-body -->
          </div>
      </div><!--/. container-fluid -->

      <!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new Company</p>
      <form action="../../app/action.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Company Name" name="cname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="cemail" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="phone" class="form-control" placeholder="Phone Number" name="cphone" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <select class="form-control" name="type">
                <option value="">Select Type</option>
                <?php
                    $records = mysqli_query($con, "SELECT * From normineeType");
                    while($data = mysqli_fetch_array($records)){
                        echo "<option value='". $data['id'] ."'>" .$data['name'] ."</option>";
                    }
                ?> 
            </select>
        </div>
        <div class="row">
          
          </div>
          <!-- /.col -->
          <div class="col-12">
            <input type="submit" name="RegisterCompany" value="RegisterCompany" class="btn btn-primary btn-block" />
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>

</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php echo $adminFooter;?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
