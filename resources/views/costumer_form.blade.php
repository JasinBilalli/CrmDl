<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Costumer Kundenportfolio</title>
    <link rel="icon" type="image/png" href="img/Favicon.png">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@200;800;900&display=swap');

    body {
        font-family: 'Montserrat', sans-serif;
    }
</style>


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
                    <span class="ps-2 txt-dn">Home</span>
                </a>
                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
                Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin'))

                    <a href="{{route('tasks')}}" class="nav-link {{ (request()->is('tasks')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-speedometer2" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                        </svg>
                        <span class="ps-2 txt-dn">Tasks</span>
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
                <a href="#" class="nav-link ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-grid" viewBox="0 0 16 16">
                        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                    </svg>
                    <span class="ps-2 txt-dn">Finance</span>
                </a>
                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
                Auth::guard('admins')->user()->hasRole('admin'))

                    <a href="{{route('status')}}" class="nav-link {{ (request()->is('status')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                            <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                        </svg>
                        <span class="ps-2 txt-dn">Status</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->check())
                    <a href="{{route('costumers')}}" class="nav-link {{ (request()->is('costumers')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <span class="ps-2 txt-dn">Costumers</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                    <a href="#" class="nav-link ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                        </svg>
                        <span class="ps-2 txt-dn">Deposit</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                    <a href="#" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-x-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                        <span class="ps-2 txt-dn">Cancelations</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('fs') ||
                Auth::guard('admins')->user()->hasRole('salesmanager') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                    @if(Auth::guard('admins')->user()->hasRole('salesmanager') ||
                    Auth::guard('admins')->user()->hasRole('fs'))
                        <a href="{{route('Appointments')}}" class="nav-link  {{ (request()->is('Appointments')) ? 'activeClassNav__' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                            </svg>
                            <span class="ps-2 txt-dn">Calendar</span>
                        </a>
                    @else
                        <a href="{{route('calendar')}}" class="nav-link  {{ (request()->is('calendar')) ? 'activeClassNav__' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                            </svg>
                            <span class="ps-2 txt-dn">Calendar</span>
                        </a>
                    @endif

                @endif
                @if(Auth::guard('admins')->user()->hasRole('salesmanager')
                ||Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                    @if(Auth::guard('admins')->user()->hasRole('salesmanager'))
                        <a href="{{route('calendar')}}" class="nav-link  {{ (request()->is('calendar')) ? 'activeClassNav__' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-calendar-date" viewBox="0 0 16 16">
                                <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                            </svg>
                            <span class="ps-2 txt-dn">Dates</span>
                        </a>
                    @else
                        <a href="{{route('Appointments')}}" class="nav-link {{ (request()->is('Appointments')) ? 'activeClassNav__' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-calendar-date" viewBox="0 0 16 16">
                                <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                            </svg>
                            <span class="ps-2 txt-dn">Dates</span>
                        </a>
                    @endif
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <a href="#" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg>
                        <span class="ps-2 txt-dn">Employees</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('finance') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                    <a href="#" class="nav-link ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-percent" viewBox="0 0 16 16">
                            <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg>
                        <span class="ps-2 txt-dn">Commisions</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <a href="#" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-diagram-2-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z" />
                        </svg>
                        <span class="ps-2 txt-dn">Prov.system</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <a href="#" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                            <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z" />
                        </svg>
                        <span class="ps-2 txt-dn">Statistics</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('finance')
                ||Auth::guard('admins')->user()->hasRole('admin') )
                    <a href="#" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-diagram-2-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z" />
                        </svg>
                        <span class="ps-2 txt-dn">Trust</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin'))
                    <a class="nav-link" href="{{route('addnewuser')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                        <span class="ps-1 nav-texttt">Add New User</span>
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
                            <span class="ps-2 txt-dn"> Sign out</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
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
        <div class="my-5 mx-4">

            <div class="" style="background-color: #EFEFEF;border-radius: 22px;">
                @php
                    $leadss = $costumer->id * 1244;
                    $costumerId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                @endphp
                <form action="{{route('save_costumer_form',$costumerId)}}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="py-4 px-3">
                    <span class="fs-4">
                        {{$costumer->first_name}} {{$costumer->last_name}}
                    </span> <br>
                        <span class="fs-6 text-muted">

                    </span>
                    </div>
                    <div class="row mx-4">
                        <nav class="g-0 nav-form-links">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link col active status-btn" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true" onclick="changecnt(0)" >Status
                                </button>
                                <button class="nav-link col auto-btn" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile"
                                        aria-selected="false" onclick="changecnt(1)">Angaben
                                </button>
                                <button class="nav-link col sachen-btn" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact"
                                        aria-selected="false" onclick="changecnt(2)">Produkte
                                </button>
                                <button onclick="window.location.href='{{route('leadfamilyperson',[Crypt::encrypt($costumer->id * 1244),'admin_id' => \Illuminate\Support\Facades\Crypt::encrypt(\App\Models\Pendency::where('family_id',$costumer->id)->first()->admin_id * 1244),'pend_id' => \App\Models\Pendency::where('family_id',$costumer->id)->first()->id])}}'" class="nav-link col vorsorge-btn" id="nav-fourth-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth"
                                        aria-selected="false">Vorsorge
                                </button>
                            </div>
                        </nav>
                    </div>
                    <div class="tab-content mx-4 pb-3" id="nav-tabContent">
                        <div class="tab-pane show active fade status-content mb-3" id="nav-home" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            <div class="row mx-4">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">

                                    <div class="py-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample0001">
                                            <div class="accordion-item"
                                                 style="background-color: #EFEFEF !important;border-radius: 15px; border: none !important;">
                                                <h2 class="accordion-header" id="flush-heading0001">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapse0001"
                                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                                            style="background-color: #EFEFEF !important; border-radius: 10px;">

                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                               <span class="fs-6" id="title-span"
                                                                     style="font-weight: 600;">
                                                            Grundversicherung
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse0001" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-heading0001"
                                                     data-bs-parent="#accordionFlushExample0001">
                                                    <div class="accordion-body"
                                                         style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesellschaft:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="societyG" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    KVG Pramie:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="number"
                                                                       name="kvg_premiumG" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Status:
                                                                </span>
                                                                </div>
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="statusG" disabled>
                                                                    <option selected value=""></option>
{{--                                                                    <option value="Aufgenomen">Aufgenomen </option>--}}
{{--                                                                    <option value="Offen">Offen</option>--}}
{{--                                                                    <option value="Abgelehnt">Abgelehnt </option>--}}
{{--                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>--}}
{{--                                                                    <option value="Provisionert">Provisionert </option>--}}
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Anderung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="modification_dateG" id="" min="1900-01-01"
                                                                       max="9999-12-31" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Provision:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="provisionG" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    ID:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control" type="text" name="cidG"
                                                                       id="" readonly>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample0004">
                                            <div class="accordion-item"
                                                 style="background-color: #EFEFEF !important;border-radius: 15px;">
                                                <h2 class="accordion-header" id="flush-heading0004">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapse0004"
                                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                                            style="background-color: #EFEFEF !important; border-radius: 10px;">

                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                               <span class="fs-6" id="title-span"
                                                                     style="font-weight: 600;">
                                                            Vorsorge
                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse0004" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-heading0004"
                                                     data-bs-parent="#accordionFlushExample0004">
                                                    <div class="accordion-body"
                                                         style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesellschaft:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="societyV" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    KVG Pramie:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="number"
                                                                       name="productionV" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Status:
                                                                </span>
                                                                </div>
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="statusV" disabled>
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Aufgenomen">Aufgenomen </option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt </option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Provisionert">Provisionert </option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Anderung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="modification_dateV" id="" min="1900-01-01"
                                                                       max="9999-12-31" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Provision:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="provisionV" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    ID:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="cidV" id="" readonly>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">

                                    <div class="py-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample0002">
                                            <div class="accordion-item"
                                                 style="background-color: #EFEFEF !important;border-radius: 15px; border: none !important;">
                                                <h2 class="accordion-header" id="flush-heading0002">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapse0002"
                                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                                            style="background-color: #EFEFEF !important; border-radius: 10px;">

                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                               <span class="fs-6" id="title-span"
                                                                     style="font-weight: 600;">
                                                            Zusatzversicherung
                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse0002" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-heading0002"
                                                     data-bs-parent="#accordionFlushExample0002">
                                                    <div class="accordion-body"
                                                         style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesellschaft:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="societyZ" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    KVG Pramie:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="number"
                                                                       name="vvg_premiumZ" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Status:
                                                                </span>
                                                                </div>
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="statusZ" disabled>
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Aufgenomen">Aufgenomen </option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt </option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Provisionert">Provisionert </option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Anderung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="modification_dateZ" id="" min="1900-01-01"
                                                                       max="9999-12-31" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Provision:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="provisionZ" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    ID:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="cidZ" id="" readonly>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample0005">
                                            <div class="accordion-item"
                                                 style="background-color: #EFEFEF !important;border-radius: 15px;">
                                                <h2 class="accordion-header" id="flush-heading0005">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapse0005"
                                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                                            style="background-color: #EFEFEF !important; border-radius: 10px;">

                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                               <span class="fs-6" id="title-span"
                                                                     style="font-weight: 600;">
                                                            Hausrat
                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse0005" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-heading0005"
                                                     data-bs-parent="#accordionFlushExample0005">
                                                    <div class="accordion-body"
                                                         style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesellschaft:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="societyH" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    KVG Pramie:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="number"
                                                                       name="kvg_premiumH" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Status:
                                                                </span>
                                                                </div>
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="statusH" disabled>
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Aufgenomen">Aufgenomen </option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt </option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Provisionert">Provisionert </option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Anderung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="modification_dateH" id="" min="1900-01-01"
                                                                       max="9999-12-31" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Provision:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="provisionH" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    ID:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="cidH" id="" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">
                                    <div class="py-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample0003">
                                            <div class="accordion-item"
                                                 style="background-color: #EFEFEF !important;border-radius: 15px;">
                                                <h2 class="accordion-header" id="flush-heading0003">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapse0003"
                                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                                            style="background-color: #EFEFEF !important; border-radius: 10px;">

                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                               <span class="fs-6" id="title-span"
                                                                     style="font-weight: 600;">
                                                            Reschtsschutz
                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse0003" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-heading0003"
                                                     data-bs-parent="#accordionFlushExample0003">
                                                    <div class="accordion-body"
                                                         style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesellschaft:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="productR" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    KVG Pramie:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="durationR" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Status:
                                                                </span>
                                                                </div>
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="statusR" disabled>
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Aufgenomen">Aufgenomen </option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt </option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Provisionert">Provisionert </option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Anderung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="modification_dateR" id="" min="1900-01-01"
                                                                       max="9999-12-31" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Provision:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="provisionR" id="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    ID:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="cidR" id="" readonly>
                                                            </div>

                                                        </div>

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
                                        <span class="pe-2" style="color: #9F9F9F;">
                                            Uberspringen
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0 text-start">
                                        <div class="">
                                            <button type="button" class="px-5 py-2"
                                                    style="border: none; border-radius: 9px; background-color:#285F52;"
                                                    onclick="nextonee()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159"
                                                     viewBox="0 0 58.155 19.159">
                                                    <g id="Group_453" data-name="Group 453"
                                                       transform="translate(0.004)">
                                                        <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2"
                                                              transform="translate(0 9.287)" fill="none"
                                                              stroke="#3fd599"
                                                              stroke-width="2"/>
                                                        <path id="Polygon_2" data-name="Polygon 2"
                                                              d="M9.58,0l9.58,11.642H0Z"
                                                              transform="translate(58.151 0) rotate(90)"
                                                              fill="#3fd599"/>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                    ANGABEN                                      --}}
                        <div class="tab-pane fade auto-content" id="nav-profile" role="tabpanel"
                             aria-labelledby="nav-profile-tab">
                            <div class="row mx-4">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">
                                    <div class="angaben-content p-3 mb-3">
                                        <div class="my-1">
                                            <label for="">Ursprung:</label>
                                            <input type="text" name="" class="form-control" id="" value="Termin" readonly>
                                        </div>
                                    </div>
                                    <div class="angaben-content p-3">
                                        <div class="my-1">
                                            <label for="">Vorname:</label>
                                            <input type="text" name="" class="form-control" id="" value="{{$costumer->first_name}} " readonly>
                                        </div>
                                        <div class="my-1">
                                            <label for="">Nachname:</label>
                                            <input type="text" name="" class="form-control" id="" value="{{$costumer->last_name}}" readonly>
                                        </div>
                                        <div class="my-1">
                                            <label for="">Geburtstag:</label>
                                            <input type="date" name="" class="form-control" id="" min="1900-01-01" max="9999-12-31" value="{{$costumer->birthdate}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">

                                    <div class="angaben-content p-3 mb-3">
                                        <div class="my-1">
                                            <label for="">Adresse: </label>
                                            <input type="text" name="" class="form-control" id="" value="{{$costumer->lead->address}}" readonly>
                                        </div>
                                        <div class="my-1">
                                            <label for="">Postleitzahl, Ort</label>
                                            <input type="text" name="" class="form-control" id="" value="{{$costumer->lead->postal_code}}" readonly>
                                        </div>
                                        <div class="my-1">
                                            <label for="">Kanton:</label>
                                            <input type="date" name="" class="form-control" id="" min="1900-01-01" max="9999-12-31" value="{{$costumer->lead->birthdate}}" readonly>
                                        </div>
                                    </div>
                                    <div class="angaben-content p-3 ">
                                        <div class="my-1">
                                            <span class="fw-bold">Zugehörige Personen</span>
                                        </div>
                                        <label for="">Family Persons:</label>
                                        @foreach($costumer->lead->family as $kid)
                                            {{--                                            @if($kid->birthdate > \Carbon\Carbon::now()->subYears(18))--}}
                                            <div class="my-1">
                                                <input type="text" name="" class="form-control" id="" value="{{$kid->first_name}}" readonly>
                                            </div>
                                            {{--                                            @endif--}}
                                        @endforeach

                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">
                                    <div class="angaben-content p-3 ">
                                        <div class="my-1">
                                            <span class="fw-bold">Anhänge</span>
                                        </div>
                                        <div class="my-1">
                                            @if($dataKK->pre_insurer != null)
                                                <label for="">Vorversicherer</label>
                                                <a style="text-decoration: none; cursor: pointer !important;" href="{{route('showfile',$dataKK->pre_insurer)}}" target="_blank">
                                                    <input
                                                        type="text" class="form-control"
                                                        id="file-input-0c" disabled
                                                        style="background-color: #ffffff; cursor: pointer"
                                                        value="{{$dataKK->pre_insurer}}"
                                                    >
                                                </a>
                                            @endif
                                            @if($dataKK->id_required != null)
                                                <label for="">ID Notwending</label>
                                                <a style="text-decoration: none;" href="{{route('showfile',$dataKK->id_required)}}" target="_blank">
                                                    <input
                                                        type="text" class="form-control"
                                                        id="file-input-0c" disabled
                                                        style="background-color: #ffffff; cursor: pointer"
                                                        value="{{$dataKK->id_required}}"
                                                    >
                                                </a>
                                            @endif
                                            @if($dataKK->notice_by != null)
                                                <label for="">Kundingung durch</label>
                                                <a style="text-decoration: none;" href="{{route('showfile',$dataKK->notice_by)}}" target="_blank">
                                                    <input
                                                        type="text" class="form-control"
                                                        id="file-input-0c" disabled
                                                        style="background-color: #ffffff; cursor: pointer"
                                                        value="{{$dataKK->notice_by}}"
                                                    >
                                                </a>
                                            @endif
                                            @if($dataKK->power_of_attorney != null)
                                                <label for="">Vollmacht</label>
                                                <a style="text-decoration: none;" href="{{route('showfile',$dataKK->power_of_attorney)}}" target="_blank">
                                                    <input
                                                        type="text" class="form-control"
                                                        id="file-input-0c" disabled
                                                        style="background-color: #ffffff; cursor: pointer"
                                                        value="{{$dataKK->power_of_attorney}}"
                                                    >
                                                </a>
                                            @endif
                                        </div>
                                        <div class="my-1">
                                            @if($dataFahrzeug->upload_police != null)
                                                <label for="">Gegenofferte:</label>
                                                <a style="text-decoration: none;" href="{{route('showfile',$dataFahrzeug->upload_police)}}" target="_blank">
                                                    <input
                                                        type="text" class="form-control"
                                                        id="file-input-0c" disabled
                                                        style="background-color: #ffffff; cursor: pointer"
                                                        value="{{$dataFahrzeug->upload_police}}"
                                                    >
                                                </a>
                                            @endif
                                        </div>
                                        <div class="my-1">
                                            @if($dataFahrzeug->vehicle_id != null)
                                                <label for="">Neues Fahrzeug:</label>
                                                <a style="text-decoration: none;" href="{{route('showfile',$dataFahrzeug->vehicle_id)}}" target="_blank">
                                                    <input
                                                        type="text" class="form-control"
                                                        id="file-input-0c" disabled
                                                        style="background-color: #ffffff; cursor: pointer"
                                                        value="{{$dataFahrzeug->vehicle_id}}"
                                                    >
                                                </a>
                                            @endif
                                        </div>
                                        <div class="my-1">
                                            @if($dataPrevention->upload_police != null)
                                                <label for="">Gegenofferte (Hausrat- & Privathaftpflicht):</label>
                                                <a style="text-decoration: none;" href="{{route('showfile',$dataPrevention->upload_police)}}" target="_blank">
                                                    <input
                                                        type="text" class="form-control"
                                                        id="file-input-0c" disabled
                                                        style="background-color: #ffffff; cursor: pointer"
                                                        value="{{$dataPrevention->upload_police}}"
                                                    >
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-3 pb-3">
                                    <div class="row">
                                        <div class="col g-0 text-end my-auto">
                                            <div class="">
                                        <span class="pe-2" style="color: #9F9F9F;">
                                            Uberspringen
                                        </span>
                                            </div>
                                        </div>
                                        <div class="col g-0 text-start">
                                            <div class="">
                                                <button type="button" class="px-5 py-2"
                                                        style="border: none; border-radius: 9px; background-color:#285F52;" onclick="nextonee()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159"
                                                         viewBox="0 0 58.155 19.159">
                                                        <g id="Group_453" data-name="Group 453" transform="translate(0.004)">
                                                            <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2"
                                                                  transform="translate(0 9.287)" fill="none" stroke="#3fd599"
                                                                  stroke-width="2"/>
                                                            <path id="Polygon_2" data-name="Polygon 2"
                                                                  d="M9.58,0l9.58,11.642H0Z"
                                                                  transform="translate(58.151 0) rotate(90)" fill="#3fd599"/>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                    END ANGABEN                                      --}}
                        <div class="tab-pane fade  sachen-content" id="nav-contact" role="tabpanel"
                             aria-labelledby="nav-contact-tab">
                            <div class="row mx-4">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">

                                    <div class="py-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample0006">
                                            <div class="accordion-item"
                                                 style="background-color: #EFEFEF !important;border-radius: 15px;border: none !important;">
                                                <h2 class="accordion-header" id="flush-heading0006">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapse0006"
                                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                                            style="background-color: #EFEFEF !important; border-radius: 10px;">

                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                               <span class="fs-6" id="title-span"
                                                                     style="font-weight: 600;">
                                                            Grundversicherung
                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse0006" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-heading0006"
                                                     data-bs-parent="#accordionFlushExample0006">
                                                    <div class="accordion-body"
                                                         style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Abschlussdatum:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="graduation_date_PG1" id="" min="1900-01-01"
                                                                       max="9999-12-31">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesellschaft:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="society_PG1" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Produkt
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="product_PG1" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Status
                                                                </span>
                                                                </div>
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="status_PG1">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Aufgenomen">Aufgenomen </option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt </option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Provisionert">Provisionert </option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Letze Anpassung
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="last_adjustment_PG1" id="" min="1900-01-01"
                                                                       max="9999-12-31">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesamtprovision:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="number"
                                                                       name="total_commisions_PG1" id="">
                                                            </div>
                                                        </div>
                                                    </div>

{{--                                                    qetu--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample0044">
                                            <div class="accordion-item"
                                                 style="background-color: #EFEFEF !important;border-radius: 15px;">
                                                <h2 class="accordion-header" id="flush-heading0044">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapse0044"
                                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                                            style="background-color: #EFEFEF !important; border-radius: 10px;">

                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                               <span class="fs-6" id="title-span"
                                                                     style="font-weight: 600;">
                                                            Autoversicherung
                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse0044" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-heading0044"
                                                     data-bs-parent="#accordionFlushExample0044">
                                                    <div class="accordion-body"
                                                         style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesellschaft:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="society_PA" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Beginn Versicherung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="beginning_insurance_PA" id=""
                                                                       min="1900-01-01" max="9999-12-31">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Versicherung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="insurance_PA" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Status:
                                                                </span>
                                                                </div>
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="status_PA">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Aufgenomen">Aufgenomen </option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt </option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Provisionert">Provisionert </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Letze Anpassung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="last_adjustment_PA" id=""
                                                                       min="1900-01-01" max="9999-12-31">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesamtprovision:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="number"
                                                                       name="total_commisions_PA" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">
                                    <div class="py-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample0007">
                                            <div class="accordion-item"
                                                 style="background-color: #EFEFEF !important;border-radius: 15px;border: none !important;">
                                                <h2 class="accordion-header" id="flush-heading0007">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapse0007"
                                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                                            style="background-color: #EFEFEF !important; border-radius: 10px;">

                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                               <span class="fs-6" id="title-span"
                                                                     style="font-weight: 600;">
                                                            Zusatzversicherung
                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse0007" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-heading0007"
                                                     data-bs-parent="#accordionFlushExample0007">
                                                    <div class="accordion-body"
                                                         style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Abschlussdatum:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="graduation_date_PZ1" id="" min="1900-01-01"
                                                                       max="9999-12-31">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesellschaft: </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="society_PZ1" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Produkt
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="produkt_PZ1" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    VVG Pramie:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="vvg_premium_PZ1" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Laufzeit:
                                                                </span>
                                                                </div>
                                                                <label for="from">From</label>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="duration_from_PZ1" id="from"
                                                                       min="1900-01-01" max="9999-12-31">
                                                                <label for="to">To</label>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="duration_to_PZ1" id="to" min="1900-01-01"
                                                                       max="9999-12-31">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Status:
                                                                </span>
                                                                </div>
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="status_PZ1">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Aufgenomen">Aufgenomen </option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt </option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Provisionert">Provisionert </option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Letze Anpassung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="last_adjustment_PZ1" id="" min="1900-01-01"
                                                                       max="9999-12-31">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Provision:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="provision_PZ1" id="">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesamtprovision:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="number"
                                                                       name="total_commisions_PZ1" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample0010">
                                            <div class="accordion-item"
                                                 style="background-color: #EFEFEF !important;border-radius: 15px;">
                                                <h2 class="accordion-header" id="flush-heading0010">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapse0010"
                                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                                            style="background-color: #EFEFEF !important; border-radius: 10px;">

                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                               <span class="fs-6" id="title-span"
                                                                     style="font-weight: 600;">
                                                            Hausrat
                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse0010" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-heading0010"
                                                     data-bs-parent="#accordionFlushExample0010">
                                                    <div class="accordion-body"
                                                         style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesellschaft:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="society_PH" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Beginn Versicherung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="beginning_insurance_PH" id=""
                                                                       min="1900-01-01" max="9999-12-31">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Versicherung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="insurance_PH" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Status:
                                                                </span>
                                                                </div>
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="status_PH">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Aufgenomen">Aufgenomen </option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt </option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Provisionert">Provisionert </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Letze Anpassung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="last_adjustment_PH" id=""
                                                                       min="1900-01-01" max="9999-12-31">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesamtprovision:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="number"
                                                                       name="total_commisions_PH" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">

                                    <div class="py-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample0008">
                                            <div class="accordion-item"
                                                 style="background-color: #EFEFEF !important;border-radius: 15px;">
                                                <h2 class="accordion-header" id="flush-heading0008">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapse0008"
                                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                                            style="background-color: #EFEFEF !important; border-radius: 10px;">

                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                               <span class="fs-6" id="title-span"
                                                                     style="font-weight: 600;">
                                                            Rechtsschutz
                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse0008" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-heading0008"
                                                     data-bs-parent="#accordionFlushExample0008">
                                                    <div class="accordion-body"
                                                         style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Abschlussdatum:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="graduation_date_PR" id="" min="1900-01-01"
                                                                       max="9999-12-31">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesellschaft:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="society_PR" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Produkt
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="produkt_PR" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Status:
                                                                </span>
                                                                </div>
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="status_PR">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Aufgenomen">Aufgenomen </option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt </option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Provisionert">Provisionert </option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Letze Anpassung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="last_adjustment_PR" id="" min="1900-01-01"
                                                                       max="9999-12-31">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesamtprovision:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="number"
                                                                       name="total_commisions_PR" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample0009">
                                            <div class="accordion-item"
                                                 style="background-color: #EFEFEF !important;border-radius: 15px;">
                                                <h2 class="accordion-header" id="flush-heading0009">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapse0009"
                                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                                            style="background-color: #EFEFEF !important; border-radius: 10px;">

                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                               <span class="fs-6" id="title-span"
                                                                     style="font-weight: 600;">
                                                            Vorsorge
                                                        </span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse0009" class="accordion-collapse collapse"
                                                     aria-labelledby="flush-heading0009"
                                                     data-bs-parent="#accordionFlushExample0009">
                                                    <div class="accordion-body"
                                                         style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Abschlussdatum:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="graduation_date_PV" id="" min="1900-01-01"
                                                                       max="9999-12-31">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Beginn:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="begin_PV" id="" min="1900-01-01"
                                                                       max="9999-12-31">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesellschaft:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="society_PV" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Pramie
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="pramie_PV" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Zahlungsrythmus:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="payment_rythm_PV" id="">
                                                            </div>

                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Lauftzeit:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text" name=""
                                                                       id="">
                                                                <label for="from2">From</label>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="duration_from_PV" id="from2"
                                                                       min="1900-01-01" max="9999-12-31">
                                                                <label for="to2">To</label>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="duration_to_PV" id="to2" min="1900-01-01"
                                                                       max="9999-12-31">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Produktion:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="production_PV" id="">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Status:
                                                                </span>
                                                                </div>
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="status_PV">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Aufgenomen">Aufgenomen </option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt </option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Provisionert">Provisionert </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Letze Anpassung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="last_adjustment_PV" id="" min="1900-01-01"
                                                                       max="9999-12-31">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Gesamtprovision:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="number"
                                                                       name="total_commisions_PV" id="">
                                                            </div>
                                                        </div>
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
                                        <span class="pe-2" style="color: #9F9F9F;">
                                            Uberspringen
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0 text-start">
                                        <div class="">
                                            <button type="submit" class="px-5 py-2"
                                                    style="border: none; border-radius: 9px; background-color:#285F52;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159"
                                                     viewBox="0 0 58.155 19.159">
                                                    <g id="Group_453" data-name="Group 453"
                                                       transform="translate(0.004)">
                                                        <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2"
                                                              transform="translate(0 9.287)" fill="none"
                                                              stroke="#3fd599"
                                                              stroke-width="2"/>
                                                        <path id="Polygon_2" data-name="Polygon 2"
                                                              d="M9.58,0l9.58,11.642H0Z"
                                                              transform="translate(58.151 0) rotate(90)"
                                                              fill="#3fd599"/>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade  vorsorge-content" id="nav-fourth" role="tabpanel"
                             aria-labelledby="nav-fourth-tab">
                            <div class="row mx-4">

                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

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
                <a href="{{route('status')}}"
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
                    <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                        STATUS
                    </span>
                </a>
                <hr>
            @endif
        </div>
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
            Auth::guard('admins')->user()->hasRole('admin'))
                <a href="#" class="m-nav text-decoration-none">
                    <span class="px-2 active-dot">
                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                        </svg>
                    </span>
                    <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"
                             class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                            <path
                                d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                            <path
                                d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                        </svg>
                    </span>
                    <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                        DEPOSIT
                    </span>
                </a>
                <hr>
            @endif
        </div>
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                <a href="#" class="m-nav text-decoration-none">
                    <span class="px-2 active-dot">
                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                        </svg>
                    </span>
                    <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"
                             class="bi bi-x-square" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </span>
                    <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                        CANCELATIONS
                    </span>
                </a>
                <hr>
            @endif
        </div>
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('fs') ||
                Auth::guard('admins')->user()->hasRole('salesmanager') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                @if(Auth::guard('admins')->user()->hasRole('salesmanager') ||
                Auth::guard('admins')->user()->hasRole('fs'))
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
                        <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                            CALENDAR
                        </span>
                    </a>
                @else
                    <a href="{{route('calendar')}}"
                       class="m-nav text-decoration-none {{ (request()->is('calendar')) ? 'activeClassNavMob__' : '' }}">
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
                        <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                                CALENDAR
                            </span>
                    </a>
                @endif
                <hr>
            @endif
        </div>
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('salesmanager')
                ||Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                @if(Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <a href="{{route('calendar')}}"
                       class="m-nav text-decoration-none {{ (request()->is('calendar')) ? 'activeClassNavMob__' : '' }}">
                    <span class="px-2 active-dot">
                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                        </svg>
                    </span>
                        <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"
                             class="bi bi-calendar-date" viewBox="0 0 16 16">
                            <path
                                d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                        </span>
                        <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                        DATES
                    </span>
                    </a>
                @else
                    <a href="{{route('Appointments')}}"
                       class="m-nav text-decoration-none {{ (request()->is('Appointments')) ? 'activeClassNavMob__' : '' }}">
                    <span class="px-2 active-dot">
                        <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                        </svg>
                    </span>
                        <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"
                             class="bi bi-calendar-date" viewBox="0 0 16 16">
                            <path
                                d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                        </span>
                        <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                        DATES
                    </span>
                    </a>

                @endif
                <hr>
            @endif
        </div>
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('admin') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('salesmanager'))
                <a href="#" class="m-nav text-decoration-none">
                        <span class="px-2 active-dot">
                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                            </svg>
                        </span>
                    <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"
                             class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd"
                                  d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                        </span>
                    <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                        EMPLOYEES
                        </span>
                </a>
                <hr>
            @endif
        </div>
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('finance') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                <a href="#" class="m-nav text-decoration-none">
                        <span class="px-2 active-dot">
                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                            </svg>
                        </span>
                    <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-percent"
                             viewBox="0 0 16 16">
                            <path
                                d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                        </span>
                    <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                        COMMISIONS
                        </span>
                </a>
                <hr>
            @endif
        </div>
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('admin') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('salesmanager'))
                <a href="#" class="m-nav text-decoration-none">
                        <span class="px-2 active-dot">
                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                            </svg>
                        </span>
                    <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"
                             class="bi bi-diagram-2-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z"/>
                        </svg>
                        </span>
                    <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                        PROV.SYSTEM
                        </span>
                </a>
                <hr>
            @endif
        </div>
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('admin') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('salesmanager'))
                <a href="#" class="m-nav text-decoration-none">
                        <span class="px-2 active-dot">
                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                            </svg>
                        </span>
                    <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"
                             class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                            <path
                                d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
                        </svg>
                        </span>
                    <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                            STATISTIC
                        </span>
                </a>
                <hr>
            @endif
        </div>
        <div class="my-3 m-burger">
            @if(Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('finance')
                ||Auth::guard('admins')->user()->hasRole('admin') )
                <a href="#" class="m-nav text-decoration-none">
                        <span class="px-2 active-dot">
                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                            </svg>
                        </span>
                    <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d"
                             class="bi bi-diagram-2-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z"/>
                        </svg>
                        </span>
                    <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                            TRUST
                        </span>
                </a>
                <hr>
            @endif
        </div>
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
                    <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                            ADD NEW USER
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
                <span class="fs-5 fw-bold" style="color: #88889D; line-height: 1;">
                            SIGN OUT
                        </span>
            </a>
        </div>

    </div>
</div>
{{--GEGENOFERTEN--}}
<script>
    var count = <?php echo $newGegenOfertenCount +1;?>;
    for (i = 2; i <= count; i++) {
        $("#accordionFlushExample0006").append('<div class="accordion-item my-1" style="background-color: #EFEFEF !important;border-radius: 15px !important; border: none !important;">'+
            '<div id="flush-collapse0006" class="accordion-collapse collapse" aria-labelledby="flush-heading0006" data-bs-parent="#accordionFlushExample0006">' +
            '<div class="accordion-body" style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Abschlussdatum: </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="date" name="graduation_date_PG' + i + '"' + ' id="" min="1900-01-01" max="9999-12-31">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Gesellschaft: </span>' +
            '</div>'+
            '<input class="py-1 form-control " type="text" name="society_PG' + i + '"' + ' id="">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Produkt </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="text" name="product_PG' + i + '"' + ' id="">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Status </span>' +
            '</div>' +
            '<select class="form-select" aria-label="Default select example" name="status_PG' + i + '"' + '> <option selected value="notselected">Not Selected </option> <option value="Aufgenomen">Aufgenomen </option> <option value="Offen">Offen</option> <option value="Abgelehnt">Abgelehnt </option> <option value="Zuruckgezogen">Zuruckgezogen</option> <option value="Provisionert">Provisionert </option> </select>' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Letze Anpassung </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="date" name="last_adjustment_PG' + i + '"' + ' id="" min="1900-01-01" max="9999-12-31">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Gesamtprovision: </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="number" name="total_commisions_PG' + i + '"' + ' id="">' +
            '</div>' +
            '</div>' +
            '</div>'+
            '</div>');
    }
</script>
<script>
    var count = <?php echo $newGegenOfertenCount +1;?>;
    for (i = 2; i <= count; i++) {
        $("#accordionFlushExample0001").append('<div class="accordion-item my-1" style="background-color: #EFEFEF !important;border-radius: 15px !important; border: none !important;">'+
            '<div id="flush-collapse0001" class="accordion-collapse collapse" aria-labelledby="flush-heading0001" data-bs-parent="#accordionFlushExample0001">' +
            '<div class="accordion-body" style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Abschlussdatum: </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="date" name="graduation_date_PG' + i + '"' + ' readonly id="" min="1900-01-01" max="9999-12-31">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Gesellschaft: </span>' +
            '</div>'+
            '<input class="py-1 form-control " type="text" name="society_PG' + i + '"' + ' id="" readonly>' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Produkt </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="text" name="product_PG' + i + '"' + ' id="" readonly>' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Status </span>' +
            '</div>' +
            '<select class="form-select" aria-label="Default select example" name="status_PG' + i + '"' + ' disabled> <option selected value="notselected">Not Selected </option> <option value="Aufgenomen">Aufgenomen </option> <option value="Offen">Offen</option> <option value="Abgelehnt">Abgelehnt </option> <option value="Zuruckgezogen">Zuruckgezogen</option> <option value="Provisionert">Provisionert </option> </select>' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Letze Anpassung </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="date" name="last_adjustment_PG' + i + '"' + ' id="" readonly min="1900-01-01" max="9999-12-31">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Gesamtprovision: </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="number" name="total_commisions_PG' + i + '"' + ' id="" readonly>' +
            '</div>' +
            '</div>' +
            '</div>'+
            '</div>');
    }
</script>
{{--END--}}
{{--Zusatzversicherung--}}
<script>
    var count = <?php echo $newNeueOfertenCount +1;?>;
    for (i = 2; i <= count; i++) {
        $("#accordionFlushExample0007").append('<div id="flush-collapse0007" class="accordion-collapse collapse" aria-labelledby="flush-heading0007" data-bs-parent="#accordionFlushExample0007">' +
            '<div class="accordion-body" style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Abschlussdatum: </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="date" name="graduation_date_PZ' + i + '"' + ' id="" min="1900-01-01" max="9999-12-31">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Gesellschaft: </span> </div>' +
            '<input class="py-1 form-control " type="text" name="society_PZ' + i + '"' + ' id="">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Produkt </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="text" name="produkt_PZ' + i + '"' + ' id="">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">VVG Pramie: </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="text" name="vvg_premium_PZ' + i + '"' + ' id="">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Laufzeit: </span>' +
            '</div>' +
            '<label for="from">From</label>' +
            '<input class="py-1 form-control " type="date" name="duration_from_PZ' + i + '"' + ' id="from" min="1900-01-01" max="9999-12-31">' +
            '<label for="to">To</label>' +
            '<input class="py-1 form-control " type="date" name="duration_to_PZ' + i + '"' + ' id="to" min="1900-01-01" max="9999-12-31">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Status: </span>' +
            '</div>' +
            '<select class="form-select" aria-label="Default select example" name="status_PZ' + i + '"' + '>' +
            '<option selected value="notselected">Not Selected </option>' +
            '<option value="Aufgenomen">Aufgenomen </option>' +
            '<option value="Offen">Offen</option>' +
            '<option value="Abgelehnt">Abgelehnt </option>' +
            '<option value="Zuruckgezogen">Zuruckgezogen</option>' +
            '<option value="Provisionert">Provisionert </option>' +
            '</select>' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Letze Anpassung: </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="date" name="last_adjustment_PZ' + i + '"' + ' id="" min="1900-01-01" max="9999-12-31">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Provision: </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="text" name="provision_PZ' + i + '"' + ' id="">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Gesamtprovision: </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="number" name="total_commisions_PZ' + i + '"' + ' id="">' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>');
    }
</script>

<script>
    var count = <?php echo $newNeueOfertenCount +1;?>;
    for (i = 2; i <= count; i++) {
        $("#accordionFlushExample0002").append('<div id="flush-collapse0002" class="accordion-collapse collapse" aria-labelledby="flush-heading0002" data-bs-parent="#accordionFlushExample0002">' +
            '<div class="accordion-body" style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Abschlussdatum: </span>' +
            '</div>' +
            '<input class="py-1 form-control " readonly type="date" name="graduation_date_PZ' + i + '"' + ' id="" min="1900-01-01" max="9999-12-31">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Gesellschaft: </span> </div>' +
            '<input class="py-1 form-control " readonly type="text" name="society_PZ' + i + '"' + ' id="">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Produkt </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="text" name="produkt_PZ' + i + '"' + ' id="" readonly>' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">VVG Pramie: </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="text" name="vvg_premium_PZ' + i + '"' + ' id="" readonly>' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Laufzeit: </span>' +
            '</div>' +
            '<label for="from">From</label>' +
            '<input class="py-1 form-control " readonly type="date" name="duration_from_PZ' + i + '"' + ' id="from" min="1900-01-01" max="9999-12-31">' +
            '<label for="to">To</label>' +
            '<input class="py-1 form-control " readonly type="date" name="duration_to_PZ' + i + '"' + ' id="to" min="1900-01-01" max="9999-12-31">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Status: </span>' +
            '</div>' +
            '<select class="form-select" aria-label="Default select example" disabled name="status_PZ' + i + '"' + '>' +
            '<option selected value="notselected">Not Selected </option>' +
            '<option value="Aufgenomen">Aufgenomen </option>' +
            '<option value="Offen">Offen</option>' +
            '<option value="Abgelehnt">Abgelehnt </option>' +
            '<option value="Zuruckgezogen">Zuruckgezogen</option>' +
            '<option value="Provisionert">Provisionert </option>' +
            '</select>' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Letze Anpassung: </span>' +
            '</div>' +
            '<input class="py-1 form-control " readonly type="date" name="last_adjustment_PZ' + i + '"' + ' id="" min="1900-01-01" max="9999-12-31">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Provision: </span>' +
            '</div>' +
            '<input class="py-1 form-control " readonly type="text" name="provision_PZ' + i + '"' + ' id="">' +
            '</div>' +
            '</div>' +
            '<div class="mb-3">' +
            '<div class="input-div1 input-groupp justify-content-between">' +
            '<div class="pe-3">' +
            '<span class="" style="font-size: 15px;">Gesamtprovision: </span>' +
            '</div>' +
            '<input class="py-1 form-control " type="number" name="total_commisions_PZ' + i + '"' + ' id="" readonly>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>');
    }
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function openBurgerFunct() {
        $("#bottom-burger").slideToggle();
    }
</script>
<script>
    var cntt = 0;

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

    function changecnt(x) {
        cntt = x;
    }

    function nextonee() {
        if (cntt < 5 && cntt > -1) {
            if (cntt == 0) {
                $('#nav-home-tab').addClass('active');
                $('#nav-home').addClass('active show');
                cntt++;
            }
            if (cntt == 1) {
                $('#nav-home-tab').removeClass('active');
                $('#nav-home').removeClass('active show');
                $('#nav-profile-tab').addClass('active');
                $('#nav-profile').addClass('active show');
            }
            if (cntt == 2) {
                console.log(cntt);
                $('#nav-profile-tab').removeClass('active');
                $('#nav-profile').removeClass('active show');
                $('#nav-contact-tab').addClass('active');
                $('#nav-contact').addClass('active show');
            }

            cntt++;
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
{{--@endsection--}}
{{--Mobile--}}
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
        visibility: visible;
    }

    .mobile-nav {
        display: none;
    }

    .first-col1 {
        display: block;
    }
    .activeClassNavMob__,
    .activeClassNavMob__ span,
    .activeClassNavMob__ svg {
        background-color: transparent;
        color: #4DC591 !important;
        fill: #4DC591 !important;

    }

    .activeClassNavMob__ .active-dot {
        visibility: visible;
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
    .nav-form-links button.active{
        color: #434343 !important;
    }
    .nav-form-links button:hover{
        color: #434343 !important;
        background-color: #fff !important;
    }
    .nav-form-links button:hover{
        color: #434343 !important;
    }
    .nav-form-links button{
        color:rgba(95, 95, 95, 0.8) !important;

    }
    .nav-form-links button:hover{

        background-color: transparent !important;
    }
    .nav-form-links button.active:hover{

        background-color: #fff !important;
    }
    .form-select:focus-visible {
        outline: none !important;
        box-shadow: none !important;

    }
    .nav-form-links .nav-tabs {

    }

    .form-select {
        border-radius: 10px !important;
    }

    .transparent-styling {
        background-color: transparent !important;
        border: none !important;

    }

    .transparent-styling:focus-visible {
        outline: none !important;
        box-shadow: none !important;
    }

    .btn-group label {
        box-shadow: none !important;
    }

    .input-groupp .form-control:focus {
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
        background-color: #fff;
        border: none;
        border-radius: 10px !important;
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

    .status-content {
        background-color: #fff;
        border-bottom-left-radius: 17px !important;
        border-bottom-right-radius: 17px !important;
        border-top-right-radius: 17px !important;
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

    .status-btn {
        color: black;
        font-weight: 600;
        border: none !important;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }

    .status-btn:hover {
        color: black;
    }

    .auto-btn {
        color: black;
        font-weight: 600;
        border: none !important;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }

    .auto-btn:hover {
        color: black;
    }

    .sachen-btn {
        color: black;
        font-weight: 600;
        border: none !important;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }

    .sachen-btn:hover {
        color: black;
    }

    .vorsorge-btn {
        color: black;
        font-weight: 600;
        border: none !important;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }

    .vorsorge-btn:hover {
        color: black;
    }

    .upload-box {
        background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='9' ry='9' stroke='%23333' stroke-width='3' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
        border-radius: 9px;
    }

    /*nav*/


    body {
        overflow-x: hidden;
    }

    .angaben-content {
        background-color: #EFEFEF;
        border-radius: 10px;
    }
    /*.nav-form-links .nav-tabs.active {*/
    /*    background-color: #fff !important;*/
    /*    color: #434343 !important;*/
    /*}*/
</style>

<style>
    /*nav ARti*/
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

</style>
<style>
    /*Per Notification */
    .coloriii a{
        color: black !important;
    }
</style>
