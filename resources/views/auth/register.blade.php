<!doctype html>
<html lang="pl">

<head>

    <meta charset="utf-8" />
    <title>Rejestracja | Panel administracyjny</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Rejestracja | Panel administracyjny" name="description" />
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
                                <img src="{{ asset('img/logo.png') }}" height="80" class="logo-dark mx-auto" alt="">
                                <img src="{{ asset('img/logo.png') }}" height="80" class="logo-light mx-auto" alt="">
                            </a>
                        </div>
                    </div>

                    <h4 class="text-muted text-center font-size-18"><b>Rejestracja</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input name="name" id="name" class="form-control" type="text" required=""
                                        placeholder="Imię">
                                </div>
                            </div>


                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input name="username" id="username" class="form-control" type="text" required=""
                                        placeholder="Nazwa użytkownika">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input name="email" id="email" class="form-control" type="email" required=""
                                        placeholder="Adres email">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input name="password" id="password" class="form-control" type="password"
                                        required="" placeholder="Hasło">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input name="password_confirmation" id="password_confirmation" class="form-control"
                                        type="password" required="" placeholder="Potwierdź hasło">
                                </div>
                            </div>



                            <div class="form-group text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light"
                                        type="submit">Zarejestruj</button>
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-0 row">
                                <div class="col-12 mt-3 text-center">
                                    <a href="{{ route('login') }}" class="text-muted">Masz już konto?</a>
                                </div>
                            </div>
                        </form>
                        <!-- end form -->
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
