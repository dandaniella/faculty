<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card ">
                        <div class="card-header row ">
                            <div class="card-title col-sm-6">
                                <span>User Account</span>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <button type="button" class="btn btn-primary float-sm-right" data-toggle="modal" data-target="#exampleModal">
                                    &nbsp &nbsp &nbsp &nbsp Add user &nbsp &nbsp &nbsp &nbsp
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
									<tr>
										<th rowspan="2">ID</th>
										<th rowspan="2">Profile Picture</th>
										<th colspan="3" class="text-center">Users Fullname</th>
										<th rowspan="2">Address</th>
										<th rowspan="2">Zip Code</th>
										<th rowspan="2">Civil Status</th>
										<th rowspan="2">Birthday</th>
										<th rowspan="2">ID presented</th>
										<th rowspan="2">ID number</th>
										<th rowspan="2">Contact #</th>
										<th rowspan="2">Created by</th>
										<th rowspan="2">Updated by</th>
				
                                     
										
										
									</tr>
                                    <tr>
                                     
                                      
                                        <th>Firstname</th>
                                        <th>Middlename</th>
										<th>Lastname</th>
										
                                    </tr>
									
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 4.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td> 4</td>
                                        <td>X</td>
										<td>X</td>
										<td>X</td>
										<td>X</td>
										<td>X</td>
										<td>X</td>
										<td>X</td>
										<td>X</td>
										<td>X</td>
										<td>X</td>
                                    </tr>
                                   
                            </table>


                            <!-- <select class="js-example-basic-single" name="state">
                                <option value="AL">Alabama</option>
                                ...
                                <option value="WY">Wyoming</option>
                            </select> -->
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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Add User</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- modal body  -->
                    <div class="modal-body">
                        <div class="container-fluid col-12">

                            <form method="post" id="form_id" name="form_id">
                                <div class="row">
                                    <div class="input-group col-md-6 mb-4">
                                        <input type="email" class="form-control" placeholder="Email" id="username" name="username">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group col-md-6 mb-4">
                                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-group input-group col-md-4">
                                        <div class="form-group">
                                            <label for="">username</label>
                                            <input type="email" class="form-control" id="username" name="username" style="width: 100%;">
                                        </div>
                                    </div>
                                    <div class=" col-md-4 mb-10">
                                        <div class="form-group">
                                            <label for="sex">user role</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">--user role--</option>
                                                <option>Pawn Broker</option>
                                                <option>Website Manager</option>
                                                <option>Mangager</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="sex">sex</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">-- sex --</option>
                                                <option>Pawn Broker</option>
                                                <option>Website Manager</option>
                                                <option>Mangager</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-group input-group col-md-4 mb-4">
                                        <div class="form-group ">
                                            <label for="validationServer01">Given name</label>
                                            <input type="email" class="form-control" id="username" name="username">
                                        </div>
                                    </div>
                                    <div class="input-group input-group col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="validationServer01">Middle name</label>
                                            <input type="email" class="form-control" id="username" name="username">
                                        </div>
                                    </div>
                                    <div class="input-group input-group col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="validationServer01">Surname</label>
                                            <input type="email" class="form-control" id="username" name="username">
                                        </div>
                                    </div>



                            </form>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                    <!-- ./modal body  -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
