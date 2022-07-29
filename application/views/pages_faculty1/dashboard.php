<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <div id="lnb">


                                    <div id="right">
                                        <div id="menu" class="mb-3">

                                            <span id="menu-navi" class="d-sm-flex flex-wrap text-center text-sm-start justify-content-sm-between">
                                                <div class="d-sm-flex flex-wrap gap-1">
                                                    <div class="btn-group mb-2" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary move-day" data-action="move-prev">
                                                            <i class="calendar-icon ic-arrow-line-left mdi mdi-chevron-left" data-action="move-prev"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-primary move-day" data-action="move-next">
                                                            <i class="calendar-icon ic-arrow-line-right mdi mdi-chevron-right" data-action="move-next"></i>
                                                        </button>
                                                    </div>


                                                    <button type="button" class="btn btn-primary move-today mb-2" data-action="move-today">Today</button>
                                                </div>

                                                <h4 id="renderRange" class="render-range fw-bold pt-1 mx-3"></h4>

                                                <div class="dropdown align-self-start mt-3 mt-sm-0 mb-2">
                                                    <button id="dropdownMenu-calendarType" class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <i id="calendarTypeIcon" class="calendar-icon ic_view_month" style="margin-right: 4px;"></i>
                                                        <span id="calendarTypeName">Dropdown</span>&nbsp;
                                                        <i class="calendar-icon tui-full-calendar-dropdown-arrow"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu" aria-labelledby="dropdownMenu-calendarType">
                                                        <li role="presentation">
                                                            <a class="dropdown-item" role="menuitem" data-action="toggle-daily">
                                                                <i class="calendar-icon ic_view_day"></i>Daily
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a class="dropdown-item" role="menuitem" data-action="toggle-weekly">
                                                                <i class="calendar-icon ic_view_week"></i>Weekly
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a class="dropdown-item" role="menuitem" data-action="toggle-monthly">
                                                                <i class="calendar-icon ic_view_month"></i>Month
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a class="dropdown-item" role="menuitem" data-action="toggle-weeks2">
                                                                <i class="calendar-icon ic_view_week"></i>2 weeks
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a class="dropdown-item" role="menuitem" data-action="toggle-weeks3">
                                                                <i class="calendar-icon ic_view_week"></i>3 weeks
                                                            </a>
                                                        </li>
                                                        <li role="presentation" class="dropdown-divider"></li>
                                                        <li role="presentation">
                                                            <a class="dropdown-item" role="menuitem" data-action="toggle-workweek">
                                                                <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-workweek" checked>
                                                                <span class="checkbox-title"></span>Show weekends
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a class="dropdown-item" role="menuitem" data-action="toggle-start-day-1">
                                                                <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-start-day-1">
                                                                <span class="checkbox-title"></span>Start Week on Monday
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a class="dropdown-item" role="menuitem" data-action="toggle-narrow-weekend">
                                                                <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-narrow-weekend">
                                                                <span class="checkbox-title"></span>Narrower than weekdays
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </span>

                                        </div>
                                    </div>

                                    <div class="lnb-new-schedule float-sm-end ms-sm-3 mt-4 mt-sm-0">
                                        <button id="btn-new-schedule" type="button" class="btn btn-primary lnb-new-schedule-btn" data-toggle="modal">
                                            New schedule</button>
                                    </div>
                                    <div id="calendarList" class="lnb-calendars-d1 mt-4 mt-sm-0 me-sm-0 mb-4"></div>


                                    <div id="calendar" style="height: 800px;"></div>


                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">

                        <div class="col">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">Activities</p>
                                            <h4 class="mb-0">30</h4>
                                        </div>

                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-archive-in font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">Incoming Activities</p>
                                            <h4 class="mb-0">20</h4>
                                        </div>

                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Meeting</h4>
                                        <table id="datatable" class="table table-bordered dt-responsive">
                                            <thead>
                                                <tr>
                                                    <th style="width:30%;">Metting Title</th>
                                                    <th style="width:10%;">Date</th>
                                                    <th style="width:10%;">Classification</th>
                                                    <th style="width:50%;">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width:30%;">University Flag Raising Ceremony</td>
                                                    <td style="width:10%;">June, 2022</td>
                                                    <td style="width:10%;">Required</td>
                                                    <td style="width:50%;">
                                                        <button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light">view</button>
                                                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Time in </button>
                                                        <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Time Out</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">University Flag Raising Ceremony</td>
                                                    <td style="width:10%;">June, 2022</td>
                                                    <td style="width:10%;">Required</td>
                                                    <td style="width:50%;">
                                                        <button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light">view</button>
                                                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Time in </button>
                                                        <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Time Out</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">University Flag Raising Ceremony</td>
                                                    <td style="width:10%;">June, 2022</td>
                                                    <td style="width:10%;">Required</td>
                                                    <td style="width:50%;">
                                                        <button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light">view</button>
                                                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Time in </button>
                                                        <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Time Out</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">University Flag Raising Ceremony</td>
                                                    <td style="width:10%;">June, 2022</td>
                                                    <td style="width:10%;">Required</td>
                                                    <td style="width:50%;">
                                                        <button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light">view</button>
                                                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Time in </button>
                                                        <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Time Out</button>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->



                        </div>
                    </div>


                </div>



                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Activity</h4>
                                <ul class="verti-timeline list-unstyled">
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                                        </div>
                                        <div class="media">
                                            <div class="me-3">
                                                <h5 class="font-size-14">24 June <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    PUPQC Midyear Assessment and Planning

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                                        </div>
                                        <div class="media">
                                            <div class="me-3">
                                                <h5 class="font-size-14">20 June <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    PUPFFAI General Assembly
                                                    <a href="#">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="event-list active">
                                        <div class="event-timeline-dot">
                                            <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                                        </div>
                                        <div class="media">
                                            <div class="me-3">
                                                <h5 class="font-size-14">07 May <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    PUP QC Webminar: Table of Specification & Test Item Analysis
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                                        </div>
                                        <div class="media">
                                            <div class="me-3">
                                                <h5 class="font-size-14">15 March <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    Virtual In-Service Training for Public School Teachers

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-center mt-4"><a href="" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>
                            </div>
                        </div>
                    </div>




                </div>

            </div> <!-- container-fluid -->
        </div>

        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->
<!-- JAVASCRIPT -->
<script src=" <?php echo base_url('assets') ?>/libs/jquery/jquery.min.js"></script>
<script src=" <?php echo base_url('assets') ?>/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src=" <?php echo base_url('assets') ?>/libs/metismenu/metisMenu.min.js"></script>
<script src=" <?php echo base_url('assets') ?>/libs/simplebar/simplebar.min.js"></script>
<script src=" <?php echo base_url('assets') ?>/libs/node-waves/waves.min.js"></script>



<!-- Required datatable js -->
<script src="<?php echo base_url('assets') ?>/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets') ?>/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Buttons examples -->
<script src="<?php echo base_url('assets') ?>/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('assets') ?>/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets') ?>/libs/jszip/jszip.min.js"></script>
<script src="<?php echo base_url('assets') ?>/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo base_url('assets') ?>/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?php echo base_url('assets') ?>/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('assets') ?>/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('assets') ?>/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="<?php echo base_url('assets') ?>/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets') ?>/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?php echo base_url('assets') ?>/js/pages/datatables.init.js"></script>

<!-- toastr plugin -->
<script src="<?php echo base_url('assets') ?>/libs/toastr/build/toastr.min.js"></script>

<script src="https://uicdn.toast.com/tui.code-snippet/latest/tui-code-snippet.min.js"></script>
<script src="<?php echo base_url('assets') ?>/libs/tui-dom/tui-dom.min.js"></script>

<!-- calendar -->

<script src="<?php echo base_url('assets') ?>/libs/tui-time-picker/tui-time-picker.min.js"></script>
<script src="<?php echo base_url('assets') ?>/libs/tui-date-picker/tui-date-picker.min.js"></script>

<script src="<?php echo base_url('assets') ?>/libs//moment/min/moment.min.js"></script>
<script src="<?php echo base_url('assets') ?>/libs/chance/chance.min.js"></script>
<script src="<?php echo base_url('assets') ?>/libs/tui-calendar/tui-calendar.min.js"></script>

<script src="<?php echo base_url('assets') ?>/js/pages/calendars.js"></script>
<script src="<?php echo base_url('assets') ?>/js/pages/schedules.js"></script>
<script src="<?php echo base_url('assets') ?>/js/pages/calendar.init.js"></script>


<!-- select 2 -->
<script src="<?php echo base_url('assets') ?>/libs/select2/js/select2.min.js"></script>

<!-- parsley -->
<script src="<?php echo base_url('assets') ?>/libs/parsleyjs/parsley.min.js"></script>


<!-- form advanced init -->
<script src="<?php echo base_url('assets') ?>/js/pages/form-advanced.init.js"></script>

<!-- app js -->
<script src=" <?php echo base_url('assets') ?>/js/app.js"></script>


<!-- common js -->
<script src="<?php echo base_url('assets') ?>/js/common.js"></script>

<!-- user js -->
<script src="<?php echo base_url('assets') ?>/js/dashboard.js"></script>
</body>

</html>