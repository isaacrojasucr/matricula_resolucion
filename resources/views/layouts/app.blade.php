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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="{{ asset('css/aditional.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/Chart.js')}}" ></script>
    <link href="{{ asset('css/templateStyles.css') }}" rel="stylesheet">
</head>
<body >
<div id="app">
    <div class="container-fluid" id="topNav">
        <div class="row">
            <div class="col-md-12">
                <a id="logo-ucr" class="navbar-brand" href="{{ url('https://www.ucr.ac.cr/') }}">
                    <img class="img-responsive" alt="Responsive image" src="{{ asset('media/firma-ucr.svg') }}">
                </a>
                <a id="logo-ciencias" class="navbar-brand" href="{{ url('/') }}">
                    <img class="img-responsive" alt="Responsive image" src="{{ asset('media/logo-ciencias.png') }}">
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="navMenu">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navContent" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navContent">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="{{ url('/') }}">@lang('form.start')</a></li>
                            <li><a href="{{ url('/acerca') }}">@lang('form.about')<span class="sr-only"></span></a>
                            <li><a href="{{ url('/secciones') }}">@lang('sections.sections')</a></li>
                            <li><a href="{{ url('/carreras') }}">@lang('form.careers')</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">@lang('form.services')<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/servicios/profesores') }}">@lang('events.teachers')</a></li>
                                    <li><a href="{{ url('/servicios/estudiantes') }}">@lang('events.students')</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">@lang('events.events')<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/eventos/profesores') }}">@lang('events.teachers')</a></li>
                                    <li><a href="{{ url('/eventos/estudiantes') }}">@lang('events.students')</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">@lang('form.resolution')<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/matricula') }}">@lang('form.requestInscription')</a></li>
                                    <li><a href="{{ url('/consulta/estudiante') }}">@lang('form.results')</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('login') }}">{{trans('resolucion.login')}}</a></li>
                        @else
                            @if(Auth::user()->role == "1")
                                <li><a href="{{ url('/inicio') }}">@lang('form.start')</a></li>
                                <li><a href="{{ url('/acerca') }}">@lang('form.about')<span class="sr-only"></span></a></li>
                                <li><a href="{{ url('/secciones') }}">@lang('sections.sections')</a></li>
                                <li><a href="{{ url('/carreras') }}">@lang('form.careers')</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">@lang('form.services')<span
                                                class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/servicios/profesores') }}">@lang('events.teachers')</a></li>
                                        <li><a href="{{ url('/servicios/estudiantes') }}">@lang('events.students')</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">@lang('events.events')<span
                                                class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/eventos/profesores') }}">@lang('events.teachers')</a></li>
                                        <li><a href="{{ url('/eventos/estudiantes') }}">@lang('events.students')</a></li>
                                    </ul>
                                </li>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">@lang('form.inscription') <span
                                                class="caret"></span></a>
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">@lang('form.maintenance') <span
                                                class="caret"></span></a>
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
                                            <a href="{{ url('/admin/secciones') }}">
                                                @lang('sections.sections')
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
                                        <li>
                                            <a href="{{ url('/admin/eventos') }}">
                                                @lang('events.events')
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/admin/servicios') }}">
                                                @lang('form.services')
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li><a href="{{ url('/') }}">@lang('form.start')</a></li>
                                <li><a href="{{ url('/acerca') }}">@lang('form.about')<span class="sr-only"></span></a>
                                <li><a href="{{ url('/secciones') }}">@lang('sections.sections')</a></li>
                                <li><a href="{{ url('/carreras') }}">@lang('form.careers')</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">@lang('form.services')<span
                                                class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/servicios/profesores') }}">@lang('events.teachers')</a></li>
                                        <li><a href="{{ url('/servicios/estudiantes') }}">@lang('events.students')</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">@lang('events.events')<span
                                                class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/eventos/profesores') }}">@lang('events.teachers')</a></li>
                                        <li><a href="{{ url('/eventos/estudiantes') }}">@lang('events.students')</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/proceso/coordinador') }}">@lang('form.petitions')<span class="sr-only"></span></a></li>
                            @endif
                            <li class="dropdown" id="userLiMenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            @lang('resolucion.logout')
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
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

    @yield('content')

    <div class="container-fluid" id="footer">
        <div class="row">
            <div class="col-md-12" id="legalRights">
                <p>© 2017 Universidad de Costa Rica. Última actualización: Noviembre de 2017.</p>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
