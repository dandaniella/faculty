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
                        <h4 class="card-title mb-1">Extension Program and Expert Service Rendered</h4>
                    </div>

                    <div class="ms-auto">

                        <!-- Add user modal Button -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modal1">
                            Add Program
                        </button>

                        <!-- add attendance -->

                        <!-- modal1 -->
                        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle"> Expert Service Rendered</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="background: #F2F2F2" ;>
                                        <form class="form-horizontal" action="index.html" id="login_id">
                                            <div class="modal-body">


                                                <div class="col">
                                                    <div class="card">
                                                        <div class=" card-header bg-transparent border-bottom text-uppercase">

                                                            <div class="row">
                                                                <div class="d-sm-flex flex-wrap">
                                                                    <div>
                                                                        <span>Expert Service Rendered Information</span>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- card body -->
                                                        <div class="card-body">
                                                            <div class="col col-md-12" id="cards">

                                                                <div class="col mb-3">
                                                                    <label> Classification of expert services rendered as a consultant /expert</label>
                                                                    <div class="input-group  mb-3">
                                                                        <select class="form-control" id="option-startView" name="startView">
                                                                            <option selected>Choose...</i></option>
                                                                            <option value="1">Professional</option>
                                                                            <option value="2">Education</option>
                                                                            <option value="2">Organizational Development</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col col-md-12 mb-3 ">
                                                                    <div class="input-group">
                                                                        <label for="">Title of Expert Services Rendered</label>
                                                                        <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                    </div>
                                                                </div>
                                                                <div class="col col-md-12 mb-3 ">
                                                                    <div class="input-group">
                                                                        <label for="">Description of Supporting Documents Submitted (MOA/MOU, Certificate of Recognitions/Appreciations)</label>
                                                                        <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col mb-3">
                                                                        <label> Category of Expert Services</label>
                                                                        <div class="input-group  mb-3">
                                                                            <select class="form-control" id="option-startView" name="startView">
                                                                                <option selected>Choose...</i></option>
                                                                                <option value="1">Facilitator</option>
                                                                                <option value="2">Academic</option>
                                                                                <option value="2">National</option>
                                                                                <option value="2">Organizational Development</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col col-md-12 mb-3 ">
                                                                        <div class="input-group">
                                                                            <label for="">Partner Agency</label>
                                                                            <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                        </div>
                                                                    </div>



                                                                </div>

                                                                <div class="col col-md-12 " id="add_educ">
                                                                    <div class="row mb-4">


                                                                        <div class="col  mb-3 ">
                                                                            <div class="input-group">
                                                                                <label for="">Level</label>
                                                                                <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col  mb-3 ">
                                                                            <div class="input-group">
                                                                                <label for="">Venue</label>
                                                                                <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col mb-3">
                                                                            <label>Date started</label>
                                                                            <div class="input-group" id="datepicker3">
                                                                                <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker3' data-provide="datepicker" data-date-autoclose="true">

                                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                            </div><!-- input-group -->
                                                                        </div>
                                                                        <div class="col mb-3">
                                                                            <label>Date ended</label>
                                                                            <div class="input-group" id="datepicker4">
                                                                                <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker4' data-provide="datepicker" data-date-autoclose="true">

                                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                            </div><!-- input-group -->
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

                                <h4 class="card-title mb-2">Attendance</h4>
                                <table id="datatable-buttons" class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th style="width:50%">Title of Expert Services Rendered</th>
                                            <th style="width:10%">Classification of expert services rendered</th>
                                            <th style="width:10%">Inclusive Date</th>
                                            <th style="width:10%">Status</th>
                                            <th style="width:20%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:50%">The 2022 Curriculum Development Revision: Advancing the NPU Vision through a more Responsive, Nationally Relevant and Internationally Recognized Academic Program</td>
                                            <td style="width:10%">Expert</td>
                                            <td style="width:10%">April/23/2022 to April/23/2022 </td>
                                            <th style="width:10%">Approved</th>
                                            <td style="width:20%">
                                                <button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modal2">view</button>
                                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">edit</button>
                                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:50%">The 2022 Curriculum Development Revision: Advancing the NPU Vision through a more Responsive, Nationally Relevant and Internationally Recognized Academic Program</td>
                                            <td style="width:10%">Expert</td>
                                            <td style="width:10%">April/23/2022 to April/23/2022 </td>
                                            <th style="width:10%">Pending</th>
                                            <td style="width:20%">
                                                <button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modal2">view</button>
                                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">edit</button>
                                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:50%">The 2022 Curriculum Development Revision: Advancing the NPU Vision through a more Responsive, Nationally Relevant and Internationally Recognized Academic Program</td>
                                            <td style="width:10%">Expert</td>
                                            <td style="width:10%">April/23/2022 to April/23/2022 </td>
                                            <th style="width:10%">Approved</th>
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
                                                <h5 class="modal-title" id="exampleModalScrollableTitle"> Expert Service Rendered</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="background: #F2F2F2" ;>
                                                <form class="form-horizontal" action="index.html" id="login_id">
                                                    <div class="modal-body">

                                                        <div class="col">
                                                            <div class="card">
                                                                <div class=" card-header bg-transparent border-bottom text-uppercase">

                                                                    <div class="row">
                                                                        <div class="d-sm-flex flex-wrap">
                                                                            <div>
                                                                                <span>Expert Service Rendered Information</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- card body -->
                                                                <div class="card-body">
                                                                    <div class="col col-md-12" id="cards">
                                                                        <div class="col mb-3">
                                                                            <label> Classification of expert services rendered as a consultant /expert</label>
                                                                            <div class="input-group  mb-3">
                                                                                <select class="form-control" id="option-startView" name="startView">
                                                                                    <option>Choose...</i></option>
                                                                                    <option selected value="1">Expert</option>
                                                                                    <option value="1">Professional</option>
                                                                                    <option value="2">Education</option>
                                                                                    <option value="2">Organizational Development</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col col-md-12 mb-3 ">
                                                                            <div class="input-group">
                                                                                <label for="">Title of Expert Services Rendered</label>
                                                                                <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="The 2022 Curriculum Development Revision: Advancing the NPU Vision through a more Responsive, Nationally Relevant and Internationally Recognized Academic Program">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col col-md-12 mb-3 ">
                                                                            <div class="input-group">
                                                                                <label for="">Description of Supporting Documents Submitted (MOA/MOU, Certificate of Recognitions/Appreciations)</label>
                                                                                <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="Certificate">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row ">
                                                                            <div class="col mb-3">
                                                                                <label> Category of Expert Services</label>
                                                                                <div class="input-group  mb-3">
                                                                                    <select class="form-control" id="option-startView" name="startView">
                                                                                        <option>Choose...</i></option>
                                                                                        <option selected value="1">Facilitator</option>
                                                                                        <option value="2">Academic</option>
                                                                                        <option value="2">National</option>
                                                                                        <option value="2">Organizational Development</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col col-md-12 mb-3 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Partner Agency</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="PUP- MAIN CAMPUS">
                                                                                </div>
                                                                            </div>



                                                                        </div>

                                                                        <div class="col col-md-12 " id="add_educ">
                                                                            <div class="row mb-4">


                                                                                <div class="col  mb-3 ">
                                                                                    <div class="input-group">
                                                                                        <label for="">Level</label>
                                                                                        <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="Local">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col  mb-3 ">
                                                                                    <div class="input-group">
                                                                                        <label for="">Venue</label>
                                                                                        <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;" value="Zoom Meeting">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col mb-3">
                                                                                    <label>Date started</label>
                                                                                    <div class="input-group" id="datepicker3">
                                                                                        <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker3' data-provide="datepicker" data-date-autoclose="true">

                                                                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                                    </div><!-- input-group -->
                                                                                </div>
                                                                                <div class="col mb-3">
                                                                                    <label>Date ended</label>
                                                                                    <div class="input-group" id="datepicker4">
                                                                                        <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker4' data-provide="datepicker" data-date-autoclose="true">

                                                                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                                    </div><!-- input-group -->
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