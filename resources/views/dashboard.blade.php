@extends('template.navbar')
@section('content')
    <title>Home</title>

    @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('digital'))
        <section>
            <div class="col-md-12 col-11 mx-auto">
                <div class="py-3 mx-3">
                    <div class="text-start">
                            <span class="fw-bolder" style="font-family: 'Montserrat'">
                                ÜBERSICHT
                            </span>
                    </div>

                    <div class="text-muted">
                            <span class="" style="color: #B9B9B9;font-family: 'Montserrat'">
                                Zeitraum 01.09.2021 - 31.09.2021
                                <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" width="18.401" height="7.671"
                                     viewBox="0 0 18.401 7.671">
                                    <path id="Path_273" data-name="Path 273" d="M216.715,2188l8.153,5.874,8.153-5.874"
                                          transform="translate(-215.668 -2186.953)" fill="none" stroke="#b9b9b9"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                </svg>
                            </span>
                    </div>
                </div>
                <div class="py-3 mx-3">
                    <div class="row">
                        <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl g-0 px-3 mb-3 " style="font-family: 'Montserrat'">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 303.571 190.391">
                                <defs>
                                    <clipPath id="clip-path">
                                    <rect id="Rectangle_4" data-name="Rectangle 4" width="303.569" height="190.388" fill="#bdc1cc"/>
                                    </clipPath>
                                    <clipPath id="clip-path-2">
                                    <rect id="Rectangle_5" data-name="Rectangle 5" width="111.429" height="81.913" fill="#88889b"/>
                                    </clipPath>
                                </defs>
                                <g id="Group_6" data-name="Group 6" transform="translate(0 0.004)">
                                    <g id="Group_5" data-name="Group 5" clip-path="url(#clip-path)">
                                    <path id="Path_274" data-name="Path 274" d="M282.242,190.39H21.329C9.549,190.39,0,181.3,0,170.077V20.313C0,9.1,9.549,0,21.329,0H282.242c11.78,0,21.329,9.094,21.329,20.311V170.077c0,11.219-9.549,20.313-21.329,20.313" transform="translate(0 -0.002)" fill="#bdc1cc"/>
                                    </g>
                                </g>
                                <g id="Group_778" data-name="Group 778" transform="translate(-397.019 -143.537)">
                                    <g id="Group_9" data-name="Group 9" transform="translate(589.161 143.537)">
                                    <g id="Group_8" data-name="Group 8" clip-path="url(#clip-path-2)">
                                        <path id="Path_275" onclick="window.location.href='{{route('costumers')}}'" style="cursor: pointer;" data-name="Path 275" d="M214.01,20.318V76.634c-91.968,21.8-104.334-30.2-104.386-41.938C109.468,0,102.581,0,102.581,0h90.095c11.782,0,21.334,9.1,21.334,20.318" transform="translate(-102.581)" fill="#88889b"/>
                                    </g>
                                    </g>
                                    <ellipse id="Ellipse_8" onclick="window.location.href='{{route('costumers')}}'" style="cursor: pointer;" data-name="Ellipse 8" cx="2.923" cy="2.783" rx="2.923" ry="2.783" transform="translate(659.672 173.599)" fill="#fff"/>
                                    <ellipse id="Ellipse_9" onclick="window.location.href='{{route('costumers')}}'" style="cursor: pointer;" data-name="Ellipse 9" cx="2.923" cy="2.783" rx="2.923" ry="2.783" transform="translate(659.672 182.506)" fill="#fff"/>
                                </g>
                                <text id="_74_" data-name="74%" transform="translate(31.871 94.343)" fill="#fff" font-size="49" font-family="Montserrat-Bold, Montserrat" font-weight="700"><tspan x="0" y="0">{{$counterat['provisionertCount']}}</tspan></text>
                                <text id="Abschlussquote" transform="translate(31.871 144.225)" fill="#fff" font-size="23" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="0" y="0">Privisionert</tspan></text>
                            </svg>
                        </div>
                        <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl g-0 px-3 mb-3" style="font-family: 'Montserrat'">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 303.571 190.391">
                                <defs>
                                    <clipPath id="clip-path">
                                    <rect id="Rectangle_4" data-name="Rectangle 4" width="303.569" height="190.388" fill="#4cc590"/>
                                    </clipPath>
                                    <clipPath id="clip-path-2">
                                    <rect id="Rectangle_5" data-name="Rectangle 5" width="111.429" height="81.913" fill="#49b178"/>
                                    </clipPath>
                                </defs>
                                <g id="Group_779" data-name="Group 779" transform="translate(-749.111 -143.537)">
                                    <g id="Group_6" data-name="Group 6" transform="translate(749.111 143.541)">
                                    <g id="Group_5" data-name="Group 5" clip-path="url(#clip-path)">
                                        <path id="Path_274" data-name="Path 274" d="M282.242,190.39H21.329C9.549,190.39,0,181.3,0,170.077V20.313C0,9.1,9.549,0,21.329,0H282.242c11.78,0,21.329,9.094,21.329,20.311V170.077c0,11.219-9.549,20.313-21.329,20.313" transform="translate(0 -0.002)" fill="#4cc590"/>
                                    </g>
                                    </g>
                                    <g id="Group_9" data-name="Group 9" transform="translate(941.253 143.537)">
                                    <g id="Group_8" data-name="Group 8" clip-path="url(#clip-path-2)">
                                        <path id="Path_275" onclick="window.location.href='{{route('costumers')}}'" style="cursor: pointer;" data-name="Path 275" d="M214.01,20.318V76.634c-91.968,21.8-104.334-30.2-104.386-41.938C109.468,0,102.581,0,102.581,0h90.095c11.782,0,21.334,9.1,21.334,20.318" transform="translate(-102.581)" fill="#49b178"/>
                                    </g>
                                    </g>
                                    <ellipse id="Ellipse_6" onclick="window.location.href='{{route('costumers')}}'" style="cursor: pointer;" data-name="Ellipse 6" cx="2.923" cy="2.783" rx="2.923" ry="2.783" transform="translate(1011.763 173.599)" fill="#fff"/>
                                    <ellipse id="Ellipse_7" onclick="window.location.href='{{route('costumers')}}'" style="cursor: pointer;" data-name="Ellipse 7" cx="2.923" cy="2.783" rx="2.923" ry="2.783" transform="translate(1011.763 182.506)" fill="#fff"/>
                                    <text id="_23" data-name="23" transform="translate(780.002 239.881)" fill="#fff" font-size="51" font-family="Montserrat-Bold, Montserrat" font-weight="700"><tspan x="0" y="0">{{$counterat['aufgenomenCount']}}</tspan></text>
                                    <text id="Aufgenommen" transform="translate(780.002 287.762)" fill="#fff" font-size="23" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="0" y="0">Aufgenommen</tspan></text>
                                </g>
                            </svg>
                        </div>
                        <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl g-0 px-3 mb-3" style="font-family: 'Montserrat'">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 303.571 190.391">
                                <defs>
                                    <clipPath id="clip-path">
                                    <rect id="Rectangle_4" data-name="Rectangle 4" width="303.569" height="190.388" fill="#fec278"/>
                                    </clipPath>
                                    <clipPath id="clip-path-2">
                                    <rect id="Rectangle_5" data-name="Rectangle 5" width="111.429" height="81.913" fill="#edae60"/>
                                    </clipPath>
                                </defs>
                                <g id="Group_782" data-name="Group 782" transform="translate(-1101.207 -143.537)">
                                    <g id="Group_5" data-name="Group 5" transform="translate(1101.207 143.541)" clip-path="url(#clip-path)">
                                    <path id="Path_274" data-name="Path 274" d="M282.242,190.39H21.329C9.549,190.39,0,181.3,0,170.077V20.313C0,9.1,9.549,0,21.329,0H282.242c11.78,0,21.329,9.094,21.329,20.311V170.077c0,11.219-9.549,20.313-21.329,20.313" transform="translate(0 -0.002)" fill="#fec278"/>
                                    </g>
                                    <g id="Group_9" data-name="Group 9" transform="translate(1293.349 143.537)">
                                    <g id="Group_8" data-name="Group 8" clip-path="url(#clip-path-2)">
                                        <path id="Path_275" onclick="window.location.href='{{route('costumers')}}'" style="cursor: pointer;" data-name="Path 275" d="M214.01,20.318V76.634c-91.968,21.8-104.334-30.2-104.386-41.938C109.468,0,102.581,0,102.581,0h90.095c11.782,0,21.334,9.1,21.334,20.318" transform="translate(-102.581)" fill="#edae60"/>
                                    </g>
                                    </g>
                                    <ellipse id="Ellipse_4" onclick="window.location.href='{{route('costumers')}}'" style="cursor: pointer;" data-name="Ellipse 4" cx="2.711" cy="2.582" rx="2.711" ry="2.582" transform="translate(1365.642 174.097)" fill="#fff"/>
                                    <text id="_32" data-name="32" transform="translate(1137.893 237.881)" fill="#fff" font-size="49" font-family="Montserrat-Bold, Montserrat" font-weight="700"><tspan x="0" y="0">{{$counterat['offenCount']}}</tspan></text>
                                    <text id="Aufgenommen" transform="translate(1137.893 287.762)" fill="#fff" font-size="23" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="0" y="0">Ausstehend</tspan></text>
                                    <ellipse id="Ellipse_57" onclick="window.location.href='{{route('costumers')}}'" style="cursor: pointer;" data-name="Ellipse 57" cx="2.711" cy="2.582" rx="2.711" ry="2.582" transform="translate(1365.642 183.097)" fill="#fff"/>
                                </g>
                            </svg>
                        </div>
                        <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl g-0 px-3 mb-3" style="font-family: 'Montserrat'">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 303.571 190.391">
                                <defs>
                                    <clipPath id="clip-path">
                                    <rect id="Rectangle_4" data-name="Rectangle 4" width="303.569" height="190.388" fill="#ff6262"/>
                                    </clipPath>
                                    <clipPath id="clip-path-2">
                                    <rect id="Rectangle_5" data-name="Rectangle 5" width="111.429" height="81.913" fill="#fd2f2f"/>
                                    </clipPath>
                                </defs>
                                <g id="Group_6" data-name="Group 6" transform="translate(0 0.004)">
                                    <g id="Group_5" data-name="Group 5" clip-path="url(#clip-path)">
                                    <path id="Path_274" data-name="Path 274" d="M282.242,190.39H21.329C9.549,190.39,0,181.3,0,170.077V20.313C0,9.1,9.549,0,21.329,0H282.242c11.78,0,21.329,9.094,21.329,20.311V170.077c0,11.219-9.549,20.313-21.329,20.313" transform="translate(0 -0.002)" fill="#ff6262"/>
                                    </g>
                                </g>
                                <g id="Group_9" data-name="Group 9" transform="translate(192.142)">
                                    <g id="Group_8" data-name="Group 8" clip-path="url(#clip-path-2)">
                                    <path id="Path_275" onclick="window.location.href='{{route('costumers')}}'" style="cursor: pointer;" data-name="Path 275" d="M214.01,20.318V76.634c-91.968,21.8-104.334-30.2-104.386-41.938C109.468,0,102.581,0,102.581,0h90.095c11.782,0,21.334,9.1,21.334,20.318" transform="translate(-102.581)" fill="#fd2f2f"/>
                                    </g>
                                </g>
                                <ellipse id="Ellipse_11" onclick="window.location.href='{{route('costumers')}}'" style="cursor: pointer;" data-name="Ellipse 11" cx="2.923" cy="2.783" rx="2.923" ry="2.783" transform="translate(262.653 30.062)" fill="#fff"/>
                                <ellipse id="Ellipse_10" onclick="window.location.href='{{route('costumers')}}'" style="cursor: pointer;" data-name="Ellipse 10" cx="2.923" cy="2.783" rx="2.923" ry="2.783" transform="translate(262.653 38.969)" fill="#fff"/>
                                <text id="_74_" data-name="74%" transform="translate(31.565 94.876)" fill="#fff" font-size="49" font-family="Montserrat-Bold, Montserrat" font-weight="700"><tspan x="0" y="0">{{round($counterat['familyCount'],2)}}%</tspan></text>
                                <text id="Abschlussquote" transform="translate(31.565 144.474)" fill="#fff" font-size="23" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="0" y="0">Abschlussquote</tspan></text>
                            </svg>

                        </div>
                    </div>
                </div>

                <div class="section-after-boxes">
                    <div class="row">
                        <div class="d-grid col-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="calendar-div mx-3">
                                <calendar></calendar>
                            </div>
                            <div class="text-center" style="margin-top: -30px">
                                <a href="{{route('insertappointment')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="37.694" height="37.694"
                                         viewBox="0 0 37.694 37.694">
                                        <g id="Group_621" data-name="Group 621"
                                           transform="translate(-663.236 -976.679)">
                                            <g id="Group_550" data-name="Group 550"
                                               transform="translate(663.236 976.679)">
                                                <rect id="Rectangle_9" data-name="Rectangle 9"
                                                      width="37.694" height="37.694" rx="18.847"
                                                      fill="#4ec590"/>
                                                <g id="Group_42" data-name="Group 42"
                                                   transform="translate(12.724 12.724)">
                                                    <line id="Line_11" data-name="Line 11" y2="11.972"
                                                          transform="translate(5.986 0)" fill="none"
                                                          stroke="#fff" stroke-linecap="round"
                                                          stroke-width="2"/>
                                                    <line id="Line_12" data-name="Line 12" x1="11.972"
                                                          transform="translate(0 5.634)" fill="none"
                                                          stroke="#fff" stroke-linecap="round"
                                                          stroke-width="2"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-6 col-xl-6 pe-4">
                            <div class="my-1 px-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="">
                                                <span class="fw-bold fs-5" style="font-family: 'Montserrat'">
                                                    Weiteres
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="row">
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0 px-3 mb-3" style="font-family: 'Montserrat';">
                                        <div class="text-center"
                                             style="background-color: #8A8BF9; border-radius: 18px;  margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%; height: 150px;">
                                            <div class="pt-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                     fill="#fff" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    <path fill-rule="evenodd"
                                                          d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                                </svg>
                                            </div>
                                            <div class="py-2">
                                                    <span class="fw-bold fs-5 text-white">
                                                        {{$leadscount}}
                                                    </span>
                                                <br>
                                                <span class="fw-bold fs-5 text-white">
                                                        Neue Leads
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0 px-3 mb-3" style="font-family: 'Montserrat';">
                                        <div class="text-center"
                                             style="background-color: #F88DC4; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%; height: 150px;">
                                            <div class="pt-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                     fill="#fff" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                                </svg>
                                            </div>
                                            <div class="py-2">
                                                    <span class="fw-bold fs-5 text-white">
{{$offen}}
                                                    </span>
                                                <br>
                                                <span class="fw-bold fs-5 text-white">
                                                        Offene Aufgaben
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0 px-3 mb-3" style="font-family: 'Montserrat';">
                                        <div class="text-center"
                                             style="background-color: #4EC590; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%; height: 150px;">
                                            <div class="pt-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                     fill="#fff" class="bi bi-exclamation-octagon-fill"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                </svg>
                                            </div>
                                            <div class="py-2">
                                                    <span class="fw-bold fs-5 text-white">
                                                        {{$pendingcnt}}
                                                    </span>
                                                <br>
                                                <span class="fw-bold fs-5 text-white">
                                                        Steht Aus
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0 px-3 mb-3" style="font-family: 'Montserrat';">
                                        <div class="text-center"
                                             style="background-color: #4e5ec5; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%; height: 150px;">
                                            <div class="pt-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                     fill="#fff" class="bi bi-exclamation-octagon-fill"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                </svg>
                                            </div>
                                            <div class="py-2">
                                                    <span class="fw-bold fs-5 text-white">
                                                        {{$todayAppointCount}}
                                                    </span>
                                                <br>
                                                <span class="fw-bold fs-5 text-white">
                                                        Heute Termin
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0 px-3 mb-3" style="font-family: 'Montserrat';">
                                        <div class="text-center"
                                             style="background-color: #c7cb81; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%; height: 150px;">
                                            <div class="pt-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                     fill="#fff" class="bi bi-exclamation-octagon-fill"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                </svg>
                                            </div>
                                            <div class="py-2">
                                                    <span class="fw-bold fs-5 text-white">
                                                        0
                                                    </span>
                                                <br>
                                                <span class="fw-bold fs-5 text-white">
                                                        HR Comm
                                                    </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0 px-3 mb-3" style="font-family: 'Montserrat';">
                                        <div class="text-center box-1 "
                                             style="margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%; height: 150px;">
                                            <div class="py-4 ">
                                                <div class="py-2">
                                                    <svg id="Group_549" data-name="Group 549"
                                                         xmlns="http://www.w3.org/2000/svg" width="29.713"
                                                         height="29.713" viewBox="0 0 29.713 29.713">
                                                        <rect id="Rectangle_9" data-name="Rectangle 9"
                                                              width="29.713" height="29.713" rx="14.857"
                                                              transform="translate(0)" fill="#4ec590"/>
                                                        <g id="Group_42" data-name="Group 42"
                                                           transform="translate(10.03 10.03)">
                                                            <line id="Line_11" data-name="Line 11" y2="9.437"
                                                                  transform="translate(4.719 0)" fill="none"
                                                                  stroke="#fff" stroke-linecap="round"
                                                                  stroke-width="2"/>
                                                            <line id="Line_12" data-name="Line 12" x1="9.437"
                                                                  transform="translate(0 4.441)" fill="none"
                                                                  stroke="#fff" stroke-linecap="round"
                                                                  stroke-width="2"/>
                                                        </g>
                                                    </svg>

                                                </div>
                                                <div class="py-1">
                                                        <span class="text-muted">
                                                            Add New One
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))

    <div class="row mx-4 px-3" id="app">

            <div class="col-12 col-md-12 mb-3 mt-3">
                <todo></todo>
            </div>


            <div class="col-12 col-sm-12 col-md-12 col-lg-6 pe-3 g-0 mb-3 my-1 py-2">
                <div class="accordion accordion-flush mx-3 " id="accordionFlush2">
                    <div class="accordion-item my-1 py-2" style="background-color: #4EC590;">
                        <div class="p-3">
                                <span class="col text-white fw-bold fs-5" style="font-family: 'Montserrat';">
                                Answered Pendencies
                                </span>
                        </div>
                        <hr class="text-black" style="color: #fff !important; height: 2px; margin: 0 !important; opacity: 1;">
                        <div id="flush-collapse3" class="accordion-collapse collapse show pt-3"
                             aria-labelledby="flush-heading3" data-bs-parent="#accordionFlush3">
                            <div class="accordion-body p-0 mx-2 overflow-div2"
                                 style="background-color: #4EC590; border-bottom-left-radius: 15px; font-family: 'Montserrat'; border-bottom-right-radius: 15px; height: 170px; overflow-y: scroll !important; overflow-x: hidden !important;">
                                @if(!empty($pendencies))
                                    @foreach($pendencies as $pendency)
                                        @php
                                            $crypt = $pendency->family_id * 1244;
                                            $familyId = \Illuminate\Support\Facades\Crypt::encrypt($crypt);
                                            $admin_id = \Illuminate\Support\Facades\Crypt::encrypt($pendency->admin_id * 1244);
                                            $pend_id = $pendency->pid;
                                        @endphp
                                        <a style="text-decoration: none"
                                           href="{{route('leadfamilyperson',[$familyId,$admin_id,'pend_id' => $pend_id])}}">
                                            <div class="py-2 my-2 mx-2"
                                                 style="background-color: #fff; border-radius: 15px; color: #000;">

                                                <div class="mx-3 ">
                                                    <div class="row">
                                                        <div class="col">
                                                        <span class="fw-bold fs-5">
                                                          {{$pendency->first_name}} {{$pendency->last_name}}
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 ps-3 col-lg-6 g-0 mb-3 my-1 py-2">
                <div class="accordion accordion-flush mx-3 " id="accordionFlush5">
                    <div class="accordion-item my-1 py-2" style="background-color: #FFEBE5;">
                        <div class="p-3">
                                <span class="col text-black fw-bold fs-5" style="font-family: 'Montserrat';">
                                Open For More Than A Month
                                 </span>
                        </div>
                        <hr class="text-black" style="color: #fff !important; height: 2px; margin: 0 !important; opacity: 1;">
                        <div id="flush-collapse5" class="accordion-collapse collapse show"
                             aria-labelledby="flush-heading5" data-bs-parent="#accordionFlush5">
                            <div class="accordion-body p-0 mx-2 py-2 overflow-div4"
                                 style="background-color: #FFEBE5; font-family: 'Montserrat'; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; height: 185px; overflow-y: scroll !important; overflow-x: hidden !important;">
                                @if(!empty($morethan30))
                                    @foreach($morethan30 as $pendency)
                                        @php
                                            $crypt = $pendency->family_id * 1244;
                                            $familyId = \Illuminate\Support\Facades\Crypt::encrypt($crypt);
                                            $admin_id = \Illuminate\Support\Facades\Crypt::encrypt($pendency->admin_id * 1244);
                                            $pend_id = $pendency->pid;
                                        @endphp
                                        <a style="text-decoration: none;"
                                           href="{{route('leadfamilyperson',[$familyId,$admin_id,'pend_id' => $pend_id])}}">
                                            <div class="py-2 my-2 mx-2"
                                                 style="background-color: #fff; border-radius: 15px; color: #000;">
                                                <div class="mx-3 ">
                                                    <div class="row">
                                                        <div class="col">
                                                        <span class="fw-bold fs-5" style="font-family: 'Montserrat';">
                                                            {{$pendency->first_name}} {{$pendency->last_name}}
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(!Auth::guard('admins')->user()->hasRole('backoffice'))
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 g-0 pe-3 mb-3 my-1 py-2">
                <div class="accordion accordion-flush mx-3 " id="accordionFlush5">
                    <div class="accordion-item my-1 py-2" style="background-color: #ececec;">
                        <div class="p-3">
                            <div class="row">
                                <div class="col"><h5><b>Personal Apponitments</b></h5></div>
                                @if(!Auth::user()->hasRole('backoffice'))<div style="color: #0a53be" class="col-3 text-end pe-4"><h5><b>{{$countpersonalApp}}</b></h5></div>@endif
                            </div>
                        </div>
                        <hr class="text-black" style="color: #fff !important; height: 2px; margin: 0 !important; opacity: 1;">
                        <br>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse show"
                             aria-labelledby="flush-heading1" data-bs-parent="#accordionFlush1">

                            <div class="accordion-body p-0 mx-2 py-2 overflow-div1"
                                 style="background-color: #F7F7F7; font-family: 'Montserrat'; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; height: 170px; overflow-y: scroll !important; overflow-x: hidden !important;">
                                @if(!Auth::guard('admins')->user()->hasRole('backoffice'))
                                    @foreach($personalApp as $perApp)
                                        <div class="py-2 my-2 mx-2"
                                             style="background-color: #fff; border-radius: 15px; color: #000; font-family: 'Montserrat';">
                                            <div class="mx-3 ">
                                                <div class="row">
                                                    <div class="col">
                                                    <span class="fw-bold fs-5" style="font-family: 'Montserrat';">
                                                        {{$perApp->title}}
                                                    </span>
                                                    </div>
                                                    <div class="col-1 text-end">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="5"
                                                             height="13"
                                                             viewBox="0 0 5 13">
                                                            <g id="Group_528" data-name="Group 528"
                                                               transform="translate(-0.239 0)">
                                                                <circle id="Ellipse_6" data-name="Ellipse 6"
                                                                        cx="2.5"
                                                                        cy="2.5" r="2.5"
                                                                        transform="translate(0.239 0)"
                                                                        fill="#000"/>
                                                                <circle id="Ellipse_7" data-name="Ellipse 7"
                                                                        cx="2.5"
                                                                        cy="2.5" r="2.5"
                                                                        transform="translate(0.239 8)"
                                                                        fill="#000"/>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="">
                                                                <span>
                                                                    Address: {{$perApp->address}}
                                                                </span>
                                                </div>
                                                <div class="">
                                                                <span>
                                                                    Date: {{$perApp->date}}
                                                                </span>
                                                </div>
                                                <div class="">
                                                                <span>
                                                                    Time: {{$perApp->time}}
                                                                </span>
                                                </div>
                                                <div class="">
                                                                <span>
                                                                    Comment: {{$perApp->comment}}
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="text-left mx-2 py-2 mt-3">
                                <button type="button" class="btn" style="background-color: #4ec490; color: white; border: 1px solid #4ec490; width: 30%; border-radius: 8px !important;" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30.751" height="29.429" viewBox="0 0 30.751 29.429">
                                        <g id="Group_42" data-name="Group 42" transform="translate(1.5 1.5)">
                                            <line id="Line_11" data-name="Line 11" y2="26.429" transform="translate(13.876 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
                                            <line id="Line_12" data-name="Line 12" x1="27.751" transform="translate(0 12.437)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div class="modal fade" style="top: 1% !important;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content p-3" style="border-radius: 43px !important;">
                                        <div class="modal-header" style="border-bottom: 0 !important;">
                                            <h5 class="modal-title mx-2" id="exampleModalLabel" style="font-family: 'Montserrat' !important;"><b>Add Personals
                                                    Appointment</b></h5>
                                            <button type="button" class="btn-close" style="opacity: 1 !important;" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="" action="{{route('addPersonalAppointment')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="apporconId" value="1">
                                                <div class="px-2">
                                                    <label style="font-family: 'Montserrat' !important;"><b>Title</b></label>
                                                    <input type="text" style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';" name="title" class="form-control mb-3" required>
                                                    <label style="font-family: 'Montserrat' !important;"><b>Date</b></label>
                                                    <input type="date" style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';" name="date" class="form-control mb-3" required>
                                                    <label style="font-family: 'Montserrat' !important;"><b>Time</b></label>
                                                    <input type="time" style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';" name="time" class="form-control mb-3" required>
                                                    <label style="font-family: 'Montserrat' !important;"><b>Address</b></label>
                                                    <input type="text" style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';" name="address" class="form-control mb-3" required>
                                                    <label style="font-family: 'Montserrat' !important;"><b>Comment</b></label>
                                                    <textarea type="text" style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';" rows="3" name="comment" class="form-control mb-3"
                                                              required>
                                                    </textarea>
                                                    <label style="font-family: 'Montserrat' !important;"><b>Assign To</b></label>

                                                    <select class="form-select mb-2" style="font-family: 'Montserrat' !important;border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important;" name="roleid">
                                                        @if(!Auth::guard('admins')->user()->hasRole('backoffice'))
                                                            @foreach($admins as $admin)

                                                                <option value="{{$admin->id}}">{{$admin->name}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>

                                                </div>
                                                <div class="modal-footer px-1" style="border-top: 0 !important; justify-content: flex-start !important;">
                                                    <div class="row" style="width: 100%;">
                                                        <div class="col-md-4 col-5 p-0">
                                                            <div style="padding: 2%;">
                                                                <input type="submit" style="font-family: 'Montserrat' !important; width: 100%; border: 1px solid #4EC590; font-weight: 600 !important; font-size: 18px !important; background-color: #4EC590; color: #fff; border-radius: 8px;" class="btn py-2" value="Save">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-5 p-0">
                                                            <div style="padding: 2%;">
                                                                <button type="button" class="btn py-2"
                                                                        data-bs-dismiss="modal" style="font-family: 'Montserrat' !important; width: 100%; font-weight: 600 !important; border: 1px solid #6C757D; font-size: 18px !important; background-color: #6C757D; color: #fff; border-radius: 8px;">
                                                                    Close
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif
            @endif
            @if(Auth::guard('admins')->user()->hasRole('salesmanager'))
            <div class="modal fade" id="finstatus" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background: #f8f8f8; border-radius: 43px">
                                            <div class="modal-header mx-3 pt-4" style="border-bottom: none !important;">
                                                <h4>Status</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="opacity: 1 !important;"></button>
                                            </div>
                                            <div class="modal-body p-3">
                                                <div class="row">
                                                    <div class="col-6" >
                                                        <div class="text-center my-1 fw-bold" style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                                            {{$zuruckCount}}
                                                            <br>
                                                            Zuruckgezogen
                                                        </div>
                                                    </div>
                                                    <div class="col-6"  >
                                                        <div class="text-center my-1 fw-bold" style="padding: 15px;background-color: #eeeeee; border-radius: 15px">
                                                            {{$abgCount}}
                                                            <br>
                                                            Abgelehnt
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-6" >
                                                        <div class="text-center my-1 fw-bold" style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                                            {{$offenCount}}
                                                            <br>
                                                            Offen
                                                        </div>
                                                    </div>
                                                    <div class="col-6"  >
                                                        <div class="text-center my-1 fw-bold" style="padding: 15px;background-color: #eeeeee; border-radius: 15px">
                                                            {{$aufgenomenCount}}
                                                            <br>
                                                            Aufgenomen
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12" >
                                                        <div class="text-center fw-bold" style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                                            {{$provisionertCount}}
                                                            <br>
                                                            Provisionert
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer" style="border-top: none !important; display: block;">
                                                <div class="row mx-4 pb-4">
                                                  <div class="col-3 mx-auto">
                                                    <button type="button" class="btn w-100 px-3" style=" color: #ffffff !important; background-color: #6C757D !important;border-radius: 8px !important;" data-bs-dismiss="modal"><b>Close</b></button>
                                                  </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                <section class="my-5">
                    <div class="statistics " >
                        <div class="mx-4 py-3" style="background-color: #f7f7f7; border-radius: 15px;">
                            <div class="header mx-4 py-3">
                                <span class="fs-5 fw-bold">Statistics</span>
                            </div>
                            <div class="content mx-4">
                                <div class="row">
                                    <div class="col">
                                  <button class="border-0 w-100 py-1 m-1" type="button" data-bs-toggle="modal" data-bs-target="#finstatus" style="background-color: #ff5e64; color: #fff; border-radius: 8px;">Status</button>
                                    </div>
                                    <div class="col">
                                        <button class="border-0 w-100 py-1 m-1"
                                                style="background-color: #0072c9; color: #fff; border-radius: 8px;">Finances</button>
                                    </div>
                                    <div class="col">
                                        <button class="border-0 w-100 py-1 m-1"
                                                style="background-color: #757efe; color: #fff; border-radius: 8px;">Statments</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 mx-2">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 g-0 mb-3">
                            <div class="consultations-div pb-2">
                                <div class="">
                                    <div class="accordion accordion-flush mx-3 " id="accordionFlush5">
                                        <div class="accordion-item mb-3 my-1 py-2" style="background-color: #F7F7F7;">
                                            <h2 class="accordion-header" id="flush-heading5">
                                                <div class="p-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5><b>Consultations</b></h5>
                                                        </div>
                                                        <div style="color: #0a53be" class="col-3 text-end">
                                                            <h5><b>{{$countconsultation}}</b></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </h2>
                                            <div id="flush-collapse5" class="accordion-collapse collapse show"
                                                 aria-labelledby="flush-heading5" data-bs-parent="#accordionFlush5">
                                                <div class="accordion-body p-0 mx-2 py-2 overflow-div4"
                                                     style="background-color: #F7F7F7; font-family: 'Montserrat'; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; height: 170px; overflow-y: scroll !important; overflow-x: hidden !important;">
                                                    @foreach($consultation as $consult)
                                                        <div class="py-2 my-2 mx-2"
                                                             style="background-color: #fff; font-family: 'Montserrat'; border-radius: 15px; color: #000;">
                                                            <div class="mx-3 ">
                                                                <div class="row">
                                                                    <div class="col">
                                                    <span class="fw-bold fs-5" style="font-family: 'Montserrat';">
                                                        {{$consult->title}}
                                                    </span>
                                                                    </div>
                                                                    <div class="col-1 text-end">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="13"
                                                                             viewBox="0 0 5 13">
                                                                            <g id="Group_528" data-name="Group 528"
                                                                               transform="translate(-0.239 0)">
                                                                                <circle id="Ellipse_6" data-name="Ellipse 6" cx="2.5"
                                                                                        cy="2.5" r="2.5" transform="translate(0.239 0)"
                                                                                        fill="#000" />
                                                                                <circle id="Ellipse_7" data-name="Ellipse 7" cx="2.5"
                                                                                        cy="2.5" r="2.5" transform="translate(0.239 8)"
                                                                                        fill="#000" />
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                <span style="font-family: 'Montserrat';">
                                                    Address: {{$consult->address}}
                                                </span>
                                                                </div>
                                                                <div class="">
                                                                    <span style="font-family: 'Montserrat';">
                                                                        Date: {{$consult->date}}
                                                                    </span>
                                                                </div>
                                                                <div class="">
                                                                    <span style="font-family: 'Montserrat';">
                                                                        Time: {{$consult->time}}
                                                                    </span>
                                                                </div>
                                                                <div class="">
                                                <span style="font-family: 'Montserrat';">
                                                    Comment: {{$consult->comment}}
                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="text-left mx-3 py-2 mt-3">
                                                    <button type="button" class="btn" data-bs-toggle="modal"
                                                            style="background-color: #4ec490; color: white; border: 1px solid #4ec490; width: 30%; border-radius: 8px !important;"
                                                            data-bs-target="#consultmodal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30.751" height="29.429"
                                                             viewBox="0 0 30.751 29.429">
                                                            <g id="Group_42" data-name="Group 42" transform="translate(1.5 1.5)">
                                                                <line id="Line_11" data-name="Line 11" y2="26.429"
                                                                      transform="translate(13.876 0)" fill="none" stroke="#fff"
                                                                      stroke-linecap="round" stroke-width="3" />
                                                                <line id="Line_12" data-name="Line 12" x1="27.751"
                                                                      transform="translate(0 12.437)" fill="none" stroke="#fff"
                                                                      stroke-linecap="round" stroke-width="3" />
                                                            </g>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="modal fade" id="consultmodal" tabindex="-1"
                                                     aria-labelledby="exampleModalLabel" style="top: 7% !important;" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content p-3" style="border-radius: 43px !important;">
                                                            <div class="modal-header" style="border-bottom: 0 !important;">
                                                                <h5 class="modal-title mx-2"
                                                                    style="font-family: 'Montserrat' !important;"
                                                                    id="exampleModalLabel"><b>Add
                                                                        Consultation</b></h5>
                                                                <button type="button" style="opacity: 1 !important;" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="" action="{{route('addPersonalAppointment')}}"
                                                                      method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="apporconId" value="2">
                                                                    <div class="px-2">
                                                                        <label
                                                                            style="font-family: 'Montserrat' !important;">Title</label>
                                                                        <input type="text"
                                                                               style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important;"
                                                                               name="title" class="form-control mb-3" required>
                                                                        <label style="font-family: 'Montserrat' !important;"><b>Date</b></label>
                                                                        <input type="date"
                                                                               style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                                                               name="date" class="form-control mb-3" required>
                                                                        <label
                                                                            style="font-family: 'Montserrat' !important;">Time</label>
                                                                        <input type="time"
                                                                               style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important;"
                                                                               name="time" class="form-control mb-3" required>
                                                                        <label
                                                                            style="font-family: 'Montserrat' !important;">Address</label>
                                                                        <input type="text"
                                                                               style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important;"
                                                                               name="address" class="form-control mb-3" required>
                                                                        <label
                                                                            style="font-family: 'Montserrat' !important;">Comment</label>
                                                                        <textarea type="text" name="comment"
                                                                                  style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important;"
                                                                                  class="form-control mb-3" required></textarea>
                                                                    </div>

                                                                    <div class="modal-footer px-1"
                                                                         style="border-top: 0 !important; justify-content: flex-start !important;">
                                                                        <div class="row" style="width: 100%;">
                                                                            <div class="col-md-4 col-5 p-0">
                                                                                <div style="padding: 2%;">
                                                                                    <input type="submit"
                                                                                           style="font-family: 'Montserrat' !important; width: 100%; border: 1px solid #4EC590; font-weight: 600 !important; font-size: 18px !important; background-color: #4EC590; color: #fff; border-radius: 8px;"
                                                                                           class="btn py-2" value="Save">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4 col-5 p-0">
                                                                                <div style="padding: 2%;">
                                                                                    <button type="button" class="btn py-2"
                                                                                            style="font-family: 'Montserrat' !important; width: 100%; font-weight: 600 !important; border: 1px solid #6C757D; font-size: 18px !important; background-color: #6C757D; color: #fff; border-radius: 8px;"
                                                                                            data-bs-dismiss="modal">Close
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="text-center py-2">--}}
                                                {{-- <a href="{{route('insertPersonalAppointmant',2)}}" --}} {{--
                                        class="btn btn-light">--}}
                                                {{-- +--}}
                                                {{-- </a>--}}
                                                {{-- </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 g-0 mb-3">
                            <div class="personal-apponitments-div pb-2">
                                <div class="accordion accordion-flush mx-3 " id="accordionFlush1">
                                    <div class="accordion-item my-1 mb-3 py-2" style="background-color: #F7F7F7;">
                                        <h2 class="accordion-header" id="flush-heading1">
                                            <div class="p-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5><b>Personal Apponitments</b></h5>
                                                    </div>
                                                    <div style="color: #0a53be" class="col-3 text-end">
                                                        <h5><b>{{$countpersonalApp}}</b></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="flush-collapse1" class="accordion-collapse collapse show"
                                             aria-labelledby="flush-heading1" data-bs-parent="#accordionFlush1">

                                            <div class="accordion-body p-0 mx-2 py-2 overflow-div1"
                                                 style="background-color: #F7F7F7; font-family: 'Montserrat'; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; height: 170px; overflow-y: scroll !important; overflow-x: hidden !important;">
                                                @foreach($personalApp as $perApp)
                                                    <div class="py-2 my-2 mx-2"
                                                         style="background-color: #fff; border-radius: 15px; color: #000;">
                                                        <div class="mx-3 ">
                                                            <div class="row">
                                                                <div class="col">
                                                <span class="fw-bold fs-5" style="font-family: 'Montserrat';">
                                                    {{$perApp->title}}
                                                </span>
                                                                </div>
                                                                <div class="col-1 text-end">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="5" height="13"
                                                                         viewBox="0 0 5 13">
                                                                        <g id="Group_528" data-name="Group 528"
                                                                           transform="translate(-0.239 0)">
                                                                            <circle id="Ellipse_6" data-name="Ellipse 6" cx="2.5" cy="2.5"
                                                                                    r="2.5" transform="translate(0.239 0)" fill="#000" />
                                                                            <circle id="Ellipse_7" data-name="Ellipse 7" cx="2.5" cy="2.5"
                                                                                    r="2.5" transform="translate(0.239 8)" fill="#000" />
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                            <span style="font-family: 'Montserrat';">
                                                Address: {{$perApp->address}}
                                            </span>
                                                            </div>
                                                            <div class="">
                                            <span style="font-family: 'Montserrat';">
                                                Date: {{$perApp->date}}
                                            </span>
                                                            </div>
                                                            <div class="">
                                            <span style="font-family: 'Montserrat';">
                                                Time: {{$perApp->time}}
                                            </span>
                                                            </div>
                                                            <div class="">
                                            <span style="font-family: 'Montserrat';">
                                                Comment: {{$perApp->comment}}
                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                            <div class="text-left mx-3 py-2 mt-3">
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                                        style="background-color: #4ec490; color: white; border: 1px solid #4ec490; width: 30%; border-radius: 8px !important;"
                                                        data-bs-target="#exampleModal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30.751" height="29.429"
                                                         viewBox="0 0 30.751 29.429">
                                                        <g id="Group_42" data-name="Group 42" transform="translate(1.5 1.5)">
                                                            <line id="Line_11" data-name="Line 11" y2="26.429"
                                                                  transform="translate(13.876 0)" fill="none" stroke="#fff"
                                                                  stroke-linecap="round" stroke-width="3" />
                                                            <line id="Line_12" data-name="Line 12" x1="27.751"
                                                                  transform="translate(0 12.437)" fill="none" stroke="#fff"
                                                                  stroke-linecap="round" stroke-width="3" />
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                 aria-hidden="true" style="top: 7% !important;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content p-3" style="border-radius: 43px !important;">
                                                        <div class="modal-header" style="border-bottom: 0 !important;">
                                                            <h5 class="modal-title mx-2" id="exampleModalLabel"
                                                                style="font-family: 'Montserrat';"><b>Add Personal Appointment</b></h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="" action="{{route('addPersonalAppointment')}}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="apporconId" value="1">
                                                                <div class="px-2">
                                                                    <label style="font-family: 'Montserrat';"><b>Title</b></label>
                                                                    <input type="text"
                                                                           style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                                                           name="title" class="form-control mb-3" required>
                                                                    <label style="font-family: 'Montserrat' !important;"><b>Date</b></label>
                                                                    <input type="date"
                                                                           style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                                                           name="date" class="form-control mb-3" required>
                                                                    <label style="font-family: 'Montserrat';"><b>Time</b></label>
                                                                    <input type="time"
                                                                           style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                                                           name="time" class="form-control mb-3" required>
                                                                    <label style="font-family: 'Montserrat';"><b>Address</b></label>
                                                                    <input type="text"
                                                                           style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                                                           name="address" class="form-control mb-3" required>
                                                                    <label style="font-family: 'Montserrat';"><b>Comment</b></label>
                                                                    <textarea type="text"
                                                                              style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                                                              name="comment" class="form-control mb-3" required></textarea>
                                                                </div>

                                                                <div class="modal-footer px-1"
                                                                     style="border-top: 0 !important; justify-content: flex-start !important;">
                                                                    <div class="row" style="width: 100%;">
                                                                        <div class="col-md-4 col-5 p-0">
                                                                            <div style="padding: 2%;">
                                                                                <input type="submit"
                                                                                       style="font-family: 'Montserrat' !important; width: 100%; border: 1px solid #4EC590; font-weight: 600 !important; font-size: 18px !important; background-color: #4EC590; color: #fff; border-radius: 8px;"
                                                                                       class="btn py-2" value="Save">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-5 p-0">
                                                                            <div style="padding: 2%;">
                                                                                <button type="button" class="btn py-2"
                                                                                        data-bs-dismiss="modal"
                                                                                        style="font-family: 'Montserrat' !important; width: 100%; font-weight: 600 !important; border: 1px solid #6C757D; font-size: 18px !important; background-color: #6C757D; color: #fff; border-radius: 8px;">Close
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="my-3">
                            <div class="row mx-2">
                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center"
                                         style="background-color: #8A8BF9; border-radius: 18px;  margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="pt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#fff"
                                                 class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                <path fill-rule="evenodd"
                                                      d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                            </svg>
                                        </div>
                                        <div class="py-2">
                            <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">
                                {{$leadscount}}
                            </span>
                                            <br>
                                            <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">
                                New Leads
                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center"
                                         style="background-color: #F88DC4; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="pt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#fff"
                                                 class="bi bi-bell-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                            </svg>
                                        </div>
                                        <div class="py-2">
                            <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">
{{$offen}}
                            </span>
                                            <br>
                                            <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">
                                Open Tasks
                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center"
                                         style="background-color: #4EC590; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="pt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#fff"
                                                 class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                        </div>
                                        <div class="py-2">
                            <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">
                                {{$pendingcnt}}
                            </span>
                                            <br>
                                            <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">
                                Pendencies
                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center"
                                         style="background-color: #4e5ec5; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="pt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#fff"
                                                 class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                        </div>
                                        <div class="py-2">
                            <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">
                                {{$todayAppointCount}}
                            </span>
                                            <br>
                                            <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">
                                Today App
                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center"
                                         style="background-color: #c7cb81; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="pt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#fff"
                                                 class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                        </div>
                                        <div class="py-2">
                            <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">
                                0
                            </span>
                                            <br>
                                            <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">
                                HR Comm
                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center box-1 "
                                         style="margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="py-4 ">
                                            <div class="py-2">
                                                <svg id="Group_549" data-name="Group 549" xmlns="http://www.w3.org/2000/svg"
                                                     width="29.713" height="29.713" viewBox="0 0 29.713 29.713">
                                                    <rect id="Rectangle_9" data-name="Rectangle 9" width="29.713" height="29.713"
                                                          rx="14.857" transform="translate(0)" fill="#4ec590" />
                                                    <g id="Group_42" data-name="Group 42" transform="translate(10.03 10.03)">
                                                        <line id="Line_11" data-name="Line 11" y2="9.437" transform="translate(4.719 0)"
                                                              fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                                                        <line id="Line_12" data-name="Line 12" x1="9.437" transform="translate(0 4.441)"
                                                              fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                                                    </g>
                                                </svg>

                                            </div>
                                            <div class="py-1">
                                <span class="text-muted" style="font-family: 'Montserrat' !important;">
                                    Add New One
                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </section>


            @endif

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                    crossorigin="anonymous">
            </script>
@endsection
<style>
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

    body {
        overflow-x: hidden !important;
    }


</style>
<style>
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
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-div3::-webkit-scrollbar-thumb {
        background: #c9cad8;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-div3::-webkit-scrollbar-thumb:hover {
        background: #707070;
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


    .accordion-button:not(.collapsed) {
        color: #7DBF9A;
        background-color: #fff;
        box-shadow: none;
    }

    .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000000'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") !important;
        /* background-color: transparent !important; */
    }

    .accordion-button:not(.show)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000000'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") !important;
        /* background-color: transparent !important; */
    }

    .accordion-button.green-acc:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000000'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") !important;
        /* background-color: transparent !important; */
    }

    .accordion-button.green-acc:not(.show)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000000'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") !important;
        /* background-color: transparent !important; */
    }

    .accordion-button:focus {
        border-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
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
    .activedate{
        background-color: #4CC590  !important;
        color: #ffffff !important;
    }

</style>
<style scoped>
    .form-control{
        border: transparent !important; font-family: 'Montserrat';
    }
</style>
        <style>
            /*Per Notification */
            .coloriii a{
                color: 	#7F00FF !important;
            }
        </style>
