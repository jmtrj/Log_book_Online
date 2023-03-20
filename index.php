
<?php 
session_start();
include 'conn.php';


 ?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AEON</title>

  <!-- Google Font: Source Sans Pro -->
 
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="admin/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="admin/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  
</head>
<body>

<?php 
include 'validation.php';
 ?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-6">

              <div class="card card-info">
                <div class="card-header">
                <h3 class="card-title">EMPLOYEE LOGBOOK</h3>
                </div>
              <!-- /.card-header -->
                <div class="card-body">
                    <div style="padding-top: 100px;"> </div>
                    <form method="POST" action="function.php">
                       <div class="form-group">
                            <label>EMPLOYEE LIST</label>
                            <select class="form-control select2bs4" name="Id" style="width: 100%;" required>
                              <option value="" hidden>CHOOSE</option>
                               <?php $sql = "SELECT * FROM `employeelist` where  Status ='Active' ";$query = $conn->query($sql); while($prow = $query->fetch_assoc()){ echo "<option value='".$prow['Id']."'>".$prow['Firstname']." ".$prow['Lastname']."</option>"; } ?>
                            </select>
                      </div>
                          <div style="padding-top: 100px;"> </div>
                        <div class="form-group">

                            <button type="submit" name="Timein" class="btn btn-outline-primary btn-block"><i class="fa fa-clock"></i> Time In</button>
                        </div>
                         <div class="form-group">

                            <button type="submit" name="Timeout" class="btn btn-outline-danger btn-block"><i class="fa fa-clock"></i>  Time Out</button>
                        </div>
                        </form>
                </div>
              </div>
           </div>

            <div class="col-6">

              <div class="card card-info">
                <div class="card-header">
                <h3 class="card-title">ATTENDANCE OF EMPLOYEES EVERY DAY</h3>
                </div>
              <!-- /.card-header -->
               <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                    <th>Date</th>
                    <th>Type</th>
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




  <script src="admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="admin/plugins/jszip/jszip.min.js"></script>
  <script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="admin/dist/js/adminlte.min.js"></script>
 
 <script src="admin/plugins/select2/js/select2.full.min.js"></script>
 
<script src="admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="admin/plugins/moment/moment.min.js"></script>
<script src="admin/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="admin/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="admin/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
  
</script>
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
          'url': 'data.php',
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [5]
          },

        ]
      });
    });


</script>




</body>
</html>