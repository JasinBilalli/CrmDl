<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>HR</title>
</head>


<body>
<div class="row g-0">
    @php $user = auth() @endphp
        <div class="col-lg-2 col-md-1 col-sm-1 col-1 first-col1">
        <div class="nav-styling col-md-2 col-sm-1 col-1" style="position: fixed; top:0;left:0; ">
            <div class="d-flex align-middle" style="height: 16vh;">
                <div class="my-auto">
                    <div class="img-normal text-center mx-3">
                        <a href="{{route('dashboard')}}"><img src="{{env('APP_URL')}}imgs/logo2.png" class="img-fluid p-1" alt=""></a>
                    </div>
                    <div class="img-collapsed text-center ">
                        <a href="{{route('dashboard')}}"><img src="{{env('APP_URL')}}imgs/logo1.png" class="img-fluid p-2" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="column-v">

                <a href="{{route('dashboard')}}"
                   class="nav-link {{ (request()->is('/')) ? 'activeClassNav__' : '' }}" aria-current="page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-house"
                         viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd"
                              d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>
                    <span class="ps-2 txt-dn">Startseite</span>
                </a>
                @if($user->user()->hasRole('backoffice') ||
                $user->user()->hasRole('fs') || $user->user()->hasRole('admin'))

                    <a href="{{route('tasks')}}"
                       class="nav-link {{ (request()->is('tasks')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20"  fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                            <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                            <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Aufgaben</span>
                    </a>
                @endif
                @if($user->user()->hasRole('admin') ||
                $user->user()->hasRole('fs') ||
                $user->user()->hasRole('salesmanager')
                ||$user->user()->hasRole('menagment'))
                    <a href="{{route('leads')}}"
                       class="nav-link {{ (request()->is('leads')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-hdd-stack" viewBox="0 0 16 16">
                            <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z"/>
                            <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                            <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Leads</span>
                    </a>
                @endif
                @if($user->user()->hasRole('fs') ||
                $user->user()->hasRole('salesmanager') ||
                $user->user()->hasRole('menagment') ||
                $user->user()->hasRole('admin'))
                    <a href="{{route('Appointments')}}"
                       class="nav-link  {{ (request()->is('Appointments')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20"  fill="currentColor" class="bi bi-calendar4-week" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                        </svg>
                        @if(Auth::guard('admins')->user()->hasRole('salesmanager'))
                            <span class="ps-2 txt-dn">Terminen</span>
                        @else
                            <span class="ps-2 txt-dn">Kalender</span>
                        @endif
                    </a>
                @endif
                @if($user->user()->hasRole('backoffice') ||
                $user->user()->hasRole('admin'))

                <!-- <a href="{{route('status')}}"
                           class="nav-link {{ (request()->is('status')) ? 'activeClassNav__' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                 class="bi bi-clipboard-data" viewBox="0 0 16 16">
                                <path
                                    d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                                <path
                                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path
                                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                            </svg>
                            <span class="ps-2 txt-dn">Status</span>
                        </a> -->
                @endif
                @if($user->check())
                    <a href="{{route('costumers')}}"
                       class="nav-link {{ (request()->is('costumers')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20"  fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Kunden</span>
                    </a>

                @endif

                {{--                    @if($user->user()->hasRole('backoffice') ||--}}
                {{--                    $user->user()->hasRole('admin'))--}}
                {{--                        <a onclick="workingOnIt()" href="#" class="nav-link ">--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"--}}
                {{--                                 class="bi bi-cash-coin" viewBox="0 0 16 16">--}}
                {{--                                <path fill-rule="evenodd"--}}
                {{--                                      d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>--}}
                {{--                                <path--}}
                {{--                                    d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>--}}
                {{--                                <path--}}
                {{--                                    d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>--}}
                {{--                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>--}}
                {{--                            </svg>--}}
                {{--                            <span class="ps-2 txt-dn">Einzahlung</span>--}}
                {{--                        </a>--}}
                {{--                    @endif--}}
                {{--                    @if($user->user()->hasRole('backoffice') ||--}}
                {{--                    $user->user()->hasRole('admin'))--}}
                {{--                        <a onclick="workingOnIt()" href="#" class="nav-link">--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"--}}
                {{--                                 class="bi bi-x-square" viewBox="0 0 16 16">--}}
                {{--                                <path--}}
                {{--                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>--}}
                {{--                                <path--}}
                {{--                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>--}}
                {{--                            </svg>--}}
                {{--                            <span class="ps-2 txt-dn">Stornierungen</span>--}}
                {{--                        </a>--}}
                {{--                    @endif--}}
                {{--                    <a onclick="workingOnIt()" href="#" class="nav-link ">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-grid"--}}
                {{--                             viewBox="0 0 16 16">--}}
                {{--                            <path--}}
                {{--                                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>--}}
                {{--                        </svg>--}}
                {{--                        <span class="ps-2 txt-dn">Finanzen</span>--}}
                {{--                    </a>--}}
                {{--                    @if($user->user()->hasRole('admin') ||--}}
                {{--                    $user->user()->hasRole('menagment') ||--}}
                {{--                    $user->user()->hasRole('salesmanager'))--}}
                {{--                        <a onclick="workingOnIt()" href="#" class="nav-link">--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"--}}
                {{--                                 class="bi bi-people-fill" viewBox="0 0 16 16">--}}
                {{--                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>--}}
                {{--                                <path fill-rule="evenodd"--}}
                {{--                                      d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>--}}
                {{--                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>--}}
                {{--                            </svg>--}}
                {{--                            <span class="ps-2 txt-dn">Mitarbeiter</span>--}}
                {{--                        </a>--}}
                {{--                    @endif--}}
                {{--                    @if($user->user()->hasRole('finance') ||--}}
                {{--                    $user->user()->hasRole('admin'))--}}
                {{--                        <a onclick="workingOnIt()" href="#" class="nav-link ">--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"--}}
                {{--                                 class="bi bi-percent" viewBox="0 0 16 16">--}}
                {{--                                <path--}}
                {{--                                    d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>--}}
                {{--                            </svg>--}}
                {{--                            <span class="ps-2 txt-dn">Provisionen</span>--}}
                {{--                        </a>--}}
                {{--                    @endif--}}
                {{--                    @if($user->user()->hasRole('admin') ||--}}
                {{--                    $user->user()->hasRole('menagment') ||--}}
                {{--                    $user->user()->hasRole('salesmanager'))--}}
                {{--                        <a onclick="workingOnIt()" href="#" class="nav-link">--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"--}}
                {{--                                 class="bi bi-diagram-2-fill" viewBox="0 0 16 16">--}}
                {{--                                <path fill-rule="evenodd"--}}
                {{--                                      d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z"/>--}}
                {{--                            </svg>--}}
                {{--                            <span class="ps-2 txt-dn">Prov.system</span>--}}
                {{--                        </a>--}}
                {{--                    @endif--}}
                {{--                    @if($user->user()->hasRole('admin') ||--}}
                {{--                    $user->user()->hasRole('menagment') ||--}}
                {{--                    $user->user()->hasRole('salesmanager'))--}}
                {{--                        <a onclick="workingOnIt()" href="#" class="nav-link">--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"--}}
                {{--                                 class="bi bi-bar-chart-fill" viewBox="0 0 16 16">--}}
                {{--                                <path--}}
                {{--                                    d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>--}}
                {{--                            </svg>--}}
                {{--                            <span class="ps-2 txt-dn">Statistik</span>--}}
                {{--                        </a>--}}
                {{--                    @endif--}}
                {{--                    @if($user->user()->hasRole('menagment') ||--}}
                {{--                    $user->user()->hasRole('finance')--}}
                {{--                    ||$user->user()->hasRole('admin') )--}}
                {{--                        <a onclick="workingOnIt()" href="#" class="nav-link">--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"--}}
                {{--                                 class="bi bi-diagram-2-fill" viewBox="0 0 16 16">--}}
                {{--                                <path fill-rule="evenodd"--}}
                {{--                                      d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z"/>--}}
                {{--                            </svg>--}}
                {{--                            <span class="ps-2 txt-dn">Treuhand</span>--}}
                {{--                        </a>--}}
                {{--                    @endif--}}
                <a class="nav-link {{ (request()->is('hr_view')) ? 'activeClassNav__' : '' }}"  href="{{route('hr_view')}}" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                         class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    <span class="ps-1 nav-texttt">HR</span>
                </a>
                @if($user->user()->hasRole('admin'))
                    <a class="nav-link {{ (request()->is('addnewuser')) ? 'activeClassNav__' : '' }}"  href="{{route('addnewuser')}}" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                             class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        <span class="ps-1 nav-texttt">Registrieren</span>
                    </a>
                @endif
                @if(auth()->user()->admin_id != null)
                    <a href="{{action('App\Http\Controllers\UserController@changerole')}}"
                       class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        <span class="ps-1 nav-texttt">Schalten</span
                    </a>
                @endif
            </div>
            <div class="log-out-div ">
                <hr class="hr-1 m-0">
                <div class="logg d-flex justify-content-center">
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
    <div class="col">
        <div class="container-fluid p-0 m-0 g-0">
    <div class="row g-0">
        <div id="listt" class="col-auto wrapper-of-list">
            <div class="emp-list" id="empList">
                <div class="wrapper-of-header">
                    <div class="hrListHeader d-flex justify-content-center align-items-center">
                        <div class="employees-logo d-flex" onclick="window.location.reload()" style="cursor: pointer;">
                            <div class="px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="currentColor"
                                     class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    <path fill-rule="evenodd"
                                          d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                </svg>
                            </div>
                            <div class="px-3">
                                <span class="fs-3">Employees</span>
                            </div>
                        </div>

                    </div>
                    <div class="search-divider">
                        <div class="input-group p-2">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="icon px-2 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#75b1da"
                                     class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hr-div">
                    <div class="emp-sel active d-none" onclick="openEmployee('emp0')">
                    </div>
                    @foreach($admins as $admin)
                        <div class="emp-sel" onclick="openEmployee('open'); getPersonalData({{$admin->id}}); getBankInfoData({{$admin->id}})">
                        <div class="row g-0 px-2 justify-content-betweem">
                            <div class="img-div my-auto col-auto">
                                <img src="https://picsum.photos/80/80?grayscale" class="img-fluid" alt="">
                            </div>
                            <div class="col ps-2 my-auto">
                                <div class="name fw-600 fs-5h ">
                                    {{$admin->name}}
                                </div>
                                <div class="position">

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="contentt" class="col content-of-emp me-0 my-0 me-md-3 my-md-3">
            <div class="wrapper-of-content">
                <div id="emp0" class="employee container">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" version="1.1"
                         x="0px" y="0px" viewBox="0 0 750 500" style="enable-background:new 0 0 750 500;"
                         xml:space="preserve">

                        <g id="BACKGROUND">
                            <rect class="st0" width="750" height="500" />
                        </g>
                        <g id="OBJECTS">
                            <g>
                                <path class="st1"
                                      d="M488.57,70.3c0,3.31-2.68,5.99-5.99,5.99s-5.99-2.68-5.99-5.99c0-3.31,2.68-5.99,5.99-5.99    S488.57,67,488.57,70.3z" />
                                <circle class="st2" cx="511.02" cy="98.73" r="4.49" />
                                <path class="st3"
                                      d="M619.95,168.48c0,1.27-1.03,2.3-2.3,2.3c-1.27,0-2.3-1.03-2.3-2.3c0-1.27,1.03-2.3,2.3-2.3    C618.92,166.18,619.95,167.21,619.95,168.48z" />
                                <circle class="st1" cx="87.37" cy="325.85" r="8.32" />
                                <circle class="st1" cx="131.92" cy="81.77" r="4.49" />
                                <circle class="st1" cx="640.21" cy="274.81" r="3.99" />
                                <line class="st4" x1="77.55" y1="390.54" x2="713.04" y2="390.54" />
                                <circle class="st5" cx="115.46" cy="167.57" r="3.49" />
                                <path class="st6"
                                      d="M677.14,320.7c0,2.21-1.79,4-4,4s-4-1.79-4-4c0-2.21,1.79-4,4-4S677.14,318.49,677.14,320.7z" />
                                <path class="st6"
                                      d="M696.19,239.01c0,1.16-0.94,2.11-2.11,2.11c-1.16,0-2.11-0.94-2.11-2.11c0-1.16,0.94-2.11,2.11-2.11    C695.25,236.9,696.19,237.85,696.19,239.01z" />
                            </g>
                            <g>
                                <g>
                                    <path class="st7"
                                          d="M405.29,392.84H171.18v-280.6c0-14.36,11.06-26.59,25.41-26.59l208.69,0.59V392.84z" />
                                    <polygon class="st8"
                                             points="175.51,392.84 405.29,392.84 405.29,114.11 212.42,88.57    " />
                                </g>
                                <g>
                                    <path class="st9"
                                          d="M502.67,110.31c0-13.81-11.19-25-25-25H218.91v0.17l-24.67-0.12c15.08,0,24.61,10.64,24.61,23.5l0.06-0.07     V401.6c0,19.33,15.67,35,35,35h189.75l60.03-0.83L502.67,110.31z" />
                                    <g>
                                        <g>

                                            <ellipse
                                                transform="matrix(0.7071 -0.7071 0.7071 0.7071 -23.3428 237.9653)"
                                                class="st10" cx="275.58" cy="147.16" rx="36.34" ry="36.34" />
                                            <g>
                                                <defs>

                                                    <ellipse id="SVGID_1_"
                                                             transform="matrix(0.7071 -0.7071 0.7071 0.7071 -23.3428 237.9653)"
                                                             cx="275.58" cy="147.16" rx="36.34" ry="36.34" />
                                                </defs>
                                                <clipPath id="SVGID_2_">
                                                    <use xlink:href="#SVGID_1_" style="overflow:visible;" />
                                                </clipPath>
                                                <g class="st11">
                                                    <g>
                                                        <path class="st12"
                                                              d="M364.5,158.65c0.37-2.25,0.56-3.61,0.56-3.61s1.44-13.03-4.26-21.49c-0.83-1.24,1.79,2.61,1.79,2.61          s-3.73-5.43-4.63-5.87c-0.9-0.44,2.49,5.62,2.49,5.62s-3.76-6.47-4.85-6.39c-1.09,0.08,1.87,7.57,1.87,7.57          s-2.28-8.24-3.37-8.25c-1.22,0,0.73,19.41-1.4,17.11c-0.71-0.76-3.8-6.06-5.37-5.74c-1.57,0.32,5.77,12.25,5.77,12.25l0,0          c0.15,0.37,0,0.94-0.15,1.33L364.5,158.65z" />
                                                        <g>
                                                            <path class="st13"
                                                                  d="M351.94,153.41l-5.31,13.98c-3.62,9.03-12.71,18.34-21.1,15.29l-26.83-9.73           c-3.04-1.47-6.2-2.51-9.18-2.79c-0.19-0.07-0.3-0.1-0.3-0.1l-7.35-3.6l-16.04,3.03l-5.69,4.24           c-14.28,2.73-44.6,12.34-44.6,12.34c6.27,4.44,11.68,12.51,11.68,12.51s-1.18,1.93-2.82,4.63           c4.29,5.41,9.05,10.97,16.63,14.29c1.74,0.76,5.27,1.6,7.43,2.25l-5.44,56.42l59.1,0.95c0,0,9.01-40.14,10.74-65.82           l1.05,0.4c13.79,4.84,28.98-0.08,39.42-11.88c8.52-9.63,12.72-40.54,12.72-40.54L351.94,153.41z" />
                                                            <path class="st14"
                                                                  d="M248.47,219.74c-2.16-0.66-5.7-1.49-7.43-2.25c-7.58-3.32-12.34-8.88-16.63-14.29           c1.64-2.7,2.82-4.63,2.82-4.63L248.47,219.74z" />
                                                            <path class="st14"
                                                                  d="M312.87,211.36l-38.29,65.5l27.55,0.25C302.13,277.12,311.52,233.58,312.87,211.36z" />
                                                            <line class="st13" x1="348.79" y1="161.76" x2="364.32"
                                                                  y2="168.95" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path class="st12"
                                                                  d="M281.04,152.45l2.4,17.46c0,0-23.06,18.59-21.71,3.64l2.92-20.48L281.04,152.45z" />
                                                            <path class="st15"
                                                                  d="M279.51,134.38l2.02,19.28c0,0-19.2,23.79-17.51,0.54l4.08-20.38L279.51,134.38z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path class="st16"
                                                                          d="M259.46,142.79l3.33-0.94l0.78,3.97l-3.33,0.94c-1.03,0.29-2.03-0.37-2.25-1.46l0,0             C257.78,144.2,258.44,143.08,259.46,142.79z" />
                                                                    <path class="st17"
                                                                          d="M259.76,143.79l1.38-0.39l0.32,1.64l-1.38,0.39c-0.42,0.12-0.84-0.15-0.93-0.6l0,0             C259.07,144.37,259.34,143.91,259.76,143.79z" />
                                                                </g>
                                                                <g>
                                                                    <path class="st16"
                                                                          d="M285.77,141.73l-3.39,0.46l-0.28-4.07l3.39-0.46c1.05-0.14,1.96,0.65,2.03,1.78l0,0             C287.6,140.56,286.82,141.59,285.77,141.73z" />
                                                                    <path class="st17"
                                                                          d="M285.64,138.96l-1.4,0.17l0.09,1.68l1.4-0.17c0.43-0.05,0.76-0.47,0.74-0.93l0,0             C286.44,139.24,286.07,138.91,285.64,138.96z" />
                                                                </g>
                                                                <path class="st16"
                                                                      d="M272.89,156.78l-0.07,0.02c-8.01,0.34-11.41-5.05-11.54-11.87l-0.01-0.52            c-0.13-6.82,3.57-17.73,9.89-18.22l-0.02-0.07c6.32-0.5,12.88,9.68,13.02,16.5l0.01,0.52            C284.3,149.94,281.88,156.2,272.89,156.78z" />
                                                            </g>
                                                            <g>
                                                                <path class="st18"
                                                                      d="M273.48,152.33L273.48,152.33c-2.79,0.25-5.1-1.49-5.16-3.89l-0.01-0.33l10.08-0.9l0.01,0.33            C278.47,149.93,276.26,152.08,273.48,152.33z" />
                                                                <path class="st15"
                                                                      d="M270.45,142.17c0,0.5-0.29,0.9-0.66,0.9c-0.36,0-0.66-0.4-0.66-0.9c0-0.5,0.29-0.9,0.66-0.9            C270.15,141.27,270.45,141.68,270.45,142.17z" />
                                                                <path class="st15"
                                                                      d="M276.39,141.54c0,0.5-0.3,0.9-0.66,0.9c-0.36,0-0.66-0.41-0.66-0.91c0-0.5,0.3-0.9,0.66-0.9            C276.1,140.63,276.39,141.04,276.39,141.54z" />
                                                                <path class="st17"
                                                                      d="M274.24,145.85l-2.34,0.12c-0.29,0.02-0.5-0.34-0.4-0.67l0.91-2.92c0.12-0.37,0.53-0.41,0.71-0.07            l1.43,2.8C274.71,145.43,274.54,145.84,274.24,145.85z" />
                                                                <path class="st15"
                                                                      d="M266.69,139.64c-0.65,0.56,0.2-1.74,1.13-2.09c0.93-0.35,1.93,0.01,2.24,0.82            C270.05,138.37,268.25,138.29,266.69,139.64z" />
                                                                <path class="st15"
                                                                      d="M277.55,137.87c0.76,0.4-0.59-1.65-1.58-1.78c-0.99-0.13-1.88,0.45-1.99,1.3            C273.98,137.39,275.72,136.91,277.55,137.87z" />
                                                            </g>
                                                            <path class="st15"
                                                                  d="M282.41,129.8c-0.08-0.18-0.16-0.35-0.24-0.51c0.81-0.37,1.3-0.62,1.3-0.62s-0.95-13.59-2.5-13.8           c-0.61-0.08-17.26,3.84-21.46,14.89c-0.11,0.3-0.09,0.59,0.03,0.86c-0.1,0.22-0.2,0.45-0.29,0.67           c-0.63,1.7-0.71,3.57-0.46,5.33c0.12,0.84,1.64,5.63,2.42,5.71c0.35,0.03,2.26-6.17,3.41-9.58           c1.91,0.25,4.15,0.26,6.41-0.04c2.56-0.34,5.12-1.09,7.25-1.85c1.61,2.17,5,6.5,5.57,6.52           C284.38,137.41,282.91,130.98,282.41,129.8z" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <path class="st19"
                                                  d="M330.46,120.63l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C329.37,120,330.25,120,330.46,120.63z" />
                                            <path class="st19"
                                                  d="M344.25,120.63l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C343.17,120,344.05,120,344.25,120.63z" />
                                            <path class="st19"
                                                  d="M358.05,120.63l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C356.97,120,357.85,120,358.05,120.63z" />
                                            <path class="st19"
                                                  d="M371.85,120.63l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C370.76,120,371.65,120,371.85,120.63z" />
                                            <path class="st10"
                                                  d="M385.65,120.63l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C384.56,120,385.44,120,385.65,120.63z" />
                                        </g>
                                        <path class="st18"
                                              d="M397.22,143.17h-74c-1.95,0-3.52-1.58-3.52-3.52v-1.59c0-1.95,1.58-3.52,3.52-3.52h74      c1.95,0,3.52,1.58,3.52,3.52v1.59C400.75,141.59,399.17,143.17,397.22,143.17z" />
                                        <rect x="447.2" y="152.08" class="st20" width="27.27" height="27.27" />
                                        <line class="st21" x1="233.04" y1="197.31" x2="472.47" y2="197.31" />
                                        <line class="st20" x1="320.16" y1="154.08" x2="427.91" y2="154.08" />
                                        <line class="st20" x1="320.16" y1="166.05" x2="427.91" y2="166.05" />
                                        <line class="st20" x1="320.16" y1="178.02" x2="427.91" y2="178.02" />
                                    </g>
                                    <g>
                                        <g>

                                            <ellipse
                                                transform="matrix(0.7071 -0.7071 0.7071 0.7071 -96.7071 268.3539)"
                                                class="st10" cx="275.58" cy="250.91" rx="36.34" ry="36.34" />
                                            <g>
                                                <defs>

                                                    <ellipse id="SVGID_3_"
                                                             transform="matrix(0.9724 -0.2334 0.2334 0.9724 -50.9923 71.311)"
                                                             cx="275.84" cy="251.13" rx="36.34" ry="36.34" />
                                                </defs>
                                                <clipPath id="SVGID_4_">
                                                    <use xlink:href="#SVGID_3_" style="overflow:visible;" />
                                                </clipPath>
                                                <g class="st22">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path class="st15"
                                                                      d="M263.12,232.27c0.7-3.44,2.77-9.89,8.34-11.3c5.38-1.37,10.12-1.02,15.36,2.62            c10.12,7.03,3.94,43.3,3.94,43.3s-3.82,8.26-31.77-2.53C258.97,264.35,262.19,236.82,263.12,232.27z" />
                                                            </g>
                                                            <g>
                                                                <path class="st23"
                                                                      d="M267.69,245.3c0,0-2.67,20.81-2.94,22.48c0,0,9.02,10.76,18.25,1.51c0,0-1.56-5.05-4.4-18.04            L267.69,245.3z" />
                                                                <path class="st15"
                                                                      d="M274.98,274.13c0,0-0.88,4.41,8.35-4.84c0,0-0.76-4.18-1.38-6.53L274.98,274.13z" />
                                                                <path class="st15"
                                                                      d="M279.31,251.44c-0.75,2.72-5.4,4.99-7.97,4.45c-3.13-0.66-4.52-6.25-4.23-8.55            c0.25-1.94,5.61-2.98,8.15-2.28C277.79,245.75,280.06,248.72,279.31,251.44z" />
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path class="st24"
                                                                              d="M263.67,234.93l3.61,0.63l-0.7,4.03l-3.61-0.63c-1.11-0.19-1.86-1.25-1.66-2.37v0              C261.5,235.48,262.56,234.74,263.67,234.93z" />
                                                                        <path class="st25"
                                                                              d="M263.34,235.98l1.49,0.26l-0.29,1.66l-1.49-0.26c-0.46-0.08-0.77-0.52-0.69-0.98l0,0              C262.44,236.2,262.88,235.9,263.34,235.98z" />
                                                                    </g>
                                                                    <g>
                                                                        <path class="st24"
                                                                              d="M287.21,243.38l-3.5-1.1l1.23-3.9l3.5,1.1c1.08,0.34,1.68,1.49,1.34,2.56l0,0              C289.43,243.12,288.28,243.72,287.21,243.38z" />
                                                                        <path class="st25"
                                                                              d="M288.14,240.59l-1.44-0.48l-0.53,1.6l1.44,0.48c0.44,0.15,0.92-0.09,1.07-0.53l0,0              C288.82,241.22,288.58,240.74,288.14,240.59z" />
                                                                    </g>
                                                                    <path class="st24"
                                                                          d="M279.88,226.84L279.88,226.84c6.49,2.06,9.04,8.82,6.99,15.31l-0.16,0.5             c-2.06,6.49-9.03,10.66-14.46,8.84l-0.04-0.03c-4.23-1.64-9.88-9.59-7.82-16.08l0.16-0.5             C266.6,228.4,273.39,224.79,279.88,226.84z" />
                                                                </g>
                                                                <g>
                                                                    <path class="st18"
                                                                          d="M273.52,246.76l0.48,0.11c1.68,0.4,3.37-0.64,3.77-2.32l0,0l-6.56-1.57l0,0             C270.81,244.67,271.84,246.36,273.52,246.76z" />
                                                                    <path class="st15"
                                                                          d="M277.4,240.29c-0.11,0.48,0.09,0.93,0.45,1.02s0.75-0.23,0.86-0.7c0.11-0.48-0.09-0.93-0.45-1.02             C277.9,239.5,277.52,239.81,277.4,240.29z" />
                                                                    <path class="st15"
                                                                          d="M272.31,239.06c-0.15,0.47,0.02,0.94,0.37,1.05c0.35,0.11,0.76-0.17,0.91-0.64             c0.15-0.47-0.02-0.94-0.37-1.05C272.87,238.31,272.46,238.59,272.31,239.06z" />
                                                                    <path class="st26"
                                                                          d="M273.91,242.33l1.71,0.46c0.21,0.06,0.42-0.18,0.4-0.44l-0.19-2.36c-0.02-0.3-0.33-0.4-0.51-0.16             l-1.52,1.89C273.63,241.94,273.69,242.27,273.91,242.33z" />
                                                                    <path class="st15"
                                                                          d="M271.24,236.71c-0.55,0.17,0.59-1.02,1.25-0.99c0.66,0.03,1.18,0.52,1.16,1.09             C273.65,236.82,272.56,236.29,271.24,236.71z" />
                                                                    <path class="st15"
                                                                          d="M280.68,238.92c0.41,0.41-0.05-1.17-0.66-1.45c-0.6-0.28-1.29-0.08-1.53,0.44             C278.49,237.91,279.7,237.95,280.68,238.92z" />
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <path class="st15"
                                                                      d="M272.32,226.13c-4.91,8.14,16.1,13.07,16.1,13.07s3.34-15.8-14.15-16.26            C262.97,222.64,272.8,225.33,272.32,226.13z" />
                                                                <path class="st15"
                                                                      d="M273.82,225.92c0,0-5.08,7.21-6.37,8.44c-1.47,1.41-3.77-0.22-3.77-0.22            S264.41,222.87,273.82,225.92z" />
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path class="st27"
                                                                          d="M292.92,248.9c0,2.36-1.91,4.26-4.26,4.26s-4.26-1.91-4.26-4.26c0-2.36,1.91-4.26,4.26-4.26             S292.92,246.54,292.92,248.9z" />
                                                                    <path class="st27"
                                                                          d="M288.85,244.07c0,0.47-0.38,0.85-0.85,0.85c-0.47,0-0.85-0.38-0.85-0.85             c0-0.47,0.38-0.85,0.85-0.85C288.47,243.22,288.85,243.6,288.85,244.07z" />
                                                                </g>
                                                                <g>
                                                                    <path class="st27"
                                                                          d="M264.35,245.75c-1.13,2.06-3.73,2.82-5.79,1.68c-2.06-1.13-2.82-3.73-1.68-5.79             c1.13-2.06,3.73-2.82,5.79-1.68C264.73,241.1,265.48,243.69,264.35,245.75z" />
                                                                    <path class="st27"
                                                                          d="M263.11,239.56c-0.23,0.41-0.75,0.56-1.16,0.34c-0.41-0.23-0.56-0.75-0.34-1.16             c0.23-0.41,0.75-0.56,1.16-0.34C263.19,238.63,263.34,239.15,263.11,239.56z" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path class="st27"
                                                                      d="M311.28,291.37l-9.17-22.57c-3.17-4.93-6.07-6.35-10.01-5.8c-1.26,0.17-2.31,0.54-3.22,1.02            l-6.34,1.25c-9.16,6.21-17.31-2.86-17.31-2.86c-7.01-5.54-22.01,5.03-22.01,5.03l1.71,9.73c0,0,6.46,24.17,6.5,24.99            c0.4,7.59-0.09,20.78,0.02,20.57c0.1-0.2,40.78,5.23,41.09,4.63c0.31-0.6,0.37-5.17,1.11-21.77            c0.1-2.18,0.14-4.34,0.13-6.47L311.28,291.37z" />
                                                                <g>
                                                                    <defs>
                                                                        <path id="SVGID_5_"
                                                                              d="M311.28,291.37l-9.17-22.57c-3.17-4.93-6.07-6.35-10.01-5.8c-1.26,0.17-2.31,0.54-3.22,1.02              l-6.34,1.25c-9.16,6.21-17.31-2.86-17.31-2.86c-7.01-5.54-24.54,5.03-24.54,5.03l4.24,9.73c0,0,6.46,24.17,6.5,24.99              c0.4,7.59-0.09,20.78,0.02,20.57c0.1-0.2,40.78,5.23,41.09,4.63c0.31-0.6,0.37-5.17,1.11-21.77              c0.1-2.18,0.14-4.34,0.13-6.47L311.28,291.37z" />
                                                                    </defs>
                                                                    <clipPath id="SVGID_6_">
                                                                        <use xlink:href="#SVGID_5_"
                                                                             style="overflow:visible;" />
                                                                    </clipPath>
                                                                    <g class="st28">
                                                                        <g>
                                                                            <g>
                                                                                <path class="st18"
                                                                                      d="M271.98,324.35c-7.04-5.68-14.09-11.66-19.13-19.26c-2.35-3.55-4.29-7.39-5.49-11.48                c-0.23-0.79-1.8-5.53-1.21-6.15c1.11-1.16,4.27,1.05,5.48,1.62c8.44,3.95,15.51,9.04,20.97,16.68                c5.43,7.58,10.22,15.95,12.25,25.11c0.14,0.62,1.08,0.36,0.95-0.26c-2.28-10.26-7.94-19.94-14.43-28.12                c-6.68-8.43-15.91-12.88-25.58-17.05c-0.31-0.13-0.77,0.01-0.74,0.42c1.17,17.07,13.66,29.06,26.22,39.19                C271.77,325.44,272.47,324.74,271.98,324.35L271.98,324.35z" />
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path class="st18"
                                                                                      d="M240.43,255.34c13.04,21.48,28.37,44.49,54.23,51.05c0.44,0.11,0.73-0.34,0.55-0.72                c-5.49-11.86-12.45-22.96-20.86-32.97c-8-9.52-17.9-20.35-29.43-25.53c-0.57-0.26-1.07,0.59-0.5,0.85                c10.96,4.93,20.42,15.12,28.16,24.11c4.12,4.79,7.93,9.85,11.39,15.15c3.18,4.87,7.07,10.36,8.98,15.88                c0.54,1.55,1.16,1.44-0.33,1.68c-1.01,0.16-2.75-0.86-3.75-1.23c-3.17-1.18-6.22-2.68-9.13-4.4                c-5.22-3.09-9.98-6.91-14.29-11.18c-9.77-9.7-17.08-21.48-24.18-33.18C240.95,254.3,240.1,254.8,240.43,255.34                L240.43,255.34z" />
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path class="st18"
                                                                                      d="M285.76,264.72c3.43,15.46,16.18,28.14,32.86,26.13c0.62-0.07,0.63-1.06,0-0.98                c-16.26,1.96-28.57-10.35-31.91-25.4C286.57,263.84,285.62,264.1,285.76,264.72L285.76,264.72z" />
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <path class="st19"
                                                  d="M330.46,224.38l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C329.37,223.76,330.25,223.76,330.46,224.38z" />
                                            <path class="st19"
                                                  d="M344.25,224.38l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C343.17,223.76,344.05,223.76,344.25,224.38z" />
                                            <path class="st19"
                                                  d="M358.05,224.38l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C356.97,223.76,357.85,223.76,358.05,224.38z" />
                                            <path class="st19"
                                                  d="M371.85,224.38l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C370.76,223.76,371.65,223.76,371.85,224.38z" />
                                            <path class="st19"
                                                  d="M385.65,224.38l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C384.56,223.76,385.44,223.76,385.65,224.38z" />
                                        </g>
                                        <path class="st18"
                                              d="M397.22,246.92h-74c-1.95,0-3.52-1.58-3.52-3.52v-1.59c0-1.95,1.58-3.52,3.52-3.52h74      c1.95,0,3.52,1.58,3.52,3.52v1.59C400.75,245.34,399.17,246.92,397.22,246.92z" />
                                        <rect x="447.2" y="255.83" class="st20" width="27.27" height="27.27" />
                                        <line class="st21" x1="233.04" y1="301.06" x2="472.47" y2="301.06" />
                                        <line class="st20" x1="320.16" y1="257.83" x2="427.91" y2="257.83" />
                                        <line class="st20" x1="320.16" y1="269.8" x2="427.91" y2="269.8" />
                                        <line class="st20" x1="320.16" y1="281.77" x2="427.91" y2="281.77" />
                                    </g>
                                    <g>
                                        <g>

                                            <ellipse
                                                transform="matrix(0.7071 -0.7071 0.7071 0.7071 -170.5417 298.9371)"
                                                class="st29" cx="275.58" cy="355.33" rx="36.34" ry="36.34" />
                                            <g>
                                                <defs>

                                                    <ellipse id="SVGID_7_"
                                                             transform="matrix(0.7071 -0.7071 0.7071 0.7071 -170.5417 298.9371)"
                                                             cx="275.58" cy="355.33" rx="36.34" ry="36.34" />
                                                </defs>
                                                <clipPath id="SVGID_8_">
                                                    <use xlink:href="#SVGID_7_" style="overflow:visible;" />
                                                </clipPath>
                                                <g class="st30">
                                                    <g>
                                                        <g>
                                                            <path class="st31"
                                                                  d="M270.38,328.76c0,0-14.48,5.66-18.94,21.34c-4.45,15.69-10.66,29.91-22.14,30.76           c-11.48,0.85-23.54,8.95-24.23,11.45c-0.69,2.5,37,56.64,68.42,43.29l4.04-28.54l0.54,22.2c0,0,0.99,4.16,12.1-3.14           C301.27,418.83,304.69,319.12,270.38,328.76z" />
                                                            <g>
                                                                <g>
                                                                    <path class="st31"
                                                                          d="M278.37,328.53c-7.39-1.65-15.1,0.01-20.97,4.88c-7.04,5.84-8.72,14.94-10.14,23.5             c-0.76,4.6-1.48,9.29-3.22,13.65c-2.89,7.26-8.56,10.03-16.16,10.2c-9.67,0.21-18.36-0.58-25.16,7.5             c-0.84,1,0.59,2.45,1.44,1.44c7.71-9.15,17.7-5.68,27.98-7.22c7.58-1.13,11.97-5.79,14.39-12.83             c2.86-8.31,2.6-17.39,5.85-25.59c4.06-10.26,14.6-15.98,25.44-13.56C279.1,330.78,279.65,328.81,278.37,328.53             L278.37,328.53z" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <path class="st32"
                                                                  d="M282.26,352.18c0,0,2.52,21.71,2.93,23.37c0,0-6.59,7.39-16.14,2.07c0,0,1.05-6.44,2.73-19.73           L282.26,352.18z" />
                                                            <path class="st15"
                                                                  d="M273.13,338.27L273.13,338.27c-4.18,0.92-5.66,7.31-4.13,14.26l0.12,0.53           c1.52,6.94,5.86,10.48,9.42,10.7c2.86,0.18,6.01-6.56,4.48-13.51l0.35-1.07C281.85,342.23,277.32,337.35,273.13,338.27z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path class="st33"
                                                                          d="M264.63,350.41l3.5-1.19l-1.32-3.9l-3.5,1.19c-1.08,0.37-1.65,1.53-1.29,2.61l0,0             C262.39,350.19,263.56,350.77,264.63,350.41z" />
                                                                    <path class="st33"
                                                                          d="M288.59,340.72l-3.55,1.01l1.13,3.96l3.55-1.01c1.09-0.31,1.73-1.45,1.42-2.54l0,0             C290.82,341.04,289.68,340.41,288.59,340.72z" />
                                                                    <path class="st34"
                                                                          d="M289.03,341.73l-1.47,0.42l0.47,1.64l1.47-0.42c0.45-0.13,0.71-0.6,0.58-1.05l0,0             C289.95,341.86,289.48,341.6,289.03,341.73z" />
                                                                    <path class="st34"
                                                                          d="M263.63,347.62l1.44-0.51l0.57,1.6l-1.44,0.51c-0.44,0.16-0.93-0.07-1.09-0.51l0,0             C262.96,348.26,263.19,347.78,263.63,347.62z" />
                                                                </g>
                                                                <path class="st35"
                                                                      d="M273.17,334.06L273.17,334.06c-6.68,1.58-9.79,8.02-8.26,14.5l0.12,0.5            c1.53,6.49,9.71,11.63,14.01,10.47c4.41-1.2,10.48-9.58,8.95-16.07l-0.12-0.5C286.35,336.48,279.85,332.49,273.17,334.06z            " />
                                                            </g>
                                                            <g>
                                                                <path class="st18"
                                                                      d="M277.79,354.04l0.49-0.13c1.73-0.46,2.76-2.24,2.3-3.97l0,0l-6.76,1.8l0,0            C274.28,353.47,276.06,354.5,277.79,354.04z" />
                                                                <path class="st15"
                                                                      d="M278.15,346.22c0.13,0.49,0.54,0.81,0.91,0.71c0.37-0.1,0.57-0.58,0.44-1.07            c-0.13-0.49-0.54-0.81-0.91-0.71C278.22,345.25,278.02,345.73,278.15,346.22z" />
                                                                <path class="st15"
                                                                      d="M272.89,347.6c0.09,0.5,0.47,0.85,0.85,0.78c0.38-0.07,0.61-0.53,0.52-1.03            c-0.09-0.5-0.47-0.85-0.85-0.78C273.03,346.64,272.8,347.1,272.89,347.6z" />
                                                                <path class="st36"
                                                                      d="M275.97,349.8l1.79-0.42c0.22-0.05,0.3-0.37,0.15-0.6l-1.34-2.06c-0.17-0.26-0.49-0.2-0.55,0.1            l-0.45,2.48C275.52,349.58,275.74,349.85,275.97,349.8z" />
                                                                <path class="st15"
                                                                      d="M270.76,345.98c-0.42,0.43,0.04-1.22,0.66-1.52c0.62-0.3,1.34-0.11,1.6,0.43            C273.02,344.89,271.76,344.95,270.76,345.98z" />
                                                                <path class="st15"
                                                                      d="M280.47,343.36c0.57,0.17-0.62-1.04-1.31-1c-0.69,0.04-1.22,0.56-1.18,1.15            C277.98,343.51,279.1,342.95,280.47,343.36z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path class="st13"
                                                                  d="M285.41,374.32c-2.2,3.53-9.26,6.42-16.14-3.97c0,0-11.14-7.13-19.19,6.08           c-7.27,11.93-7.35,12.3-7.35,12.3l15.08,12.92l1.05,28.02l43.24,1.41c0,0-4.6-20.01-3.79-23.25           c0.14-0.54,13.28-22.09,13.28-22.09S294.33,359.99,285.41,374.32z" />
                                                            <line class="st13" x1="258.55" y1="419.26" x2="299.02"
                                                                  y2="420.35" />
                                                        </g>
                                                    </g>
                                                    <path class="st31"
                                                          d="M263.74,345.39c0,0,7.64-2.38,9.43-11.32c0,0,8.14,7.68,14.55,6.29c0,0-6.42-11.81-15.24-8.16         C263.67,335.84,263.81,341.23,263.74,345.39z" />
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <path class="st19"
                                                  d="M330.46,328.8l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C329.37,328.17,330.25,328.17,330.46,328.8z" />
                                            <path class="st19"
                                                  d="M344.25,328.8l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C343.17,328.17,344.05,328.17,344.25,328.8z" />
                                            <path class="st19"
                                                  d="M358.05,328.8l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C356.97,328.17,357.85,328.17,358.05,328.8z" />
                                            <path class="st10"
                                                  d="M371.85,328.8l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C370.76,328.17,371.65,328.17,371.85,328.8z" />
                                            <path class="st10"
                                                  d="M385.65,328.8l0.65,2c0.09,0.28,0.35,0.47,0.64,0.47h2.11c0.66,0,0.93,0.84,0.4,1.22l-1.7,1.24       c-0.24,0.17-0.34,0.48-0.25,0.76l0.65,2c0.2,0.62-0.51,1.14-1.04,0.76l-1.7-1.24c-0.24-0.17-0.56-0.17-0.8,0l-1.7,1.24       c-0.53,0.39-1.24-0.13-1.04-0.76l0.65-2c0.09-0.28-0.01-0.58-0.25-0.76l-1.7-1.24c-0.53-0.39-0.26-1.22,0.4-1.22h2.11       c0.29,0,0.55-0.19,0.64-0.47l0.65-2C384.56,328.17,385.44,328.17,385.65,328.8z" />
                                        </g>
                                        <path class="st18"
                                              d="M397.22,351.34h-74c-1.95,0-3.52-1.58-3.52-3.52v-1.59c0-1.95,1.58-3.52,3.52-3.52h74      c1.95,0,3.52,1.58,3.52,3.52v1.59C400.75,349.76,399.17,351.34,397.22,351.34z" />
                                        <rect x="447.2" y="360.25" class="st20" width="27.27" height="27.27" />
                                        <line class="st21" x1="233.04" y1="405.48" x2="472.47" y2="405.48" />
                                        <line class="st20" x1="320.16" y1="362.25" x2="427.91" y2="362.25" />
                                        <line class="st20" x1="320.16" y1="374.22" x2="427.91" y2="374.22" />
                                        <line class="st20" x1="320.16" y1="386.19" x2="427.91" y2="386.19" />
                                    </g>
                                </g>
                                <path class="st37"
                                      d="M249.33,436.74c9.37,0,22.95-12.58,22.95-21.95h258.38c0,0-1,21.95-25.94,21.95H249.33" />
                            </g>
                            <g>
                                <g>
                                    <g>
                                        <path class="st38"
                                              d="M584.69,255.66l-18.49-79.62c-0.26-2.08,3.5-7.06,5.33-8.1c4.99-2.86,11.16-3.27,16.79-2.1      c18.36,3.82,33.97,77.23,30.91,75.46c0,0-27.56,14.39-36.48,8.54" />
                                        <path class="st39"
                                              d="M586.16,182.94c-0.01,0.28,0.21,0.51,0.49,0.5c1.16-0.01,3.83-0.25,4.21,2.78      c0.38,3.06-2.54,4.79-4.29,4.88c-0.51,0.03-1.68,0.13-2.02,0.51c-1.06,1.15-1.55,3.66-2.36,6.79      c-1.8,6.91,3.63,10.07,3.63,10.07s-18.1,8.9-17.93-0.02c0,0,1.43-16.41,1.35-16.5c-1.41-1.41-6.9-2.02-3.45-13.72      c3.2-10.84,11.15-10.07,13.17-9.71C580.65,168.82,586.57,169.19,586.16,182.94z" />
                                        <path class="st38"
                                              d="M573.35,167.45c0,0,11.11,14.69,13.05,15.91C586.4,183.36,593.97,165.43,573.35,167.45z" />
                                        <g>
                                            <path class="st40" d="M589.54,187.1c0,0-1.82-3.84-4.13,1.31" />
                                            <path class="st41"
                                                  d="M576.1,182.95c-1.5-0.03-2.75,1.16-2.78,2.66c-0.03,1.5,1.16,2.75,2.66,2.78       c1.5,0.03,2.75-1.16,2.78-2.66C578.79,184.23,577.6,182.99,576.1,182.95z" />
                                            <path class="st41"
                                                  d="M564.76,183.97c1.24-0.23,2.2-1.3,2.23-2.62c0.02-1.01-0.51-1.91-1.32-2.4       C565.67,178.96,564.51,181.97,564.76,183.97z" />
                                            <path class="st18"
                                                  d="M567.05,182.57l4.15,2.07c0,0-2.03,1.48-3.12,0.67C566.98,184.49,567.05,182.57,567.05,182.57z" />
                                            <path class="st40"
                                                  d="M570.23,179.56l-0.66,2.96l-1.44-0.64c-0.27-0.12-0.31-0.48-0.08-0.65L570.23,179.56z" />
                                            <path
                                                d="M575.55,178.45c0.36,0.5,0.15-1.25-0.44-1.65c-0.59-0.4-1.35-0.32-1.7,0.19C573.41,176.99,574.68,177.24,575.55,178.45       z" />
                                            <path
                                                d="M567.73,175.49c-0.6,0.17,0.66-1.07,1.38-1.02c0.71,0.06,1.25,0.6,1.21,1.22       C570.31,175.69,569.16,175.09,567.73,175.49z" />
                                            <path
                                                d="M573.16,180.62c-0.2,0.5-0.56,0.82-0.8,0.72c-0.24-0.1-0.27-0.58-0.07-1.07c0.2-0.5,0.56-0.82,0.8-0.72       C573.32,179.65,573.36,180.13,573.16,180.62z" />
                                            <path
                                                d="M569.32,178.79c-0.19,0.47-0.53,0.78-0.76,0.69c-0.23-0.09-0.26-0.55-0.07-1.02c0.19-0.47,0.53-0.78,0.76-0.69       C569.48,177.86,569.51,178.32,569.32,178.79z" />
                                            <path
                                                d="M569.23,191.95c0,0,5.17,0.99,7.78,0.82C579.61,192.6,566.55,207.6,569.23,191.95z" />
                                        </g>
                                    </g>
                                    <ellipse class="st6" cx="605.69" cy="453.78" rx="53.96" ry="3.1" />
                                    <g>
                                        <path class="st42"
                                              d="M572.06,430.81l-1.88,13.35c0,0-3.02,8.85-5.82,5.43c-2.8-3.43-5.57-5.24-5.57-5.24l-0.92-13.88      L572.06,430.81z" />
                                        <path class="st41"
                                              d="M564.73,431.31l-0.48,18.16c0,0,8.86,1.33,5.57-4.6l1.94-12.59L564.73,431.31z" />
                                        <path class="st42"
                                              d="M616.68,429.78l4.15,13.32c0,0,3.16,2.77,4.3,2.7c2.08-0.13,3.16-3.71,3.16-3.71l0.34-12.31H616.68z" />
                                        <path class="st41"
                                              d="M622.67,426.22l2.91,22.03c0,0,5.96,1.57,2.66-4.36l0.73-16.95L622.67,426.22z" />
                                        <path class="st43"
                                              d="M557.87,444.28l-11.18,9.06c-0.57,0.42-0.16,1.14,0.65,1.15l16.5,0.13c0.4,0,0.75-0.18,0.89-0.45      l1.24-2.55c0.36-0.74,1.08-0.8,1.01-0.02l0.61,2.46c-0.03,0.39,3.91,0.28,3.95-0.07c0.22-2.19-0.24-9.36-0.63-11.35      c-0.06-0.29-0.35-0.51-0.74-0.57l0,0c-0.35-0.05-0.71,0.05-0.92,0.25c-1.11,1.08-4.68,4.32-6.57,3.66      c-1.27-0.44-2.92-1.23-3.43-1.68C558.9,444,558.25,443.99,557.87,444.28z" />
                                        <path class="st43"
                                              d="M628.46,441.63l6.35,10.63c0.68,1.03,0.3,2.27-0.92,3c-1.99,1.18-3.61,3.54-4.86,3.57      c-2.26,0.06-5.77-2.31-7.81-3.21c-1.37-0.6-2.45-1.48-2.28-2.62l1.58-10.67c0.02-0.13,0.25-0.18,0.37-0.08l2.43,2.2      c0.8,0.72,2.96,0.62,3.49-0.24c0.38-0.62,1.28-2.61,1.28-2.61C628.17,441.51,628.39,441.52,628.46,441.63z" />
                                    </g>
                                    <g>
                                        <path class="st44"
                                              d="M594.78,254.36c5.13,9.06,7.84,15.7,10.78,27.22c3.42,13.36,40.38,126.38,41.99,150.68      c-4.21,1.01-32.17,0.87-34.83,0.72c-8.46-24.25-29.88-103.03-33.51-118.31c-0.56-2.35-4.19-1.83-3.9,0.56      c2.06,17.45,13.16,90.94,18.69,117.79c-2.21,1.12-34.26,0.87-36.82,0.55c-2.77-29.93-17.49-143.23,4.73-179.95      C572.08,252.22,584.48,254.05,594.78,254.36z" />
                                        <path class="st45"
                                              d="M563.25,257.6c0,0-9.05,22.4-9.05,54.01c0,31.61,10.36,111.69,10.36,111.69" />
                                        <line class="st45" x1="625.92" y1="423.3" x2="589.77" y2="256.57" />
                                        <path class="st45" d="M583.44,257.45c0,0,0.31,28.95,13.3,26.67" />
                                        <path class="st46"
                                              d="M562.07,258.19l41.83,31.5c0,0,1.75-17-5.69-30.95L562.07,258.19z" />
                                        <path class="st45" d="M556.47,285.45c13,2.28,10.91-26.53,10.91-26.53" />
                                    </g>
                                    <path class="st47"
                                          d="M581.51,204.92c0,0,2.65-0.77,2.21-0.2c-0.44,0.56-1.38,1.19-2.32,1.82L581.51,204.92z" />
                                    <line class="st45" x1="592.07" y1="423.47" x2="555.95" y2="423.48" />
                                    <line class="st45" x1="646.39" y1="423.16" x2="609.08" y2="423.48" />
                                    <path class="st48"
                                          d="M607.22,308.67c0-0.22,0.22-2.59,0.22-2.59l-1.07,3.4L607.22,308.67z" />
                                    <path class="st48"
                                          d="M600.51,312.04l-0.75,0.58c0,0,0.78,1.41,1.11,1.3C600.87,313.92,600.32,313.25,600.51,312.04z" />
                                    <g>
                                        <path class="st39"
                                              d="M521.81,229.34c0,0,27.34,37.92,33.75,33.4c0,0,7.35-5.19,3.65-26.37c-0.01-2.06-0.02-3.48,0.06-3.81      c0,0,1.59-20.92,5.03-25.25c0.38-0.48,1.52-1.36,1.37-1.4c-10.5-2.62-14.52,23.77-17.41,35.98      c-0.12,0.51-20.16-19.01-20.16-19.01s-10.5-13.88-11.23-13.09c-1.06,1.15,3.01,7.34,3.01,7.34s-0.27,0.71-1.06,1.06      c-0.8,0.35-1.24,0.88-1.5,1.95c-0.27,1.06-1.33,1.68-1.5,2.3C515.62,223.06,519.57,227.72,521.81,229.34z" />
                                        <path class="st39"
                                              d="M527.73,222.8c0,0-2.12-6.01-3.01-5.84c-0.88,0.18-4.78,1.86-4.69,3.36c0.09,1.5,3.45,0.27,3.45,0.27      s-0.62,3.36,1.06,3.8C526.23,224.83,527.73,222.8,527.73,222.8z" />
                                        <g>
                                            <path class="st41"
                                                  d="M522.52,220.32c0,0,0.09,1.5-1.15,1.77c0,0-0.27,1.59-1.86,1.24c0,0,0.44,0.71-0.53,0.88       C518.98,224.21,523.13,228.72,522.52,220.32z" />
                                            <g>
                                                <path class="st40"
                                                      d="M523.32,217.42c-0.73,0.53-1.48,0.99-2.24,1.44c-0.36,0.24-0.81,0.42-1.09,0.65        c-0.14,0.12-0.25,0.25-0.27,0.35c-0.02,0.09,0,0.16,0.11,0.26c0.21,0.21,0.63,0.4,1.01,0.48c0.4,0.1,0.82,0.11,1.25,0.15        c0.21,0.05,0.44-0.07,0.8,0.19c0.18,0.17,0.14,0.42,0.11,0.52l-0.09,0.32c-0.14,0.42-0.25,0.85-0.41,1.27l-0.04-0.01        l0.24-1.31c0.02-0.21,0.15-0.46,0.01-0.61c-0.16-0.13-0.41-0.07-0.63-0.08c-0.87,0-1.83-0.05-2.54-0.65        c-0.17-0.16-0.26-0.41-0.19-0.64c0.07-0.23,0.24-0.4,0.41-0.53c0.36-0.27,0.78-0.43,1.17-0.64l2.37-1.2L523.32,217.42z" />
                                            </g>
                                            <g>
                                                <path class="st40"
                                                      d="M519.79,216.94c0.22,0.02,0.38,0.09,0.53,0.17c0.15,0.08,0.27,0.2,0.4,0.29        c0.09,0.13,0.21,0.25,0.28,0.4c0.07,0.15,0.14,0.31,0.15,0.52l-0.03,0.03c-0.47-0.45-0.93-0.9-1.37-1.38L519.79,216.94z" />
                                            </g>
                                            <g>
                                                <path class="st40"
                                                      d="M517.99,219.18c0.41,0.26,0.77,0.54,1.14,0.82c0.37,0.27,0.71,0.57,1.08,0.83        c0.34,0.29,0.72,0.57,1.06,0.83c0.16,0.13,0.34,0.22,0.52,0.26c0.19,0.05,0.4,0.03,0.6-0.11l0.03,0.02        c-0.31,0.41-0.92,0.33-1.3,0.1c-0.41-0.23-0.78-0.5-1.16-0.78c-0.73-0.57-1.4-1.22-2.01-1.93L517.99,219.18z" />
                                            </g>
                                            <g>
                                                <path class="st40"
                                                      d="M521.46,222.09c0.03,0.53,0,1.18-0.59,1.62c-0.29,0.22-0.69,0.22-1,0.15c-0.32-0.08-0.59-0.23-0.84-0.39        c-0.46-0.38-0.83-0.78-1.15-1.21c-0.32-0.44-0.63-0.89-0.85-1.4l0.03-0.02c0.34,0.42,0.69,0.82,1.05,1.21        c0.37,0.39,0.73,0.79,1.16,1.1c0.41,0.3,0.97,0.56,1.45,0.3c0.47-0.27,0.6-0.85,0.71-1.36L521.46,222.09z" />
                                            </g>
                                            <g>
                                                <path class="st40"
                                                      d="M519.62,223.06c0.1,0.34,0.07,0.7-0.03,1.05c-0.06,0.17-0.11,0.35-0.26,0.54        c-0.07,0.09-0.27,0.19-0.34,0.21c-0.1,0.03-0.2,0.06-0.3,0.07c-0.4,0.09-0.8-0.11-1.08-0.21c-0.14-0.08-0.3-0.14-0.47-0.27        c-0.16-0.14-0.25-0.31-0.3-0.48l0.03-0.03c0.21,0.27,0.51,0.38,0.83,0.45c0.31,0.1,0.63,0.18,0.95,0.16        c0.16-0.02,0.33-0.04,0.43-0.15c0.11-0.11,0.19-0.26,0.26-0.4c0.13-0.3,0.23-0.62,0.23-0.94L519.62,223.06z" />
                                            </g>
                                        </g>
                                    </g>
                                    <path class="st49"
                                          d="M565.66,205.91c0,0-6.8-0.95-9.51,4.59c-2.71,5.54-8.73,30.3-8.73,30.3l-16.74-16.04l-6.49,11.79     c0,0,23.82,30.07,30.66,27.95C561.69,262.38,565.74,213.47,565.66,205.91z" />
                                    <g>
                                        <path class="st49"
                                              d="M564.57,207.08c0.3,0.72-8.43,21.51-8.07,28.54c0.35,7.09,5.2,19.01,4.82,20.08c0,0,5.5,4.34,35.84-0.44      c9.33-8.16,1.13-35.89-2-44.67c0,0-5.97-2.99-8.54-3.18C586.61,207.41,576.54,210.63,564.57,207.08z" />
                                        <path class="st50"
                                              d="M586.68,207.38l-4.3-5.62c0,0-5.12,3.64-12.81,6.32l0.13,2.01c0.26,3.96,4.6,6.27,8.02,4.26      C581.31,212.27,585.14,209.67,586.68,207.38z" />
                                        <path class="st50"
                                              d="M568.55,201.45c0,0-1.28,4.87,1.13,6.73l-0.69,1.69c-0.8,2.32-4.23,1.92-4.44-0.53      c-0.08-0.96-0.08-1.84,0.06-2.53L568.55,201.45z" />
                                    </g>
                                    <g>
                                        <path class="st1"
                                              d="M590.17,318.71l39.2-25.12l-16.27-25.39l-33.86,21.7c-2.95,1.89-3.81,5.81-1.92,8.75L590.17,318.71z" />
                                    </g>
                                    <g>
                                        <path class="st51"
                                              d="M604.07,273.2c0,0,6.32,2.93,1.44,20.85c-0.26,0.95-0.48,2.03-0.29,2.99l1.1,7.7      c0.16,0.82,0.28,1.93-0.42,2.4c-0.88,0.58-5.86,5.17-6.47,5.37c-1.23,0.41,0.11-5.68-0.09-8.88c-0.04-0.57-0.17,2.03-0.25,3.17      l-0.15,2.5c-1.49-0.68-1.46-3.56-1.69-4.53c-0.31-1.3-0.06-2.13,0.09-2.44c0.68-1.42,1.98-4.24,2.18-6.77      c0.12-1.49-0.92-7.02-1.79-17.32L604.07,273.2z" />
                                        <path class="st39"
                                              d="M604.88,229.6c11.72,65.43,4.11,77.86,3.34,78.37c-0.96,0.64-6.43,5.66-7.09,5.89      c-1.35,0.45,0.12-6.22-0.1-9.73c-0.04-0.63-0.19,2.22-0.27,3.47l-0.17,2.74c-1.63-0.75-1.6-3.9-1.86-4.96      c-0.34-1.42-0.06-2.33,0.1-2.68c0.75-1.55,2.17-4.65,2.39-7.42c0.13-1.63-10.97-54.77-12.92-62.58      c-2.65-10.61,0.69-22.8,4.42-23.21C597.36,208.97,603.91,224.18,604.88,229.6z" />
                                        <path class="st49"
                                              d="M613.1,291.51c-0.47-2,2.05-40.18-6.46-65.15c-3.81-11.16-9.28-17.39-13.92-16.88      c-3.74,0.41-7.07,12.6-4.42,23.21c1.95,7.81,6.06,42.66,9.47,60.47L613.1,291.51z" />
                                    </g>
                                </g>
                                <g>
                                    <path class="st1"
                                          d="M597.62,157.29l7.8-7.8h29.38c5.98,0,10.83-4.85,10.83-10.83v-2.35c0-5.98-4.85-10.83-10.83-10.83h-26.36     c-5.98,0-10.83,4.85-10.83,10.83V157.29z" />
                                    <g>
                                        <path class="st52"
                                              d="M630.03,137.18c0,1.49,1.21,2.7,2.7,2.7s2.7-1.21,2.7-2.7c0-1.49-1.21-2.7-2.7-2.7      S630.03,135.69,630.03,137.18z" />
                                        <path class="st52"
                                              d="M620.13,137.18c0,1.49,1.21,2.7,2.7,2.7c1.49,0,2.7-1.21,2.7-2.7c0-1.49-1.21-2.7-2.7-2.7      C621.33,134.48,620.13,135.69,620.13,137.18z" />
                                        <path class="st52"
                                              d="M610.22,137.18c0,1.49,1.21,2.7,2.7,2.7c1.49,0,2.7-1.21,2.7-2.7c0-1.49-1.21-2.7-2.7-2.7      C611.43,134.48,610.22,135.69,610.22,137.18z" />
                                    </g>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <ellipse class="st6" cx="127.57" cy="435.84" rx="62.86" ry="3.62" />
                                    <g>
                                        <polygon class="st53"
                                                 points="182.84,425.76 180.91,421.96 169.44,422.37 169.18,425.76 174.57,435.12 184.28,427.63     " />
                                        <path class="st54"
                                              d="M175.84,422.34l-0.48,8.84c0,0-2.98-1.69-6.46-4.81l0.48-5L175.84,422.34z" />
                                        <path class="st44"
                                              d="M183.53,425.63c0,0-3.37-0.07-7.29,2.91c-2.33,1.77-5.86-1.88-6.94-2.83c-0.22-0.19-0.52-0.02-0.56,0.32      l-1.36,12.35h34.14c0.4,0,0.72-0.42,0.72-0.94v-2.6c0-0.4-0.2-0.76-0.49-0.89L183.53,425.63z" />
                                        <line class="st55" x1="185.45" y1="426.28" x2="179.95" y2="429.46" />
                                        <line class="st55" x1="187.84" y1="427.51" x2="182.35" y2="430.69" />
                                    </g>
                                    <g>
                                        <polygon class="st53"
                                                 points="127.21,425.76 125.29,421.96 114.76,420.38 113.56,425.76 118.95,435.12 128.65,427.63     " />
                                        <path class="st54"
                                              d="M119.07,422.09l0.96,8.35c0,0-2.98-1.69-6.46-4.81l0.96-4.27L119.07,422.09z" />
                                        <path class="st44"
                                              d="M127.91,425.63c0,0-3.37-0.07-7.29,2.91c-2.33,1.77-5.86-1.88-6.94-2.83c-0.22-0.19-0.52-0.02-0.56,0.32      l-1.36,12.35h34.14c0.4,0,0.72-0.42,0.72-0.94v-2.6c0-0.4-0.2-0.76-0.49-0.89L127.91,425.63z" />
                                        <line class="st55" x1="130.6" y1="426.53" x2="125.1" y2="429.71" />
                                        <line class="st55" x1="132.99" y1="427.75" x2="127.5" y2="430.93" />
                                    </g>
                                    <path class="st38"
                                          d="M168.73,147.14c2.37-3.78,3.15-9.42-1-11.94c-2.16-1.31-4.97-1.01-6.89,0.59c-0.89,0.74-1.56,1.68-2.11,2.7     c-0.84-1.18-2.08-2-3.63-1.96c-1.32,0.03-2.86,1.04-3.84,2.37c-1.32-0.42-2.85-0.45-3.98-0.17c-2.93,0.74-3.45,4.59-1.83,6.85     c-2.09,2.8-2.68,6.71,0.28,16.47l0.03,0.1l4.04,2.17l0.12-0.23l0,0l0,0l0.12-0.23l-0.31-0.17l4.02-13.01     c0.52-0.36,3.86-2.57,5.61-1.22c1.78,1.38,3.81,2.71,5.41,2.07c0.71-0.28,1.35-0.99,1.82-1.63     C167.6,149.28,168.29,148.29,168.73,147.14z M166.96,136.54c1.55,0.93,2.17,2.43,2.21,4.08c-0.7-3.25-3.76-4.82-6.84-3.99     C163.73,135.78,165.48,135.65,166.96,136.54z M147.09,162.12c0.47,0.15,1.14,0.45,1.77,1.09l-0.88-0.47L147.09,162.12z" />
                                    <g>
                                        <path class="st56"
                                              d="M180.71,276.28c0,0,4.39,52.52,4.8,67.03c0.41,14.51-2.5,79.2-2.5,79.2l-18.26,0.32      c0,0-12.76-108.53-30.5-143.52L180.71,276.28z" />
                                        <path class="st55"
                                              d="M158.55,279.05c0,0,12.49,60.67,12.49,69.99s1.84,73.33,1.84,73.33" />
                                        <line class="st55" x1="163.81" y1="415.77" x2="183.17" y2="415.77" />
                                    </g>
                                    <g>
                                        <path class="st49"
                                              d="M180.74,276.28c0,0-10.15,43.78-20.46,74.75c-8.33,25.03-26.79,72.96-26.79,72.96l-20.48-0.51l17.79-71.7      c0.95-3.74,1.54-7.55,1.79-11.41c0.91-14.54-2.07-43.93-3.32-62.76L180.74,276.28z" />
                                        <g>
                                            <path class="st57"
                                                  d="M145.17,277.09c0,0,4.8,56.75,0.49,65.57c-4.31,8.83-25.34,80.68-25.34,80.68" />
                                            <line class="st57" x1="115.06" y1="416.99" x2="135.61" y2="416.99" />
                                            <line class="st57" x1="162.38" y1="276.6" x2="147.08" y2="296.66" />
                                        </g>
                                    </g>
                                    <g>
                                        <path class="st53"
                                              d="M156.2,193.65c0,0-0.58-4.71,3.78-5.4c4.36-0.69,16.1-3.8,45.96,6.4c0,0,5.17-28.91,5.22-31.25      c0.13-6.09,2.06-13.99,6.77-18.16c0.39-0.34,0.67,15.09,0.84,23.33c0,0,3.98,41.47-0.87,45.64      C213.04,218.38,151.38,207.86,156.2,193.65z" />
                                        <path class="st44"
                                              d="M165.03,186.48c0,0-16.85-2.8-16.36,10.34s33.33,22.06,42.25,19.93l-2.76-29.19L165.03,186.48z" />
                                        <path class="st58"
                                              d="M190.79,216.32c-2.62,3.14-28.26-3.45-31.07-7.74c0,0-0.44-14.35,0.65-14.65      C171.5,190.92,190.79,216.32,190.79,216.32z" />
                                    </g>
                                    <g>
                                        <path class="st44"
                                              d="M141.05,184.99c0,0-22.93,2.34-24.38,21.33c-1.44,18.99,10.42,71.59,10.42,71.59l57.45-1.83l-3.14-65.27      c-0.23-4.84-1.73-9.53-4.32-13.58c-2.4-3.74-5.21-7.99-6.8-8.19l-25.72-6.61L141.05,184.99z" />
                                        <path class="st59"
                                              d="M136.32,192.14c-13.93-5.59-18.92,4.69-19.64,14.19c-1.44,18.99,10.42,71.59,10.42,71.59l57.45-1.83" />
                                    </g>
                                    <path class="st18"
                                          d="M166.67,251.18c0.13,1-0.03,1.85-0.36,1.89c-0.33,0.04-0.7-0.73-0.82-1.73c-0.13-1,0.03-1.85,0.36-1.89     C166.18,249.4,166.55,250.18,166.67,251.18z" />
                                    <g>
                                        <path class="st53"
                                              d="M148.27,167.81l-1.34,12.91l13.3,11.1l1.96-5.76l-1.03-10.67l-10.73-9.71c0,0-1.65,1.17-1.86,1.6      S148.27,167.81,148.27,167.81z" />
                                        <path class="st38"
                                              d="M150.44,165.68l10.73,9.71l0.76,6.35c0,0-9.74-2.68-10.08-10.73" />
                                    </g>
                                    <g>
                                        <g>
                                            <path class="st18"
                                                  d="M162.21,200.15c0.13,1-0.03,1.85-0.36,1.89c-0.33,0.04-0.7-0.73-0.82-1.73c-0.13-1,0.03-1.85,0.36-1.89       C161.71,198.38,162.08,199.15,162.21,200.15z" />
                                            <path class="st18"
                                                  d="M163.1,210.36c0.13,1-0.03,1.85-0.36,1.89s-0.7-0.73-0.82-1.73c-0.13-1,0.03-1.85,0.36-1.89       S162.97,209.36,163.1,210.36z" />
                                            <path class="st18"
                                                  d="M164,220.56c0.13,1-0.03,1.85-0.36,1.89c-0.33,0.04-0.7-0.73-0.82-1.73c-0.13-1,0.03-1.85,0.36-1.89       C163.5,218.79,163.87,219.56,164,220.56z" />
                                            <path class="st18"
                                                  d="M164.89,230.77c0.13,1-0.03,1.85-0.36,1.89c-0.33,0.04-0.7-0.73-0.82-1.73c-0.13-1,0.03-1.85,0.36-1.89       S164.76,229.77,164.89,230.77z" />
                                            <path class="st18"
                                                  d="M165.78,240.97c0.13,1-0.03,1.85-0.36,1.89c-0.33,0.04-0.7-0.73-0.82-1.73c-0.13-1,0.03-1.85,0.36-1.89       C165.28,239.2,165.65,239.97,165.78,240.97z" />
                                            <path class="st18"
                                                  d="M167.57,261.38c0.13,1-0.03,1.85-0.36,1.89c-0.33,0.04-0.7-0.73-0.82-1.73c-0.13-1,0.03-1.85,0.36-1.89       C167.07,259.61,167.44,260.38,167.57,261.38z" />
                                            <path class="st18"
                                                  d="M168.46,271.59c0.13,1-0.03,1.85-0.36,1.89c-0.33,0.04-0.7-0.73-0.82-1.73c-0.13-1,0.03-1.85,0.36-1.89       C167.96,269.81,168.33,270.59,168.46,271.59z" />
                                        </g>
                                        <g>
                                            <polygon class="st18"
                                                     points="146.52,179.76 139.43,183.07 157.14,198.11 160.24,191.82      " />
                                            <path class="st18"
                                                  d="M162.2,184.67c0.31,0.11,3.09,2.03,3.09,2.03l0.1,9.5l-5.16-4.37L162.2,184.67z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class="st44"
                                                  d="M177.76,250.55l12.78-40.12c0.71-2.22,2.32-4.02,4.4-4.92l26.18-11.31c0.78-0.33,1.57,0.43,1.3,1.26       l-12.92,39.3c-0.7,2.12-2.21,3.84-4.18,4.76l-26.24,12.26C178.32,252.14,177.5,251.38,177.76,250.55z" />
                                            <path class="st18"
                                                  d="M179.96,252.9l12.78-40.12c0.71-2.22,2.32-4.02,4.4-4.92l26.18-11.31c0.78-0.33,1.57,0.43,1.3,1.26       l-12.92,39.3c-0.7,2.12-2.21,3.84-4.18,4.76l-26.24,12.26C180.52,254.49,179.7,253.73,179.96,252.9z" />
                                            <polygon class="st60"
                                                     points="186.51,223.53 196.15,226.39 183.97,231.32      " />
                                            <line class="st61" x1="197.84" y1="214.96" x2="220.5" y2="205.27" />
                                            <line class="st61" x1="197.84" y1="219.23" x2="216.55" y2="211.5" />
                                            <polygon class="st1"
                                                     points="187.69,243.35 211.93,232.73 210.35,237.81 185.67,248.89      " />
                                        </g>
                                        <path class="st53"
                                              d="M196.25,230.59c-1.41,1.27-26.82,27.33-39,39.07c-3.28,3.17-8.55,2.39-10.86-1.6L125,232.21l20.27-15.73      c0.14,0.22,10.74,18.23,13.18,27.26c0.8,2.97,2.19,2.74,4.6,1.27l18.5-11.4c0,0-0.03-3.23,0.38-4.46      c0.78-2.33,4.49-5.45,4.49-5.45l-1.61,4.93c-0.29,0.83-1.24,1.43,0.26,1.61l11.75-8.71c0,0,1.07-0.09,0.06,1.07      c-1.01,1.15-2.11,2.37-1.97,2.45s3.35-2.16,3.49-1.3c0.14,0.87-2.62,2.94-2.51,3.03c0.11,0.09,3.13-2.39,3.3-1.59      c0.17,0.81-2.11,2.37-2.23,2.68c-0.11,0.32,2.48-1.67,2.59-1.24C199.67,227.08,197.06,229.87,196.25,230.59z" />
                                        <path class="st44"
                                              d="M139.91,200.54c0,0-5.78-16.22-16.91-9.39c-11.14,6.83-2.89,40.12,3.3,46.95l23.93-16.64L139.91,200.54z" />
                                    </g>
                                    <g>
                                        <path class="st53"
                                              d="M149.4,162.08c-0.13,0.34-0.55,0.44-0.81,0.19c-0.87-0.86-2.61-2.03-3.24,1.38      c-0.85,4.64,3.99,3.84,4.38,4.46c0.78,1.27,3.29,5.52,7.03,7.17c2.28,1.01,5.65,1.17,8.14-1.22c2.49-2.39,3.6-0.75,2.56-26.29      c0,0-1.14,2.2-2.78,2.77c-1.64,0.57-4.27-1.71-6.13-2.23c-1.52-0.42-4.45-1.53-6.25,3.74      C151.47,154.47,150.16,160.07,149.4,162.08z" />
                                        <g>
                                            <path class="st62" d="M166.6,160.55c0,0-0.41-2.15-1.31,0.08" />
                                            <path class="st62"
                                                  d="M159.29,160.68l-11.57,0.31c0,0-2.22-0.22-2.78,1.74" />
                                            <ellipse class="st63" cx="168.33" cy="159.52" rx="1.79" ry="4.11" />
                                            <ellipse class="st62" cx="162.24" cy="160.01" rx="3.03" ry="4.93" />
                                        </g>
                                        <g>
                                            <path class="st18"
                                                  d="M167.37,166.14c0,0-1.5,0.75-5.17,0.4c0,0,1.97,2.67,3.42,2.16       C167.07,168.18,167.37,166.14,167.37,166.14z" />
                                            <path class="st54"
                                                  d="M146.08,163.31l2.55,1.93C148.63,165.23,147.68,160.57,146.08,163.31z" />
                                            <path class="st38"
                                                  d="M164.38,160.73c0,0.56-0.22,1.01-0.49,1.01c-0.27,0-0.49-0.45-0.49-1.01c0-0.56,0.22-1.01,0.49-1.01       C164.15,159.72,164.38,160.17,164.38,160.73z" />
                                            <path class="st38"
                                                  d="M167.59,160.23c0,0.56-0.22,1.01-0.49,1.01c-0.27,0-0.49-0.45-0.49-1.01c0-0.56,0.22-1.01,0.49-1.01       C167.37,159.22,167.59,159.67,167.59,160.23z" />
                                            <path class="st38"
                                                  d="M160.22,156.37c-0.73,0.51,0.41-1.8,1.41-2.06c0.99-0.26,1.98,0.25,2.19,1.13       C163.82,155.44,161.98,155.15,160.22,156.37z" />
                                            <path class="st38"
                                                  d="M167.74,156.13c-1.05-0.14-1.8,0.05-1.8,0.05c0.14-0.83,0.91-1.41,1.82-1.44" />
                                            <path class="st54"
                                                  d="M166.08,160.2l1.5,4.28c0.02,0.07-0.02,0.15-0.09,0.15l-1.78,0.13c-0.06,0-0.11-0.05-0.11-0.12l0.27-4.41       C165.89,160.12,166.04,160.09,166.08,160.2z" />
                                        </g>
                                    </g>
                                </g>
                                <g>
                                    <path class="st49"
                                          d="M135.26,132.65l-7.82-7.82H98.01c-5.99,0-10.85-4.86-10.85-10.85v-2.35c0-5.99,4.86-10.85,10.85-10.85h26.4     c5.99,0,10.85,4.86,10.85,10.85V132.65z" />
                                    <g>
                                        <circle class="st52" cx="100.09" cy="112.51" r="2.71" />
                                        <path class="st52"
                                              d="M112.71,112.51c0,1.49-1.21,2.71-2.71,2.71s-2.71-1.21-2.71-2.71c0-1.49,1.21-2.71,2.71-2.71      S112.71,111.02,112.71,112.51z" />
                                        <circle class="st52" cx="119.93" cy="112.51" r="2.71" />
                                    </g>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <g>

                                        <ellipse transform="matrix(0.54 -0.8417 0.8417 0.54 83.7413 691.7615)"
                                                 class="st64" cx="674.72" cy="269.27" rx="23.16" ry="23.16" />
                                        <g>
                                            <path class="st6"
                                                  d="M682.65,292.37h-31.29c-2.06,0-3.72-1.67-3.72-3.72v-40.5c0-2.06,1.67-3.72,3.72-3.72h31.29       c2.06,0,3.72,1.67,3.72,3.72v40.5C686.37,290.71,684.7,292.37,682.65,292.37z" />
                                            <g>
                                                <path class="st65"
                                                      d="M677.34,288.44h-23.36c-0.85,0-1.54-0.67-1.54-1.5v-37.25c0-0.83,0.69-1.5,1.54-1.5h26.71        c0.85,0,1.54,0.67,1.54,1.5v34.01C681.63,284.29,677.94,287.86,677.34,288.44z" />
                                                <path class="st66"
                                                      d="M681.68,283.49l-4.82,4.82l-0.12-3.06c-0.04-1.05,0.82-1.91,1.87-1.87L681.68,283.49z" />
                                                <g>
                                                    <g>
                                                        <path class="st6"
                                                              d="M656.51,249.29L656.51,249.29c-0.83,0-1.51-0.68-1.51-1.51v-4.63c0-0.83,0.68-1.51,1.51-1.51l0,0          c0.83,0,1.51,0.68,1.51,1.51v4.63C658.02,248.62,657.34,249.29,656.51,249.29z" />
                                                        <path class="st67"
                                                              d="M656.51,251.3L656.51,251.3c-0.83,0-1.51-0.68-1.51-1.51v-4.63c0-0.83,0.68-1.51,1.51-1.51l0,0          c0.83,0,1.51,0.68,1.51,1.51v4.63C658.02,250.63,657.34,251.3,656.51,251.3z" />
                                                    </g>
                                                    <g>
                                                        <path class="st6"
                                                              d="M666.16,249.29L666.16,249.29c-0.83,0-1.51-0.68-1.51-1.51v-4.63c0-0.83,0.68-1.51,1.51-1.51l0,0          c0.83,0,1.51,0.68,1.51,1.51v4.63C667.67,248.62,666.99,249.29,666.16,249.29z" />
                                                        <path class="st67"
                                                              d="M666.16,251.3L666.16,251.3c-0.83,0-1.51-0.68-1.51-1.51v-4.63c0-0.83,0.68-1.51,1.51-1.51l0,0          c0.83,0,1.51,0.68,1.51,1.51v4.63C667.67,250.63,666.99,251.3,666.16,251.3z" />
                                                    </g>
                                                    <g>
                                                        <path class="st6"
                                                              d="M675.82,249.29L675.82,249.29c-0.83,0-1.51-0.68-1.51-1.51v-4.63c0-0.83,0.68-1.51,1.51-1.51l0,0          c0.83,0,1.51,0.68,1.51,1.51v4.63C677.33,248.62,676.65,249.29,675.82,249.29z" />
                                                        <path class="st67"
                                                              d="M675.82,251.3L675.82,251.3c-0.83,0-1.51-0.68-1.51-1.51v-4.63c0-0.83,0.68-1.51,1.51-1.51l0,0          c0.83,0,1.51,0.68,1.51,1.51v4.63C677.33,250.63,676.65,251.3,675.82,251.3z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <path class="st68"
                                                          d="M658.6,268.15c0,0.88-0.72,1.6-1.6,1.6c-0.88,0-1.6-0.72-1.6-1.6c0-0.88,0.72-1.6,1.6-1.6         C657.88,266.55,658.6,267.27,658.6,268.15z" />
                                                    <path class="st68"
                                                          d="M658.6,275c0,0.88-0.72,1.6-1.6,1.6c-0.88,0-1.6-0.72-1.6-1.6c0-0.88,0.72-1.6,1.6-1.6         C657.88,273.4,658.6,274.12,658.6,275z" />
                                                    <path class="st68"
                                                          d="M658.6,281.85c0,0.88-0.72,1.6-1.6,1.6c-0.88,0-1.6-0.72-1.6-1.6c0-0.88,0.72-1.6,1.6-1.6         C657.88,280.25,658.6,280.97,658.6,281.85z" />
                                                    <g>
                                                        <path class="st69"
                                                              d="M675.47,268.66H662.6c-0.36,0-0.65-0.29-0.65-0.65v0c0-0.36,0.29-0.65,0.65-0.65h12.87          c0.36,0,0.65,0.29,0.65,0.65v0C676.12,268.37,675.83,268.66,675.47,268.66z" />
                                                        <path class="st69"
                                                              d="M675.47,275.7H662.6c-0.36,0-0.65-0.29-0.65-0.65v0c0-0.36,0.29-0.65,0.65-0.65h12.87          c0.36,0,0.65,0.29,0.65,0.65v0C676.12,275.41,675.83,275.7,675.47,275.7z" />
                                                        <path class="st69"
                                                              d="M675.47,282.74H662.6c-0.36,0-0.65-0.29-0.65-0.65v0c0-0.36,0.29-0.65,0.65-0.65h12.87          c0.36,0,0.65,0.29,0.65,0.65v0C676.12,282.45,675.83,282.74,675.47,282.74z" />
                                                    </g>
                                                    <path class="st70"
                                                          d="M657.06,268.8c-0.1,0-0.2-0.05-0.27-0.13l-1.68-1.93c-0.15-0.17-0.15-0.46,0-0.63         c0.15-0.17,0.4-0.17,0.55,0l1.41,1.62l2.44-2.8c0.15-0.17,0.4-0.17,0.55,0c0.15,0.17,0.15,0.46,0,0.63l-2.71,3.12         C657.26,268.75,657.17,268.8,657.06,268.8z" />
                                                    <path class="st70"
                                                          d="M657.06,275.67c-0.1,0-0.2-0.05-0.27-0.13l-1.68-1.93c-0.15-0.17-0.15-0.46,0-0.63         c0.15-0.17,0.4-0.17,0.55,0l1.41,1.62l2.44-2.8c0.15-0.17,0.4-0.17,0.55,0c0.15,0.17,0.15,0.46,0,0.63l-2.71,3.12         C657.26,275.62,657.17,275.67,657.06,275.67z" />
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <g>

                                                    <ellipse
                                                        transform="matrix(0.973 -0.2309 0.2309 0.973 -43.6666 164.04)"
                                                        class="st71" cx="679.14" cy="268.62" rx="11.18"
                                                        ry="11.18" />

                                                    <ellipse
                                                        transform="matrix(0.973 -0.2309 0.2309 0.973 -43.6666 164.04)"
                                                        class="st72" cx="679.14" cy="268.62" rx="11.18"
                                                        ry="11.18" />
                                                    <line class="st73" x1="687.32" y1="277.01" x2="696.02"
                                                          y2="284.88" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <circle class="st74" cx="639.54" cy="182.11" r="17.41" />
                                    </g>
                                    <g>
                                        <rect x="631.39" y="185.44" class="st75" width="6.3" height="6.3" />
                                        <polyline class="st76"
                                                  points="632.69,187.76 633.81,189.82 639.87,183.04     " />
                                    </g>
                                    <g>
                                        <rect x="631.39" y="172.86" class="st75" width="6.3" height="6.3" />
                                        <polyline class="st76"
                                                  points="632.69,175.19 633.81,177.24 639.87,170.46     " />
                                    </g>
                                    <g class="st77">
                                        <defs>
                                            <circle id="SVGID_9_" class="st77" cx="639.54" cy="182.11" r="17.41" />
                                        </defs>
                                        <clipPath id="SVGID_10_">
                                            <use xlink:href="#SVGID_9_" style="overflow:visible;" />
                                        </clipPath>
                                        <path class="st78"
                                              d="M657.59,176.93H642.9c-0.64,0-1.17-0.52-1.17-1.17l0,0c0-0.64,0.52-1.17,1.17-1.17h14.69      c0.64,0,1.17,0.52,1.17,1.17l0,0C658.75,176.41,658.23,176.93,657.59,176.93z" />
                                        <path class="st78"
                                              d="M658.73,189.43h-15.8c-0.66,0-1.2-0.54-1.2-1.2l0,0c0-0.66,0.54-1.2,1.2-1.2h15.8c0.66,0,1.2,0.54,1.2,1.2      l0,0C659.93,188.89,659.4,189.43,658.73,189.43z" />
                                    </g>
                                </g>
                            </g>
                        </g>
                        </svg>
                </div>
                <div id="open" class="employee"  style="display: none;">
                    <div class="person-info-content">
                        <div class="d-flex flex-column flex-md-row p-2 p-md-4">
                            <div class="d-flex justify-content-between">
                                <div class="back-button-div bg-light d-block d-md-none my-auto backbutton mx-2 p-2"
                                     onclick="backBtnFunct()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="#787878"
                                         class="bi bi-chevron-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                </div>
                                <div class="img-div1 text-center">
                                    <img src="https://picsum.photos/130/130?grayscale" class="img-fluid" alt="">
                                </div>
                                <div class="back-button-div d-block d-md-none my-auto invisible backbutton mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="currentColor"
                                         class="bi bi-chevron-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ps-0 mx-2 ps-md-4">
                                <div class="fs-2 fw-600 text-center text-md-start" id="name___"></div>
                                <div class="fs-5h ">PHP Developer / Full - Time / Shqip , English</div>
                                <div class="fs-5h ">Zona Bregu i Diellit</div>
                            </div>
                        </div>
                        <div class="my-4">
                            <div class="row g-0 mx-0 mx-md-4">
                                <div class="col-12 col-xl-6  p-3">
                                    <div class="item">
                                        <div class="head-of-item p-3 d-flex justify-content-between">
                                            <div class=" fs-4h fw-600">Personaldaten</div>
                                            <div class="svg my-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                     fill="currentColor" class="bi bi-three-dots"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <hr class="m-0 g-0">
                                        <div class="content-of-item p-3">
                                            <div class="language-div fs-4h pb-2"><span class="fw-600">Language
                                                        :</span>
                                                <span ></span>
                                            </div>
                                            <div class="bday-div fs-4h pb-2"><span class="fw-600">Date of Birth
                                                        :</span>
                                                <span id="birthdate___"></span>
                                            </div>
                                            <div class="gender-div fs-4h pb-2"><span class="fw-600">Gender :</span>
                                                <span id="gender___">Male</span>
                                            </div>
                                            <div class="status-div fs-4h pb-2"><span class="fw-600">Status :</span>
                                                <span id="status___">P9</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-xl-6  p-3">
                                    <div class="item">
                                        <div class="head-of-item p-3 d-flex justify-content-between">
                                            <div class=" fs-4h fw-600">Bankverbidung</div>
                                            <div class="svg my-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                     fill="currentColor" class="bi bi-three-dots"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <hr class="m-0 g-0">
                                        <div class="content-of-item p-3">
                                            <div class="language-div fs-4h pb-2"><span class="fw-600">Bank :</span>
                                                <span id="bank___"></span>
                                            </div>
                                            <div class="bday-div fs-4h pb-2"><span class="fw-600">Bank No :</span>
                                                <span id="bankNo___"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="row">--}}
{{--                    <div class="col-4">qwe</div>--}}
{{--                    <div class="col-4">qwe</div>--}}
{{--                    <div class="col-4">qwe</div>--}}

{{--                </div>--}}
            </div>
        </div>

    </div>
</div>
    </div>
</div>

<script>
    var header = document.getElementById("empList");
    var btns = header.getElementsByClassName("emp-sel");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
    if (window.matchMedia("(max-width: 800px)").matches) {
        var header = document.getElementById("empList");
        var list = header.getElementsByClassName("emp-sel");
        var list1 = document.getElementById("listt")
        var content = document.getElementById("contentt")
        for (var i = 0; i < list.length; i++) {
            list[i].addEventListener("click", function () {
                content.style.display = "block"
                list1.style.display = "none"
            });
        }
    }
    function openEmployee(employeeName) {
        var i;
        var x = document.getElementsByClassName("employee");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(employeeName).style.display = "block";
    }
    function backBtnFunct() {
        document.getElementById('listt').style.display = "block"
        document.getElementById('contentt').style.display = "none"
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function getPersonalData(param){
        $.ajax({
            type: "GET",
            url: "getAllEmployees/"+param,
            dataType: 'json',
            success: function(response) {
                var len = 0;
                //$('#userTable tbody').empty(); // Empty <tbody>
                if(response['data'] != null){
                    len = response['data'].length;
                }

                if(len > 0){
                    for(var i=0; i<len; i++){
                        var id = response['data'][i].id;
                        var name = response['data'][i].name;
                        var prename = response['data'][i].prename;
                        var email = response['data'][i].email;

                        document.getElementById('name___').innerHTML = name;
                        document.getElementById('birthdate___').innerHTML = name;
                        document.getElementById('gender___').innerHTML = prename;
                        document.getElementById('status___').innerHTML = email;

                    }
                }
            },

        });
    }
    function getBankInfoData(id){
        $.ajax({
            type: "GET",
            url: "getBankInfo/"+id,
            dataType: 'json',
            success: function(response) {
                var len = 0;
                //$('#userTable tbody').empty(); // Empty <tbody>
                if(response['bankData'] != null){
                    len = response['bankData'].length;
                }

                if(len > 0){
                    for(var i=0; i<len; i++){
                        var bank = response['bankData'][i].bank;
                        var iban = response['bankData'][i].iban;

                        document.getElementById('bank___').innerHTML = bank;
                        document.getElementById('bankNo___').innerHTML = iban;

                    }
                }
            },

        });
    }
</script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@200;800;900&display=swap');

    body {
        font-family: 'Montserrat', sans-serif;
    }

    .fs-4h {
        font-size: 1.5rem;
    }

    .backbutton {
        border: 2px solid #787878;
        border-radius: 10px;
    }

    .form-control {
        outline: none !important;
        box-shadow: none !important;
        border-color: #75b1da !important;
    }

    .overflow-hr-div {
        height: auto;
        overflow: auto;
    }

    .overflow-hr-div::-webkit-scrollbar {
        width: 5px;
    }

    /* Track */
    .overflow-hr-div::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-hr-div::-webkit-scrollbar-thumb {
        background: #c9cad8;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-hr-div::-webkit-scrollbar-thumb:hover {
        background: #707070;
        border-radius: 10px;
    }

    .fw-600 {
        font-weight: 600;
    }

    .item {
        height: 350px;
        background-color: #fff;
        border-radius: 20px;
    }

    .person-info-content {}

    .wrapper-of-list {
        height: 100vh;
        max-width: 400px;
        width: 350px;
        min-width: 300px;
        display: flex;
        position: relative;
    }

    .search-divider input {
        border: 3px #75b1da solid;
        border-right: none;
        border-radius: 10px;

    }

    .search-divider .icon {
        border: 3px #75b1da solid;
        border-left: none;
        border-radius: 10px;

    }

    .emp-list {
        height: 100%;
        width: 100%;
    }

    .emp-list .emp-sel {
        width: 100% !important;
        height: 100px;
        display: flex;
        align-items: center;
        cursor: pointer;
        border-bottom: 1px solid #70707050;
    }

    .active {
        background-color: #ededed;
    }

    .img-div img {
        border-radius: 50%;
        border: 2px #3079b5 solid;
        width: 100%;
        height: 100%;
        display: block;
    }

    .img-div {
        max-width: 80px;
        width: 80px;
        max-height: 80px;
        height: 80px;
    }

    .img-div1 {
        max-width: 120px;
        width: 120px;
        max-height: 120px;
        height: 120px;
    }

    .img-div1 img {
        border-radius: 50%;
    }

    .content-of-emp {
        width: 100%;
        /* height: 100vh; */
        background-color: #ededed;
        border-radius: 20px;
    }

    .hrListHeader {
        width: 100%;
        position: relative;
        height: 100px;
    }

    @media (max-width: 799.98px) {
        .wrapper-of-list {
            width: 100%;
            max-width: 100%;
        }

        .content-of-emp {
            display: none;
            border-radius: 0;
        }

        .fs-4h {
            font-size: 1.1rem;
        }

        .fs-5h {
            font-size: 1rem;
        }

        .item {
            height: 250px;
        }
    }
</style>




<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>




<style>
    div,
    button,
    span,
    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    input,
    a {
        font-family: 'Montserrat';
    }
    .notification-divvv22 a {
        color: black;
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

    .activeClassNavMob__,
    .activeClassNavMob__ span,
    .activeClassNavMob__ svg {
        background-color: transparent;
        color: #4DC591 !important;
        fill: #4DC591 !important;

    }

    .activeClassNavMob__ .active-dot {
        visibility: visible !important;
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

    .dateee {
        border-radius: 15px;
        border: #4CC590 1px solid;
        color: #000;
        background-color: #fff;
    }

    .dateee:hover {
        background-color: #4CC590;
        border-radius: 15px;
        color: #fff;
    }

    .dateee:focus {
        background-color: #4CC590;
        border-radius: 15px;
        color: #fff;
    }

    .box-1 {
        background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='18' ry='18' stroke='black' stroke-width='1' stroke-dasharray='7%2c 11' stroke-dashoffset='63' stroke-linecap='square'/%3e%3c/svg%3e");
        border-radius: 18px;
    }

    /* overflow 1 */
    .overflow-div1::-webkit-scrollbar {
        width: 0px !important;
    }

    /* Track */
    .overflow-div1::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-div1::-webkit-scrollbar-thumb {
        background: #c9cad8;
        border-radius: 10px;
    }

    .collapse2___::-webkit-scrollbar {
        width: 5pt !important;
    }

    /* Track */
    .collapse2___::-webkit-scrollbar-track {
        background: #E3E3E3 !important;
        border-radius: 5px;
    }

    /* Handle */
    .collapse2___::-webkit-scrollbar-thumb {
        background: #4EC590;
        border-radius: 10px;
    }

    .collapse23___::-webkit-scrollbar {
        width: 5pt !important;
    }

    /* Track */
    .collapse23___::-webkit-scrollbar-track {
        background: #E3E3E3 !important;
        border-radius: 5px;
    }

    /* Handle */
    .collapse23___::-webkit-scrollbar-thumb {
        background: #EF696A;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-div1::-webkit-scrollbar-thumb:hover {
        background: #707070;
        border-radius: 10px;
    }

    .dateee {
        border-radius: 15px;
        border: #0C71C3 1px solid;
        color: #000;
        background-color: #fff;
    }

    .dateee:hover {
        background-color: #0C71C3;
        border-radius: 15px;
        color: #fff;
    }

    .dateee:focus {
        background-color: #0C71C3;
        border-radius: 15px;
        color: #fff;
    }

    .scroll-2 {
        height: 250px;
        overflow-x: auto;
        /* overflow-y: scroll; */
        /* overflow-x: hidden !important; */
    }

    .scroll-2::-webkit-scrollbar {
        width: 6px !important;
    }

    /* Track */
    .scroll-2::-webkit-scrollbar-track {
        background: #fff !important;
        border-radius: 10px;
    }

    /* Handle */
    .scroll-2::-webkit-scrollbar-thumb {
        background: #0C71C3;
        border-radius: 10px;
    }

    /* Handle on hover */
    .scroll-2::-webkit-scrollbar-thumb:hover {
        background: #0C71C3;
    }



    .person-box {
        color: #fff;
        font-weight: 600;
        border-radius: 15px;
        background-color: #0C71C3;

    }

    .text-color123 {
        color: grey;
    }

    /* overflow 1 */
    .overflow-div1::-webkit-scrollbar {
        width: 8px;
    }

    /* Track */
    .overflow-div1::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-div1::-webkit-scrollbar-thumb {
        background: #c9cad8;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-div1::-webkit-scrollbar-thumb:hover {
        background: #707070;
        border-radius: 10px;
    }

    /* ........................................................... */
    /* overflow 2 */

    .overflow-div2::-webkit-scrollbar {
        width: 8px;
    }

    /* Track */
    .overflow-div2::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-div2::-webkit-scrollbar-thumb {
        background: #fff;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-div2::-webkit-scrollbar-thumb:hover {
        background: #fff1ff;
        border-radius: 10px;
    }

    /* ........................................................... */
    /* overflow 3 */

    .overflow-div3::-webkit-scrollbar {
        width: 8px;
    }

    /* Track */
    .overflow-div3::-webkit-scrollbar-track {
        background: #E3E3E3 !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-div3::-webkit-scrollbar-thumb {
        background: #4EC590;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-div3::-webkit-scrollbar-thumb:hover {
        background: #4EC590;
    }

    /* ...................................................... */
    /* overflow 4 */

    .overflow-div4::-webkit-scrollbar {
        width: 8px;
    }

    /* Track */
    .overflow-div4::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-div4::-webkit-scrollbar-thumb {
        background: #c9cad8;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-div4::-webkit-scrollbar-thumb:hover {
        background: #707070;
    }


    /* ................................................. */

    .collapsed .d-btnn {
        background-color: #c8ddd1;
        opacity: 0.4;
    }

    .d-btnn {
        opacity: 1;
    }

    .form-control:focus {
        border-color: #ced4da;
        box-shadow: none;
    }

    .accordion-button {
        color: #7DBF9A;
        font-weight: bold;
        border-radius: 15px !important;
    }

    .accordion-item {
        border-radius: 15px !important;
    }

    .hr-style {
        color: #fff !important;
        height: 3px !important;
        border-radius: 50px;
        opacity: 1;
        display: none;
    }

    .border-left-div {
        border: none !important;
        border-left: 3px solid #fff !important;

    }

    @media (max-width: 991.98px) {
        .hr-style {
            display: block;
        }

        .border-left-div {
            border: none !important;
            border-left: none !important;
        }
    }

    .dot-styleee {
        z-index: 999;
        top: 10px;
        left: auto;
        right: -7px;
        border-radius: 50% !important;
        padding: 7px 10px;
    }
    .accepted-section {
        background-color: #7DBF9A;
        border-radius: 19px;
    }

    .decline-btn {
        border: 2px solid #FF0D13;
        border-radius: 13px !important;
        background-color: #fff;
        color: #FF0D13;

    }

    .decline-btn:hover {
        background-color: #FF0D13;
        color: #fff !important;
    }

    .accept-btn {
        border: 2px solid #63D4A4;
        border-radius: 13px !important;
        background-color: #fff;
        color: #63D4A4 !important;
    }

    .accept-btn:hover {
        border: 2px solid #63D4A4;
        background-color: #63D4A4;
        color: #fff !important;
    }

    .text-color-header1 {
        color: #fff;
    }

    .people-icon-div {
        background-color: #525353;
        margin: 3px;
    }

    .static-btn1 {
        background-color: #fff !important;
        border-radius: 8px !important;
    }

    .people-svg-span {
        border-radius: 8px;
    }

    .accordion-button:not(.collapsed) {
        color: #7DBF9A;
        background-color: #fff;
        box-shadow: none;
    }

    .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        background-color: transparent !important;
    }

    .accordion-button:focus {
        border-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }

    .priority-spnn {
        background-color: #ad2b2b;
        border-radius: 35px;
        color: #fff;
    }

    .open-task-box {
        border-radius: 35px !important;
        background-color: #fff;
        border: #707070 1px solid;

    }

    .pendzen-box {
        border-radius: 35px !important;
        background-color: #EAECF0;
        border: none;

    }

    .third-box {
        border-radius: 35px !important;
        background-color: #fff;
        border: #707070 1px solid;

    }

    .task-box {
        background-color: #F7F7F7;
        border-radius: 12px;
    }

    .name-spnnnn {
        font-weight: 600;
    }

    .fw-600 {
        font-weight: 600;
    }

    .spn-muted {
        color: #707070;
        font-weight: 600;
        font-size: 14px !important;
    }

    .spn-normal {
        font-weight: 600;
        font-size: 14px !important;
    }

    .nav-texttt {
        font-family: 'Poppins';
        color: #fff;
    }

    @media (max-width: 978px) {
        #logo__311 {

            content: url('https://crm.kutiza.com/public/imgs/Logo%20gjys.png');

            width: 20% !important;
        }
    }




    .openLeadsSpanText {
        font-size: 17px;
        font-weight: 500;
    }

    .greyBorderDiv {
        border: 5px solid #BDC1CC;
        border-left: none;
        border-top-right-radius: 59px;
        border-bottom-right-radius: 59px;
        height: 100%;
        vertical-align: middle;
        background-color: #BDC1CC;
        z-index: 5;

    }

    .orangeBorderDiv {
        border: 5px solid #FEC278;
        border-left: none;
        border-top-right-radius: 59px;
        border-bottom-right-radius: 59px;
        height: 100%;
        vertical-align: middle;
        background-color: white;

    }

    .redBorderDiv {
        border: 5px solid #FF6262;
        border-left: none;
        border-top-right-radius: 59px;
        border-bottom-right-radius: 59px;
        height: 100%;
        vertical-align: middle;
        background-color: white;

    }

    .greenBorderDiv {
        border: 5px solid #4EC590;
        border-left: none;
        border-top-right-radius: 59px;
        border-bottom-right-radius: 59px;
        height: 100%;
        vertical-align: middle;
        background-color: white;

    }

    .receivedDiv {
        vertical-align: middle;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
        font-weight: bold;
        font-size: 17px;
    }

    .assignedToDiv {
        vertical-align: middle;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
        font-weight: bold;
        font-size: 17px;
    }

    .lostDiv {
        vertical-align: middle;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
        font-weight: bold;
        font-size: 17px;
    }

    .wonDiv {
        vertical-align: middle;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
        font-weight: bold;
    }

    .openLeadsFirstDiv {
        z-index: 5;
    }

    .receivedCol {
        z-index: 4;
        margin-left: -6%;
    }

    .assignedToCol {
        z-index: 3;
        margin-left: -9%;
    }

    .lostCol {
        z-index: 2;
        margin-left: -9%;
    }

    .wonCol {
        z-index: 1;
        margin-left: -12%;
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


</style>
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
        height: 100%;
        overflow: scroll;
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
        .se-pre-con {
            background-size: 100px;
        }
        body {
            padding-bottom: 65px;
        }
        .dot-styleee {
            z-index: 999;
            top: 5px;
            left: auto;
            right: -7px;
            border-radius: 50% !important;
            /*padding: 7px 10px;*/
            padding: 3px 6px ;
        }
    }
    a{
        text-decoration: none;

    }

</style>
<style>
    /*Per Notification */
    .coloriii a{
        color: 	#7F00FF !important;
    }
    .grayyy1 {
        color: #88889D;
    }

    .assigned-leads-div {
        border-radius: 25px;
    }

    .t {
        color: #88889D;
    }

    .fw-600 {
        font-weight: 600;

    }

    .fw-500 {
        font-weight: 500;
    }

    .whiteee {
        background-color: #fff;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        border-top-left-radius: 30px !important;
        border-top-right-radius: 30px !important;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .lead-offnen {
        background-color: #88889D;
        color: #fff;
        border-bottom-left-radius: 30px !important;
        border-bottom-right-radius: 30px !important;
        border-top-left-radius: 0px !important;
        border-top-right-radius: 0px !important;
    }

    .overflow-divvv::-webkit-scrollbar {
        width: 0px;
    }

    /* Track */
    .overflow-divvv::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-divvv::-webkit-scrollbar-thumb {
        background: #c9cad8;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-divvv::-webkit-scrollbar-thumb:hover {
        background: #707070;
        border-radius: 10px;
    }

    /*.lead-statistics-header {*/
    /*    background-color: #F7F7F7;*/
    /*    border-bottom-left-radius: 0px !important;*/
    /*    border-bottom-right-radius: 0px !important;*/
    /*    border-top-left-radius: 30px !important;*/
    /*    border-top-right-radius: 30px !important;*/
    /*}*/

    /*.lead-statistics {*/
    /*    background-color: #F7F7F7;*/
    /*    border-bottom-left-radius: 30px !important;*/
    /*    border-bottom-right-radius: 30px !important;*/
    /*    border-top-left-radius: 0px !important;*/
    /*    border-top-right-radius: 0px !important;*/
    /*}*/

    .openLeadsSpanText {
        font-size: 17px;
        font-weight: 500;
    }

    .greyBorderDiv {
        border: 5px solid #BDC1CC;
        border-left: none;
        border-top-right-radius: 59px;
        border-bottom-right-radius: 59px;
        height: 100%;
        vertical-align: middle;
        background-color: #BDC1CC;

    }

    .orangeBorderDiv {
        border: 5px solid #FEC278;
        border-left: none;
        border-top-right-radius: 59px;
        border-bottom-right-radius: 59px;
        height: 100%;
        vertical-align: middle;
        background-color: #FEC278;

    }

    .redBorderDiv {
        border: 5px solid #FF6262;
        border-left: none;
        border-top-right-radius: 59px;
        border-bottom-right-radius: 59px;
        height: 100%;
        vertical-align: middle;
        background-color: #FF6262;

    }

    .greenBorderDiv {
        border: 5px solid #4EC590;
        border-left: none;
        border-top-right-radius: 59px;
        border-bottom-right-radius: 59px;
        height: 100%;
        vertical-align: middle;
        background-color: #4EC590;

    }

    .receivedDiv {
        vertical-align: middle;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
        font-weight: bold;
        font-size: 17px;

    }

    .assignedToDiv {
        vertical-align: middle;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
        font-weight: bold;
        font-size: 17px;
    }

    .lostDiv {
        vertical-align: middle;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
        font-weight: bold;
        font-size: 17px;
    }

    .wonDiv {
        vertical-align: middle;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
        font-weight: bold;
    }

    .openLeadsFirstDiv {
        z-index: 5;
    }

    .receivedCol {
        z-index: 4;
        margin-left: -6%;
    }

    .assignedToCol {
        z-index: 3;
        margin-left: -9%;
    }

    .lostCol {
        z-index: 2;
        margin-left: -9%;
    }

    .wonCol {
        z-index: 1;
        margin-left: -12%;
    }

    .flexDirRow {
        flex-direction: row;
    }

    @media (max-width: 899.98px) {
        .flexDirRow {
            flex-direction: column;
        }

        .openLeadsFirstDiv {
            width: 100% !important;
        }

        .hideTextMob {
            display: none;
        }

        .greyBorderDiv {
            border-radius: 0;
            border-bottom-right-radius: 59px;
            border-bottom-left-radius: 59px;
        }

        .orangeBorderDiv {
            border-radius: 0;
            border-bottom-right-radius: 59px;
            border-bottom-left-radius: 59px;
        }

        .redBorderDiv {
            border-radius: 0;
            border-bottom-right-radius: 59px;
            border-bottom-left-radius: 59px;
        }

        .greenBorderDiv {
            border-radius: 0;
            border-bottom-right-radius: 59px;
            border-bottom-left-radius: 59px;
        }

        .receivedCol {
            margin: auto;
            width: 85%;
        }

        .assignedToCol {
            margin: auto;
            margin-top: -15%;
            width: 85%;
        }

        .lostCol {
            margin: auto;
            margin-top: -15%;
            width: 85%;
        }

        .wonCol {
            margin: auto;
            margin-top: -18%;
            width: 85%;
        }
    }
</style>
<style>
    .nottif-item {
        border: #70707060 1px solid;
        border-radius: 5px;
    }

    .overflow-div2212 {
        height: 25rem;
        overflow: auto;
    }

    .notification-divvv22 .dropdown-menu {
        max-width: 50rem;
        height: 30rem;
        z-index: 999;
        width: 50rem;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 10px;
    }

    .notification-divvv22 .dropup .dropdown-toggle::after {
        display: none;
    }

    .notif-div-content {
        width: 340px;
        position: fixed;
        display: block;
        bottom: 110px;
        right: 30px;
        background-color: #fff;
    }

    .notification-divvv22 {
        z-index: 999;

        position: fixed;
        display: flex;
        bottom: 30px;
        right: 30px;
        background-color: #fff;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
        border-bottom-left-radius: 50px;
        border-bottom-right-radius: 50px;
    }

    .rounded-notid-icon {
        background-color: #0C71C3;
        border-radius: 50px;
        color: #fff;
        padding: 20px;
        border: none;
    }

    .hover-visible-div {
        background-color: #fff;
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;
        display: none;
        align-items: center;
    }

    .txt-notif {
        padding-left: 25px;
        padding-right: 15px;
        font-weight: 500;
    }

    .notification-divvv22:hover .hover-visible-div {
        display: flex;
    }

    /* overflow 1 */
    .overflow-div2212::-webkit-scrollbar {
        width: 8px;
    }

    /* Track */
    .overflow-div2212::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-div2212::-webkit-scrollbar-thumb {
        background: #c9cad8;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-div2212::-webkit-scrollbar-thumb:hover {
        background: #707070;
        border-radius: 10px;
    }
    .notification-divvv22 .bluefont{
        background-color: #eaf5ff;

    }
    .notification-divvv22 .bluefont a{
        color: #0c71c3;
    }

    @media (max-width: 912.98px) {
        .notification-divvv22 .dropdown-menu {
            width: 63vw;
        }
    }
    @media (max-width: 575.98px) {
        .overflow-div2212 {
            height: 47vh;
            overflow: auto;
        }
        .notification-divvv22 .dropdown-menu {
            width: 99vw;

            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        }

        .notification-divvv22 {
            position: fixed;
            display: flex;
            bottom: 80px;
            right: 10px;
        }


        .rounded-notid-icon svg {
            width: 25px;
        }

        .hover-visible-div {
            display: none;
        }

        .notification-divvv22:hover .hover-visible-div {
            display: none;
        }

        .rounded-notid-icon {
            background-color: #0C71C350;
            padding: 10px;
        }

        .rounded-notid-icon:hover {
            background-color: #0C71C3;
        }

    }
</style>
<style type="text/css">
    .st0 {
        fill: transparent;
    }

    .st1 {
        fill: #FFC557;
    }

    .st2 {
        fill: none;
        stroke: #FFC557;
        stroke-miterlimit: 10;
    }

    .st3 {
        fill: none;
        stroke: #648AC9;
        stroke-width: 0.8104;
        stroke-miterlimit: 10;
    }

    .st4 {
        fill: none;
        stroke: #95B1DB;
        stroke-miterlimit: 10;
    }

    .st5 {
        fill: none;
        stroke: #95B1DB;
        stroke-width: 2;
        stroke-miterlimit: 10;
    }

    .st6 {
        fill: #839DC9;
    }

    .st7 {
        fill: #95B1DB;
    }

    .st8 {
        opacity: 0.65;
        fill: #849CC7;
    }

    .st9 {
        fill: #E0EBFB;
    }

    .st10 {
        fill: #CBD9EC;
    }

    .st11 {
        clip-path: url(#SVGID_2_);
    }

    .st12 {
        fill: #F38C84;
    }

    .st13 {
        fill: #FF768F;
    }

    .st14 {
        opacity: 0.2;
        fill: #FF768F;
    }

    .st15 {
        fill: #05093D;
    }

    .st16 {
        fill: #F38C84;
        stroke: #F38C84;
        stroke-width: 1.1297;
        stroke-miterlimit: 10;
    }

    .st17 {
        fill: #CA5C3B;
    }

    .st18 {
        fill: #FFFFFF;
    }

    .st19 {
        fill: #3A5785;
    }

    .st20 {
        fill: none;
        stroke: #FFFFFF;
        stroke-width: 3;
        stroke-miterlimit: 10;
    }

    .st21 {
        fill: none;
        stroke: #FFFFFF;
        stroke-miterlimit: 10;
    }

    .st22 {
        clip-path: url(#SVGID_4_);
    }

    .st23 {
        fill: #FBB78B;
        stroke: #FBB78B;
        stroke-width: 1.2036;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-miterlimit: 10;
    }

    .st24 {
        fill: #FBB78B;
        stroke: #FBB78B;
        stroke-width: 1.1709;
        stroke-miterlimit: 10;
    }

    .st25 {
        fill: #E6795C;
        stroke: #E6795C;
        stroke-width: 1.1586;
        stroke-miterlimit: 10;
    }

    .st26 {
        fill: #EB8383;
    }

    .st27 {
        fill: #FCCC4F;
    }

    .st28 {
        clip-path: url(#SVGID_6_);
    }

    .st29 {
        fill: #FCFCFC;
    }

    .st30 {
        clip-path: url(#SVGID_8_);
    }

    .st31 {
        fill: #A34E65;
    }

    .st32 {
        fill: #FFBBAA;
        stroke: #FFBBAA;
        stroke-width: 1.2122;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-miterlimit: 10;
    }

    .st33 {
        fill: #FFBBAA;
        stroke: #FFBBAA;
        stroke-width: 1.1792;
        stroke-miterlimit: 10;
    }

    .st34 {
        fill: #F08992;
        stroke: #F08992;
        stroke-width: 1.1746;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-miterlimit: 10;
    }

    .st35 {
        fill: #FFBBAA;
        stroke: #FFBBAA;
        stroke-width: 1.1626;
        stroke-miterlimit: 10;
    }

    .st36 {
        fill: #F08992;
    }

    .st37 {
        fill: #CEDDF4;
    }

    .st38 {
        fill: #020F2B;
    }

    .st39 {
        fill: #F1ABA5;
    }

    .st40 {
        fill: #EC7165;
    }

    .st41 {
        fill: #F79288;
    }

    .st42 {
        fill: #F1A9A5;
    }

    .st43 {
        fill: #FF6E95;
    }

    .st44 {
        fill: #2D4773;
    }

    .st45 {
        fill: none;
        stroke: #FFFFFF;
        stroke-width: 0.3961;
        stroke-miterlimit: 10;
    }

    .st46 {
        opacity: 0.21;
    }

    .st47 {
        fill: #C20034;
    }

    .st48 {
        fill: #D15449;
    }

    .st49 {
        fill: #FF6B82;
    }

    .st50 {
        fill: #FFEBF1;
    }

    .st51 {
        opacity: 0.6;
        fill: #4E7A8F;
    }

    .st52 {
        fill: #FAFAFA;
    }

    .st53 {
        fill: #F0A5A9;
    }

    .st54 {
        fill: #E6777D;
    }

    .st55 {
        fill: none;
        stroke: #FFFFFF;
        stroke-width: 0.4846;
        stroke-miterlimit: 10;
    }

    .st56 {
        fill: #D15868;
    }

    .st57 {
        fill: none;
        stroke: #020F2B;
        stroke-width: 0.4846;
        stroke-miterlimit: 10;
    }

    .st58 {
        fill: #020F2B;
        stroke: #020F2B;
        stroke-width: 0.5144;
        stroke-miterlimit: 10;
    }

    .st59 {
        fill: #263C61;
    }

    .st60 {
        fill: #020F2B;
        stroke: #1D254A;
        stroke-width: 0;
        stroke-miterlimit: 10;
    }

    .st61 {
        fill: none;
        stroke: #1D254A;
        stroke-width: 0.5144;
        stroke-miterlimit: 10;
    }

    .st62 {
        fill: none;
        stroke: #1D254A;
        stroke-width: 0.328;
        stroke-miterlimit: 10;
    }

    .st63 {
        fill: none;
        stroke: #1D254A;
        stroke-width: 0.3361;
        stroke-miterlimit: 10;
    }

    .st64 {
        fill: #DAE5F7;
    }

    .st65 {
        fill: #FFFFFF;
        stroke: #FFFFFF;
        stroke-width: 0.161;
        stroke-miterlimit: 10;
    }

    .st66 {
        fill: #D8CFCE;
    }

    .st67 {
        opacity: 0.37;
        fill: #839DC9;
    }

    .st68 {
        fill: none;
        stroke: #7289B5;
        stroke-width: 1.03;
        stroke-miterlimit: 10;
    }

    .st69 {
        fill: #7289B5;
    }

    .st70 {
        fill: #1B1A4D;
        stroke: #1B1A4D;
        stroke-width: 0.7725;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-miterlimit: 10;
    }

    .st71 {
        opacity: 0.74;
        fill: #FFFFFF;
    }

    .st72 {
        fill: none;
        stroke: #FFD375;
        stroke-width: 2.7834;
        stroke-miterlimit: 10;
    }

    .st73 {
        fill: none;
        stroke: #FFD375;
        stroke-width: 3.7378;
        stroke-linecap: round;
        stroke-miterlimit: 10;
    }

    .st74 {
        fill: #B4CEF7;
    }

    .st75 {
        fill: none;
        stroke: #FFFFFF;
        stroke-width: 0.7004;
        stroke-miterlimit: 10;
    }

    .st76 {
        fill: none;
        stroke: #FFFFFF;
        stroke-width: 0.7004;
        stroke-linecap: round;
        stroke-miterlimit: 10;
    }

    .st77 {
        opacity: 0.57;
    }

    .st78 {
        clip-path: url(#SVGID_10_);
        fill: #FFFFFF;
        stroke: #FFFFFF;
        stroke-width: 0.6619;
        stroke-miterlimit: 10;
    }
</style>

