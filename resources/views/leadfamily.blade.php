<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Appointments</title>
    <link rel="icon" type="image/png" href="{{config('app.url')}}imgs/Favicon.png">
</head>

<body>


<div class="row g-0">
    <div class="col-lg-2 col-md-1 col-sm-1 col-1 first-col1">
        <div class="nav-styling col-md-2 col-sm-1 col-1" style="position: fixed; top:0;left:0; ">
            <div class="d-flex align-middle" style="height: 16vh;">
                <div class="my-auto">
                    <div class="img-normal text-center mx-3">
                        <img src="../imgs/logo2.png" class="img-fluid p-1" alt="">
                    </div>
                    <div class="img-collapsed text-center ">
                        <img src="../imgs/logo1.png" class="img-fluid p-2" alt="">
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-speedometer2" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                        </svg>
                        <span class="ps-2 txt-dn">Aufgaben</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') ||
                Auth::guard('admins')->user()->hasRole('fs') ||
                Auth::guard('admins')->user()->hasRole('salesmanager')
                ||Auth::guard('admins')->user()->hasRole('menagment'))
                    <a href="{{route('leads')}}" class="nav-link {{ (request()->is('leads')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-calendar3" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        <span class="ps-2 txt-dn">Leads</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('fs') ||
                Auth::guard('admins')->user()->hasRole('salesmanager') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                    <a href="{{route('Appointments')}}" class="nav-link  {{ (request()->is('Appointments')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-calendar-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                        @if(Auth::guard('admins')->user()->hasRole('salesmanager'))
                            <span class="ps-2 txt-dn">Terminen</span>
                        @else
                            <span class="ps-2 txt-dn">Kalender</span>
                        @endif
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <span class="ps-2 txt-dn">Kunden</span>
                    </a>
                @endif
{{--                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('admin'))--}}
{{--                    <a onclick="workingOnIt()" href="#" class="nav-link ">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-cash-coin" viewBox="0 0 16 16">--}}
{{--                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />--}}
{{--                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />--}}
{{--                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />--}}
{{--                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />--}}
{{--                        </svg>--}}
{{--                        <span class="ps-2 txt-dn">Einzahlung</span>--}}
{{--                    </a>--}}
{{--                @endif--}}
{{--                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('admin'))--}}
{{--                    <a onclick="workingOnIt()" href="#" class="nav-link">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-x-square" viewBox="0 0 16 16">--}}
{{--                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />--}}
{{--                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />--}}
{{--                        </svg>--}}
{{--                        <span class="ps-2 txt-dn">Stornierungen</span>--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <a onclick="workingOnIt()" href="#" class="nav-link ">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-grid" viewBox="0 0 16 16">--}}
{{--                        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />--}}
{{--                    </svg>--}}
{{--                    <span class="ps-2 txt-dn">Finanzen</span>--}}
{{--                </a>--}}
{{--                @if(Auth::guard('admins')->user()->hasRole('admin') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('menagment') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('salesmanager'))--}}
{{--                    <a onclick="workingOnIt()" href="#" class="nav-link">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-people-fill" viewBox="0 0 16 16">--}}
{{--                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />--}}
{{--                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />--}}
{{--                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />--}}
{{--                        </svg>--}}
{{--                        <span class="ps-2 txt-dn">Mitarbeiter</span>--}}
{{--                    </a>--}}
{{--                @endif--}}
{{--                @if(Auth::guard('admins')->user()->hasRole('finance') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('admin'))--}}
{{--                    <a onclick="workingOnIt()" href="#" class="nav-link ">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-percent" viewBox="0 0 16 16">--}}
{{--                            <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />--}}
{{--                        </svg>--}}
{{--                        <span class="ps-2 txt-dn">Provisionen</span>--}}
{{--                    </a>--}}
{{--                @endif--}}
{{--                @if(Auth::guard('admins')->user()->hasRole('admin') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('menagment') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('salesmanager'))--}}
{{--                    <a onclick="workingOnIt()" href="#" class="nav-link">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-diagram-2-fill" viewBox="0 0 16 16">--}}
{{--                            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z" />--}}
{{--                        </svg>--}}
{{--                        <span class="ps-2 txt-dn">Prov.system</span>--}}
{{--                    </a>--}}
{{--                @endif--}}
{{--                @if(Auth::guard('admins')->user()->hasRole('admin') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('menagment') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('salesmanager'))--}}
{{--                    <a onclick="workingOnIt()" href="#" class="nav-link">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">--}}
{{--                            <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z" />--}}
{{--                        </svg>--}}
{{--                        <span class="ps-2 txt-dn">Statistik</span>--}}
{{--                    </a>--}}
{{--                @endif--}}
{{--                @if(Auth::guard('admins')->user()->hasRole('menagment') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('finance')--}}
{{--                ||Auth::guard('admins')->user()->hasRole('admin') )--}}
{{--                    <a onclick="workingOnIt()" href="#" class="nav-link">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-diagram-2-fill" viewBox="0 0 16 16">--}}
{{--                            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z" />--}}
{{--                        </svg>--}}
{{--                        <span class="ps-2 txt-dn">Treuhand</span>--}}
{{--                    </a>--}}
{{--                @endif--}}
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
                <div class="logg d-flex justify-content-center">
                    <a href="{{route('logout')}}">
                        <button class=" btn">
                                    <span class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg>
                                    </span>
                            <span class="ps-2 txt-dn">Abmelden</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-8 mx-auto my-5">
        <section>
            @if(\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                    <strong>{!! \Session::get('success') !!}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(\Session::has('fail'))
                <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                    <strong>{!! \Session::get('fail') !!}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="container">
                <div class="accepted-section row">
                    <div class="other-people-accordion  py-4 col-12 col-sm-12 col-md-12 col-lg col-xl g-0 ">
                        <div class="border-left-div">
                            <div class="accordion accordion-flush mx-3 " id="accordionFlushExample">
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($data as $task)
                                    @if($task->status == 'Open')
                                        <div class="accordion-item my-1 bg-success" >
                                            @elseif($task->status == 'Submited')
                                                <div class="accordion-item my-1 bg-warning">
                                                    @else
                                                        <div class="accordion-item my-1 bg-success">
                                                            @endif
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#flush-collapseOne<?php echo $i; ?>"
                                                                        aria-expanded="false"
                                                                        aria-controls="flush-collapseOne<?php echo $i; ?>">
                                                                    {{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}}
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne<?php echo $i; ?>"
                                                                 class="accordion-collapse collapse"
                                                                 aria-labelledby="flush-headingOne"
                                                                 data-bs-parent="#accordionFlushExample">
                                                                @php
                                                                    $leadss = $task->id * 1244;
                                                                    $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                                                @endphp
                                                                <form
                                                                    action="{{route('updateleadfamilyperson',$taskId)}}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <div class="accordion-body p-0 mx-2 py-2">
                                                                        <div class="row g-3 align-items-center m-1">
                                                                            <div class="col-4">
                                                                                <label for="inputTxt4"
                                                                                       class="col-form-label">Vorname:</label>
                                                                            </div>
                                                                            <div class="col">
                                                                                <input type="text" id="inputTxt4"
                                                                                       class="form-control"
                                                                                       name="familyfirstname"
                                                                                       aria-describedby="passwordHelpInline"
                                                                                       value="{{$task->first_name}}"
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-3 align-items-center m-1">
                                                                            <div class="col-4">
                                                                                <label for="inputTxt5"
                                                                                       class="col-form-label">Nachname:</label>
                                                                            </div>
                                                                            <div class="col">
                                                                                <input type="text" id="inputTxt5"
                                                                                       class="form-control"
                                                                                       name="familylastname"
                                                                                       aria-describedby="passwordHelpInline"
                                                                                       value="{{$task->last_name}}"
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="input-group d-flex justify-content-end">
                                                                            <div class="text-end">
                                                                                <button
                                                                                    class="accept-btn m-2 py-1 px-4 collapsed py-auto"
                                                                                    type="submit"
                                                                                > Edit
                                                                                    <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                        width="20.426" height="20.25"
                                                                                        viewBox="0 0 17.426 17.25">
                                                                                        <defs>
                                                                                            <clipPath id="clip-path">
                                                                                                <rect id="Rectangle_241"
                                                                                                      data-name="Rectangle 241"
                                                                                                      width="17.426"
                                                                                                      height="17.25"/>
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                        <g id="Group_447"
                                                                                           data-name="Group 447"
                                                                                           transform="translate(0 0)">
                                                                                            <g id="Group_384"
                                                                                               data-name="Group 384"
                                                                                               transform="translate(0 0)"
                                                                                               clip-path="url(#clip-path)">
                                                                                                <path id="Path_266"
                                                                                                      data-name="Path 266"
                                                                                                      d="M16.683,1.713a.594.594,0,0,1,0,.84L15.443,3.8,13.063,1.416,14.3.174a.6.6,0,0,1,.841,0l1.538,1.538ZM14.6,4.635,12.222,2.256,4.117,10.362a.6.6,0,0,0-.144.233l-.958,2.872a.3.3,0,0,0,.376.376l2.872-.958a.584.584,0,0,0,.233-.143L14.6,4.636Z"
                                                                                                      transform="translate(0.569 -0.001)"
                                                                                                      fill="currentColor"/>
                                                                                                <path id="Path_267"
                                                                                                      data-name="Path 267"
                                                                                                      d="M0,15.371a1.785,1.785,0,0,0,1.784,1.784H14.871a1.785,1.785,0,0,0,1.784-1.784V8.233a.595.595,0,0,0-1.19,0v7.138a.6.6,0,0,1-.595.595H1.784a.6.6,0,0,1-.595-.595V2.284a.6.6,0,0,1,.595-.595H9.517a.595.595,0,0,0,0-1.19H1.784A1.785,1.785,0,0,0,0,2.284Z"
                                                                                                      transform="translate(0 0.094)"
                                                                                                      fill="currentColor"
                                                                                                      fill-rule="evenodd"/>
                                                                                            </g>
                                                                                        </g>
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                            <div class="text-end m-2 py-1">
                                                                                <a style="text-decoration: none"
                                                                                   href="{{route('leadfamilyperson',$taskId)}}"
                                                                                   class="accept-btn m-2 py-1 px-5 collapsed">
                                                                                    <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="23.232"
                                                                                        height="23.805"
                                                                                        viewBox="0 0 46.232 33.805">
                                                                                        <path id="Path_277"
                                                                                              data-name="Path 277"
                                                                                              d="M8370.12,999.407l15.7,15.954,7.778-8.812,19.931-22.581"
                                                                                              transform="translate(-8368.706 -982.557)"
                                                                                              fill="none"
                                                                                              stroke="currentColor"
                                                                                              stroke-linecap="round"
                                                                                              stroke-linejoin="round"
                                                                                              stroke-width="3"/>
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                        @php
                                                            $i++;
                                                        @endphp
                                                        @endforeach

                                                </div>
                                        </div>
                            </div>
                        </div>
                    </div>
        </section>
    </div>
</div>
{{--        mobile--}}
<div class="mobile-nav" id="mobile-nav">
    <a href="{{route('dashboard')}}" class="m-nav {{ (request()->is('/')) ? 'activeClassNavMob__' : '' }}">
            <span>
                <svg width="26" viewBox="0 0 18 21" fill="#88889D" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.0001 6.99952L11.0001 1.73952C10.4501 1.24756 9.73803 0.975586 9.00009 0.975586C8.26216 0.975586 7.55012 1.24756 7.00009 1.73952L1.00009 6.99952C0.682463 7.28359 0.428995 7.63207 0.256567 8.02176C0.0841385 8.41145 -0.00329256 8.8334 9.47941e-05 9.25952V17.9995C9.47941e-05 18.7952 0.316165 19.5582 0.878775 20.1208C1.44138 20.6834 2.20445 20.9995 3.00009 20.9995H15.0001C15.7957 20.9995 16.5588 20.6834 17.1214 20.1208C17.684 19.5582 18.0001 18.7952 18.0001 17.9995V9.24952C18.0021 8.82508 17.9139 8.40506 17.7416 8.0172C17.5692 7.62934 17.3165 7.28247 17.0001 6.99952ZM11.0001 18.9995H7.00009V13.9995C7.00009 13.7343 7.10545 13.4799 7.29299 13.2924C7.48052 13.1049 7.73488 12.9995 8.00009 12.9995H10.0001C10.2653 12.9995 10.5197 13.1049 10.7072 13.2924C10.8947 13.4799 11.0001 13.7343 11.0001 13.9995V18.9995ZM16.0001 17.9995C16.0001 18.2647 15.8947 18.5191 15.7072 18.7066C15.5197 18.8942 15.2653 18.9995 15.0001 18.9995H13.0001V13.9995C13.0001 13.2039 12.684 12.4408 12.1214 11.8782C11.5588 11.3156 10.7957 10.9995 10.0001 10.9995H8.00009C7.20444 10.9995 6.44138 11.3156 5.87877 11.8782C5.31616 12.4408 5.00009 13.2039 5.00009 13.9995V18.9995H3.00009C2.73488 18.9995 2.48052 18.8942 2.29299 18.7066C2.10545 18.5191 2.00009 18.2647 2.00009 17.9995V9.24952C2.00027 9.10753 2.03069 8.96721 2.08931 8.8379C2.14794 8.70858 2.23343 8.59323 2.3401 8.49952L8.34009 3.24952C8.52258 3.0892 8.75719 3.00078 9.00009 3.00078C9.243 3.00078 9.47761 3.0892 9.66009 3.24952L15.6601 8.49952C15.7668 8.59323 15.8523 8.70858 15.9109 8.8379C15.9695 8.96721 15.9999 9.10753 16.0001 9.24952V17.9995Z"
                    />
                </svg>
            </span>

        <div class="text-center mt-1 active-dot">
                <span>
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                    </svg>
                </span>
        </div>
    </a>
    @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
    Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin'))
        <a href="{{route('tasks')}}" class="m-nav {{ (request()->is('tasks')) ? 'activeClassNavMob__' : '' }}">
            <span>
                <svg width="26" viewBox="0 0 19 20" fill="#88889D" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.25 12H5.25C4.98478 12 4.73043 12.1054 4.54289 12.2929C4.35536 12.4804 4.25 12.7348 4.25 13C4.25 13.2652 4.35536 13.5196 4.54289 13.7071C4.73043 13.8946 4.98478 14 5.25 14H13.25C13.5152 14 13.7696 13.8946 13.9571 13.7071C14.1446 13.5196 14.25 13.2652 14.25 13C14.25 12.7348 14.1446 12.4804 13.9571 12.2929C13.7696 12.1054 13.5152 12 13.25 12ZM13.25 8H7.25C6.98478 8 6.73043 8.10536 6.54289 8.29289C6.35536 8.48043 6.25 8.73478 6.25 9C6.25 9.26522 6.35536 9.51957 6.54289 9.70711C6.73043 9.89464 6.98478 10 7.25 10H13.25C13.5152 10 13.7696 9.89464 13.9571 9.70711C14.1446 9.51957 14.25 9.26522 14.25 9C14.25 8.73478 14.1446 8.48043 13.9571 8.29289C13.7696 8.10536 13.5152 8 13.25 8ZM17.25 2H14.25V1C14.25 0.734784 14.1446 0.48043 13.9571 0.292893C13.7696 0.105357 13.5152 0 13.25 0C12.9848 0 12.7304 0.105357 12.5429 0.292893C12.3554 0.48043 12.25 0.734784 12.25 1V2H10.25V1C10.25 0.734784 10.1446 0.48043 9.95711 0.292893C9.76957 0.105357 9.51522 0 9.25 0C8.98478 0 8.73043 0.105357 8.54289 0.292893C8.35536 0.48043 8.25 0.734784 8.25 1V2H6.25V1C6.25 0.734784 6.14464 0.48043 5.95711 0.292893C5.76957 0.105357 5.51522 0 5.25 0C4.98478 0 4.73043 0.105357 4.54289 0.292893C4.35536 0.48043 4.25 0.734784 4.25 1V2H1.25C0.984784 2 0.73043 2.10536 0.542893 2.29289C0.355357 2.48043 0.25 2.73478 0.25 3V17C0.25 17.7956 0.566071 18.5587 1.12868 19.1213C1.69129 19.6839 2.45435 20 3.25 20H15.25C16.0456 20 16.8087 19.6839 17.3713 19.1213C17.9339 18.5587 18.25 17.7956 18.25 17V3C18.25 2.73478 18.1446 2.48043 17.9571 2.29289C17.7696 2.10536 17.5152 2 17.25 2ZM16.25 17C16.25 17.2652 16.1446 17.5196 15.9571 17.7071C15.7696 17.8946 15.5152 18 15.25 18H3.25C2.98478 18 2.73043 17.8946 2.54289 17.7071C2.35536 17.5196 2.25 17.2652 2.25 17V4H4.25V5C4.25 5.26522 4.35536 5.51957 4.54289 5.70711C4.73043 5.89464 4.98478 6 5.25 6C5.51522 6 5.76957 5.89464 5.95711 5.70711C6.14464 5.51957 6.25 5.26522 6.25 5V4H8.25V5C8.25 5.26522 8.35536 5.51957 8.54289 5.70711C8.73043 5.89464 8.98478 6 9.25 6C9.51522 6 9.76957 5.89464 9.95711 5.70711C10.1446 5.51957 10.25 5.26522 10.25 5V4H12.25V5C12.25 5.26522 12.3554 5.51957 12.5429 5.70711C12.7304 5.89464 12.9848 6 13.25 6C13.5152 6 13.7696 5.89464 13.9571 5.70711C14.1446 5.51957 14.25 5.26522 14.25 5V4H16.25V17Z"
                    />
                </svg>
            </span>
            <div class="text-center mt-1 active-dot">
                <span>
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                    </svg>
                </span>
            </div>
        </a>
    @endif
    @if(Auth::guard('admins')->check())
        <a href="{{route('costumers')}}"
           class="m-nav {{ (request()->is('costumers')) ? 'activeClassNavMob__' : '' }}">
            <span>
                <svg width="28" viewBox="0 0 28 20" fill="#88889D" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19 8.60824C21.075 8.60824 22.7375 6.70689 22.7375 4.35148C22.7375 1.99608 21.075 0.0947266 19 0.0947266C16.925 0.0947266 15.25 1.99608 15.25 4.35148C15.25 6.70689 16.925 8.60824 19 8.60824ZM9 8.60824C11.075 8.60824 12.7375 6.70689 12.7375 4.35148C12.7375 1.99608 11.075 0.0947266 9 0.0947266C6.925 0.0947266 5.25 1.99608 5.25 4.35148C5.25 6.70689 6.925 8.60824 9 8.60824ZM9 11.4461C6.0875 11.4461 0.25 13.1062 0.25 16.4123V19.9596H17.75V16.4123C17.75 13.1062 11.9125 11.4461 9 11.4461ZM19 11.4461C18.6375 11.4461 18.225 11.4745 17.7875 11.517C19.2375 12.7089 20.25 14.3123 20.25 16.4123V19.9596H27.75V16.4123C27.75 13.1062 21.9125 11.4461 19 11.4461Z"
                    />
                </svg>
            </span>
            <div class="text-center mt-1 active-dot">
                <span>
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="#4DC591"/>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="27"  fill="#88889D" class="bi bi-hdd-stack-fill" viewBox="0 0 16 16">
  <path d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1z"/>
</svg>
            </span>
            <div class="text-center mt-1 active-dot">
                <span>
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                    </svg>
                </span>
            </div>
        </a>
    @endif

    <div class="m-nav" onclick="openBurgerFunct()">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="my-1" width="26.586" height="18.077"
                     viewBox="0 0 26.586 18.077">
                    <g id="Group_1004" data-name="Group 1004" transform="translate(-79.5 -43.5)">
                      <line id="Line_62" data-name="Line 62" x2="24.586" transform="translate(80.5 44.5)" fill="none"
                            stroke="#88889d" stroke-linecap="round" stroke-width="2"/>
                      <line id="Line_63" data-name="Line 63" x2="24.586" transform="translate(80.5 52.538)" fill="none"
                            stroke="#88889d" stroke-linecap="round" stroke-width="2"/>
                      <line id="Line_64" data-name="Line 64" x2="24.586" transform="translate(80.5 60.577)" fill="none"
                            stroke="#88889d" stroke-linecap="round" stroke-width="2"/>
                    </g>
                  </svg>

            </span>
        <div class="text-center mt-1 active-dot">
                <span>
                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="#4DC591"/>
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
                    <svg xmlns="http://www.w3.org/2000/svg" onclick="openBurgerFunct()" width="26" fill="#88889D"
                         class="bi bi-x-lg" style="cursor: pointer;" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                        <path fill-rule="evenodd"
                              d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="content-of-burger col-9 mx-auto ">
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                <!-- <a href="{{route('status')}}"
                   class="m-nav text-decoration-none {{ (request()->is('status')) ? 'activeClassNavMob__' : '' }}">
                    <span class="px-2 active-dot">
                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                        </svg>
                    </span>
                    <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"
                             class="bi bi-clipboard-data" viewBox="0 0 16 16">
                            <path
                                d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                            <path
                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                            <path
                                d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                        </svg>
                    </span>
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
                        STATUS
                    </span>
                </a> -->
                <hr>
            @endif
        </div>
{{--        <div class="my-3 m-burger">--}}
{{--            @if(Auth::guard('admins')->user()->hasRole('backoffice') ||--}}
{{--            Auth::guard('admins')->user()->hasRole('admin'))--}}
{{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
{{--                    <span class="px-2 active-dot">--}}
{{--                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <circle cx="2" cy="2" r="2" fill="#4DC591"/>--}}
{{--                        </svg>--}}
{{--                    </span>--}}
{{--                    <span class="px-3 ">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"--}}
{{--                             class="bi bi-cash-coin" viewBox="0 0 16 16">--}}
{{--                            <path fill-rule="evenodd"--}}
{{--                                  d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>--}}
{{--                            <path--}}
{{--                                d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>--}}
{{--                            <path--}}
{{--                                d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>--}}
{{--                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>--}}
{{--                        </svg>--}}
{{--                    </span>--}}
{{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
{{--                        EINZAHLUNG--}}
{{--                    </span>--}}
{{--                </a>--}}
{{--                <hr>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="my-3 m-burger">--}}
{{--            @if(Auth::guard('admins')->user()->hasRole('backoffice') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('admin'))--}}
{{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
{{--                    <span class="px-2 active-dot">--}}
{{--                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <circle cx="2" cy="2" r="2" fill="#4DC591"/>--}}
{{--                        </svg>--}}
{{--                    </span>--}}
{{--                    <span class="px-3 ">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"--}}
{{--                             class="bi bi-x-square" viewBox="0 0 16 16">--}}
{{--                            <path--}}
{{--                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>--}}
{{--                            <path--}}
{{--                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
{{--                        STORNIERUNGEN--}}
{{--                    </span>--}}
{{--                </a>--}}
{{--                <hr>--}}
{{--            @endif--}}
{{--        </div>--}}
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('fs') ||
                Auth::guard('admins')->user()->hasRole('salesmanager') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                    <a href="{{route('Appointments')}}"
                       class="m-nav text-decoration-none {{ (request()->is('Appointments')) ? 'activeClassNavMob__' : '' }}">
                        <span class="px-2 active-dot">
                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                            </svg>
                        </span>
                        <span class="px-3 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"
                                 class="bi bi-calendar-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
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
{{--        <div class="my-3 m-burger">--}}
{{--            @if(Auth::guard('admins')->user()->hasRole('admin') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('menagment') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('salesmanager'))--}}
{{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
{{--                        <span class="px-2 active-dot">--}}
{{--                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                    <span class="px-3 ">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"--}}
{{--                             class="bi bi-people-fill" viewBox="0 0 16 16">--}}
{{--                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>--}}
{{--                            <path fill-rule="evenodd"--}}
{{--                                  d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>--}}
{{--                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>--}}
{{--                        </svg>--}}
{{--                        </span>--}}
{{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
{{--                        MITARBEITER--}}
{{--                        </span>--}}
{{--                </a>--}}
{{--                <hr>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="my-3 m-burger">--}}
{{--            @if(Auth::guard('admins')->user()->hasRole('finance') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('admin'))--}}
{{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
{{--                        <span class="px-2 active-dot">--}}
{{--                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                    <span class="px-3 ">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-percent"--}}
{{--                             viewBox="0 0 16 16">--}}
{{--                            <path--}}
{{--                                d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>--}}
{{--                        </svg>--}}
{{--                        </span>--}}
{{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
{{--                        PROVISIONEN--}}
{{--                        </span>--}}
{{--                </a>--}}
{{--                <hr>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="my-3 m-burger">--}}
{{--            <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
{{--                        <span class="px-2 active-dot">--}}
{{--                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                <span class="px-3 ">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-grid"--}}
{{--                             viewBox="0 0 16 16">--}}
{{--                            <path--}}
{{--                                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>--}}
{{--                        </svg>--}}
{{--                        </span>--}}
{{--                <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
{{--                            FINANZEN--}}
{{--                        </span>--}}
{{--            </a>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--        <div class="my-3 m-burger">--}}
{{--            @if(Auth::guard('admins')->user()->hasRole('admin') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('menagment') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('salesmanager'))--}}
{{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
{{--                        <span class="px-2 active-dot">--}}
{{--                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                    <span class="px-3 ">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"--}}
{{--                             class="bi bi-diagram-2-fill" viewBox="0 0 16 16">--}}
{{--                            <path fill-rule="evenodd"--}}
{{--                                  d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z"/>--}}
{{--                        </svg>--}}
{{--                        </span>--}}
{{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
{{--                        PROV.SYSTEM--}}
{{--                        </span>--}}
{{--                </a>--}}
{{--                <hr>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="my-3 m-burger">--}}
{{--            @if(Auth::guard('admins')->user()->hasRole('admin') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('menagment') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('salesmanager'))--}}
{{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
{{--                        <span class="px-2 active-dot">--}}
{{--                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                    <span class="px-3 ">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"--}}
{{--                             class="bi bi-bar-chart-fill" viewBox="0 0 16 16">--}}
{{--                            <path--}}
{{--                                d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>--}}
{{--                        </svg>--}}
{{--                        </span>--}}
{{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
{{--                            STATISTIK--}}
{{--                        </span>--}}
{{--                </a>--}}
{{--                <hr>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="my-3 m-burger">--}}
{{--            @if(Auth::guard('admins')->user()->hasRole('menagment') ||--}}
{{--                Auth::guard('admins')->user()->hasRole('finance')--}}
{{--                ||Auth::guard('admins')->user()->hasRole('admin') )--}}
{{--                <a onclick="workingOnIt()" href="#" class="m-nav text-decoration-none">--}}
{{--                        <span class="px-2 active-dot">--}}
{{--                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                    <span class="px-3 ">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"--}}
{{--                             class="bi bi-diagram-2-fill" viewBox="0 0 16 16">--}}
{{--                            <path fill-rule="evenodd"--}}
{{--                                  d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z"/>--}}
{{--                        </svg>--}}
{{--                        </span>--}}
{{--                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">--}}
{{--                            TREUHAND--}}
{{--                        </span>--}}
{{--                </a>--}}
{{--                <hr>--}}
{{--            @endif--}}
{{--        </div>--}}
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('admin'))
                <a href="{{route('addnewuser')}}"
                   class="m-nav text-decoration-none {{ (request()->is('addnewuser')) ? 'activeClassNavMob__' : '' }}">
                        <span class="px-2 active-dot">
                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                            </svg>
                        </span>
                    <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"
                             class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
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
            <a href="{{route('logout')}}" class="m-nav text-decoration-none">
                        <span class="px-2 active-dot">
                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                            </svg>
                        </span>
                <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" fill="#88889d"
                             class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd"
                              d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                        </span>
                <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
                            ABMELDEN
                        </span>
            </a>
        </div>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function openBurgerFunct() {
        $("#bottom-burger").slideToggle();
    }
    function workingOnIt(){
        alert('Kommt Bald...');
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
</script>


{{--Mobile--}}
<style>
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
        visibility: visible;
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
    }
</style>
<style>
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
        color: #000000;
        font-weight: bold;
        border-radius: 15px !important;
    }

    .accordion-item {
        border-radius: 15px !important;
    }

    /* .hr-style {
        color: #fff !important;
        height: 3px !important;
        border-radius: 50px;
        opacity: 1;
        display: none;
    }

    .border-left-div {
        border: none !important;
        border-left: 3px solid #fff !important;

    } */

    @media (max-width: 991.98px) {
        .hr-style {
            display: block;
        }

        .border-left-div {
            border: none !important;
            border-left: none !important;
        }
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
        content: '';
    }

    .accordion-button:focus {
        border-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }

    /*nav*/

</style>
<style>
    /*nav ARti*/
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@200;800;900&display=swap');
    body {font-family: 'Montserrat', sans-serif;}
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
        color: #0C71C3 ;
    }

    .activeClassNav__, .activeClassNav__ span, .activeClassNav__ svg{
        background-color: #fff;
        color: #0C71C3 !important;
        fill: #0C71C3 !important;
    }

    .nav-itemsss a:hover span{
        color: #0C71C3 ;
    }

    .nav-itemsss a:hover svg{
        fill: #0C71C3 ;
    }

    .nav-itemsss a:focus, .nav-itemsss a:focus svg, .nav-itemsss a:focus span {
        background-color: #fff;
        color: #0C71C3;
        fill: #0C71C3 ;
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


    .nav-texttt{
        font-family: 'Poppins';
        color: #fff;

    }

    @media (max-width: 978px){
        #logo__311{
            content:url('../img/Logo gjys.png');
            width: 20% !important;
        }
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

    @media (max-width: 501.98px) {
        .first-col1 {
            display: none;
        }
    }

</style>

<style>
    /*Per Notification */
    .coloriii a{
        color: black !important;
    }
</style>
