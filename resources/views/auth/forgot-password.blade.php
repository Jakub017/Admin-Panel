<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Reset hasła | Panel administracyjny</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Reset hasła | Panel administracyjny" name="description" />
    <meta content="Jakub Lipiński" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">

                    <div class="text-center mt-4">
                        <div class="mb-3">
                            <a href="/" class="auth-logo">
                                <img src="{{ asset('img/logo.png') }}" height="80" class="logo-dark mx-auto">
                                <img src="{{ asset('img/logo.png') }}" height="80" class="logo-light mx-auto">
                            </a>
                        </div>
                    </div>

                    <h4 class="text-muted text-center font-size-18"><b>Reset hasła</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal mt-3" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                Podaj swój adres <strong>E-mail</strong> na który ma zostać wysłany link do resetu
                                hasła
                                :)
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>

                            <div class="form-group mb-3">
                                <div class="col-xs-12">
                                    <input class="form-control" type="email" id="email" name="email" required=""
                                        placeholder="Adres email">
                                </div>
                            </div>

                            <div class="form-group pb-2 text-center row mt-3">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light"
                                        type="submit">Wyślij</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->


    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

</body>

</html>
