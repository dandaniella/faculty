<div class="d-flex">

    <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <!-- <img class="rounded-circle header-profile-user" src="<?php echo base_url('assets') ?>/images/users/avatar-1.jpg" alt="Header Avatar"> -->
            <i class="fas fa-user-circle"></i>
            <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
            <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
            <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
            <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
        </div>
    </div>

    <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
            <i class="bx bx-cog bx-spin"></i>
        </button>
    </div>

</div>
</div>
</header>


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content" style="padding:calc(20px + 24px) calc(24px / 2) 60px calc(24px / 2);">
        <div class="container-fluid">
            <div class="row">
                <div class="d-sm-flex flex-wrap mb-4">
                    <div class="col">
                        <h4 class="card-title mb-1"> Ongoing Advanced/ Professional Study </h4>
                    </div>

                    <div class="ms-auto">

                        <!-- Add user modal Button -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modal1">
                            Add Faculty Studies
                        </button>


                        <!-- add attendance -->

                        <!-- modal1 -->
                        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Add Faculty Ongoing Advanced/ Professional Study </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="background: #F2F2F2" ;>
                                        <form class="form-horizontal" action="index.html" id="login_id">
                                            <div class="modal-body">
                                                <div class="col">

                                                    <div class="card">
                                                        <div class="card-header bg-transparent border-bottom text-uppercase">
                                                            Employee
                                                        </div>
                                                        <div class="card-body">

                                                            <div class="row">

                                                                <div class="col">
                                                                    <div class="row  align-items-start ">
                                                                        <div class="mb-3"></div>
                                                                        <div class="input-group col mb-3 ">
                                                                            <div class="input-group">
                                                                                <label for="">First name</label>
                                                                                <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-group col mb-3 ">
                                                                            <div class="input-group">
                                                                                <label for="">Middle name</label>
                                                                                <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-group col mb-3 ">
                                                                            <div class="input-group">
                                                                                <label for="">Last name</label>
                                                                                <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-group  col mb-3 ">
                                                                            <div class="input-group">
                                                                                <label for="">Suffix</label>
                                                                                <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row  align-items-start col">

                                                                        <div class="input-group  col mb-3 ">
                                                                            <div class="input-group">
                                                                                <label for="">Department</label>
                                                                                <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="card-footer bg-transparent border-top text-muted">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="card">
                                                        <div class=" card-header bg-transparent border-bottom text-uppercase">

                                                            <div class="row">
                                                                <div class="d-sm-flex flex-wrap">
                                                                    <div>
                                                                        <span>School Information</span>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- card body -->
                                                        <div class="card-body">
                                                            <div class="col col-md-12" id="cards">
                                                                <div class="row ">
                                                                    <div class="col col-md-12 mb-3 ">
                                                                        <div class="input-group">
                                                                            <label for="">School Name</label>
                                                                            <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col col-md-12 mb-3 ">
                                                                        <div class="input-group">
                                                                            <label for="">Program Accreditation Level/ World Ranking/ COE or COD*</label>
                                                                            <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="card-footer bg-transparent border-top text-muted">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="card">
                                                        <div class=" card-header bg-transparent border-bottom text-uppercase">

                                                            <div class="row">
                                                                <div class="d-sm-flex flex-wrap">
                                                                    <div>
                                                                        <span>Means of Educational Support</span>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- card body -->
                                                        <div class="card-body">
                                                            <div class="col col-md-12" id="cards">
                                                                <div class="row ">
                                                                    <div class="col col-md-12 mb-3 ">
                                                                        <div class="input-group">
                                                                            <label for="">Type of Support</label>
                                                                            <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col col-md-12 mb-3 ">
                                                                        <div class="input-group">
                                                                            <label for="">Name of Sponsor/ Agency/ Organization</label>
                                                                            <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col col-md-12 mb-3 ">
                                                                        <div class="input-group">
                                                                            <label for="">Amount </label>
                                                                            <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="card-footer bg-transparent border-top text-muted">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="card">
                                                        <div class=" card-header bg-transparent border-bottom text-uppercase">

                                                            <div class="row">
                                                                <div class="d-sm-flex flex-wrap">
                                                                    <div>
                                                                        <span>Other Information</span>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- card body -->
                                                        <div class="card-body">
                                                            <div class="col col-md-12" id="cards">
                                                                <div class="row ">

                                                                    <div class="col mb-3">
                                                                        <label>Date started</label>
                                                                        <div class="input-group" id="datepicker1">
                                                                            <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker" data-date-autoclose="true" value="23/04/2022">

                                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                        </div><!-- input-group -->
                                                                    </div>
                                                                    <div class="col mb-3">
                                                                        <label>Date Ended</label>
                                                                        <div class="input-group" id="datepicker2">
                                                                            <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true" value="23/04/2022">

                                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                        </div><!-- input-group -->
                                                                    </div>

                                                                    <div class="col mb-3 ">
                                                                        <div class="input-group">
                                                                            <label for="">Status</label>
                                                                            <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                        </div>
                                                                    </div>



                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col mb-3 ">
                                                                        <div class="input-group">
                                                                            <label for="">Number of Units earned </label>
                                                                            <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col mb-3 ">
                                                                        <div class="input-group">
                                                                            <label for="">Number of units currently enrolled </label>
                                                                            <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col mb-3 ">
                                                                        <div class="input-group">
                                                                            <label for="">Description of Supporting Documents </label>
                                                                            <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer bg-transparent border-top text-muted">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    </form>

                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>


                </div>

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-2">Professional Studies</h4>
                                <table id="datatable-buttons" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width:10%">Department</th>
                                            <th style="width:20%">Name</th>
                                            <th style="width:30%">Degree/Program</th>
                                            <th style="width:10%">School</th>
                                            <th style="width:10%">Status</th>
                                            <th style="width:20%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:10%">N/A</td>
                                            <td style="width:20%">Cecogo, Nieva M</td>
                                            <td style="width:30%">PhD in Educational Leadership and Management Program Major in Educational Management</td>
                                            <td style="width:10%">Pacific Intercontinental Collge</td>
                                            <td style="width:10%">On going</td>
                                            <td style="width:20%">
                                                <button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modal2">view</button>
                                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">edit</button>
                                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- modal2 -->
                                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalScrollableTitle">Faculty Ongoing Advanced/ Professional Study </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="background: #F2F2F2" ;>
                                                <form class="form-horizontal" action="index.html" id="login_id">
                                                    <div class="modal-body">
                                                        <div class="col">

                                                            <div class="card">
                                                                <div class="card-header bg-transparent border-bottom text-uppercase">
                                                                    Employee
                                                                </div>
                                                                <div class="card-body">

                                                                    <div class="row">

                                                                        <div class="col">
                                                                            <div class="row  align-items-start ">
                                                                                <div class="mb-3"></div>
                                                                                <div class="input-group col mb-3 ">
                                                                                    <div class="input-group">
                                                                                        <label for="">First name</label>
                                                                                        <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="Nieva ">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-group col mb-3 ">
                                                                                    <div class="input-group">
                                                                                        <label for="">Middle name</label>
                                                                                        <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;" value="M.">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-group col mb-3 ">
                                                                                    <div class="input-group">
                                                                                        <label for="">Last name</label>
                                                                                        <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;" value="Cecogo">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-group  col mb-3 ">
                                                                                    <div class="input-group">
                                                                                        <label for="">Suffix</label>
                                                                                        <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row  align-items-start col">

                                                                                <div class="input-group  col mb-3 ">
                                                                                    <div class="input-group">
                                                                                        <label for="">Department</label>
                                                                                        <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;" value="N/A">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row  align-items-start col">

                                                                                <div class="input-group  col mb-3 ">
                                                                                    <div class="input-group">
                                                                                        <label for="">Degree/Program</label>
                                                                                        <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;" value="PhD in Educational Leadership and Management Program Major  in Educational Management">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-footer bg-transparent border-top text-muted">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="card">
                                                                <div class=" card-header bg-transparent border-bottom text-uppercase">

                                                                    <div class="row">
                                                                        <div class="d-sm-flex flex-wrap">
                                                                            <div>
                                                                                <span>School Information</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- card body -->
                                                                <div class="card-body">
                                                                    <div class="col col-md-12" id="cards">
                                                                        <div class="row ">
                                                                            <div class="col col-md-12 mb-3 ">
                                                                                <div class="input-group">
                                                                                    <label for="">School Name</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="Pacific Intercontinental Collge">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col col-md-12 mb-3 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Program Accreditation Level/ World Ranking/ COE or COD*</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-footer bg-transparent border-top text-muted">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="card">
                                                                <div class=" card-header bg-transparent border-bottom text-uppercase">

                                                                    <div class="row">
                                                                        <div class="d-sm-flex flex-wrap">
                                                                            <div>
                                                                                <span>Means of Educational Support</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- card body -->
                                                                <div class="card-body">
                                                                    <div class="col col-md-12" id="cards">
                                                                        <div class="row ">
                                                                            <div class="col col-md-12 mb-3 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Type of Support</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="N/A">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col col-md-12 mb-3 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Name of Sponsor/ Agency/ Organization</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="Personal">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col col-md-12 mb-3 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Amount </label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="17,500 per tri-mester">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-footer bg-transparent border-top text-muted">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="card">
                                                                <div class=" card-header bg-transparent border-bottom text-uppercase">

                                                                    <div class="row">
                                                                        <div class="d-sm-flex flex-wrap">
                                                                            <div>
                                                                                <span>Other Information</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- card body -->
                                                                <div class="card-body">
                                                                    <div class="col col-md-12" id="cards">
                                                                        <div class="row ">

                                                                            <div class="col mb-3">
                                                                                <label>Date started</label>
                                                                                <div class="input-group" id="datepicker4">
                                                                                    <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker4' data-provide="datepicker" data-date-autoclose="true" value="25 Jun, 2022">

                                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                                </div><!-- input-group -->
                                                                            </div>
                                                                            <div class="col mb-3">
                                                                                <label>Date Ended</label>
                                                                                <div class="input-group" id="datepicker5">
                                                                                    <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker5' data-provide="datepicker" data-date-autoclose="true" value="">

                                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                                </div><!-- input-group -->
                                                                            </div>

                                                                            <div class="col mb-3 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Status</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="On going">
                                                                                </div>
                                                                            </div>



                                                                        </div>
                                                                        <div class="row ">
                                                                            <div class="col mb-3 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Number of Units earned </label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="9">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col mb-3 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Number of units currently enrolled </label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="9">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col mb-3 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Description of Supporting Documents </label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="Permit to Study">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer bg-transparent border-top text-muted">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            </form>

                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->

                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->



            </div> <!-- end row -->
            <!-- end page title -->

        </div>
    </div>


    <!-- End Page-content -->