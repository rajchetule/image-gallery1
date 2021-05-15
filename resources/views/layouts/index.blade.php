<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('dist/assets/images/favicon.ico') }}">
        <link href="{{ asset('dist/assets/libs/datatables/dataTables.bootstrap4.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dist/assets/libs/datatables/responsive.bootstrap4.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dist/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dist/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        @if(Route::currentRouteName() == 'gallery-card')
            <link href="{{ asset('dist/assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
        @endif
        @if(Route::currentRouteName() == 'cat_table')
            <link href="{{ asset('dist/assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
        @endif
        <link href="{{ asset('dist/assets/css/bootstrap.min.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dist/assets/css/icons.min.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dist/assets/css/app.min.css ') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- header section -->
            @include('elements.header')

            <!--  Sidebar section  -->
            @include('elements.sidebar')

            <!-- mid section -->
            @yield('content')

            <!-- Footer Section -->
            @include('elements.footer')

        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>

                    <h5><a href="javascript: void(0);">Marcia J. Melia</a> </h5>
                    <p class="text-muted mb-0"><small>Product Owner</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <div class="row">
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                </div>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                        <label class="custom-control-label" for="customSwitch1">Notifications</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">API Access</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                        <label class="custom-control-label" for="customSwitch3">Auto Updates</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                        <label class="custom-control-label" for="customSwitch4">Online Status</label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('dist/assets/js/vendor.min.js') }}"></script>

        <!-- Third Party js-->
        <script src="{{ asset('dist/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{asset('dist/assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('dist/assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
        @if(Route::currentRouteName() == 'gallery-card')
        <script src="{{ asset('dist/assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('dist/assets/js/pages/lightbox.init.js') }}"></script>
        @endif
        @if(Route::currentRouteName() == 'cat_table')
        <script src="{{ asset('dist/assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('dist/assets/js/pages/lightbox.init.js') }}"></script>
        @endif
        <script src="{{ asset('dist/assets/js/pages/datatables.init.js') }}"></script>

        <script src="{{ asset('dist/assets/js/pages/dashboard-2.init.js') }}"></script>

        <script src="{{ asset('dist/assets/js/app.min.js') }}"></script>

    </body>
</html>
