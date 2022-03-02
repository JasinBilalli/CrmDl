<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Document</title>
    <link rel="icon" type="image/png" href="img/Favicon.png">
</head>
<style>
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

    .activeClassNav__, .activeClassNav__ span, .activeClassNav__ svg {
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

    .nav-itemsss a:focus, .nav-itemsss a:focus svg, .nav-itemsss a:focus span {
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

<body>

<div class="row" id="app">
    <div class="col-lg-2 col-md-1 col-sm-1 col-1 first-col1">
        <div class="nav-styling col-md-2 col-sm-1 col-1" style="position: fixed; top:0;left:0; ">
            <div class="d-flex align-middle" style="height: 16vh;">
            <div class="my-auto">
                        <div class="img-normal text-center mx-3">
                            <a href="{{route('dashboard')}}"><img src="{{env('APP_URL')}}/imgs/logo2.png" class="img-fluid p-1" alt=""></a>
                        </div>
                        <div class="img-collapsed text-center ">
                        <a href="{{route('dashboard')}}"><img src="{{env('APP_URL')}}/imgs/logo1.png" class="img-fluid p-2" alt=""></a>
                        </div>
                    </div>
            </div>
            <div class="column-v">

                <a href="{{route('dashboard')}}" class="nav-link {{ (request()->is('/')) ? 'activeClassNav__' : '' }}"
                   aria-current="page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-house"
                         viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd"
                              d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>
                    @php use \Illuminate\Support\Facades\Session; @endphp
                    <span class="ps-2 txt-dn">Home</span>
                </a>


                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
                Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin'))

                    <a href="{{route('tasks')}}"
                       class="nav-link {{ (request()->is('tasks')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                             class="bi bi-speedometer2" viewBox="0 0 16 16">
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                            <path fill-rule="evenodd"
                                  d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Tasks</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') ||
                Auth::guard('admins')->user()->hasRole('fs') ||
                Auth::guard('admins')->user()->hasRole('salesmanager')
                ||Auth::guard('admins')->user()->hasRole('menagment'))
                    <a href="{{route('leads')}}"
                       class="nav-link {{ (request()->is('leads')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                             class="bi bi-calendar3" viewBox="0 0 16 16">
                            <path
                                d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                            <path
                                d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Leads</span>
                    </a>
                @endif
                <a href="#" class="nav-link ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-grid"
                         viewBox="0 0 16 16">
                        <path
                            d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                    </svg>
                    <span class="ps-2 txt-dn">Finance</span>
                </a>
                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
                Auth::guard('admins')->user()->hasRole('admin'))

                    <a href="{{route('status')}}"
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
                    </a>
                @endif
                @if(Auth::guard('admins')->check())
                    <a href="{{route('costumers')}}"
                       class="nav-link {{ (request()->is('costumers')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                             class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd"
                                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Costumers</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                    <a href="#" class="nav-link ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                             class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                            <path
                                d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                            <path
                                d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Deposit</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('backoffice') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                    <a href="#" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                             class="bi bi-x-square" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Cancelations</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('fs') ||
                Auth::guard('admins')->user()->hasRole('salesmanager') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                    <a href="{{route('Appointments')}}"
                       class="nav-link  {{ (request()->is('Appointments')) ? 'activeClassNav__' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                             class="bi bi-calendar-check" viewBox="0 0 16 16">
                            <path
                                d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Calendar</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <a href="#" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                             class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd"
                                  d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Employees</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('finance') ||
                Auth::guard('admins')->user()->hasRole('admin'))
                    <a href="#" class="nav-link ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-percent"
                             viewBox="0 0 16 16">
                            <path
                                d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Commisions</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <a href="#" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                             class="bi bi-diagram-2-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Prov.system</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') ||
                Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <a href="#" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                             class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                            <path
                                d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Statistics</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('menagment') ||
                Auth::guard('admins')->user()->hasRole('finance')
                ||Auth::guard('admins')->user()->hasRole('admin') )
                    <a href="#" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                             class="bi bi-diagram-2-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z"/>
                        </svg>
                        <span class="ps-2 txt-dn">Trust</span>
                    </a>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin'))
                    <a class="nav-link" href="{{route('addnewuser')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                             fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                            <path fill-rule="evenodd"
                                                  d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
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
        <form method="post" enctype="multipart/form-data" id="forma">
            @csrf

            <input type="hidden" name="newgcount" id="newgcount"
                   value="{{\App\Models\newgegen::where('person_id',$id)->count()}}">
            <input type="hidden" name="newncount" id="newncount"
                   value="{{\App\Models\newnue::where('person_id',$id)->count()}}">
            <input type="hidden" name="nofert" id="nofert">
            <input type="hidden" name="gofert" id="gofert">
            <div class="my-1 my-sm-5 mx-0 mx-sm-4">
                <div class="form-styling" style="background-color: #EFEFEF;">
                    <div class="py-4 px-3">
                    <span class="fs-4 input-group">
                                <div class="pe-3">
                                    <a href="{{URL::previous()}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black"
                                             class="bi bi-chevron-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                        </svg>
                                    </a>
                                </div>
                                {{$lead->first_name}}
                            </span<br>
                        <span class="fs-6 text-muted">
                                {{$lead->address}}
                            </span>
                    </div>
                    <div class="row mx-2 mx-sm-4">
                        <nav class="g-0 nav-form-links">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active col krankenkasse-btn" id="nav-home-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true"
                                        onclick="changecnt(0)"><span class="desk-t">Krankenkasse</span><span
                                        class="mobile-t">KK</span>
                                    <div><span class="mobile-t" style="font-size: 10px;">KK</span></div>
                                </button>
                                <button class="nav-link col auto-btn" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false" onclick="changecnt(1)"><span
                                        class="desk-t">Auto</span><span class="mobile-t">A</span>
                                    <div><span class="mobile-t" style="font-size: 10px;">Auto</span></div>
                                </button>
                                <button class="nav-link  col sachen-btn" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false" onclick="changecnt(2)"><span
                                        class="desk-t">Vorsorge</span><span class="mobile-t">V</span>
                                    <div><span class="mobile-t" style="font-size: 10px;">Vorsage</span></div>
                                </button>
                                <button class="nav-link  col vorsorge-btn" id="nav-fourth-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth"
                                        aria-selected="false" onclick="changecnt(3)"><span
                                        class="desk-t">Sachen</span><span class="mobile-t">S</span>
                                    <div><span class="mobile-t" style="font-size: 10px;">Sachen</span></div>
                                </button>
                            </div>
                        </nav>
                    </div>
                    <div class="tab-content mx-2 mx-sm-4 pb-3" id="nav-tabContent">
                        <div class="tab-pane fade show active krankenkasse-content mb-3" id="nav-home"
                             role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row mx-2 mx-sm-4">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                                    <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="py-2 px-2">
                                            <div class="row mx-2">
                                                <div class="col-7 d-flex g-0">
                                                    <div class="">
                                                            <span class="fw-bold" style=" font-size: 12px;">
                                                                Vorversicherer
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="col g-0 d-flex justify-content-end">
                                                    <div class="select-div text-end">
                                                      <select class="fw-bold" id=""  style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;" name="vorversicherer_select">
                                                      @php $data->datakk = \App\Models\LeadDataKK::where('person_id',$id)->latest()->first() @endphp
                                                          @if(isset($data->datakk->vorversicherer_select))
                                                            <option value="{{$data->datakk->vorversicherer_select}}" selected>{{$data->datakk->vorversicherer_select}}</option>
                                                            <option value="Ja">Ja</option>
                                                            <option value="Nein">Nein</option>
                                                          @else
                                                              <option selected>Select</option>
                                                              <option value="Ja">Ja</option>
                                                              <option value="Nein">Nein</option>
                                                          @endif
                                                      </select>
                                                    </div>
                                                  </div>
                                            </div>
                                            <div class="upload-box mx-1 my-2">
                                                <div class="mx-1 my-2 p-4 text-center">
                                                    <label for="file-input-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53"
                                                             height="53" viewBox="0 0 53 53">
                                                            <g id="Group_621" data-name="Group 621"
                                                               transform="translate(-78.283 -14.777)">
                                                                <circle id="Ellipse_31" data-name="Ellipse 31"
                                                                        cx="26.5" cy="26.5" r="26.5"
                                                                        transform="translate(78.283 14.777)"
                                                                        fill="#5f5f5f"/>
                                                                <g id="Group_326" data-name="Group 326"
                                                                   transform="translate(95.656 31.893)">
                                                                    <path id="Path_234" data-name="Path 234"
                                                                          d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                          transform="translate(0 1.82)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                    <path id="Path_235" data-name="Path 235"
                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                          transform="translate(0.92 0)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </label>

                                                    @if(isset($data->datakk->pre_insurer))
                                                        <input type="file" name="pre_insurer"
                                                               value="{{$data->datakk->pre_insurer}}" id="file-input-0"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this)">
                                                        <a style="text-decoration: none"
                                                           href="{{route('showfile',$data->datakk->pre_insurer)}}"><input
                                                                type="text" class="form-control text-center"
                                                                id="file-input-0c" disabled
                                                                style="background:none; border:none;"
                                                                value="{{$data->datakk->pre_insurer}}"></a>
                                                    @else
                                                        <input type="file" name="pre_insurer" id="file-input-0"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this)">
                                                        <input type="text" class="form-control text-center"
                                                               id="file-input-0c" disabled
                                                               style="background:none; border:none;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                                    <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="py-2 px-2">
                                            <div class="row mx-2">
                                                <div class="col-7 d-flex g-0">
                                                    <div class="">
                                                            <span class="fw-bold" style="font-size: 12px;">
                                                                ID Notwending
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="col g-0 d-flex justify-content-end">
                                                    <div class="select-div text-end">
                                                      <select class="fw-bold" id="" style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;" name="id_notwending_select">
                                                          @if(isset($data->datakk->id_notwending_select))
                                                            <option value="{{$data->datakk->id_notwending_select}}" selected>{{$data->datakk->id_notwending_select}}</option>
                                                            <option value="Ja">Ja</option>
                                                            <option value="Nein">Nein</option>
                                                          @else
                                                              <option selected>Select</option>
                                                              <option value="Ja">Ja</option>
                                                              <option value="Nein">Nein</option>
                                                          @endif
                                                      </select>
                                                    </div>
                                                  </div>
                                            </div>
                                            <div class="upload-box mx-1 my-2">
                                                <div class="mx-1 my-2 p-4 text-center">
                                                    <label for="file-input-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53"
                                                             height="53" viewBox="0 0 53 53">
                                                            <g id="Group_621" data-name="Group 621"
                                                               transform="translate(-78.283 -14.777)">
                                                                <circle id="Ellipse_31" data-name="Ellipse 31"
                                                                        cx="26.5" cy="26.5" r="26.5"
                                                                        transform="translate(78.283 14.777)"
                                                                        fill="#5f5f5f"/>
                                                                <g id="Group_326" data-name="Group 326"
                                                                   transform="translate(95.656 31.893)">
                                                                    <path id="Path_234" data-name="Path 234"
                                                                          d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                          transform="translate(0 1.82)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                    <path id="Path_235" data-name="Path 235"
                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                          transform="translate(0.92 0)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </label>

                                                    @if(isset($data->datakk->id_required))
                                                        <input type="file" id="file-input-1"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this);"
                                                               value="{{$data->datakk->id_required}}"
                                                               name="id_required">
                                                        <a style="text-decoration: none"
                                                           href="{{route('showfile',$data->datakk->id_required)}}">
                                                            <input type="text" class="form-control text-center"
                                                                   id="file-input-1c" disabled
                                                                   style="background:none; border:none;"
                                                                   value="{{$data->datakk->id_required}}"></a>
                                                    @else
                                                        <input type="file" id="file-input-1"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this);"
                                                               name="id_required">
                                                        <input type="text" class="form-control text-center"
                                                               id="file-input-1c" disabled
                                                               style="background:none; border:none;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                                    <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="py-2 px-2">
                                            <div class="row mx-2">
                                                <div class="col-8 g-0 d-flex">
                                                    <div class="text-nowrap">
                                                            <span class="fw-bold" style=" font-size: 12px;">
                                                                Kundingung durch
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="col g-0 d-flex justify-content-end">
                                                    <div class="select-div text-end">
                                                      <select class="fw-bold" id="" style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;" name="kundingung_durch_select">
                                                          @if(isset($data->datakk->kundingung_durch_select))
                                                            <option value="{{$data->datakk->kundingung_durch_select}}" selected>{{$data->datakk->kundingung_durch_select}}</option>
                                                            <option value="DLF">DLF</option>
                                                            <option value="Kunden">Kunden</option>
                                                          @else
                                                              <option selected>Select</option>
                                                              <option value="DLF">DLF</option>
                                                              <option value="Kunden">Kunden</option>
                                                          @endif
                                                      </select>
                                                    </div>
                                                  </div>
                                            </div>
                                            <div class="upload-box mx-1 my-2">
                                                <div class="mx-1 my-2 p-4 text-center">
                                                    <label for="file-input-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53"
                                                             height="53" viewBox="0 0 53 53">
                                                            <g id="Group_621" data-name="Group 621"
                                                               transform="translate(-78.283 -14.777)">
                                                                <circle id="Ellipse_31" data-name="Ellipse 31"
                                                                        cx="26.5" cy="26.5" r="26.5"
                                                                        transform="translate(78.283 14.777)"
                                                                        fill="#5f5f5f"/>
                                                                <g id="Group_326" data-name="Group 326"
                                                                   transform="translate(95.656 31.893)">
                                                                    <path id="Path_234" data-name="Path 234"
                                                                          d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                          transform="translate(0 1.82)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                    <path id="Path_235" data-name="Path 235"
                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                          transform="translate(0.92 0)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </label>
                                                    @if(isset($data->datakk->notice_by))
                                                        <input type="file" id="file-input-2"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this);"
                                                               name="notice_by" value="{{$data->datakk->notice_by}}">
                                                        <a style="text-decoration: none"
                                                           href="{{route('showfile',$data->datakk->notice_by)}}">
                                                            <input type="text" class="form-control text-center"
                                                                   id="file-input-2c" disabled
                                                                   style="background:transparent; border:none;"
                                                                   value="{{$data->datakk->notice_by}}"></a>
                                                    @else
                                                        <input type="file" id="file-input-2"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this);"
                                                               name="notice_by">
                                                        <input type="text" class="form-control text-center"
                                                               id="file-input-2c" disabled
                                                               style="background:transparent; border:none;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                                    <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="py-2 px-2">
                                            <div class="row mx-2">
                                                <div class="col-7 d-flex g-0">
                                                    <div class="">
                                                            <span class="fw-bold" style=" font-size: 12px;">
                                                                Vollmacht
                                                            </span>
                                                    </div>
                                                </div>
                                                 <div class="col g-0 d-flex justify-content-end">
                                                    <div class="select-div text-end ">
                                                      <select class="fw-bold" id="" style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;" name="vollmacht_select">
                                                          @if(isset($data->datakk->vollmacht_select))
                                                              <option value="{{$data->datakk->vollmacht_select}}" selected>{{$data->datakk->vollmacht_select}}</option>
                                                              <option value="Ja">Ja</option>
                                                              <option value="Nein">Nein</option>
                                                          @else
                                                              <option selected>Select</option>
                                                              <option value="Ja">Ja</option>
                                                              <option value="Nein">Nein</option>
                                                          @endif
                                                      </select>
                                                    </div>
                                                  </div>
                                            </div>
                                            <div class="upload-box mx-1 my-2">
                                                <div class="mx-1 my-2 p-4 text-center">
                                                    <label for="file-input-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53"
                                                             height="53" viewBox="0 0 53 53">
                                                            <g id="Group_621" data-name="Group 621"
                                                               transform="translate(-78.283 -14.777)">
                                                                <circle id="Ellipse_31" data-name="Ellipse 31"
                                                                        cx="26.5" cy="26.5" r="26.5"
                                                                        transform="translate(78.283 14.777)"
                                                                        fill="#5f5f5f"/>
                                                                <g id="Group_326" data-name="Group 326"
                                                                   transform="translate(95.656 31.893)">
                                                                    <path id="Path_234" data-name="Path 234"
                                                                          d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                          transform="translate(0 1.82)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                    <path id="Path_235" data-name="Path 235"
                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                          transform="translate(0.92 0)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </label>
                                                    @if(isset($data->datakk->power_of_attorney))
                                                        <input type="file" id="file-input-3"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this);"
                                                               name="power_of_attorney"
                                                               value="{{$data->datakk->power_of_attorney}}">
                                                        <a style="text-decoration: none"
                                                           href="{{route('showfile',$data->datakk->power_of_attorney)}}">
                                                            <input type="text" class="form-control text-center"
                                                                   id="file-input-3c" disabled
                                                                   style="background:transparent; border:none;"
                                                                   value="{{$data->datakk->power_of_attorney}}"></a>
                                                    @else
                                                        <input type="file" id="file-input-3"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this);"
                                                               name="power_of_attorney">
                                                        <input type="text" class="form-control text-center"
                                                               id="file-input-3c" disabled
                                                               style="background:transparent; border:none;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($mandatiert)
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4" id="mandat">
                                        <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                            <div class="py-2 px-2">
                                                <div class="row mx-2">
                                                    <div class="col-7 d-flex g-0">
                                                        <div class="">
                                                            <span class="fw-bold" style=" font-size: 12px;">
                                                                Mandatiert
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col g-0 d-flex justify-content-end">
                                                      <div class="select-div text-end">
                                                        <select onchange="msheleqeta();"  class="fw-bold" id="manval"  style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                          <option selected>Select</option>
                                                          <option value="Yes">Ja</option>
                                                          <option value="No">Nein</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="upload-box mx-1 my-2">
                                                    <div class="mx-1 my-2 p-4 text-center">
                                                        <label for="file-input-9">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="53"
                                                                 height="53" viewBox="0 0 53 53">
                                                                <g id="Group_621" data-name="Group 621"
                                                                   transform="translate(-78.283 -14.777)">
                                                                    <circle id="Ellipse_31" data-name="Ellipse 31"
                                                                            cx="26.5" cy="26.5" r="26.5"
                                                                            transform="translate(78.283 14.777)"
                                                                            fill="#5f5f5f"/>
                                                                    <g id="Group_326" data-name="Group 326"
                                                                       transform="translate(95.656 31.893)">
                                                                        <path id="Path_234" data-name="Path 234"
                                                                              d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                              transform="translate(0 1.82)" fill="#fff"
                                                                              stroke="#fff" stroke-width="0.5"/>
                                                                        <path id="Path_235" data-name="Path 235"
                                                                              d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                              transform="translate(0.92 0)" fill="#fff"
                                                                              stroke="#fff" stroke-width="0.5"/>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </label>
                                                        <input type="file" name="mandatiert" id="file-input-9"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this)">
                                                        <a href="{{route('showfile',$mandatierturl)}}"
                                                           target="_blank"><input type="text"
                                                                                  class="form-control text-center"
                                                                                  id="file-input-9c" disabled
                                                                                  style="background:none; border:none;"
                                                                                  value="{{$mandatierturl}}"></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4" id="mandat">
                                        <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                            <div class="py-2 px-2">
                                                <div class="row mx-2">
                                                    <div class="col-7 d-flex g-0">
                                                        <div class="">
                                                            <span class="fw-bold" style=" font-size: 12px;">
                                                                Mandatiert
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col g-0 d-flex justify-content-end">
                                                        <div class="select-div text-end">
                                                            <select onchange="msheleqeta();"  class="fw-bold" id="manval"  style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                                <option selected>Select</option>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="53"
                                                                 height="53" viewBox="0 0 53 53">
                                                                <g id="Group_621" data-name="Group 621"
                                                                   transform="translate(-78.283 -14.777)">
                                                                    <circle id="Ellipse_31" data-name="Ellipse 31"
                                                                            cx="26.5" cy="26.5" r="26.5"
                                                                            transform="translate(78.283 14.777)"
                                                                            fill="#5f5f5f"/>
                                                                    <g id="Group_326" data-name="Group 326"
                                                                       transform="translate(95.656 31.893)">
                                                                        <path id="Path_234" data-name="Path 234"
                                                                              d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                              transform="translate(0 1.82)" fill="#fff"
                                                                              stroke="#fff" stroke-width="0.5"/>
                                                                        <path id="Path_235" data-name="Path 235"
                                                                              d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                              transform="translate(0.92 0)" fill="#fff"
                                                                              stroke="#fff" stroke-width="0.5"/>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </label>
                                                        <input type="file" name="mandatiert" id="file-input-9"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this)">
                                                        <input type="text" class="form-control text-center"
                                                               id="file-input-9c" disabled
                                                               style="background:none; border:none;">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="text-center mt-3 pb-3">
                                <div class="row mx-2 mx-sm-4">
                                    @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice'))
                                        <addtask2 url="{{config('app.url')}}" :client_id="{{$lead->id}}"
                                                  :lead_id="{{$lead->lead->id}}" :admin_id="{{$admin_id}}"></addtask2>
                                    @endif
                                    <div class="text-center mt-3 pb-3">
                                        <div class="row">
                                            <div class="col g-0 text-end my-auto">
                                                <div class="">
                                                    <span id="nextonee__" onclick="nextonee()" class="pe-2" style="color: #9F9F9F; cursor: pointer">
                                                        Uberspringen
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col g-0 text-start">
                                                <div id="buton">
                                                    <button class="px-5 py-2" type="button"
                                                            style="border: none; border-radius: 9px; background-color:#285F52;"
                                                            id="nextonee__" onclick="nextonee()">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="58.155"
                                                             height="19.159" viewBox="0 0 58.155 19.159">
                                                            <g id="Group_453" data-name="Group 453"
                                                               transform="translate(0.004)">
                                                                <line id="Line_16" data-name="Line 16" x2="51.954"
                                                                      y2="0.2"
                                                                      transform="translate(0 9.287)" fill="none"
                                                                      stroke="#3fd599" stroke-width="2"/>
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
                        </div>

                        <div class="tab-pane fade auto-content" id="nav-profile" role="tabpanel"
                             aria-labelledby="nav-profile-tab">
                            <div class="row mx-2 mx-sm-4">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 my-4 ">
                                    <div class="accordion accordion-flush" id="accordionFlushExample1">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button id="button1" class="accordion-button collapsed"
                                                        type="button" data-bs-toggle="collapse" onclick="hideSpan();"
                                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                        aria-controls="flush-collapseOne"
                                                        style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                                                <span class="fs-6" id="title-span"
                                                                      style="font-weight: 600;">
                                                                    Gegenofferte?
                                                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                                                <span class="" style="font-size: 13px;">
                                                                    Bestelle eine Gegenofferte
                                                                    für eine bestehende Autoversicherung
                                                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingOne"
                                                 data-bs-parent="#accordionFlushExample1">
                                                <div class="accordion-body" id="shtogegen"
                                                     style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="">
                                                                <span class="" style="font-size: 13px;">
                                                                    Police Hochladen:
                                                                </span>
                                                        </div>
                                                        <div class="">
                                                            <div class="upload-box mx-1 my-2">
                                                                <div class="mx-1 my-2 p-4 text-center">
                                                                    <label for="file-input-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="53" height="53"
                                                                             viewBox="0 0 53 53">
                                                                            <g id="Group_621" data-name="Group 621"
                                                                               transform="translate(-78.283 -14.777)">
                                                                                <circle id="Ellipse_31"
                                                                                        data-name="Ellipse 31" cx="26.5"
                                                                                        cy="26.5" r="26.5"
                                                                                        transform="translate(78.283 14.777)"
                                                                                        fill="#5f5f5f"/>
                                                                                <g id="Group_326"
                                                                                   data-name="Group 326"
                                                                                   transform="translate(95.656 31.893)">
                                                                                    <path id="Path_234"
                                                                                          data-name="Path 234"
                                                                                          d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                                          transform="translate(0 1.82)"
                                                                                          fill="#fff" stroke="#fff"
                                                                                          stroke-width="0.5"/>
                                                                                    <path id="Path_235"
                                                                                          data-name="Path 235"
                                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                                          transform="translate(0.92 0)"
                                                                                          fill="#fff" stroke="#fff"
                                                                                          stroke-width="0.5"/>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                    </label>
                                                                    @if(isset($data->fahrzeug->upload_police))
                                                                        <input type="file" id="file-input-4"
                                                                               name="upload_policeFahrzeug"
                                                                               class="svg-div w-100 border-0  g-0"
                                                                               onchange="upload(this);"
                                                                               value="{{$data->fahrzeug->upload_police}}"
                                                                        >
                                                                        <a style="text-decoration: none"
                                                                           href="{{route('showfile',$data->fahrzeug->upload_police)}}">
                                                                            <input type="text"
                                                                                   class="form-control text-center"
                                                                                   id="file-input-4c" disabled
                                                                                   style="background:transparent; border:none;"
                                                                                   value="{{$data->fahrzeug->upload_police}}"
                                                                            >
                                                                        </a>
                                                                    @else
                                                                        <input type="file" id="file-input-4"
                                                                               name="upload_policeFahrzeug"
                                                                               class="svg-div w-100 border-0  g-0"
                                                                               onchange="upload(this);">
                                                                        <input type="text"
                                                                               class="form-control text-center"
                                                                               id="file-input-4c" disabled
                                                                               style="background:transparent; border:none;">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="row mx-2">
                                                                <div class="col-5 d-flex g-0">
                                                                    <div class="text-nowrap">
                                                                            <span class="fw-bold"
                                                                                  style=" font-size: 12px;">
                                                                                Vergleichsart:
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col g-0 d-flex justify-content-end">
                                                                    <div class="select-div text-end ">
                                                                        <select name="vergleichsart_select" class="fw-bold" id="" style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                                            @if(isset($data->fahrzeug->vergleichsart_select))
                                                                                <option value="{{$data->fahrzeug->vergleichsart_select}}" selected>
                                                                                    {{$data->fahrzeug->vergleichsart_select}}
                                                                                </option>
                                                                                <option value="1:0 Deckung">1:0 Deckung</option>
                                                                                <option value="0:1 Deckung">0:1 Deckung</option>
                                                                                <option value="1:1 Deckung">1:1 Deckung</option>
                                                                            @else
                                                                                <option selected>Select</option>
                                                                                <option value="1:0 Deckung">1:0 Deckung</option>
                                                                                <option value="0:1 Deckung">0:1 Deckung</option>
                                                                                <option value="1:1 Deckung">1:1 Deckung</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="mb-3 mt-3">
                                                                <label for="exampleFormControlTextarea1"
                                                                       class="form-label"
                                                                       style="font-size: 13px;">Kommentar</label>
                                                                @if(isset($data->fahrzeug->comment))
                                                                    <textarea name="commentFahrenzug"
                                                                              class="form-control"
                                                                              id="exampleFormControlTextarea1"
                                                                              rows="3">{{$data->fahrzeug->comment}}</textarea>
                                                                @else
                                                                    <textarea name="commentFahrenzug"
                                                                              class="form-control"
                                                                              id="exampleFormControlTextarea1"
                                                                              rows="3"></textarea>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        @if(!Auth::user()->hasRole('fs'))
                                                    <div class="col-12">Offer:
                                                                <div class="text-start">
                                                                    <div class="upload-box mx-1 my-2">
                                                                        <div class="mx-1 my-2 text-center p-3">
                                                                            <label for="file-input-212121ww">
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
                                                                                 @if(isset($data->fahrzeug->offer))

                                                                            <a target="_blank" href="{{route('showfile',$data->fahrzeug->offer)}}"><input type="file" id="file-input-212121ww" class="svg-div w-100 border-0  g-0" onchange="upload(this);" name="offer">
                                                                            <input type="text" value="{{$data->fahrzeug->offer}}" class="form-control text-center" id="file-input-212121wwc" disabled style="background:transparent; border:none;">
                                                                            </a>
                                                                            @else
                                                                            <input type="file" id="file-input-212121ww" class="svg-div w-100 border-0  g-0" onchange="upload(this);" name="offer">
                                                                            <input type="text" class="form-control text-center" id="file-input-212121wwc" disabled style="background:transparent; border:none;">
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    @endif

                                                    </div>
                                                    @php $gcnt = 1; @endphp
                                                    @foreach(\App\Models\newgegen::where('person_id',$id)->get() as $data)
                                                        <div id="g{{$gcnt}}">
                                                            <div class="text-end mb-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" fill="currentColor"
                                                                     class="bi bi-x-circle" viewBox="0 0 16 16"
                                                                     style="cursor:pointer;"
                                                                     onclick="deletethat2('{{$gcnt}}','{{$data->id}}')">
                                                                    <path
                                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                    <path
                                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                                </svg>
                                                            </div>
                                                            <div class="">
                                                                <span class="" style="font-size: 13px;">
                                                                    Police Hochladen:
                                                                </span>
                                                            </div>
                                                            <div class="">
                                                                <div class="upload-box mx-1 my-2">
                                                                    <div class="mx-1 my-2 p-4 text-center">
                                                                        <label for="file-input-4{{$gcnt}}">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="53" height="53"
                                                                                 viewBox="0 0 53 53">
                                                                                <g id="Group_621" data-name="Group 621"
                                                                                   transform="translate(-78.283 -14.777)">
                                                                                    <circle id="Ellipse_31"
                                                                                            data-name="Ellipse 31"
                                                                                            cx="26.5"
                                                                                            cy="26.5" r="26.5"
                                                                                            transform="translate(78.283 14.777)"
                                                                                            fill="#5f5f5f"/>
                                                                                    <g id="Group_326"
                                                                                       data-name="Group 326"
                                                                                       transform="translate(95.656 31.893)">
                                                                                        <path id="Path_234"
                                                                                              data-name="Path 234"
                                                                                              d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                                              transform="translate(0 1.82)"
                                                                                              fill="#fff" stroke="#fff"
                                                                                              stroke-width="0.5"/>
                                                                                        <path id="Path_235"
                                                                                              data-name="Path 235"
                                                                                              d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                                              transform="translate(0.92 0)"
                                                                                              fill="#fff" stroke="#fff"
                                                                                              stroke-width="0.5"/>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </label>
                                                                        @if(isset($data->upload_policeFahrzeug))
                                                                            <input type="file"
                                                                                   id="file-input-4{{$gcnt}}"
                                                                                   name="upload_policeFahrzeug{{$gcnt}}"
                                                                                   class="svg-div w-100 border-0  g-0"
                                                                                   onchange="upload(this);"
                                                                                   value="{{$data->upload_policeFahrzeug}}"
                                                                            >
                                                                            <a style="text-decoration: none"
                                                                               href="{{route('showfile',$data->upload_policeFahrzeug)}}">
                                                                                <input type="text"
                                                                                       class="form-control text-center"
                                                                                       id="file-input-4{{$gcnt}}c"
                                                                                       disabled
                                                                                       style="background:transparent; border:none;"
                                                                                       value="{{$data->upload_policeFahrzeug}}"
                                                                                >
                                                                            </a>
                                                                        @else
                                                                            <input type="file"
                                                                                   id="file-input-4{{$gcnt}}"
                                                                                   name="upload_policeFahrzeug{{$gcnt}}"
                                                                                   class="svg-div w-100 border-0  g-0"
                                                                                   onchange="upload(this);">
                                                                            <input type="text"
                                                                                   class="form-control text-center"
                                                                                   id="file-input-4{{$gcnt}}c" disabled
                                                                                   style="background:transparent; border:none;">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div class="row mx-2">
                                                                    <div class="col-5 d-flex g-0">
                                                                        <div class="text-nowrap">
                                                                            <span class="fw-bold"
                                                                                  style=" font-size: 12px;">
                                                                                Vergleichsart:
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col g-0 d-flex justify-content-end">
                                                                        <div class="select-div text-end ">
                                                                            <select name="vergleichsart_select{{$gcnt}}"
                                                                                    class="fw-bold" id=""
                                                                                    style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                                                @if(isset($data->vergleichsart_select))
                                                                                    <option value="{{$data->vergleichsart_select}}" selected>
                                                                                        {{$data->vergleichsart_select}}
                                                                                    </option>
                                                                                    <option value="1:0 Deckung">1:0 Deckung</option>
                                                                                    <option value="0:1 Deckung">0:1 Deckung</option>
                                                                                    <option value="1:1 Deckung">1:1 Deckung</option>
                                                                                @else
                                                                                    <option selected>Select</option>
                                                                                    <option value="1:0 Deckung">1:0 Deckung</option>
                                                                                    <option value="0:1 Deckung">0:1 Deckung</option>
                                                                                    <option value="1:1 Deckung">1:1 Deckung</option>
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div class="mb-3 mt-3">
                                                                    <label for="exampleFormControlTextarea1"
                                                                           class="form-label"
                                                                           style="font-size: 13px;">Kommentar</label>
                                                                    @if(isset($data->commentFahrenzug))
                                                                        <textarea name="commentFahrenzug{{$gcnt}}"
                                                                                  class="form-control"
                                                                                  id="exampleFormControlTextarea1"
                                                                                  rows="3">{{$data->commentFahrenzug}}</textarea>
                                                                    @else
                                                                        <textarea name="commentFahrenzug{{$gcnt}}"
                                                                                  class="form-control"
                                                                                  id="exampleFormControlTextarea1"
                                                                                  rows="3"></textarea>
                                                                    @endif
                                                                </div>
                                                            </div>


                                                        </div>
                                                        @if(!Auth::user()->hasRole('fs'))
                                                            <div class="col-12" id="of{{$gcnt}}">Offer:
                                                                <div class="text-start">
                                                                    <div class="upload-box mx-1 my-2">
                                                                        <div class="mx-1 my-2 text-center p-3">
                                                                            <label for="file-input-{{$gcnt}}ww">
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
                                                                            @if(isset($data->offer))

                                                                                <a target="_blank" href="{{route('showfile',$data->offer)}}"><input type="file" id="file-input-{{$gcnt}}ww" class="svg-div w-100 border-0  g-0" onchange="upload(this);" name="offer{{$gcnt}}">
                                                                                    <input type="text" value="{{$data->offer}}" class="form-control text-center" id="file-input-{{$gcnt}}wwc" disabled style="background:transparent; border:none;">

                                                                                </a>
                                                                            @else
                                                                                <input type="file"
                                                                                       id="file-input-{{$gcnt}}ww"
                                                                                       class="svg-div w-100 border-0  g-0"
                                                                                       onchange="upload(this);"
                                                                                       name="offer{{$gcnt}}">
                                                                                <input type="text"
                                                                                       class="form-control text-center"
                                                                                       id="file-input-{{$gcnt}}wwc" disabled
                                                                                       style="background:transparent; border:none;">
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @php $gcnt++ @endphp
                                                                @endif
                                                            </div>
                                                                @endforeach
                                                    <div class="text-center mt-3" style="margin-top: -30px" id="add_g"
                                                         onclick="addanother_item_g()">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.694"
                                                             height="37.694"
                                                             viewBox="0 0 37.694 37.694" style="cursor:pointer;">
                                                            <g id="Group_621" data-name="Group 621"
                                                               transform="translate(-663.236 -976.679)">
                                                                <g id="Group_550" data-name="Group 550"
                                                                   transform="translate(663.236 976.679)">
                                                                    <rect id="Rectangle_9" data-name="Rectangle 9"
                                                                          width="37.694" height="37.694" rx="18.847"
                                                                          fill="#C8C8C8"/>
                                                                    <g id="Group_42" data-name="Group 42"
                                                                       transform="translate(12.724 12.724)">
                                                                        <line id="Line_11" data-name="Line 11"
                                                                              y2="11.972"
                                                                              transform="translate(5.986 0)" fill="none"
                                                                              stroke="#fff" stroke-linecap="round"
                                                                              stroke-width="2"/>
                                                                        <line id="Line_12" data-name="Line 12"
                                                                              x1="11.972"
                                                                              transform="translate(0 5.634)" fill="none"
                                                                              stroke="#fff" stroke-linecap="round"
                                                                              stroke-width="2"/>
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
                                @php $data->fahrzeug = \App\Models\LeadDataFahrzeug::where('person_id',$id)->latest()->first() @endphp
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 my-4">
                                    <div class="accordion accordion-flush" id="accordionFlushExample2">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                        aria-expanded="false" aria-controls="flush-collapseOne"
                                                        style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                                                <span class="fs-6" id="title-span"
                                                                      style="font-weight: 600;">
                                                                    Neues Fahrzeug
                                                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                                                <span class="" style="font-size: 13px;">
                                                                    Bestelle eine Offerte für ein neu einzulösendes
                                                                    Fahrzeug.
                                                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingTwo"
                                                 data-bs-parent="#accordionFlushExample2">
                                                <div class="accordion-body"
                                                     style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;"
                                                     id="shtonew">
                                                    <div class="">

                                                        <div class="row">
                                                            <div
                                                                class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="my-3">
                                                                    <div class="">
                                                                        <div class="">
                                                                                <span class="">
                                                                                    Fahrzeugausweis hochladen
                                                                                </span>
                                                                        </div>
                                                                        <div class="upload-box mx-1 my-2">
                                                                            <div class="mx-1 my-2 p-4 text-center">
                                                                                <label for="file-input-5">
                                                                                    <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="53" height="53"
                                                                                        viewBox="0 0 53 53">
                                                                                        <g id="Group_621"
                                                                                           data-name="Group 621"
                                                                                           transform="translate(-78.283 -14.777)">
                                                                                            <circle id="Ellipse_31"
                                                                                                    data-name="Ellipse 31"
                                                                                                    cx="26.5" cy="26.5"
                                                                                                    r="26.5"
                                                                                                    transform="translate(78.283 14.777)"
                                                                                                    fill="#5f5f5f"/>
                                                                                            <g id="Group_326"
                                                                                               data-name="Group 326"
                                                                                               transform="translate(95.656 31.893)">
                                                                                                <path id="Path_234"
                                                                                                      data-name="Path 234"
                                                                                                      d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                                                      transform="translate(0 1.82)"
                                                                                                      fill="#fff"
                                                                                                      stroke="#fff"
                                                                                                      stroke-width="0.5"/>
                                                                                                <path id="Path_235"
                                                                                                      data-name="Path 235"
                                                                                                      d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                                                      transform="translate(0.92 0)"
                                                                                                      fill="#fff"
                                                                                                      stroke="#fff"
                                                                                                      stroke-width="0.5"/>
                                                                                            </g>
                                                                                        </g>
                                                                                    </svg>
                                                                                </label>
                                                                                @if(isset($data->fahrzeug->vehicle_id))
                                                                                    <input type="file" id="file-input-5"
                                                                                           class="svg-div w-100 border-0  g-0"
                                                                                           onchange="upload(this);"
                                                                                           value="{{$data->fahrzeug->vehicle_id}}"
                                                                                           name="vehicle_id">
                                                                                    <a style="text-decoration: none"
                                                                                       href="{{route('showfile',$data->fahrzeug->vehicle_id)}}">
                                                                                        <input type="text"
                                                                                               class="form-control text-center"
                                                                                               id="file-input-5c"
                                                                                               disabled
                                                                                               style="background:transparent; border:none;"
                                                                                               value="{{$data->fahrzeug->vehicle_id}}"
                                                                                               name="vehicle_id"></a>
                                                                                @else
                                                                                    <input type="file" id="file-input-5"
                                                                                           class="svg-div w-100 border-0  g-0"
                                                                                           onchange="upload(this);"
                                                                                           name="vehicle_id">
                                                                                    <input type="text"
                                                                                           class="form-control text-center"
                                                                                           id="file-input-5c" disabled
                                                                                           style="background:transparent; border:none;"
                                                                                           name="vehicle_id">
                                                                                @endif


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
                                                                                    <span>
                                                                                        Leasing:
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="btn-group w-100"
                                                                                 role="group"
                                                                                 aria-label="Basic radio toggle button group">
                                                                                @if(isset($data->fahrzeug->comparison_type))
                                                                                    @if($data->fahrzeug->comparison_type
                                                                                    == 'Ja')
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="leasing"
                                                                                               id="btnradio1"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradio1">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="leasing"
                                                                                               id="btnradio1"
                                                                                               autocomplete="off">
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1">Nein</label>
                                                                                    @else
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="leasing"
                                                                                               id="btnradio1"
                                                                                               autocomplete="off">
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradio1">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="leasing"
                                                                                               id="btnradio1"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1">Nein</label>
                                                                                    @endif
                                                                                @else
                                                                                    <input type="radio"
                                                                                           class="btn-check" value="Ja"
                                                                                           name="leasing" id="btnradio1"
                                                                                           autocomplete="off">
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradio1">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           name="leasing"
                                                                                           value="Nein" id="btnradio2"
                                                                                           autocomplete="off">
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0 "
                                                                                        for="btnradio2">Nein</label>
                                                                                @endif
                                                                            </div>
                                                                            <div class="">
                                                                                <select name="leasing_name"
                                                                                        class="w-100 slct1" id="">
                                                                                    @if(isset($data->fahrzeug->leasing_name))
                                                                                        <option
                                                                                            value="{{$data->fahrzeug->leasing_name}}">
                                                                                            {{$data->fahrzeug->leasing_name}}
                                                                                        </option>
                                                                                    @else
                                                                                        <option value="Gesellschaft">
                                                                                            Gesellschaft
                                                                                        </option>
                                                                                    @endif
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
                                                                        <div
                                                                            class="input-select-div mb-2">
                                                                            <div class="text-nowrap">
                                                                                    <span class="fw-normal">
                                                                                        Kaufjahr
                                                                                    </span>
                                                                            </div>
                                                                            <select name="year_of_purchase"
                                                                                    class="form-select w-75" aria-label="Default select example" id="">
                                                                                @if(isset($data->fahrzeug->year_of_purchase))
                                                                                    <option
                                                                                        value="{{$data->fahrzeug->year_of_purchase}}"
                                                                                        selected>
                                                                                        {{$data->fahrzeug->year_of_purchase}}
                                                                                    </option>
                                                                                    @for($i = \Carbon\Carbon::now()->format('Y'); $i >= 1950 ;$i--)
                                                                                        <option value="2021">{{$i}}</option>
                                                                                    @endfor
                                                                                @else
                                                                                    <option selected></option>
                                                                                    @for($i = \Carbon\Carbon::now()->format('Y'); $i >= 1950 ;$i--)
                                                                                        <option value="2021">{{$i}}</option>
                                                                                    @endfor
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="date-input-div mb-2">
                                                                        <div class="">
                                                                                <span>
                                                                                    Este inverkehrssetzung:
                                                                                </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->first_intro))
                                                                            <input name="first_intro"
                                                                                   type="date"
                                                                                   value="{{$data->fahrzeug->first_intro}}"
                                                                                   class="py-1 border-0">
                                                                        @else
                                                                            <input name="first_intro"
                                                                                   type="date" class="py-1 border-0">
                                                                        @endif
                                                                    </div>
                                                                    <div class="date-input-div mb-2">
                                                                        <div class="">
                                                                                <span>
                                                                                    Beginn Versicherung:
                                                                                </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->insurance_date))
                                                                            <input name="insurance_date" type="date"
                                                                                   class="py-1 border-0"
                                                                                   value="{{$data->fahrzeug->insurance_date}}">
                                                                        @else
                                                                            <input name="insurance_date" type="date"
                                                                                   class="py-1 border-0">
                                                                        @endif
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                                                                <span class="">
                                                                                    Eingelöster Kanton:
                                                                                </span>
                                                                        </div>
                                                                        <select name="redeemed"
                                                                                class="form-select w-75"
                                                                                aria-label="Default select example">
                                                                            @if(isset($data->fahrzeug->redeemed))
                                                                                <option
                                                                                    selected>{{$data->fahrzeug->redeemed}}</option>
                                                                                <option value="Zürich">Zürich</option>
                                                                                <option value="Bern">Bern</option>
                                                                                <option value="Luzern">Luzern</option>
                                                                                <option value="Uri">Uri</option>
                                                                                <option value="Schwyz">Schwyz</option>
                                                                                <option value="Obwalden">Obwalden
                                                                                </option>
                                                                                <option value="Nidwalden">Nidwalden
                                                                                </option>
                                                                                <option value="Glarus">Glarus</option>
                                                                                <option value="Zug">Zug</option>
                                                                                <option value="Freiburg">Freiburg
                                                                                </option>
                                                                                <option value="Solothurn">Solothurn
                                                                                </option>
                                                                                <option value="Basel-Stadt">
                                                                                    Basel-Stadt
                                                                                </option>
                                                                                <option value="Basel-Landschaft">
                                                                                    Basel-Landschaft
                                                                                </option>
                                                                                <option value="Schaffhausen">
                                                                                    Schaffhausen
                                                                                </option>
                                                                                <option value="Appenzell A.Rh.">
                                                                                    Appenzell A.Rh.
                                                                                </option>
                                                                                <option value="Appenzell I.Rh.">
                                                                                    Appenzell I.Rh.
                                                                                </option>
                                                                                <option value="Sankt Gallen">Sankt
                                                                                    Gallen
                                                                                </option>
                                                                                <option value="Graubünden">Graubünden
                                                                                </option>
                                                                                <option value="Aargau">Aargau</option>
                                                                                <option value="Thurgau">Thurgau</option>
                                                                                <option value="Tessin">Tessin</option>
                                                                                <option value="Waadt">Waadt</option>
                                                                                <option value="Wallis">Wallis</option>
                                                                                <option value="Neuenburg">Neuenburg
                                                                                </option>
                                                                                <option value="Genf">Genf</option>
                                                                                <option value="Jura">Jura</option>
                                                                            @else
                                                                                <option selected></option>
                                                                                <option value="Zürich">Zürich</option>
                                                                                <option value="Bern">Bern</option>
                                                                                <option value="Luzern">Luzern</option>
                                                                                <option value="Uri">Uri</option>
                                                                                <option value="Schwyz">Schwyz</option>
                                                                                <option value="Obwalden">Obwalden
                                                                                </option>
                                                                                <option value="Nidwalden">Nidwalden
                                                                                </option>
                                                                                <option value="Glarus">Glarus</option>
                                                                                <option value="Zug">Zug</option>
                                                                                <option value="Freiburg">Freiburg
                                                                                </option>
                                                                                <option value="Solothurn">Solothurn
                                                                                </option>
                                                                                <option value="Basel-Stadt">
                                                                                    Basel-Stadt
                                                                                </option>
                                                                                <option value="Basel-Landschaft">
                                                                                    Basel-Landschaft
                                                                                </option>
                                                                                <option value="Schaffhausen">
                                                                                    Schaffhausen
                                                                                </option>
                                                                                <option value="Appenzell A.Rh.">
                                                                                    Appenzell A.Rh.
                                                                                </option>
                                                                                <option value="Appenzell I.Rh.">
                                                                                    Appenzell I.Rh.
                                                                                </option>
                                                                                <option value="Sankt Gallen">Sankt
                                                                                    Gallen
                                                                                </option>
                                                                                <option value="Graubünden">Graubünden
                                                                                </option>
                                                                                <option value="Aargau">Aargau</option>
                                                                                <option value="Thurgau">Thurgau</option>
                                                                                <option value="Tessin">Tessin</option>
                                                                                <option value="Waadt">Waadt</option>
                                                                                <option value="Wallis">Wallis</option>
                                                                                <option value="Neuenburg">Neuenburg
                                                                                </option>
                                                                                <option value="Genf">Genf</option>
                                                                                <option value="Jura">Jura</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="">
                                                                                    KM - Stand:
                                                                                </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->km_stood))
                                                                            <input name="km_stood" class="py-1"
                                                                                   type="number"
                                                                                   value="{{$data->fahrzeug->km_stood}}">
                                                                        @else
                                                                            <input name="km_stood" class="py-1"
                                                                                   type="number" id="">
                                                                        @endif
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
                                                                                <span>
                                                                                    Erste inverkehrssetzung:
                                                                                </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->placing_on_the_market))
                                                                            <input name="placing_on_the_market"
                                                                                   type="date" class="py-1 border-0"
                                                                                   value="{{$data->fahrzeug->placing_on_the_market}}">
                                                                        @else
                                                                            <input name="placing_on_the_market"
                                                                                   type="date" class="py-1 border-0">
                                                                        @endif
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                                                                <span class="">
                                                                                    Nationalitat:
                                                                                </span>
                                                                        </div>
                                                                        <select class="form-select w-75"
                                                                                name="nationality">
                                                                            @if(isset($data->fahrzeug->nationality))
                                                                                {{--                                                                            <input class="py-1 border-0"--}}
                                                                                {{--                                                                                   name="nationality" type="text" value="{{$data->fahrzeug->nationality}}">--}}
                                                                                <option
                                                                                    value="{{$data->fahrzeug->nationality}}"
                                                                                    selected>
                                                                                    {{$data->fahrzeug->nationality}}
                                                                                </option>
                                                                                <option value="CH" selected>Schweiz
                                                                                </option>
                                                                                <option value="DE">Deutschland</option>
                                                                                <option value="AT">Österreich</option>
                                                                                <optgroup label="A">
                                                                                    <option value="AF">Afghanistan
                                                                                    </option>
                                                                                    <option value="EG">Ägypten</option>
                                                                                    <option value="AX">Åland</option>
                                                                                    <option value="AL">Albanien</option>
                                                                                    <option value="DZ">Algerien</option>
                                                                                    <option value="AS">
                                                                                        Amerikanisch-Samoa
                                                                                    </option>
                                                                                    <option value="VI">Amerikanische
                                                                                        Jungferninseln
                                                                                    </option>
                                                                                    <option value="AD">Andorra</option>
                                                                                    <option value="AO">Angola</option>
                                                                                    <option value="AI">Anguilla</option>
                                                                                    <option value="AQ">Antarktis
                                                                                    </option>
                                                                                    <option value="AG">Antigua und
                                                                                        Barbuda
                                                                                    </option>
                                                                                    <option value="GQ">
                                                                                        Äquatorialguinea
                                                                                    </option>
                                                                                    <option value="AR">Argentinien
                                                                                    </option>
                                                                                    <option value="AM">Armenien</option>
                                                                                    <option value="AW">Aruba</option>
                                                                                    <option value="AC">Ascension
                                                                                    </option>
                                                                                    <option value="AZ">Aserbaidschan
                                                                                    </option>
                                                                                    <option value="ET">Äthiopien
                                                                                    </option>
                                                                                    <option value="AU">Australien
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="B">
                                                                                    <option value="BS">Bahamas</option>
                                                                                    <option value="BH">Bahrain</option>
                                                                                    <option value="BD">Bangladesch
                                                                                    </option>
                                                                                    <option value="BB">Barbados</option>
                                                                                    <option value="BY">Belarus
                                                                                        (Weißrussland)
                                                                                    </option>
                                                                                    <option value="BE">Belgien</option>
                                                                                    <option value="BZ">Belize</option>
                                                                                    <option value="BJ">Benin</option>
                                                                                    <option value="BM">Bermuda</option>
                                                                                    <option value="BT">Bhutan</option>
                                                                                    <option value="BO">Bolivien</option>
                                                                                    <option value="BA">Bosnien und
                                                                                        Herzegowina
                                                                                    </option>
                                                                                    <option value="BW">Botswana</option>
                                                                                    <option value="BV">Bouvetinsel
                                                                                    </option>
                                                                                    <option value="BR">Brasilien
                                                                                    </option>
                                                                                    <option value="VG">Britische
                                                                                        Jungferninseln
                                                                                    </option>
                                                                                    <option value="IO">Britisches
                                                                                        Territorium im Indischen Ozean
                                                                                    </option>
                                                                                    <option value="BN">Brunei
                                                                                        Darussalam
                                                                                    </option>
                                                                                    <option value="BG">Bulgarien
                                                                                    </option>
                                                                                    <option value="BF">Burkina Faso
                                                                                    </option>
                                                                                    <option value="BI">Burundi</option>
                                                                                </optgroup>
                                                                                <optgroup label="C">
                                                                                    <option value="EA">Ceuta, Melilla
                                                                                    </option>
                                                                                    <option value="CL">Chile</option>
                                                                                    <option value="CN">Volksrepublik
                                                                                        China
                                                                                    </option>
                                                                                    <option value="CP">Clipperton
                                                                                    </option>
                                                                                    <option value="CK">Cookinseln
                                                                                    </option>
                                                                                    <option value="CR">Costa Rica
                                                                                    </option>
                                                                                    <option value="CI">Côte d'Ivoire
                                                                                        (Elfenbeinküste)
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="D">
                                                                                    <option value="DK">Dänemark</option>
                                                                                    <option value="DE">Deutschland
                                                                                    </option>
                                                                                    <option value="DG">Diego Garcia
                                                                                    </option>
                                                                                    <option value="DM">Dominica</option>
                                                                                    <option value="DO">Dominikanische
                                                                                        Republik
                                                                                    </option>
                                                                                    <option value="DJ">Dschibuti
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="E">
                                                                                    <option value="EC">Ecuador</option>
                                                                                    <option value="SV">El Salvador
                                                                                    </option>
                                                                                    <option value="ER">Eritrea</option>
                                                                                    <option value="EE">Estland</option>
                                                                                </optgroup>
                                                                                <optgroup label="F">
                                                                                    <option value="FK">Falklandinseln
                                                                                    </option>
                                                                                    <option value="FO">Färöer</option>
                                                                                    <option value="FJ">Fidschi</option>
                                                                                    <option value="FI">Finnland</option>
                                                                                    <option value="FR">Frankreich
                                                                                    </option>
                                                                                    <option value="GF">
                                                                                        Französisch-Guayana
                                                                                    </option>
                                                                                    <option value="PF">
                                                                                        Französisch-Polynesien
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="G">
                                                                                    <option value="GA">Gabun</option>
                                                                                    <option value="GM">Gambia</option>
                                                                                    <option value="GE">Georgien</option>
                                                                                    <option value="GH">Ghana</option>
                                                                                    <option value="GI">Gibraltar
                                                                                    </option>
                                                                                    <option value="GD">Grenada</option>
                                                                                    <option value="GR">Griechenland
                                                                                    </option>
                                                                                    <option value="GL">Grönland</option>
                                                                                    <option value="GB">Großbritannien
                                                                                    </option>
                                                                                    <option value="GP">Guadeloupe
                                                                                    </option>
                                                                                    <option value="GU">Guam</option>
                                                                                    <option value="GT">Guatemala
                                                                                    </option>
                                                                                    <option value="GG">Guernsey
                                                                                        (Kanalinsel)
                                                                                    </option>
                                                                                    <option value="GN">Guinea</option>
                                                                                    <option value="GW">Guinea-Bissau
                                                                                    </option>
                                                                                    <option value="GY">Guyana</option>
                                                                                </optgroup>
                                                                                <optgroup label="H">
                                                                                    <option value="HT">Haiti</option>
                                                                                    <option value="HM">Heard- und
                                                                                        McDonald-Inseln
                                                                                    </option>
                                                                                    <option value="HN">Honduras</option>
                                                                                    <option value="HK">Hongkong</option>
                                                                                </optgroup>
                                                                                <optgroup label="I">
                                                                                    <option value="IN">Indien</option>
                                                                                    <option value="ID">Indonesien
                                                                                    </option>
                                                                                    <option value="IM">Insel Man
                                                                                    </option>
                                                                                    <option value="IQ">Irak</option>
                                                                                    <option value="IR">Iran</option>
                                                                                    <option value="IE">Irland</option>
                                                                                    <option value="IS">Island</option>
                                                                                    <option value="IL">Israel</option>
                                                                                    <option value="IT">Italien</option>
                                                                                </optgroup>
                                                                                <optgroup label="J">
                                                                                    <option value="JM">Jamaika</option>
                                                                                    <option value="JP">Japan</option>
                                                                                    <option value="YE">Jemen</option>
                                                                                    <option value="JE">Jersey
                                                                                        (Kanalinsel)
                                                                                    </option>
                                                                                    <option value="JO">Jordanien
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="K">
                                                                                    <option value="KY">Kaimaninseln
                                                                                    </option>
                                                                                    <option value="KH">Kambodscha
                                                                                    </option>
                                                                                    <option value="CM">Kamerun</option>
                                                                                    <option value="CA">Kanada</option>
                                                                                    <option value="IC">Kanarische
                                                                                        Inseln
                                                                                    </option>
                                                                                    <option value="CV">Kap Verde
                                                                                    </option>
                                                                                    <option value="KZ">Kasachstan
                                                                                    </option>
                                                                                    <option value="QA">Katar</option>
                                                                                    <option value="KE">Kenia</option>
                                                                                    <option value="KG">Kirgisistan
                                                                                    </option>
                                                                                    <option value="KI">Kiribati</option>
                                                                                    <option value="CC">Kokosinseln
                                                                                    </option>
                                                                                    <option value="CO">Kolumbien
                                                                                    </option>
                                                                                    <option value="KM">Komoren</option>
                                                                                    <option value="CD">Demokratische
                                                                                        Republik Kongo
                                                                                    </option>
                                                                                    <option value="KP">Demokratische
                                                                                        Volksrepublik Korea (Nordkorea)
                                                                                    </option>
                                                                                    <option value="KR">Republik Korea
                                                                                        (Südkorea)
                                                                                    </option>
                                                                                    <option value="KOS">Kosovo</option>
                                                                                    <option value="HR">Kroatien</option>
                                                                                    <option value="CU">Kuba</option>
                                                                                    <option value="KW">Kuwait</option>
                                                                                </optgroup>
                                                                                <optgroup label="L">
                                                                                    <option value="LA">Laos</option>
                                                                                    <option value="LS">Lesotho</option>
                                                                                    <option value="LV">Lettland</option>
                                                                                    <option value="LB">Libanon</option>
                                                                                    <option value="LR">Liberia</option>
                                                                                    <option value="LY">Libyen</option>
                                                                                    <option value="LI">Liechtenstein
                                                                                    </option>
                                                                                    <option value="LT">Litauen</option>
                                                                                    <option value="LU">Luxemburg
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="M">
                                                                                    <option value="MO">Macao</option>
                                                                                    <option value="MG">Madagaskar
                                                                                    </option>
                                                                                    <option value="MW">Malawi</option>
                                                                                    <option value="MY">Malaysia</option>
                                                                                    <option value="MV">Malediven
                                                                                    </option>
                                                                                    <option value="ML">Mali</option>
                                                                                    <option value="MT">Malta</option>
                                                                                    <option value="MA">Marokko</option>
                                                                                    <option value="MH">Marshallinseln
                                                                                    </option>
                                                                                    <option value="MQ">Martinique
                                                                                    </option>
                                                                                    <option value="MR">Mauretanien
                                                                                    </option>
                                                                                    <option value="MU">Mauritius
                                                                                    </option>
                                                                                    <option value="YT">Mayotte</option>
                                                                                    <option value="MK">Mazedonien
                                                                                    </option>
                                                                                    <option value="MX">Mexiko</option>
                                                                                    <option value="FM">Mikronesien
                                                                                    </option>
                                                                                    <option value="MD">Moldawien
                                                                                        (Republik Moldau)
                                                                                    </option>
                                                                                    <option value="MC">Monaco</option>
                                                                                    <option value="MN">Mongolei</option>
                                                                                    <option value="ME">Montenegro
                                                                                    </option>
                                                                                    <option value="MS">Montserrat
                                                                                    </option>
                                                                                    <option value="MZ">Mosambik</option>
                                                                                    <option value="MM">Myanmar (Burma)
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="N">
                                                                                    <option value="NA">Namibia</option>
                                                                                    <option value="NR">Nauru</option>
                                                                                    <option value="NP">Nepal</option>
                                                                                    <option value="NC">Neukaledonien
                                                                                    </option>
                                                                                    <option value="NZ">Neuseeland
                                                                                    </option>
                                                                                    <option value="NI">Nicaragua
                                                                                    </option>
                                                                                    <option value="NL">Niederlande
                                                                                    </option>
                                                                                    <option value="AN">Niederländische
                                                                                        Antillen
                                                                                    </option>
                                                                                    <option value="NE">Niger</option>
                                                                                    <option value="NG">Nigeria</option>
                                                                                    <option value="NU">Niue</option>
                                                                                    <option value="MP">Nördliche
                                                                                        Marianen
                                                                                    </option>
                                                                                    <option value="NF">Norfolkinsel
                                                                                    </option>
                                                                                    <option value="NO">Norwegen</option>
                                                                                </optgroup>
                                                                                <optgroup label="O">
                                                                                    <option value="OM">Oman</option>
                                                                                    <option value="XO">Orbit</option>
                                                                                    <option value="AT">Österreich
                                                                                    </option>
                                                                                    <option value="TL">Osttimor
                                                                                        (Timor-Leste)
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="P">
                                                                                    <option value="PK">Pakistan</option>
                                                                                    <option value="PS">Palästinensische
                                                                                        Autonomiegebiete
                                                                                    </option>
                                                                                    <option value="PW">Palau</option>
                                                                                    <option value="PA">Panama</option>
                                                                                    <option value="PG">Papua-Neuguinea
                                                                                    </option>
                                                                                    <option value="PY">Paraguay</option>
                                                                                    <option value="PE">Peru</option>
                                                                                    <option value="PH">Philippinen
                                                                                    </option>
                                                                                    <option value="PN">Pitcairninseln
                                                                                    </option>
                                                                                    <option value="PL">Polen</option>
                                                                                    <option value="PT">Portugal</option>
                                                                                    <option value="PR">Puerto Rico
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="Q"></option>
                                                                                </optgroup>
                                                                                <optgroup label="R">
                                                                                    <option value="TW">Republik China
                                                                                        (Taiwan)
                                                                                    </option>
                                                                                    <option value="CG">Republik Kongo
                                                                                    </option>
                                                                                    <option value="RE">Réunion</option>
                                                                                    <option value="RW">Ruanda</option>
                                                                                    <option value="RO">Rumänien</option>
                                                                                    <option value="RU">Russische
                                                                                        Föderation
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="S">
                                                                                    <option value="BL">
                                                                                        Saint-Barthélemy
                                                                                    </option>
                                                                                    <option value="MF">Saint-Martin
                                                                                    </option>
                                                                                    <option value="SB">Salomonen
                                                                                    </option>
                                                                                    <option value="ZM">Sambia</option>
                                                                                    <option value="WS">Samoa</option>
                                                                                    <option value="SM">San Marino
                                                                                    </option>
                                                                                    <option value="ST">São Tomé und
                                                                                        Príncipe
                                                                                    </option>
                                                                                    <option value="SA">Saudi-Arabien
                                                                                    </option>
                                                                                    <option value="SE">Schweden</option>
                                                                                    <option value="CH">Schweiz</option>
                                                                                    <option value="SN">Senegal</option>
                                                                                    <option value="RS">Serbien</option>
                                                                                    <option value="SC">Seychellen
                                                                                    </option>
                                                                                    <option value="SL">Sierra Leone
                                                                                    </option>
                                                                                    <option value="ZW">Simbabwe</option>
                                                                                    <option value="SG">Singapur</option>
                                                                                    <option value="SK">Slowakei</option>
                                                                                    <option value="SI">Slowenien
                                                                                    </option>
                                                                                    <option value="SO">Somalia</option>
                                                                                    <option value="ES">Spanien</option>
                                                                                    <option value="LK">Sri Lanka
                                                                                    </option>
                                                                                    <option value="SH">St. Helena
                                                                                    </option>
                                                                                    <option value="KN">St. Kitts und
                                                                                        Nevis
                                                                                    </option>
                                                                                    <option value="LC">St. Lucia
                                                                                    </option>
                                                                                    <option value="PM">Saint-Pierre und
                                                                                        Miquelon
                                                                                    </option>
                                                                                    <option value="VC">St. Vincent und
                                                                                        die Grenadinen
                                                                                    </option>
                                                                                    <option value="ZA">Südafrika
                                                                                    </option>
                                                                                    <option value="SD">Sudan</option>
                                                                                    <option value="GS">Südgeorgien und
                                                                                        die Südlichen Sandwichinseln
                                                                                    </option>
                                                                                    <option value="SR">Suriname</option>
                                                                                    <option value="SJ">Svalbard und Jan
                                                                                        Mayen
                                                                                    </option>
                                                                                    <option value="SZ">Swasiland
                                                                                    </option>
                                                                                    <option value="SY">Syrien</option>
                                                                                </optgroup>
                                                                                <optgroup label="T">
                                                                                    <option value="TJ">Tadschikistan
                                                                                    </option>
                                                                                    <option value="TZ">Tansania</option>
                                                                                    <option value="TH">Thailand</option>
                                                                                    <option value="TG">Togo</option>
                                                                                    <option value="TK">Tokelau</option>
                                                                                    <option value="TO">Tonga</option>
                                                                                    <option value="TT">Trinidad und
                                                                                        Tobago
                                                                                    </option>
                                                                                    <option value="TA">Tristan da
                                                                                        Cunha
                                                                                    </option>
                                                                                    <option value="TD">Tschad</option>
                                                                                    <option value="CZ">Tschechische
                                                                                        Republik
                                                                                    </option>
                                                                                    <option value="TN">Tunesien</option>
                                                                                    <option value="TR">Türkei</option>
                                                                                    <option value="TM">Turkmenistan
                                                                                    </option>
                                                                                    <option value="TC">Turks- und
                                                                                        Caicosinseln
                                                                                    </option>
                                                                                    <option value="TV">Tuvalu</option>
                                                                                </optgroup>
                                                                                <optgroup label="U">
                                                                                    <option value="UG">Uganda</option>
                                                                                    <option value="UA">Ukraine</option>
                                                                                    <option value="HU">Ungarn</option>
                                                                                    <option value="UY">Uruguay</option>
                                                                                    <option value="UZ">Usbekistan
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="V">
                                                                                    <option value="VU">Vanuatu</option>
                                                                                    <option value="VA">Vatikanstadt
                                                                                    </option>
                                                                                    <option value="VE">Venezuela
                                                                                    </option>
                                                                                    <option value="AE">Vereinigte
                                                                                        Arabische Emirate
                                                                                    </option>
                                                                                    <option value="US">Vereinigte
                                                                                        Staaten von Amerika (USA)
                                                                                    </option>
                                                                                    <option value="GB">Vereinigtes
                                                                                        Königreich Großbritannien und
                                                                                        Nordirland
                                                                                    </option>
                                                                                    <option value="VN">Vietnam</option>
                                                                                </optgroup>
                                                                                <optgroup label="W">
                                                                                    <option value="WF">Wallis und
                                                                                        Futuna
                                                                                    </option>
                                                                                    <option value="CX">Weihnachtsinsel
                                                                                    </option>
                                                                                    <option value="EH">Westsahara
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="Z">
                                                                                    <option value="CF">
                                                                                        Zentralafrikanische Republik
                                                                                    </option>
                                                                                    <option value="CY">Zypern</option>
                                                                                </optgroup>
                                                                            @else
                                                                                <option selected></option>
                                                                                <option value="CH" selected>Schweiz
                                                                                </option>
                                                                                <option value="DE">Deutschland</option>
                                                                                <option value="AT">Österreich</option>
                                                                                <optgroup label="A">
                                                                                    <option value="AF">Afghanistan
                                                                                    </option>
                                                                                    <option value="EG">Ägypten</option>
                                                                                    <option value="AX">Åland</option>
                                                                                    <option value="AL">Albanien</option>
                                                                                    <option value="DZ">Algerien</option>
                                                                                    <option value="AS">
                                                                                        Amerikanisch-Samoa
                                                                                    </option>
                                                                                    <option value="VI">Amerikanische
                                                                                        Jungferninseln
                                                                                    </option>
                                                                                    <option value="AD">Andorra</option>
                                                                                    <option value="AO">Angola</option>
                                                                                    <option value="AI">Anguilla</option>
                                                                                    <option value="AQ">Antarktis
                                                                                    </option>
                                                                                    <option value="AG">Antigua und
                                                                                        Barbuda
                                                                                    </option>
                                                                                    <option value="GQ">
                                                                                        Äquatorialguinea
                                                                                    </option>
                                                                                    <option value="AR">Argentinien
                                                                                    </option>
                                                                                    <option value="AM">Armenien</option>
                                                                                    <option value="AW">Aruba</option>
                                                                                    <option value="AC">Ascension
                                                                                    </option>
                                                                                    <option value="AZ">Aserbaidschan
                                                                                    </option>
                                                                                    <option value="ET">Äthiopien
                                                                                    </option>
                                                                                    <option value="AU">Australien
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="B">
                                                                                    <option value="BS">Bahamas</option>
                                                                                    <option value="BH">Bahrain</option>
                                                                                    <option value="BD">Bangladesch
                                                                                    </option>
                                                                                    <option value="BB">Barbados</option>
                                                                                    <option value="BY">Belarus
                                                                                        (Weißrussland)
                                                                                    </option>
                                                                                    <option value="BE">Belgien</option>
                                                                                    <option value="BZ">Belize</option>
                                                                                    <option value="BJ">Benin</option>
                                                                                    <option value="BM">Bermuda</option>
                                                                                    <option value="BT">Bhutan</option>
                                                                                    <option value="BO">Bolivien</option>
                                                                                    <option value="BA">Bosnien und
                                                                                        Herzegowina
                                                                                    </option>
                                                                                    <option value="BW">Botswana</option>
                                                                                    <option value="BV">Bouvetinsel
                                                                                    </option>
                                                                                    <option value="BR">Brasilien
                                                                                    </option>
                                                                                    <option value="VG">Britische
                                                                                        Jungferninseln
                                                                                    </option>
                                                                                    <option value="IO">Britisches
                                                                                        Territorium im Indischen Ozean
                                                                                    </option>
                                                                                    <option value="BN">Brunei
                                                                                        Darussalam
                                                                                    </option>
                                                                                    <option value="BG">Bulgarien
                                                                                    </option>
                                                                                    <option value="BF">Burkina Faso
                                                                                    </option>
                                                                                    <option value="BI">Burundi</option>
                                                                                </optgroup>
                                                                                <optgroup label="C">
                                                                                    <option value="EA">Ceuta, Melilla
                                                                                    </option>
                                                                                    <option value="CL">Chile</option>
                                                                                    <option value="CN">Volksrepublik
                                                                                        China
                                                                                    </option>
                                                                                    <option value="CP">Clipperton
                                                                                    </option>
                                                                                    <option value="CK">Cookinseln
                                                                                    </option>
                                                                                    <option value="CR">Costa Rica
                                                                                    </option>
                                                                                    <option value="CI">Côte d'Ivoire
                                                                                        (Elfenbeinküste)
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="D">
                                                                                    <option value="DK">Dänemark</option>
                                                                                    <option value="DE">Deutschland
                                                                                    </option>
                                                                                    <option value="DG">Diego Garcia
                                                                                    </option>
                                                                                    <option value="DM">Dominica</option>
                                                                                    <option value="DO">Dominikanische
                                                                                        Republik
                                                                                    </option>
                                                                                    <option value="DJ">Dschibuti
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="E">
                                                                                    <option value="EC">Ecuador</option>
                                                                                    <option value="SV">El Salvador
                                                                                    </option>
                                                                                    <option value="ER">Eritrea</option>
                                                                                    <option value="EE">Estland</option>
                                                                                </optgroup>
                                                                                <optgroup label="F">
                                                                                    <option value="FK">Falklandinseln
                                                                                    </option>
                                                                                    <option value="FO">Färöer</option>
                                                                                    <option value="FJ">Fidschi</option>
                                                                                    <option value="FI">Finnland</option>
                                                                                    <option value="FR">Frankreich
                                                                                    </option>
                                                                                    <option value="GF">
                                                                                        Französisch-Guayana
                                                                                    </option>
                                                                                    <option value="PF">
                                                                                        Französisch-Polynesien
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="G">
                                                                                    <option value="GA">Gabun</option>
                                                                                    <option value="GM">Gambia</option>
                                                                                    <option value="GE">Georgien</option>
                                                                                    <option value="GH">Ghana</option>
                                                                                    <option value="GI">Gibraltar
                                                                                    </option>
                                                                                    <option value="GD">Grenada</option>
                                                                                    <option value="GR">Griechenland
                                                                                    </option>
                                                                                    <option value="GL">Grönland</option>
                                                                                    <option value="GB">Großbritannien
                                                                                    </option>
                                                                                    <option value="GP">Guadeloupe
                                                                                    </option>
                                                                                    <option value="GU">Guam</option>
                                                                                    <option value="GT">Guatemala
                                                                                    </option>
                                                                                    <option value="GG">Guernsey
                                                                                        (Kanalinsel)
                                                                                    </option>
                                                                                    <option value="GN">Guinea</option>
                                                                                    <option value="GW">Guinea-Bissau
                                                                                    </option>
                                                                                    <option value="GY">Guyana</option>
                                                                                </optgroup>
                                                                                <optgroup label="H">
                                                                                    <option value="HT">Haiti</option>
                                                                                    <option value="HM">Heard- und
                                                                                        McDonald-Inseln
                                                                                    </option>
                                                                                    <option value="HN">Honduras</option>
                                                                                    <option value="HK">Hongkong</option>
                                                                                </optgroup>
                                                                                <optgroup label="I">
                                                                                    <option value="IN">Indien</option>
                                                                                    <option value="ID">Indonesien
                                                                                    </option>
                                                                                    <option value="IM">Insel Man
                                                                                    </option>
                                                                                    <option value="IQ">Irak</option>
                                                                                    <option value="IR">Iran</option>
                                                                                    <option value="IE">Irland</option>
                                                                                    <option value="IS">Island</option>
                                                                                    <option value="IL">Israel</option>
                                                                                    <option value="IT">Italien</option>
                                                                                </optgroup>
                                                                                <optgroup label="J">
                                                                                    <option value="JM">Jamaika</option>
                                                                                    <option value="JP">Japan</option>
                                                                                    <option value="YE">Jemen</option>
                                                                                    <option value="JE">Jersey
                                                                                        (Kanalinsel)
                                                                                    </option>
                                                                                    <option value="JO">Jordanien
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="K">
                                                                                    <option value="KY">Kaimaninseln
                                                                                    </option>
                                                                                    <option value="KH">Kambodscha
                                                                                    </option>
                                                                                    <option value="CM">Kamerun</option>
                                                                                    <option value="CA">Kanada</option>
                                                                                    <option value="IC">Kanarische
                                                                                        Inseln
                                                                                    </option>
                                                                                    <option value="CV">Kap Verde
                                                                                    </option>
                                                                                    <option value="KZ">Kasachstan
                                                                                    </option>
                                                                                    <option value="QA">Katar</option>
                                                                                    <option value="KE">Kenia</option>
                                                                                    <option value="KG">Kirgisistan
                                                                                    </option>
                                                                                    <option value="KI">Kiribati</option>
                                                                                    <option value="CC">Kokosinseln
                                                                                    </option>
                                                                                    <option value="CO">Kolumbien
                                                                                    </option>
                                                                                    <option value="KM">Komoren</option>
                                                                                    <option value="CD">Demokratische
                                                                                        Republik Kongo
                                                                                    </option>
                                                                                    <option value="KP">Demokratische
                                                                                        Volksrepublik Korea (Nordkorea)
                                                                                    </option>
                                                                                    <option value="KR">Republik Korea
                                                                                        (Südkorea)
                                                                                    </option>
                                                                                    <option value="KOS">Kosovo</option>
                                                                                    <option value="HR">Kroatien</option>
                                                                                    <option value="CU">Kuba</option>
                                                                                    <option value="KW">Kuwait</option>
                                                                                </optgroup>
                                                                                <optgroup label="L">
                                                                                    <option value="LA">Laos</option>
                                                                                    <option value="LS">Lesotho</option>
                                                                                    <option value="LV">Lettland</option>
                                                                                    <option value="LB">Libanon</option>
                                                                                    <option value="LR">Liberia</option>
                                                                                    <option value="LY">Libyen</option>
                                                                                    <option value="LI">Liechtenstein
                                                                                    </option>
                                                                                    <option value="LT">Litauen</option>
                                                                                    <option value="LU">Luxemburg
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="M">
                                                                                    <option value="MO">Macao</option>
                                                                                    <option value="MG">Madagaskar
                                                                                    </option>
                                                                                    <option value="MW">Malawi</option>
                                                                                    <option value="MY">Malaysia</option>
                                                                                    <option value="MV">Malediven
                                                                                    </option>
                                                                                    <option value="ML">Mali</option>
                                                                                    <option value="MT">Malta</option>
                                                                                    <option value="MA">Marokko</option>
                                                                                    <option value="MH">Marshallinseln
                                                                                    </option>
                                                                                    <option value="MQ">Martinique
                                                                                    </option>
                                                                                    <option value="MR">Mauretanien
                                                                                    </option>
                                                                                    <option value="MU">Mauritius
                                                                                    </option>
                                                                                    <option value="YT">Mayotte</option>
                                                                                    <option value="MK">Mazedonien
                                                                                    </option>
                                                                                    <option value="MX">Mexiko</option>
                                                                                    <option value="FM">Mikronesien
                                                                                    </option>
                                                                                    <option value="MD">Moldawien
                                                                                        (Republik Moldau)
                                                                                    </option>
                                                                                    <option value="MC">Monaco</option>
                                                                                    <option value="MN">Mongolei</option>
                                                                                    <option value="ME">Montenegro
                                                                                    </option>
                                                                                    <option value="MS">Montserrat
                                                                                    </option>
                                                                                    <option value="MZ">Mosambik</option>
                                                                                    <option value="MM">Myanmar (Burma)
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="N">
                                                                                    <option value="NA">Namibia</option>
                                                                                    <option value="NR">Nauru</option>
                                                                                    <option value="NP">Nepal</option>
                                                                                    <option value="NC">Neukaledonien
                                                                                    </option>
                                                                                    <option value="NZ">Neuseeland
                                                                                    </option>
                                                                                    <option value="NI">Nicaragua
                                                                                    </option>
                                                                                    <option value="NL">Niederlande
                                                                                    </option>
                                                                                    <option value="AN">Niederländische
                                                                                        Antillen
                                                                                    </option>
                                                                                    <option value="NE">Niger</option>
                                                                                    <option value="NG">Nigeria</option>
                                                                                    <option value="NU">Niue</option>
                                                                                    <option value="MP">Nördliche
                                                                                        Marianen
                                                                                    </option>
                                                                                    <option value="NF">Norfolkinsel
                                                                                    </option>
                                                                                    <option value="NO">Norwegen</option>
                                                                                </optgroup>
                                                                                <optgroup label="O">
                                                                                    <option value="OM">Oman</option>
                                                                                    <option value="XO">Orbit</option>
                                                                                    <option value="AT">Österreich
                                                                                    </option>
                                                                                    <option value="TL">Osttimor
                                                                                        (Timor-Leste)
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="P">
                                                                                    <option value="PK">Pakistan</option>
                                                                                    <option value="PS">Palästinensische
                                                                                        Autonomiegebiete
                                                                                    </option>
                                                                                    <option value="PW">Palau</option>
                                                                                    <option value="PA">Panama</option>
                                                                                    <option value="PG">Papua-Neuguinea
                                                                                    </option>
                                                                                    <option value="PY">Paraguay</option>
                                                                                    <option value="PE">Peru</option>
                                                                                    <option value="PH">Philippinen
                                                                                    </option>
                                                                                    <option value="PN">Pitcairninseln
                                                                                    </option>
                                                                                    <option value="PL">Polen</option>
                                                                                    <option value="PT">Portugal</option>
                                                                                    <option value="PR">Puerto Rico
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="Q"></option>
                                                                                </optgroup>
                                                                                <optgroup label="R">
                                                                                    <option value="TW">Republik China
                                                                                        (Taiwan)
                                                                                    </option>
                                                                                    <option value="CG">Republik Kongo
                                                                                    </option>
                                                                                    <option value="RE">Réunion</option>
                                                                                    <option value="RW">Ruanda</option>
                                                                                    <option value="RO">Rumänien</option>
                                                                                    <option value="RU">Russische
                                                                                        Föderation
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="S">
                                                                                    <option value="BL">
                                                                                        Saint-Barthélemy
                                                                                    </option>
                                                                                    <option value="MF">Saint-Martin
                                                                                    </option>
                                                                                    <option value="SB">Salomonen
                                                                                    </option>
                                                                                    <option value="ZM">Sambia</option>
                                                                                    <option value="WS">Samoa</option>
                                                                                    <option value="SM">San Marino
                                                                                    </option>
                                                                                    <option value="ST">São Tomé und
                                                                                        Príncipe
                                                                                    </option>
                                                                                    <option value="SA">Saudi-Arabien
                                                                                    </option>
                                                                                    <option value="SE">Schweden</option>
                                                                                    <option value="CH">Schweiz</option>
                                                                                    <option value="SN">Senegal</option>
                                                                                    <option value="RS">Serbien</option>
                                                                                    <option value="SC">Seychellen
                                                                                    </option>
                                                                                    <option value="SL">Sierra Leone
                                                                                    </option>
                                                                                    <option value="ZW">Simbabwe</option>
                                                                                    <option value="SG">Singapur</option>
                                                                                    <option value="SK">Slowakei</option>
                                                                                    <option value="SI">Slowenien
                                                                                    </option>
                                                                                    <option value="SO">Somalia</option>
                                                                                    <option value="ES">Spanien</option>
                                                                                    <option value="LK">Sri Lanka
                                                                                    </option>
                                                                                    <option value="SH">St. Helena
                                                                                    </option>
                                                                                    <option value="KN">St. Kitts und
                                                                                        Nevis
                                                                                    </option>
                                                                                    <option value="LC">St. Lucia
                                                                                    </option>
                                                                                    <option value="PM">Saint-Pierre und
                                                                                        Miquelon
                                                                                    </option>
                                                                                    <option value="VC">St. Vincent und
                                                                                        die Grenadinen
                                                                                    </option>
                                                                                    <option value="ZA">Südafrika
                                                                                    </option>
                                                                                    <option value="SD">Sudan</option>
                                                                                    <option value="GS">Südgeorgien und
                                                                                        die Südlichen Sandwichinseln
                                                                                    </option>
                                                                                    <option value="SR">Suriname</option>
                                                                                    <option value="SJ">Svalbard und Jan
                                                                                        Mayen
                                                                                    </option>
                                                                                    <option value="SZ">Swasiland
                                                                                    </option>
                                                                                    <option value="SY">Syrien</option>
                                                                                </optgroup>
                                                                                <optgroup label="T">
                                                                                    <option value="TJ">Tadschikistan
                                                                                    </option>
                                                                                    <option value="TZ">Tansania</option>
                                                                                    <option value="TH">Thailand</option>
                                                                                    <option value="TG">Togo</option>
                                                                                    <option value="TK">Tokelau</option>
                                                                                    <option value="TO">Tonga</option>
                                                                                    <option value="TT">Trinidad und
                                                                                        Tobago
                                                                                    </option>
                                                                                    <option value="TA">Tristan da
                                                                                        Cunha
                                                                                    </option>
                                                                                    <option value="TD">Tschad</option>
                                                                                    <option value="CZ">Tschechische
                                                                                        Republik
                                                                                    </option>
                                                                                    <option value="TN">Tunesien</option>
                                                                                    <option value="TR">Türkei</option>
                                                                                    <option value="TM">Turkmenistan
                                                                                    </option>
                                                                                    <option value="TC">Turks- und
                                                                                        Caicosinseln
                                                                                    </option>
                                                                                    <option value="TV">Tuvalu</option>
                                                                                </optgroup>
                                                                                <optgroup label="U">
                                                                                    <option value="UG">Uganda</option>
                                                                                    <option value="UA">Ukraine</option>
                                                                                    <option value="HU">Ungarn</option>
                                                                                    <option value="UY">Uruguay</option>
                                                                                    <option value="UZ">Usbekistan
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="V">
                                                                                    <option value="VU">Vanuatu</option>
                                                                                    <option value="VA">Vatikanstadt
                                                                                    </option>
                                                                                    <option value="VE">Venezuela
                                                                                    </option>
                                                                                    <option value="AE">Vereinigte
                                                                                        Arabische Emirate
                                                                                    </option>
                                                                                    <option value="US">Vereinigte
                                                                                        Staaten von Amerika (USA)
                                                                                    </option>
                                                                                    <option value="GB">Vereinigtes
                                                                                        Königreich Großbritannien und
                                                                                        Nordirland
                                                                                    </option>
                                                                                    <option value="VN">Vietnam</option>
                                                                                </optgroup>
                                                                                <optgroup label="W">
                                                                                    <option value="WF">Wallis und
                                                                                        Futuna
                                                                                    </option>
                                                                                    <option value="CX">Weihnachtsinsel
                                                                                    </option>
                                                                                    <option value="EH">Westsahara
                                                                                    </option>
                                                                                </optgroup>
                                                                                <optgroup label="Z">
                                                                                    <option value="CF">
                                                                                        Zentralafrikanische Republik
                                                                                    </option>
                                                                                    <option value="CY">Zypern</option>
                                                                                </optgroup>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                                                                <span class="">
                                                                                    Häufigster Lenker?
                                                                                </span>
                                                                        </div>
                                                                        <select name="most_common"
                                                                                class="form-select w-75"
                                                                                aria-label="Default select example">
                                                                            @if(isset($data->fahrzeug->most_common))
                                                                                <option
                                                                                    value="{{$data->fahrzeug->most_common}}"
                                                                                    selected>
                                                                                    {{$data->fahrzeug->most_common}}
                                                                                </option>
                                                                            @else
                                                                                <option selected></option>
                                                                                <option value="Ja">Ja</option>
                                                                                <option value="Nein">Nein</option>
                                                                            @endif
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
                                                                                Gewünschte Deckung
                                                                            </span>
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                                                                <span class="">
                                                                                    Versischerung:
                                                                                </span>
                                                                        </div>

                                                                        @if(isset($data->fahrzeug->insurance))
                                                                            <input name="insurance" type="text"
                                                                                   class="py-1 border-0"
                                                                                   value="{{$data->fahrzeug->insurance}}">
                                                                        @else
                                                                            <input name="insurance" type="text"
                                                                                   class="py-1 border-0">
                                                                        @endif
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                                                                <span class="">
                                                                                    Selbstbehalt Teilkasko:
                                                                                </span>
                                                                        </div>
                                                                        <select name="deductible"
                                                                                class="form-select w-75"
                                                                                aria-label="Default select example">
                                                                            @if(isset($data->fahrzeug->deductible))
                                                                                <option selected
                                                                                        value="{{$data->fahrzeug->deductible}}">{{$data->fahrzeug->deductible}}</option>
                                                                                <option value="500">500</option>
                                                                                <option value="1000">1000</option>
                                                                                <option value="1500">1500</option>
                                                                                <option value="2000">2000</option>
                                                                            @else
                                                                                <option selected></option>
                                                                                <option value="500">500</option>
                                                                                <option value="1000">1000</option>
                                                                                <option value="1500">1500</option>
                                                                                <option value="2000">2000</option>
                                                                            @endif
                                                                        </select>

                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                                                                <span class="">
                                                                                    Mitgeführte Sachen:
                                                                                </span>
                                                                        </div>
                                                                        <select name="carried"
                                                                                class="form-select w-75"
                                                                                aria-label="Default select example">
                                                                            @if(isset($data->fahrzeug->carried))
                                                                                <option
                                                                                    value="{{$data->fahrzeug->carried}}"
                                                                                    selected>{{$data->fahrzeug->carried}}</option>
                                                                                @for($i=1000;$i<=20000;$i+=1000)
                                                                                    <option
                                                                                        value="{{$i}}">{{$i}}</option>
                                                                                @endfor
                                                                            @else
                                                                                <option selected></option>
                                                                                @for($i=1000;$i<=20000;$i+=1000)
                                                                                    <option
                                                                                        value="{{$i}}">{{$i}}</option>
                                                                                @endfor
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                    <div class="">
                                                                            <span>
                                                                                Reparaturwerkstatt:
                                                                            </span>
                                                                        <!-- <div class="input-group mb-2">
                                                                    <input name="noname" type="text" placeholder="Partnergarage" class="form-control" aria-label=""
                                                                      aria-describedby="basic-addon1">
                                                                    <input name="noname" type="text" placeholder="Freie Wahl" class="form-control" aria-label=""
                                                                      aria-describedby="basic-addon1">
                                                                  </div> -->

                                                                        <div class="btn-group w-100" role="group"
                                                                             aria-label="Basic radio toggle button group">
                                                                            @if(isset($data->fahrzeug->repair_shop))
                                                                                <input type="radio" class="btn-check "
                                                                                       name="repair_shop"
                                                                                       id="btnradio1_"
                                                                                       value="{{$data->fahrzeug->repair_shop}}"
                                                                                       checked>
                                                                                <label
                                                                                    class="btn btn-outline-secondary w-100 g-0"
                                                                                    for="btnradio1_">{{$data->fahrzeug->repair_shop}}</label>
                                                                            @else
                                                                                <input type="radio" class="btn-check"
                                                                                       name="repair_shop"
                                                                                       value="Freie Wahl"
                                                                                       id="btnradio2_">
                                                                                <label
                                                                                    class="btn btn-outline-secondary w-100 g-0 "
                                                                                    for="btnradio2_">Freie Wahl</label>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="">
                                                                                    + Unfalldeckung:
                                                                                </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->accident_coverage))
                                                                            <div class="btn-group" role="group"
                                                                                 aria-label="Basic radio toggle button group">
                                                                                @if($data->fahrzeug->accident_coverage == 'Ja')
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Ja"
                                                                                           name="accident_coverage"
                                                                                           id="btnradii1"
                                                                                           autocomplete="off"
                                                                                           checked>
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradii1">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Nein"
                                                                                           name="accident_coverage"
                                                                                           id="btnradiooo1"
                                                                                           autocomplete="off">
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Nein"
                                                                                        for="btnradiooo1">Nein</label>
                                                                                @else
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Ja"
                                                                                           name="accident_coverage"
                                                                                           id="btnradii1"
                                                                                           autocomplete="off"
                                                                                    >
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradii1">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Nein"
                                                                                           name="accident_coverage"
                                                                                           id="btnradiooo1"
                                                                                           autocomplete="off"
                                                                                           checked>
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Nein"
                                                                                        for="btnradiooo1">Nein</label>
                                                                                @endif
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="">
                                                                                     Verkehrsrechtsschutz:
                                                                                </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->traffic_legal_protection))
                                                                            <div class="btn-group" role="group"
                                                                                 aria-label="Basic radio toggle button group">
                                                                                @if($data->fahrzeug->traffic_legal_protection == 'Ja')
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Ja"
                                                                                           name="traffic_legal_protection"
                                                                                           id="btnradio1a"
                                                                                           autocomplete="off"
                                                                                           checked>
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradio1a">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Nein"
                                                                                           name="traffic_legal_protection"
                                                                                           id="btnradio1b"
                                                                                           autocomplete="off">
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Nein"
                                                                                        for="btnradio1b">Nein</label>
                                                                                @else
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Ja"
                                                                                           name="traffic_legal_protection"
                                                                                           id="btnradio1a"
                                                                                           autocomplete="off"
                                                                                    >
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradio1a">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Nein"
                                                                                           name="traffic_legal_protection"
                                                                                           id="btnradio1b"
                                                                                           autocomplete="off" checked>
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Nein"
                                                                                        for="btnradio1b">Nein</label>
                                                                                @endif
                                                                            </div>
                                                                        @endif

                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="">
                                                                                    + Grobfahrlässigkeitschutz:
                                                                                </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->grossly))
                                                                            <div class="btn-group" role="group"
                                                                                 aria-label="Basic radio toggle button group">
                                                                                @if($data->fahrzeug->grossly == 'Ja')
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Ja"
                                                                                           name="grossly"
                                                                                           id="btnradio1ab"
                                                                                           autocomplete="off"
                                                                                           checked>
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradio1ab">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Nein"
                                                                                           name="grossly"
                                                                                           id="btnradio1abc"
                                                                                           autocomplete="off">
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Nein"
                                                                                        for="btnradio1abc">Nein</label>
                                                                                @else
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Ja"
                                                                                           name="grossly"
                                                                                           id="btnradio1ab"
                                                                                           autocomplete="off"
                                                                                    >
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradio1ab">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Nein"
                                                                                           name="grossly"
                                                                                           id="btnradio1abc"
                                                                                           autocomplete="off" checked>
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Nein"
                                                                                        for="btnradio1abc">Nein</label>
                                                                                @endif
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="">

                                                                                </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->glass_protection))
                                                                            <div class="btn-group" role="group"
                                                                                 aria-label="Basic radio toggle button group">
                                                                                @if($data->fahrzeug->glass_protection == 'Ja')

                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Ja"
                                                                                           name="glass_protection"
                                                                                           id="btnradio1abbbe"
                                                                                           autocomplete="off"
                                                                                           checked>
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradio1abbbe">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Nein"
                                                                                           name="glass_protection"
                                                                                           id="btnradio1abceeef"
                                                                                           autocomplete="off">
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Nein"
                                                                                        for="btnradio1abceeef">Nein</label>
                                                                                @else
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Ja"
                                                                                           name="glass_protection"
                                                                                           id="btnradio1abbbe"
                                                                                           autocomplete="off"
                                                                                    >
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradio1abbbe">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Nein"
                                                                                           name="glass_protection"
                                                                                           id="btnradio1abceeef"
                                                                                           autocomplete="off"
                                                                                           checked>
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Nein"
                                                                                        for="btnradio1abceeef">Nein</label>
                                                                                @endif
                                                                            </div>
                                                                        @endif

                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="">
                                                                                    + Parkschaden:
                                                                                </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->parking_damage))
                                                                            <div class="btn-group" role="group"
                                                                                 aria-label="Basic radio toggle button group">
                                                                                @if($data->fahrzeug->parking_damage == 'Ja')
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Ja"
                                                                                           name="parking_damage"
                                                                                           id="btnradio1abce"
                                                                                           autocomplete="off"
                                                                                           checked>
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradio1abce">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Nein"
                                                                                           name="parking_damage"
                                                                                           id="btnradio1abcdef"
                                                                                           autocomplete="off">
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Nein"
                                                                                        for="btnradio1abcdef">Nein</label>
                                                                                @else
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Ja"
                                                                                           name="parking_damage"
                                                                                           id="btnradio1abce"
                                                                                           autocomplete="off"
                                                                                    >
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradio1abce">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Nein"
                                                                                           name="parking_damage"
                                                                                           id="btnradio1abcdef"
                                                                                           autocomplete="off" checked>
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Nein"
                                                                                        for="btnradio1abcdef">Nein</label>
                                                                                @endif
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                                                                <span class="">
                                                                                    + 24h Pannenhilfe:
                                                                                </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->hour_breakdown_assistance))
                                                                            <div class="btn-group" role="group"
                                                                                 aria-label="Basic radio toggle button group">
                                                                                @if($data->fahrzeug->hour_breakdown_assistance == 'Ja')
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Ja"
                                                                                           name="hour_breakdown_assistance"
                                                                                           id="btnradio1abceee"
                                                                                           autocomplete="off"
                                                                                           checked>
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradio1abceee">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Nein"
                                                                                           name="hour_breakdown_assistance"
                                                                                           id="btnradio1abcdeff"
                                                                                           autocomplete="off">
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Nein"
                                                                                        for="btnradio1abcdeff">Nein</label>
                                                                                @else
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Ja"
                                                                                           name="hour_breakdown_assistance"
                                                                                           id="btnradio1abceee"
                                                                                           autocomplete="off"
                                                                                    >
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradio1abceee">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           value="Nein"
                                                                                           name="hour_breakdown_assistance"
                                                                                           id="btnradio1abcdeff"
                                                                                           autocomplete="off"
                                                                                           checked>
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Nein"
                                                                                        for="btnradio1abcdeff">Nein</label>
                                                                                @endif
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php $ncnt = 1; @endphp
                                                    @foreach(\App\Models\newnue::where('person_id',$id)->get() as $nue)
                                                        <div class="" id="n{{$ncnt}}">
                                                            <div class="text-end mb-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" fill="currentColor"
                                                                     class="bi bi-x-circle" viewBox="0 0 16 16"
                                                                     style="cursor:pointer;"
                                                                     onclick="deletethat('{{$ncnt}}','{{$nue->id}}')">
                                                                    <path
                                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                    <path
                                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                                </svg>
                                                            </div>
                                                            <div class="row">
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                    <div class="my-3">
                                                                        <div class="">
                                                                            <div class="">
                                                                                <span class="">
                                                                                    Fahrzeugausweis hochladen
                                                                                </span>
                                                                            </div>
                                                                            <div class="upload-box mx-1 my-2">
                                                                                <div class="mx-1 my-2 p-4 text-center">
                                                                                    <label for="file-input-52{{$ncnt}}">
                                                                                        <svg
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            width="53" height="53"
                                                                                            viewBox="0 0 53 53">
                                                                                            <g id="Group_621"
                                                                                               data-name="Group 621"
                                                                                               transform="translate(-78.283 -14.777)">
                                                                                                <circle id="Ellipse_31"
                                                                                                        data-name="Ellipse 31"
                                                                                                        cx="26.5"
                                                                                                        cy="26.5"
                                                                                                        r="26.5"
                                                                                                        transform="translate(78.283 14.777)"
                                                                                                        fill="#5f5f5f"/>
                                                                                                <g id="Group_326"
                                                                                                   data-name="Group 326"
                                                                                                   transform="translate(95.656 31.893)">
                                                                                                    <path id="Path_234"
                                                                                                          data-name="Path 234"
                                                                                                          d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                                                          transform="translate(0 1.82)"
                                                                                                          fill="#fff"
                                                                                                          stroke="#fff"
                                                                                                          stroke-width="0.5"/>
                                                                                                    <path id="Path_235"
                                                                                                          data-name="Path 235"
                                                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                                                          transform="translate(0.92 0)"
                                                                                                          fill="#fff"
                                                                                                          stroke="#fff"
                                                                                                          stroke-width="0.5"/>
                                                                                                </g>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </label>
                                                                                    @if(isset($nue->vehicle_id))
                                                                                        <input type="file"
                                                                                               id="file-input-52{{$ncnt}}"
                                                                                               class="svg-div w-100 border-0  g-0"
                                                                                               onchange="upload(this);"
                                                                                               value="{{$nue->vehicle_id}}"
                                                                                               name="vehicle_id{{$ncnt}}">
                                                                                        <a style="text-decoration: none"
                                                                                           href="{{route('showfile',$nue->vehicle_id)}}">
                                                                                            <input type="text"
                                                                                                   class="form-control text-center"
                                                                                                   id="file-input-52{{$ncnt}}c"
                                                                                                   disabled
                                                                                                   style="background:transparent; border:none;"
                                                                                                   value="{{$nue->vehicle_id}}"
                                                                                                   name="vehicle_id{{$ncnt}}"></a>
                                                                                    @else
                                                                                        <input type="file"
                                                                                               id="file-input-52{{$ncnt}}"
                                                                                               class="svg-div w-100 border-0  g-0"
                                                                                               onchange="upload(this);"
                                                                                               name="vehicle_id{{$ncnt}}">
                                                                                        <input type="text"
                                                                                               class="form-control text-center"
                                                                                               id="file-input-52{{$ncnt}}c"
                                                                                               disabled
                                                                                               style="background:transparent; border:none;"
                                                                                               name="vehicle_id{{$ncnt}}">
                                                                                    @endif


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
                                                                                    <span>
                                                                                        Leasing:
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="btn-group w-100"
                                                                                     role="group"
                                                                                     aria-label="Basic radio toggle button group">
                                                                                    @if(isset($nue->comparison_type))
                                                                                        @if($nue->omparison_type
                                                                                    == 'Ja')
                                                                                            <input type="radio"
                                                                                                   class="btn-check"
                                                                                                   value="Ja"
                                                                                                   name="leasing{{$ncnt}}"
                                                                                                   id="btnradio1{{$ncnt}}n"
                                                                                                   autocomplete="off"
                                                                                                   checked>
                                                                                            <label
                                                                                                class="btn btn-outline-secondary w-100 g-0"
                                                                                                value="Ja"
                                                                                                for="btnradio1{{$ncnt}}n">Ja</label>
                                                                                            <input type="radio"
                                                                                                   class="btn-check"
                                                                                                   value="Nein"
                                                                                                   name="leasing{{$ncnt}}"
                                                                                                   id="btnradio2{{$ncnt}}n"
                                                                                                   autocomplete="off">
                                                                                            <label
                                                                                                class="btn btn-outline-secondary w-100 g-0"
                                                                                                value="Nein"
                                                                                                for="btnradio2{{$ncnt}}n">Nein</label>
                                                                                        @else
                                                                                            <input type="radio"
                                                                                                   class="btn-check"
                                                                                                   value="Ja"
                                                                                                   name="leasing{{$ncnt}}"
                                                                                                   id="btnradio1{{$ncnt}}n"
                                                                                                   autocomplete="off">
                                                                                            <label
                                                                                                class="btn btn-outline-secondary w-100 g-0"
                                                                                                value="Ja"
                                                                                                for="btnradio1{{$ncnt}}n">Ja</label>
                                                                                            <input type="radio"
                                                                                                   class="btn-check"
                                                                                                   value="Nein"
                                                                                                   name="leasing{{$ncnt}}"
                                                                                                   id="btnradio2{{$ncnt}}n"
                                                                                                   autocomplete="off"
                                                                                                   checked>
                                                                                            <label
                                                                                                class="btn btn-outline-secondary w-100 g-0"
                                                                                                value="Nein"
                                                                                                for="btnradio2{{$ncnt}}n">Nein</label>
                                                                                        @endif
                                                                                    @else
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="leasing{{$ncnt}}"
                                                                                               id="btnradio3{{$ncnt}}n"
                                                                                               autocomplete="off">
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradio3{{$ncnt}}n">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               name="leasing"
                                                                                               value="Nein"
                                                                                               id="btnradio4{{$ncnt}}n"
                                                                                               autocomplete="off">
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0 "
                                                                                            for="btnradio4{{$ncnt}}n">Nein</label>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="">
                                                                                    <select name="leasing_name{{$ncnt}}"
                                                                                            class="w-100 slct1" id="">
                                                                                        @if(isset($nue->leasing_name))
                                                                                            <option
                                                                                                value="{{$nue->leasing_name}}">
                                                                                                {{$nue->leasing_name}}
                                                                                            </option>
                                                                                        @else
                                                                                            <option
                                                                                                value="Gesellschaft">
                                                                                                Gesellschaft
                                                                                            </option>
                                                                                        @endif
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
                                                                            <div
                                                                                class="input-select-div mb-2">
                                                                                <div class="text-nowrap">
                                                                                    <span class="fw-normal">
                                                                                        Kaufjahr
                                                                                    </span>
                                                                                </div>
                                                                                <select name="year_of_purchase{{$ncnt}}"
                                                                                        class="form-select w-75" aria-label="Default select example" id="">
                                                                                    @if(isset($nue->year_of_purchase))
                                                                                        <option
                                                                                            value="{{$nue->year_of_purchase}}"
                                                                                            selected>
                                                                                            {{$nue->year_of_purchase}}
                                                                                        @for($i = \Carbon\Carbon::now()->format('Y'); $i >= 1950 ;$i--)
                                                                                            <option value="2021">{{$i}}</option>
                                                                                        @endfor
                                                                                    @else
                                                                                        <option selected></option>
                                                                                        @for($i = \Carbon\Carbon::now()->format('Y'); $i >= 1950 ;$i--)
                                                                                            <option value="2021">{{$i}}</option>
                                                                                        @endfor
                                                                                    @endif
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="date-input-div mb-2">
                                                                            <div class="">
                                                                                <span>
                                                                                    Este inverkehrssetzung:
                                                                                </span>
                                                                            </div>
                                                                            @if(isset($nue->first_intro))
                                                                                <input name="first_intro{{$ncnt}}"
                                                                                       type="date"
                                                                                       value="{{$nue->placing_on_the_market}}"
                                                                                       class="py-1 border-0">
                                                                            @else
                                                                                <input name="first_intro{{$ncnt}}"
                                                                                       type="date"
                                                                                       class="py-1 border-0">
                                                                            @endif
                                                                        </div>
                                                                        <div class="date-input-div mb-2">
                                                                            <div class="">
                                                                                <span>
                                                                                    Beginn Versicherung:
                                                                                </span>
                                                                            </div>
                                                                            @if(isset($nue->insurance_date))
                                                                                <input name="insurance_date{{$ncnt}}"
                                                                                       type="date"
                                                                                       class="py-1 border-0"
                                                                                       value="{{$nue->insurance_date}}">
                                                                            @else
                                                                                <input name="insurance_date{{$ncnt}}"
                                                                                       type="date"
                                                                                       class="py-1 border-0">
                                                                            @endif
                                                                        </div>
                                                                        <div class="input-select-div mb-2">
                                                                            <div class="">
                                                                                <span class="">
                                                                                    Eingelöster Kanton:
                                                                                </span>
                                                                            </div>
                                                                            <select name="redeemed{{$ncnt}}"
                                                                                    class="form-select w-75"
                                                                                    aria-label="Default select example">
                                                                                @if(isset($nue->redeemed))
                                                                                    <option
                                                                                        selected>{{$nue->redeemed}}</option>
                                                                                    <option value="Zürich">Zürich
                                                                                    </option>
                                                                                    <option value="Bern">Bern</option>
                                                                                    <option value="Luzern">Luzern
                                                                                    </option>
                                                                                    <option value="Uri">Uri</option>
                                                                                    <option value="Schwyz">Schwyz
                                                                                    </option>
                                                                                    <option value="Obwalden">Obwalden
                                                                                    </option>
                                                                                    <option value="Nidwalden">
                                                                                        Nidwalden
                                                                                    </option>
                                                                                    <option value="Glarus">Glarus
                                                                                    </option>
                                                                                    <option value="Zug">Zug</option>
                                                                                    <option value="Freiburg">Freiburg
                                                                                    </option>
                                                                                    <option value="Solothurn">
                                                                                        Solothurn
                                                                                    </option>
                                                                                    <option value="Basel-Stadt">
                                                                                        Basel-Stadt
                                                                                    </option>
                                                                                    <option value="Basel-Landschaft">
                                                                                        Basel-Landschaft
                                                                                    </option>
                                                                                    <option value="Schaffhausen">
                                                                                        Schaffhausen
                                                                                    </option>
                                                                                    <option value="Appenzell A.Rh.">
                                                                                        Appenzell A.Rh.
                                                                                    </option>
                                                                                    <option value="Appenzell I.Rh.">
                                                                                        Appenzell I.Rh.
                                                                                    </option>
                                                                                    <option value="Sankt Gallen">Sankt
                                                                                        Gallen
                                                                                    </option>
                                                                                    <option value="Graubünden">
                                                                                        Graubünden
                                                                                    </option>
                                                                                    <option value="Aargau">Aargau
                                                                                    </option>
                                                                                    <option value="Thurgau">Thurgau
                                                                                    </option>
                                                                                    <option value="Tessin">Tessin
                                                                                    </option>
                                                                                    <option value="Waadt">Waadt</option>
                                                                                    <option value="Wallis">Wallis
                                                                                    </option>
                                                                                    <option value="Neuenburg">
                                                                                        Neuenburg
                                                                                    </option>
                                                                                    <option value="Genf">Genf</option>
                                                                                    <option value="Jura">Jura</option>
                                                                                @else
                                                                                    <option selected></option>
                                                                                    <option value="Zürich">Zürich
                                                                                    </option>
                                                                                    <option value="Bern">Bern</option>
                                                                                    <option value="Luzern">Luzern
                                                                                    </option>
                                                                                    <option value="Uri">Uri</option>
                                                                                    <option value="Schwyz">Schwyz
                                                                                    </option>
                                                                                    <option value="Obwalden">Obwalden
                                                                                    </option>
                                                                                    <option value="Nidwalden">
                                                                                        Nidwalden
                                                                                    </option>
                                                                                    <option value="Glarus">Glarus
                                                                                    </option>
                                                                                    <option value="Zug">Zug</option>
                                                                                    <option value="Freiburg">Freiburg
                                                                                    </option>
                                                                                    <option value="Solothurn">
                                                                                        Solothurn
                                                                                    </option>
                                                                                    <option value="Basel-Stadt">
                                                                                        Basel-Stadt
                                                                                    </option>
                                                                                    <option value="Basel-Landschaft">
                                                                                        Basel-Landschaft
                                                                                    </option>
                                                                                    <option value="Schaffhausen">
                                                                                        Schaffhausen
                                                                                    </option>
                                                                                    <option value="Appenzell A.Rh.">
                                                                                        Appenzell A.Rh.
                                                                                    </option>
                                                                                    <option value="Appenzell I.Rh.">
                                                                                        Appenzell I.Rh.
                                                                                    </option>
                                                                                    <option value="Sankt Gallen">Sankt
                                                                                        Gallen
                                                                                    </option>
                                                                                    <option value="Graubünden">
                                                                                        Graubünden
                                                                                    </option>
                                                                                    <option value="Aargau">Aargau
                                                                                    </option>
                                                                                    <option value="Thurgau">Thurgau
                                                                                    </option>
                                                                                    <option value="Tessin">Tessin
                                                                                    </option>
                                                                                    <option value="Waadt">Waadt</option>
                                                                                    <option value="Wallis">Wallis
                                                                                    </option>
                                                                                    <option value="Neuenburg">
                                                                                        Neuenburg
                                                                                    </option>
                                                                                    <option value="Genf">Genf</option>
                                                                                    <option value="Jura">Jura</option>
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                        <div class="input-div1 mb-2">
                                                                            <div class="">
                                                                                <span class="">
                                                                                    KM - Stand:
                                                                                </span>
                                                                            </div>
                                                                            @if(isset($nue->km_stood))
                                                                                <input name="km_stood{{$ncnt}}"
                                                                                       class="py-1"
                                                                                       type="number"
                                                                                       value="{{$nue->km_stood}}">
                                                                            @else
                                                                                <input name="km_stood{{$ncnt}}"
                                                                                       class="py-1"
                                                                                       type="number" id="">
                                                                            @endif
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
                                                                                <span>
                                                                                    Erste inverkehrssetzung:
                                                                                </span>
                                                                            </div>
                                                                            @if(isset($nue->placing_on_the_market))
                                                                                <input
                                                                                    name="placing_on_the_market{{$ncnt}}"
                                                                                    type="date" class="py-1 border-0"
                                                                                    value="{{$nue->placing_on_the_market}}">
                                                                            @else
                                                                                <input
                                                                                    name="placing_on_the_market{{$ncnt}}"
                                                                                    type="date" class="py-1 border-0">
                                                                            @endif
                                                                        </div>
                                                                        <div class="input-select-div mb-2">
                                                                            <div class="">
                                                                                <span class="">
                                                                                    Nationalitat:
                                                                                </span>
                                                                            </div>
                                                                            @if(isset($nue->nationality))
                                                                                <input class="py-1 border-0"
                                                                                       name="nationality{{$ncnt}}"
                                                                                       type="text"
                                                                                       value="{{$nue->nationality}}">

                                                                            @else
                                                                                <input class="py-1 border-0"
                                                                                       name="nationality{{$ncnt}}"
                                                                                       type="text">
                                                                            @endif
                                                                        </div>
                                                                        <div class="input-select-div mb-2">
                                                                            <div class="">
                                                                                <span class="">
                                                                                    Häufigster Lenker?
                                                                                </span>
                                                                            </div>
                                                                            <select name="most_common{{$ncnt}}"
                                                                                    class="form-select w-75"
                                                                                    aria-label="Default select example">
                                                                                @if(isset($nue->most_common))
                                                                                    <option
                                                                                        value="{{$nue->most_common}}"
                                                                                        selected>
                                                                                        {{$nue->most_common}}
                                                                                    </option>
                                                                                @else
                                                                                    <option selected></option>
                                                                                    <option value="Ja">Ja</option>
                                                                                    <option value="Nein">Nein</option>
                                                                                @endif
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
                                                                                Gewünschte Deckung
                                                                            </span>
                                                                        </div>
                                                                        <div class="input-select-div mb-2">
                                                                            <div class="">
                                                                                <span class="">
                                                                                    Versischerung:
                                                                                </span>
                                                                            </div>

                                                                            @if(isset($nue->insurance))
                                                                                <input name="insurance{{$ncnt}}"
                                                                                       type="text" class="py-1 border-0"
                                                                                       value="{{$nue->insurance}}">
                                                                            @else
                                                                                <input name="insurance{{$ncnt}}"
                                                                                       type="text"
                                                                                       class="py-1 border-0">
                                                                            @endif
                                                                        </div>
                                                                        <div class="input-select-div mb-2">
                                                                            <div class="">
                                                                                <span class="">
                                                                                    Selbstbehalt Teilkasko:
                                                                                </span>
                                                                            </div>
                                                                            <select name="deductible{{$ncnt}}"
                                                                                    class="form-select w-75"
                                                                                    aria-label="Default select example">
                                                                                @if(isset($nue->deductible))
                                                                                    <option selected
                                                                                            value="{{$nue->deductible}}">{{$nue->deductible}}</option>
                                                                                    <option value="500">500</option>
                                                                                    <option value="1000">1000</option>
                                                                                    <option value="1500">1500</option>
                                                                                    <option value="2000">2000</option>
                                                                                @else
                                                                                    <option selected></option>
                                                                                    <option value="500">500</option>
                                                                                    <option value="1000">1000</option>
                                                                                    <option value="1500">1500</option>
                                                                                    <option value="2000">2000</option>
                                                                                @endif
                                                                            </select>

                                                                        </div>
                                                                        <div class="input-select-div mb-2">
                                                                            <div class="">
                                                                                <span class="">
                                                                                    Mitgeführte Sachen:
                                                                                </span>
                                                                            </div>
                                                                            <select name="carried{{$ncnt}}"
                                                                                    class="form-select w-75"
                                                                                    aria-label="Default select example">
                                                                                @if(isset($nue->carried))
                                                                                    <option value="{{$nue->carried}}"
                                                                                            selected>{{$nue->carried}}</option>
                                                                                    @for($i=1000;$i<=20000;$i+=1000)
                                                                                        <option
                                                                                            value="{{$i}}">{{$i}}</option>
                                                                                    @endfor
                                                                                @else
                                                                                    <option selected></option>
                                                                                    @for($i=1000;$i<=20000;$i+=1000)
                                                                                        <option
                                                                                            value="{{$i}}">{{$i}}</option>
                                                                                    @endfor
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                        <div class="">
                                                                            <span>
                                                                                Reparaturwerkstatt:
                                                                            </span>
                                                                            <!-- <div class="input-group mb-2">
                                                                    <input name="noname" type="text" placeholder="Partnergarage" class="form-control" aria-label=""
                                                                      aria-describedby="basic-addon1">
                                                                    <input name="noname" type="text" placeholder="Freie Wahl" class="form-control" aria-label=""
                                                                      aria-describedby="basic-addon1">
                                                                  </div> -->

                                                                            <div class="btn-group w-100" role="group"
                                                                                 aria-label="Basic radio toggle button group">
                                                                                @if(isset($nue->repair_shop))
                                                                                    <input type="radio"
                                                                                           class="btn-check "
                                                                                           name="repair_shop{{$ncnt}}"
                                                                                           id="btnradio1__{{$ncnt}}"
                                                                                           value="{{$nue->repair_shop}}"
                                                                                           checked>
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        for="btnradio1__{{$ncnt}}">{{$nue->repair_shop}}</label>
                                                                                @else
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           name="repair_shop{{$ncnt}}"
                                                                                           value="Freie Wahl"
                                                                                           id="btnradio2__{{$ncnt}}">
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0 "
                                                                                        for="btnradio2__{{$ncnt}}">Freie
                                                                                        Wahl</label>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-div1 mb-2">
                                                                            <div class="">
                                                                                <span class="">
                                                                                    + Unfalldeckung:
                                                                                </span>
                                                                            </div>
                                                                            @if(isset($nue->accident_coverage))
                                                                                <div class="btn-group" role="group"
                                                                                     aria-label="Basic radio toggle button group">
                                                                                    @if($nue->accident_coverage == 'Ja')
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="accident_coverage{{$ncnt}}"
                                                                                               id="btnradiis1_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradiis1_{{$ncnt}}">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="accident_coverage{{$ncnt}}"
                                                                                               id="btnradiooo1_{{$ncnt}}"
                                                                                               autocomplete="off">
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradiooo1_{{$ncnt}}">Nein</label>
                                                                                    @else
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="accident_coverage{{$ncnt}}"
                                                                                               id="btnradiis1_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                        >
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradiis1_{{$ncnt}}">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="accident_coverage{{$ncnt}}"
                                                                                               id="btnradiooo1_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradiooo1_{{$ncnt}}">Nein</label>
                                                                                    @endif
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="input-div1 mb-2">
                                                                            <div class="">
                                                                                <span class="">
                                                                                     Verkehrsrechtsschutz:
                                                                                </span>
                                                                            </div>
                                                                            @if(isset($nue->traffic_legal_protection))
                                                                                <div class="btn-group" role="group"
                                                                                     aria-label="Basic radio toggle button group">
                                                                                    @if($nue->traffic_legal_protection == 'Ja')
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="traffic_legal_protection{{$ncnt}}"
                                                                                               id="btnradio1a_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradio1a_{{$ncnt}}">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="traffic_legal_protection{{$ncnt}}"
                                                                                               id="btnradio1b_{{$ncnt}}"
                                                                                               autocomplete="off">
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1b_{{$ncnt}}">Nein</label>
                                                                                    @else
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="traffic_legal_protection{{$ncnt}}"
                                                                                               id="btnradio1a_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                        >
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradio1a_{{$ncnt}}">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="traffic_legal_protection{{$ncnt}}"
                                                                                               id="btnradio1b_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1b{{$ncnt}}">Nein</label>
                                                                                    @endif
                                                                                </div>
                                                                            @endif

                                                                        </div>
                                                                        <div class="input-div1 mb-2">
                                                                            <div class="">
                                                                                <span class="">
                                                                                    + Grobfahrlässigkeitschutz:
                                                                                </span>
                                                                            </div>
                                                                            @if(isset($nue->grossly))
                                                                                <div class="btn-group" role="group"
                                                                                     aria-label="Basic radio toggle button group">
                                                                                    @if($nue->grossly == 'Ja')
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="grossly{{$ncnt}}"
                                                                                               id="btnradio1ab_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradio1ab_{{$ncnt}}">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="grossly{{$ncnt}}"
                                                                                               id="btnradio1abc_{{$ncnt}}"
                                                                                               autocomplete="off">
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1abc_{{$ncnt}}">Nein</label>
                                                                                    @else
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="grossly{{$ncnt}}"
                                                                                               id="btnradio1ab_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                        >
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradio1ab_{{$ncnt}}">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="grossly{{$ncnt}}"
                                                                                               id="btnradio1abc_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1abc_{{$ncnt}}">Nein</label>
                                                                                    @endif
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                        <div class="input-div1 mb-2">
                                                                            <div class="">
                                                                                <span class="">

                                                                                </span>
                                                                            </div>
                                                                            @if(isset($nue->glass_protection))
                                                                                <div class="btn-group" role="group"
                                                                                     aria-label="Basic radio toggle button group">
                                                                                    @if($nue->glass_protection == 'Ja')

                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="glass_protection{{$ncnt}}"
                                                                                               id="btnradio1abbbe_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradio1abbbe_{{$ncnt}}">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="glass_protection{{$ncnt}}"
                                                                                               id="btnradio1abceeef_{{$ncnt}}"
                                                                                               autocomplete="off">
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1abceeef_{{$ncnt}}">Nein</label>
                                                                                    @else
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="glass_protection{{$ncnt}}"
                                                                                               id="btnradio1abbbe_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                        >
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradio1abbbe_{{$ncnt}}">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="glass_protection{{$ncnt}}"
                                                                                               id="btnradio1abceeef_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1abceeef_{{$ncnt}}">Nein</label>
                                                                                    @endif
                                                                                </div>
                                                                            @endif

                                                                        </div>
                                                                        <div class="input-div1 mb-2">
                                                                            <div class="">
                                                                                <span class="">
                                                                                    + Parkschaden:
                                                                                </span>
                                                                            </div>
                                                                            @if(isset($nue->parking_damage))
                                                                                <div class="btn-group" role="group"
                                                                                     aria-label="Basic radio toggle button group">
                                                                                    @if($nue->parking_damage == 'Ja')
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="parking_damage{{$ncnt}}"
                                                                                               id="btnradio1abce_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradio1abce">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="parking_damage{{$ncnt}}"
                                                                                               id="btnradio1abcdef_{{$ncnt}}"
                                                                                               autocomplete="off">
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1abcdef_{{$ncnt}}">Nein</label>
                                                                                    @else
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="parking_damage{{$ncnt}}"
                                                                                               id="btnradio1abce_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                        >
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradio1abce_{{$ncnt}}">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="parking_damage{{$ncnt}}"
                                                                                               id="btnradio1abcdef_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1abcdef_{{$ncnt}}">Nein</label>
                                                                                    @endif
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                        <div class="input-div1 mb-2">
                                                                            <div class="">
                                                                                <span class="">
                                                                                    + 24h Pannenhilfe:
                                                                                </span>
                                                                            </div>
                                                                            @if(isset($nue->hour_breakdown_assistance))
                                                                                <div class="btn-group" role="group"
                                                                                     aria-label="Basic radio toggle button group">
                                                                                    @if($nue->hour_breakdown_assistance == 'Ja')
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="hour_breakdown_assistance{{$ncnt}}"
                                                                                               id="btnradio1abceee_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradio1abceee">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="hour_breakdown_assistance{{$ncnt}}"
                                                                                               id="btnradio1abcdeff_{{$ncnt}}"
                                                                                               autocomplete="off">
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1abcdeff_{{$ncnt}}">Nein</label>
                                                                                    @else
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="hour_breakdown_assistance{{$ncnt}}"
                                                                                               id="btnradio1abceee_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                        >
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja"
                                                                                            for="btnradio1abceee_{{$ncnt}}">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="hour_breakdown_assistance{{$ncnt}}"
                                                                                               id="btnradio1abcdeff_{{$ncnt}}"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1abcdeff_{{$ncnt}}">Nein</label>
                                                                                    @endif
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php $ncnt++; @endphp
                                                    @endforeach
                                                    <div class="text-center mt-3" style="margin-top: -30px" id="add_n"
                                                         onclick="addanother_item_n()">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.694"
                                                             height="37.694"
                                                             viewBox="0 0 37.694 37.694" style="cursor:pointer;">
                                                            <g id="Group_621" data-name="Group 621"
                                                               transform="translate(-663.236 -976.679)">
                                                                <g id="Group_550" data-name="Group 550"
                                                                   transform="translate(663.236 976.679)">
                                                                    <rect id="Rectangle_9" data-name="Rectangle 9"
                                                                          width="37.694" height="37.694" rx="18.847"
                                                                          fill="#C8C8C8"/>
                                                                    <g id="Group_42" data-name="Group 42"
                                                                       transform="translate(12.724 12.724)">
                                                                        <line id="Line_11" data-name="Line 11"
                                                                              y2="11.972"
                                                                              transform="translate(5.986 0)" fill="none"
                                                                              stroke="#fff" stroke-linecap="round"
                                                                              stroke-width="2"/>
                                                                        <line id="Line_12" data-name="Line 12"
                                                                              x1="11.972"
                                                                              transform="translate(0 5.634)" fill="none"
                                                                              stroke="#fff" stroke-linecap="round"
                                                                              stroke-width="2"/>
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
                            <div class="text-center mt-3 pb-3">
                                <div class="row mx-2 mx-sm-4">
                                    @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice'))
                                        <addtask3 url="{{config('app.url')}}" :client_id="{{$lead->id}}"
                                                  :lead_id="{{$lead->lead->id}}" :admin_id="{{$admin_id}}"></addtask3>
                                    @endif
                                    <div class="text-center mt-3 pb-3">
                                        <div class="row">
                                            <div class="col g-0 text-end my-auto">
                                                <div class="">
                                                    <span id="nextonee__" onclick="nextonee()" class="pe-2" style="color: #9F9F9F;cursor: pointer">
                                                        Uberspringen
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col g-0 text-start">
                                                <div id="buton">
                                                    <button class="px-5 py-2" type="button"
                                                            style="border: none; border-radius: 9px; background-color:#285F52;"
                                                            id="nextonee__" onclick="nextonee()">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="58.155"
                                                             height="19.159" viewBox="0 0 58.155 19.159">
                                                            <g id="Group_453" data-name="Group 453"
                                                               transform="translate(0.004)">
                                                                <line id="Line_16" data-name="Line 16" x2="51.954"
                                                                      y2="0.2"
                                                                      transform="translate(0 9.287)" fill="none"
                                                                      stroke="#3fd599" stroke-width="2"/>
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
                        </div>


                        <div class="tab-pane fade  sachen-content" id="nav-contact" role="tabpanel"
                             aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="my-3 mx-3"
                                         style="color:#434343; background-color: #EFEFEF; border-radius: 13px;">
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
                                                                    <span class="" style="font-size: 15px;">
                                                                        Nationalitat:
                                                                    </span>
                                                            </div>
                                                            @php $data->things = \App\Models\LeadDataThings::where('person_id',$id)->latest()->first() @endphp
                                                            <select onchange="hideNation()"  class="form-select w-75" name="nationality_sachen" id="schweiz">
                                                            @if(isset($data->things->nationality))
                                                                    <option value="{{$data->things->nationality}}" selected>{{$data->things->nationality}}</option>
                                                                    <option value="CH">Schweiz</option>
                                                                    <option value="DE">Deutschland</option>
                                                                    <option value="AT">Österreich</option>
                                                                    <optgroup label="A">
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="EG">Ägypten</option>
                                                                        <option value="AX">Åland</option>
                                                                        <option value="AL">Albanien</option>
                                                                        <option value="DZ">Algerien</option>
                                                                        <option value="AS">Amerikanisch-Samoa</option>
                                                                        <option value="VI">Amerikanische Jungferninseln</option>
                                                                        <option value="AD">Andorra</option>
                                                                        <option value="AO">Angola</option>
                                                                        <option value="AI">Anguilla</option>
                                                                        <option value="AQ">Antarktis</option>
                                                                        <option value="AG">Antigua und Barbuda</option>
                                                                        <option value="GQ">Äquatorialguinea</option>
                                                                        <option value="AR">Argentinien</option>
                                                                        <option value="AM">Armenien</option>
                                                                        <option value="AW">Aruba</option>
                                                                        <option value="AC">Ascension</option>
                                                                        <option value="AZ">Aserbaidschan</option>
                                                                        <option value="ET">Äthiopien</option>
                                                                        <option value="AU">Australien</option>
                                                                    </optgroup>
                                                                    <optgroup label="B">
                                                                        <option value="BS">Bahamas</option>
                                                                        <option value="BH">Bahrain</option>
                                                                        <option value="BD">Bangladesch</option>
                                                                        <option value="BB">Barbados</option>
                                                                        <option value="BY">Belarus (Weißrussland)</option>
                                                                        <option value="BE">Belgien</option>
                                                                        <option value="BZ">Belize</option>
                                                                        <option value="BJ">Benin</option>
                                                                        <option value="BM">Bermuda</option>
                                                                        <option value="BT">Bhutan</option>
                                                                        <option value="BO">Bolivien</option>
                                                                        <option value="BA">Bosnien und Herzegowina</option>
                                                                        <option value="BW">Botswana</option>
                                                                        <option value="BV">Bouvetinsel</option>
                                                                        <option value="BR">Brasilien</option>
                                                                        <option value="VG">Britische Jungferninseln</option>
                                                                        <option value="IO">Britisches Territorium im Indischen Ozean</option>
                                                                        <option value="BN">Brunei Darussalam</option>
                                                                        <option value="BG">Bulgarien</option>
                                                                        <option value="BF">Burkina Faso</option>
                                                                        <option value="BI">Burundi</option>
                                                                    </optgroup>
                                                                    <optgroup label="C">
                                                                        <option value="EA">Ceuta, Melilla</option>
                                                                        <option value="CL">Chile</option>
                                                                        <option value="CN">Volksrepublik China</option>
                                                                        <option value="CP">Clipperton</option>
                                                                        <option value="CK">Cookinseln</option>
                                                                        <option value="CR">Costa Rica</option>
                                                                        <option value="CI">Côte d'Ivoire (Elfenbeinküste)</option>
                                                                    </optgroup>
                                                                    <optgroup label="D">
                                                                        <option value="DK">Dänemark</option>
                                                                        <option value="DE">Deutschland</option>
                                                                        <option value="DG">Diego Garcia</option>
                                                                        <option value="DM">Dominica</option>
                                                                        <option value="DO">Dominikanische Republik</option>
                                                                        <option value="DJ">Dschibuti</option>
                                                                    </optgroup>
                                                                    <optgroup label="E">
                                                                        <option value="EC">Ecuador</option>
                                                                        <option value="SV">El Salvador</option>
                                                                        <option value="ER">Eritrea</option>
                                                                        <option value="EE">Estland</option>
                                                                    </optgroup>
                                                                    <optgroup label="F">
                                                                        <option value="FK">Falklandinseln</option>
                                                                        <option value="FO">Färöer</option>
                                                                        <option value="FJ">Fidschi</option>
                                                                        <option value="FI">Finnland</option>
                                                                        <option value="FR">Frankreich</option>
                                                                        <option value="GF">Französisch-Guayana</option>
                                                                        <option value="PF">Französisch-Polynesien</option>
                                                                    </optgroup>
                                                                    <optgroup label="G">
                                                                        <option value="GA">Gabun</option>
                                                                        <option value="GM">Gambia</option>
                                                                        <option value="GE">Georgien</option>
                                                                        <option value="GH">Ghana</option>
                                                                        <option value="GI">Gibraltar</option>
                                                                        <option value="GD">Grenada</option>
                                                                        <option value="GR">Griechenland</option>
                                                                        <option value="GL">Grönland</option>
                                                                        <option value="GB">Großbritannien</option>
                                                                        <option value="GP">Guadeloupe</option>
                                                                        <option value="GU">Guam</option>
                                                                        <option value="GT">Guatemala</option>
                                                                        <option value="GG">Guernsey (Kanalinsel)</option>
                                                                        <option value="GN">Guinea</option>
                                                                        <option value="GW">Guinea-Bissau</option>
                                                                        <option value="GY">Guyana</option>
                                                                    </optgroup>
                                                                    <optgroup label="H">
                                                                        <option value="HT">Haiti</option>
                                                                        <option value="HM">Heard- und McDonald-Inseln</option>
                                                                        <option value="HN">Honduras</option>
                                                                        <option value="HK">Hongkong</option>
                                                                    </optgroup>
                                                                    <optgroup label="I">
                                                                        <option value="IN">Indien</option>
                                                                        <option value="ID">Indonesien</option>
                                                                        <option value="IM">Insel Man</option>
                                                                        <option value="IQ">Irak</option>
                                                                        <option value="IR">Iran</option>
                                                                        <option value="IE">Irland</option>
                                                                        <option value="IS">Island</option>
                                                                        <option value="IL">Israel</option>
                                                                        <option value="IT">Italien</option>
                                                                    </optgroup>
                                                                    <optgroup label="J">
                                                                        <option value="JM">Jamaika</option>
                                                                        <option value="JP">Japan</option>
                                                                        <option value="YE">Jemen</option>
                                                                        <option value="JE">Jersey (Kanalinsel)</option>
                                                                        <option value="JO">Jordanien</option>
                                                                    </optgroup>
                                                                    <optgroup label="K">
                                                                        <option value="KY">Kaimaninseln</option>
                                                                        <option value="KH">Kambodscha</option>
                                                                        <option value="CM">Kamerun</option>
                                                                        <option value="CA">Kanada</option>
                                                                        <option value="IC">Kanarische Inseln</option>
                                                                        <option value="CV">Kap Verde</option>
                                                                        <option value="KZ">Kasachstan</option>
                                                                        <option value="QA">Katar</option>
                                                                        <option value="KE">Kenia</option>
                                                                        <option value="KG">Kirgisistan</option>
                                                                        <option value="KI">Kiribati</option>
                                                                        <option value="CC">Kokosinseln</option>
                                                                        <option value="CO">Kolumbien</option>
                                                                        <option value="KM">Komoren</option>
                                                                        <option value="CD">Demokratische Republik Kongo</option>
                                                                        <option value="KP">Demokratische Volksrepublik Korea (Nordkorea)</option>
                                                                        <option value="KR">Republik Korea (Südkorea)</option>
                                                                        <option value="KOS">Kosovo</option>
                                                                        <option value="HR">Kroatien</option>
                                                                        <option value="CU">Kuba</option>
                                                                        <option value="KW">Kuwait</option>
                                                                    </optgroup>
                                                                    <optgroup label="L">
                                                                        <option value="LA">Laos</option>
                                                                        <option value="LS">Lesotho</option>
                                                                        <option value="LV">Lettland</option>
                                                                        <option value="LB">Libanon</option>
                                                                        <option value="LR">Liberia</option>
                                                                        <option value="LY">Libyen</option>
                                                                        <option value="LI">Liechtenstein</option>
                                                                        <option value="LT">Litauen</option>
                                                                        <option value="LU">Luxemburg</option>
                                                                    </optgroup>
                                                                    <optgroup label="M">
                                                                        <option value="MO">Macao</option>
                                                                        <option value="MG">Madagaskar</option>
                                                                        <option value="MW">Malawi</option>
                                                                        <option value="MY">Malaysia</option>
                                                                        <option value="MV">Malediven</option>
                                                                        <option value="ML">Mali</option>
                                                                        <option value="MT">Malta</option>
                                                                        <option value="MA">Marokko</option>
                                                                        <option value="MH">Marshallinseln</option>
                                                                        <option value="MQ">Martinique</option>
                                                                        <option value="MR">Mauretanien</option>
                                                                        <option value="MU">Mauritius</option>
                                                                        <option value="YT">Mayotte</option>
                                                                        <option value="MK">Mazedonien</option>
                                                                        <option value="MX">Mexiko</option>
                                                                        <option value="FM">Mikronesien</option>
                                                                        <option value="MD">Moldawien (Republik Moldau)</option>
                                                                        <option value="MC">Monaco</option>
                                                                        <option value="MN">Mongolei</option>
                                                                        <option value="ME">Montenegro</option>
                                                                        <option value="MS">Montserrat</option>
                                                                        <option value="MZ">Mosambik</option>
                                                                        <option value="MM">Myanmar (Burma)</option>
                                                                    </optgroup>
                                                                    <optgroup label="N">
                                                                        <option value="NA">Namibia</option>
                                                                        <option value="NR">Nauru</option>
                                                                        <option value="NP">Nepal</option>
                                                                        <option value="NC">Neukaledonien</option>
                                                                        <option value="NZ">Neuseeland</option>
                                                                        <option value="NI">Nicaragua</option>
                                                                        <option value="NL">Niederlande</option>
                                                                        <option value="AN">Niederländische Antillen</option>
                                                                        <option value="NE">Niger</option>
                                                                        <option value="NG">Nigeria</option>
                                                                        <option value="NU">Niue</option>
                                                                        <option value="MP">Nördliche Marianen</option>
                                                                        <option value="NF">Norfolkinsel</option>
                                                                        <option value="NO">Norwegen</option>
                                                                    </optgroup>
                                                                    <optgroup label="O">
                                                                        <option value="OM">Oman</option>
                                                                        <option value="XO">Orbit</option>
                                                                        <option value="AT">Österreich</option>
                                                                        <option value="TL">Osttimor (Timor-Leste)</option>
                                                                    </optgroup>
                                                                    <optgroup label="P">
                                                                        <option value="PK">Pakistan</option>
                                                                        <option value="PS">Palästinensische Autonomiegebiete</option>
                                                                        <option value="PW">Palau</option>
                                                                        <option value="PA">Panama</option>
                                                                        <option value="PG">Papua-Neuguinea</option>
                                                                        <option value="PY">Paraguay</option>
                                                                        <option value="PE">Peru</option>
                                                                        <option value="PH">Philippinen</option>
                                                                        <option value="PN">Pitcairninseln</option>
                                                                        <option value="PL">Polen</option>
                                                                        <option value="PT">Portugal</option>
                                                                        <option value="PR">Puerto Rico</option>
                                                                    </optgroup>
                                                                    <optgroup label="Q">
                                                                    </optgroup>
                                                                    <optgroup label="R">
                                                                        <option value="TW">Republik China (Taiwan)</option>
                                                                        <option value="CG">Republik Kongo</option>
                                                                        <option value="RE">Réunion</option>
                                                                        <option value="RW">Ruanda</option>
                                                                        <option value="RO">Rumänien</option>
                                                                        <option value="RU">Russische Föderation</option>
                                                                    </optgroup>
                                                                    <optgroup label="S">
                                                                        <option value="BL">Saint-Barthélemy</option>
                                                                        <option value="MF">Saint-Martin</option>
                                                                        <option value="SB">Salomonen</option>
                                                                        <option value="ZM">Sambia</option>
                                                                        <option value="WS">Samoa</option>
                                                                        <option value="SM">San Marino</option>
                                                                        <option value="ST">São Tomé und Príncipe</option>
                                                                        <option value="SA">Saudi-Arabien</option>
                                                                        <option value="SE">Schweden</option>
                                                                        <option value="CH">Schweiz</option>
                                                                        <option value="SN">Senegal</option>
                                                                        <option value="RS">Serbien</option>
                                                                        <option value="SC">Seychellen</option>
                                                                        <option value="SL">Sierra Leone</option>
                                                                        <option value="ZW">Simbabwe</option>
                                                                        <option value="SG">Singapur</option>
                                                                        <option value="SK">Slowakei</option>
                                                                        <option value="SI">Slowenien</option>
                                                                        <option value="SO">Somalia</option>
                                                                        <option value="ES">Spanien</option>
                                                                        <option value="LK">Sri Lanka</option>
                                                                        <option value="SH">St. Helena</option>
                                                                        <option value="KN">St. Kitts und Nevis</option>
                                                                        <option value="LC">St. Lucia</option>
                                                                        <option value="PM">Saint-Pierre und Miquelon</option>
                                                                        <option value="VC">St. Vincent und die Grenadinen</option>
                                                                        <option value="ZA">Südafrika</option>
                                                                        <option value="SD">Sudan</option>
                                                                        <option value="GS">Südgeorgien und die Südlichen Sandwichinseln</option>
                                                                        <option value="SR">Suriname</option>
                                                                        <option value="SJ">Svalbard und Jan Mayen</option>
                                                                        <option value="SZ">Swasiland</option>
                                                                        <option value="SY">Syrien</option>
                                                                    </optgroup>
                                                                    <optgroup label="T">
                                                                        <option value="TJ">Tadschikistan</option>
                                                                        <option value="TZ">Tansania</option>
                                                                        <option value="TH">Thailand</option>
                                                                        <option value="TG">Togo</option>
                                                                        <option value="TK">Tokelau</option>
                                                                        <option value="TO">Tonga</option>
                                                                        <option value="TT">Trinidad und Tobago</option>
                                                                        <option value="TA">Tristan da Cunha</option>
                                                                        <option value="TD">Tschad</option>
                                                                        <option value="CZ">Tschechische Republik</option>
                                                                        <option value="TN">Tunesien</option>
                                                                        <option value="TR">Türkei</option>
                                                                        <option value="TM">Turkmenistan</option>
                                                                        <option value="TC">Turks- und Caicosinseln</option>
                                                                        <option value="TV">Tuvalu</option>
                                                                    </optgroup>
                                                                    <optgroup label="U">
                                                                        <option value="UG">Uganda</option>
                                                                        <option value="UA">Ukraine</option>
                                                                        <option value="HU">Ungarn</option>
                                                                        <option value="UY">Uruguay</option>
                                                                        <option value="UZ">Usbekistan</option>
                                                                    </optgroup>
                                                                    <optgroup label="V">
                                                                        <option value="VU">Vanuatu</option>
                                                                        <option value="VA">Vatikanstadt</option>
                                                                        <option value="VE">Venezuela</option>
                                                                        <option value="AE">Vereinigte Arabische Emirate</option>
                                                                        <option value="US">Vereinigte Staaten von Amerika (USA)</option>
                                                                        <option value="GB">Vereinigtes Königreich Großbritannien und Nordirland</option>
                                                                        <option value="VN">Vietnam</option>
                                                                    </optgroup>
                                                                    <optgroup label="W">
                                                                        <option value="WF">Wallis und Futuna</option>
                                                                        <option value="CX">Weihnachtsinsel</option>
                                                                        <option value="EH">Westsahara</option>
                                                                    </optgroup>
                                                                    <optgroup label="Z">
                                                                        <option value="CF">Zentralafrikanische Republik</option>
                                                                        <option value="CY">Zypern</option>
                                                                    </optgroup>

                                                            @else
                                                                    <option selected></option>
                                                                    <option value="CH">Schweiz</option>
                                                                    <option value="DE">Deutschland</option>
                                                                    <option value="AT">Österreich</option>
                                                                    <optgroup label="A">
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="EG">Ägypten</option>
                                                                        <option value="AX">Åland</option>
                                                                        <option value="AL">Albanien</option>
                                                                        <option value="DZ">Algerien</option>
                                                                        <option value="AS">Amerikanisch-Samoa</option>
                                                                        <option value="VI">Amerikanische Jungferninseln</option>
                                                                        <option value="AD">Andorra</option>
                                                                        <option value="AO">Angola</option>
                                                                        <option value="AI">Anguilla</option>
                                                                        <option value="AQ">Antarktis</option>
                                                                        <option value="AG">Antigua und Barbuda</option>
                                                                        <option value="GQ">Äquatorialguinea</option>
                                                                        <option value="AR">Argentinien</option>
                                                                        <option value="AM">Armenien</option>
                                                                        <option value="AW">Aruba</option>
                                                                        <option value="AC">Ascension</option>
                                                                        <option value="AZ">Aserbaidschan</option>
                                                                        <option value="ET">Äthiopien</option>
                                                                        <option value="AU">Australien</option>
                                                                    </optgroup>
                                                                    <optgroup label="B">
                                                                        <option value="BS">Bahamas</option>
                                                                        <option value="BH">Bahrain</option>
                                                                        <option value="BD">Bangladesch</option>
                                                                        <option value="BB">Barbados</option>
                                                                        <option value="BY">Belarus (Weißrussland)</option>
                                                                        <option value="BE">Belgien</option>
                                                                        <option value="BZ">Belize</option>
                                                                        <option value="BJ">Benin</option>
                                                                        <option value="BM">Bermuda</option>
                                                                        <option value="BT">Bhutan</option>
                                                                        <option value="BO">Bolivien</option>
                                                                        <option value="BA">Bosnien und Herzegowina</option>
                                                                        <option value="BW">Botswana</option>
                                                                        <option value="BV">Bouvetinsel</option>
                                                                        <option value="BR">Brasilien</option>
                                                                        <option value="VG">Britische Jungferninseln</option>
                                                                        <option value="IO">Britisches Territorium im Indischen Ozean</option>
                                                                        <option value="BN">Brunei Darussalam</option>
                                                                        <option value="BG">Bulgarien</option>
                                                                        <option value="BF">Burkina Faso</option>
                                                                        <option value="BI">Burundi</option>
                                                                    </optgroup>
                                                                    <optgroup label="C">
                                                                        <option value="EA">Ceuta, Melilla</option>
                                                                        <option value="CL">Chile</option>
                                                                        <option value="CN">Volksrepublik China</option>
                                                                        <option value="CP">Clipperton</option>
                                                                        <option value="CK">Cookinseln</option>
                                                                        <option value="CR">Costa Rica</option>
                                                                        <option value="CI">Côte d'Ivoire (Elfenbeinküste)</option>
                                                                    </optgroup>
                                                                    <optgroup label="D">
                                                                        <option value="DK">Dänemark</option>
                                                                        <option value="DE">Deutschland</option>
                                                                        <option value="DG">Diego Garcia</option>
                                                                        <option value="DM">Dominica</option>
                                                                        <option value="DO">Dominikanische Republik</option>
                                                                        <option value="DJ">Dschibuti</option>
                                                                    </optgroup>
                                                                    <optgroup label="E">
                                                                        <option value="EC">Ecuador</option>
                                                                        <option value="SV">El Salvador</option>
                                                                        <option value="ER">Eritrea</option>
                                                                        <option value="EE">Estland</option>
                                                                    </optgroup>
                                                                    <optgroup label="F">
                                                                        <option value="FK">Falklandinseln</option>
                                                                        <option value="FO">Färöer</option>
                                                                        <option value="FJ">Fidschi</option>
                                                                        <option value="FI">Finnland</option>
                                                                        <option value="FR">Frankreich</option>
                                                                        <option value="GF">Französisch-Guayana</option>
                                                                        <option value="PF">Französisch-Polynesien</option>
                                                                    </optgroup>
                                                                    <optgroup label="G">
                                                                        <option value="GA">Gabun</option>
                                                                        <option value="GM">Gambia</option>
                                                                        <option value="GE">Georgien</option>
                                                                        <option value="GH">Ghana</option>
                                                                        <option value="GI">Gibraltar</option>
                                                                        <option value="GD">Grenada</option>
                                                                        <option value="GR">Griechenland</option>
                                                                        <option value="GL">Grönland</option>
                                                                        <option value="GB">Großbritannien</option>
                                                                        <option value="GP">Guadeloupe</option>
                                                                        <option value="GU">Guam</option>
                                                                        <option value="GT">Guatemala</option>
                                                                        <option value="GG">Guernsey (Kanalinsel)</option>
                                                                        <option value="GN">Guinea</option>
                                                                        <option value="GW">Guinea-Bissau</option>
                                                                        <option value="GY">Guyana</option>
                                                                    </optgroup>
                                                                    <optgroup label="H">
                                                                        <option value="HT">Haiti</option>
                                                                        <option value="HM">Heard- und McDonald-Inseln</option>
                                                                        <option value="HN">Honduras</option>
                                                                        <option value="HK">Hongkong</option>
                                                                    </optgroup>
                                                                    <optgroup label="I">
                                                                        <option value="IN">Indien</option>
                                                                        <option value="ID">Indonesien</option>
                                                                        <option value="IM">Insel Man</option>
                                                                        <option value="IQ">Irak</option>
                                                                        <option value="IR">Iran</option>
                                                                        <option value="IE">Irland</option>
                                                                        <option value="IS">Island</option>
                                                                        <option value="IL">Israel</option>
                                                                        <option value="IT">Italien</option>
                                                                    </optgroup>
                                                                    <optgroup label="J">
                                                                        <option value="JM">Jamaika</option>
                                                                        <option value="JP">Japan</option>
                                                                        <option value="YE">Jemen</option>
                                                                        <option value="JE">Jersey (Kanalinsel)</option>
                                                                        <option value="JO">Jordanien</option>
                                                                    </optgroup>
                                                                    <optgroup label="K">
                                                                        <option value="KY">Kaimaninseln</option>
                                                                        <option value="KH">Kambodscha</option>
                                                                        <option value="CM">Kamerun</option>
                                                                        <option value="CA">Kanada</option>
                                                                        <option value="IC">Kanarische Inseln</option>
                                                                        <option value="CV">Kap Verde</option>
                                                                        <option value="KZ">Kasachstan</option>
                                                                        <option value="QA">Katar</option>
                                                                        <option value="KE">Kenia</option>
                                                                        <option value="KG">Kirgisistan</option>
                                                                        <option value="KI">Kiribati</option>
                                                                        <option value="CC">Kokosinseln</option>
                                                                        <option value="CO">Kolumbien</option>
                                                                        <option value="KM">Komoren</option>
                                                                        <option value="CD">Demokratische Republik Kongo</option>
                                                                        <option value="KP">Demokratische Volksrepublik Korea (Nordkorea)</option>
                                                                        <option value="KR">Republik Korea (Südkorea)</option>
                                                                        <option value="KOS">Kosovo</option>
                                                                        <option value="HR">Kroatien</option>
                                                                        <option value="CU">Kuba</option>
                                                                        <option value="KW">Kuwait</option>
                                                                    </optgroup>
                                                                    <optgroup label="L">
                                                                        <option value="LA">Laos</option>
                                                                        <option value="LS">Lesotho</option>
                                                                        <option value="LV">Lettland</option>
                                                                        <option value="LB">Libanon</option>
                                                                        <option value="LR">Liberia</option>
                                                                        <option value="LY">Libyen</option>
                                                                        <option value="LI">Liechtenstein</option>
                                                                        <option value="LT">Litauen</option>
                                                                        <option value="LU">Luxemburg</option>
                                                                    </optgroup>
                                                                    <optgroup label="M">
                                                                        <option value="MO">Macao</option>
                                                                        <option value="MG">Madagaskar</option>
                                                                        <option value="MW">Malawi</option>
                                                                        <option value="MY">Malaysia</option>
                                                                        <option value="MV">Malediven</option>
                                                                        <option value="ML">Mali</option>
                                                                        <option value="MT">Malta</option>
                                                                        <option value="MA">Marokko</option>
                                                                        <option value="MH">Marshallinseln</option>
                                                                        <option value="MQ">Martinique</option>
                                                                        <option value="MR">Mauretanien</option>
                                                                        <option value="MU">Mauritius</option>
                                                                        <option value="YT">Mayotte</option>
                                                                        <option value="MK">Mazedonien</option>
                                                                        <option value="MX">Mexiko</option>
                                                                        <option value="FM">Mikronesien</option>
                                                                        <option value="MD">Moldawien (Republik Moldau)</option>
                                                                        <option value="MC">Monaco</option>
                                                                        <option value="MN">Mongolei</option>
                                                                        <option value="ME">Montenegro</option>
                                                                        <option value="MS">Montserrat</option>
                                                                        <option value="MZ">Mosambik</option>
                                                                        <option value="MM">Myanmar (Burma)</option>
                                                                    </optgroup>
                                                                    <optgroup label="N">
                                                                        <option value="NA">Namibia</option>
                                                                        <option value="NR">Nauru</option>
                                                                        <option value="NP">Nepal</option>
                                                                        <option value="NC">Neukaledonien</option>
                                                                        <option value="NZ">Neuseeland</option>
                                                                        <option value="NI">Nicaragua</option>
                                                                        <option value="NL">Niederlande</option>
                                                                        <option value="AN">Niederländische Antillen</option>
                                                                        <option value="NE">Niger</option>
                                                                        <option value="NG">Nigeria</option>
                                                                        <option value="NU">Niue</option>
                                                                        <option value="MP">Nördliche Marianen</option>
                                                                        <option value="NF">Norfolkinsel</option>
                                                                        <option value="NO">Norwegen</option>
                                                                    </optgroup>
                                                                    <optgroup label="O">
                                                                        <option value="OM">Oman</option>
                                                                        <option value="XO">Orbit</option>
                                                                        <option value="AT">Österreich</option>
                                                                        <option value="TL">Osttimor (Timor-Leste)</option>
                                                                    </optgroup>
                                                                    <optgroup label="P">
                                                                        <option value="PK">Pakistan</option>
                                                                        <option value="PS">Palästinensische Autonomiegebiete</option>
                                                                        <option value="PW">Palau</option>
                                                                        <option value="PA">Panama</option>
                                                                        <option value="PG">Papua-Neuguinea</option>
                                                                        <option value="PY">Paraguay</option>
                                                                        <option value="PE">Peru</option>
                                                                        <option value="PH">Philippinen</option>
                                                                        <option value="PN">Pitcairninseln</option>
                                                                        <option value="PL">Polen</option>
                                                                        <option value="PT">Portugal</option>
                                                                        <option value="PR">Puerto Rico</option>
                                                                    </optgroup>
                                                                    <optgroup label="Q">
                                                                    </optgroup>
                                                                    <optgroup label="R">
                                                                        <option value="TW">Republik China (Taiwan)</option>
                                                                        <option value="CG">Republik Kongo</option>
                                                                        <option value="RE">Réunion</option>
                                                                        <option value="RW">Ruanda</option>
                                                                        <option value="RO">Rumänien</option>
                                                                        <option value="RU">Russische Föderation</option>
                                                                    </optgroup>
                                                                    <optgroup label="S">
                                                                        <option value="BL">Saint-Barthélemy</option>
                                                                        <option value="MF">Saint-Martin</option>
                                                                        <option value="SB">Salomonen</option>
                                                                        <option value="ZM">Sambia</option>
                                                                        <option value="WS">Samoa</option>
                                                                        <option value="SM">San Marino</option>
                                                                        <option value="ST">São Tomé und Príncipe</option>
                                                                        <option value="SA">Saudi-Arabien</option>
                                                                        <option value="SE">Schweden</option>
                                                                        <option value="CH">Schweiz</option>
                                                                        <option value="SN">Senegal</option>
                                                                        <option value="RS">Serbien</option>
                                                                        <option value="SC">Seychellen</option>
                                                                        <option value="SL">Sierra Leone</option>
                                                                        <option value="ZW">Simbabwe</option>
                                                                        <option value="SG">Singapur</option>
                                                                        <option value="SK">Slowakei</option>
                                                                        <option value="SI">Slowenien</option>
                                                                        <option value="SO">Somalia</option>
                                                                        <option value="ES">Spanien</option>
                                                                        <option value="LK">Sri Lanka</option>
                                                                        <option value="SH">St. Helena</option>
                                                                        <option value="KN">St. Kitts und Nevis</option>
                                                                        <option value="LC">St. Lucia</option>
                                                                        <option value="PM">Saint-Pierre und Miquelon</option>
                                                                        <option value="VC">St. Vincent und die Grenadinen</option>
                                                                        <option value="ZA">Südafrika</option>
                                                                        <option value="SD">Sudan</option>
                                                                        <option value="GS">Südgeorgien und die Südlichen Sandwichinseln</option>
                                                                        <option value="SR">Suriname</option>
                                                                        <option value="SJ">Svalbard und Jan Mayen</option>
                                                                        <option value="SZ">Swasiland</option>
                                                                        <option value="SY">Syrien</option>
                                                                    </optgroup>
                                                                    <optgroup label="T">
                                                                        <option value="TJ">Tadschikistan</option>
                                                                        <option value="TZ">Tansania</option>
                                                                        <option value="TH">Thailand</option>
                                                                        <option value="TG">Togo</option>
                                                                        <option value="TK">Tokelau</option>
                                                                        <option value="TO">Tonga</option>
                                                                        <option value="TT">Trinidad und Tobago</option>
                                                                        <option value="TA">Tristan da Cunha</option>
                                                                        <option value="TD">Tschad</option>
                                                                        <option value="CZ">Tschechische Republik</option>
                                                                        <option value="TN">Tunesien</option>
                                                                        <option value="TR">Türkei</option>
                                                                        <option value="TM">Turkmenistan</option>
                                                                        <option value="TC">Turks- und Caicosinseln</option>
                                                                        <option value="TV">Tuvalu</option>
                                                                    </optgroup>
                                                                    <optgroup label="U">
                                                                        <option value="UG">Uganda</option>
                                                                        <option value="UA">Ukraine</option>
                                                                        <option value="HU">Ungarn</option>
                                                                        <option value="UY">Uruguay</option>
                                                                        <option value="UZ">Usbekistan</option>
                                                                    </optgroup>
                                                                    <optgroup label="V">
                                                                        <option value="VU">Vanuatu</option>
                                                                        <option value="VA">Vatikanstadt</option>
                                                                        <option value="VE">Venezuela</option>
                                                                        <option value="AE">Vereinigte Arabische Emirate</option>
                                                                        <option value="US">Vereinigte Staaten von Amerika (USA)</option>
                                                                        <option value="GB">Vereinigtes Königreich Großbritannien und Nordirland</option>
                                                                        <option value="VN">Vietnam</option>
                                                                    </optgroup>
                                                                    <optgroup label="W">
                                                                        <option value="WF">Wallis und Futuna</option>
                                                                        <option value="CX">Weihnachtsinsel</option>
                                                                        <option value="EH">Westsahara</option>
                                                                    </optgroup>
                                                                    <optgroup label="Z">
                                                                        <option value="CF">Zentralafrikanische Republik</option>
                                                                        <option value="CY">Zypern</option>
                                                                    </optgroup>
                                                            @endif
                                                            </select>
                                                        </div>
                                                        <div class="input-select-div mb-2" id="admin">
                                                            <div class="">
                                                                    <span class="" style="font-size: 15px;">
                                                                        Aufenthaltsgenehmigung
                                                                    </span>
                                                            </div>
                                                            <select name="residence_permit" class="form-select w-75"
                                                                    aria-label="Default select example">
                                                                @if(isset($data->things->residence_permit))
                                                                    <option value="{{$data->things->residence_permit}}"
                                                                            selected>{{$data->things->residence_permit}}</option>
                                                                    <option value="Aufenthaltsbewilligung (Ausweis B)">
                                                                        Aufenthaltsbewilligung (Ausweis B)
                                                                    </option>
                                                                    <option value="Niederlassungsausweis (Ausweis C)">
                                                                        Niederlassungsausweis (Ausweis C)
                                                                    </option>
                                                                    <option
                                                                        value="Aufenthaltsbewilligung mit Erwerbstätigkeit (AUsweis Ci)">
                                                                        Aufenthaltsbewilligung mit Erwerbstätigkeit
                                                                        (AUsweis Ci)
                                                                    </option>
                                                                    <option value="Grenzgängerbewilligung (Auweis G)">
                                                                        Grenzgängerbewilligung (Auweis G)
                                                                    </option>
                                                                    <option
                                                                        value=" Kurzaufenthaltsbewilligung (Ausweis L)">
                                                                        Kurzaufenthaltsbewilligung (Ausweis L)
                                                                    </option>
                                                                    <option
                                                                        value="Vorläufig aufenommene Ausländer (Ausweis F)">
                                                                        Vorläufig aufenommene Ausländer (Ausweis F)
                                                                    </option>
                                                                    <option value="Asylsuchende (Ausweis N)">
                                                                        Asylsuchende (Ausweis N)
                                                                    </option>
                                                                    <option value="Schutzbedürftige (Ausweis S)">
                                                                        Schutzbedürftige (Ausweis S)
                                                                    </option>
                                                                @else
                                                                    <option selected></option>
                                                                    <option value="Aufenthaltsbewilligung (Ausweis B)">
                                                                        Aufenthaltsbewilligung (Ausweis B)
                                                                    </option>
                                                                    <option value="Niederlassungsausweis (Ausweis C)">
                                                                        Niederlassungsausweis (Ausweis C)
                                                                    </option>
                                                                    <option
                                                                        value="Aufenthaltsbewilligung mit Erwerbstätigkeit (AUsweis Ci)">
                                                                        Aufenthaltsbewilligung mit Erwerbstätigkeit
                                                                        (AUsweis Ci)
                                                                    </option>
                                                                    <option value="Grenzgängerbewilligung (Auweis G)">
                                                                        Grenzgängerbewilligung (Auweis G)
                                                                    </option>
                                                                    <option
                                                                        value=" Kurzaufenthaltsbewilligung (Ausweis L)">
                                                                        Kurzaufenthaltsbewilligung (Ausweis L)
                                                                    </option>
                                                                    <option
                                                                        value="Vorläufig aufenommene Ausländer (Ausweis F)">
                                                                        Vorläufig aufenommene Ausländer (Ausweis F)
                                                                    </option>
                                                                    <option value="Asylsuchende (Ausweis N)">
                                                                        Asylsuchende (Ausweis N)
                                                                    </option>
                                                                    <option value="Schutzbedürftige (Ausweis S)">
                                                                        Schutzbedürftige (Ausweis S)
                                                                    </option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class=" mb-2">
                                                            <label for="telephone_nr">Telefonnumer </label> <br>
                                                            <div class="input-group">
                                                                @if(isset($data->things->telephone_nr))
                                                                    <input value="{{$data->things->telephone_nr}}"
                                                                           name="telephone_nr" id="int-tel" type="number"
                                                                           class="form-control">
                                                                @else
                                                                    <input name="telephone_nr" id="int-tel" type="number"
                                                                           class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="input-div1 mb-2">
                                                            <div class="">
                                                                    <span class="" style="font-size: 15px;">
                                                                        Email
                                                                    </span>
                                                            </div>
                                                            @if(isset($data->things->email))
                                                                <input value="{{$data->things->email}}" name="email"
                                                                       class="form-control" type="email" id="">
                                                            @else
                                                                <input name="email" class="form-control" type="email" id="">
                                                            @endif
                                                        </div>
                                                        <div class="input-select-div mb-2">
                                                            <div class="">
                                                                    <span class="" style="font-size: 15px;">
                                                                        Zivilstand
                                                                    </span>
                                                            </div>
                                                            <select name="zivilstand" class="form-select w-75"
                                                                    aria-label="Default select example">
                                                                @if(isset($data->things->zivilstand))
                                                                    <option value="{{$data->things->zivilstand}}"
                                                                            selected>{{$data->things->zivilstand}}</option>
                                                                    <option value="ledig">Ledig</option>
                                                                    <option value="Verheiratet">Verheiratet</option>
                                                                    <option value="Verwitwet">Verwitwet</option>
                                                                    <option value="Geschieden">Geschieden</option>
                                                                    <option value="In eingetragener Partnerschaft">In
                                                                        eingetragener Partnerschaft
                                                                    </option>
                                                                    <option value="In aufgelöster Partnerschaft">In
                                                                        aufgelöster Partnerschaft
                                                                    </option>
                                                                @else
                                                                    <option selected></option>
                                                                    <option value="ledig">Ledig</option>
                                                                    <option value="Verheiratet">Verheiratet</option>
                                                                    <option value="Verwitwet">Verwitwet</option>
                                                                    <option value="Geschieden">Geschieden</option>
                                                                    <option value="In eingetragener Partnerschaft">In
                                                                        eingetragener Partnerschaft
                                                                    </option>
                                                                    <option value="In aufgelöster Partnerschaft">In
                                                                        aufgelöster Partnerschaft
                                                                    </option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="input-select-div mb-2">
                                                            <div class="">
                                                                    <span class="" style="font-size: 15px;">
                                                                        Arbeitsverhältnis
                                                                    </span>
                                                            </div>
                                                            <select name="employment_relationship"
                                                                    class="form-select w-75"
                                                                    aria-label="Default select example">
                                                                @if(isset($data->things->employment_relationship))
                                                                    <option
                                                                        value="{{$data->things->employment_relationship}}"
                                                                        selected>
                                                                        {{$data->things->employment_relationship}}
                                                                    </option>
                                                                    <option value="Angestellt">Angestellt</option>
                                                                    <option value="Selbstständig ">Selbstständig
                                                                    </option>
                                                                @else
                                                                    <option selected></option>
                                                                    <option value="Angestellt">Angestellt</option>
                                                                    <option value="Selbstständig ">Selbstständig
                                                                    </option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xd-4">
                                                    <div class="">
                                                        <div class="input-div1 mb-2">
                                                            <div class="">
                                                                    <span class="" style="font-size: 15px;">
                                                                        Beruf:
                                                                    </span>
                                                            </div>
                                                            @if(isset($data->things->job))
                                                                <input value="{{$data->things->job}}" name="job"
                                                                       class="py-1" type="text" id="">
                                                            @else
                                                                <input name="job" class="py-1" type="text" id="">
                                                            @endif
                                                        </div>
                                                        <div class="input-select-div mb-2">
                                                            <div class="">
                                                                    <span class="" style="font-size: 15px;">
                                                                        Zahlungsrythmus:
                                                                    </span>
                                                            </div>
                                                            <select name="payment_frequency"
                                                                    class="form-select w-75"
                                                                    aria-label="Default select example">
                                                                @if(isset($data->things->payment_frequency))
                                                                    <option value="{{$data->things->payment_frequency}}"
                                                                            selected>{{$data->things->payment_frequency}}
                                                                    </option>
                                                                    <option value="Monatlich">Monatlich</option>
                                                                    <option value="Quartalsweise">Quartalsweise</option>
                                                                    <option value="Jährlich">Jährlich</option>
                                                                @else
                                                                    <option selected></option>
                                                                    <option value="Monatlich">Monatlich</option>
                                                                    <option value="Quartalsweise">Quartalsweise</option>
                                                                    <option value="Jährlich">Jährlich</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="input-div1 mb-2">
                                                            <div class="">
                                                                    <span class="" style="font-size: 15px;">
                                                                        Betrag pro Monat:
                                                                    </span>
                                                            </div>
                                                            @if(isset($data->things->amount_per_month))
                                                                <input value="{{$data->things->amount_per_month}}"
                                                                       name="amount_per_month" class="py-1" type="text"
                                                                       id="">
                                                            @else
                                                                <input name="amount_per_month" class="py-1" type="text"
                                                                       id="">
                                                            @endif
                                                        </div>
                                                        <div class="input-select-div mb-2">
                                                            <div class="">
                                                                    <span class="" style="font-size: 15px;">
                                                                        Anteli Garantie/Fond:
                                                                    </span>
                                                            </div>
                                                            <select name="share_guarantee" class="form-select w-75"
                                                                    aria-label="Default select example">
                                                                @if(isset($data->things->share_guarantee))
                                                                    <option value="{{$data->things->share_guarantee}}"
                                                                            selected>{{$data->things->share_guarantee}}
                                                                    </option>
                                                                    <option value="10/90">10/90</option>
                                                                    <option value="20/80">20/80</option>
                                                                    <option value="30/70">30/70</option>
                                                                    <option value="40/60">40/60</option>
                                                                    <option value="50/50">50/50</option>
                                                                    <option value="60/40">60/40</option>
                                                                    <option value="70/30">70/30</option>
                                                                    <option value="80/20">80/20</option>
                                                                    <option value="90/10">90/10</option>
                                                                @else
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
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="date-input-div mb-2">
                                                            <div class="">
                                                                    <span style="font-size: 15px;">
                                                                        Vertragsbeginn ab:
                                                                    </span>
                                                            </div>
                                                            <select name="start_of_contract" class="form-select w-75" aria-label="Default select example">
                                                                @if(isset($data->things->start_of_contract))
                                                                    @for($i = \Carbon\Carbon::now()->format('Y'); $i >= 1950 ;$i--)
                                                                        <option value="{{$i}}">{{$i}}</option>
                                                                    @endfor
                                                                @else
                                                                    @for($i = \Carbon\Carbon::now()->format('Y'); $i >= 1950 ;$i--)
                                                                        <option value="{{$i}}">{{$i}}</option>
                                                                    @endfor
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="group-button-div mb-2">
                                                            <div class="">
                                                                    <span style="font-size: 15px;">
                                                                        Pramienbefreiung:
                                                                    </span>
                                                            </div>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic radio toggle button group">
                                                                @if(isset($data->things->premium_exemption))
                                                                    @if($data->things->premium_exemption == 'Ja')
                                                                        <input type="radio" class="btn-check"
                                                                               name="premium_exemption" value="Ja"
                                                                               id="btnradio3" autocomplete="off"
                                                                               checked>
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio3">Ja</label>
                                                                        <input type="radio" class="btn-check"
                                                                               name="premium_exemption" value="Nein"
                                                                               id="btnradio4" autocomplete="off">
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio4">Nein</label>
                                                                    @else
                                                                        <input type="radio" class="btn-check"
                                                                               name="premium_exemption" value="Ja"
                                                                               id="btnradio3" autocomplete="off">
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio3">Ja</label>

                                                                        <input type="radio" class="btn-check"
                                                                               name="premium_exemption" value="Nein"
                                                                               id="btnradio4" autocomplete="off"
                                                                               checked>
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio4">Nein</label>
                                                                    @endif
                                                                @else
                                                                    <input type="radio" class="btn-check"
                                                                           name="premium_exemption" value="Ja"
                                                                           id="btnradio3" autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio3">Ja</label>
                                                                    <input type="radio" class="btn-check"
                                                                           name="premium_exemption" value="Nein"
                                                                           id="btnradio4" autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio4">Nein</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xd-4">
                                                    <div class="">
                                                        <div class="group-button-div mb-2">
                                                            <div class="">
                                                                    <span style="font-size: 15px;">
                                                                        EU - Rente:
                                                                    </span>
                                                            </div>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic radio toggle button group">
                                                                @if(isset($data->things->eu_pension))
                                                                    @if($data->things->eu_pension == 'Ja')
                                                                        <input type="radio" class="btn-check"
                                                                               name="eu_pension" value="Ja"
                                                                               id="btnradio5"
                                                                               autocomplete="off" checked>
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio5">Ja</label>

                                                                        <input type="radio" class="btn-check"
                                                                               name="eu_pension" value="Nein"
                                                                               id="btnradio6"
                                                                               autocomplete="off">
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio6">Nein</label>
                                                                    @else
                                                                        <input type="radio" class="btn-check"
                                                                               name="eu_pension" value="Ja"
                                                                               id="btnradio5"
                                                                               autocomplete="off">
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio5">Ja</label>

                                                                        <input type="radio" class="btn-check"
                                                                               name="eu_pension" value="Nein"
                                                                               id="btnradio6"
                                                                               autocomplete="off" checked>
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio6">Nein</label>
                                                                    @endif
                                                                @else
                                                                    <input type="radio" class="btn-check"
                                                                           name="eu_pension" value="Ja" id="btnradio5"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio5">Ja</label>

                                                                    <input type="radio" class="btn-check"
                                                                           name="eu_pension" value="Nein" id="btnradio6"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio6">Nein</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="group-button-div mb-2">
                                                            <div class="">
                                                                    <span style="font-size: 15px;">
                                                                        Todesfalkapital:
                                                                    </span>
                                                            </div>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic radio toggle button group">
                                                                @if(isset($data->things->death_benefit))
                                                                    @if($data->things->death_benefit == "Ja")
                                                                        <input type="radio" class="btn-check"
                                                                               name="death_benefit" value="Ja"
                                                                               id="btnradio7"
                                                                               autocomplete="off" checked>
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio7">Ja</label>

                                                                        <input type="radio" class="btn-check"
                                                                               name="death_benefit" value="Nein"
                                                                               id="btnradio8"
                                                                               autocomplete="off">
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio8">Nein</label>
                                                                    @else
                                                                        <input type="radio" class="btn-check"
                                                                               name="death_benefit" value="Ja"
                                                                               id="btnradio7"
                                                                               autocomplete="off">
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio7">Ja</label>

                                                                        <input type="radio" class="btn-check"
                                                                               name="death_benefit" value="Nein"
                                                                               id="btnradio8"
                                                                               autocomplete="off" checked>
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio8">Nein</label>
                                                                    @endif
                                                                @else
                                                                    <input type="radio" class="btn-check"
                                                                           name="death_benefit" value="Ja}"
                                                                           id="btnradio7"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio7">Ja</label>

                                                                    <input type="radio" class="btn-check"
                                                                           name="death_benefit" value="Nein"
                                                                           id="btnradio8"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio8">Nein</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="group-button-div mb-2">
                                                            <div class="">
                                                                    <span style="font-size: 15px;">
                                                                        Raucher:
                                                                    </span>
                                                            </div>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic radio toggle button group">
                                                                @if(isset($data->things->smoker))
                                                                    @if($data->things->smoker == 'Ja')
                                                                        <input type="radio" class="btn-check"
                                                                               name="smoker"
                                                                               value="Ja" id="btnradio9"
                                                                               autocomplete="off"
                                                                               checked>
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio9">Ja</label>

                                                                        <input type="radio" class="btn-check"
                                                                               name="smoker"
                                                                               value="Nein" id="btnradio10"
                                                                               autocomplete="off">
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio10">Nein</label>
                                                                    @else
                                                                        <input type="radio" class="btn-check"
                                                                               name="smoker"
                                                                               value="Ja" id="btnradio9"
                                                                               autocomplete="off">
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio9">Ja</label>

                                                                        <input type="radio" class="btn-check"
                                                                               name="smoker"
                                                                               value="Nein" id="btnradio10"
                                                                               autocomplete="off"
                                                                               checked>
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio10">Nein</label>
                                                                    @endif
                                                                @else
                                                                    <input type="radio" class="btn-check" name="smoker"
                                                                           value="Ja" id="btnradio9" autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio9">Ja</label>

                                                                    <input type="radio" class="btn-check" name="smoker"
                                                                           value="Nein" id="btnradio10"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio10">Nein</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="exampleFormControlTextarea2"
                                                                   class="form-label">Gewünschte
                                                                Gesellschaften:</label>
                                                            @if(isset($data->things->desired))
                                                                <textarea name="desired" class="form-control"
                                                                          id="exampleFormControlTextarea2"
                                                                          rows="3">{{$data->things->desired}}</textarea>
                                                            @else
                                                                <textarea name="desired" class="form-control"
                                                                          id="exampleFormControlTextarea2"
                                                                          rows="3"></textarea>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center  pb-3">
                                <div class="row mx-3">
                                    @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice'))
                                        <addtask4 url="{{config('app.url')}}" :client_id="{{$lead->id}}"
                                                  :lead_id="{{$lead->lead->id}}" :admin_id="{{$admin_id}}"></addtask4>
                                    @endif
                                    <div class="col g-0 d-flex justify-content-end">
                                        <div class="col g-0 text-end my-auto">
                                            <div class="">
                                                <span onclick="nextonee()" class="pe-2" style="color: #9F9F9F; cursor:pointer;">
                                                    Uberspringen
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col g-0 text-start">
                                        <div class="">
                                            <button class="px-5 py-2" type="button"
                                                    style="border: none; border-radius: 9px; background-color:#285F52;"
                                                    onclick="nextonee()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="58.155"
                                                     height="19.159" viewBox="0 0 58.155 19.159">
                                                    <g id="Group_453" data-name="Group 453"
                                                       transform="translate(0.004)">
                                                        <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2"
                                                              transform="translate(0 9.287)" fill="none"
                                                              stroke="#3fd599" stroke-width="2"/>
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

                        <div class="tab-pane fade  vorsorge-content" id="nav-fourth" role="tabpanel"
                             aria-labelledby="nav-fourth-tab">
                            <div class="row mx-2 mx-sm-4">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3 ">
                                    <div class="mb-2">
                                            <span class="fw-bold fs-6">
                                                Hausrat- & Privathaftpflicht
                                            </span>
                                    </div>
                                    <div class="accordion accordion-flush" id="accordionFlushExample3">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                        aria-expanded="false" aria-controls="flush-collapseOne"
                                                        style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                                                <span class="fs-6" id="title-span"
                                                                      style="font-weight: 600;">
                                                                    Gegenofferte?
                                                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                                                <span class="" style="font-size: 13px;">
                                                                    Bestelle eine Gegenofferte für eine bestehende
                                                                    Hausrat- / Prifathaftlichtversicherung.
                                                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingThree"
                                                 data-bs-parent="#accordionFlushExample3">
                                                <div class="accordion-body"
                                                     style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="">
                                                                <span class="" style="font-size: 13px;">
                                                                    Police Hochladen:
                                                                </span>
                                                        </div>
                                                        <div class="">
                                                            <div class="upload-box mx-1 my-2">
                                                                <div class="mx-1 my-2 p-4 text-center">
                                                                    <label for="file-input-6">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="53" height="53"
                                                                             viewBox="0 0 53 53">
                                                                            <g id="Group_621" data-name="Group 621"
                                                                               transform="translate(-78.283 -14.777)">
                                                                                <circle id="Ellipse_31"
                                                                                        data-name="Ellipse 31" cx="26.5"
                                                                                        cy="26.5" r="26.5"
                                                                                        transform="translate(78.283 14.777)"
                                                                                        fill="#5f5f5f"/>
                                                                                <g id="Group_326"
                                                                                   data-name="Group 326"
                                                                                   transform="translate(95.656 31.893)">
                                                                                    <path id="Path_234"
                                                                                          data-name="Path 234"
                                                                                          d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                                          transform="translate(0 1.82)"
                                                                                          fill="#fff" stroke="#fff"
                                                                                          stroke-width="0.5"/>
                                                                                    <path id="Path_235"
                                                                                          data-name="Path 235"
                                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                                          transform="translate(0.92 0)"
                                                                                          fill="#fff" stroke="#fff"
                                                                                          stroke-width="0.5"/>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                    </label>
                                                                    @php $data->prevention = \App\Models\LeadDataPrevention::where('person_id',$id)->latest()->first() @endphp
                                                                    @if(isset($data->prevention->upload_police))
                                                                        <input type="file" id="file-input-6"
                                                                               class="svg-div w-100 border-0  g-0"
                                                                               onchange="upload(this);"
                                                                               name="upload_police__"
                                                                               value="{{$data->prevention->upload_police}}">
                                                                        <a style="text-decoration: none"
                                                                           href="{{route('showfile',$data->prevention->upload_police)}}">
                                                                        <input type="text"
                                                                               class="form-control text-center"
                                                                               id="file-input-6c" disabled
                                                                               style="background:transparent;border:none;"
                                                                               value="{{$data->prevention->upload_police}}"
                                                                               name="">
</a>
                                                                    @else
                                                                        <input type="file" id="file-input-6"
                                                                               class="svg-div w-100 border-0  g-0"
                                                                               onchange="upload(this);"
                                                                               name="upload_police__">
                                                                        <input type="text"
                                                                               class="form-control text-center"
                                                                               id="file-input-6c" disabled
                                                                               style="background:transparent;border:none;"
                                                                               >
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="row mx-2">
                                                                <div class="col-5 d-flex g-0">
                                                                    <div class="text-nowrap">
                                                                            <span class="fw-bold"
                                                                                  style=" font-size: 12px;">
                                                                                Vergleichsart:
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col g-0 d-flex justify-content-end">
                                                                    <div class="select-div text-end ">
                                                                        <select name="Hvergleichsart_select"
                                                                                class="fw-bold" id=""
                                                                                style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                                            @if(isset($data->prevention->Hvergleichsart_select))
                                                                                <option value="{{$data->prevention->Hvergleichsart_select}}" selected>
                                                                                    {{$data->prevention->Hvergleichsart_select}}
                                                                                </option>
                                                                                <option value="1:0 Deckung">1:0 Deckung</option>
                                                                                <option value="0:1 Deckung">0:1 Deckung</option>
                                                                                <option value="1:1 Deckung">1:1 Deckung</option>
                                                                            @else
                                                                                <option selected>Select</option>
                                                                                <option value="1:0 Deckung">1:0 Deckung</option>
                                                                                <option value="0:1 Deckung">0:1 Deckung</option>
                                                                                <option value="1:1 Deckung">1:1 Deckung</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="mb-3 mt-3">
                                                                <label for="exampleFormControlTextarea2"
                                                                       class="form-label"
                                                                       style="font-size: 13px;">Kommentar
                                                                </label>
                                                                @if(isset($data->prevention->comment))
                                                                    <textarea name="comment__" class="form-control"
                                                                              id="exampleFormControlTextarea2"
                                                                              rows="3">{{$data->prevention->comment}}</textarea>
                                                                @else
                                                                    <textarea name="comment__" class="form-control"
                                                                              id="exampleFormControlTextarea2"
                                                                              rows="3"></textarea>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3 ">
                                    <div class="mb-2">
                                            <span class="fw-bold fs-6" style="color: transparent;">
                                                Hausrat- & Privathaftpflicht
                                            </span>
                                    </div>
                                    <div class="accordion accordion-flush" id="accordionFlushExample4">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                                        aria-expanded="false" aria-controls="flush-collapseOne"
                                                        style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                                                <span class="fs-6" id="title-span"
                                                                      style="font-weight: 600;">
                                                                    Neue Sachversicherung
                                                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                                                <span class="" style="font-size: 13px;">
                                                                    Bestelle eine Offerte für eine neue Hausrat- /
                                                                    Haftpflichtversicherung.
                                                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingFour"
                                                 data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body"
                                                     style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="row mx-0">
                                                            <div class="col-5 d-flex g-0">
                                                                <div class="text-nowrap">
                                                                        <span class="fw-bold" style=" font-size: 15px;">
                                                                            Neue Anfarge
                                                                        </span>
                                                                </div>
                                                            </div>
{{--                                                            <div class="col g-0 d-flex justify-content-end">--}}
{{--                                                                <div class="select-div text-end ">--}}

{{--                                                                    <select name="noname" class="fw-bold" id=""--}}
{{--                                                                            style="background-color: #EFEFEF; font-size: 15px;color:#9F9F9F;">--}}
{{--                                                                        <option selected>Select</option>--}}
{{--                                                                        <option value="1">Ja</option>--}}
{{--                                                                        <option value="2">Nein</option>--}}
{{--                                                                    </select>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
                                                        </div>
                                                        <div class="my-2">
                                                            <div class="input-select-div">
                                                                <div class="">
                                                                        <span class="" style="font-size: 15px;">
                                                                            Anzahl Personen
                                                                        </span>
                                                                </div>
                                                                <select name="number_of_people"
                                                                        class="form-select w-50"
                                                                        aria-label="Default select example">
                                                                    @if(isset($data->prevention->number_of_people))
                                                                        <option
                                                                            value="{{$data->prevention->number_of_people}}"
                                                                            selected>
                                                                            {{$data->prevention->number_of_people}}
                                                                        </option>
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
                                                                    @else
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
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            <div class="input-select-div">
                                                                <div class="">
                                                                        <span class="" style="font-size: 15px;">
                                                                            Anzahl Zimmer
                                                                        </span>
                                                                </div>
                                                                <select name="number_of_rooms"
                                                                        class="form-select w-50"
                                                                        aria-label="Default select example">
                                                                    @if(isset($data->prevention->number_of_rooms))
                                                                        <option
                                                                            value="{{$data->prevention->number_of_rooms}}"
                                                                            selected>
                                                                            {{$data->prevention->number_of_rooms}}
                                                                        </option>
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
                                                                    @else
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
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            <div class="input-div1">
                                                                <div class="">
                                                                        <span class="" style="font-size: 15px;">
                                                                            Versicherungsumme
                                                                        </span>
                                                                </div>
                                                                @if(isset($data->prevention->sum_insured))
                                                                    <input value="{{$data->prevention->sum_insured}}"
                                                                           name="sum_insured" class="py-1" type="text"
                                                                           id="">
                                                                @else
                                                                    <input name="sum_insured" class="py-1" type="text"
                                                                           id="">
                                                                @endif
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlTextarea4"
                                                                       class="form-label"
                                                                       style="font-size: 15px;">
                                                                    Gewünschte Zusatzdeckung:
                                                                </label>
                                                                @if(isset($data->prevention->desired_additional_coverage))
                                                                    <textarea name="desired_additional_coverage"
                                                                              class="form-control"
                                                                              id="exampleFormControlTextarea4"
                                                                              rows="3">
                                                                        {{$data->prevention->desired_additional_coverage}}
                                                                    </textarea>
                                                                @else
                                                                    <textarea name="desired_additional_coverage"
                                                                              class="form-control"
                                                                              id="exampleFormControlTextarea4"
                                                                              rows="3">

                                                                    </textarea>
                                                                @endif
                                                            </div>
                                                            <div class="input-select-div">
                                                                <div class="">
                                                                        <span class="" style="font-size: 15px;">
                                                                            Pricathaftpflicht?
                                                                        </span>
                                                                </div>
                                                                <select name="personal_liability"
                                                                        class="form-select w-50"
                                                                        aria-label="Default select example">
                                                                    @if(isset($data->prevention->personal_liability))
                                                                        <option
                                                                            value="{{$data->prevention->personal_liability}}"
                                                                            selected>
                                                                            {{$data->prevention->personal_liability}}
                                                                        </option>
                                                                        <option value="Ja">Ja</option>
                                                                        <option value="Nein">Nein</option>
                                                                    @else
                                                                        <option selected></option>
                                                                        <option value="Ja">Ja</option>
                                                                        <option value="Nein">Nein</option>
                                                                    @endif
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">
                                    <div class="mb-2">
                                            <span class="fw-bold fs-6">
                                                Rechtsschutzversicherung
                                            </span>
                                    </div>
                                    <div class="accordion accordion-flush" id="accordionFlushExample5">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingFive">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                                        aria-expanded="false" aria-controls="flush-collapseOne"
                                                        style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                                                <span class="fs-6" id="title-span"
                                                                      style="font-weight: 600;">
                                                                    Gesellschaft wählen?
                                                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                                                <span class="" style="font-size: 13px;">
                                                                    Bestelle eine Offerte für eine neue Hausrat- /
                                                                    Haftpflichtversicherung.
                                                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingFive"
                                                 data-bs-parent="#accordionFlushExampleFive">
                                                <div class="accordion-body"
                                                     style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="row mx-0">
                                                            <div class="col-5 d-flex g-0">
                                                                <div class="text-nowrap">
                                                                        <span class="fw-bold" style=" font-size: 15px;">
                                                                            Neue Anfarge
                                                                        </span>
                                                                </div>
                                                            </div>
{{--                                                            <div class="col g-0 d-flex justify-content-end">--}}
{{--                                                                <div class="select-div text-end ">--}}
{{--                                                                    <select name="noname" class="fw-bold" id=""--}}
{{--                                                                            style="background-color: #EFEFEF; font-size: 15px;color:#9F9F9F;">--}}
{{--                                                                        <option selected>Select</option>--}}
{{--                                                                        <option value="1">Ja</option>--}}
{{--                                                                        <option value="2">Nein</option>--}}
{{--                                                                    </select>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
                                                        </div>
                                                        <div class="input-div1">
                                                            <div class="">
                                                                    <span class="" style="font-size: 15px;">
                                                                        Gesellschaft
                                                                    </span>
                                                            </div>
                                                            @if(isset($data->prevention->society))
                                                                <input value="{{$data->prevention->society}}"
                                                                       name="society" class="py-1" type="text" id="">
                                                            @else
                                                                <input name="society" class="py-1" type="text" id="">
                                                            @endif
                                                        </div>
                                                        <div class="input-select-div">
                                                            <div class="">
                                                                    <span class="" style="font-size: 15px;">
                                                                        Anzahl Personen
                                                                    </span>
                                                            </div>
                                                            @if(isset($data->prevention->n_of_p_legal_protection))
                                                                <select name="n_of_p_legal_protection"
                                                                        class="form-select w-50"
                                                                        aria-label="Default select example">
                                                                    <option selected
                                                                            value="{{$data->prevention->n_of_p_legal_protection}}">{{$data->prevention->n_of_p_legal_protection}}</option>
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
                                                            @else
                                                                <select name="n_of_p_legal_protection"
                                                                        class="form-select w-50"
                                                                        aria-label="Default select example">
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
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center mt-3 pb-3">
                                    <div class="row mx-2 mx-sm-4">
                                        @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice'))
                                            <addtask url="{{config('app.url')}}" :client_id="{{$lead->id}}"
                                                     :lead_id="{{$lead->lead->id}}" :admin_id="{{$admin_id}}"></addtask>
                                        @endif
                                        <div class="text-center mt-3 pb-3">
                                            <div class="row">
                                                <div class="col g-0 text-end my-auto">
                                                    <div class="">

                                                    </div>
                                                </div>
                                                <div class="col g-0 text-start">
                                                    <div id="buton">
                                                        <button class="px-5 py-2" type="button"
                                                                style="border: none; border-radius: 9px; background-color:#285F52;"
                                                                id="nextonee__" onclick="nextonee()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="58.155"
                                                                 height="19.159" viewBox="0 0 58.155 19.159">
                                                                <g id="Group_453" data-name="Group 453"
                                                                   transform="translate(0.004)">
                                                                    <line id="Line_16" data-name="Line 16" x2="51.954"
                                                                          y2="0.2"
                                                                          transform="translate(0 9.287)" fill="none"
                                                                          stroke="#3fd599" stroke-width="2"/>
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
                            </div>
                        </div>

                    </div>

                    <div class="col g-0 text-center pb-3">

                        <button class="px-5 py-2" id="submitt" type="button"
                                style="border: none; border-radius: 9px; background-color:#285F52;" title="Edit"
                                onclick="edit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#fff" class="bi bi-pencil-square"
                                 viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd"
                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </button>
                        @if(Auth::user()->hasRole('backoffice') || Auth::user()->hasRole('admin'))
                        @if(\App\Models\Pendency::find(Session::get('pend_id'))->completed == 0 && \App\Models\Pendency::find(Session::get('pend_id'))->done == 1)
                            <button class="px-5 py-2" id="submitt1" type="button"
                                    style="border: none; border-radius: 9px; background-color:#285F52;" title="Accept"
                                    onclick="accept();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff"
                                     class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path
                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                </svg>
                            </button>
                        @endif
                        @if(\App\Models\Pendency::find(Session::get('pend_id'))->done == 1 && \App\Models\Pendency::find(Session::get('pend_id'))->completed == 0)
                            <button class="px-5 py-2" id="submitt1" type="button"
                                    style="border: none; border-radius: 9px; background-color:#285F52;" title="Accept"
                                    onclick="reject();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff"
                                     class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </button>
                        @endif
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
{{--Mobile--}}
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
            <svg xmlns="http://www.w3.org/2000/svg" width="27" fill="#88889D" class="bi bi-hdd-stack-fill"
                 viewBox="0 0 16 16">
  <path
      d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1z"/>
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
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
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
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
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
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
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
                            CALENDAR
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
                             class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd"
                                  d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                        </span>
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
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
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
                        COMMISIONS
                        </span>
                </a>
                <hr>
            @endif
        </div>
        <div class="my-3 m-burger">
            <a href="#" class="m-nav text-decoration-none">
                        <span class="px-2 active-dot">
                            <svg width="8" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#4DC591"/>
                            </svg>
                        </span>
                <span class="px-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#88889d" class="bi bi-grid"
                             viewBox="0 0 16 16">
                            <path
                                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                        </svg>
                        </span>
                <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
                            FINANCE
                        </span>
            </a>
            <hr>
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
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
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
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
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
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
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
                    <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
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
                <span class="fs-6 fw-bold" style="color: #88889D; line-height: 1;">
                            SIGN OUT
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
</script>
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
    .nav-form-links button.active {
        color: #434343 !important;
    }

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

    .upload-box1 input[type="file"] {
        display: none !important;
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

    .krankenkasse-content {
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

    .krankenkasse-btn {
        color: black;
        font-weight: 600;
        border: none !important;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
        border-bottom-left-radius: 0px !important;

    }

    .krankenkasse-btn:hover {
        color: black;
    }

    .auto-btn {
        color: black;
        font-weight: 600;
        border: none !important;
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
        border: none !important;
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
        border: none !important;
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

    body {
        overflow-x: hidden;
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

    .form-styling {
        border-radius: 22px;
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

        .form-styling {
            border-radius: 0px;
        }

</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script>
    var cntt = 0;
    var newgcnt = <?php echo \App\Models\newgegen::where('person_id', $id)->count() ?>;
    var newncnt =  <?php echo \App\Models\newnue::where('person_id', $id)->count() ?>;
    var gofert = [];
    var nofert = [];


    function edit() {
        document.getElementById('forma').action = "{{URL::route('updateLeadDataKK', [\Illuminate\Support\Facades\Crypt::encrypt($lead->lead->id * 1244), Crypt::encrypt($lead->id * 1244), 'admin_id' => Crypt::encrypt($admin_id * 1244)])}}";
        document.getElementById('forma').submit();
    }

    function accept() {
        <?php
        echo 'document.getElementById("forma").action ="' . route('acceptdata', [\Illuminate\Support\Facades\Crypt::encrypt($lead->id * 1244), 'accept' => true, 'admin_id' => \Illuminate\Support\Facades\Crypt::encrypt((int)$admin_id * 1244)]) . '";';
        echo 'document.getElementById("forma").submit();';
        ?>
    }

    function reject() {
        <?php
        echo 'document.getElementById("forma").action ="' . route('rejectupdate') . '";';
        echo 'document.getElementById("forma").submit();';
        ?>
    }

    function addanother_item_g() {

        $("#add_g").remove();
        newgcnt++;

        document.getElementById('shtogegen').innerHTML +=  '<div id="g' + newgcnt + '">' +
                ' <div class="text-end mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16" style="cursor:pointer;" onclick="deletethat2(' + newgcnt + ')">' +
                '<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>' +
                '<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></div>' +
                '   <hr style="height: 4px;"> <div class="">' +
                '                                                        <div class="">' +
                '                                                                <span class="" style="font-size: 13px;">' +
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
                '                                                                           class="svg-div w-100 border-0  g-0"' +
                '                                                                           onchange="upload(this);"' +
                '                                                                           name="upload_policeFahrzeug' + newgcnt + '">' +
                '                                                                    <input type="text"' +
                '                                                                          class="form-control text-center"' +
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
                '                                                                        <select name="vergleichsart_select' + newgcnt + '"> ' +
                '                                                                                class="fw-bold" id=""' +
                '                                                                                style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">' +
                '                                                                            <option selected>Select</option>' +
                '                                                                            <option value="1:0 Deckung">1:0 Deckung</option>' +
                '                                                                            <option value="0:1 Deckung">0:1 Deckung</option>' +
                '                                                                            <option value="1:1 Deckung">1:1 Deckung</option>'+
                '                                                                        </select>' +
                '                                                                   </div>' +
                '                                                                </div>' +
                '                                                            </div>' +
                '                                                        </div>' +
                '                                                        <div class="">' +
                '                                                            <div class="mb-3 mt-3">' +
                '                                                               <label for="exampleFormControlTextarea1"' +
                '                                                                      class="form-label"' +
                '                                                                      style="font-size: 13px;">Kommentar</label>                                                                <textarea name="commentFahrenzug' + newgcnt + '" ' +
                '                                                                         id="exampleFormControlTextarea1"' +
                '                                                                          rows="3" class="form-control"></textarea>' +
                '                                                            </div>' +
                '                                                        </div>' +
                '                                                   </div></div>' +
                '<div class="row">'+ '@if(!Auth::user()->hasRole("fs"))'+
'                                                            <div class="col-12" id="of' + newgcnt + '">Offer:'+
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
'                                                        </div>';

document.getElementById('newgcount').value = newgcnt;

    }

    function addanother_item_n() {
        $('#add_n').remove();
        newncnt++;
        document.getElementById('shtonew').innerHTML += '<div class="" id="n' + newncnt + '">' +
            ' <div class="text-end mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16" style="cursor:pointer;" onclick="deletethat(' + newncnt + ')">' +
            '<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>' +
            '<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></div>' +
            '                                                        <div class="row">' +
            '                                                            <div' +
            '                                                                class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">' +
            '                                                                <div class="my-3">' +
            '                                                                    <div class="">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="">' +
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
            '                                                                                       class="svg-div w-100 border-0  g-0"' +
            '                                                                                       onchange="upload(this);"' +
            '                                                                                       name="vehicle_id' + newncnt + '">' +
            '                                                                                <input type="text"' +
            '                                                                                       class="form-control text-center"' +
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
            '                                                                                    <span>' +
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
            '                                                                                       class="btn-check" value="Ja"' +
            '                                                                                       name="leasing' + newncnt + '" id="btnradio1' + newncnt + '"' +
            '                                                                                       autocomplete="off">' +
            '                                                                                <label' +
            '                                                                                    class="btn btn-outline-secondary w-100 g-0"' +
            '                                                                                    value="Ja"' +
            '                                                                                    for="btnradio1' + newncnt + '">Ja</label>' +
            '                                                                                <input type="radio"' +
            '                                                                                       class="btn-check" name="leasing' + newncnt + '"' +
            '                                                                                       value="Nein" id="btnradio2' + newncnt + '"' +
            '                                                                                       autocomplete="off">' +
            '                                                                                <label' +
            '                                                                                    class="btn btn-outline-secondary w-100 g-0 "' +
            '                                                                                    for="btnradio2' + newncnt + '">Nein</label>' +
            '' +
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
            '                                                                                    <span class="fw-normal">' +
            '                                                                                        Kaufjahr' +
            '                                                                                    </span>' +
            '                                                                            </div>' +
            '                                                                            <select name="year_of_purchase' + newncnt + '"' +
            '                                                                                    class="form-select w-75" aria-label="Default select example" id=""' +
            '                                                                                    >' +
            '' +
            '                                                                                       @for($i = \Carbon\Carbon::now()->format('Y'); $i >= 1950 ;$i--)<option value="2021">{{$i}}</option>@endfor'+
            '' +
            '                                                                            </select>' +
            '                                                                        </div>' +
            '                                                                    </div>' +
            '                                                                    <div class="date-input-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span>' +
            '                                                                                    Este inverkehrssetzung:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '' +
            '                                                                        <input name="placing_on_the_market' + newncnt + '"' +
            '                                                                               type="date" class="py-1 border-0">' +
            '' +
            '                                                                    </div>' +
            '                                                                    <div class="date-input-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span>' +
            '                                                                                    Beginn Versicherung:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '' +
            '                                                                        <input name="insurance_date' + newncnt + '" type="date"' +
            '                                                                               class="py-1 border-0">' +
            '' +
            '                                                                    </div>' +
            '                                                                    <div class="input-select-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="">' +
            '                                                                                    Eingelöster Kanton:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <select name="redeemed' + newncnt + '"' +
            '                                                                                class="form-select w-75"' +
            '                                                                                aria-label="Default select example">' +
            '                                                                            <option selected></option>' +
            '                                                                            <option value="Zürich">Zürich</option>' +
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
            '                                                                            <option value="Graubünden">Graubünden</option>' +
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
            '                                                                                <span class="">' +
            '                                                                                    KM - Stand:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '' +
            '                                                                        <input name="km_stood' + newncnt + '" class="py-1"' +
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
            '                                                                                <span>' +
            '                                                                                    Erste inverkehrssetzung:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '' +
            '                                                                        <input name="placing_on_the_market' + newncnt + '"' +
            '                                                                               type="date" class="py-1 border-0">' +
            '' +
            '                                                                    </div>' +
            '                                                                    <div class="input-select-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="">' +
            '                                                                                    Nationalitat:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <select  class="form-select w-75" name="nationality' + newncnt + '">' +
            '                                                                               <option value="CH" selected>Schweiz</option> <option value="DE">Deutschland</option> <option value="AT">Österreich</option>' +
            '                                                                               <optgroup label="A"> <option value="AF">Afghanistan</option> <option value="EG">Ägypten</option> <option value="AX">Åland</option> <option value="AL">Albanien</option> <option value="DZ">Algerien</option> <option value="AS">Amerikanisch-Samoa</option> <option value="VI">Amerikanische Jungferninseln</option> <option value="AD">Andorra</option> <option value="AO">Angola</option> <option value="AI">Anguilla</option> <option value="AQ">Antarktis</option> <option value="AG">Antigua und Barbuda</option> <option value="GQ">Äquatorialguinea</option> <option value="AR">Argentinien</option> <option value="AM">Armenien</option> <option value="AW">Aruba</option> <option value="AC">Ascension</option> <option value="AZ">Aserbaidschan</option> <option value="ET">Äthiopien</option> <option value="AU">Australien</option> </optgroup>' +
            '                                                                               <optgroup label="B"> <option value="BS">Bahamas</option> <option value="BH">Bahrain</option> <option value="BD">Bangladesch</option> <option value="BB">Barbados</option> <option value="BY">Belarus (Weißrussland)</option> <option value="BE">Belgien</option> <option value="BZ">Belize</option> <option value="BJ">Benin</option> <option value="BM">Bermuda</option> <option value="BT">Bhutan</option> <option value="BO">Bolivien</option> <option value="BA">Bosnien und Herzegowina</option> <option value="BW">Botswana</option> <option value="BV">Bouvetinsel</option> <option value="BR">Brasilien</option> <option value="VG">Britische Jungferninseln</option> <option value="IO">Britisches Territorium im Indischen Ozean</option> <option value="BN">Brunei Darussalam</option> <option value="BG">Bulgarien</option> <option value="BF">Burkina Faso</option> <option value="BI">Burundi</option> </optgroup>' +
            '                                                                               <optgroup label="C"> <option value="EA">Ceuta, Melilla</option> <option value="CL">Chile</option> <option value="CN">Volksrepublik China</option> <option value="CP">Clipperton</option> <option value="CK">Cookinseln</option> <option value="CR">Costa Rica</option> <option value="CI">Côte dIvoire </option> </optgroup>' +
            '                                                                               <optgroup label="D"> <option value="DK">Dänemark</option> <option value="DE">Deutschland</option> <option value="DG">Diego Garcia</option> <option value="DM">Dominica</option> <option value="DO">Dominikanische Republik</option> <option value="DJ">Dschibuti</option> </optgroup>' +
            '                                                                               <optgroup label="E"> <option value="EC">Ecuador</option> <option value="SV">El Salvador</option> <option value="ER">Eritrea</option> <option value="EE">Estland</option> </optgroup> <optgroup label="F"> <option value="FK">Falklandinseln</option> <option value="FO">Färöer</option> <option value="FJ">Fidschi</option> <option value="FI">Finnland</option> <option value="FR">Frankreich</option> <option value="GF">Französisch-Guayana</option> <option value="PF">Französisch-Polynesien</option> </optgroup>' +
            '                                                                               <optgroup label="G"> <option value="GA">Gabun</option> <option value="GM">Gambia</option> <option value="GE">Georgien</option> <option value="GH">Ghana</option> <option value="GI">Gibraltar</option> <option value="GD">Grenada</option> <option value="GR">Griechenland</option> <option value="GL">Grönland</option> <option value="GB">Großbritannien</option> <option value="GP">Guadeloupe</option> <option value="GU">Guam</option> <option value="GT">Guatemala</option> <option value="GG">Guernsey (Kanalinsel)</option> <option value="GN">Guinea</option> <option value="GW">Guinea-Bissau</option> <option value="GY">Guyana</option> </optgroup>' +
            '                                                                               <optgroup label="H"> <option value="HT">Haiti</option> <option value="HM">Heard- und McDonald-Inseln</option> <option value="HN">Honduras</option> <option value="HK">Hongkong</option> </optgroup> <optgroup label="I"> <option value="IN">Indien</option> <option value="ID">Indonesien</option> <option value="IM">Insel Man</option> <option value="IQ">Irak</option> <option value="IR">Iran</option> <option value="IE">Irland</option> <option value="IS">Island</option> <option value="IL">Israel</option> <option value="IT">Italien</option> </optgroup>' +
            '                                                                               <optgroup label="J"> <option value="JM">Jamaika</option> <option value="JP">Japan</option> <option value="YE">Jemen</option> <option value="JE">Jersey (Kanalinsel)</option> <option value="JO">Jordanien</option> </optgroup> <optgroup label="K"> <option value="KY">Kaimaninseln</option> <option value="KH">Kambodscha</option> <option value="CM">Kamerun</option> <option value="CA">Kanada</option> <option value="IC">Kanarische Inseln</option> <option value="CV">Kap Verde</option> <option value="KZ">Kasachstan</option> <option value="QA">Katar</option> <option value="KE">Kenia</option> <option value="KG">Kirgisistan</option> <option value="KI">Kiribati</option> <option value="CC">Kokosinseln</option> <option value="CO">Kolumbien</option> <option value="KM">Komoren</option> <option value="CD">Demokratische Republik Kongo</option> <option value="KP">Demokratische Volksrepublik Korea (Nordkorea)</option> <option value="KR">Republik Korea (Südkorea)</option> <option value="KOS">Kosovo</option> <option value="HR">Kroatien</option> <option value="CU">Kuba</option> <option value="KW">Kuwait</option> </optgroup>' +
            '                                                                               <optgroup label="L"> <option value="LA">Laos</option> <option value="LS">Lesotho</option> <option value="LV">Lettland</option> <option value="LB">Libanon</option> <option value="LR">Liberia</option> <option value="LY">Libyen</option> <option value="LI">Liechtenstein</option> <option value="LT">Litauen</option> <option value="LU">Luxemburg</option> </optgroup>' +
            '                                                                               <optgroup label="M"> <option value="MO">Macao</option> <option value="MG">Madagaskar</option> <option value="MW">Malawi</option> <option value="MY">Malaysia</option> <option value="MV">Malediven</option> <option value="ML">Mali</option> <option value="MT">Malta</option> <option value="MA">Marokko</option> <option value="MH">Marshallinseln</option> <option value="MQ">Martinique</option> <option value="MR">Mauretanien</option> <option value="MU">Mauritius</option> <option value="YT">Mayotte</option> <option value="MK">Mazedonien</option> <option value="MX">Mexiko</option> <option value="FM">Mikronesien</option> <option value="MD">Moldawien (Republik Moldau)</option> <option value="MC">Monaco</option> <option value="MN">Mongolei</option> <option value="ME">Montenegro</option> <option value="MS">Montserrat</option> <option value="MZ">Mosambik</option> <option value="MM">Myanmar (Burma)</option> </optgroup>' +
            '                                                                               <optgroup label="N"> <option value="NA">Namibia</option> <option value="NR">Nauru</option> <option value="NP">Nepal</option> <option value="NC">Neukaledonien</option> <option value="NZ">Neuseeland</option> <option value="NI">Nicaragua</option> <option value="NL">Niederlande</option> <option value="AN">Niederländische Antillen</option> <option value="NE">Niger</option> <option value="NG">Nigeria</option> <option value="NU">Niue</option> <option value="MP">Nördliche Marianen</option> <option value="NF">Norfolkinsel</option> <option value="NO">Norwegen</option> </optgroup>' +
            '                                                                                <optgroup label="O"> <option value="OM">Oman</option> <option value="XO">Orbit</option> <option value="AT">Österreich</option> <option value="TL">Osttimor (Timor-Leste)</option> </optgroup> <optgroup label="P"> <option value="PK">Pakistan</option> <option value="PS">Palästinensische Autonomiegebiete</option> <option value="PW">Palau</option> <option value="PA">Panama</option> <option value="PG">Papua-Neuguinea</option> <option value="PY">Paraguay</option> <option value="PE">Peru</option> <option value="PH">Philippinen</option> <option value="PN">Pitcairninseln</option> <option value="PL">Polen</option> <option value="PT">Portugal</option> <option value="PR">Puerto Rico</option> </optgroup>' +
            '                                                                               <optgroup label="Q"> </optgroup> <optgroup label="R"> <option value="TW">Republik China (Taiwan)</option> <option value="CG">Republik Kongo</option> <option value="RE">Réunion</option> <option value="RW">Ruanda</option> <option value="RO">Rumänien</option> <option value="RU">Russische Föderation</option> </optgroup>' +
            '                                                                               <optgroup label="S"> <option value="BL">Saint-Barthélemy</option> <option value="MF">Saint-Martin</option> <option value="SB">Salomonen</option> <option value="ZM">Sambia</option> <option value="WS">Samoa</option> <option value="SM">San Marino</option> <option value="ST">São Tomé und Príncipe</option> <option value="SA">Saudi-Arabien</option> <option value="SE">Schweden</option> <option value="CH">Schweiz</option> <option value="SN">Senegal</option> <option value="RS">Serbien</option> <option value="SC">Seychellen</option> <option value="SL">Sierra Leone</option> <option value="ZW">Simbabwe</option> <option value="SG">Singapur</option> <option value="SK">Slowakei</option> <option value="SI">Slowenien</option> <option value="SO">Somalia</option> <option value="ES">Spanien</option> <option value="LK">Sri Lanka</option> <option value="SH">St. Helena</option> <option value="KN">St. Kitts und Nevis</option> <option value="LC">St. Lucia</option> <option value="PM">Saint-Pierre und Miquelon</option> <option value="VC">St. Vincent und die Grenadinen</option> <option value="ZA">Südafrika</option> <option value="SD">Sudan</option> <option value="GS">Südgeorgien und die Südlichen Sandwichinseln</option> <option value="SR">Suriname</option> <option value="SJ">Svalbard und Jan Mayen</option> <option value="SZ">Swasiland</option> <option value="SY">Syrien</option> </optgroup>' +
            '                                                                               <optgroup label="T"> <option value="TJ">Tadschikistan</option> <option value="TZ">Tansania</option> <option value="TH">Thailand</option> <option value="TG">Togo</option> <option value="TK">Tokelau</option> <option value="TO">Tonga</option> <option value="TT">Trinidad und Tobago</option> <option value="TA">Tristan da Cunha</option> <option value="TD">Tschad</option> <option value="CZ">Tschechische Republik</option> <option value="TN">Tunesien</option> <option value="TR">Türkei</option> <option value="TM">Turkmenistan</option> <option value="TC">Turks- und Caicosinseln</option> <option value="TV">Tuvalu</option> </optgroup> <optgroup label="U"> <option value="UG">Uganda</option> <option value="UA">Ukraine</option> <option value="HU">Ungarn</option> <option value="UY">Uruguay</option> <option value="UZ">Usbekistan</option> </optgroup>' +
            '                                                                               <optgroup label="V"> <option value="VU">Vanuatu</option> <option value="VA">Vatikanstadt</option> <option value="VE">Venezuela</option> <option value="AE">Vereinigte Arabische Emirate</option> <option value="US">Vereinigte Staaten von Amerika (USA)</option> <option value="GB">Vereinigtes Königreich Großbritannien und Nordirland</option> <option value="VN">Vietnam</option> </optgroup> <optgroup label="W"> <option value="WF">Wallis und Futuna</option> <option value="CX">Weihnachtsinsel</option> <option value="EH">Westsahara</option> </optgroup> <optgroup label="Z"> <option value="CF">Zentralafrikanische Republik</option> <option value="CY">Zypern</option> </optgroup>' +
            '                                                                               </select>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-select-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="">' +
            '                                                                                    Häufigster Lenker?' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <select name="most_common' + newncnt + '"' +
            '                                                                                class="form-select w-75"' +
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
            '                                                                                Gewünschte Deckung' +
            '                                                                            </span>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-select-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="">' +
            '                                                                                    Versischerung:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '' +
            '                                                                        <input name="insurance' + newncnt + '" type="text" class="py-1 border-0">' +
            '                                                                    </div>' +
            '                                                                    <div class="input-select-div mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="">' +
            '                                                                                    Selbstbehalt Teilkasko:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <select name="deductible' + newncnt + '"' +
            '                                                                                class="form-select w-75"' +
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
            '                                                                                <span class="">' +
            '                                                                                    Mitgeführte Sachen:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <select name="carried' + newncnt + '"' +
            '                                                                                class="form-select w-75"' +
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
            '                                                                            <span>' +
            '                                                                                Reparaturwerkstatt:' +
            '                                                                            </span>' +
            '                                                                        <!-- <div class="input-group mb-2">' +
            '                                                                      <input name="noname" type="text" placeholder="Partnergarage" class="form-control" aria-label=""' +
            '                                                                        aria-describedby="basic-addon1">' +
            '                                                                      <input name="noname" type="text" placeholder="Freie Wahl" class="form-control" aria-label=""' +
            '                                                                        aria-describedby="basic-addon1">' +
            '                                                                    </div> -->' +
            '                                                                        <div class="btn-group w-100" role="group"' +
            '                                                                             aria-label="Basic radio toggle button group">' +
            '' +
            '                                                                            <input type="radio" class="btn-check "' +
            '                                                                                   name="repair_shop' + newncnt + '" id="btnradio1' + newncnt + '_' +
            '                                                                                   value="Specific garage">' +
            '                                                                            <label' +
            '                                                                                class="btn btn-outline-secondary w-100 g-0"' +
            '                                                                                for="btnradio1' + newncnt + '_">Specific' +
            '                                                                                garage</label>' +
            '                                                                            <input type="radio" class="btn-check"' +
            '                                                                                   name="repair_shop' + newncnt + '"' +
            '                                                                                   value="Freie Wahl" id="btnradio2_">' +
            '                                                                            <label' +
            '                                                                                class="btn btn-outline-secondary w-100 g-0 "' +
            '                                                                                for="btnradio2' + newncnt + '_">Freie Wahl</label>' +
            '' +
            '                                                                        </div>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-div1 mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="">' +
            '                                                                                    + Unfalldeckung:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <div class="btn-group" role="group"' +
            '                                                                 aria-label="Basic radio toggle button group">' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="accident_coverage' + newncnt + '" value="Ja"' +
            '                                                                       id="btnradio3abcdef' + newncnt + '" autocomplete="off" checked>' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3abcdef' + newncnt + '">Ja</label>' +
            '' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="accident_coverage' + newncnt + '" value="Nein"' +
            '                                                                       id="btnradio4abcdef' + newncnt + '" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio4abcdef' + newncnt + '">Nein</label>' +
            '                                                            </div>' +
            '                                                                    </div>' +
            '                                                                </div>' +
            '                                                                <div class="col">' +
            '                                                                    <div class="input-div1 mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="">' +
            '                                                                                    + Verkehrsrechtsschutz:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <div class="btn-group" role="group"' +
            '                                                                 aria-label="Basic radio toggle button group">' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="traffic_legal_protection' + newncnt + '" value="Ja"' +
            '                                                                       id="btnradio3a' + newncnt + '" autocomplete="off" checked>' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3a' + newncnt + '">Ja</label>' +
            '' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="traffic_legal_protection' + newncnt + '" value="Nein"' +
            '                                                                       id="btnradio4a' + newncnt + '" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio4a' + newncnt + '">Nein</label>' +
            '                                                            </div>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-div1 mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="">' +
            '                                                                                    + Grobfahrlässigkeitschutz:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <div class="btn-group" role="group"' +
            '                                                                 aria-label="Basic radio toggle button group">' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="grossly' + newncnt + '" value="Ja"' +
            '                                                                       id="btnradio3ab' + newncnt + '" autocomplete="off" checked>' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3ab' + newncnt + '">Ja</label>' +
            '' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="grossly' + newncnt + '" value="Nein"' +
            '                                                                       id="btnradio4ab' + newncnt + '" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio4ab' + newncnt + '">Nein</label>' +
            '                                                            </div>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-div1 mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="">' +
            '                                                                                    + Glasschutz:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <div class="btn-group" role="group"' +
            '                                                                 aria-label="Basic radio toggle button group">' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="glass_protection' + newncnt + '" value="Ja"' +
            '                                                                       id="btnradio3abc' + newncnt + '" autocomplete="off" checked>' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3abc' + newncnt + '">Ja</label>' +
            '' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="glass_protection' + newncnt + '" value="Nein"' +
            '                                                                       id="btnradio4abc' + newncnt + '" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio4abc' + newncnt + '">Nein</label>' +
            '                                                            </div>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-div1 mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="">' +
            '                                                                                    + Parkschaden:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '' +
            '                                                                        <div class="btn-group" role="group"' +
            '                                                                 aria-label="Basic radio toggle button group">' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="parking_damage' + newncnt + '" value="Ja"' +
            '                                                                       id="btnradio3abcd' + newncnt + '" autocomplete="off" checked>' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3abcd' + newncnt + '">Ja</label>' +
            '' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="parking_damage' + newncnt + '" value="Nein"' +
            '                                                                       id="btnradio4abcd' + newncnt + '" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio4abcd' + newncnt + '">Nein</label>' +
            '                                                            </div>' +
            '                                                                    </div>' +
            '                                                                    <div class="input-div1 mb-2">' +
            '                                                                        <div class="">' +
            '                                                                                <span class="">' +
            '                                                                                    + 24h Pannenhilfe:' +
            '                                                                                </span>' +
            '                                                                        </div>' +
            '                                                                        <div class="btn-group" role="group"' +
            '                                                                 aria-label="Basic radio toggle button group">' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="hour_breakdown_assistance' + newncnt + '" value="Ja"' +
            '                                                                       id="btnradio3abcde' + newncnt + '" autocomplete="off" checked>' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio3abcde' + newncnt + '">Ja</label>' +
            '' +
            '                                                                <input type="radio" class="btn-check"' +
            '                                                                       name="hour_breakdown_assistance' + newncnt + '" value="Nein"' +
            '                                                                       id="btnradio4abcde' + newncnt + '" autocomplete="off">' +
            '                                                                <label class="btn btn-outline-secondary"' +
            '                                                                       for="btnradio4abcde' + newncnt + '">Nein</label>' +
            '                                                            </div>' +
            '                                                                    </div>' +
            '                                                                </div>' +
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
            '</div>';
        document.getElementById('newncount').value = newncnt;
    }

    function changecnt(x) {
        cntt = x;
        if (x == 3) {
            document.getElementById("submitt").setAttribute('data-bs-toggle', 'modal');
            document.getElementById("submitt").setAttribute('data-bs-target', '#exampleModal');
        }
    }

    function deletethat(x, y) {
        $('#n' + x).remove();
        newncnt--;
        document.getElementById('newncount').value = newncnt;
        nofert.push(y);
        document.getElementById('nofert').value = nofert.toString();
    }

    function deletethat2(x, y) {
        $('#g' + x).remove();

        $('#of' + x).remove();
newgcnt--;
document.getElementById('newgcount').value = newgcnt;
gofert.push(y);
document.getElementById('gofert').value = gofert.toString();

    }

    function upload(x) {
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

    function changecnt(x) {
        cntt = x;
        if (x == 3) {
            document.getElementById("submitt").setAttribute('data-bs-toggle', 'modal');
            document.getElementById("submitt").setAttribute('data-bs-target', '#exampleModal');
        }
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

    function msheleqeta() {
        var x = document.getElementById('manval').value;
        if (x == "No") {
            document.getElementById('mandat').innerHTML = "<input name='mandatiert' style='display:none'>";
        }
    }

    function addContentFunct() {
        $("#added-content").slideToggle();
        $("#add-btn").slideToggle();
    }

    function saveContentFunct() {
        $("#add-btn").slideToggle();
        $("#added-content").slideToggle();
    }

    function addContentFunct1() {
        $("#added-content1").slideToggle();
        $("#add-btn1").slideToggle();
    }

    function saveContentFunct1() {
        $("#add-btn1").slideToggle();
        $("#added-content1").slideToggle();
    }

    function addContentFunct2() {
        $("#added-content2").slideToggle();
        $("#add-btn2").slideToggle();
    }

    function saveContentFunct2() {
        $("#add-btn2").slideToggle();
        $("#added-content2").slideToggle();
    }

    function addContentFunct3() {
        $("#added-content3").slideToggle();
        $("#add-btn3").slideToggle();
    }

    function saveContentFunct3() {
        $("#add-btn3").slideToggle();
        $("#added-content3").slideToggle();
    }

    function hideNation() {
        var x = document.getElementById('schweiz').value;
        if (x == "CH") {
            document.getElementById('admin').style.display = "none";
        } else {
            document.getElementById('admin').style.display = "inline";
        }
    }


</script>


</body>

</html>
<style>
    /*Per Notification */
    .coloriii a {
        color: black !important;
    }
</style>
