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


<body>

<div class="row g-0">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 d-flex">
        <div class="d-flex navvv" style="height: 100% !important; position: fixed; background-color: #0C71C3;">

            <div class="nav-itemsss overflow-div1" style="width:100%; background-color: #0C71C3;">
                <br>
                <div class="mx-auto">
                    <img src="../img/Logo.png" id="logo__311" style="width: 100%;" alt="">
                </div>
                <br>
                <div class="">
                    <a href="{{route('dashboard')}}" class="nav-link link-dark {{ (request()->is('/')) ? 'activeClassNav__' : '' }}" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-house"
                             viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd"
                                  d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                        <span class="ps-1 nav-texttt">Home</span>
                    </a>
                </div>
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin'))
                    <div class="">
                        <a href="{{route('tasks')}}" class="nav-link link-dark {{ (request()->is('tasks')) ? 'activeClassNav__' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                 class="bi bi-speedometer2" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                <path fill-rule="evenodd"
                                      d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                            </svg>
                            <span class="ps-1 nav-texttt">Tasks</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('salesmanager') ||Auth::guard('admins')->user()->hasRole('menagment'))
                    <div class="">
                        <a href="{{route('leads')}}" class="nav-link link-dark {{ (request()->is('leads')) ? 'activeClassNav__' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-calendar3"
                                 viewBox="0 0 16 16">
                                <path
                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                <path
                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                            <span class="ps-1 nav-texttt">Leads</span>
                        </a>
                    </div>
                @endif
                <div class="">
                    <a href="#" class="nav-link link-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-grid"
                             viewBox="0 0 16 16">
                            <path
                                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                        </svg>
                        <span class="ps-1 nav-texttt">Finance</span>
                    </a>
                </div>
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
                    <div class="">
                        <a href="{{route('status')}}" class="nav-link link-dark {{ (request()->is('status')) ? 'activeClassNav__' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                 class="bi bi-clipboard-data" viewBox="0 0 16 16">
                                <path
                                    d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                                <path
                                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                <path
                                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                            </svg>
                            <span class="ps-1 nav-texttt">Status</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->check())
                    <div class="">
                        <a href="{{route('costumers')}}" class="nav-link link-dark {{ (request()->is('costumers')) ? 'activeClassNav__' : '' }}" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                 class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <span class="ps-1 nav-texttt">Costumers</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
                    <div class="">
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-cash-coin"
                                 viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                <path
                                    d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                <path
                                    d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                            </svg>
                            <span class="ps-1 nav-texttt">Deposit</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
                    <div class="">
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-x-square"
                                 viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            <span class="ps-1 nav-texttt">Cancelations</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('salesmanager') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('admin'))
                    @if(Auth::guard('admins')->user()->hasRole('salesmanager') || Auth::guard('admins')->user()->hasRole('fs'))
                        <div class="">
                            <a href="{{route('Appointments')}}" class="nav-link link-dark {{ (request()->is('Appointments')) ? 'activeClassNav__' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                     class="bi bi-calendar-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                </svg>
                                <span class="ps-1 nav-texttt">Calendar</span>
                            </a>
                        </div>
                    @else
                        <div class="">
                            <a href="{{route('calendar')}}" class="nav-link link-dark {{ (request()->is('calendar')) ? 'activeClassNav__' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                     class="bi bi-calendar-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                </svg>
                                <span class="ps-1 nav-texttt">Calendar</span>
                            </a>
                        </div>
                    @endif

                @endif
                @if(Auth::guard('admins')->user()->hasRole('salesmanager') ||Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('admin'))
                    @if(Auth::guard('admins')->user()->hasRole('salesmanager'))
                        <div class="">
                            <a href="{{route('calendar')}}" class="nav-link link-dark {{ (request()->is('calendar')) ? 'activeClassNav__' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                     class="bi bi-calendar-date" viewBox="0 0 16 16">
                                    <path
                                        d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                </svg>
                                <span class="ps-1 nav-texttt">Dates</span>
                            </a>
                        </div>
                    @else
                        <div class="">
                            <a href="{{route('Appointments')}}" class="nav-link link-dark {{ (request()->is('Appointments')) ? 'activeClassNav__' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                     class="bi bi-calendar-date" viewBox="0 0 16 16">
                                    <path
                                        d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                </svg>
                                <span class="ps-1 nav-texttt">Dates</span>
                            </a>
                        </div>
                    @endif
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <div class="">
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-people-fill"
                                 viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd"
                                      d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg>
                            <span class="ps-1 nav-texttt">Employees</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('finance') || Auth::guard('admins')->user()->hasRole('admin'))
                    <div class="">
                        <a href="#" class="nav-link link-dark" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-percent" viewBox="0 0 16 16">
                                <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Commisions</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <div class="">
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                 class="bi bi-diagram-2-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z" />
                            </svg>
                            <span class="ps-1 nav-texttt">Prov.system</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <div class="">
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                                <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Statistics</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('finance') ||Auth::guard('admins')->user()->hasRole('admin') )
                    <div class="">
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                 class="bi bi-diagram-2-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z" />
                            </svg>
                            <span class="ps-1 nav-texttt">Trust</span>
                        </a>
                    </div>
                    <br>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin'))<div><a class="nav-link link-dark  rounded" href="{{route('addnewuser')}}"><span class="ps-1 nav-texttt">Add New User</span></a></div>@endif



                <div>
                    <a class="nav-link link-dark  rounded {{ (request()->is('rleads')) ? 'activeClassNav__' : '' }}" href="{{route('rleads')}}"><span class="ps-1 nav-texttt">Rejected Leads</span></a>
                </div>
                <div class="">
                    <a class="nav-link link-dark  rounded {{ (request()->is('rleads')) ? 'activeClassNav__' : '' }}" href="{{route('logout')}}"><span class="ps-1 nav-texttt">Sign out</span></a>
                </div>
            </div>
            <hr>
        <!-- <div class="dropdown user-drop w-100 py-3 d-flex justify-content-center" style=" background-color: #0C71C3;position: absolute; bottom:0; left:0; border: none; border-top: 1px #c4c4c4 solid;">

            <a href="#" class="d-flex align-items-center link-dark text-decoration-none " id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-chevron-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                </svg>
            </a>
            <ul class="dropdown-menu dropup text-small shadow" aria-labelledby="dropdownUser2">
                @if(Auth::guard('admins')->user()->hasRole('admin'))<li><a class="dropdown-item" href="{{route('addnewuser')}}">Add New User</a></li>@endif
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="{{route('rleads')}}">Rejected Leads</a></li>

                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{route('logout')}}">Sign out</a></li>
            </ul>
        </div> -->
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
                        <nav class="g-0">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link col active status-btn" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true" onclick="changecnt(0)">Status
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
                                <button class="nav-link col vorsorge-btn" id="nav-fourth-tab" data-bs-toggle="tab"
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
                                                 style="background-color: #EFEFEF !important;border-radius: 15px;">
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
                                                                       name="societyG" id="">
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
                                                                       name="kvg_premiumG" id="">
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
                                                                        name="statusG">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Angenommen">Angenommen</option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt</option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Aufgenomen">Aufgenomen</option>
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
                                                                       name="provisionG" id="">
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
                                                                       id="">
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
                                                                       name="societyV" id="">
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
                                                                       name="productionV" id="">
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
                                                                        name="statusV">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Angenommen">Angenommen</option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt</option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Aufgenomen">Aufgenomen</option>
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
                                                                       name="provisionV" id="">
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
                                                                       name="cidV" id="">
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
                                                 style="background-color: #EFEFEF !important;border-radius: 15px;">
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
                                                                       name="societyZ" id="">
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
                                                                       name="vvg_premiumZ" id="">
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
                                                                        name="statusZ">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Aufgenomen">Aufgenomen</option>
                                                                    <option value="Provisionert">Provisionert</option>
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
                                                                       name="provisionZ" id="">
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
                                                                       name="cidZ" id="">
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
                                                                       name="societyH" id="">
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
                                                                       name="kvg_premiumH" id="">
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
                                                                        name="statusH">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Aufgenomen">Aufgenomen</option>
                                                                    <option value="Provisionert">Provisionert</option>
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
                                                                       name="provisionH" id="">
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
                                                                       name="cidH" id="">
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
                                                                       name="productR" id="">
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
                                                                       name="durationR" id="">
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
                                                                        name="statusR">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Angenommen">Angenommen</option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt</option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Aufgenomen">Aufgenomen</option>
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
                                                                       name="provisionR" id="">
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
                                                                       name="cidR" id="">
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
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="angaben-content p-3">
                                        <div class="my-1">
                                            <label for="">Vorname:</label>
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="my-1">
                                            <label for="">Nachname:</label>
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="my-1">
                                            <label for="">Geburtstag:</label>
                                            <input type="date" name="" class="form-control" id="" min="1900-01-01"
                                                   max="9999-12-31">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">

                                    <div class="angaben-content p-3 mb-3">
                                        <div class="my-1">
                                            <label for="">Adresse: </label>
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="my-1">
                                            <label for="">Postleitzahl, Ort</label>
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="my-1">
                                            <label for="">Geburtstag:</label>
                                            <input type="date" name="" class="form-control" id="" min="1900-01-01"
                                                   max="9999-12-31">
                                        </div>
                                    </div>
                                    <div class="angaben-content p-3 ">
                                        <div class="my-1">
                                            <span class="fw-bold">Zugehörige Personen</span>
                                        </div>
                                        <div class="my-1">
                                            <label for="">Frau: </label>
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="my-1">
                                            <label for="">Kind 1:</label>
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="my-1">
                                            <label for="">Kind 2:</label>
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="my-1">
                                            <label for="">Kind 3:</label>
                                            <input type="text" name="" class="form-control" id="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">
                                    <div class="angaben-content p-3 ">
                                        <div class="my-1">
                                            <span class="fw-bold">Anhänge</span>
                                        </div>
                                        <div class="my-1">
                                            <label for="">Beratungsprotokoll: </label>
                                            <input type="text" name="" class="form-control my-1" id="">
                                            <input type="text" name="" class="form-control my-1" id="">
                                        </div>
                                        <div class="my-1">
                                            <label for="">Vorversicherungspolice</label>
                                            <input type="text" name="" class="form-control my-1" id="">
                                            <input type="text" name="" class="form-control my-1" id="">
                                        </div>
                                        <div class="my-1">
                                            <label for="">Kündigung Krankenkasse:</label>
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="my-1">
                                            <label for="">Antrag Vorsorge</label>
                                            <input type="text" name="" class="form-control" id="">
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="58.155"
                                                         height="19.159"
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
                        </div>
                        {{--                    END ANGABEN                                      --}}
                        <div class="tab-pane fade  sachen-content" id="nav-contact" role="tabpanel"
                             aria-labelledby="nav-contact-tab">
                            <div class="row mx-4">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">

                                    <div class="py-3">
                                        <div class="accordion accordion-flush" id="accordionFlushExample0006">
                                            <div class="accordion-item"
                                                 style="background-color: #EFEFEF !important;border-radius: 15px;">
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
                                                                       name="graduation_date_PG" id="" min="1900-01-01"
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
                                                                       name="society_PG" id="">
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
                                                                       name="product_PG" id="">
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
                                                                        name="status_PG">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Angenommen">Angenommen</option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt</option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Aufgenomen">Aufgenomen</option>
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
                                                                       name="last_adjustment_PG" id="" min="1900-01-01"
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
                                                                <input class="py-1 form-control " type="text"
                                                                       name="total_commisions_PG" id="">
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                                    <option value="Angenommen">Angenommen</option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt</option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Aufgenomen">Aufgenomen</option>
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
                                                                    <input class="py-1 form-control " type="text"
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
                                                 style="background-color: #EFEFEF !important;border-radius: 15px;">
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
                                                                       name="graduation_date_PZ" id="" min="1900-01-01"
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
                                                                       name="society_PZ" id="">
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
                                                                       name="produkt_PZ" id="">
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
                                                                       name="vvg_premium_PZ" id="">
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
                                                                       name="duration_from_PZ" id="from"
                                                                       min="1900-01-01" max="9999-12-31">
                                                                <label for="to">To</label>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="duration_to_PZ" id="to" min="1900-01-01"
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
                                                                        name="status_PZ">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                  <option value="Angenommen">Angenommen</option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Abgelehnt">Abgelehnt</option>
                                                                    <option value="Zuruckgezogen">Zuruckgezogen</option>
                                                                    <option value="Aufgenomen">Aufgenomen</option>
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
                                                                       name="last_adjustment_PZ" id="" min="1900-01-01"
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
                                                                       name="provision_PZ" id="">
                                                            </div>
                                                            <hr>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Produkt:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="text"
                                                                       name="produkt_PZ2" id="">
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
                                                                       name="vvg_premium_PZ2" id="">
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
                                                                <label for="from1">From</label>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="duration_from_PZ2" id="from1"
                                                                       min="1900-01-01" max="9999-12-31">
                                                                <label for="to1">To</label>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="duration_to_PZ2" id="to1" min="1900-01-01"
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
                                                                        name="status_PZ2">
                                                                    <option selected value="notselected">Not Selected
                                                                    </option>
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Aufgenomen">Aufgenomen</option>
                                                                    <option value="Provisionert">Provisionert</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="input-div1 input-groupp justify-content-between">
                                                                <div class="pe-3">
                                                                <span class="" style="font-size: 15px;">
                                                                    Letzte Anpassung:
                                                                </span>
                                                                </div>
                                                                <input class="py-1 form-control " type="date"
                                                                       name="last_adjustment_PZ2" id="" min="1900-01-01"
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
                                                                       name="provision_PZ2" id="">
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
                                                                <input class="py-1 form-control " type="text"
                                                                       name="total_commisions_PZ" id="">
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
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Aufgenomen">Aufgenomen</option>
                                                                    <option value="Provisionert">Provisionert</option>
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
                                                                <input class="py-1 form-control " type="text"
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
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Aufgenomen">Aufgenomen</option>
                                                                    <option value="Provisionert">Provisionert</option>
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
                                                                <input class="py-1 form-control " type="text"
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
                                                                    <option value="Offen">Offen</option>
                                                                    <option value="Aufgenomen">Aufgenomen</option>
                                                                    <option value="Provisionert">Provisionert</option>
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
                                                                <input class="py-1 form-control " type="text"
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
<style>
    .form-select:focus-visible {
        outline: none !important;
        box-shadow: none !important;

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

</style>
