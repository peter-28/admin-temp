<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description"
        content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Peter Forget Password</title>
    <link rel="apple-touch-icon" href="{{ asset('admin/app-assets/images/logo/logo.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/app-assets/images/logo/logo.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/ui/prism.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/themes/semi-dark-layout.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>

<body
    class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-lg-6 col-md-9 col-12">
                        <div class="card bg-authentication mb-0">
                            <div class="row m-0">
                                <!-- left section-forgot password -->
                                <div class="col-md-6 col-12">
                                    <div class="card disable-rounded-right mb-0 p-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="text-center">Forgot Password?</h4>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="text-muted text-center mb-2"><small>Enter the email or phone number you
                                                        used
                                                        when you joined
                                                        and we will send you temporary password</small></div>
                                                <form class="mb-2" action="#">
                                                    <div class="form-group mb-2">
                                                        <label class="text-bold-600" for="exampleInputEmailPhone1">Email or
                                                            Phone</label>
                                                        <input type="text" class="form-control" id="exampleInputEmailPhone1" placeholder="Email or Phone"></div>
                                                    <button type="submit" class="btn btn-primary glow position-relative w-100">SEND
                                                        PASSWORD<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                                </form>
                                                <div class="text-center mb-2"><a href="#"><small class="text-muted">I
                                                            remembered my
                                                            password</small></a></div>
                                                <div class="divider mb-2">
                                                    <div class="divider-text">Or Sign in as</div>
                                                </div>
                                                <div class="d-flex flex-md-row flex-column">
                                                    <a href="#" class="btn btn-social btn-google btn-block font-small-3 mb-1 mb-sm-1 mb-md-0 mr-md-1 text-center">
                                                        <i class="bx bxl-google font-medium-3"></i><span class="pl-1">Google</span></a>
                                                    <a href="#" class="btn btn-social btn-facebook btn-block font-small-3 text-center mt-0">
                                                        <i class="bx bxl-facebook-square font-medium-3"></i><span class="pl-1">Facebook</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- right section image -->
                                <div class="col-md-6 d-md-block d-none text-center align-self-center">
                                    <img class="img-fluid" src="{{asset('admin/app-assets/images/pages/forgot-password.png')}}" alt="branding logo" width="300">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}"></script>
    <script src="{{ asset('admin/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
    <script src="{{ asset('admin/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>

    <script src="{{ asset('admin/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/scripts/components.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/scripts/footer.js') }}"></script>

</body>

</html>
