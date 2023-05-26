@extends('admin.layouts.layout')

@section('content')

<div class="row">

    <!-- Right Sidebar -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Left sidebar -->
                <div class="page-aside-left">

                    <div class="d-grid">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#compose-modal">Compose</button>
                    </div>

                    <div class="email-menu-list mt-3">
                        <a href="javascript: void(0);" class="text-danger fw-bold"><i class="dripicons-inbox me-2"></i>Inbox<span class="badge badge-danger-lighten float-end ms-2">7</span></a>
                        <a href="javascript: void(0);"><i class="dripicons-star me-2"></i>Starred</a>
                        <a href="javascript: void(0);"><i class="dripicons-clock me-2"></i>Snoozed</a>
                        <a href="javascript: void(0);"><i class="dripicons-document me-2"></i>Draft<span class="badge badge-info-lighten float-end ms-2">32</span></a>
                        <a href="javascript: void(0);"><i class="dripicons-exit me-2"></i>Sent Mail</a>
                        <a href="javascript: void(0);"><i class="dripicons-trash me-2"></i>Trash</a>
                        <a href="javascript: void(0);"><i class="dripicons-tag me-2"></i>Important</a>
                        <a href="javascript: void(0);"><i class="dripicons-warning me-2"></i>Spam</a>
                    </div>

                    <div class="mt-4">
                        <h6 class="text-uppercase">Labels</h6>
                        <div class="email-menu-list labels-list mt-2">
                            <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-info me-2"></i>Updates</a>
                            <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-warning me-2"></i>Friends</a>
                            <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-success me-2"></i>Family</a>
                            <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-primary me-2"></i>Social</a>
                            <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-danger me-2"></i>Important</a>
                            <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-secondary me-2"></i>Promotions</a>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h4><span class="badge rounded-pill p-1 px-2 badge-secondary-lighten">FREE</span></h4>
                        <h6 class="text-uppercase mt-3">Storage</h6>
                        <div class="progress my-2 progress-sm">
                            <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted font-13 mb-0">7.02 GB (46%) of 15 GB used</p>
                    </div>

                </div>
                <!-- End Left sidebar -->

                <div class="page-aside-right">

                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary"><i class="mdi mdi-archive font-16"></i></button>
                        <button type="button" class="btn btn-secondary"><i class="mdi mdi-alert-octagon font-16"></i></button>
                        <button type="button" class="btn btn-secondary"><i class="mdi mdi-delete-variant font-16"></i></button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-folder font-16"></i>
                            <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu">
                            <span class="dropdown-header">Move to:</span>
                            <a class="dropdown-item" href="javascript: void(0);">Social</a>
                            <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                            <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                            <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-label font-16"></i>
                            <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu">
                            <span class="dropdown-header">Label as:</span>
                            <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                            <a class="dropdown-item" href="javascript: void(0);">Social</a>
                            <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                            <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                        </div>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal font-16"></i> More
                            <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu">
                            <span class="dropdown-header">More Options :</span>
                            <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a>
                            <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                            <a class="dropdown-item" href="javascript: void(0);">Add Star</a>
                            <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                        </div>
                    </div>

                    <div class="mt-3">
                        <h5 class="font-18">Your elite author Graphic Optimization reward is ready!</h5>

                        <hr/>

                        <div class="d-flex mb-3 mt-1">
                            <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="placeholder image" height="32">
                            <div class="w-100 overflow-hidden">
                                <small class="float-end">Dec 14, 2017, 5:17 AM</small>
                                <h6 class="m-0 font-14">Steven Smith</h6>
                                <small class="text-muted">From: jonathan@domain.com</small>
                            </div>
                        </div>

                        <p>Hi Coderthemes!</p>
                        <p>Clicking ‘Order Service’ on the right-hand side of the above page will present you with an order page. This service has the following Briefing Guidelines that will need to be filled before placing your order:</p>
                        <ol>
                            <li>Your design preferences (Color, style, shapes, Fonts, others) </li>
                            <li>Tell me, why is your item different? </li>
                            <li>Do you want to bring up a specific feature of your item? If yes, please tell me </li>
                            <li>Do you have any preference or specific thing you would like to change or improve on your item page? </li>
                            <li>Do you want to include your item's or your provider's logo on the page? if yes, please send it to me in vector format (Ai or EPS) </li>
                            <li>Please provide me with the copy or text to display</li>
                        </ol>

                        <p>Filling in this form with the above information will ensure that they will be able to start work quickly.</p>
                        <p>You can complete your order by putting your coupon code into the Promotional code box and clicking ‘Apply Coupon’.</p>
                        <p><b>Best,</b> <br/> Graphic Studio</p>
                        <hr/>

                        <h5 class="mb-3">Attachments</h5>

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card mb-1 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-primary-lighten text-primary rounded">
                                                        .ZIP
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="javascript:void(0);" class="text-muted fw-bold">Hyper-admin-design.zip</a>
                                                <p class="mb-0">2.3 MB</p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                    <i class="dripicons-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-xl-4">
                                <div class="card mb-1 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <img src="assets/images/projects/project-1.jpg" class="avatar-sm rounded" alt="file-image">
                                            </div>
                                            <div class="col ps-0">
                                                <a href="javascript:void(0);" class="text-muted fw-bold">Dashboard-design.jpg</a>
                                                <p class="mb-0">3.25 MB</p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                    <i class="dripicons-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-xl-4">
                                <div class="card mb-0 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-secondary text-light rounded">
                                                        .MP4
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="javascript:void(0);" class="text-muted fw-bold">Admin-bug-report.mp4</a>
                                                <p class="mb-0">7.05 MB</p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                    <i class="dripicons-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                        <div class="mt-5">
                            <a href="" class="btn btn-secondary me-2"><i class="mdi mdi-reply me-1"></i> Reply</a>
                            <a href="" class="btn btn-light">Forward <i class="mdi mdi-forward ms-1"></i></a>
                        </div>

                    </div>
                    <!-- end .mt-4 -->

                </div>
                <!-- end inbox-rightbar-->
            </div>

            <div class="clearfix"></div>
        </div> <!-- end card-box -->

    </div> <!-- end Col -->
</div>

@endsection
