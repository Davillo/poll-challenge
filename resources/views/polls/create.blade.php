<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 3</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{asset('css/font-awesome.min.css') }}"  rel="stylesheet" media="all">
    <link href="{{asset('css/fontawesome-all.min.css') }}"  rel="stylesheet" media="all">
    <link href="{{asset('css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">


    <!-- Bootstrap CSS-->
    <link href="{{asset('css/bootstrap.min.css') }}"  rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('css/animsition.min.css') }}"  rel="stylesheet" media="all">

    <link href="{{asset('css/animate.css') }}"  rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css') }}"  rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            Votações
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            Votações
                        </a>

                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">

                    </ul>
                </div>
            </nav>
        </header>

        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                                <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Cadastro de enquete</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="description" class=" form-control-label">Descrição</label>
                                            <input type="text" id="description" name="description" placeholder="Texto da enquete." class="form-control">
                                        </div>
                                        </div>


                                        <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                           Salvar
                                        </button>

                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

               <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <script src="{{asset('js/jquery-3.2.1.min.js') }}"></script>

    <script src="{{asset('js/bootstrap.min.jss') }}"></script>

    <script src="{{asset('js/animsition.min.js') }}"></script>

    <script src="{{asset('js/main.js') }}"></script>


</body>

</html>
