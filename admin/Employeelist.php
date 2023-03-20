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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active"> EMPLOYEE LIST</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
        

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> <a href="#importtmt" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-upload"></i> ADD DATA</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
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

  <script>

 $(document).ready(function() {
      $('#example').DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
          'url': 'Employeelistdata.php',
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [4]
          },

        ]
      });
    });


$(function(){

$(document).on('click','.edittmt', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    $('#edittmt').modal('show');
    getRow(id);
  });


});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'Employeelistrow.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
     $('#Id').val(response.Id);
     $('#Firstnames').val(response.Firstname);
     $('#Lastnames').val(response.Lastname);
     $('#Status').val(response.Status);
     $('#Type').val(response.Type);
     

    }
  });
}
</script>



 <?php include 'includes/employeemodal.php'; ?>

 <?php include 'includes/script.php'; ?>