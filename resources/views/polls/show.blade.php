<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>Visualização de enquete</title>

    <link href="{{asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{asset('css/font-awesome.min.css') }}"  rel="stylesheet" media="all">
    <link href="{{asset('css/fontawesome-all.min.css') }}"  rel="stylesheet" media="all">
    <link href="{{asset('css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">


    <link href="{{asset('css/bootstrap.min.css') }}"  rel="stylesheet" media="all">
    <link href="{{asset('css/animsition.min.css') }}"  rel="stylesheet" media="all">
    <link href="{{asset('css/animate.css') }}"  rel="stylesheet" media="all">
    <link href="{{asset('css/theme.css') }}"  rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="/">
                            Votação
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="/">
                            Votação
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

        <div class="page-content--bgf7">

            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                              @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{session('error')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            @endif

                            <form action="/poll/{{$poll->id}}/vote" method="POST">
                                {{  csrf_field() }}
                                <div class="col-lg-12">
                                    @if (count($errors) > 0)
                                        @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                        </div>
                                        @endforeach
                                     @endif
                                <div class="card">
                                    <div class="card-header">
                                    <strong>Visualização de enquete - Visualizada {{$poll->total_views}} Vezes</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                        <label for="description" class=" form-control-label">Descrição</label>
                                        <input type="text" value="{{$poll->description}}"id="description" disabled class="form-control">
                                        </div>

                                        <table id="optionsTable">
                                            <thead>
                                                <tr>
                                                    <td></td>
                                                    <td align="center"><b>Votos</b></td>
                                                    <td class="col-sm-2"><b>Descrição  </b></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($poll->options as $option)
                                                    <tr>
                                                    <td align="center">
                                                       <input type="radio" name="option_id" value="{{$option->id}}">
                                                    </td>
                                                        <td>{{$option->total_votes}}</td>
                                                        <td class="col-sm-2"><b>{{$option->description}}</b></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        </div>


                                        <div class="card-footer">


                                            <button type="submit" class="btn btn-primary btn-sm">
                                            Votar
                                            </button>
                                          </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Aplicação desafio de votações</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <script src="{{asset('js/jquery-3.2.1.min.js') }}"></script>

    <script src="{{asset('js/bootstrap.min.js') }}"></script>

    <script src="{{asset('js/animsition.min.js') }}"></script>

    <script src="{{asset('js/main.js') }}"></script>

    <script src="{{asset('js/pollOptions.js') }}"></script>

</body>

</html>
