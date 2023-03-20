<!-- Add -->
<div class="modal fade" id="importtmt">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">

                <h4 class="modal-title"> ADD DATA</h4>
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              	 <span aria-hidden="true">&times;</span></button>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="function.php"  enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="description" class="col-sm-3 control-label">Firstname</label>

                  	<div class="col-sm-12">
                    	<input type="text" class="form-control" id="Firstname" name="Firstname" required>
                  	</div>
                  </div>



                   <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Lastname" name="Lastname" required>
                    </div>
                  </div>


                   <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="Status" required>
                                <option value="" hidden>CHOOSE</option>
                                <option value="ACTIVE">ACTIVE</option>
                                 <option value="INACTIVE">INACTIVE</option>
                            </select>
                        </div>
                  </div>



                   <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="Type" required>
                                <option value=""  hidden >CHOOSE</option>
                                <option value="Employee">Employee</option>
                                 <option value="Visitor">Visitior</option>
                            </select>
                        </div>
                  </div>
               
               
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="Employeeadd"><i class="fa fa-save"></i>Submit</button>
            	</form>
          	</div>
        </div>
    </div>
</div>



<!-- Add -->
<div class="modal fade" id="edittmt">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Import tmt data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="function.php"  enctype="multipart/form-data">
                   <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Firstnames" name="Firstname" required>
                         <input type="text" class="form-control" hidden id="Id" name="Id" required>
                    </div>
                  </div>



                   <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Lastnames" name="Lastname" required>
                    </div>
                  </div>


                   <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-12">
                            <select class="form-control" id="Status" name="Status" required>
                                <option value="" hidden>CHOOSE</option>
                                <option value="ACTIVE">ACTIVE</option>
                                 <option value="INACTIVE">INACTIVE</option>
                            </select>
                        </div>
                  </div>



                   <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-12">
                            <select class="form-control" id="Type" name="Type" required>
                                <option value=""  hidden >CHOOSE</option>
                                <option value="Employee">Employee</option>
                                 <option value="Visitor">Visitior</option>
                            </select>
                        </div>
                  </div>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="employeedit"><i class="fa fa-save"></i> Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>



