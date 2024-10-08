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
    <title>Peter Login</title>
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
                <section id="auth-login" class="row flexbox-container">
                    <div class="col-xl-6 col-12">
                        <div class="card bg-authentication">
                            <div class="row">
                                <div class="col-md-6">
                                    <div
                                        class="card shadow mb-0 p-2 h-100 d-flex justify-content-center">
                                        <div class="card-header">
                                            <h4 class="card-title text-center">Login Page</h4>
                                            <p class="text-center"> <span>Please sign-in to your account and start the adventure!</span></p>
                                        </div>

                                        <div class="card-content">
                                            <div class="card-body">
                                                <form action="#">
                                                    <div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputEmail1">Email
                                                            address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            placeholder="Email address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-bold-600"
                                                            for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword1" placeholder="Password">
                                                    </div>
                                                    <div
                                                        class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <div class="checkbox checkbox-sm">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="checkboxsmall"
                                                                    for="exampleCheck1"><small>Keep me logged
                                                                        in</small></label>
                                                            </div>
                                                        </div>
                                                        <div class="text-right"><a href="#"
                                                                class="card-link"><small>Forgot Password?</small></a>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-primary glow w-100 position-relative">Login<i
                                                            id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                                </form>
                                                <hr>
                                                <div class="text-center"><small class="mr-25">Don't have an
                                                        account?</small><a href="/register"><small>Sign
                                                            up</small></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card-content">
                                        <img class="img-fluid"
                                            src="{{ asset('admin/app-assets/images/pages/login.png') }}"
                                            alt="branding logo">
                                    </div>
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
