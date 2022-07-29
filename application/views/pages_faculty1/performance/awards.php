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
                        <h4 class="card-title mb-1">Faculty Outstanding Achievements/Awards</h4>
                    </div>

                    <div class="ms-auto">

                        <!-- Add user modal Button -->
                        <!-- <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modal1">
                            Add Faculty Award
                        </button> -->


                        <!-- add attendance -->

                        <!-- modal1 -->
                        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Attendance in Relevant Faculty Development Program</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body" style="background: #F2F2F2" ;>
                                        <form class="form-horizontal" action="index.html" id="login_id">
                                            <div class="modal-body">
                                                <div class="col">

                                                    <div class="card">
                                                        <div class="card-header bg-transparent border-bottom text-uppercase">
                                                            Employee Details
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
                                                                        <span>Seminars/ Webinars, Fora/Conferences Attended</span>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- card body -->
                                                        <div class="card-body">
                                                            <div class="col col-md-12" id="cards">
                                                                <div class="row  align-items-start col">
                                                                    <div class="input-group  col mb-5 ">
                                                                        <div class="input-group">
                                                                            <label for="">Awards of distinction received in recognition of achievement in relevant areas of specialization/profession and/or assignment of faculty concerned</label>
                                                                            <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row  align-items-start col">
                                                                    <div class="input-group  col mb-5 ">
                                                                        <div class="input-group">
                                                                            <label for="">Award Giving Body</label>
                                                                            <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-md-12 mb-5 ">
                                                                        <div class="input-group">
                                                                            <label for="">Description of Supporting Documents Submitted (MOA/MOU, Certificate of Recognitions/Appreciations)</label>
                                                                            <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label> Level</label>
                                                                        <div class="input-group  mb-3">
                                                                            <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                                            <select class="form-control" id="option-startView" name="startView">
                                                                                <option selected>Choose...</i></option>
                                                                                <option value="1">Workshop</option>
                                                                                <option value="2">Planning</option>
                                                                                <option value="2">Webinar</option>
                                                                                <option value="2">Conference</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label> Venue</label>
                                                                        <div class="input-group mb-3">
                                                                            <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                                            <select class="form-control" id="option-startView" name="startView">
                                                                                <option selected>Choose...</i></option>
                                                                                <option value="1">Technical</option>
                                                                                <option value="2">Professional Skills/Technical</option>
                                                                                <option value="2">Local</option>
                                                                                <option value="2">Skills/Technical</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-4 mb-3">
                                                                        <label>Date of Award</label>
                                                                        <div class="input-group" id="datepicker5">
                                                                            <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker5' data-provide="datepicker" data-date-autoclose="true">
                                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                        </div><!-- input-group -->
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

                                <h4 class="card-title mb-2">Faculty Achievements </h4>
                                <table id="datatable-buttons" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width:50%">Awards of Distinction Received</th>
                                            <th style="width:10%">Classification</th>
                                            <th style="width:10%">Level</th>
                                            <th style="width:10%">Status</th>
                                            <th style="width:20%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:30%">Plaque of Appreciation</td>
                                            <td style="width:10%">Research</td>
                                            <td style="width:10%">Regional</td>
                                            <td style="width:10%">Approved</td>
                                            <td style="width:20%">
                                                <button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modal2">view</button>
                                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">edit</button>
                                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:30%">Plaque of Appreciation</td>
                                            <td style="width:10%">Research</td>
                                            <td style="width:10%">Regional</td>
                                            <td style="width:10%">Pending</td>
                                            <td style="width:20%">
                                                <button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modal2">view</button>
                                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">edit</button>
                                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:30%">Plaque of Appreciation</td>
                                            <td style="width:10%">Research</td>
                                            <td style="width:10%">Regional</td>
                                            <td style="width:10%">Approved</td>
                                            <td style="width:20%">
                                                <button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modal2">view</button>
                                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">edit</button>
                                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:30%">Plaque of Appreciation</td>
                                            <td style="width:10%">Research</td>
                                            <td style="width:10%">Regional</td>
                                            <td style="width:10%">Approved</td>
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
                                                <h5 class="modal-title" id="exampleModalScrollableTitle">Attendance in Relevant Faculty Development Program</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body" style="background: #F2F2F2" ;>
                                                <form class="form-horizontal" action="index.html" id="login_id">
                                                    <div class="modal-body">
                                                        <div class="col">

                                                            <div class="card">
                                                                <div class="card-header bg-transparent border-bottom text-uppercase">
                                                                    Employee Details
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">

                                                                        <div class="col">
                                                                            <div class="row  align-items-start ">
                                                                                <div class="mb-3"></div>
                                                                                <div class="input-group col mb-3 ">
                                                                                    <div class="input-group">
                                                                                        <label for="">First name</label>
                                                                                        <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="Joanna Marie ">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-group col mb-3 ">
                                                                                    <div class="input-group">
                                                                                        <label for="">Middle name</label>
                                                                                        <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;" value="DC">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-group col mb-3 ">
                                                                                    <div class="input-group">
                                                                                        <label for="">Last name</label>
                                                                                        <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;" value="Oliquino">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-group  col mb-3 ">
                                                                                    <div class="input-group">
                                                                                        <label for="">Suffix</label>
                                                                                        <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;" value="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row  align-items-start col">

                                                                                <div class="input-group  col mb-3 ">
                                                                                    <div class="input-group">
                                                                                        <label for="">Department</label>
                                                                                        <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;" value="PUPQC">
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
                                                                                <span>Seminars/ Webinars, Fora/Conferences Attended</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- card body -->
                                                                <div class="card-body">
                                                                    <div class="col col-md-12" id="cards">
                                                                        <div class="row  align-items-start col">
                                                                            <div class="input-group  col mb-5 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Awards of distinction received in recognition of achievement in relevant areas of specialization/profession and/or assignment of faculty concerned</label>
                                                                                    <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;" value="PUPQC">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row  align-items-start col">
                                                                            <div class="input-group  col mb-5 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Award Giving Body</label>
                                                                                    <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;" value="PUPQC">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row ">
                                                                            <div class="col col-md-12 mb-5 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Description of Supporting Documents Submitted (MOA/MOU, Certificate of Recognitions/Appreciations)</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="Understanding SOGIE: Knowing the Difference, Make All the Difference">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <label> Level</label>
                                                                                <div class="input-group  mb-3">
                                                                                    <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                                                    <select class="form-control" id="option-startView" name="startView">
                                                                                        <option>Choose...</i></option>
                                                                                        <option selected value="1">Workshop</option>
                                                                                        <option value="2">Planning</option>
                                                                                        <option value="2">Webinar</option>
                                                                                        <option value="2">Conference</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <label> Venue</label>
                                                                                <div class="input-group mb-3">
                                                                                    <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                                                    <select class="form-control" id="option-startView" name="startView">
                                                                                        <option>Choose...</i></option>
                                                                                        <option selected value="1">Technical</option>
                                                                                        <option value="2">Professional Skills/Technical</option>
                                                                                        <option value="2">Local</option>
                                                                                        <option value="2">Skills/Technical</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-md-4 mb-3">
                                                                                <label>Date of Award</label>
                                                                                <div class="input-group" id="datepicker5">
                                                                                    <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker5' data-provide="datepicker" data-date-autoclose="true">
                                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                                </div><!-- input-group -->
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
                                                <!-- <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Submit</button> -->
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