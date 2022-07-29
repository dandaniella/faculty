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

                    <h4 class="card-title mb-4">PUPQC Faculty Member Profile</h4>

                    <div class="ms-auto">

                        <!-- Add user modal Button -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
                            Edit Profile
                        </button>


                        <!-- Modal add user cred -->

                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Add Faculty Member Profile</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="background: #F2F2F2" ;>
                                        <form class="form-horizontal" action="index.html" id="login_id">
                                            <div class="modal-body">
                                                <div class="col">
                                                    <div class="card">
                                                        <div class="card-header bg-transparent border-bottom text-uppercase">
                                                            Add Faculty Member Profile
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label class="custom-file-label" for="inputGroupFile03">Upload profile</label>
                                                                    <div class="col-md-12">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-4">

                                                                                <img src="<?php echo base_url('assets') ?>/images/pup/faculty.jpg" alt="" class="rounded avatar-lg img-thumbnail " style="object-fit:cover;" id="photo_path_placeholder" name="photo_path_placeholder">
                                                                            </div>
                                                                        </div>

                                                                        <div class="input-group mb-3 col-md-12">

                                                                            <div class="custom-file col">
                                                                                <input type="file" class="custom-file-input" id="profile_pic" name="profile_pic" accept="image/*">

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
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
                                                                    <div class="row  align-items-start col-md-12">
                                                                        <div class="mb-3"></div>
                                                                        <div class="col mb-4">
                                                                            <label>Birth date</label>
                                                                            <div class="input-group" id="datepicker2">
                                                                                <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">

                                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                            </div><!-- input-group -->
                                                                        </div>

                                                                        <div class="col mb-4">
                                                                            <label>Hired date</label>
                                                                            <div class="input-group" id="datepicker2">
                                                                                <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">

                                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                            </div><!-- input-group -->
                                                                        </div>
                                                                        <div class="col  mb-4">
                                                                            <label>Employee Status</label>
                                                                            <div class="input-group col mb-3">
                                                                                <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                                                <select class="form-control" id="option-startView" name="startView">
                                                                                    <option selected>Choose...</i></option>
                                                                                    <option value="1">Regular</option>
                                                                                    <option value="2">Temporary</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col mb-3 col-md-6">
                                                                        <label class="form-label">Program</label>

                                                                        <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." style="width: 100%;">
                                                                            <option value="AK">BTE ICT</option>
                                                                            <option value="HI">BTE Led</option>
                                                                            <option value="CA">BSIT</option>
                                                                            <option value="NV">BSBA - MM</option>
                                                                            <option value="OR">BTE</option>
                                                                            <option value="WA">DOMT</option>

                                                                        </select>
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
                                                        <form action="">


                                                            <div class=" card-header bg-transparent border-bottom text-uppercase">

                                                                <div class="row">
                                                                    <div class="d-sm-flex flex-wrap">
                                                                        <div>
                                                                            <span>Educational Background</span>
                                                                        </div>

                                                                        <div class="ms-auto">
                                                                            <!-- Add user modal Button -->
                                                                            <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" onclick="duplicateForm();">Add degree</button>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row" id="cards">

                                                                    <div class="col col-md-12" id="add_educ">
                                                                        <div class="row  align-items-start ">
                                                                            <div class="col mb-3">
                                                                                <label>Degree</label>
                                                                                <div class="input-group col mb-3">
                                                                                    <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                                                    <select class="form-control" id="option-startView" name="startView">
                                                                                        <option selected>Choose...</i></option>
                                                                                        <option value="1">Bachelor's Degree</option>
                                                                                        <option value="2">Master's Degree</option>
                                                                                        <option value="2">Post-Baccalaureate</option>
                                                                                        <option value="2">Ph.D.</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-group col mb-3 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Program</label>
                                                                                    <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-group col mb-3 ">
                                                                                <div class="input-group">
                                                                                    <label for="">School</label>
                                                                                    <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-group col mb-3 ">
                                                                                <div class="input-group">
                                                                                    <label for="">Year of Attendance</label>
                                                                                    <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-group col mb-3 ">
                                                                                <label for="">Action</label>
                                                                                <div class="input-group">
                                                                                    <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">clear</button>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="card-footer bg-transparent border-top text-muted">

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>


                                                <div class="col">
                                                    <div class="card">
                                                        <div class=" card-header bg-transparent border-bottom text-uppercase">

                                                            <div class="row">
                                                                <div class="d-sm-flex flex-wrap">
                                                                    <div>
                                                                        <span>Membership / Affiliation</span>
                                                                    </div>

                                                                    <div class="ms-auto">
                                                                        <!-- Add user modal Button -->
                                                                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Add Membership/Affiliation</button>

                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row" id="cards">

                                                                <div class="col col-md-12" id="add_educ1">

                                                                    <div class="row  align-items-start ">
                                                                        <div class="input-group col mb-3 ">
                                                                            <div class="input-group">
                                                                                <label for="">Name of the Organization</label>
                                                                                <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col mb-3">
                                                                            <label> Classification</label>
                                                                            <div class="input-group col mb-3">
                                                                                <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                                                <select class="form-control" id="option-startView" name="startView">
                                                                                    <option selected>Choose...</i></option>
                                                                                    <option value="1">Bachelor's Degree</option>
                                                                                    <option value="2">Master's Degree</option>
                                                                                    <option value="2">Post-Baccalaureate</option>
                                                                                    <option value="2">Ph.D.</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col mb-3">
                                                                            <label> Position</label>
                                                                            <div class="input-group col mb-3">
                                                                                <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                                                <select class="form-control" id="option-startView" name="startView">
                                                                                    <option selected>Choose...</i></option>
                                                                                    <option value="1">Bachelor's Degree</option>
                                                                                    <option value="2">Master's Degree</option>
                                                                                    <option value="2">Post-Baccalaureate</option>
                                                                                    <option value="2">Ph.D.</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>


                                                                    </div>

                                                                    <div class="row  align-items-start ">

                                                                        <div class="col mb-3">
                                                                            <label> Level</label>
                                                                            <div class="input-group col mb-3">
                                                                                <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                                                <select class="form-control" id="option-startView" name="startView">
                                                                                    <option selected>Choose...</i></option>
                                                                                    <option value="1">Bachelor's Degree</option>
                                                                                    <option value="2">Master's Degree</option>
                                                                                    <option value="2">Post-Baccalaureate</option>
                                                                                    <option value="2">Ph.D.</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="input-group col mb-3 ">
                                                                            <div class="input-group">
                                                                                <label for="">Organization Address</label>
                                                                                <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-group col mb-3 ">
                                                                            <div class="input-group">
                                                                                <label for="">Inclusive Date</label>
                                                                                <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;">
                                                                            </div>
                                                                        </div>


                                                                    </div>

                                                                    <div class="row  align-items-start ">
                                                                        <div class="input-group col mb-3 col-md-8">
                                                                            <div class="input-group">
                                                                                <label for="">Description of Supporting Documents Submitted (MOA/MOU, Certificate of Recognitions/Appreciations)</label>
                                                                                <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-group col mb-3 float-right">
                                                                            <!-- <label for="">Action</label> -->
                                                                            <div class="input-group">
                                                                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">clear</button>
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


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>

                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                        </div>
                    </div>


                </div>

                <div class="modal-body">
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-transparent border-bottom text-uppercase">
                                Add Faculty Member Profile
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="custom-file-label" for="inputGroupFile03">Upload profile</label>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <div class="mb-4">

                                                    <img src="<?php echo base_url('assets') ?>/images/pup/faculty.jpg" alt="" class=" rounded avatar-lg img-thumbnail " style=" object-fit:cover;" id="photo_path_placeholder" name="photo_path_placeholder">
                                                </div>
                                            </div>

                                            <div class="input-group mb-3 col-md-12">

                                                <div class="custom-file col">
                                                    <input type="file" class="custom-file-input" id="profile_pic" name="profile_pic" accept="image/*">

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-9">
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
                                        <div class="row  align-items-start col-md-12">
                                            <div class="mb-3"></div>
                                            <div class="col mb-4">
                                                <label>Birth date</label>
                                                <div class="input-group" id="datepicker2">
                                                    <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">

                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                </div><!-- input-group -->
                                            </div>

                                            <div class="col mb-4">
                                                <label>Hired date</label>
                                                <div class="input-group" id="datepicker2">
                                                    <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">

                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                </div><!-- input-group -->
                                            </div>
                                            <div class="col  mb-4">
                                                <label>Employee Status</label>
                                                <div class="input-group col mb-3">
                                                    <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                    <select class="form-control" id="option-startView" name="startView">
                                                        <option selected>Choose...</i></option>
                                                        <option value="1">Regular</option>
                                                        <option value="2">Temporary</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col mb-3 col-md-6">
                                            <label class="form-label">Program</label>

                                            <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." style="width: 100%;">
                                                <option value="AK">BTE ICT</option>
                                                <option value="HI">BTE Led</option>
                                                <option value="CA">BSIT</option>
                                                <option value="NV">BSBA - MM</option>
                                                <option value="OR">BTE</option>
                                                <option value="WA">DOMT</option>

                                            </select>
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
                            <form action="">


                                <div class=" card-header bg-transparent border-bottom text-uppercase">

                                    <div class="row">
                                        <div class="d-sm-flex flex-wrap">
                                            <div>
                                                <span>Educational Background</span>
                                            </div>


                                        </div>
                                    </div>


                                </div>
                                <div class="card-body">
                                    <div class="row" id="cards">

                                        <div class="col col-md-12" id="add_educ">
                                            <div class="row  align-items-start ">
                                                <div class="col mb-3">
                                                    <label>Degree</label>
                                                    <div class="input-group col mb-3">
                                                        <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                        <select class="form-control" id="option-startView" name="startView">
                                                            <option selected>Choose...</i></option>
                                                            <option value="1">Bachelor's Degree</option>
                                                            <option value="2">Master's Degree</option>
                                                            <option value="2">Post-Baccalaureate</option>
                                                            <option value="2">Ph.D.</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-group col mb-3 ">
                                                    <div class="input-group">
                                                        <label for="">Program</label>
                                                        <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <div class="input-group col mb-3 ">
                                                    <div class="input-group">
                                                        <label for="">School</label>
                                                        <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <div class="input-group col mb-3 ">
                                                    <div class="input-group">
                                                        <label for="">Year of Attendance</label>
                                                        <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-top text-muted">

                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="col">
                        <div class="card">
                            <div class=" card-header bg-transparent border-bottom text-uppercase">

                                <div class="row">
                                    <div class="d-sm-flex flex-wrap">
                                        <div>
                                            <span>Membership / Affiliation</span>
                                        </div>


                                    </div>
                                </div>


                            </div>
                            <div class="card-body">
                                <div class="row" id="cards">

                                    <div class="col col-md-12" id="add_educ1">

                                        <div class="row  align-items-start ">
                                            <div class="input-group col mb-3 ">
                                                <div class="input-group">
                                                    <label for="">Name of the Organization</label>
                                                    <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                                </div>
                                            </div>
                                            <div class="col mb-3">
                                                <label> Classification</label>
                                                <div class="input-group col mb-3">
                                                    <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                    <select class="form-control" id="option-startView" name="startView">
                                                        <option selected>Choose...</i></option>
                                                        <option value="1">Bachelor's Degree</option>
                                                        <option value="2">Master's Degree</option>
                                                        <option value="2">Post-Baccalaureate</option>
                                                        <option value="2">Ph.D.</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col mb-3">
                                                <label> Position</label>
                                                <div class="input-group col mb-3">
                                                    <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                    <select class="form-control" id="option-startView" name="startView">
                                                        <option selected>Choose...</i></option>
                                                        <option value="1">Bachelor's Degree</option>
                                                        <option value="2">Master's Degree</option>
                                                        <option value="2">Post-Baccalaureate</option>
                                                        <option value="2">Ph.D.</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row  align-items-start ">

                                            <div class="col mb-3">
                                                <label> Level</label>
                                                <div class="input-group col mb-3">
                                                    <!-- <span class="input-group-text" id="option-startView">Employee Status</span> -->
                                                    <select class="form-control" id="option-startView" name="startView">
                                                        <option selected>Choose...</i></option>
                                                        <option value="1">Bachelor's Degree</option>
                                                        <option value="2">Master's Degree</option>
                                                        <option value="2">Post-Baccalaureate</option>
                                                        <option value="2">Ph.D.</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="input-group col mb-3 ">
                                                <div class="input-group">
                                                    <label for="">Organization Address</label>
                                                    <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;">
                                                </div>
                                            </div>
                                            <div class="input-group col mb-3 ">
                                                <div class="input-group">
                                                    <label for="">Inclusive Date</label>
                                                    <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;">
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row  align-items-start ">
                                            <div class="input-group col mb-3 col-md-8">
                                                <div class="input-group">
                                                    <label for="">Description of Supporting Documents Submitted (MOA/MOU, Certificate of Recognitions/Appreciations)</label>
                                                    <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;">
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


                </div>

            </div>
        </div>


        <!-- End Page-content -->