<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Dokumentieren</title>
    <link rel="icon" type="image/png" href="{{config('../app.
url')}}/imgs/Favicon.png">
</head>
<script src="{{ asset('js/app.js') }}" defer></script>
<body>

<style>
    /* Paste this css to your style sheet file or under head tag */
    /* This only works with JavaScript,
    if it's not present, don't show loader */
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 99999;
        background: url(https://c.tenor.com/b8F9BMmvXlcAAAAi/loading-round.gif) center no-repeat #fff;
        background-size: 200px;
    }

    @media (max-width: 575.98px) {
        .se-pre-con {
            background-size: 100px;
        }
    }

    /*nav ARti*/
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@200;800;900&display=swap');

    body {
        font-family: 'Montserrat', sans-serif;
    }

    .nav-itemsss {
        height: 90vh !important;
        overflow-y: scroll !important;
        /* overflow-x: hidden !important; */
    }

    /* .nav-link {
        padding-right: 1.8rem !important;
        padding-left: 1.8rem !important;
    } */
    .nav-itemsss a:hover {
        background-color: #fff;
        color: #0C71C3;
    }

    .activeClassNav__,
    .activeClassNav__ span,
    .activeClassNav__ svg {
        background-color: #fff;
        color: #0C71C3 !important;
        fill: #0C71C3 !important;
    }

    .nav-itemsss a:hover span {
        color: #0C71C3;
    }

    .nav-itemsss a:hover svg {
        fill: #0C71C3;
    }

    .nav-itemsss a:focus,
    .nav-itemsss a:focus svg,
    .nav-itemsss a:focus span {
        background-color: #fff;
        color: #0C71C3;
        fill: #0C71C3;
    }

    @media (max-width: 999.98px) {
        .nav-texttt {
            display: none;
        }

        .navvv {
            width: fit-content !important;
            text-align: center !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        /* .user-drop {
            position: fixed !important;
            bottom: 0;
            width: fit-content !important;
        } */
    }

    /* overflow 1 */
    .overflow-div1::-webkit-scrollbar {
        width: 0px;
    }

    .nav-texttt {
        font-family: 'Poppins';
        color: #fff;
    }

    @media (max-width: 978px) {
        #logo__311 {
            content: url('../img/Logo gjys.png');
            width: 20% !important;
        }
    }
</style>
<div class="se-pre-con"></div>
<div class="row g-0" id="app">
    <div class="col-lg-2 col-md-1 col-sm-1 col-1 first-col1">
        <div class="nav-styling col-md-2 col-sm-1 col-1" style="position: fixed; top:0;left:0; ">
            <div class="d-flex align-middle" style="height: 16vh;">
                <div class="my-auto">
                    <div class="img-normal text-center mx-3">
                        <a href="{{route('dashboard')}}"><img src="{{env('APP_URL')}}/../imgs/logo2.png" class="img-fluid p-1" alt=""></a>
                    </div>
                    <div class="img-collapsed text-center ">
                        <a href="{{route('dashboard')}}"><img src="{{env('APP_URL')}}/../imgs/logo1.png" class="img-fluid p-2" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="column-v">

                <a href="{{route('dashboard')}}" class="nav-link {{ (request()->is('/')) ? 'activeClassNav__' : '' }}" aria-current="page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-house" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                    <span class="ps-2 txt-dn">Startseite</span>
                </a>
                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
                    Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin'))

                    <a href="{{route('tasks')}}" class="nav-link {{ (request()->is('tasks')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20"  fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                            <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                            <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Aufgaben</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') ||
                    Auth::guard('admins')->user()->hasRole('fs') ||
                    Auth::guard('admins')->user()->hasRole('salesmanager')
                    ||Auth::guard('admins')->user()->hasRole('menagment'))
                    <a href="{{route('leads')}}" class="nav-link {{ (request()->is('leads')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20"  fill="currentColor" class="bi bi-hdd-stack" viewBox="0 0 16 16">
                            <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z"/>
                            <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                            <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Leads</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('fs') ||
                    Auth::guard('admins')->user()->hasRole('salesmanager') ||
                    Auth::guard('admins')->user()->hasRole('menagment') ||
                    Auth::guard('admins')->user()->hasRole('admin'))
                    <a href="{{route('Appointments')}}" class="nav-link  {{ (request()->is('Appointments')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20"  fill="currentColor" class="bi bi-calendar4-week" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                        </svg>
                            <span class="ps-2 txt-dn">Kalender</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
                    Auth::guard('admins')->user()->hasRole('admin'))

                <!-- <a href="{{route('status')}}" class="nav-link {{ (request()->is('status')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                            <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                        </svg>
                        <span class="ps-2 txt-dn">Status</span>
                    </a> -->
                @endif
                @if(Auth::guard('admins')->check())
                    <a href="{{route('costumers')}}" class="nav-link {{ (request()->is('costumers')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20"  fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Kunden</span>
                    </a>
                @endif
                {{--                    @if(Auth::guard('admins')->user()->hasRole('backoffice') ||--}}
                {{--                    Auth::guard('admins')->user()->hasRole('admin'))--}}
                {{--                    <a onclick="workingOnIt()" href="#" class="nav-link ">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-cash-coin" viewBox="0 0 16 16">--}}
                {{--                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />--}}
                {{--                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />--}}
                {{--                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />--}}
                {{--                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />--}}
                {{--                        </svg>--}}
                {{--                        <span class="ps-2 txt-dn">Einzahlung</span>--}}
                {{--                    </a>--}}
                {{--                    @endif--}}
                {{--                    @if(Auth::guard('admins')->user()->hasRole('backoffice') ||--}}
                {{--                    Auth::guard('admins')->user()->hasRole('admin'))--}}
                {{--                    <a onclick="workingOnIt()" href="#" class="nav-link">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-x-square" viewBox="0 0 16 16">--}}
                {{--                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />--}}
                {{--                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />--}}
                {{--                        </svg>--}}
                {{--                        <span class="ps-2 txt-dn">Stornierungen</span>--}}
                {{--                    </a>--}}
                {{--                    @endif--}}

                {{--                    <a onclick="workingOnIt()" href="#" class="nav-link ">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-grid" viewBox="0 0 16 16">--}}
                {{--                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />--}}
                {{--                        </svg>--}}
                {{--                        <span class="ps-2 txt-dn">Finanzen</span>--}}
                {{--                    </a>--}}
                {{--                    @if(Auth::guard('admins')->user()->hasRole('admin') ||--}}
                {{--                    Auth::guard('admins')->user()->hasRole('menagment') ||--}}
                {{--                    Auth::guard('admins')->user()->hasRole('salesmanager'))--}}
                {{--                    <a onclick="workingOnIt()" href="#" class="nav-link">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-people-fill" viewBox="0 0 16 16">--}}
                {{--                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />--}}
                {{--                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />--}}
                {{--                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />--}}
                {{--                        </svg>--}}
                {{--                        <span class="ps-2 txt-dn">Mitarbeiter</span>--}}
                {{--                    </a>--}}
                {{--                    @endif--}}
                {{--                    @if(Auth::guard('admins')->user()->hasRole('finance') ||--}}
                {{--                    Auth::guard('admins')->user()->hasRole('admin'))--}}
                {{--                    <a onclick="workingOnIt()" href="#" class="nav-link ">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-percent" viewBox="0 0 16 16">--}}
                {{--                            <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />--}}
                {{--                        </svg>--}}
                {{--                        <span class="ps-2 txt-dn">Provisionen</span>--}}
                {{--                    </a>--}}
                {{--                    @endif--}}
                {{--                    @if(Auth::guard('admins')->user()->hasRole('admin') ||--}}
                {{--                    Auth::guard('admins')->user()->hasRole('menagment') ||--}}
                {{--                    Auth::guard('admins')->user()->hasRole('salesmanager'))--}}
                {{--                    <a onclick="workingOnIt()" href="#" class="nav-link">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-diagram-2-fill" viewBox="0 0 16 16">--}}
                {{--                            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z" />--}}
                {{--                        </svg>--}}
                {{--                        <span class="ps-2 txt-dn">Prov.system</span>--}}
                {{--                    </a>--}}
                {{--                    @endif--}}
                {{--                    @if(Auth::guard('admins')->user()->hasRole('admin') ||--}}
                {{--                    Auth::guard('admins')->user()->hasRole('menagment') ||--}}
                {{--                    Auth::guard('admins')->user()->hasRole('salesmanager'))--}}
                {{--                    <a onclick="workingOnIt()" href="#" class="nav-link">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">--}}
                {{--                            <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z" />--}}
                {{--                        </svg>--}}
                {{--                        <span class="ps-2 txt-dn">Statistik</span>--}}
                {{--                    </a>--}}
                {{--                    @endif--}}
                {{--                    @if(Auth::guard('admins')->user()->hasRole('menagment') ||--}}
                {{--                    Auth::guard('admins')->user()->hasRole('finance')--}}
                {{--                    ||Auth::guard('admins')->user()->hasRole('admin') )--}}
                {{--                    <a onclick="workingOnIt()" href="#" class="nav-link">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-diagram-2-fill" viewBox="0 0 16 16">--}}
                {{--                            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z" />--}}
                {{--                        </svg>--}}
                {{--                        <span class="ps-2 txt-dn">Treuhand</span>--}}
                {{--                    </a>--}}
                {{--                    @endif--}}
                @if(Auth::guard('admins')->user()->hasRole('admin'))
                    <a class="nav-link" href="{{route('addnewuser')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                        <span class="ps-1 nav-texttt">Registrieren</span>
                    </a>
                @endif

            </div>
            <div class="log-out-div ">
                <hr class="hr-1 m-0">
                <div class="logg d-flex flex-column justify-content-center">
                    @if(auth()->user()->admin_id != null)
                        <a href="{{action('App\Http\Controllers\UserController@changerole')}}"
                           class="nav-link rolle-style">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Rolle wechseln</span>
                        </a>
                    @endif
                    <a href="{{route('logout')}}">
                        <button class=" btn">
                                    <span class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                             fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                            <path fill-rule="evenodd"
                                                  d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                        </svg>
                                    </span>
                            <span class="ps-2 txt-dn">Abmelden</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div style="display: none" class="col" id="pdf">

    </div>
    <div class="col" id="old-content">
        @php
            $leadid = $lead->lead->id * 1244;
            $leadleadid = \Illuminate\Support\Facades\Crypt::encrypt($leadid);
            $person = $lead->id * 1244;
            $personId = \Illuminate\Support\Facades\Crypt::encrypt($person);
        @endphp
        <form id="formaa" action="{{route('createLeadDataKK',['leadIdd'=> $leadleadid ,'personIdd' => $personId])}}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="newgcount" id="newgcount" value="0">
            <input type="hidden" name="newncount" id="newncount" value="0">


            <div class="my-1 my-sm-5 mx-2 mx-sm-4">
                <div class="" style="background-color: #EFEFEF;border-radius: 22px;" >
                    <div class="py-4 px-3">
                            <span class="fs-4 input-group">
                                <div class="pe-3">
                                    <a href="{{URL::previous()}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                        </svg>
                                    </a>
                                </div>
                                {{$lead->first_name}}
                            </span><br>
                        <span class="fs-6 text-muted">
                                {{$lead->address}}
                            </span>
                    </div>
                    <div class="row mx-2 mx-sm-4">

                        <nav class="g-0 nav-form-links">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active col krankenkasse-btn me-2" id="nav-home-tab" name="baba" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" onclick="changecnt(0)"><span class="desk-t">Krankenkasse</span><span class="mobile-t">KK</span><div><span class="mobile-t" style="font-size: 10px;">KK</span></div>
                                </button>
                                <button class="nav-link col auto-btn mx-2" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="changecnt(1)"><span class="desk-t">Auto</span><span class="mobile-t">A</span><div><span class="mobile-t" style="font-size: 10px;">Auto</span></div>
                                </button>
                                <button class="nav-link  col sachen-btn mx-2" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false" onclick="changecnt(2)"><span class="desk-t">Vorsorge</span><span class="mobile-t">V</span><div><span class="mobile-t" style="font-size: 10px;">Vorsage</span></div>
                                </button>
                                <button class="nav-link  col vorsorge-btn ms-2" id="nav-fourth-tab" data-bs-toggle="tab" data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth" aria-selected="false" onclick="changecnt(3)"><span class="desk-t">Sachen</span><span class="mobile-t">S</span><div><span class="mobile-t" style="font-size: 10px;">Sachen</span></div>
                                </button>
                            </div>
                        </nav>
                    </div>

                    <div class="tab-content  mx-2 mx-sm-4 pb-2" id="nav-tabContent" >
                        <div class="tab-pane fade show active krankenkasse-content mb-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" >
                            <div class="row  mx-2 mx-sm-4" >
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                                    <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="py-2 px-2">
                                            <div class="row justify-content-between mx-2">
                                                <div class="col-7 d-flex g-0">
                                                    <div class="">
                                                            <span class="fw-bold showname" style=" font-size: 12px;">
                                                                Vorversicherer
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto g-0">
                                                    <div class="select-div text-end">
                                                        <select name="vorversicherer_select" class="fw-bold" id=""  style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                            <option selected>Ausw??hlen</option>
                                                            <option value="Ja">Ja</option>
                                                            <option value="Nein">Nein</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="upload-box mx-1 my-2">
                                                <div class="mx-1 my-2 p-4 text-center">
                                                    <label for="file-input-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                                            <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5" transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                                                <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                                                    <path id="Path_234" data-name="Path 234" d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6" transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                    <path id="Path_235" data-name="Path 235" d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z" transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </label>
                                                    <input type="file" name="pre_insurer" id="file-input-0" class="svg-div w-100 border-0  g-0" onchange="upload(this)">

                                                    <input type="text" class="form-control text-center  showpdf" id="file-input-0c" disabled style="background:none; border:none;">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                                    <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="py-2 px-2">
                                            <div class="row justify-content-between mx-2">
                                                <div class="col-7 d-flex g-0">
                                                    <div class="">
                                                            <span class="fw-bold showname" style="font-size: 12px;">
                                                                ID Notwending
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto g-0 ">
                                                    <div class="select-div text-end">
                                                        <select name="id_notwending_select" class="fw-bold" id=""
                                                                style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                            <option selected>Ausw??hlen</option>
                                                            <option value="Ja">Ja</option>
                                                            <option value="Nein">Nein</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="upload-box mx-1 my-2">
                                                <div class="mx-1 my-2 p-4 text-center">
                                                    <label for="file-input-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                                            <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5" transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                                                <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                                                    <path id="Path_234" data-name="Path 234" d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6" transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                    <path id="Path_235" data-name="Path 235" d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z" transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </label>
                                                    <input type="file" id="file-input-1" class="svg-div w-100 border-0  g-0 " onchange="upload(this);" name="id_required">
                                                    <input type="text" class="form-control text-center showpdf" id="file-input-1c" disabled style="background:none; border:none;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                                    <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="py-2 px-2">
                                            <div class="row justify-content-between mx-2">
                                                <div class="col g-0 d-flex">
                                                    <div class="text-nowrap">
                                                            <span class="fw-bold showname" style=" font-size: 12px;">
                                                                Kundingung durch
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto g-0 ">
                                                    <div class="select-div text-end">
                                                        <select name="kundingung_durch_select" class="fw-bold" id=""
                                                                style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                            <option selected>Ausw??hlen</option>
                                                            <option value="DLF">DLF</option>
                                                            <option value="Kunden">Kunden</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="upload-box mx-1 my-2">
                                                <div class="mx-1 my-2 p-4 text-center">
                                                    <label for="file-input-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                                            <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5" transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                                                <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                                                    <path id="Path_234" data-name="Path 234" d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6" transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                    <path id="Path_235" data-name="Path 235" d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z" transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </label>
                                                    <input type="file" id="file-input-2" class="svg-div w-100 border-0  g-0" onchange="upload(this);" name="notice_by">
                                                    <input type="text" class="form-control text-center showpdf" id="file-input-2c" disabled style="background:transparent; border:none;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                                    <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="py-2 px-2">
                                            <div class="row justify-content-between mx-2">
                                                <div class="col-7 d-flex g-0">
                                                    <div class="">
                                                            <span class="fw-bold showname" style=" font-size: 12px;">
                                                                Vollmacht
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto g-0">
                                                    <div class="select-div text-end ">
                                                        <select name="vollmacht_select" class="fw-bold" id=""
                                                                style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                            <option selected>Ausw??hlen</option>
                                                            <option value="Ja">Ja</option>
                                                            <option value="Nein">Nein</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="upload-box mx-1 my-2">
                                                <div class="mx-1 my-2 p-4 text-center">
                                                    <label for="file-input-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                                            <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5" transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                                                <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                                                    <path id="Path_234" data-name="Path 234" d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6" transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                    <path id="Path_235" data-name="Path 235" d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z" transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </label>
                                                    <input type="file" id="file-input-3" class="svg-div w-100 border-0  g-0 " onchange="upload(this);" name="power_of_attorney">
                                                    <input type="text" class="form-control text-center showpdf" id="file-input-3c" disabled style="background:transparent; border:none;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4" id="mandat">
                                    <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="py-2 px-2">
                                            <div class="row mx-2">
                                                <div class="col-7 d-flex g-0">
                                                    <div class="">
                                                            <span class="fw-bold showname" style=" font-size: 12px;">
                                                                Mandatiert
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="col g-0 d-flex justify-content-end">
                                                    <div class="select-div text-end ">
                                                        <select onchange="msheleqeta()" class="fw-bold" id="manval"
                                                                style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                            <option selected>Ausw??hlen</option>
                                                            <option value="Yes">Ja</option>
                                                            <option value="No">Nein</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- <div class="col g-0 d-flex justify-content-end">
                                              <div class="select-div text-end">
                                                <select name="pre_insurer" class="fw-bold" id=""  style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                  <option selected>Select</option>
                                                  <option value="1">Ja</option>
                                                  <option value="2">Nein</option>
                                                </select>
                                              </div>
                                            </div> -->
                                            </div>
                                            <div class="upload-box mx-1 my-2">
                                                <div class="mx-1 my-2 p-4 text-center">
                                                    <label for="file-input-9">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                                            <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5" transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                                                <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                                                    <path id="Path_234" data-name="Path 234" d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6" transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                    <path id="Path_235" data-name="Path 235" d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z" transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </label>
                                                    <input type="file" name="mandatiert" id="file-input-9" class="svg-div w-100 border-0  g-0" onchange="upload(this)">
                                                    <input type="text" class="form-control text-center showpdf" id="file-input-9c" disabled style="background:none; border:none;">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="text-center mt-3 pb-3">
                                <div class="row">
                                    <div class="col g-0 text-end my-auto">
                                        <div class="">
                                            <input type="checkbox" value="1"  id="krankenSkip" name="krankenSkip" hidden>
                                            <button type="button" id="nextonee__" onclick="krankenSkipp(); nextonee()" class="px-3 fw-bold mx-2 py-2" style="border-radius: 9px;color: #fff; background-color: #afafaf; border: none;  cursor: pointer">
                                                Uberspringen
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col g-0 text-start">
                                        <div id="buton">
                                            <button class="px-5 py-2" type="button" style="border: none; border-radius: 9px; background-color:#285F52;" id="nextonee__" onclick="nextonee()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159" viewBox="0 0 58.155 19.159">
                                                    <g id="Group_453" data-name="Group 453" transform="translate(0.004)">
                                                        <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)" fill="none" stroke="#3fd599" stroke-width="2" />
                                                        <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z" transform="translate(58.151 0) rotate(90)" fill="#3fd599" />
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <krank fam_id="{{$lead->id}}" url="{{config('app.url')}}" lead_id="{{$lead->lead->id}}"></krank>
                        </div>

                        <div class="tab-pane fade auto-content" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row mx-2 mx-sm-4">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-2 mt-4 mb-sm-4 mt-sm-4 ">
                                    <div class="accordion accordion-flush" id="accordionFlushExample1">
                                        <div class="accordion-item" style="background-color: #EFEFEF; border-radius: 10px">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button id="button1" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" onclick="hideSpan();" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                                                <span class="fs-6" id="title-span" style="font-weight: 600;">
                                                                    Gegenofferte?
                                                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                                                <span class="" style="font-size: 13px;">
                                                                    Bestelle eine Gegenofferte
                                                                    f??r eine bestehende Autoversicherung
                                                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample1">
                                                <div class="accordion-body" id="shtogegen" style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="">
                                                                <span class="showname" style="font-size: 13px;">
                                                                    Police Hochladen:
                                                                </span>
                                                        </div>
                                                        <div class="">
                                                            <div class="upload-box mx-1 my-2">
                                                                <div class="mx-1 my-2 p-4 text-center">
                                                                    <label for="file-input-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                                                            <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                                                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5" transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                                                                <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                                                                    <path id="Path_234" data-name="Path 234" d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6" transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                                    <path id="Path_235" data-name="Path 235" d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z" transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                    </label>
                                                                    <input type="file" id="file-input-4" class="svg-div w-100 border-0  g-0" onchange="upload(this);" name="upload_policeFahrzeug">
                                                                    <input type="text" class="form-control text-center showpdf" id="file-input-4c" disabled style="background:transparent; border:none;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="row mx-2">
                                                                <div class="col-5 d-flex g-0">
                                                                    <div class="text-nowrap">
                                                                            <span class="fw-bold" style=" font-size: 12px;">
                                                                                Vergleichsart:
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col g-0 d-flex justify-content-end">
                                                                    <div class="select-div text-end ">
                                                                        <select name="vergleichsart_select" class="fw-bold " id="" style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                                            <option selected>Ausw??hlen</option>
                                                                            <option value="1:0 Aktualisierung">1:0 Aktualisierung</option>
                                                                            <option value="0:1 Downgraden">0:1 Downgraden</option>
                                                                            <option value="1:1 Das Gleiche">1:1 Das Gleiche</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="mb-3 mt-3">
                                                                <label for="exampleFormControlTextarea1" class="form-label showname" style="font-size: 13px;">Kommentar</label>
                                                                <textarea name="commentFahrenzug" class="form-control showpdf" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        @if(!Auth::user()->hasRole('fs'))
                                                            <div class="col-12">Neue Offer:
                                                                <div class="text-start">
                                                                    <div class="upload-box mx-1 my-2 p-3">
                                                                        <div class="mx-1 my-2 text-center">
                                                                            <label for="file-input-4ww">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                                                                    <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                                                                        <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5" transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                                                                        <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                                                                            <path id="Path_234" data-name="Path 234" d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6" transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                                            <path id="Path_235" data-name="Path 235" d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z" transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                                        </g>
                                                                                    </g>
                                                                                </svg>
                                                                            </label>
                                                                            <input type="file" id="file-input-4ww" class="svg-div w-100 border-0  g-0" onchange="upload(this);" name="offer">
                                                                            <input type="text" class="form-control text-center" id="file-input-4wwc" disabled style="background:transparent; border:none;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div class="col my-auto">
                                                            <div class="d-inline text-center mt-3" style="margin-top: -30px; margin-left: 43%;" id="add_g" onclick="addanother_item_g()">

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="48.694"  viewBox="0 0 37.694 37.694" style="cursor:pointer;">
                                                                    <g id="Group_621" data-name="Group 621" transform="translate(-663.236 -976.679)">
                                                                        <g id="Group_550" data-name="Group 550" transform="translate(663.236 976.679)">
                                                                            <rect id="Rectangle_9" data-name="Rectangle 9" width="37.694" height="37.694" rx="18.847" fill="#C8C8C8" />
                                                                            <g id="Group_42" data-name="Group 42" transform="translate(12.724 12.724)">
                                                                                <line id="Line_11" data-name="Line 11" y2="11.972" transform="translate(5.986 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                                                                                <line id="Line_12" data-name="Line 12" x1="11.972" transform="translate(0 5.634)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 mb-2 mt-2 mb-sm-4 mt-sm-4">
                                    <div class="accordion accordion-flush" id="accordionFlushExample2">
                                        <div class="accordion-item" style="background-color: #EFEFEF; border-radius: 10px">
                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                                                <span class="fs-6" id="title-span" style="font-weight: 600;">
                                                                    Neues Fahrzeug
                                                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                                                <span class="" style="font-size: 13px;">
                                                                    Bestelle eine Offerte f??r ein neu einzul??sendes
                                                                    Fahrzeug.
                                                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample2">
                                                <div class="accordion-body" id="shtonew" style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="my-3">
                                                                    <div class="">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    Fahrzeugausweis hochladen
                                                                                </span>
                                                                        </div>
                                                                        <div class="upload-box mx-1 my-2">
                                                                            <div class="mx-1 my-2 p-4 text-center">
                                                                                <label for="file-input-5">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                                                                        <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                                                                            <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5" transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                                                                            <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                                                                                <path id="Path_234" data-name="Path 234" d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6" transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                                                <path id="Path_235" data-name="Path 235" d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z" transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                                            </g>
                                                                                        </g>
                                                                                    </svg>
                                                                                </label>
                                                                                <input type="file" id="file-input-5" class="svg-div w-100 border-0  g-0" onchange="upload(this);" name="vehicle_id">
                                                                                <input type="text" class="form-control text-center showpdf" id="file-input-5c" disabled style="background:transparent; border:none;" name="vehicle_id">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="">
                                                                                    <span class="showname">
                                                                                        Leasing:
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="btn-group w-100" role="group" aria-label="Basic radio toggle button group">
                                                                                <input type="radio" class="btn-check showpdf" value="Ja" name="leasing" id="btnradio1" autocomplete="off">
                                                                                <label class="btn btn-outline-secondary w-100 g-0" value="Ja" for="btnradio1" onclick="showel(this)">Ja</label>
                                                                                <input type="radio" class="btn-check" name="leasing" value="Nein" id="btnradio2" autocomplete="off">
                                                                                <label class="btn btn-outline-secondary w-100 g-0 " for="btnradio2">Nein</label>
                                                                            </div>

                                                                            <div class="">
                                                                                <select name="leasing_name" class="w-100 slct1" id="">

                                                                                    <option value="Gesellschaft">
                                                                                        Gesellschaft
                                                                                    </option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="my-3">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="">
                                                                        <div class="">
                                                                                <span class="fw-bold">
                                                                                    Fahrzeuginformationen
                                                                                </span>
                                                                        </div>
                                                                        <div class="input-select-div mb-2">
                                                                            <div class="text-nowrap">
                                                                                    <span class="fw-normal showname">
                                                                                        Kaufjahr
                                                                                    </span>
                                                                            </div>
                                                                            <select name="year_of_purchase"  class="form-select w-75 showpdf" aria-label="Default select example" id="">
                                                                                <option selected></option>
                                                                                @for($i = \Carbon\Carbon::now()->format('Y'); $i >= 1950 ;$i--)
                                                                                    <option value="{{$i}}">{{$i}}</option>
                                                                                @endfor
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="date-input-div mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    Este inverkehrssetzung:
                                                                                </span>
                                                                        </div>

                                                                        <input name="first_intro" type="date" class="py-1 border-0 showpdf">

                                                                    </div>
                                                                    <div class="date-input-div mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    Beginn Versicherung:
                                                                                </span>
                                                                        </div>

                                                                        <input name="insurance_date" type="date" class="py-1 border-0 showpdf">

                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    Eingel??ster Kanton:
                                                                                </span>
                                                                        </div>
                                                                        <select name="redeemed" class="form-select w-75 showpdf" aria-label="Default select example">
                                                                            <option selected></option>
                                                                            <option value="Z??rich">Z??rich</option>
                                                                            <option value="Bern">Bern</option>
                                                                            <option value="Luzern">Luzern</option>
                                                                            <option value="Uri">Uri</option>
                                                                            <option value="Schwyz">Schwyz</option>
                                                                            <option value="Obwalden">Obwalden</option>
                                                                            <option value="Nidwalden">Nidwalden</option>
                                                                            <option value="Glarus">Glarus</option>
                                                                            <option value="Zug">Zug</option>
                                                                            <option value="Freiburg">Freiburg</option>
                                                                            <option value="Solothurn">Solothurn</option>
                                                                            <option value="Basel-Stadt">Basel-Stadt</option>
                                                                            <option value="Basel-Landschaft">Basel-Landschaft</option>
                                                                            <option value="Schaffhausen">Schaffhausen</option>
                                                                            <option value="Appenzell A.Rh.">Appenzell A.Rh.</option>
                                                                            <option value="Appenzell I.Rh.">Appenzell I.Rh.</option>
                                                                            <option value="Sankt Gallen">Sankt Gallen</option>
                                                                            <option value="Graub??nden">Graub??nden</option>
                                                                            <option value="Aargau">Aargau</option>
                                                                            <option value="Thurgau">Thurgau</option>
                                                                            <option value="Tessin">Tessin</option>
                                                                            <option value="Waadt">Waadt</option>
                                                                            <option value="Wallis">Wallis</option>
                                                                            <option value="Neuenburg">Neuenburg</option>
                                                                            <option value="Genf">Genf</option>
                                                                            <option value="Jura">Jura</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    KM - Stand:
                                                                                </span>
                                                                        </div>

                                                                        <input name="km_stood" class="py-1 showpdf" type="number" id="">

                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="">
                                                                        <div class="">
                                                                                <span class="fw-bold">
                                                                                    Lenkerinformation
                                                                                </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="date-input-div mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    Ausstelldatum Fuhrerausweis:
                                                                                </span>
                                                                        </div>

                                                                        <input name="placing_on_the_market" type="date" class="py-1 border-0 showpdf">

                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    Nationalit??t:
                                                                                </span>
                                                                        </div>
                                                                        <select  class="form-select w-75 showpdf" name="nationality">
                                                                            <option value="Swiss">Swiss</option>
                                                                            <option value="Deutschland">Deutschland</option>
                                                                            <option value="Italien">Italien</option>
                                                                            <option value="French">French</option>
                                                                            <optgroup label="A">
                                                                                <option value="Afghanistan">Afghanistan</option>
                                                                                <option value="??gypten">??gypten</option>
                                                                                <option value="??land">??land</option>
                                                                                <option value="Albanien">Albanien</option>
                                                                                <option value="Algerien">Algerien</option>
                                                                                <option value="Amerikanisch-Samoa">Amerikanisch-Samoa</option>
                                                                                <option value="Amerikanische Jungferninseln">Amerikanische Jungferninseln</option>
                                                                                <option value="Andorra">Andorra</option>
                                                                                <option value="Angola">Angola</option>
                                                                                <option value="Anguilla">Anguilla</option>
                                                                                <option value="Antarktis">Antarktis</option>
                                                                                <option value="Antigua und Barbuda">Antigua und Barbuda</option>
                                                                                <option value="??quatorialguinea">??quatorialguinea</option>
                                                                                <option value="Argentinien">Argentinien</option>
                                                                                <option value="Armenien">Armenien</option>
                                                                                <option value="Aruba">Aruba</option>
                                                                                <option value="Ascension">Ascension</option>
                                                                                <option value="Aserbaidschan">Aserbaidschan</option>
                                                                                <option value="??thiopien">??thiopien</option>
                                                                                <option value="Australien">Australien</option>
                                                                            </optgroup>
                                                                            <optgroup label="B">
                                                                                <option value="Bahamas">Bahamas</option>
                                                                                <option value="Bahrain">Bahrain</option>
                                                                                <option value="Bangladesch">Bangladesch</option>
                                                                                <option value="Barbados">Barbados</option>
                                                                                <option value="Belarus">Belarus</option>
                                                                                <option value="Belgien">Belgien</option>
                                                                                <option value="Belize">Belize</option>
                                                                                <option value="Benin">Benin</option>
                                                                                <option value="Bermuda">Bermuda</option>
                                                                                <option value="Bhutan">Bhutan</option>
                                                                                <option value="Bolivien">Bolivien</option>
                                                                                <option value="Bosnien und Herzegowina">Bosnien und Herzegowina</option>
                                                                                <option value="Botswana">Botswana</option>
                                                                                <option value="Bouvetinsel">Bouvetinsel</option>
                                                                                <option value="Brasilien">Brasilien</option>
                                                                                <option value="Britische Jungferninseln">Britische Jungferninseln</option>
                                                                                <option value="Britisches Territorium im Indischen Ozean">Britisches Territorium im Indischen Ozean</option>
                                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                                <option value="Bulgarien">Bulgarien</option>
                                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                                <option value="Burundi">Burundi</option>
                                                                            </optgroup>
                                                                            <optgroup label="C">
                                                                                <option value="Ceuta, Melilla">Ceuta, Melilla</option>
                                                                                <option value="Chile">Chile</option>
                                                                                <option value="Volksrepublik China">Volksrepublik China</option>
                                                                                <option value="Clipperton">Clipperton</option>
                                                                                <option value="Cookinseln">Cookinseln</option>
                                                                                <option value="Costa Rica">Costa Rica</option>
                                                                                <option value="C??te d'Ivoire">C??te d'Ivoire</option>
                                                                            </optgroup>
                                                                            <optgroup label="D">
                                                                                <option value="D??nemark">D??nemark</option>
                                                                                <option value="Deutschland">Deutschland</option>
                                                                                <option value="Diego Garcia">Diego Garcia</option>
                                                                                <option value="Dominica">Dominica</option>
                                                                                <option value="Dominikanische Republik">Dominikanische Republik</option>
                                                                                <option value="Dschibuti">Dschibuti</option>
                                                                            </optgroup>
                                                                            <optgroup label="E">
                                                                                <option value="Ecuador">Ecuador</option>
                                                                                <option value="El Salvador">El Salvador</option>
                                                                                <option value="Eritrea">Eritrea</option>
                                                                                <option value="Estland">Estland</option>
                                                                            </optgroup>
                                                                            <optgroup label="F">
                                                                                <option value="Falklandinseln">Falklandinseln</option>
                                                                                <option value="F??r??er">F??r??er</option>
                                                                                <option value="Fidschi">Fidschi</option>
                                                                                <option value="Finnland">Finnland</option>
                                                                                <option value="Frankreich">Frankreich</option>
                                                                                <option value="Franz??sisch-Guayana">Franz??sisch-Guayana</option>
                                                                                <option value="Franz??sisch-Polynesien">Franz??sisch-Polynesien</option>
                                                                            </optgroup>
                                                                            <optgroup label="G">
                                                                                <option value="Gabun">Gabun</option>
                                                                                <option value="Gambia">Gambia</option>
                                                                                <option value="Georgien">Georgien</option>
                                                                                <option value="Ghana">Ghana</option>
                                                                                <option value="Gibraltar">Gibraltar</option>
                                                                                <option value="Grenada">Grenada</option>
                                                                                <option value="Griechenland">Griechenland</option>
                                                                                <option value="Gr??nland">Gr??nland</option>
                                                                                <option value="Gro??britannien">Gro??britannien</option>
                                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                                <option value="Guam">Guam</option>
                                                                                <option value="Guatemala">Guatemala</option>
                                                                                <option value="Guernsey (Kanalinsel)">Guernsey (Kanalinsel)</option>
                                                                                <option value="Guinea">Guinea</option>
                                                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                                <option value="Guyana">Guyana</option>
                                                                            </optgroup>
                                                                            <optgroup label="H">
                                                                                <option value="Haiti">Haiti</option>
                                                                                <option value="Heard- und McDonald-Inseln">Heard- und McDonald-Inseln</option>
                                                                                <option value="Honduras">Honduras</option>
                                                                                <option value="Hongkong">Hongkong</option>
                                                                            </optgroup>
                                                                            <optgroup label="I">
                                                                                <option value="Indien">Indien</option>
                                                                                <option value="Indonesien">Indonesien</option>
                                                                                <option value="Insel Man">Insel Man</option>
                                                                                <option value="Irak">Irak</option>
                                                                                <option value="Iran">Iran</option>
                                                                                <option value="Irland">Irland</option>
                                                                                <option value="Island">Island</option>
                                                                                <option value="Israel">Israel</option>
                                                                                <option value="Italien">Italien</option>
                                                                            </optgroup>
                                                                            <optgroup label="J">
                                                                                <option value="Jamaika">Jamaika</option>
                                                                                <option value="Japan">Japan</option>
                                                                                <option value="Jemen">Jemen</option>
                                                                                <option value="Jersey (Kanalinsel)">Jersey (Kanalinsel)</option>
                                                                                <option value="Jordanien">Jordanien</option>
                                                                            </optgroup>
                                                                            <optgroup label="K">
                                                                                <option value="Kaimaninseln">Kaimaninseln</option>
                                                                                <option value="Kambodscha">Kambodscha</option>
                                                                                <option value="Kamerun">Kamerun</option>
                                                                                <option value="Kanada">Kanada</option>
                                                                                <option value="Kanarische Inseln">Kanarische Inseln</option>
                                                                                <option value="Kap Verde">Kap Verde</option>
                                                                                <option value="Kasachstan">Kasachstan</option>
                                                                                <option value="Katar">Katar</option>
                                                                                <option value="Kenia">Kenia</option>
                                                                                <option value="Kirgisistan">Kirgisistan</option>
                                                                                <option value="Kiribati">Kiribati</option>
                                                                                <option value="Kokosinseln">Kokosinseln</option>
                                                                                <option value="Kolumbien">Kolumbien</option>
                                                                                <option value="Komoren">Komoren</option>
                                                                                <option value="Demokratische Republik Kongo">Demokratische Republik Kongo</option>
                                                                                <option value="Demokratische Volksrepublik Korea (Nordkorea)">Demokratische Volksrepublik Korea (Nordkorea)</option>
                                                                                <option value="Republik Korea (S??dkorea)">Republik Korea (S??dkorea)</option>
                                                                                <option value="Kosovo">Kosovo</option>
                                                                                <option value="Kroatien">Kroatien</option>
                                                                                <option value="Kuba">Kuba</option>
                                                                                <option value="Kuwait">Kuwait</option>
                                                                            </optgroup>
                                                                            <optgroup label="L">
                                                                                <option value="Laos">Laos</option>
                                                                                <option value="Lesotho">Lesotho</option>
                                                                                <option value="Lettland">Lettland</option>
                                                                                <option value="Libanon">Libanon</option>
                                                                                <option value="Liberia">Liberia</option>
                                                                                <option value="Libyen">Libyen</option>
                                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                                <option value="Litauen">Litauen</option>
                                                                                <option value="Luxemburg">Luxemburg</option>
                                                                            </optgroup>
                                                                            <optgroup label="M">
                                                                                <option value="Macao">Macao</option>
                                                                                <option value="Madagaskar">Madagaskar</option>
                                                                                <option value="Malawi">Malawi</option>
                                                                                <option value="Malaysia">Malaysia</option>
                                                                                <option value="Malediven">Malediven</option>
                                                                                <option value="Mali">Mali</option>
                                                                                <option value="Malta">Malta</option>
                                                                                <option value="Marokko">Marokko</option>
                                                                                <option value="Marshallinseln">Marshallinseln</option>
                                                                                <option value="Martinique">Martinique</option>
                                                                                <option value="Mauretanien">Mauretanien</option>
                                                                                <option value="Mauritius">Mauritius</option>
                                                                                <option value="Mayotte">Mayotte</option>
                                                                                <option value="Mazedonien">Mazedonien</option>
                                                                                <option value="Mexiko">Mexiko</option>
                                                                                <option value="Mikronesien">Mikronesien</option>
                                                                                <option value="Moldawien (Republik Moldau)">Moldawien (Republik Moldau)</option>
                                                                                <option value="Monaco">Monaco</option>
                                                                                <option value="Mongolei">Mongolei</option>
                                                                                <option value="Montenegro">Montenegro</option>
                                                                                <option value="Montserrat">Montserrat</option>
                                                                                <option value="Mosambik">Mosambik</option>
                                                                                <option value="Myanmar">Myanmar (Burma)</option>
                                                                            </optgroup>
                                                                            <optgroup label="N">
                                                                                <option value="Namibia">Namibia</option>
                                                                                <option value="Nauru">Nauru</option>
                                                                                <option value="Nepal">Nepal</option>
                                                                                <option value="Neukaledonien">Neukaledonien</option>
                                                                                <option value="Neuseeland">Neuseeland</option>
                                                                                <option value="Nicaragua">Nicaragua</option>
                                                                                <option value="Niederlande">Niederlande</option>
                                                                                <option value="Niederl??ndische Antillen">Niederl??ndische Antillen</option>
                                                                                <option value="Niger">Niger</option>
                                                                                <option value="Nigeria">Nigeria</option>
                                                                                <option value="Niue">Niue</option>
                                                                                <option value="N??rdliche Marianen">N??rdliche Marianen</option>
                                                                                <option value="Norfolkinsel">Norfolkinsel</option>
                                                                                <option value="Norwegen">Norwegen</option>
                                                                            </optgroup>
                                                                            <optgroup label="O">
                                                                                <option value="Oman">Oman</option>
                                                                                <option value="Orbit">Orbit</option>
                                                                                <option value="??sterreich">??sterreich</option>
                                                                                <option value="Osttimor (Timor-Leste)">Osttimor (Timor-Leste)</option>
                                                                            </optgroup>
                                                                            <optgroup label="P">
                                                                                <option value="Pakistan">Pakistan</option>
                                                                                <option value="Pal??stinensische Autonomiegebiete">Pal??stinensische Autonomiegebiete</option>
                                                                                <option value="Palau">Palau</option>
                                                                                <option value="Panama">Panama</option>
                                                                                <option value="Papua-Neuguinea">Papua-Neuguinea</option>
                                                                                <option value="Paraguay">Paraguay</option>
                                                                                <option value="Peru">Peru</option>
                                                                                <option value="Philippinen">Philippinen</option>
                                                                                <option value="Pitcairninseln">Pitcairninseln</option>
                                                                                <option value="Polen">Polen</option>
                                                                                <option value="Portugal">Portugal</option>
                                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                            </optgroup>
                                                                            <optgroup label="R">
                                                                                <option value="Republik China (Taiwan)">Republik China (Taiwan)</option>
                                                                                <option value="Republik Kongo">Republik Kongo</option>
                                                                                <option value="R??union">R??union</option>
                                                                                <option value="Ruanda">Ruanda</option>
                                                                                <option value="Rum??nien">Rum??nien</option>
                                                                                <option value="Russische F??deration">Russische F??deration</option>
                                                                            </optgroup>
                                                                            <optgroup label="S">
                                                                                <option value="Saint-Barth??lemy">Saint-Barth??lemy</option>
                                                                                <option value="Saint-Martin">Saint-Martin</option>
                                                                                <option value="Salomonen">Salomonen</option>
                                                                                <option value="Sambia">Sambia</option>
                                                                                <option value="Samoa">Samoa</option>
                                                                                <option value="San Marino">San Marino</option>
                                                                                <option value="S??o Tom?? und Pr??ncipe">S??o Tom?? und Pr??ncipe</option>
                                                                                <option value="Saudi-Arabien">Saudi-Arabien</option>
                                                                                <option value="Schweden">Schweden</option>
                                                                                <option value="Schweiz">Schweiz</option>
                                                                                <option value="Senegal">Senegal</option>
                                                                                <option value="Serbien">Serbien</option>
                                                                                <option value="Seychellen">Seychellen</option>
                                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                                <option value="Simbabwe">Simbabwe</option>
                                                                                <option value="Singapur">Singapur</option>
                                                                                <option value="Slowakei">Slowakei</option>
                                                                                <option value="Slowenien">Slowenien</option>
                                                                                <option value="Somalia">Somalia</option>
                                                                                <option value="Spanien">Spanien</option>
                                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                                <option value="St. Helena">St. Helena</option>
                                                                                <option value="St. Kitts und Nevis">St. Kitts und Nevis</option>
                                                                                <option value="St. Lucia">St. Lucia</option>
                                                                                <option value="Saint-Pierre und Miquelon">Saint-Pierre und Miquelon</option>
                                                                                <option value="St. Vincent und die Grenadinen">St. Vincent und die Grenadinen</option>
                                                                                <option value="S??dafrika">S??dafrika</option>
                                                                                <option value="Sudan">Sudan</option>
                                                                                <option value="S??dgeorgien und die S??dlichen Sandwichinseln">S??dgeorgien und die S??dlichen Sandwichinseln</option>
                                                                                <option value="Suriname">Suriname</option>
                                                                                <option value="Svalbard und Jan Mayen">Svalbard und Jan Mayen</option>
                                                                                <option value="Swasiland">Swasiland</option>
                                                                                <option value="Syrien">Syrien</option>
                                                                            </optgroup>
                                                                            <optgroup label="T">
                                                                                <option value="Tadschikistan">Tadschikistan</option>
                                                                                <option value="Tansania">Tansania</option>
                                                                                <option value="Thailand">Thailand</option>
                                                                                <option value="Togo">Togo</option>
                                                                                <option value="Tokelau">Tokelau</option>
                                                                                <option value="Tonga">Tonga</option>
                                                                                <option value="Trinidad und Tobago">Trinidad und Tobago</option>
                                                                                <option value="Tristan da Cunha">Tristan da Cunha</option>
                                                                                <option value="Tschad">Tschad</option>
                                                                                <option value="Tschechische Republik">Tschechische Republik</option>
                                                                                <option value="Tunesien">Tunesien</option>
                                                                                <option value="T??rkei">T??rkei</option>
                                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                                <option value="Turks- und Caicosinseln">Turks- und Caicosinseln</option>
                                                                                <option value="Tuvalu">Tuvalu</option>
                                                                            </optgroup>
                                                                            <optgroup label="U">
                                                                                <option value="Uganda">Uganda</option>
                                                                                <option value="Ukraine">Ukraine</option>
                                                                                <option value="Ungarn">Ungarn</option>
                                                                                <option value="Uruguay">Uruguay</option>
                                                                                <option value="Usbekistan">Usbekistan</option>
                                                                            </optgroup>
                                                                            <optgroup label="V">
                                                                                <option value="Vanuatu">Vanuatu</option>
                                                                                <option value="Vatikanstadt">Vatikanstadt</option>
                                                                                <option value="Venezuela">Venezuela</option>
                                                                                <option value="Vereinigte Arabische Emirate">Vereinigte Arabische Emirate</option>
                                                                                <option value="Vereinigte Staaten von Amerika (USA)">Vereinigte Staaten von Amerika (USA)</option>
                                                                                <option value="Vereinigtes K??nigreich Gro??britannien und Nordirland">Vereinigtes K??nigreich Gro??britannien und Nordirland</option>
                                                                                <option value="Vietnam">Vietnam</option>
                                                                            </optgroup>
                                                                            <optgroup label="W">
                                                                                <option value="Wallis und Futuna">Wallis und Futuna</option>
                                                                                <option value="Weihnachtsinsel">Weihnachtsinsel</option>
                                                                                <option value="Westsahara">Westsahara</option>
                                                                            </optgroup>
                                                                            <optgroup label="Z">
                                                                                <option value="Zentralafrikanische Republik">Zentralafrikanische Republik</option>
                                                                                <option value="Zypern">Zypern</option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    H??ufigster Lenker?
                                                                                </span>
                                                                        </div>
                                                                        <select name="most_common"
                                                                                class="form-select w-75 showpdf"
                                                                                aria-label="Default select example">
                                                                            <option selected></option>
                                                                            <option value="Ja">Ja</option>
                                                                            <option value="Nein">Nein</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="my-3">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="">
                                                                            <span class="fw-normal fs-5">
                                                                                Gew??nschte Deckung
                                                                            </span>
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    Versischerung:
                                                                                </span>
                                                                        </div>
                                                                        <select name="insurance" class="form-select w-75 showpdf" aria-label="Default select example">
                                                                            <option selected></option>
                                                                            <option value="Haftpflicht">Haftpflicht </option>
                                                                            <option value="Teilkasko">Teilkasko</option>
                                                                            <option value="Vollkasko">Vollkasko</option>
                                                                        </select>

                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    Selbstbehalt Teilkasko:
                                                                                </span>
                                                                        </div>
                                                                        <select name="deductible" class="form-select w-75 showpdf" aria-label="Default select example">

                                                                            <option selected></option>
                                                                            <option value="500">500</option>
                                                                            <option value="1000">1000</option>
                                                                            <option value="1500">1500</option>
                                                                            <option value="2000">2000</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    Mitgef??hrte Sachen:
                                                                                </span>
                                                                        </div>
                                                                        <select name="carried" class="form-select w-75 showpdf" aria-label="Default select example">

                                                                            <option selected></option>
                                                                            @for($i=1000;$i<=20000;$i+=1000) <option value="{{$i}}">{{$i}}</option>
                                                                            @endfor

                                                                        </select>
                                                                    </div>
                                                                    <div class="">
                                                                            <span class="showname">
                                                                                Reparaturwerkstatt:
                                                                            </span>
                                                                        <!-- <div class="input-group mb-2">
                                                                      <input name="noname" type="text" placeholder="Partnergarage" class="form-control" aria-label=""
                                                                        aria-describedby="basic-addon1">
                                                                      <input name="noname" type="text" placeholder="Freie Wahl" class="form-control" aria-label=""
                                                                        aria-describedby="basic-addon1">
                                                                    </div> -->
                                                                        <div class="btn-group w-100" role="group" aria-label="Basic radio toggle button group">
                                                                            <input type="radio" class="btn-check showpdf " name="repair_shop" id="btnradio1_" value="Specific garage">
                                                                            <label class="btn btn-outline-secondary w-100 g-0" for="btnradio1_">Specific
                                                                                garage</label>
                                                                            <input type="radio" class="btn-check " name="repair_shop" value="Freie Wahl" id="btnradio2_">
                                                                            <label class="btn btn-outline-secondary w-100 g-0 " for="btnradio2_">Freie Wahl</label>

                                                                        </div>
                                                                    </div>

                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    + Unfalldeckung:
                                                                                </span>
                                                                        </div>
                                                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                            <input type="radio" class="btn-check showpdf" name="accident_coverage" value="Ja" id="btnradio3abcdef" autocomplete="off">
                                                                            <label class="btn btn-outline-secondary" for="btnradio3abcdef">Ja</label>

                                                                            <input type="radio" class="btn-check " name="accident_coverage" value="Nein" id="btnradio4abcdef" autocomplete="off">
                                                                            <label class="btn btn-outline-secondary" for="btnradio4abcdef">Nein</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    + Verkehrsrechtsschutz:
                                                                                </span>
                                                                        </div>
                                                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                            <input type="radio" class="btn-check showpdf" name="traffic_legal_protection" value="Ja" id="btnradio3a" autocomplete="off">
                                                                            <label class="btn btn-outline-secondary" for="btnradio3a">Ja</label>

                                                                            <input type="radio" class="btn-check" name="traffic_legal_protection" value="Nein" id="btnradio4a" autocomplete="off">
                                                                            <label class="btn btn-outline-secondary" for="btnradio4a">Nein</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    + Grobfahrl??ssigkeitschutz:
                                                                                </span>
                                                                        </div>
                                                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                            <input type="radio" class="btn-check showpdf" name="grossly" value="Ja" id="btnradio3ab" autocomplete="off">
                                                                            <label class="btn btn-outline-secondary" for="btnradio3ab">Ja</label>

                                                                            <input type="radio" class="btn-check" name="grossly" value="Nein" id="btnradio4ab" autocomplete="off">
                                                                            <label class="btn btn-outline-secondary" for="btnradio4ab">Nein</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    + Glasschutz:
                                                                                </span>
                                                                        </div>
                                                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                            <input type="radio" class="btn-check showpdf" name="glass_protection" value="Ja" id="btnradio3abc" autocomplete="off">
                                                                            <label class="btn btn-outline-secondary" for="btnradio3abc">Ja</label>

                                                                            <input type="radio" class="btn-check" name="glass_protection" value="Nein" id="btnradio4abc" autocomplete="off">
                                                                            <label class="btn btn-outline-secondary" for="btnradio4abc">Nein</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    + Parkschaden:
                                                                                </span>
                                                                        </div>

                                                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                            <input type="radio" class="btn-check showpdf" name="parking_damage" value="Ja" id="btnradio3abcd" autocomplete="off">
                                                                            <label class="btn btn-outline-secondary" for="btnradio3abcd">Ja</label>

                                                                            <input type="radio" class="btn-check" name="parking_damage" value="Nein" id="btnradio4abcd" autocomplete="off">
                                                                            <label class="btn btn-outline-secondary" for="btnradio4abcd">Nein</label>
                                                                        </div>

                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="showname">
                                                                                    + 24h Pannenhilfe:
                                                                                </span>
                                                                        </div>
                                                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                            <input type="radio" class="btn-check showpdf" name="hour_breakdown_assistance" value="Ja" id="btnradio3abcde" autocomplete="off">
                                                                            <label class="btn btn-outline-secondary" for="btnradio3abcde">Ja</label>

                                                                            <input type="radio" class="btn-check" name="hour_breakdown_assistance" value="Nein" id="btnradio4abcde" autocomplete="off">
                                                                            <label class="btn btn-outline-secondary" for="btnradio4abcde">Nein</label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="">
                                                                                <span class="showname">
                                                                                   Kommentar:
                                                                                </span>
                                                                    </div>

                                                                    <div class="col-12 col-6">
                                                                        <textarea class="form-control showpdf" name="nuekommentar"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center mt-3" style="margin-top: -30px" id="add_n" onclick="addanother_item_n()">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.694" height="37.694" viewBox="0 0 37.694 37.694" style="cursor:pointer;">
                                                            <g id="Group_621" data-name="Group 621" transform="translate(-663.236 -976.679)">
                                                                <g id="Group_550" data-name="Group 550" transform="translate(663.236 976.679)">
                                                                    <rect id="Rectangle_9" data-name="Rectangle 9" width="37.694" height="37.694" rx="18.847" fill="#C8C8C8" />
                                                                    <g id="Group_42" data-name="Group 42" transform="translate(12.724 12.724)">
                                                                        <line id="Line_11" data-name="Line 11" y2="11.972" transform="translate(5.986 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                                                                        <line id="Line_12" data-name="Line 12" x1="11.972" transform="translate(0 5.634)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="buton" class="py-2 text-end">
                                    <div class="row">
                                        <div class="col g-0 text-end my-auto">
                                            <div class="">
                                                <input type="checkbox" value="1"  id="autoSkip" name="autoSkip" hidden>
                                                <button type="button" id="nextonee__" onclick="autoSkipp(); nextonee(); " class="px-3 fw-bold mx-2 py-2" style="border-radius: 9px;color: #fff; background-color: #afafaf; border: none;  cursor: pointer">
                                                    Uberspringen
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col g-0 text-start">
                                            <div>
                                                <button class="px-5 py-2" type="button" style="border: none; border-radius: 9px; background-color:#285F52;" id="nextonee__" onclick="nextonee()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159" viewBox="0 0 58.155 19.159">
                                                        <g id="Group_453" data-name="Group 453" transform="translate(0.004)">
                                                            <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)" fill="none" stroke="#3fd599" stroke-width="2" />
                                                            <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z" transform="translate(58.151 0) rotate(90)" fill="#3fd599" />
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade  sachen-content" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="my-3 mx-3" style="color:#434343; background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="mx-3 py-3">
                                            <div class=" my-2">
                                                    <span class="fs-5 fw-bold">
                                                        3a/3b Anfragen
                                                    </span>
                                            </div>
                                            <div class="row ">
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xd-4">
                                                    <div class="">
                                                        <div class="input-div1 mb-2">
                                                            <div class="">
                                                                    <span class="showname" style="font-size: 15px;">
                                                                        Nationalitat:
                                                                    </span>
                                                            </div>
                                                            <select onchange="hideNation()"  class="form-select w-75 showpdf" name="nationality_sachen" id="schweiz">
                                                                <option value="Swiss">Swiss</option>
                                                                <option value="Deutschland">Deutschland</option>
                                                                <option value="Italien">Italien</option>
                                                                <option value="French">French</option>
                                                                <optgroup label="A">
                                                                    <option value="Afghanistan">Afghanistan</option>
                                                                    <option value="??gypten">??gypten</option>
                                                                    <option value="??land">??land</option>
                                                                    <option value="Albanien">Albanien</option>
                                                                    <option value="Algerien">Algerien</option>
                                                                    <option value="Amerikanisch-Samoa">Amerikanisch-Samoa</option>
                                                                    <option value="Amerikanische Jungferninseln">Amerikanische Jungferninseln</option>
                                                                    <option value="Andorra">Andorra</option>
                                                                    <option value="Angola">Angola</option>
                                                                    <option value="Anguilla">Anguilla</option>
                                                                    <option value="Antarktis">Antarktis</option>
                                                                    <option value="Antigua und Barbuda">Antigua und Barbuda</option>
                                                                    <option value="??quatorialguinea">??quatorialguinea</option>
                                                                    <option value="Argentinien">Argentinien</option>
                                                                    <option value="Armenien">Armenien</option>
                                                                    <option value="Aruba">Aruba</option>
                                                                    <option value="Ascension">Ascension</option>
                                                                    <option value="Aserbaidschan">Aserbaidschan</option>
                                                                    <option value="??thiopien">??thiopien</option>
                                                                    <option value="Australien">Australien</option>
                                                                </optgroup>
                                                                <optgroup label="B">
                                                                    <option value="Bahamas">Bahamas</option>
                                                                    <option value="Bahrain">Bahrain</option>
                                                                    <option value="Bangladesch">Bangladesch</option>
                                                                    <option value="Barbados">Barbados</option>
                                                                    <option value="Belarus">Belarus</option>
                                                                    <option value="Belgien">Belgien</option>
                                                                    <option value="Belize">Belize</option>
                                                                    <option value="Benin">Benin</option>
                                                                    <option value="Bermuda">Bermuda</option>
                                                                    <option value="Bhutan">Bhutan</option>
                                                                    <option value="Bolivien">Bolivien</option>
                                                                    <option value="Bosnien und Herzegowina">Bosnien und Herzegowina</option>
                                                                    <option value="Botswana">Botswana</option>
                                                                    <option value="Bouvetinsel">Bouvetinsel</option>
                                                                    <option value="Brasilien">Brasilien</option>
                                                                    <option value="Britische Jungferninseln">Britische Jungferninseln</option>
                                                                    <option value="Britisches Territorium im Indischen Ozean">Britisches Territorium im Indischen Ozean</option>
                                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                    <option value="Bulgarien">Bulgarien</option>
                                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                                    <option value="Burundi">Burundi</option>
                                                                </optgroup>
                                                                <optgroup label="C">
                                                                    <option value="Ceuta, Melilla">Ceuta, Melilla</option>
                                                                    <option value="Chile">Chile</option>
                                                                    <option value="Volksrepublik China">Volksrepublik China</option>
                                                                    <option value="Clipperton">Clipperton</option>
                                                                    <option value="Cookinseln">Cookinseln</option>
                                                                    <option value="Costa Rica">Costa Rica</option>
                                                                    <option value="C??te d'Ivoire">C??te d'Ivoire</option>
                                                                </optgroup>
                                                                <optgroup label="D">
                                                                    <option value="D??nemark">D??nemark</option>
                                                                    <option value="Deutschland">Deutschland</option>
                                                                    <option value="Diego Garcia">Diego Garcia</option>
                                                                    <option value="Dominica">Dominica</option>
                                                                    <option value="Dominikanische Republik">Dominikanische Republik</option>
                                                                    <option value="Dschibuti">Dschibuti</option>
                                                                </optgroup>
                                                                <optgroup label="E">
                                                                    <option value="Ecuador">Ecuador</option>
                                                                    <option value="El Salvador">El Salvador</option>
                                                                    <option value="Eritrea">Eritrea</option>
                                                                    <option value="Estland">Estland</option>
                                                                </optgroup>
                                                                <optgroup label="F">
                                                                    <option value="Falklandinseln">Falklandinseln</option>
                                                                    <option value="F??r??er">F??r??er</option>
                                                                    <option value="Fidschi">Fidschi</option>
                                                                    <option value="Finnland">Finnland</option>
                                                                    <option value="Frankreich">Frankreich</option>
                                                                    <option value="Franz??sisch-Guayana">Franz??sisch-Guayana</option>
                                                                    <option value="Franz??sisch-Polynesien">Franz??sisch-Polynesien</option>
                                                                </optgroup>
                                                                <optgroup label="G">
                                                                    <option value="Gabun">Gabun</option>
                                                                    <option value="Gambia">Gambia</option>
                                                                    <option value="Georgien">Georgien</option>
                                                                    <option value="Ghana">Ghana</option>
                                                                    <option value="Gibraltar">Gibraltar</option>
                                                                    <option value="Grenada">Grenada</option>
                                                                    <option value="Griechenland">Griechenland</option>
                                                                    <option value="Gr??nland">Gr??nland</option>
                                                                    <option value="Gro??britannien">Gro??britannien</option>
                                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                                    <option value="Guam">Guam</option>
                                                                    <option value="Guatemala">Guatemala</option>
                                                                    <option value="Guernsey (Kanalinsel)">Guernsey (Kanalinsel)</option>
                                                                    <option value="Guinea">Guinea</option>
                                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                    <option value="Guyana">Guyana</option>
                                                                </optgroup>
                                                                <optgroup label="H">
                                                                    <option value="Haiti">Haiti</option>
                                                                    <option value="Heard- und McDonald-Inseln">Heard- und McDonald-Inseln</option>
                                                                    <option value="Honduras">Honduras</option>
                                                                    <option value="Hongkong">Hongkong</option>
                                                                </optgroup>
                                                                <optgroup label="I">
                                                                    <option value="Indien">Indien</option>
                                                                    <option value="Indonesien">Indonesien</option>
                                                                    <option value="Insel Man">Insel Man</option>
                                                                    <option value="Irak">Irak</option>
                                                                    <option value="Iran">Iran</option>
                                                                    <option value="Irland">Irland</option>
                                                                    <option value="Island">Island</option>
                                                                    <option value="Israel">Israel</option>
                                                                    <option value="Italien">Italien</option>
                                                                </optgroup>
                                                                <optgroup label="J">
                                                                    <option value="Jamaika">Jamaika</option>
                                                                    <option value="Japan">Japan</option>
                                                                    <option value="Jemen">Jemen</option>
                                                                    <option value="Jersey (Kanalinsel)">Jersey (Kanalinsel)</option>
                                                                    <option value="Jordanien">Jordanien</option>
                                                                </optgroup>
                                                                <optgroup label="K">
                                                                    <option value="Kaimaninseln">Kaimaninseln</option>
                                                                    <option value="Kambodscha">Kambodscha</option>
                                                                    <option value="Kamerun">Kamerun</option>
                                                                    <option value="Kanada">Kanada</option>
                                                                    <option value="Kanarische Inseln">Kanarische Inseln</option>
                                                                    <option value="Kap Verde">Kap Verde</option>
                                                                    <option value="Kasachstan">Kasachstan</option>
                                                                    <option value="Katar">Katar</option>
                                                                    <option value="Kenia">Kenia</option>
                                                                    <option value="Kirgisistan">Kirgisistan</option>
                                                                    <option value="Kiribati">Kiribati</option>
                                                                    <option value="Kokosinseln">Kokosinseln</option>
                                                                    <option value="Kolumbien">Kolumbien</option>
                                                                    <option value="Komoren">Komoren</option>
                                                                    <option value="Demokratische Republik Kongo">Demokratische Republik Kongo</option>
                                                                    <option value="Demokratische Volksrepublik Korea (Nordkorea)">Demokratische Volksrepublik Korea (Nordkorea)</option>
                                                                    <option value="Republik Korea (S??dkorea)">Republik Korea (S??dkorea)</option>
                                                                    <option value="Kosovo">Kosovo</option>
                                                                    <option value="Kroatien">Kroatien</option>
                                                                    <option value="Kuba">Kuba</option>
                                                                    <option value="Kuwait">Kuwait</option>
                                                                </optgroup>
                                                                <optgroup label="L">
                                                                    <option value="Laos">Laos</option>
                                                                    <option value="Lesotho">Lesotho</option>
                                                                    <option value="Lettland">Lettland</option>
                                                                    <option value="Libanon">Libanon</option>
                                                                    <option value="Liberia">Liberia</option>
                                                                    <option value="Libyen">Libyen</option>
                                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                                    <option value="Litauen">Litauen</option>
                                                                    <option value="Luxemburg">Luxemburg</option>
                                                                </optgroup>
                                                                <optgroup label="M">
                                                                    <option value="Macao">Macao</option>
                                                                    <option value="Madagaskar">Madagaskar</option>
                                                                    <option value="Malawi">Malawi</option>
                                                                    <option value="Malaysia">Malaysia</option>
                                                                    <option value="Malediven">Malediven</option>
                                                                    <option value="Mali">Mali</option>
                                                                    <option value="Malta">Malta</option>
                                                                    <option value="Marokko">Marokko</option>
                                                                    <option value="Marshallinseln">Marshallinseln</option>
                                                                    <option value="Martinique">Martinique</option>
                                                                    <option value="Mauretanien">Mauretanien</option>
                                                                    <option value="Mauritius">Mauritius</option>
                                                                    <option value="Mayotte">Mayotte</option>
                                                                    <option value="Mazedonien">Mazedonien</option>
                                                                    <option value="Mexiko">Mexiko</option>
                                                                    <option value="Mikronesien">Mikronesien</option>
                                                                    <option value="Moldawien (Republik Moldau)">Moldawien (Republik Moldau)</option>
                                                                    <option value="Monaco">Monaco</option>
                                                                    <option value="Mongolei">Mongolei</option>
                                                                    <option value="Montenegro">Montenegro</option>
                                                                    <option value="Montserrat">Montserrat</option>
                                                                    <option value="Mosambik">Mosambik</option>
                                                                    <option value="Myanmar">Myanmar (Burma)</option>
                                                                </optgroup>
                                                                <optgroup label="N">
                                                                    <option value="Namibia">Namibia</option>
                                                                    <option value="Nauru">Nauru</option>
                                                                    <option value="Nepal">Nepal</option>
                                                                    <option value="Neukaledonien">Neukaledonien</option>
                                                                    <option value="Neuseeland">Neuseeland</option>
                                                                    <option value="Nicaragua">Nicaragua</option>
                                                                    <option value="Niederlande">Niederlande</option>
                                                                    <option value="Niederl??ndische Antillen">Niederl??ndische Antillen</option>
                                                                    <option value="Niger">Niger</option>
                                                                    <option value="Nigeria">Nigeria</option>
                                                                    <option value="Niue">Niue</option>
                                                                    <option value="N??rdliche Marianen">N??rdliche Marianen</option>
                                                                    <option value="Norfolkinsel">Norfolkinsel</option>
                                                                    <option value="Norwegen">Norwegen</option>
                                                                </optgroup>
                                                                <optgroup label="O">
                                                                    <option value="Oman">Oman</option>
                                                                    <option value="Orbit">Orbit</option>
                                                                    <option value="??sterreich">??sterreich</option>
                                                                    <option value="Osttimor (Timor-Leste)">Osttimor (Timor-Leste)</option>
                                                                </optgroup>
                                                                <optgroup label="P">
                                                                    <option value="Pakistan">Pakistan</option>
                                                                    <option value="Pal??stinensische Autonomiegebiete">Pal??stinensische Autonomiegebiete</option>
                                                                    <option value="Palau">Palau</option>
                                                                    <option value="Panama">Panama</option>
                                                                    <option value="Papua-Neuguinea">Papua-Neuguinea</option>
                                                                    <option value="Paraguay">Paraguay</option>
                                                                    <option value="Peru">Peru</option>
                                                                    <option value="Philippinen">Philippinen</option>
                                                                    <option value="Pitcairninseln">Pitcairninseln</option>
                                                                    <option value="Polen">Polen</option>
                                                                    <option value="Portugal">Portugal</option>
                                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                                </optgroup>
                                                                <optgroup label="R">
                                                                    <option value="Republik China (Taiwan)">Republik China (Taiwan)</option>
                                                                    <option value="Republik Kongo">Republik Kongo</option>
                                                                    <option value="R??union">R??union</option>
                                                                    <option value="Ruanda">Ruanda</option>
                                                                    <option value="Rum??nien">Rum??nien</option>
                                                                    <option value="Russische F??deration">Russische F??deration</option>
                                                                </optgroup>
                                                                <optgroup label="S">
                                                                    <option value="Saint-Barth??lemy">Saint-Barth??lemy</option>
                                                                    <option value="Saint-Martin">Saint-Martin</option>
                                                                    <option value="Salomonen">Salomonen</option>
                                                                    <option value="Sambia">Sambia</option>
                                                                    <option value="Samoa">Samoa</option>
                                                                    <option value="San Marino">San Marino</option>
                                                                    <option value="S??o Tom?? und Pr??ncipe">S??o Tom?? und Pr??ncipe</option>
                                                                    <option value="Saudi-Arabien">Saudi-Arabien</option>
                                                                    <option value="Schweden">Schweden</option>
                                                                    <option value="Schweiz">Schweiz</option>
                                                                    <option value="Senegal">Senegal</option>
                                                                    <option value="Serbien">Serbien</option>
                                                                    <option value="Seychellen">Seychellen</option>
                                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                                    <option value="Simbabwe">Simbabwe</option>
                                                                    <option value="Singapur">Singapur</option>
                                                                    <option value="Slowakei">Slowakei</option>
                                                                    <option value="Slowenien">Slowenien</option>
                                                                    <option value="Somalia">Somalia</option>
                                                                    <option value="Spanien">Spanien</option>
                                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                                    <option value="St. Helena">St. Helena</option>
                                                                    <option value="St. Kitts und Nevis">St. Kitts und Nevis</option>
                                                                    <option value="St. Lucia">St. Lucia</option>
                                                                    <option value="Saint-Pierre und Miquelon">Saint-Pierre und Miquelon</option>
                                                                    <option value="St. Vincent und die Grenadinen">St. Vincent und die Grenadinen</option>
                                                                    <option value="S??dafrika">S??dafrika</option>
                                                                    <option value="Sudan">Sudan</option>
                                                                    <option value="S??dgeorgien und die S??dlichen Sandwichinseln">S??dgeorgien und die S??dlichen Sandwichinseln</option>
                                                                    <option value="Suriname">Suriname</option>
                                                                    <option value="Svalbard und Jan Mayen">Svalbard und Jan Mayen</option>
                                                                    <option value="Swasiland">Swasiland</option>
                                                                    <option value="Syrien">Syrien</option>
                                                                </optgroup>
                                                                <optgroup label="T">
                                                                    <option value="Tadschikistan">Tadschikistan</option>
                                                                    <option value="Tansania">Tansania</option>
                                                                    <option value="Thailand">Thailand</option>
                                                                    <option value="Togo">Togo</option>
                                                                    <option value="Tokelau">Tokelau</option>
                                                                    <option value="Tonga">Tonga</option>
                                                                    <option value="Trinidad und Tobago">Trinidad und Tobago</option>
                                                                    <option value="Tristan da Cunha">Tristan da Cunha</option>
                                                                    <option value="Tschad">Tschad</option>
                                                                    <option value="Tschechische Republik">Tschechische Republik</option>
                                                                    <option value="Tunesien">Tunesien</option>
                                                                    <option value="T??rkei">T??rkei</option>
                                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                                    <option value="Turks- und Caicosinseln">Turks- und Caicosinseln</option>
                                                                    <option value="Tuvalu">Tuvalu</option>
                                                                </optgroup>
                                                                <optgroup label="U">
                                                                    <option value="Uganda">Uganda</option>
                                                                    <option value="Ukraine">Ukraine</option>
                                                                    <option value="Ungarn">Ungarn</option>
                                                                    <option value="Uruguay">Uruguay</option>
                                                                    <option value="Usbekistan">Usbekistan</option>
                                                                </optgroup>
                                                                <optgroup label="V">
                                                                    <option value="Vanuatu">Vanuatu</option>
                                                                    <option value="Vatikanstadt">Vatikanstadt</option>
                                                                    <option value="Venezuela">Venezuela</option>
                                                                    <option value="Vereinigte Arabische Emirate">Vereinigte Arabische Emirate</option>
                                                                    <option value="Vereinigte Staaten von Amerika (USA)">Vereinigte Staaten von Amerika (USA)</option>
                                                                    <option value="Vereinigtes K??nigreich Gro??britannien und Nordirland">Vereinigtes K??nigreich Gro??britannien und Nordirland</option>
                                                                    <option value="Vietnam">Vietnam</option>
                                                                </optgroup>
                                                                <optgroup label="W">
                                                                    <option value="Wallis und Futuna">Wallis und Futuna</option>
                                                                    <option value="Weihnachtsinsel">Weihnachtsinsel</option>
                                                                    <option value="Westsahara">Westsahara</option>
                                                                </optgroup>
                                                                <optgroup label="Z">
                                                                    <option value="Zentralafrikanische Republik">Zentralafrikanische Republik</option>
                                                                    <option value="Zypern">Zypern</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                        <div class="input-select-div mb-2" id="admin">
                                                            <div class="">
                                                                    <span class="showname" style="font-size: 15px;">
                                                                        Aufenthaltsgenehmigung
                                                                    </span>
                                                            </div>
                                                            <select name="residence_permit" class="form-select w-75 showpdf" aria-label="Default select example">
                                                                <option selected></option>
                                                                <option value="Aufenthaltsbewilligung (Ausweis B)">Aufenthaltsbewilligung (Ausweis B)</option>
                                                                <option value="Niederlassungsausweis (Ausweis C)">Niederlassungsausweis (Ausweis C)</option>
                                                                <option value="Aufenthaltsbewilligung mit Erwerbst??tigkeit (AUsweis Ci)">Aufenthaltsbewilligung mit Erwerbst??tigkeit (AUsweis Ci)</option>
                                                                <option value="Grenzg??ngerbewilligung (Auweis G)">Grenzg??ngerbewilligung (Auweis G)</option>
                                                                <option value=" Kurzaufenthaltsbewilligung (Ausweis L)"> Kurzaufenthaltsbewilligung (Ausweis L)</option>
                                                                <option value="Vorl??ufig aufenommene Ausl??nder (Ausweis F)">Vorl??ufig aufenommene Ausl??nder (Ausweis F)</option>
                                                                <option value="Asylsuchende (Ausweis N)">Asylsuchende (Ausweis N)</option>
                                                                <option value="Schutzbed??rftige (Ausweis S)">Schutzbed??rftige (Ausweis S)</option>
                                                            </select>
                                                        </div>
                                                        <div class=" mb-2">
                                                            <label for="telephone_nr" class="showname">Telefonnumer </label> <br>
                                                            <div class="input-group">
                                                                <input name="telephone_nr" id="int-tel" type="number" class="form-control showpdf">
                                                            </div>
                                                        </div>
                                                        <div class="input-div1 mb-2">
                                                            <div class="">
                                                                    <span class="showname" style="font-size: 15px;">
                                                                        Email
                                                                    </span>
                                                            </div>
                                                            <input name="email" class="form-control showpdf" type="email" id="">
                                                        </div>
                                                        <div class="input-select-div mb-2">
                                                            <div class="">
                                                                    <span class="showname" style="font-size: 15px;">
                                                                        Zivilstand
                                                                    </span>
                                                            </div>
                                                            <select name="zivilstand" class="form-select w-75 showpdf" aria-label="Default select example">
                                                                <option selected></option>
                                                                <option value="ledig">Ledig</option>
                                                                <option value="Verheiratet">Verheiratet</option>
                                                                <option value="Verwitwet">Verwitwet</option>
                                                                <option value="Geschieden">Geschieden</option>
                                                                <option value="In eingetragener Partnerschaft">In eingetragener Partnerschaft</option>
                                                                <option value="In aufgel??ster Partnerschaft">In aufgel??ster Partnerschaft</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-select-div mb-2">
                                                            <div class="">
                                                                    <span class="showname" style="font-size: 15px;">
                                                                        Arbeitsverh??ltnis
                                                                    </span>
                                                            </div>
                                                            <select name="employment_relationship" class="form-select w-75 showpdf" aria-label="Default select example">
                                                                <option selected></option>
                                                                <option value="Angestellt">Angestellt</option>
                                                                <option value="Selbstst??ndig ">Selbstst??ndig</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xd-4">
                                                    <div class="">
                                                        <div class="input-div1 mb-2">
                                                            <div class="">
                                                                    <span class="showname" style="font-size: 15px;">
                                                                        Beruf:
                                                                    </span>
                                                            </div>
                                                            <input name="job" class="py-1 showpdf" type="text" id="">
                                                        </div>
                                                        <div class="input-select-div mb-2">
                                                            <div class="">
                                                                    <span class="showname" style="font-size: 15px;">
                                                                        Zahlungsrythmus:
                                                                    </span>
                                                            </div>
                                                            <select name="payment_frequency" class="form-select w-75 showpdf" aria-label="Default select example">
                                                                <option selected></option>
                                                                <option value="Monatlich">Monatlich</option>
                                                                <option value="Quartalsweise">Quartalsweise</option>
                                                                <option value="J??hrlich">J??hrlich</option>
                                                            </select>
                                                        </div>
                                                        <!-- input groupd here asap -->
                                                        <div class="input-div1 mb-2">
                                                            <div class="">
                                                                    <span class="showname" style="font-size: 15px;">
                                                                        Betrag pro Monat:
                                                                    </span>
                                                            </div>
                                                            <input name="amount_per_month" class="py-1 showpdf" type="text" id="">
                                                        </div>
                                                        <div class="input-select-div mb-2">
                                                            <div class="">
                                                                    <span class="showname" style="font-size: 15px;">
                                                                        Anteli Garantie/Fond:
                                                                    </span>
                                                            </div>
                                                            <select name="share_guarantee" class="form-select w-75 showpdf" aria-label="Default select example">
                                                                <option selected></option>
                                                                <option value="10/90">10/90</option>
                                                                <option value="20/80">20/80</option>
                                                                <option value="30/70">30/70</option>
                                                                <option value="40/60">40/60</option>
                                                                <option value="50/50">50/50</option>
                                                                <option value="60/40">60/40</option>
                                                                <option value="70/30">70/30</option>
                                                                <option value="80/20">80/20</option>
                                                                <option value="90/10">90/10</option>
                                                            </select>
                                                        </div>
                                                        <div class="date-input-div mb-2">
                                                            <div class="">
                                                                    <span style="font-size: 15px;" class="showname">
                                                                        Vertragsbeginn ab:
                                                                    </span>
                                                            </div>
                                                            <select name="start_of_contract" class="form-select w-75 showpdf" aria-label="Default select example">
                                                                <option value="Januar">Januar</option>
                                                                <option value="Februar">Februar</option>
                                                                <option value="M??rz">M??rz</option>
                                                                <option value="April">April</option>
                                                                <option value="Mai">Mai</option>
                                                                <option value="Juni">Juni</option>
                                                                <option value="Juli">Juli</option>
                                                                <option value="August">August</option>
                                                                <option value="September">September</option>
                                                                <option value="Oktober">Oktober</option>
                                                                <option value="November">November</option>
                                                                <option value="Dezember">Dezember</option>
                                                            </select>
                                                        </div>
                                                        <div class="group-button-div mb-2">
                                                            <div class="">
                                                                    <span style="font-size: 15px;" class="showname">
                                                                        Pramienbefreiung:
                                                                    </span>
                                                            </div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check showpdf" name="premium_exemption" value="Ja" id="btnradio3" autocomplete="off" >
                                                                <label class="btn btn-outline-secondary" for="btnradio3">Ja</label>

                                                                <input type="radio" class="btn-check" name="premium_exemption" value="Nein" id="btnradio4" autocomplete="off">
                                                                <label class="btn btn-outline-secondary" for="btnradio4">Nein</label>
                                                            </div>
                                                            <script>
                                                                $('input[type=radio][name=premium_exemption]').change(function() {
                                                                    if (this.value == 'Ja') {
                                                                        $('#btnradio3').addClass('showpdf');
                                                                        $('#btnradio4 ').removeClass('showpdf');
                                                                    }else{
                                                                        $('#btnradio4').addClass('showpdf');
                                                                        $('#btnradio3').removeClass('showpdf');
                                                                    }
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xd-4">
                                                    <div class="">
                                                        <div class="group-button-div mb-2">
                                                            <div class="">
                                                                    <span style="font-size: 15px;" class="showname">
                                                                        EU - Rente:
                                                                    </span>
                                                            </div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check showpdf" name="eu_pension" value="Ja" id="btnradio5" autocomplete="off">
                                                                <label class="btn btn-outline-secondary" for="btnradio5" onclick="showel(this)">Ja</label>

                                                                <input type="radio" class="btn-check" name="eu_pension" value="Nein" id="btnradio6" autocomplete="off">
                                                                <label class="btn btn-outline-secondary" for="btnradio6">Nein</label>
                                                            </div>
                                                            <script>
                                                                $('input[type=radio][name=eu_pension]').change(function() {
                                                                    if (this.value == 'Ja') {
                                                                        $('#btnradio5').addClass('showpdf');
                                                                        $('#btnradio6 ').removeClass('showpdf');
                                                                    }else{
                                                                        $('#btnradio6').addClass('showpdf');
                                                                        $('#btnradio5').removeClass('showpdf');
                                                                    }
                                                                });
                                                            </script>
                                                        </div>
                                                        <div class="group-button-div mb-2">
                                                            <div class="">
                                                                    <span style="font-size: 15px;" class="showname">
                                                                        Todesfalkapital:
                                                                    </span>
                                                            </div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check showpdf" name="death_benefit" value="Ja" id="btnradio7" autocomplete="off">
                                                                <label class="btn btn-outline-secondary" for="btnradio7">Ja</label>

                                                                <input type="radio" class="btn-check" name="death_benefit" value="Nein" id="btnradio8" autocomplete="off">
                                                                <label class="btn btn-outline-secondary" for="btnradio8">Nein</label>
                                                            </div>
                                                            <script>
                                                                $('input[type=radio][name=death_benefit]').change(function() {
                                                                    if (this.value == 'Ja') {
                                                                        $('#btnradio7').addClass('showpdf');
                                                                        $('#btnradio8 ').removeClass('showpdf');
                                                                    }else{
                                                                        $('#btnradio8').addClass('showpdf');
                                                                        $('#btnradio7').removeClass('showpdf');
                                                                    }
                                                                });
                                                            </script>
                                                        </div>
                                                        <div class="group-button-div mb-2">
                                                            <div class="">
                                                                    <span style="font-size: 15px;" class="showname">
                                                                        Raucher:
                                                                    </span>
                                                            </div>
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check showpdf" name="smoker" value="Ja" id="btnradio9" autocomplete="off">
                                                                <label class="btn btn-outline-secondary" for="btnradio9">Ja</label>

                                                                <input type="radio" class="btn-check" name="smoker" value="Nein" id="btnradio10" autocomplete="off">
                                                                <label class="btn btn-outline-secondary" for="btnradio10">Nein</label>
                                                            </div>
                                                            <script>
                                                                $('input[type=radio][name=smoker]').change(function() {
                                                                    if (this.value == 'Ja') {
                                                                        $('#btnradio9').addClass('showpdf');
                                                                        $('#btnradio10 ').removeClass('showpdf');
                                                                    }else{
                                                                        $('#btnradio10').addClass('showpdf');
                                                                        $('#btnradio9').removeClass('showpdf');
                                                                    }
                                                                });
                                                            </script>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="exampleFormControlTextarea2" class="form-label showname">Gew??nschte
                                                                Gesellschaften:</label>
                                                            <textarea name="desired" class="form-control showpdf" id="exampleFormControlTextarea2" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center  pb-3">
                                <div class="row">
                                    <div class="col g-0 text-end my-auto">
                                        <div class="">
                                            <input type="checkbox" value="1" id="vorsorgenSkip" name="vorsorgenSkip" hidden>
                                            <button type="button" id="nextonee__" onclick="vorsorgeSkipp(); nextonee();" class="px-3 fw-bold mx-2 py-2" style="border-radius: 9px;color: #fff; background-color: #afafaf; border: none;  cursor: pointer">
                                                Uberspringen
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col g-0 text-start">
                                        <div class="">
                                            <button class="px-5 py-2" type="button" style="border: none; border-radius: 9px; background-color:#285F52;" onclick="nextonee()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159" viewBox="0 0 58.155 19.159">
                                                    <g id="Group_453" data-name="Group 453" transform="translate(0.004)">
                                                        <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)" fill="none" stroke="#3fd599" stroke-width="2" />
                                                        <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z" transform="translate(58.151 0) rotate(90)" fill="#3fd599" />
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade  vorsorge-content" id="nav-fourth" role="tabpanel" aria-labelledby="nav-fourth-tab">
                            <div class="row mx-2 mx-sm-4">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-3 mb-2 mb-sm-3 ">
                                    <div class="mb-2">
                                            <span class="fw-bold fs-6">
                                                Hausrat- & Privathaftpflicht
                                            </span>
                                    </div>
                                    <div class="accordion accordion-flush" id="accordionFlushExample3">
                                        <div class="accordion-item" style="background-color: #EFEFEF; border-radius: 10px">
                                            <h2 class="accordion-header" id="flush-headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                                                <span class="fs-6" id="title-span" style="font-weight: 600;">
                                                                    Gegenofferte?
                                                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                                                <span class="" style="font-size: 13px;">
                                                                    Bestelle eine Gegenofferte f??r eine bestehende
                                                                    Hausrat- / Prifathaftlichtversicherung.
                                                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample3">
                                                <div class="accordion-body" style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="">
                                                                <span class="showname" style="font-size: 13px;">
                                                                    Police Hochladen:
                                                                </span>
                                                        </div>
                                                        <div class="">
                                                            <div class="upload-box mx-1 my-2">
                                                                <div class="mx-1 my-2 p-4 text-center">
                                                                    <label for="file-input-6">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                                                            <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                                                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5" transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                                                                <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                                                                    <path id="Path_234" data-name="Path 234" d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6" transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                                    <path id="Path_235" data-name="Path 235" d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z" transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                    </label>
                                                                    <input type="file" id="file-input-6" class="svg-div w-100 border-0  g-0" onchange="upload(this);" name="upload_police__">
                                                                    <input type="text" class="form-control text-center showpdf" id="file-input-6c" disabled style="background:transparent;border:none;" name="upload_police__">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="">
                                                            <div class="row mx-2">
                                                                <div class="col-5 d-flex g-0">
                                                                    <div class="text-nowrap">
                                                                            <span class="fw-bold" style=" font-size: 12px;">
                                                                                Vergleichsart:
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col g-0 d-flex justify-content-end">
                                                                    <div class="select-div text-end">
                                                                        <select name="Hvergleichsart_select" class="fw-bold" id="" style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                                            <option selected>Ausw??hlen</option>
                                                                            <option value="1:0 Aktualisierung">1:0 Aktualisierung</option>
                                                                            <option value="0:1 Downgraden">0:1 Downgraden</option>
                                                                            <option value="1:1 Das Gleiche">1:1 Das Gleiche</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="mb-3 mt-3">
                                                                <label for="exampleFormControlTextarea2" class="form-label showname" style="font-size: 13px;">Kommentar</label>
                                                                <textarea name="comment__" class="form-control showpdf" id="exampleFormControlTextarea2" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                        @if(!Auth::user()->hasRole('fs'))
                                                            <div class="text-start">
                                                                Neue Offer
                                                                <div class="upload-box mx-1 my-2 p-3">
                                                                    <div class="mx-1 my-2 text-center">
                                                                        <label for="file-input-6ww">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                                                                <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                                                                    <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5" transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                                                                    <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                                                                        <path id="Path_234" data-name="Path 234" d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6" transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                                        <path id="Path_235" data-name="Path 235" d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z" transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </label>
                                                                        <input type="file" id="file-input-6ww" class="svg-div w-100 border-0  g-0" onchange="upload(this);" name="offersach">
                                                                        <input type="text" class="form-control text-center" id="file-input-6wwc" disabled style="background:transparent; border:none;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-1 mt-2 mb-sm-3 mt-sm-3 ">
                                    <div class="mb-2">
                                            <span class="fw-bold fs-6 text-white be-gone">
                                                Hausrat- & Privathaftpflicht
                                            </span>
                                    </div>
                                    <div class="accordion accordion-flush" id="accordionFlushExample4">
                                        <div class="accordion-item" style="background-color: #EFEFEF; border-radius: 10px">
                                            <h2 class="accordion-header" id="flush-headingFour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                                                <span class="fs-6" id="title-span" style="font-weight: 600;">
                                                                    Neue Sachversicherung
                                                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                                                <span class="" style="font-size: 13px;">
                                                                    Bestelle eine Offerte f??r eine neue Hausrat- /
                                                                    Haftpflichtversicherung.
                                                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body" style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="row mx-0">
                                                            <div class="col-5 d-flex g-0">
                                                                <div class="text-nowrap">
                                                                        <span class="fw-bold" style=" font-size: 15px;">
                                                                            Neue Anfarge
                                                                        </span>
                                                                </div>
                                                            </div>
                                                            {{--                                                                <div class="col g-0 d-flex justify-content-end">--}}
                                                            {{--                                                                    <div class="select-div text-end ">--}}
                                                            {{--                                                                        <select name="noname" class="fw-bold" id="" style="background-color: #EFEFEF; font-size: 15px;color:#9F9F9F;">--}}
                                                            {{--                                                                            <option selected>Select</option>--}}
                                                            {{--                                                                            <option value="1">Ja</option>--}}
                                                            {{--                                                                            <option value="2">Nein</option>--}}
                                                            {{--                                                                        </select>--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                </div>--}}
                                                        </div>
                                                        <div class="my-2">
                                                            <div class="input-select-div">
                                                                <div class="">
                                                                        <span class="showname" style="font-size: 15px;">
                                                                            Anzahl Personen
                                                                        </span>
                                                                </div>
                                                                <select name="number_of_people" class="form-select w-50 showpdf" aria-label="Default select example">
                                                                    <option selected></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>

                                                                </select>
                                                            </div>
                                                            <div class="input-select-div">
                                                                <div class="">
                                                                        <span class="showname" style="font-size: 15px;">
                                                                            Anzahl Zimmer
                                                                        </span>
                                                                </div>
                                                                <select name="number_of_rooms" class="form-select w-50 showpdf" aria-label="Default select example">
                                                                    <option selected></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                </select>
                                                            </div>
                                                            <div class="input-div1">
                                                                <div class="showname">
                                                                        <span class="" style="font-size: 15px;">
                                                                            Versicherungsumme
                                                                        </span>
                                                                </div>
                                                                <input name="sum_insured" class="py-1 showpdf" type="text" id="">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlTextarea4" class="form-label showname" style="font-size: 15px;">
                                                                    Gew??nschte Zusatzdeckung:</label>
                                                                <textarea name="desired_additional_coverage" class="form-control showpdf" id="exampleFormControlTextarea4" rows="3">

                                                                </textarea>
                                                            </div>
                                                            <div class="input-select-div">
                                                                <div class="">
                                                                        <span class="showname" style="font-size: 15px;">
                                                                            Pricathaftpflicht?
                                                                        </span>
                                                                </div>
                                                                <select name="personal_liability" class="form-select w-50 showpdf" aria-label="Default select example">
                                                                    <option selected></option>
                                                                    <option value="Ja">Ja</option>
                                                                    <option value="Nein">Nein</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-1 mt-1 mb-sm-3 mt-sm-3">
                                    <div class="mb-2">
                                            <span class="fw-bold fs-6">
                                                Rechtsschutzversicherung
                                            </span>
                                    </div>
                                    <div class="accordion accordion-flush" id="accordionFlushExample5">
                                        <div class="accordion-item" style="background-color: #EFEFEF; border-radius: 10px">
                                            <h2 class="accordion-header" id="flush-headingFive">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                                                <span class="fs-6" id="title-span" style="font-weight: 600;">
                                                                    Gesellschaft w??hlen?
                                                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                                                <span class="" style="font-size: 13px;">
                                                                    Bestelle eine Offerte f??r eine neue Hausrat- /
                                                                    Haftpflichtversicherung.
                                                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExampleFive">
                                                <div class="accordion-body" style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="row mx-0">
                                                            <div class="col-5 d-flex g-0">
                                                                <div class="text-nowrap">
                                                                        <span class="fw-bold" style=" font-size: 15px;">
                                                                            Neue Anfarge
                                                                        </span>
                                                                </div>
                                                            </div>
                                                            {{--                                                                <div class="col g-0 d-flex justify-content-end">--}}
                                                            {{--                                                                    <div class="select-div text-end ">--}}
                                                            {{--                                                                        <select name="noname" class="fw-bold" id="" style="background-color: #EFEFEF; font-size: 15px;color:#9F9F9F;">--}}
                                                            {{--                                                                            <option selected>Select</option>--}}
                                                            {{--                                                                            <option value="1">Ja</option>--}}
                                                            {{--                                                                            <option value="2">Nein</option>--}}
                                                            {{--                                                                        </select>--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                </div>--}}
                                                        </div>
                                                        <div class="input-div1">
                                                            <div class="">
                                                                    <span class="showname" style="font-size: 15px;">
                                                                        Gesellschaft
                                                                    </span>
                                                            </div>
                                                            <input name="society" class="py-1 showpdf" type="text" id="">
                                                        </div>
                                                        <div class="input-select-div">
                                                            <div class="">
                                                                    <span class="showname" style="font-size: 15px;">
                                                                        Anzahl Personen
                                                                    </span>
                                                            </div>
                                                            <select name="n_of_p_legal_protection" class="form-select w-50 showpdf" aria-label="Default select example">
                                                                <option selected></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-3 pb-3">
                                    <div class="row">
                                        <div class="col g-0 text-end my-auto">
                                            <div class="">
                                                <input type="checkbox" value="1" id="sachenSkip" name="sachenSkip" hidden>
                                                <button type="button" onclick="showpdf(); sachenSkipp();" class="px-3 fw-bold mx-2 py-2" style="border-radius: 9px;color: #fff; background-color: #afafaf; border: none;  cursor: pointer">
                                                    Uberspringen
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col g-0 text-start">
                                            <div class="">
                                                <button type="button" class="px-5 py-2"
                                                        onclick="showpdf()" style="border: none; border-radius: 9px; background-color:#285F52;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#fff" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <h4>Ihr Formular wurde an das Backoffice weitergeleitet!</h4>
                            <button class="btn" type="submit" style="background: #3CD598;">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div id="kranken1" class="text-center"></div>
    </div>
</div>
{{-- mobile--}}
<div class="mobile-nav" id="mobile-nav">
    <a href="{{route('dashboard')}}" class="m-nav {{ (request()->is('/')) ? 'activeClassNavMob__' : '' }}">
            <span>
                <svg width="26" viewBox="0 0 18 21" fill="#88889D" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.0001 6.99952L11.0001 1.73952C10.4501 1.24756 9.73803 0.975586 9.00009 0.975586C8.26216 0.975586 7.55012 1.24756 7.00009 1.73952L1.00009 6.99952C0.682463 7.28359 0.428995 7.63207 0.256567 8.02176C0.0841385 8.41145 -0.00329256 8.8334 9.47941e-05 9.25952V17.9995C9.47941e-05 18.7952 0.316165 19.5582 0.878775 20.1208C1.44138 20.6834 2.20445 20.9995 3.00009 20.9995H15.0001C15.7957 20.9995 16.5588 20.6834 17.1214 20.1208C17.684 19.5582 18.0001 18.7952 18.0001 17.9995V9.24952C18.0021 8.82508 17.9139 8.40506 17.7416 8.0172C17.5692 7.62934 17.3165 7.28247 17.0001 6.99952ZM11.0001 18.9995H7.00009V13.9995C7.00009 13.7343 7.10545 13.4799 7.29299 13.2924C7.48052 13.1049 7.73488 12.9995 8.00009 12.9995H10.0001C10.2653 12.9995 10.5197 13.1049 10.7072 13.2924C10.8947 13.4799 11.0001 13.7343 11.0001 13.9995V18.9995ZM16.0001 17.9995C16.0001 18.2647 15.8947 18.5191 15.7072 18.7066C15.5197 18.8942 15.2653 18.9995 15.0001 18.9995H13.0001V13.9995C13.0001 13.2039 12.684 12.4408 12.1214 11.8782C11.5588 11.3156 10.7957 10.9995 10.0001 10.9995H8.00009C7.20444 10.9995 6.44138 11.3156 5.87877 11.8782C5.31616 12.4408 5.00009 13.2039 5.00009 13.9995V18.9995H3.00009C2.73488 18.9995 2.48052 18.8942 2.29299 18.7066C2.10545 18.5191 2.00009 18.2647 2.00009 17.9995V9.24952C2.00027 9.10753 2.03069 8.96721 2.08931 8.8379C2.14794 8.70858 2.23343 8.59323 2.3401 8.49952L8.34009 3.24952C8.52258 3.0892 8.75719 3.00078 9.00009 3.00078C9.243 3.00078 9.47761 3.0892 9.66009 3.24952L15.6601 8.49952C15.7668 8.59323 15.8523 8.70858 15.9109 8.8379C15.9695 8.96721 15.9999 9.10753 16.0001 9.24952V17.9995Z" />
                </svg>
            </span>

        <div class="text-center mt-1 active-dot">
                <span>
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="#4DC591" />
                    </svg>
                </span>
        </div>
    </a>
    @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
        Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin'))
        <a href="{{route('tasks')}}" class="m-nav {{ (request()->is('tasks')) ? 'activeClassNavMob__' : '' }}">
            <span>
                <svg width="26" viewBox="0 0 19 20" fill="#88889D" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.25 12H5.25C4.98478 12 4.73043 12.1054 4.54289 12.2929C4.35536 12.4804 4.25 12.7348 4.25 13C4.25 13.2652 4.35536 13.5196 4.54289 13.7071C4.73043 13.8946 4.98478 14 5.25 14H13.25C13.5152 14 13.7696 13.8946 13.9571 13.7071C14.1446 13.5196 14.25 13.2652 14.25 13C14.25 12.7348 14.1446 12.4804 13.9571 12.2929C13.7696 12.1054 13.5152 12 13.25 12ZM13.25 8H7.25C6.98478 8 6.73043 8.10536 6.54289 8.29289C6.35536 8.48043 6.25 8.73478 6.25 9C6.25 9.26522 6.35536 9.51957 6.54289 9.70711C6.73043 9.89464 6.98478 10 7.25 10H13.25C13.5152 10 13.7696 9.89464 13.9571 9.70711C14.1446 9.51957 14.25 9.26522 14.25 9C14.25 8.73478 14.1446 8.48043 13.9571 8.29289C13.7696 8.10536 13.5152 8 13.25 8ZM17.25 2H14.25V1C14.25 0.734784 14.1446 0.48043 13.9571 0.292893C13.7696 0.105357 13.5152 0 13.25 0C12.9848 0 12.7304 0.105357 12.5429 0.292893C12.3554 0.48043 12.25 0.734784 12.25 1V2H10.25V1C10.25 0.734784 10.1446 0.48043 9.95711 0.292893C9.76957 0.105357 9.51522 0 9.25 0C8.98478 0 8.73043 0.105357 8.54289 0.292893C8.35536 0.48043 8.25 0.734784 8.25 1V2H6.25V1C6.25 0.734784 6.14464 0.48043 5.95711 0.292893C5.76957 0.105357 5.51522 0 5.25 0C4.98478 0 4.73043 0.105357 4.54289 0.292893C4.35536 0.48043 4.25 0.734784 4.25 1V2H1.25C0.984784 2 0.73043 2.10536 0.542893 2.29289C0.355357 2.48043 0.25 2.73478 0.25 3V17C0.25 17.7956 0.566071 18.5587 1.12868 19.1213C1.69129 19.6839 2.45435 20 3.25 20H15.25C16.0456 20 16.8087 19.6839 17.3713 19.1213C17.9339 18.5587 18.25 17.7956 18.25 17V3C18.25 2.73478 18.1446 2.48043 17.9571 2.29289C17.7696 2.10536 17.5152 2 17.25 2ZM16.25 17C16.25 17.2652 16.1446 17.5196 15.9571 17.7071C15.7696 17.8946 15.5152 18 15.25 18H3.25C2.98478 18 2.73043 17.8946 2.54289 17.7071C2.35536 17.5196 2.25 17.2652 2.25 17V4H4.25V5C4.25 5.26522 4.35536 5.51957 4.54289 5.70711C4.73043 5.89464 4.98478 6 5.25 6C5.51522 6 5.76957 5.89464 5.95711 5.70711C6.14464 5.51957 6.25 5.26522 6.25 5V4H8.25V5C8.25 5.26522 8.35536 5.51957 8.54289 5.70711C8.73043 5.89464 8.98478 6 9.25 6C9.51522 6 9.76957 5.89464 9.95711 5.70711C10.1446 5.51957 10.25 5.26522 10.25 5V4H12.25V5C12.25 5.26522 12.3554 5.51957 12.5429 5.70711C12.7304 5.89464 12.9848 6 13.25 6C13.5152 6 13.7696 5.89464 13.9571 5.70711C14.1446 5.51957 14.25 5.26522 14.25 5V4H16.25V17Z" />
                </svg>
            </span>
            <div class="text-center mt-1 active-dot">
                <span>
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="#4DC591" />
                    </svg>
                </span>
            </div>
        </a>
    @endif
    @if(Auth::guard('admins')->check())
        <a href="{{route('costumers')}}" class="m-nav {{ (request()->is('costumers')) ? 'activeClassNavMob__' : '' }}">
            <span>
                <svg width="28" viewBox="0 0 28 20" fill="#88889D" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 8.60824C21.075 8.60824 22.7375 6.70689 22.7375 4.35148C22.7375 1.99608 21.075 0.0947266 19 0.0947266C16.925 0.0947266 15.25 1.99608 15.25 4.35148C15.25 6.70689 16.925 8.60824 19 8.60824ZM9 8.60824C11.075 8.60824 12.7375 6.70689 12.7375 4.35148C12.7375 1.99608 11.075 0.0947266 9 0.0947266C6.925 0.0947266 5.25 1.99608 5.25 4.35148C5.25 6.70689 6.925 8.60824 9 8.60824ZM9 11.4461C6.0875 11.4461 0.25 13.1062 0.25 16.4123V19.9596H17.75V16.4123C17.75 13.1062 11.9125 11.4461 9 11.4461ZM19 11.4461C18.6375 11.4461 18.225 11.4745 17.7875 11.517C19.2375 12.7089 20.25 14.3123 20.25 16.4123V19.9596H27.75V16.4123C27.75 13.1062 21.9125 11.4461 19 11.4461Z" />
                </svg>
            </span>
            <div class="text-center mt-1 active-dot">
                <span>
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="#4DC591" />
                    </svg>
                </span>
            </div>
        </a>
    @endif
    @if(Auth::guard('admins')->user()->hasRole('admin') ||
        Auth::guard('admins')->user()->hasRole('fs') ||
        Auth::guard('admins')->user()->hasRole('salesmanager')
        ||Auth::guard('admins')->user()->hasRole('menagment'))
        <a href="{{route('leads')}}" class="m-nav {{ (request()->is('leads')) ? 'activeClassNavMob__' : '' }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="27" fill="#88889D" class="bi bi-hdd-stack-fill" viewBox="0 0 16 16">
                    <path d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1z" />
                </svg>
            </span>
            <div class="text-center mt-1 active-dot">
                <span>
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="#4DC591" />
                    </svg>
                </span>
            </div>
        </a>
    @endif

    <div class="m-nav" onclick="openBurgerFunct()">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="my-1" width="26.586" height="18.077" viewBox="0 0 26.586 18.077">
                    <g id="Group_1004" data-name="Group 1004" transform="translate(-79.5 -43.5)">
                        <line id="Line_62" data-name="Line 62" x2="24.586" transform="translate(80.5 44.5)" fill="none" stroke="#88889d" stroke-linecap="round" stroke-width="2" />
                        <line id="Line_63" data-name="Line 63" x2="24.586" transform="translate(80.5 52.538)" fill="none" stroke="#88889d" stroke-linecap="round" stroke-width="2" />
                        <line id="Line_64" data-name="Line 64" x2="24.586" transform="translate(80.5 60.577)" fill="none" stroke="#88889d" stroke-linecap="round" stroke-width="2" />
                    </g>
                </svg>

            </span>
        <div class="text-center mt-1 active-dot">
                <span>
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="#4DC591" />
                    </svg>
                </span>
        </div>
    </div>
</div>
</a>


</div>

<div class="bottom-burger-modal" id="bottom-burger" style="display: none; text-decoration: none !important;">
    <div class="my-2">
        <div class="row">
            <div class="col">
                <img src="" class="img-fluid" alt="">
            </div>
            <div class="col">
                <div class="my-auto text-end pe-2">
                    <svg xmlns="http://www.w3.org/2000/svg" onclick="openBurgerFunct()" width="26" fill="#88889D" class="bi bi-x-lg" style="cursor: pointer;" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                        <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="content-of-burger col-9 mx-auto ">
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                <a href="{{route('status')}}" class="m-nav text-decoration-none {{ (request()->is('status')) ? 'activeClassNavMob__' : '' }}">
                    <span class="px-2 active-dot">
                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#4DC591" />
                        </svg>
                    </span>
                    <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                            <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                        </svg>
                    </span>
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
                        STATUS
                    </span>
                </a>
                <hr>
            @endif
        </div>
        {{--            <div class="my-3 m-burger">--}}
        {{--                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||--}}
        {{--                Auth::guard('admins')->user()->hasRole('admin'))--}}
        {{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
        {{--                    <span class="px-2 active-dot">--}}
        {{--                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
        {{--                            <circle cx="2" cy="2" r="2" fill="#4DC591" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="px-3 ">--}}
        {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-cash-coin" viewBox="0 0 16 16">--}}
        {{--                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />--}}
        {{--                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />--}}
        {{--                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />--}}
        {{--                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
        {{--                        EINZAHLUNG--}}
        {{--                    </span>--}}
        {{--                </a>--}}
        {{--                <hr>--}}
        {{--                @endif--}}
        {{--            </div>--}}
        {{--            <div class="my-3 m-burger">--}}
        {{--                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||--}}
        {{--                Auth::guard('admins')->user()->hasRole('admin'))--}}
        {{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
        {{--                    <span class="px-2 active-dot">--}}
        {{--                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
        {{--                            <circle cx="2" cy="2" r="2" fill="#4DC591" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="px-3 ">--}}
        {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-x-square" viewBox="0 0 16 16">--}}
        {{--                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />--}}
        {{--                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
        {{--                        STORNIERUNGEN--}}
        {{--                    </span>--}}
        {{--                </a>--}}
        {{--                <hr>--}}
        {{--                @endif--}}
        {{--            </div>--}}
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('fs') ||
                Auth::guard('admins')->user()->hasRole('salesmanager') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                <a href="{{route('Appointments')}}" class="m-nav text-decoration-none {{ (request()->is('Appointments')) ? 'activeClassNavMob__' : '' }}">
                    <span class="px-2 active-dot">
                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#4DC591" />
                        </svg>
                    </span>
                    <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-calendar-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                    </span>
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
                        @if(Auth::guard('admins')->user()->hasRole('salesmanager'))
                            TERMINEN
                        @else
                            KALENDER
                        @endif
                    </span>
                </a>
                <hr>
            @endif
        </div>
        {{--            <div class="my-3 m-burger">--}}
        {{--                @if(Auth::guard('admins')->user()->hasRole('admin') ||--}}
        {{--                Auth::guard('admins')->user()->hasRole('menagment') ||--}}
        {{--                Auth::guard('admins')->user()->hasRole('salesmanager'))--}}
        {{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
        {{--                    <span class="px-2 active-dot">--}}
        {{--                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
        {{--                            <circle cx="2" cy="2" r="2" fill="#4DC591" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="px-3 ">--}}
        {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-people-fill" viewBox="0 0 16 16">--}}
        {{--                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />--}}
        {{--                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />--}}
        {{--                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
        {{--                        MITARBEITER--}}
        {{--                    </span>--}}
        {{--                </a>--}}
        {{--                <hr>--}}
        {{--                @endif--}}
        {{--            </div>--}}
        {{--            <div class="my-3 m-burger">--}}
        {{--                @if(Auth::guard('admins')->user()->hasRole('finance') ||--}}
        {{--                Auth::guard('admins')->user()->hasRole('admin'))--}}
        {{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
        {{--                    <span class="px-2 active-dot">--}}
        {{--                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
        {{--                            <circle cx="2" cy="2" r="2" fill="#4DC591" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="px-3 ">--}}
        {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-percent" viewBox="0 0 16 16">--}}
        {{--                            <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
        {{--                        PROVISIONEN--}}
        {{--                    </span>--}}
        {{--                </a>--}}
        {{--                <hr>--}}
        {{--                @endif--}}
        {{--            </div>--}}
        {{--            <div class="my-3 m-burger">--}}
        {{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
        {{--                    <span class="px-2 active-dot">--}}
        {{--                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
        {{--                            <circle cx="2" cy="2" r="2" fill="#4DC591" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="px-3 ">--}}
        {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-grid" viewBox="0 0 16 16">--}}
        {{--                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
        {{--                        FINANZEN--}}
        {{--                    </span>--}}
        {{--                </a>--}}
        {{--                <hr>--}}
        {{--            </div>--}}
        {{--            <div class="my-3 m-burger">--}}
        {{--                @if(Auth::guard('admins')->user()->hasRole('admin') ||--}}
        {{--                Auth::guard('admins')->user()->hasRole('menagment') ||--}}
        {{--                Auth::guard('admins')->user()->hasRole('salesmanager'))--}}
        {{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
        {{--                    <span class="px-2 active-dot">--}}
        {{--                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
        {{--                            <circle cx="2" cy="2" r="2" fill="#4DC591" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="px-3 ">--}}
        {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-diagram-2-fill" viewBox="0 0 16 16">--}}
        {{--                            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
        {{--                        PROV.SYSTEM--}}
        {{--                    </span>--}}
        {{--                </a>--}}
        {{--                <hr>--}}
        {{--                @endif--}}
        {{--            </div>--}}
        {{--            <div class="my-3 m-burger">--}}
        {{--                @if(Auth::guard('admins')->user()->hasRole('admin') ||--}}
        {{--                Auth::guard('admins')->user()->hasRole('menagment') ||--}}
        {{--                Auth::guard('admins')->user()->hasRole('salesmanager'))--}}
        {{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
        {{--                    <span class="px-2 active-dot">--}}
        {{--                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
        {{--                            <circle cx="2" cy="2" r="2" fill="#4DC591" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="px-3 ">--}}
        {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">--}}
        {{--                            <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
        {{--                        STATISTIK--}}
        {{--                    </span>--}}
        {{--                </a>--}}
        {{--                <hr>--}}
        {{--                @endif--}}
        {{--            </div>--}}
        {{--            <div class="my-3 m-burger">--}}
        {{--                @if(Auth::guard('admins')->user()->hasRole('menagment') ||--}}
        {{--                Auth::guard('admins')->user()->hasRole('finance')--}}
        {{--                ||Auth::guard('admins')->user()->hasRole('admin') )--}}
        {{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
        {{--                    <span class="px-2 active-dot">--}}
        {{--                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
        {{--                            <circle cx="2" cy="2" r="2" fill="#4DC591" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="px-3 ">--}}
        {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-diagram-2-fill" viewBox="0 0 16 16">--}}
        {{--                            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z" />--}}
        {{--                        </svg>--}}
        {{--                    </span>--}}
        {{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
        {{--                        TREUHAND--}}
        {{--                    </span>--}}
        {{--                </a>--}}
        {{--                <hr>--}}
        {{--                @endif--}}
        {{--            </div>--}}
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('admin'))
                <a href="{{route('addnewuser')}}" class="m-nav text-decoration-none {{ (request()->is('addnewuser')) ? 'activeClassNavMob__' : '' }}">
                    <span class="px-2 active-dot">
                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#4DC591" />
                        </svg>
                    </span>
                    <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                    </span>
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
                        REGISTRIEREN
                    </span>
                </a>
                <hr>
            @endif
        </div>
        <div class="my-3 m-burger">
            @if(auth()->user()->admin_id != null)
                <a href="{{action('App\Http\Controllers\UserController@changerole')}}" class="m-nav text-decoration-none">
                        <span class="px-2 active-dot">
                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                            </svg>
                        </span>
                    <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" fill="#88889d" class="bi bi-person-check" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        </span>
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
                            ROLLE WECHSELN
                        </span>
                </a>
            @endif
        </div>
        <div class="my-3 m-burger">
            <a href="{{route('logout')}}" class="m-nav text-decoration-none">
                    <span class="px-2 active-dot">
                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#4DC591" />
                        </svg>
                    </span>
                <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" fill="#88889d" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                    </span>
                <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
                        ABMELDEN
                    </span>
            </a>
        </div>
        <div id="krankss">

        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function openBurgerFunct() {
        $("#bottom-burger").slideToggle();
    }
</script>
{{--mobile--}}
<style>
    /* .firstHr {
        width: 5px;
        height: 3px;
        transition: all 0.2s ease-in-out;
        text-align: center;
    }

    .m-burger:hover .firstHr {
        width: 20px;
    } */

    .bottom-burger-modal {
        width: 100%;
        height: 100vh;
        overflow: auto;
        background: #F1F1F1;
        position: absolute;
        margin: 0;
        padding: 0;
        z-index: 3;
        position: fixed;
        bottom: 0;
        animation: myfirst 0.6s;
        animation-direction: reverse;
    }

    @keyframes myfirst {
        0% {
            left: 0px;
            top: 0px;
        }

        100% {
            left: 0px;
            top: 100%;
        }
    }

    .item-nvm {
        border: none;
        border-bottom: 1px solid #a7a7a7
    }

    .item-nvm:hover {
        background-color: #f3f3f3;
    }

    .m-nav .dropup .dropdown-toggle::after {
        display: none !important;
    }

    .mobile-nav {
        z-index: 1000;
        background: #F1F1F1;
        position: fixed;
        bottom: 0;
        height: 65px;
        border: none;
        border-top: 1px solid #b3b3b3;
        margin-top: auto !important;
        margin-bottom: auto !important;
        width: 100% !important;
        display: flex;
        align-items: center !important;
        justify-content: space-evenly !important;
        vertical-align: middle !important;
    }

    .mobile-nav a {
        text-decoration: none !important;
        color: #000;
    }


    .active-dot {
        visibility: hidden;
        display: none;
    }

    .mobile-nav {
        display: none;
    }

    .first-col1 {
        display: block;
    }

    @media (max-width: 575.99px) {
        .first-col1 {
            display: none;
        }

        .mobile-nav {
            display: flex;
        }

        body {
            padding-bottom: 65px;
        }
        .be-gone {
            display: none;
        }
    }

    a {
        text-decoration: none;
    }
</style>
<style>
    .nav-form-links button.active {
        color: #434343 !important;
    }
    .nav-form-links

    .nav-form-links button:hover {
        color: #434343 !important;
        background-color: #fff !important;
    }

    .nav-form-links button:hover {
        color: #434343 !important;
    }

    .nav-form-links button {
        color: rgba(95, 95, 95, 0.8) !important;
    }

    .nav-form-links button:hover {
        background-color: transparent !important;
    }

    .nav-form-links button.active:hover {
        background-color: #fff !important;
    }

    .form-select:focus-visible {
        outline: none !important;
        box-shadow: none !important;
    }

    body {
        overflow-x: hidden !important;
    }

    .btn-group label {
        box-shadow: none !important;
    }

    .input-group .form-control:focus {
        border-color: #ced4da !important;
        box-shadow: none !important;
    }

    .slct1 {
        border: none !important;
        border-bottom-right-radius: 5px !important;
        border-bottom-left-radius: 5px !important;
    }

    .slct1:focus-visible {
        outline: none;
    }

    .date-input-div input[type="date"]:focus-visible {
        outline: none;
    }

    .ja-group-btn {
        width: 85px;
        font-size: 14px;
        border: none;
        background-color: #fff;
        border-bottom-left-radius: 12px;
        border-top-left-radius: 12px;
        border-right: 1px #9F9F9F solid !important;
    }

    .ja-group-btn:hover {
        background-color: #dfdbdb;
    }

    .ja-group-btn:focus {
        background-color: #a3a3a3;
        color: #fff;
    }

    .ja-group-btn1 {
        font-size: 14px;
        border: none;
        border-bottom: #C4C6D2 1px solid;
        background-color: #fff;
        border-bottom-left-radius: 0;
        border-top-left-radius: 12px;
        border-right: 1px #9F9F9F solid !important;
    }

    .ja-group-btn1:hover {
        background-color: #dfdbdb;
    }

    .ja-group-btn1:focus {
        background-color: #a3a3a3;
        color: #fff;
    }

    .nein-group-btn {
        width: 85px;
        font-size: 14px;
        border: none;
        background-color: #fff;
        border-bottom-right-radius: 12px;
        border-top-right-radius: 12px;
        border-left: 1px #c9c8c8 solid !important;
    }

    .nein-group-btn:hover {
        background-color: #dfdbdb;
    }

    .nein-group-btn:focus {
        background-color: #a3a3a3;
        color: #fff;
    }

    .nein-group-btn1 {
        font-size: 14px;
        border: none;
        border-bottom: #C4C6D2 1px solid;
        background-color: #fff;
        border-bottom-right-radius: 0;
        border-top-right-radius: 12px;
        border-left: 1px #c9c8c8 solid !important;
    }

    .nein-group-btn1:hover {
        background-color: #dfdbdb;
    }

    .nein-group-btn1:focus {
        background-color: #a3a3a3;
        color: #fff;
    }

    .input-select-div select:focus {
        outline: none;
        box-shadow: none;
        border-color: #fff;
    }

    .input-select-div select {
        border-radius: 7px !important;
    }

    .input-div1 input {
        border: none;
        border-radius: 5px;
    }

    .input-div1 input:focus-visible {
        outline: none;
    }

    .accordion-button:focus {
        background-color: #fff !important;
        color: #434343;
        box-shadow: none;
        border-color: #434343;
    }

    .accordion-button:not(.collapsed) {
        color: #434343;
        background-color: #fff;
        box-shadow: none;
    }

    .select-div select {
        border: none;
    }

    .select-div select:focus-visible {
        outline: none;
    }

    .upload-box input[type="file"] {
        display: none;
    }

    .upload-box1 input[type="file"] {
        display: none !important;
    }

    .krankenkasse-content {
        background-color: #fff;
        border-bottom-left-radius: 17px !important;
        border-bottom-right-radius: 17px !important;
        border-top-right-radius: 17px !important;
    }
    .gray-btn-kk {
        border: solid !important;
        border-left: none !important;
        border-top: #979797 solid 4px!important;
        border-right: #979797 solid 4px!important;
        border-bottom: none!important;
    }

    .auto-content {
        background-color: #fff;
        border-bottom-left-radius: 17px !important;
        border-bottom-right-radius: 17px !important;
        border-top-right-radius: 17px !important;
        border-top-left-radius: 17px !important;
    }

    .sachen-content {
        background-color: #fff;
        border-bottom-left-radius: 17px !important;
        border-bottom-right-radius: 17px !important;
        border-top-right-radius: 17px !important;
        border-top-left-radius: 17px !important;
    }

    .vorsorge-content {
        background-color: #fff;
        border-bottom-left-radius: 17px !important;
        border-bottom-right-radius: 17px !important;
        border-top-left-radius: 17px !important;
    }

    .krankenkasse-btn {
        color: black;
        font-weight: 600;
        /*border: none !important;*/
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
        border-bottom-left-radius: 0px !important;
        /*border-top-right-radius: 15px !important;*/

    }

    .krankenkasse-btn:hover {
        color: black;
    }

    .auto-btn {
        color: black;
        font-weight: 600;
        /*border: none !important;*/
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
        border-bottom-left-radius: 0px !important;

    }

    .auto-btn:hover {
        color: black;
    }

    .sachen-btn {
        color: black;
        font-weight: 600;
        /*border: none !important;*/
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
        border-bottom-left-radius: 0px !important;

    }

    .sachen-btn:hover {
        color: black;
    }

    .vorsorge-btn {
        color: black;
        font-weight: 600;
        /*border: none !important;*/
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
        border-bottom-left-radius: 0px !important;

    }

    .vorsorge-btn:hover {
        color: black;
    }

    .upload-box {
        background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='9' ry='9' stroke='%23333' stroke-width='3' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
        border-radius: 9px;
    }

    /* new navbar styling */
    /* overflow 1 */
    .column-v::-webkit-scrollbar {
        width: 0px;
        height: 0pc;
    }

    /* Track */
    .column-v::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .column-v::-webkit-scrollbar-thumb {
        background-clip: padding-box;
        background: #fff;
        border-radius: 10px;
        border: 1px rgb(46, 31, 131) solid;
    }

    /* Handle on hover */
    .column-v::-webkit-scrollbar-thumb:hover {
        background: #39AAFF;
        border-radius: 10px;
    }

    .hr-1 {
        opacity: 1 !important;
        height: 2.5px;
        background-color: #fff;
    }

    .log-out-div {
        /* position: fixed; */
        /* display: flex; */
        /* left: 30px !important; */
        bottom: 10px;
        left: 0;
        background-color: #0C71C3;
        /* width: 215px; */
    }

    .logg {
        position: relative;
        width: 100%;
    }

    .logg button {
        background-color: transparent;
        box-shadow: none !important;
        color: #fff !important;
        border-radius: 0;
        border: none;
        border-bottom: 1.5px #fff solid;
    }

    .column-v {
        /* max-width: 200px; */
        padding-left: 10px;
        display: block !important;
        height: 76vh;
        overflow-y: scroll;
        /* direction: rtl; */
        text-align: left !important;
        margin-left: 7px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow-x: visible;
    }

    .nav-styling {
        /* max-width: 215px; */
        /* width: 100% !important; */
        height: 100vh !important;
        background-color: #0C71C3;
    }

    .nav-link {
        padding-top: 0.8rem;
        padding-bottom: 0.8rem;
        color: #fff !important;
        border-top-right-radius: 0px;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 10px;
        direction: initial;
    }

    /* .nav-link.active {
        color: #434343 !important;
        border-top-right-radius: 0px;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 10px;
    } */
    .nav-link:hover {
        background-color: #39AAFF !important;
        border-top-right-radius: 0px;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 10px;
    }

    .nav-link.activeClassNav__:hover {
        background-color: #fff !important;
        border-top-right-radius: 0px;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 10px;
    }

    .img-normal {
        display: block;
    }

    .img-collapsed {
        display: none
    }

    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@200;800;900&display=swap');

    body {
        font-family: 'Montserrat', sans-serif;
    }

    @media (max-width: 991.98px) {
        .column-v {
            width: 80px;
            margin-left: 0;
            padding-left: 0;
        }

        .txt-dn {
            display: none;
        }

        .nav-link:hover .txt-dn {
            /* display: inline !important;
            justify-content: center;
            padding-top: 3px; */
            display: none;
            /* position: relative; */
        }

        .nav-link {
            text-align: center;
        }

        .log-out-div:hover .txt-dn {
            /* display: flex;
            justify-content: center;
            padding-top: 3px; */
            display: none;
            /* position: relative; */
            /* white-space: nowrap; */
        }

        .nav-styling {
            width: 80px;
        }

        .log-out-div {
            width: 80px;
        }

        .img-normal {
            display: none;
        }

        .img-collapsed {
            display: block;
        }
    }
    .desk-t {
        display: block;
    }
    .mobile-t {
        display: none;
    }
    @media (max-width: 575.98px) {
        .desk-t {
            display: none;
        }
        .mobile-t {
            display: block;
        }
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script>
    //paste this code under the head tag or in a separate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut();;
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    $('input[type=radio][name=leasing]').change(function() {
        if (this.value == 'Ja') {
            $('#btnradio1').addClass('showpdf');
            $('#btnradio2 ').removeClass('showpdf');
        }else{
            $('#btnradio2').addClass('showpdf');
            $('#btnradio1').removeClass('showpdf');
        }
    });
    $('input[type=radio][name=repair_shop]').change(function() {
        if (this.value == 'Specific garage') {
            $('#btnradio1_').addClass('showpdf');
            $('#btnradio2_ ').removeClass('showpdf');
        }else{
            $('#btnradio2_').addClass('showpdf');
            $('#btnradio1_').removeClass('showpdf');
        }
    });
    $('input[type=radio][name=accident_coverage]').change(function() {
        if (this.value == 'Ja') {
            $('#btnradio3abcdef').addClass('showpdf');
            $('#btnradio4abcdef').removeClass('showpdf');
        }else{
            $('#btnradio4abcdef').addClass('showpdf');
            $('#btnradio3abcdef').removeClass('showpdf');
        }
    });
    $('input[type=radio][name=traffic_legal_protection]').change(function() {
        if (this.value == 'Ja') {
            $('#btnradio3a').addClass('showpdf');
            $('#btnradio4a ').removeClass('showpdf');
        }else{
            $('#btnradio4a').addClass('showpdf');
            $('#btnradio3a').removeClass('showpdf');
        }
    });
    $('input[type=radio][name=grossly]').change(function() {
        if (this.value == 'Ja') {
            $('#btnradio3ab').addClass('showpdf');
            $('#btnradio4ab ').removeClass('showpdf');
        }else{
            $('#btnradio4ab').addClass('showpdf');
            $('#btnradio3ab').removeClass('showpdf');
        }
    });
    $('input[type=radio][name=glass_protection]').change(function() {
        if (this.value == 'Ja') {
            $('#btnradio3abc').addClass('showpdf');
            $('#btnradio4abc ').removeClass('showpdf');
        }else{
            $('#btnradio4abc').addClass('showpdf');
            $('#btnradio3abc').removeClass('showpdf');
        }
    });
    $('input[type=radio][name=parking_damage]').change(function() {
        if (this.value == 'Ja') {
            $('#btnradio3abcd').addClass('showpdf');
            $('#btnradio4abcd ').removeClass('showpdf');
        }else{
            $('#btnradio4abcd').addClass('showpdf');
            $('#btnradio3abcd').removeClass('showpdf');
        }
    });
    $('input[type=radio][name=hour_breakdown_assistance]').change(function() {
        if (this.value == 'Ja') {
            $('#btnradio3abcde').addClass('showpdf');
            $('#btnradio4abcde ').removeClass('showpdf');
        }else{
            $('#btnradio4abcde').addClass('showpdf');
            $('#btnradio3abcde').removeClass('showpdf');
        }
    });
    var newgcnt = 0;
    var newncnt = 0;
    var cntt = 0;
    var oferten = [];


    function upload(x) {
        var inputs = document.getElementsByClassName('showpdf');

        var fullPath = x.value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById(x.id + 'c').value = filename;
        }
    }

    function addanother_item_g() {
        $("#add_g").remove();
        newgcnt++;
        $('#shtogegen').append('<div id="g' + newgcnt + '">' +
            ' <div class="text-end mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16" style="cursor:pointer;" onclick="deletethat2(' + newgcnt + ')">' +
            '<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>' +
            '<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></div>' +
            '   <hr style="height: 4px;"> <div class="">' +
            '                                                        <div class="">' +
            '                                                                <span class="gegenName" style="font-size: 13px;">' +
            '                                                                    Police Hochladen:' +
            '                                                                </span>' +
            '                                                        </div>' +
            '                                                        <div class="">' +
            '                                                           <div class="upload-box mx-1 my-2">' +
            '                                                               <div class="mx-1 my-2 p-4 text-center">' +
            '                                                                    <label for="file-input-4' + newgcnt + '">' +
            '                                                                        <svg xmlns="http://www.w3.org/2000/svg"' +
            '                                                                             width="53" height="53"' +
            '                                                                             viewBox="0 0 53 53">' +
            '                                                                            <g id="Group_621" data-name="Group 621"' +
            '                                                                               transform="translate(-78.283 -14.777)">' +
            '                                                                                <circle id="Ellipse_31"' +
            '                                                                                        data-name="Ellipse 31" cx="26.5"' +
            '                                                                                        cy="26.5" r="26.5"' +
            '                                                                                        transform="translate(78.283 14.777)"' +
            '                                                                                        fill="#5f5f5f" />' +
            '                                                                              <g id="Group_326"' +
            '                                                                                   data-name="Group 326"' +
            '                                                                                   transform="translate(95.656 31.893)">' +
            '                                                                                   <path id="Path_234"' +
            '                                                                                         data-name="Path 234"' +
            '                                                                                         d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"' +
            '                                                                                          transform="translate(0 1.82)"' +
            '                                                                                          fill="#fff" stroke="#fff"' +
            '                                                                                          stroke-width="0.5" />' +
            '                                                                                   <path id="Path_235"                                                                                          data-name="Path 235"' +
            '                                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"' +
            '                                                                                          transform="translate(0.92 0)"' +
            '                                                                                          fill="#fff" stroke="#fff"' +
            '                                                                                          stroke-width="0.5" />                                                                                </g>' +
            '                                                                            </g>' +
            '                                                                        </svg>' +
            '                                                                    </label>' +
            '                                                                    <input type="file" id="file-input-4' + newgcnt + '"' +
            '                                                                           class="svg-div w-100 border-0  g-0 "' +
            '                                                                           onchange="upload(this);"' +
            '                                                                           name="upload_policeFahrzeug' + newgcnt + '">' +
            '                                                                    <input type="text"' +
            '                                                                          class="form-control text-center gegenpdf"' +
            '                                                                           id="file-input-4' + newgcnt + 'c" disabled' +
            '                                                                           style="background:transparent; border:none;">' +
            '                                                                </div>' +
            '                                                            </div>' +
            '                                                        </div>' +
            '                                                        <div class="">' +
            '                                                            <div class="row mx-2">' +
            '                                                                <div class="col-5 d-flex g-0">' +
            '                                                                    <div class="text-nowrap">' +
            '                                                                            <span class="fw-bold"' +
            '                                                                                  style=" font-size: 12px;">' +
            '                                                                                Vergleichsart:' +
            '                                                                            </span>' +
            '                                                                    </div>' +
            '                                                                </div>' +
            '                                                                <div class="col g-0 d-flex justify-content-end">' +
            '                                                                    <div class="select-div text-end ">' +
            '                                                                        <select name="vergleichsart_select' + newgcnt + '" class="fw-bold" id="" style="background-color: #EFEFEF !important; font-size: 12px;color:#9F9F9F;">' +
            '                                                                            <option selected>Ausw??hlen</option>' +
            '                                                                            <option value="1:0 Aktualisierung">1:0 Aktualisierung</option>' +
            '                                                                            <option value="0:1 Downgraden">0:1 Downgraden</option>' +
            '                                                                            <option value="1:1 Das Gleiche">1:1 Das Gleiche</option>' +
            '                                                                        </select>' +
            '                                                                   </div>' +
            '                                                                </div>' +
            '                                                            </div>' +
            '                                                        </div>' +
            '                                                        <div class="">' +
            '                                                            <div class="mb-3 mt-3">' +
            '                                                               <label for="exampleFormControlTextarea1"' +
            '                                                                      class="form-label gegenName"' +
            '                                                                      style="font-size: 13px;">Kommentar</label>  <textarea name="commentFahrenzug' + newgcnt + '" ' +
            '                                                                         id="exampleFormControlTextarea1"' +
            '                                                                          rows="3" class="form-control gegenpdf"></textarea>' +
            '                                                            </div>' +
            '                                                        </div>' +
            '                                                   </div></div>' +
            '                                           <div class="row">'+ '@if(!Auth::user()->hasRole("fs"))'+
            '                                                            <div class="col-12" id="of' + newgcnt + '">Neue Offer:'+
            '                                                                <div class="text-start">'+
            '                                                                    <div class="upload-box mx-1 my-2">'+
            '                                                                        <div class="mx-1 my-2 text-center p-3">'+
            '                                                                            <label for="file-input-' + newgcnt + 'w">' +
            '                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">'+
            '                                                                                    <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">'+
            '                                                                                        <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5" transform="translate(78.283 14.777)" fill="#5f5f5f" />'+
            '                                                                                        <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">'+
            '                                                                                            <path id="Path_234" data-name="Path 234" d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6" transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />'+
            '                                                                                            <path id="Path_235" data-name="Path 235" d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z" transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />'+
            '                                                                                        </g>'+
            '                                                                                    </g>'+
            '                                                                                </svg>'+
            '                                                                            </label>'+
            '                                                                            <input type="file" id="file-input-'+ newgcnt + 'w" class="svg-div w-100 border-0  g-0" onchange="upload(this);" name="offer' + newgcnt + '">'+
            '                                                                            <input type="text" class="form-control text-center" id="file-input-'+newgcnt + 'wc"' + 'disabled style="background:transparent; border:none;">'+
            '                                                                        </div>'+
            '                                                                    </div>'+
            '                                                                </div>'+
            '                                                            </div>'+

            '                              @endif                              <div class="col my-auto">'+
            '                                                                <div class="d-inline text-center mt-3" style="margin-top: -30px; margin-left: 43%;" id="add_g" onclick="addanother_item_g()">'+
            ''+
            '                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48.694"  viewBox="0 0 37.694 37.694" style="cursor:pointer;">'+
            '                                                                        <g id="Group_621" data-name="Group 621" transform="translate(-663.236 -976.679)">'+
            '                                                                            <g id="Group_550" data-name="Group 550" transform="translate(663.236 976.679)">'+
            '                                                                                <rect id="Rectangle_9" data-name="Rectangle 9" width="37.694" height="37.694" rx="18.847" fill="#C8C8C8" />'+
            '                                                                                <g id="Group_42" data-name="Group 42" transform="translate(12.724 12.724)">'+
            '                                                                                    <line id="Line_11" data-name="Line 11" y2="11.972" transform="translate(5.986 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />'+
            '                                                                                    <line id="Line_12" data-name="Line 12" x1="11.972" transform="translate(0 5.634)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />'+
            '                                                                                </g>'+
            '                                                                            </g>'+
            '                                                                        </g>'+
            '                                                                    </svg>'+
            ''+
            '                                                                </div>'+
            '                                                            </div>'+
            '                                                        </div>');
        document.getElementById('newgcount').value = newgcnt;
    }

    function addanother_item_n() {
        $('#add_n').remove();
        newncnt++;
        $('#shtonew').append('<div class="" id="n' + newncnt + '">' +
            ' <div class="text-end mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16" style="cursor:pointer;" onclick="deletethat(' + newncnt + ')">' +
            '<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>' +
            '<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></div>' +
            '                                                        <div class="row">' +
            '                                                            <div' +
            '                                                                class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">' +
            '                                                                <div class="my-3">' +
            '                                                                    <div class="">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    Fahrzeugausweis hochladen' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <div class="upload-box mx-1 my-2">' +
            '                                                                            <div class="mx-1 my-2 p-4 text-center">' +
            '                                                                                <label for="file-input-53' + newncnt + '">' +
            '                                                                                    <svg xmlns="http://www.w3.org/2000/svg"' +
            '                                                                                         width="53" height="53"' +
            '                                                                                         viewBox="0 0 53 53">' +
            '                                                                                        <g id="Group_621"' +
            '                                                                                           data-name="Group 621"' +
            '                                                                                           transform="translate(-78.283 -14.777)">' +
            '                                                                                            <circle id="Ellipse_31"' +
            '                                                                                                    data-name="Ellipse 31"' +
            '                                                                                                    cx="26.5" cy="26.5"' +
            '                                                                                                    r="26.5"' +
            '                                                                                                    transform="translate(78.283 14.777)"' +
            '                                                                                                    fill="#5f5f5f" />' +
            '                                                                                            <g id="Group_326"' +
            '                                                                                               data-name="Group 326"' +
            '                                                                                               transform="translate(95.656 31.893)">' +
            '                                                                                                <path id="Path_234"' +
            '                                                                                                      data-name="Path 234"' +
            '                                                                                                      d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"' +
            '                                                                                                      transform="translate(0 1.82)"' +
            '                                                                                                      fill="#fff"' +
            '                                                                                                      stroke="#fff"' +
            '                                                                                                      stroke-width="0.5" />' +
            '                                                                                                <path id="Path_235"' +
            '                                                                                                      data-name="Path 235"' +
            '                                                                                                      d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"' +
            '                                                                                                      transform="translate(0.92 0)"' +
            '                                                                                                      fill="#fff"' +
            '                                                                                                      stroke="#fff"' +
            '                                                                                                      stroke-width="0.5" />' +
            '                                                                                            </g>' +
            '                                                                                        </g>' +
            '                                                                                    </svg>' +
            '                                                                                </label>' +
            '                                                                                <input type="file" id="file-input-53' + newncnt + '"' +
            '                                                                                       class="svg-div w-100 border-0  g-0 "' +
            '                                                                                       onchange="upload(this);"' +
            '                                                                                       name="vehicle_id' + newncnt + '">' +
            '                                                                                <input type="text"' +
            '                                                                                       class="form-control text-center autopdf"' +
            '                                                                                       id="file-input-53' + newncnt + 'c" disabled' +
            '                                                                                       style="background:transparent; border:none;"' +
            '                                                                                       name="vehicle_id' + newncnt + '">' +
            '                                                                            </div>' +
            '                                                                        </div>' +
            '                                                                    </div>' +
            '                                                                </div>' +
            '                                                            </div>' +
            '                                                            <div class="col">' +
            '                                                                <div class="">' +
            '                                                                    <div class="row">' +
            '                                                                        <div class="col">' +
            '                                                                            <div class="">' +
            '                                                                                    <span class="autoName">' +
            '                                                                                        Leasing:' +
            '                                                                                    </span>' +
            '                                                                            </div>' +
            '                                                                        </div>' +
            '                                                                        <div class="col">' +
            '                                                                            <div class="btn-group w-100"' +
            '                                                                                 role="group"' +
            '                                                                                 aria-label="Basic radio toggle button group">' +
            '' +
            '                                                                                <input type="radio"' +
            '                                                                                       class="btn-check autopdf" value="Ja"' +
            '                                                                                       name="leasing' + newncnt + '" id="btnradio1' + newncnt + '1"' +
            '                                                                                       autocomplete="off">' +
            '                                                                                <label' +
            '                                                                                    class="btn btn-outline-secondary w-100 g-0"' +
            '                                                                                    value="Ja"' +
            '                                                                                    for="btnradio1' + newncnt + '1" onclick="showel(this)">Ja</label>' +
            '                                                                                <input type="radio"' +
            '                                                                                       class="btn-check " name="leasing' + newncnt + '"' +
            '                                                                                       value="Nein" id="btnradio1' + newncnt + '2"' +
            '                                                                                       autocomplete="off">' +
            '                                                                                <label' +
            '                                                                                    class="btn btn-outline-secondary w-100 g-0 "' +
            '                                                                                    for="btnradio1' + newncnt + '2" onclick="showel(this)">Nein</label>' +
            '                                                                            </div>' +
            '                                                                            <div class="">' +
            '                                                                                <select name="leasing_name' + newncnt + '"' +
            '                                                                                        class="w-100 slct1" id="">' +
            '' +
            '                                                                                    <option value="Gesellschaft">' +
            '                                                                                        Gesellschaft' +
            '                                                                                    </option>' +
            '' +
            '                                                                                </select>' +
            '                                                                            </div>' +
            '                                                                        </div>' +
            '                                                                    </div>' +
            '                                                                </div>' +
            '                                                            </div>' +
            '                                                        </div>' +
            '                                                        <div class="my-3">' +
            '                                                            <div class="row">' +
            '                                                                <div class="col">' +
            '                                                                    <div class="">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="fw-bold">' +
            '                                                                                    Fahrzeuginformationen' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <div' +
            '                                                                            class="input-select-div mb-2">' +
            '                                                                            <div class="text-nowrap">' +
            '                                                                                    <span class="fw-normal autoName">' +
            '                                                                                        Kaufjahr' +
            '                                                                                    </span>' +
            '                                                                            </div>' +
            '                                                                            <select name="year_of_purchase' + newncnt + '"' +
            '                                                                                    id=""' +
            '                                                                                    class="form-select w-75 autopdf" aria-label="Default select example">' +
            '                                                                                  <option selected></option> @for($i = \Carbon\Carbon::now()->format('Y'); $i >= 1950 ;$i--)<option value="{{$i}}">{{$i}}</option>@endfor'+
            '                                                                            </select>' +
            '                                                                        </div>' +
            '                                                                    </div>' +
            '                                                                    <div class="date-input-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    Este inverkehrssetzung:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '' +
            '                                                                        <input name="first_intro' + newncnt + '"' +
            '                                                                               type="date" class="py-1 border-0 autopdf">' +
            '' +
            '                                                                    </div>' +
            '                                                                    <div class="date-input-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    Beginn Versicherung:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '' +
            '                                                                        <input name="insurance_date' + newncnt + '" type="date"' +
            '                                                                               class="py-1 border-0 autopdf">' +
            '' +
            '                                                                    </div>' +
            '                                                                    <div class="input-select-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    Eingel??ster Kanton:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <select name="redeemed' + newncnt + '"' +
            '                                                                                class="form-select w-75 autopdf"' +
            '                                                                                aria-label="Default select example">' +
            '                                                                            <option selected></option>' +
            '                                                                            <option value="Z??rich">Z??rich</option>' +
            '                                                                            <option value="Bern">Bern</option>' +
            '                                                                            <option value="Luzern">Luzern</option>' +
            '                                                                            <option value="Uri">Uri</option>' +
            '                                                                            <option value="Schwyz">Schwyz</option>' +
            '                                                                            <option value="Obwalden">Obwalden</option>' +
            '                                                                            <option value="Nidwalden">Nidwalden</option>' +
            '                                                                            <option value="Glarus">Glarus</option>' +
            '                                                                            <option value="Zug">Zug</option>' +
            '                                                                            <option value="Freiburg">Freiburg</option>' +
            '                                                                            <option value="Solothurn">Solothurn</option>' +
            '                                                                            <option value="Basel-Stadt">Basel-Stadt</option>' +
            '                                                                            <option value="Basel-Landschaft">Basel-Landschaft</option>' +
            '                                                                            <option value="Schaffhausen">Schaffhausen</option>' +
            '                                                                            <option value="Appenzell A.Rh.">Appenzell A.Rh.</option>' +
            '                                                                            <option value="Appenzell I.Rh.">Appenzell I.Rh.</option>' +
            '                                                                            <option value="Sankt Gallen">Sankt Gallen</option>' +
            '                                                                            <option value="Graub??nden">Graub??nden</option>' +
            '                                                                            <option value="Aargau">Aargau</option>' +
            '                                                                            <option value="Thurgau">Thurgau</option>' +
            '                                                                            <option value="Tessin">Tessin</option>' +
            '                                                                            <option value="Waadt">Waadt</option>' +
            '                                                                            <option value="Wallis">Wallis</option>' +
            '                                                                            <option value="Neuenburg">Neuenburg</option>' +
            '                                                                            <option value="Genf">Genf</option>' +
            '                                                                            <option value="Jura">Jura</option>' +
            '                                                                        </select>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-div1 mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    KM - Stand:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '' +
            '                                                                        <input name="km_stood' + newncnt + '" class="py-1 autopdf"' +
            '                                                                               type="number" id="">' +
            '' +
            '                                                                    </div>' +
            '                                                                </div>' +
            '                                                                <div class="col">' +
            '                                                                    <div class="">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="fw-bold">' +
            '                                                                                    Lenkerinformation' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                    </div>' +
            '                                                                    <div class="date-input-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    Ausstelldatum Fuhrerausweis:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '' +
            '                                                                        <input name="placing_on_the_market' + newncnt + '"' +
            '                                                                               type="date" class="py-1 border-0 autopdf">' +
            '' +
            '                                                                    </div>' +
            '                                                                    <div class="input-select-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    Nationalitat:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <select  class="form-select w-75 autopdf" name="nationality'+ newncnt +'">'+
            '                                                                               <option value="Swiss" selected>Swiss</option> <option value="Deutschland">Deutschland</option> <option value="Italien">Italien</option> <option value="French">French</option>'+
            '                                                                               <optgroup label="A"> <option value="Afghanistan">Afghanistan</option> <option value="??gypten">??gypten</option> <option value="??land">??land</option> <option value="Albanien">Albanien</option> <option value="Algerien">Algerien</option> <option value="Amerikanisch-Samoa">Amerikanisch-Samoa</option> <option value="Amerikanische Jungferninseln">Amerikanische Jungferninseln</option> <option value="Andorra">Andorra</option> <option value="Angola">Angola</option> <option value="Anguilla">Anguilla</option> <option value="Antarktis">Antarktis</option> <option value="Antigua und Barbuda">Antigua und Barbuda</option> <option value="??quatorialguinea">??quatorialguinea</option> <option value="Argentinien">Argentinien</option> <option value="Armenien">Armenien</option> <option value="Aruba">Aruba</option> <option value="Ascension">Ascension</option> <option value="Aserbaidschan">Aserbaidschan</option> <option value="??thiopien">??thiopien</option> <option value="Australien">Australien</option> </optgroup>'+
            '                                                                               <optgroup label="B"> <option value="Bahamas">Bahamas</option> <option value="Bahrain">Bahrain</option> <option value="Bangladesch">Bangladesch</option> <option value="Barbados">Barbados</option> <option value="Belarus (Wei??russland)">Belarus (Wei??russland)</option> <option value="Belgien">Belgien</option> <option value="Belize">Belize</option> <option value="Benin">Benin</option> <option value="Bermuda">Bermuda</option> <option value="Bhutan">Bhutan</option> <option value="Bolivien">Bolivien</option> <option value="Bosnien und Herzegowina">Bosnien und Herzegowina</option> <option value="Botswana">Botswana</option> <option value="Bouvetinsel">Bouvetinsel</option> <option value="Brasilien">Brasilien</option> <option value="Britische Jungferninseln">Britische Jungferninseln</option> <option value="Britisches Territorium im Indischen Ozean">Britisches Territorium im Indischen Ozean</option> <option value="Brunei Darussalam">Brunei Darussalam</option> <option value="Bulgarien">Bulgarien</option> <option value="Burkina Faso">Burkina Faso</option> <option value="Burundi">Burundi</option> </optgroup>'+
            '                                                                               <optgroup label="C"> <option value="Ceuta, Melilla">Ceuta, Melilla</option> <option value="Chile">Chile</option> <option value="Volksrepublik China">Volksrepublik China</option> <option value="Clipperton">Clipperton</option> <option value="Cookinseln">Cookinseln</option> <option value="Costa Rica">Costa Rica</option> <option value="C??te dIvoire ">C??te dIvoire</option> </optgroup>' +
            '                                                                               <optgroup label="D"> <option value="D??nemark">D??nemark</option> <option value="Deutschland">Deutschland</option> <option value="Diego Garcia">Diego Garcia</option> <option value="Dominica">Dominica</option> <option value="Dominikanische Republik">Dominikanische Republik</option> <option value="Dschibuti">Dschibuti</option> </optgroup>'+
            '                                                                               <optgroup label="E"> <option value="Ecuador">Ecuador</option> <option value="El Salvador">El Salvador</option> <option value="Eritrea">Eritrea</option> <option value="Estland">Estland</option> </optgroup> <optgroup label="F"> <option value="Falklandinseln">Falklandinseln</option> <option value="F??r??er">F??r??er</option> <option value="Fidschi">Fidschi</option> <option value="Finnland">Finnland</option> <option value="Frankreich">Frankreich</option> <option value="Franz??sisch-Guayana">Franz??sisch-Guayana</option> <option value="Franz??sisch-Polynesien">Franz??sisch-Polynesien</option> </optgroup>'+
            '                                                                               <optgroup label="G"> <option value="Gabun">Gabun</option> <option value="Gambia">Gambia</option> <option value="Georgien">Georgien</option> <option value="Ghana">Ghana</option> <option value="Gibraltar">Gibraltar</option> <option value="Grenada">Grenada</option> <option value="Griechenland">Griechenland</option> <option value="Gr??nland">Gr??nland</option> <option value="Gro??britannien">Gro??britannien</option> <option value="Guadeloupe">Guadeloupe</option> <option value="Guam">Guam</option> <option value="Guatemala">Guatemala</option> <option value="Guernsey (Kanalinsel)">Guernsey (Kanalinsel)</option> <option value="Guinea">Guinea</option> <option value="Guinea-Bissau">Guinea-Bissau</option> <option value="Guyana">Guyana</option> </optgroup>'+
            '                                                                               <optgroup label="H"> <option value="Haiti">Haiti</option> <option value="Heard- und McDonald-Inseln">Heard- und McDonald-Inseln</option> <option value="Honduras">Honduras</option> <option value="Hongkong">Hongkong</option> </optgroup> <optgroup label="I"> <option value="Indien">Indien</option> <option value="Indonesien">Indonesien</option> <option value="Insel Man">Insel Man</option> <option value="Irak">Irak</option> <option value="Iran">Iran</option> <option value="Irland">Irland</option> <option value="Island">Island</option> <option value="Israel">Israel</option> <option value="Italien">Italien</option> </optgroup>'+
            '                                                                               <optgroup label="J"> <option value="Jamaika">Jamaika</option> <option value="Japan">Japan</option> <option value="Jemen">Jemen</option> <option value="Jersey (Kanalinsel">Jersey (Kanalinsel)</option> <option value="Jordanien">Jordanien</option> </optgroup> <optgroup label="K"> <option value="Kaimaninseln">Kaimaninseln</option> <option value="Kambodscha">Kambodscha</option> <option value="Kamerun">Kamerun</option> <option value="Kanada">Kanada</option> <option value="Kanarische Inseln">Kanarische Inseln</option> <option value="Kap Verde">Kap Verde</option> <option value="Kasachstan">Kasachstan</option> <option value="Katar">Katar</option> <option value="Kenia">Kenia</option> <option value="Kirgisistan">Kirgisistan</option> <option value="Kiribati">Kiribati</option> <option value="Kokosinseln">Kokosinseln</option> <option value="Kolumbien">Kolumbien</option> <option value="Komoren">Komoren</option> <option value="Demokratische Republik Kongo">Demokratische Republik Kongo</option> <option value="Demokratische Volksrepublik Korea (Nordkorea)">Demokratische Volksrepublik Korea (Nordkorea)</option> <option value="Republik Korea (S??dkorea)">Republik Korea (S??dkorea)</option> <option value="Kosovo">Kosovo</option> <option value="Kroatien">Kroatien</option> <option value="Kuba">Kuba</option> <option value="Kuwait">Kuwait</option> </optgroup>'+
            '                                                                               <optgroup label="L"> <option value="Laos">Laos</option> <option value="Lesotho">Lesotho</option> <option value="Lettland">Lettland</option> <option value="Libanon">Libanon</option> <option value="Liberia">Liberia</option> <option value="Libyen">Libyen</option> <option value="Liechtenstein">Liechtenstein</option> <option value="Litauen">Litauen</option> <option value="Luxemburg">Luxemburg</option> </optgroup>'+
            '                                                                               <optgroup label="M"> <option value="Macao">Macao</option> <option value="Madagaskar">Madagaskar</option> <option value="Malawi">Malawi</option> <option value="Malaysia">Malaysia</option> <option value="Malediven">Malediven</option> <option value="Mali">Mali</option> <option value="Malta">Malta</option> <option value="Marokko">Marokko</option> <option value="Marshallinseln">Marshallinseln</option> <option value="Martinique">Martinique</option> <option value="Mauretanien">Mauretanien</option> <option value="Mauritius">Mauritius</option> <option value="Mayotte">Mayotte</option> <option value="Mazedonien">Mazedonien</option> <option value="Mexiko">Mexiko</option> <option value="Mikronesien">Mikronesien</option> <option value="Moldawien (Republik Moldau)">Moldawien (Republik Moldau)</option> <option value="Monaco">Monaco</option> <option value="Mongolei">Mongolei</option> <option value="Montenegro">Montenegro</option> <option value="Montserrat">Montserrat</option> <option value="Mosambik">Mosambik</option> <option value="Myanmar (Burma)">Myanmar (Burma)</option> </optgroup>'+
            '                                                                               <optgroup label="N"> <option value="Namibia">Namibia</option> <option value="Nauru">Nauru</option> <option value="Nepal">Nepal</option> <option value="Neukaledonien">Neukaledonien</option> <option value="Neuseeland">Neuseeland</option> <option value="Nicaragua">Nicaragua</option> <option value="Niederlande">Niederlande</option> <option value="Niederl??ndische Antillen">Niederl??ndische Antillen</option> <option value="Niger">Niger</option> <option value="Nigeria">Nigeria</option> <option value="Niue">Niue</option> <option value="N??rdliche Marianen">N??rdliche Marianen</option> <option value="Norfolkinsel">Norfolkinsel</option> <option value="Norwegen">Norwegen</option> </optgroup>'+
            '                                                                                <optgroup label="O"> <option value="Oman">Oman</option> <option value="Orbit">Orbit</option> <option value="??sterreich">??sterreich</option> <option value="Osttimor (Timor-Leste)">Osttimor (Timor-Leste)</option> </optgroup> <optgroup label="P"> <option value="Pakistan">Pakistan</option> <option value="Pal??stinensische Autonomiegebiete">Pal??stinensische Autonomiegebiete</option> <option value="Palau">Palau</option> <option value="Panama">Panama</option> <option value="Papua-Neuguinea">Papua-Neuguinea</option> <option value="Paraguay">Paraguay</option> <option value="Peru">Peru</option> <option value="Philippinen">Philippinen</option> <option value="Pitcairninseln">Pitcairninseln</option> <option value="Polen">Polen</option> <option value="Portugal">Portugal</option> <option value="Puerto Rico">Puerto Rico</option> </optgroup>'+
            '                                                                               <optgroup label="Q"> </optgroup> <optgroup label="R"> <option value="Republik China (Taiwan)">Republik China (Taiwan)</option> <option value="Republik Kongo">Republik Kongo</option> <option value="R??union">R??union</option> <option value="Ruanda">Ruanda</option> <option value="Rum??nien">Rum??nien</option> <option value="Russische F??deration">Russische F??deration</option> </optgroup>'+
            '                                                                               <optgroup label="S"> <option value="Saint-Barth??lemy">Saint-Barth??lemy</option> <option value="Saint-Martin">Saint-Martin</option> <option value="Salomonen">Salomonen</option> <option value="Sambia">Sambia</option> <option value="Samoa">Samoa</option> <option value="San Marino">San Marino</option> <option value="S??o Tom?? und Pr??ncipe">S??o Tom?? und Pr??ncipe</option> <option value="Saudi-Arabien">Saudi-Arabien</option> <option value="Schweden">Schweden</option> <option value="Schweiz">Schweiz</option> <option value="Senegal">Senegal</option> <option value="Serbien">Serbien</option> <option value="Seychellen">Seychellen</option> <option value="Sierra Leone">Sierra Leone</option> <option value="Simbabwe">Simbabwe</option> <option value="Singapur">Singapur</option> <option value="Slowakei">Slowakei</option> <option value="Slowenien">Slowenien</option> <option value="Somalia">Somalia</option> <option value="Spanien">Spanien</option> <option value="Sri Lanka">Sri Lanka</option> <option value="St. Helena">St. Helena</option> <option value="St. Kitts und Nevis">St. Kitts und Nevis</option> <option value="St. Lucia">St. Lucia</option> <option value="Saint-Pierre und Miquelon">Saint-Pierre und Miquelon</option> <option value="St. Vincent und die Grenadinen">St. Vincent und die Grenadinen</option> <option value="S??dafrika">S??dafrika</option> <option value="Sudan">Sudan</option> <option value="S??dgeorgien und die S??dlichen Sandwichinseln">S??dgeorgien und die S??dlichen Sandwichinseln</option> <option value="Suriname">Suriname</option> <option value="Svalbard und Jan Mayen">Svalbard und Jan Mayen</option> <option value="Swasiland">Swasiland</option> <option value="Syrien">Syrien</option> </optgroup>'+
            '                                                                               <optgroup label="T"> <option value="Tadschikistan">Tadschikistan</option> <option value="Tansania">Tansania</option> <option value="Thailand">Thailand</option> <option value="Togo">Togo</option> <option value="Tokelau">Tokelau</option> <option value="Tonga">Tonga</option> <option value="Trinidad und Tobago">Trinidad und Tobago</option> <option value="Tristan da Cunha">Tristan da Cunha</option> <option value="Tschad">Tschad</option> <option value="Tschechische Republik">Tschechische Republik</option> <option value="Tunesien">Tunesien</option> <option value="T??rkei">T??rkei</option> <option value="Turkmenistan">Turkmenistan</option> <option value="Turks- und Caicosinseln">Turks- und Caicosinseln</option> <option value="Tuvalu">Tuvalu</option> </optgroup> <optgroup label="U"> <option value="Uganda">Uganda</option> <option value="Ukraine">Ukraine</option> <option value="Ungarn">Ungarn</option> <option value="Uruguay">Uruguay</option> <option value="Usbekistan">Usbekistan</option> </optgroup>'+
            '                                                                               <optgroup label="V"> <option value="Vanuatu">Vanuatu</option> <option value="Vatikanstadt">Vatikanstadt</option> <option value="Venezuela">Venezuela</option> <option value="Vereinigte Arabische Emirate">Vereinigte Arabische Emirate</option> <option value="Vereinigte Staaten von Amerika (USA)">Vereinigte Staaten von Amerika (USA)</option> <option value="Vereinigtes K??nigreich Gro??britannien und Nordirland">Vereinigtes K??nigreich Gro??britannien und Nordirland</option> <option value="Vietnam">Vietnam</option> </optgroup> <optgroup label="W"> <option value="Wallis und Futuna">Wallis und Futuna</option> <option value="Weihnachtsinsel">Weihnachtsinsel</option> <option value="Westsahara">Westsahara</option> </optgroup> <optgroup label="Z"> <option value="Zentralafrikanische Republik">Zentralafrikanische Republik</option> <option value="Zypern">Zypern</option> </optgroup>'+
            '                                                                               </select>'+
            '                                                                    </div>' +
            '                                                                    <div class="input-select-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    H??ufigster Lenker?' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <select name="most_common' + newncnt + '"' +
            '                                                                                class="form-select w-75 autopdf"' +
            '                                                                                aria-label="Default select example">' +
            '                                                                            <option selected></option>' +
            '                                                                            <option value="Ja">Ja</option>' +
            '                                                                            <option value="Nein">Nein</option>' +
            '                                                                        </select>' +
            '                                                                    </div>' +
            '                                                                </div>' +
            '                                                            </div>' +
            '                                                        </div>' +
            '                                                        <div class="my-3">' +
            '                                                            <div class="row">' +
            '                                                                <div class="col">' +
            '                                                                    <div class="">' +
            '                                                                            <span class="fw-normal fs-5">' +
            '                                                                                Gew??nschte Deckung' +
            '                                                                            </span>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-select-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    Versischerung:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                       <select name="insurance' + newncnt + '" class="form-select w-75 autopdf" aria-label="Default select example"> <option selected></option> <option value="Haftpflicht">Haftpflicht</option> <option value="Teilkasko">Teilkasko</option> <option value="Vollkasko">Vollkasko</option> </select>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-select-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    Selbstbehalt Teilkasko:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <select name="deductible' + newncnt + '"' +
            '                                                                                class="form-select w-75 autopdf"' +
            '                                                                                aria-label="Default select example">' +
            '' +
            '                                                                            <option selected></option>' +
            '                                                                            <option value="500">500</option>' +
            '                                                                            <option value="1000">1000</option>' +
            '                                                                            <option value="1500">1500</option>' +
            '                                                                            <option value="2000">2000</option>' +
            '                                                                        </select>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-select-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    Mitgef??hrte Sachen:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <select name="carried' + newncnt + '"' +
            '                                                                                class="form-select w-75 autopdf"' +
            '                                                                                aria-label="Default select example">' +
            '' +
            '                                                                            <option selected></option>' +
            '                                                                            @for($i=1000;$i<=20000;$i+=1000)' +
            '                                                                                <option value="{{$i}}">{{$i}}</option>' +
            '                                                                            @endfor' +
            '' +
            '                                                                        </select>' +
            '                                                                    </div>' +
            '                                                                    <div class="">' +
            '                                                                            <span class="autoName">' +
            '                                                                                Reparaturwerkstatt:' +
            '                                                                            </span>' +

            '                                                                        <div class="btn-group w-100" role="group"' +
            '                                                                             aria-label="Basic radio toggle button group">' +
            '' +
            '                                                                            <input type="radio" class="btn-check autopdf"' +
            '                                                                                   name="repair_shop' + newncnt + '" id="btnradio1a' + newncnt + '1"' +
            '                                                                                   value="Specific garage">' +
            '                                                                            <label' +
            '                                                                                class="btn btn-outline-secondary w-100 g-0"' +
            '                                                                                for="btnradio1a' + newncnt + '1" onclick="showel(this)">Specific' +
            '                                                                                garage</label>' +
            '                                                                            <input type="radio" class="btn-check"' +
            '                                                                                   name="repair_shop' + newncnt + '"' +
            '                                                                                   value="Freie Wahl" id="btnradio1a'+newncnt+'2">' +
            '                                                                            <label' +
            '                                                                                class="btn btn-outline-secondary w-100 g-0 "' +
            '                                                                                for="btnradio1a' + newncnt + '2" onclick="showel(this)">Freie Wahl</label>' +
            '' +
            '                                                                        </div>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-div1 mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    + Unfalldeckung:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <div class="btn-group" role="group"' +
            '                                                                 aria-label="Basic radio toggle button group">' +
            '                                                                <input type="radio" class="btn-check autopdf"' +
            '                                                                       name="accident_coverage' + newncnt + '" value="Ja"' +
            '                                                                       id="btnradio3abcdef' + newncnt + '1" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3abcdef' + newncnt + '1" onclick="showel(this)">Ja</label>' +
            '' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="accident_coverage' + newncnt + '" value="Nein"' +
            '                                                                       id="btnradio4abcdef' + newncnt + '2" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio4abcdef' + newncnt + '2" onclick="showel(this)">Nein</label>' +
            '                                                            </div>' +
            '                                                                    </div>' +
            '                                                                </div>' +
            '                                                                <div class="col">' +
            '                                                                    <div class="input-div1 mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    + Verkehrsrechtsschutz:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <div class="btn-group" role="group"' +
            '                                                                 aria-label="Basic radio toggle button group">' +
            '                                                                <input type="radio" class="btn-check autopdf"' +
            '                                                                       name="traffic_legal_protection' + newncnt + '" value="Ja"' +
            '                                                                       id="btnradio3a' + newncnt + '1" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3a' + newncnt + '1" onclick="showel(this)">Ja</label>' +
            '' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="traffic_legal_protection' + newncnt + '" value="Nein"' +
            '                                                                       id="btnradio3a' + newncnt + '2" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3a' + newncnt + '2" onclick="showel(this)">Nein</label>' +
            '                                                            </div>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-div1 mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    + Grobfahrl??ssigkeitschutz:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <div class="btn-group" role="group"' +
            '                                                                 aria-label="Basic radio toggle button group">' +
            '                                                                <input type="radio" class="btn-check autopdf"' +
            '                                                                       name="grossly' + newncnt + '" value="Ja"' +
            '                                                                       id="btnradio3ab' + newncnt + '1" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3ab' + newncnt + '1" onclick="showel(this)">Ja</label>' +
            '' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="grossly' + newncnt + '" value="Nein"' +
            '                                                                       id="btnradio3ab' + newncnt + '2" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3ab' + newncnt + '2" onclick="showel(this)">Nein</label>' +
            '                                                            </div>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-div1 mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    + Glasschutz:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <div class="btn-group" role="group"' +
            '                                                                 aria-label="Basic radio toggle button group">' +
            '                                                                <input type="radio" class="btn-check autopdf"' +
            '                                                                       name="glass_protection' + newncnt + '" value="Ja"' +
            '                                                                       id="btnradio3abc' + newncnt + '1" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3abc' + newncnt + '1" onclick="showel(this)">Ja</label>' +
            '' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="glass_protection' + newncnt + '" value="Nein"' +
            '                                                                       id="btnradio3abc' + newncnt + '2" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3abc' + newncnt + '2" onclick="showel(this)">Nein</label>' +
            '                                                            </div>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-div1 mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    + Parkschaden:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '' +
            '                                                                        <div class="btn-group" role="group"' +
            '                                                                 aria-label="Basic radio toggle button group">' +
            '                                                                <input type="radio" class="btn-check autopdf"' +
            '                                                                       name="parking_damage' + newncnt + '" value="Ja"' +
            '                                                                       id="btnradio3abcd' + newncnt + '1" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3abcd' + newncnt + '1" onclick="showel(this)">Ja</label>' +
            '' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="parking_damage' + newncnt + '" value="Nein"' +
            '                                                                       id="btnradio3abcd' + newncnt + '2" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3abcd' + newncnt + '2" onclick="showel(this)">Nein</label>' +
            '                                                            </div>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-div1 mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    + 24h Pannenhilfe:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <div class="btn-group" role="group"' +
            '                                                                 aria-label="Basic radio toggle button group">' +
            '                                                                <input type="radio" class="btn-check autopdf"' +
            '                                                                       name="hour_breakdown_assistance' + newncnt + '" value="Ja"' +
            '                                                                       id="btnradio3abcde' + newncnt + '1" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3abcde' + newncnt + '1" onclick="showel(this)">Ja</label>' +
            '' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="hour_breakdown_assistance' + newncnt + '" value="Nein"' +
            '                                                                       id="btnradio3abcde' + newncnt + '2" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3abcde' + newncnt + '2" onclick="showel(this)">Nein</label>' +
            '                                                            </div>' +
            '                                                                    </div>' +
            '                                                                </div>' +
            '                                                           <div>'+
            '                                                                        <div class="">' +
            '                                                                                <span class="autoName">' +
            '                                                                                    Kommentar:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <div class="col-6">'+
            '                                                                        <textarea class="form-control autopdf" name="nuekommentar' + newncnt + '"></textarea>'+
            '    </div>'+
            '                                                                    </div>'+
            '                                                            </div>' +
            '                                                        </div>' +
            '                                                    </div>' +
            '                                                    <div class="text-center mt-3" style="margin-top: -30px" id="add_n" onclick="addanother_item_n()">' +
            '' +
            '<svg xmlns="http://www.w3.org/2000/svg" width="37.694" height="37.694"' +
            '     viewBox="0 0 37.694 37.694" style="cursor:pointer;" >' +
            '    <g id="Group_621" data-name="Group 621"' +
            '       transform="translate(-663.236 -976.679)">' +
            '        <g id="Group_550" data-name="Group 550"' +
            '           transform="translate(663.236 976.679)">' +
            '            <rect id="Rectangle_9" data-name="Rectangle 9"' +
            '                  width="37.694" height="37.694" rx="18.847"' +
            '                  fill="#C8C8C8"/>' +
            '            <g id="Group_42" data-name="Group 42"' +
            '               transform="translate(12.724 12.724)">' +
            '                <line id="Line_11" data-name="Line 11" y2="11.972"' +
            '                      transform="translate(5.986 0)" fill="none"' +
            '                      stroke="#fff" stroke-linecap="round"' +
            '                      stroke-width="2"/>' +
            '                <line id="Line_12" data-name="Line 12" x1="11.972"' +
            '                      transform="translate(0 5.634)" fill="none"' +
            '                      stroke="#fff" stroke-linecap="round"' +
            '                      stroke-width="2"/>' +
            '            </g>' +
            '        </g>' +
            '    </g>' +
            '</svg>' +
            '' +
            '</div>');

        document.getElementById('newncount').value = newncnt;

    }

    function changecnt(x) {
        cntt = x;
        if (x == 3) {
            document.getElementById("submitt").setAttribute('data-bs-toggle', 'modal');
            document.getElementById("submitt").setAttribute('data-bs-target', '#exampleModal');
        }
    }
    function saveContentFunct1() {
        $("#add-btn1").slideToggle();
        $("#added-content1").slideToggle();
    }

    function deletethat(x) {
        $('#n' + x).remove();
        newncnt--;
        document.getElementById('newncount').value = newncnt;
    }

    function deletethat2(x) {
        $('#g' + x).remove();
        $('#of' + x).remove();
        newgcnt--;
        document.getElementById('newgcount').value = newgcnt;
    }

    function nextonee() {
        if (cntt < 5 && cntt > -1) {
            if (cntt == 0) {
                $('#nav-profile').addClass('active show');
                $('#nav-home').removeClass('active show');
                $('#nav-profile-tab').addClass('active');
                $('#nav-home-tab').removeClass('active');
            }
            if (cntt == 1) {
                $('#nav-contact').addClass('active show');
                $('#nav-profile').removeClass('active show');
                $('#nav-contact-tab').addClass('active');
                $('#nav-profile-tab').removeClass('active');
            }
            if (cntt == 2) {
                $('#nav-fourth').addClass('active show');
                $('#nav-contact').removeClass('active show');
                $('#nav-fourth-tab').addClass('active');
                $('#nav-contact-tab').removeClass('active');
                document.getElementById("submitt").setAttribute('data-bs-toggle', 'modal');
                document.getElementById("submitt").setAttribute('data-bs-target', '#exampleModal');
            }
            if (cntt == 3) {
                document.getElementById("submitt").setAttribute('data-bs-toggle', 'modal');
                document.getElementById("submitt").setAttribute('data-bs-target', '#exampleModal');
            }
            cntt++;
        }
    }
    function addContentFunct1() {
        $("#added-content1").slideToggle();
        $("#add-btn1").slideToggle();
    }
    function hideSpan() {
        if (document.getElementById("bastelle-span").style.display === "none") {
            document.getElementById("bastelle-span").style.display = "block";
            document.getElementById("button1").style.setProperty("border-bottom-left-radius", "10px", "important");
            document.getElementById("button1").style.setProperty("border-bottom-right-radius", "10px", "important");
        } else {
            document.getElementById("bastelle-span").style.display = "none";
            document.getElementById("button1").style.setProperty("border-bottom-left-radius", "0px", "important");
            document.getElementById("button1").style.setProperty("border-bottom-right-radius", "0px", "important");
        }
    }
    // plus button function
    function addContentFunct() {
        // document.getElementById("added-content").style.display = "block";
        // document.getElementById("add-btn").style.display = "none";
        $("#added-content").slideToggle();
        $("#add-btn").slideToggle();
    }

    function saveContentFunct() {
        // document.getElementById("added-content").style.display = "none";
        // document.getElementById("add-btn").style.display = "block";
        $("#add-btn").slideToggle();
        $("#added-content").slideToggle();
    }

    function msheleqeta() {
        var x = document.getElementById('manval').value;
        if (x == "No") {
            document.getElementById('mandat').innerHTML = "";

        }
    }
    function hideNation() {
        var x = document.getElementById('schweiz').value;
        if (x == "Swiss") {
            document.getElementById('admin').style.display = "none";
        } else {
            document.getElementById('admin').style.display = "inline";
        }
    }
    function workingOnIt(){
        alert('Kommt Bald...');
    }

    function showpdf(){
        var inputs = document.getElementsByClassName('showpdf');
        var showname = document.getElementsByClassName('showname');
        document.getElementById('old-content').style.display = 'none';
        document.getElementById('pdf').style.display = 'block';

        document.getElementById('pdf').innerHTML += '<div class="col">'+
            '    <div class="my-5 mx-4">'+
            '      <div class="" style="background-color: #EFEFEF;border-radius: 22px;">'+
            '        <div class="py-4 px-3">'+
            '          <span class="fs-4">'+
            '            Markus Jurgen'+
            '          </span> <br>'+
            '          <span class="fs-6 text-muted">'+
            '            Raumweg 23, 3700 Thun'+
            '          </span>'+
            '        </div>'+
            '        <div class="row mx-4">'+
            '          <nav class="g-0">'+
            '            <div class="nav nav-tabs" id="nav-tab" role="tablist">'+
            '              <button class="border-0 col py-2 fw-bold text-secondary" id=""'+
            '                type="button"'+
            '                aria-selected="true">Krankenkasse</button>'+
            '              <button class="border-0  col py-2 fw-bold text-secondary"'+
            '                 type="button"'+
            '                aria-selected="false">Auto</button>'+
            '              <button class="border-0  col py-2 fw-bold text-secondary"'+
            '                type="button"'+
            '                aria-selected="false">Vorsorge</button>'+
            '              <button class="border-0  col py-2 fw-bold text-secondary"'+
            '                 type="button"'+
            '                aria-selected="false">Sachen</button>'+
            '            </div>'+
            '          </nav>'+
            '        </div>'+
            '        <div class="tab-content mx-4 pb-3" id="nav-tabContent">'+
            '          <div class="tab-pane fade  krankenkasse-content mb-3" id="nav-home" role="tabpanel"'+
            '            aria-labelledby="nav-home-tab">'+
            '          </div>'+
            '          <div class="tab-pane fade auto-content" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">'+
            '          </div>'+
            '          <div class="tab-pane fade  sachen-content" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">'+
            '          </div>'+
            '          <div class="tab-pane fade  vorsorge-content" id="nav-fourth" role="tabpanel" aria-labelledby="nav-fourth-tab">'+
            '          </div>'+
            '          <div class="bg-white submit-form-end px-3" role="tabpanel">'+
            '            <div class="fs-3 fw-bold py-3">'+
            '              Eingabe uberprufen!'+
            '            </div>'+
            '            <div class="row g-0">'+
            '              <div class="col-12 col-md-6">'+
            '                <div class="krankenkasse-content-submited  my-3">'+
            '                  <div class="fs-5 fw-bold">'+
            '                    Krankenkasse'+
            '                  </div>'+
            '                  <div class="kk-info">'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[0].innerHTML+': </div>'+
            '                      <div class="col-6">'+inputs[0].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[1].innerHTML+': </div>'+
            '                      <div class="col-6">'+inputs[1].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[2].innerHTML+': </div>'+
            '                      <div class="col-6">'+inputs[2].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[3].innerHTML+': </div>'+
            '                      <div class="col-6">'+inputs[3].value+'</div>'+
            '                    </div>'+
            '                   <div class="d-flex">'+
            '                      <div class="col-6">'+showname[4].innerHTML+': </div>'+
            '                      <div class="col-6">'+inputs[4].value+'</div>'+
            '                    </div>'+
            '                  </div>'+
            '                </div>'+
            '                <div class="auto-content-submited  my-3">'+
            '                  <div class="fs-5 fw-bold">'+
            '                    Auto'+
            '                  </div>'+
            '                  <div  class="fs-5 my-2" style="font-weight: 500">'+
            '                    Gegenofferte:'+
            '                  </div>'+
            '                  <div class="auto-content-submited">'+
            '                   <div id="gegenoferte">'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[5].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[5].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[6].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[6].value+'</div>'+
            '                       </div>'+
            '                   </div>'+
            '                  <div class="fs-5 my-2" style="font-weight: 500">'+
            '                    Neues Fahrzeug:'+
            '                  </div>'+
            '                   <div id="autooferte">'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[7].innerHTML+': </div>'+
            '                       <div class="col-6">'+inputs[7].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[8].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[8].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[9].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[9].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[10].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[10].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[11].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[11].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[12].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[12].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[13].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[13].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[14].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[14].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[15].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[15].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[16].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[16].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[17].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[17].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[18].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[18].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[19].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[19].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[20].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[20].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[21].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[21].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[22].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[22].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[23].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[23].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[24].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[24].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[25].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[25].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[26].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[26].value+'</div>'+
            '                       </div>'+
            '                       <div class="d-flex">'+
            '                       <div class="col-6">'+showname[27].innerHTML+' </div>'+
            '                       <div class="col-6">'+inputs[27].value+'</div>'+
            '                       </div>'+
            '                   </div>'+
            '                  </div>'+
            '                </div>'+
            '              </div>'+
            '              <div class="col-12 col-md-6">'+
            '                <div class="3a3banfragen-content-submited  my-3">'+
            '                  <div class="fs-5 fw-bold my-2">'+
            '                    Vorsorge '+
            '                  </div>'+
            '                  <div class="fs-5 my-2" style="font-weight: 500">'+
            '                   3a/ 3b Anfragen'+
            '                  </div>'+
            '                  <div class="inputs-shown-33-info">'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[28].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[28].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[29].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[29].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[30].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[30].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[31].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[31].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[32].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[32].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[33].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[33].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                     <div class="col-6">'+showname[34].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[34].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[35].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[35].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[36].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[36].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[37].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[37].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[38].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[38].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[39].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[39].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[40].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[40].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[41].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[41].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[42].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[42].value+'</div>'+
            '                    </div>'+
            '                    <div class="d-flex">'+
            '                      <div class="col-6">'+showname[43].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[43].value+'</div>'+
            '                    </div>'+
            '                  </div>'+
            '                </div>'+
            '                <div class="sachen-content-submited my-3">'+
            '                  <div class="fs-5 fw-bold my-2">'+
            '                    Sachen'+
            '                  </div>'+
            '                  <div class="fs-5 my-2" style="font-weight: 500">'+
            '                    Hausrat- & Privathaftpflicht'+
            '                  </div>'+
            '                  <div class="d-flex">'+
            '                      <div class="col-6">'+showname[44].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[44].value+'</div>'+
            '                  </div>'+
            '                  <div class="d-flex">'+
            '                      <div class="col-6">'+showname[45].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[45].value+'</div>'+
            '                  </div>'+
            '                  <div class="d-flex">'+
            '                      <div class="col-6">'+showname[46].innerHTML+': </div>'+
            '                      <div class="col-6">'+inputs[46].value+'</div>'+
            '                  </div>'+
            '                  <div class="d-flex">'+
            '                      <div class="col-6">'+showname[47].innerHTML+': </div>'+
            '                      <div class="col-6">'+inputs[47].value+'</div>'+
            '                  </div>'+
            '                  <div class="d-flex">'+
            '                      <div class="col-6">'+showname[48].innerHTML+': </div>'+
            '                      <div class="col-6">'+inputs[48].value+'</div>'+
            '                  </div>'+
            '                  <div class="d-flex">'+
            '                      <div class="col-6">'+showname[49].innerHTML+' </div>'+
            '                      <div class="col-6">'+inputs[49].value+'</div>'+
            '                  </div>'+
            '                  <div class="d-flex">'+
            '                      <div class="col-6">'+showname[50].innerHTML+': </div>'+
            '                      <div class="col-6">'+inputs[50].value+'</div>'+
            '                  </div>'+
            '                  <div class="fs-5 my-2" style="font-weight: 500">'+
            '                    Rechtsschutzversicherung'+
            '                  </div>'+
            '                  <div class="d-flex">'+
            '                      <div class="col-6">'+showname[51].innerHTML+': </div>'+
            '                      <div class="col-6">'+inputs[51].value+'</div>'+
            '                  </div>'+
            '                  <div class="d-flex">'+
            '                      <div class="col-6">'+showname[52].innerHTML+': </div>'+
            '                      <div class="col-6">'+inputs[52].value+'</div>'+
            '                  </div>'+
            '                </div>'+
            '              </div>'+
            '            </div>'+
            '            <div class="d-flex justify-content-center py-2">'+
            '               <div>'+
            '              <button type="button" onclick="qoe()" class="py-2 px-5 submit-btnnnn">'+
            '                Best??tigen'+
            '              </button>'+
            '               </div>'+
            '            </div>'+
            '          </div>'+
            '        </div>'+
            '      </div>'+
            '    </div>'+
            '  </div>';
        var auto = document.getElementsByClassName('autopdf');
        var autoName = document.getElementsByClassName('autoName');



        issmodulo = 1;
        for(let i = auto.length-1; i >= 0 ; i--) {
            document.getElementById("autooferte").insertAdjacentHTML("afterend",
                '<div class="d-flex " style=""> <div class="col-6 "> ' + autoName[i].innerHTML + ' </div><div class="col-6">' + auto[i].value + '</div></div>');
            if(i == 0){
                $("#autooferte").append(
                    '<hr>');
            }
        }

        var gegen = document.getElementsByClassName('gegenpdf');
        var gegenName = document.getElementsByClassName('gegenName');

        ismodulo = 1;
        for(let i = gegen.length-1; i >= 0 ; i--) {
            if(ismodulo % 2 == 1) {
                document.getElementById("gegenoferte").insertAdjacentHTML("afterend",
                    '<div class="d-flex " style="border-right: 1px solid black; border-left: 1px solid black; border-bottom: 1px solid black;"> <div class="col-6 "> ' + gegenName[i].innerHTML + ' </div><div class="col-6">' + gegen[i].value + '</div></div>');
            }
            else{
                document.getElementById("gegenoferte").insertAdjacentHTML("afterend",
                    '<div class="d-flex " style="border-right: 1px solid black; border-left: 1px solid black; border-top: 1px solid black"> <div class="col-6 "> ' + gegenName[i].innerHTML + ' </div><div class="col-6">' + gegen[i].value + '</div></div>');
            }
            ismodulo++;
        }






    }


    function qoe(){
        document.getElementById('formaa').submit();
    }
    function showel(x){
        var val = parseInt(x.getAttribute('for').charAt(x.getAttribute('for').length -1));
        var val2 = x.getAttribute('for').substring(0,x.getAttribute('for').length -1);
        var valc = val + 1;
        if(val == 1){
            var fulldoc = val2 + valc;
            $('#' + x.getAttribute('for')).addClass('autopdf');
            $('#' +fulldoc).removeClass('autopdf');

        }
        else{
            var fulldoc = val2 + "1";
            $('#' + x.getAttribute('for')).addClass('autopdf');
            $('#' +fulldoc).removeClass('autopdf');
        }

    }
    function krankenSkipp(){
        document.getElementById('krankenSkip').checked = true;
        document.getElementById('nav-home-tab').disabled = true;
        $('#nav-home-tab').addClass('gray-btn-kk');
    }
    function autoSkipp(){
        document.getElementById('autoSkip').checked = true;
        document.getElementById('nav-profile-tab').disabled = true;
        $('#nav-profile-tab').addClass('gray-btn-kk');
    }
    function vorsorgeSkipp(){
        document.getElementById('vorsorgenSkip').checked = true;
        document.getElementById('nav-contact-tab').disabled = true;
        $('#nav-contact-tab').addClass('gray-btn-kk');
    }
    function sachenSkipp(){
        document.getElementById('sachenSkip').checked = true;
    }
    @php $krank = \App\Models\LeadDataKK::where('person_id',$lead->id)->first(); @endphp
    @if($krank)
    @if($krank->krank_id != null)
    document.getElementById('nav-home').style.display = 'none';
    document.getElementById('kranken1').innerHTML = '<a href="' + '{{URL::route('leadfamilyperson',[\Illuminate\Support\Facades\Crypt::encrypt($krank->krank_id* 1244), "accept" => false, "admin_id" => \Illuminate\Support\Facades\Crypt::encrypt((int) \App\Models\Pendency::where('family_id',$krank->krank_id)->first()->admin_id * 1244),"vorsorge" => false,'pend_id' => \App\Models\Pendency::where('family_id',$krank->krank_id)->first()->id])}}' + '"><h4>Kranken</h4></a>';
    @endif
    @endif


</script>


</body>

</html>
<style>
    /*Per Notification */
    .coloriii a {
        color: black !important;
    }
    .submit-form-end {
        border-radius: 15px;
        word-break: break-word;
    }

    .submit-btnnnn {
        background-color: #0C71C3;
        border-radius: 10px;
        border: none;
        color: #fff;
        font-weight: bold;
    }
    .back-btnnnn{
        background-color: #fa3737;
        border-radius: 10px;
        border: none;
        color: #fff;
        font-weight: bold;
    }

    .rolle-style {
        border-radius: 0 !important;
        border-bottom: 1.5px solid white;
    }
</style>


