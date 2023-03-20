<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
 <?php include 'includes/menubar.php'; ?>
<?php include 'includes/navbar.php'; ?>
  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>RAFFLE ENTRIES LIST</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">DAILY TIME RECORD</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->



    <section class="content">
      <div class="container-fluid">

         <div class="row">
          <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                   <?php
                $sql = "SELECT * FROM employeelist";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

                <p>Total Employees</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="tmt.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        
          
        </div>




        <div class="row">
          <div class="col-12">
        

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Employee List / Visitor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Firtname</th>
                    <th>Lastname</th>
                    <th>Status</th>
                    <th>Type</th>
                   
                  
                  </tr>
                  </thead>
                  <tbody>

                       <?php
                    $sql = "SELECT * FROM employeelist";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                        <tr>
                          <td><?php echo $row['Firstname']; ?></td>
                          <td><?php echo $row['Lastname']; ?></td>
                          <td><?php echo $row['Status']; ?></td>
                          <td><?php echo $row['Type']; ?></td>
                        </tr>
                      <?php
                    }
                  ?>
                  
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 <?php include 'includes/script.php'; ?>