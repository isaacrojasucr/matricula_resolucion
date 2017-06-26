<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{trans('resolucion.depa') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="{{ asset('css/aditional.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <link href="{{ asset('css/templateStyles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid" id="topNav">
            <div class="row">
                <div class="col-md-12">
                    <a class="navbar-brand" href="{{ url('/inicio') }}">
                        <img class="img-responsive" alt="Responsive image" src="{{ asset('media/firma-ucr.svg') }}">
                    </a>
                    <ul class="list-inline text-right" id="flags">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <img src="{{ $properties['native'] }}">
                            </a>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="navMenu">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    @if (Auth::guest())
                                        <li><a href="{{ route('login') }}">{{trans('resolucion.login')}}</a></li>
                                    @else
                                    <li class="active"><a href="{{ url('/Acerca') }}">Acerca <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">Link</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Secciones <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('/Secciones') }}">Secciones</a></li>
                                            <li><a href="{{ url('/SeccionesAdmin') }}">Secciones Administración</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carreras <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('/Carreras') }}">Carreras</a></li>
                                            <li><a href="{{ url('/CarrerasAdmin') }}">Carreras Administración</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('form.inscription') <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ url('/matricula') }}">
                                                    @lang('form.studentSection')
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/admin/matricula') }}">
                                                    @lang('form.actualPetitions')
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/admin/antiguas') }}">
                                                    @lang('form.oldPetitions')
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/admin/procesos') }}">
                                                    @lang('form.process')
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/admin/reportes') }}">
                                                    @lang('form.reports')
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('form.maintenance') <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ url('/admin/sedes') }}">
                                                    @lang('form.locations')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/admin/carreras') }}">
                                                    @lang('form.careers')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/admin/cursos') }}">
                                                    @lang('form.courses')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/admin/usuarios') }}">
                                                    @lang('form.users')
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    @endif
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    @if (Auth::guest())
                                    @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    @lang('resolucion.logout')
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        @yield('content')

        <div class="container-fluid" id="footer">
            <div class="row">
                <div class="col-md-6" id="legalRights">
                    <p>© 2017 Universidad de Costa Rica - Tel. 2511-0000. Última actualización: junio de 2017.</p>
                </div>
                <div class="col-md-6 text-right" id="footerLinks">
                <ul class="list-inline">
                    <li><a href="#"><p>Hola</p></a></li>
                    <li><a href="#"><p>Hola</p></a></li>
                    <li><a href="#"><p>Hola</p></a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
