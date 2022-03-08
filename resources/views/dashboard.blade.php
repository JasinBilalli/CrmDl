@extends('template.navbar')
@section('content')
    <title>Home</title>
    @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('digital'))
        <section>
            <div class="col-12 col-md-12">
{{--                <div class="py-3 mx-3">--}}
{{--                    <div class="text-start">--}}
{{--                            <span class="fw-bolder" style="font-family: 'Montserrat'">--}}
{{--                                ÜBERSICHT--}}
{{--                            </span>--}}
{{--                    </div>--}}

{{--                    <div class="text-muted">--}}
{{--                            <span class="" style="color: #B9B9B9;font-family: 'Montserrat'">--}}
{{--                                Zeitraum 01.09.2021 - 31.09.2021--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" width="18.401" height="7.671"--}}
{{--                                     viewBox="0 0 18.401 7.671">--}}
{{--                                    <path id="Path_273" data-name="Path 273" d="M216.715,2188l8.153,5.874,8.153-5.874"--}}
{{--                                          transform="translate(-215.668 -2186.953)" fill="none" stroke="#b9b9b9"--}}
{{--                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>--}}
{{--                                </svg>--}}
{{--                            </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="py-3 mx-3">
                    <div class="row">
                        <div class="col-md-3 col-6 g-0 px-3 mb-3 "
                             style="font-family: 'Montserrat'">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 303.571 190.391">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_4" data-name="Rectangle 4" width="303.569" height="190.388"
                                              fill="#bdc1cc"/>
                                    </clipPath>
                                    <clipPath id="clip-path-2">
                                        <rect id="Rectangle_5" data-name="Rectangle 5" width="111.429" height="81.913"
                                              fill="#88889b"/>
                                    </clipPath>
                                </defs>
                                <g id="Group_6" data-name="Group 6" transform="translate(0 0.004)">
                                    <g id="Group_5" data-name="Group 5" clip-path="url(#clip-path)">
                                        <path id="Path_274" data-name="Path 274"
                                              d="M282.242,190.39H21.329C9.549,190.39,0,181.3,0,170.077V20.313C0,9.1,9.549,0,21.329,0H282.242c11.78,0,21.329,9.094,21.329,20.311V170.077c0,11.219-9.549,20.313-21.329,20.313"
                                              transform="translate(0 -0.002)" fill="#bdc1cc"/>
                                    </g>
                                </g>
                                <g id="Group_778" data-name="Group 778" transform="translate(-397.019 -143.537)">
                                    <g id="Group_9" data-name="Group 9" transform="translate(589.161 143.537)">
                                        <g id="Group_8" data-name="Group 8" clip-path="url(#clip-path-2)">
                                            <path id="Path_275" onclick="window.location.href='{{route('costumers')}}'"
                                                  style="cursor: pointer;" data-name="Path 275"
                                                  d="M214.01,20.318V76.634c-91.968,21.8-104.334-30.2-104.386-41.938C109.468,0,102.581,0,102.581,0h90.095c11.782,0,21.334,9.1,21.334,20.318"
                                                  transform="translate(-102.581)" fill="#88889b"/>
                                        </g>
                                    </g>
                                    <ellipse id="Ellipse_8" onclick="window.location.href='{{route('costumers')}}'"
                                             style="cursor: pointer;" data-name="Ellipse 8" cx="2.923" cy="2.783"
                                             rx="2.923" ry="2.783" transform="translate(659.672 173.599)" fill="#fff"/>
                                    <ellipse id="Ellipse_9" onclick="window.location.href='{{route('costumers')}}'"
                                             style="cursor: pointer;" data-name="Ellipse 9" cx="2.923" cy="2.783"
                                             rx="2.923" ry="2.783" transform="translate(659.672 182.506)" fill="#fff"/>
                                </g>
                                <text id="_74_" data-name="74%" transform="translate(31.871 94.343)" fill="#fff"
                                      font-size="49" font-family="Montserrat-Bold, Montserrat" font-weight="700">
                                    <tspan x="0" y="0">{{ $counterat['provisionertCount']}}</tspan>
                                </text>
                                <text id="Abschlussquote" transform="translate(31.871 144.225)" fill="#fff"
                                      font-size="23" font-family="Montserrat-SemiBold, Montserrat" font-weight="600">
                                    <tspan x="0" y="0" style="font-size: larger !important;">Provisioniert</tspan>
                                </text>
                            </svg>
                        </div>
                        <div class="col-md-3 col-6 g-0 px-3 mb-3"
                             style="font-family: 'Montserrat'">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 303.571 190.391">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_4" data-name="Rectangle 4" width="303.569" height="190.388"
                                              fill="#4cc590"/>
                                    </clipPath>
                                    <clipPath id="clip-path-2">
                                        <rect id="Rectangle_5" data-name="Rectangle 5" width="111.429" height="81.913"
                                              fill="#49b178"/>
                                    </clipPath>
                                </defs>
                                <g id="Group_779" data-name="Group 779" transform="translate(-749.111 -143.537)">
                                    <g id="Group_6" data-name="Group 6" transform="translate(749.111 143.541)">
                                        <g id="Group_5" data-name="Group 5" clip-path="url(#clip-path)">
                                            <path id="Path_274" data-name="Path 274"
                                                  d="M282.242,190.39H21.329C9.549,190.39,0,181.3,0,170.077V20.313C0,9.1,9.549,0,21.329,0H282.242c11.78,0,21.329,9.094,21.329,20.311V170.077c0,11.219-9.549,20.313-21.329,20.313"
                                                  transform="translate(0 -0.002)" fill="#4cc590"/>
                                        </g>
                                    </g>
                                    <g id="Group_9" data-name="Group 9" transform="translate(941.253 143.537)">
                                        <g id="Group_8" data-name="Group 8" clip-path="url(#clip-path-2)">
                                            <path id="Path_275" onclick="window.location.href='{{route('costumers')}}'"
                                                  style="cursor: pointer;" data-name="Path 275"
                                                  d="M214.01,20.318V76.634c-91.968,21.8-104.334-30.2-104.386-41.938C109.468,0,102.581,0,102.581,0h90.095c11.782,0,21.334,9.1,21.334,20.318"
                                                  transform="translate(-102.581)" fill="#49b178"/>
                                        </g>
                                    </g>
                                    <ellipse id="Ellipse_6" onclick="window.location.href='{{route('costumers')}}'"
                                             style="cursor: pointer;" data-name="Ellipse 6" cx="2.923" cy="2.783"
                                             rx="2.923" ry="2.783" transform="translate(1011.763 173.599)" fill="#fff"/>
                                    <ellipse id="Ellipse_7" onclick="window.location.href='{{route('costumers')}}'"
                                             style="cursor: pointer;" data-name="Ellipse 7" cx="2.923" cy="2.783"
                                             rx="2.923" ry="2.783" transform="translate(1011.763 182.506)" fill="#fff"/>
                                    <text id="_23" data-name="23" transform="translate(780.002 239.881)" fill="#fff"
                                          font-size="51" font-family="Montserrat-Bold, Montserrat" font-weight="700">
                                        <tspan x="0" y="0">{{$counterat['aufgenomenCount']}}</tspan>
                                    </text>
                                    <text id="Aufgenommen" transform="translate(780.002 287.762)" fill="#fff"
                                          font-size="23" font-family="Montserrat-SemiBold, Montserrat"
                                          font-weight="600">
                                        <tspan x="0" y="0" style="font-size: larger !important;">Aufgenommen</tspan>
                                    </text>
                                </g>
                            </svg>
                        </div>
                        <div class="col-md-3 col-6 g-0 px-3 mb-3"
                             style="font-family: 'Montserrat'">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 303.571 190.391">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_4" data-name="Rectangle 4" width="303.569" height="190.388"
                                              fill="#fec278"/>
                                    </clipPath>
                                    <clipPath id="clip-path-2">
                                        <rect id="Rectangle_5" data-name="Rectangle 5" width="111.429" height="81.913"
                                              fill="#edae60"/>
                                    </clipPath>
                                </defs>
                                <g id="Group_782" data-name="Group 782" transform="translate(-1101.207 -143.537)">
                                    <g id="Group_5" data-name="Group 5" transform="translate(1101.207 143.541)"
                                       clip-path="url(#clip-path)">
                                        <path id="Path_274" data-name="Path 274"
                                              d="M282.242,190.39H21.329C9.549,190.39,0,181.3,0,170.077V20.313C0,9.1,9.549,0,21.329,0H282.242c11.78,0,21.329,9.094,21.329,20.311V170.077c0,11.219-9.549,20.313-21.329,20.313"
                                              transform="translate(0 -0.002)" fill="#fec278"/>
                                    </g>
                                    <g id="Group_9" data-name="Group 9" transform="translate(1293.349 143.537)">
                                        <g id="Group_8" data-name="Group 8" clip-path="url(#clip-path-2)">
                                            <path id="Path_275" onclick="window.location.href='{{route('costumers')}}'"
                                                  style="cursor: pointer;" data-name="Path 275"
                                                  d="M214.01,20.318V76.634c-91.968,21.8-104.334-30.2-104.386-41.938C109.468,0,102.581,0,102.581,0h90.095c11.782,0,21.334,9.1,21.334,20.318"
                                                  transform="translate(-102.581)" fill="#edae60"/>
                                        </g>
                                    </g>
                                    <ellipse id="Ellipse_4" onclick="window.location.href='{{route('costumers')}}'"
                                             style="cursor: pointer;" data-name="Ellipse 4" cx="2.711" cy="2.582"
                                             rx="2.711" ry="2.582" transform="translate(1365.642 174.097)" fill="#fff"/>
                                    <text id="_32" data-name="32" transform="translate(1137.893 237.881)" fill="#fff"
                                          font-size="49" font-family="Montserrat-Bold, Montserrat" font-weight="700">
                                        <tspan x="0" y="0">{{$counterat['offenCount']}}</tspan>
                                    </text>
                                    <text id="Aufgenommen" transform="translate(1137.893 287.762)" fill="#fff"
                                          font-size="23" font-family="Montserrat-SemiBold, Montserrat"
                                          font-weight="600">
                                        <tspan x="0" y="0" style="font-size: larger !important;">Ausstehend</tspan>
                                    </text>
                                    <ellipse id="Ellipse_57" onclick="window.location.href='{{route('costumers')}}'"
                                             style="cursor: pointer;" data-name="Ellipse 57" cx="2.711" cy="2.582"
                                             rx="2.711" ry="2.582" transform="translate(1365.642 183.097)" fill="#fff"/>
                                </g>
                            </svg>
                        </div>
                        <div class="col-md-3 col-6 g-0 px-3 mb-3"
                             style="font-family: 'Montserrat'">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 303.571 190.391">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_4" data-name="Rectangle 4" width="303.569" height="190.388"
                                              fill="#ff6262"/>
                                    </clipPath>
                                    <clipPath id="clip-path-2">
                                        <rect id="Rectangle_5" data-name="Rectangle 5" width="111.429" height="81.913"
                                              fill="#fd2f2f"/>
                                    </clipPath>
                                </defs>
                                <g id="Group_6" data-name="Group 6" transform="translate(0 0.004)">
                                    <g id="Group_5" data-name="Group 5" clip-path="url(#clip-path)">
                                        <path id="Path_274" data-name="Path 274"
                                              d="M282.242,190.39H21.329C9.549,190.39,0,181.3,0,170.077V20.313C0,9.1,9.549,0,21.329,0H282.242c11.78,0,21.329,9.094,21.329,20.311V170.077c0,11.219-9.549,20.313-21.329,20.313"
                                              transform="translate(0 -0.002)" fill="#ff6262"/>
                                    </g>
                                </g>
                                <g id="Group_9" data-name="Group 9" transform="translate(192.142)">
                                    <g id="Group_8" data-name="Group 8" clip-path="url(#clip-path-2)">
                                        <path id="Path_275" onclick="window.location.href='{{route('costumers')}}'"
                                              style="cursor: pointer;" data-name="Path 275"
                                              d="M214.01,20.318V76.634c-91.968,21.8-104.334-30.2-104.386-41.938C109.468,0,102.581,0,102.581,0h90.095c11.782,0,21.334,9.1,21.334,20.318"
                                              transform="translate(-102.581)" fill="#fd2f2f"/>
                                    </g>
                                </g>
                                <ellipse id="Ellipse_11" onclick="window.location.href='{{route('costumers')}}'"
                                         style="cursor: pointer;" data-name="Ellipse 11" cx="2.923" cy="2.783"
                                         rx="2.923" ry="2.783" transform="translate(262.653 30.062)" fill="#fff"/>
                                <ellipse id="Ellipse_10" onclick="window.location.href='{{route('costumers')}}'"
                                         style="cursor: pointer;" data-name="Ellipse 10" cx="2.923" cy="2.783"
                                         rx="2.923" ry="2.783" transform="translate(262.653 38.969)" fill="#fff"/>
                                <text id="_74_" data-name="74%" transform="translate(31.565 94.876)" fill="#fff"
                                      font-size="49" font-family="Montserrat-Bold, Montserrat" font-weight="700">
                                    <tspan x="0" y="0">{{round($counterat['familyCount'],2)}}%</tspan>
                                </text>
                                <text id="Abschlussquote" transform="translate(31.565 144.474)" fill="#fff"
                                      font-size="23" font-family="Montserrat-SemiBold, Montserrat" font-weight="600">
                                    <tspan x="0" y="0" style="font-size: larger !important;">Abschlussquote</tspan>
                                </text>
                            </svg>

                        </div>
                    </div>
                </div>

                <div class="section-after-boxes">
                    <div class="row g-0">
                        <div class="d-grid col-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="calendar-div mx-3">
                                <calendar></calendar>
                            </div>
                            <div class="text-center" style="margin-top: -15px">
                                <a href="{{route('insertappointment')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="37" fill="#0C71C3"
                                         class="bi bi-plus-square-fill mb-4" viewBox="0 0 16 16">
                                        <path
                                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="my-1 px-3">
                                <div class="row g-0">
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
                                <div class="row g-0">
                                    <div onclick="window.location.href='{{route('leads')}}'" style="cursor: pointer" class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0 px-3 mb-3"
                                         style="font-family: 'Montserrat';">
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
                                    <div onclick="window.location.href='{{route('tasks')}}'" style="cursor: pointer"  class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0 px-3 mb-3"
                                         style="font-family: 'Montserrat';">
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
                                    <div onclick="window.location.href='{{route('tasks')}}'" style="cursor: pointer" class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0 px-3 mb-3"
                                         style="font-family: 'Montserrat';">
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
                                                @if($pendingcnt != 0)
                                                    <span class="fw-bold fs-5 " style="color: red">
                                                        {{$pendingcnt}}
                                                    </span>
                                                @else
                                                    <span class="fw-bold fs-5 " style="color: white">
                                                        {{$pendingcnt}}
                                                    </span>
                                                @endif
                                                <br>
                                                <span class="fw-bold fs-5 text-white">
                                                        Steht Aus
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div onclick="window.location.href='{{route('Appointments')}}'" style="cursor: pointer" class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0 px-3 mb-3"
                                         style="font-family: 'Montserrat';">
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
{{--                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0 px-3 mb-3"--}}
{{--                                         style="font-family: 'Montserrat';">--}}
{{--                                        <div class="text-center"--}}
{{--                                             style="background-color: #c7cb81; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%; height: 150px;">--}}
{{--                                            <div class="pt-3">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"--}}
{{--                                                     fill="#fff" class="bi bi-exclamation-octagon-fill"--}}
{{--                                                     viewBox="0 0 16 16">--}}
{{--                                                    <path--}}
{{--                                                        d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>--}}
{{--                                                </svg>--}}
{{--                                            </div>--}}
{{--                                            <div class="py-2">--}}
{{--                                                    <span class="fw-bold fs-5 text-white">--}}
{{--                                                        0--}}
{{--                                                    </span>--}}
{{--                                                <br>--}}
{{--                                                <span class="fw-bold fs-5 text-white">--}}
{{--                                                        HR Comm--}}
{{--                                                    </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0 px-3 mb-3"--}}
{{--                                         style="font-family: 'Montserrat';">--}}
{{--                                        <div class="text-center box-1 "--}}
{{--                                             style="margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%; height: 150px;">--}}
{{--                                            <div class="py-4 ">--}}
{{--                                                <div class="py-2">--}}
{{--                                                    <svg id="Group_549" data-name="Group 549"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg" width="29.713"--}}
{{--                                                         height="29.713" viewBox="0 0 29.713 29.713">--}}
{{--                                                        <rect id="Rectangle_9" data-name="Rectangle 9"--}}
{{--                                                              width="29.713" height="29.713" rx="14.857"--}}
{{--                                                              transform="translate(0)" fill="#4ec590"/>--}}
{{--                                                        <g id="Group_42" data-name="Group 42"--}}
{{--                                                           transform="translate(10.03 10.03)">--}}
{{--                                                            <line id="Line_11" data-name="Line 11" y2="9.437"--}}
{{--                                                                  transform="translate(4.719 0)" fill="none"--}}
{{--                                                                  stroke="#fff" stroke-linecap="round"--}}
{{--                                                                  stroke-width="2"/>--}}
{{--                                                            <line id="Line_12" data-name="Line 12" x1="9.437"--}}
{{--                                                                  transform="translate(0 4.441)" fill="none"--}}
{{--                                                                  stroke="#fff" stroke-linecap="round"--}}
{{--                                                                  stroke-width="2"/>--}}
{{--                                                        </g>--}}
{{--                                                    </svg>--}}

{{--                                                </div>--}}
{{--                                                <div class="py-1">--}}
{{--                                                        <span class="text-muted">--}}
{{--                                                            Neues hinzufügen--}}
{{--                                                        </span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
        <div class="row g-0" id="app">

            <todo></todo>

            <div class="row g-0 p-0 m-0">
                <div class="col-12 col-md-12 col-lg-6 g-0">
                    <div class="answered-pendencies">
                        <div class="header px-3 px-sm-3">
                            <div class="">
                                <span>Beantwortete Pendenzen</span>
                            </div>
                        </div>
                        <div class="content pt-2">
                            <div class="overflow-div mx-3 mt-4">
                                @if(!empty($pendencies))
                                    @foreach($pendencies as $pendency)
                                        @php
                                            $crypt = $pendency->family_id * 1244;
                                            $familyId = \Illuminate\Support\Facades\Crypt::encrypt($crypt);
                                            $admin_id = \Illuminate\Support\Facades\Crypt::encrypt($pendency->admin_id * 1244);
                                            $pend_id = $pendency->pid;
                                        @endphp
                                        <a style="text-decoration: none;color: black"
                                           href="{{route('leadfamilyperson',[$familyId,$admin_id,'pend_id' => $pend_id])}}">
                                            <div class="py-2 d-flex answer-item my-2 px-2 px-sm-3">
                                                <div class="col my-auto">
                                                    <div class="">
                                                        <span
                                                            class="fw-600">{{$pendency->first_name}} {{$pendency->last_name}}</span>
                                                    </div>
                                                </div>
                                                <div class="col-auto d-flex align-items-center">
                                                    <div class="btn ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                             fill="#CCCCCC"
                                                             class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                            <path
                                                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                        </svg>
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
                <div class="col-12 col-md-12 col-lg-6 g-0">
                    <div class="open-for-month">
                        <div class="header px-3 px-sm-3">
                            <div class="">
                                <span>Seit mehr als einem Monat offen</span>
                            </div>
                        </div>
                        <div class="content pt-2">
                            <div class="overflow-div mx-3 mt-4">
                                @if(!empty($morethan30))
                                    @foreach($morethan30 as $pendency)
                                        @php
                                            $crypt = $pendency->family_id * 1244;
                                            $familyId = \Illuminate\Support\Facades\Crypt::encrypt($crypt);
                                            $admin_id = \Illuminate\Support\Facades\Crypt::encrypt($pendency->admin_id * 1244);
                                            $pend_id = $pendency->pid;
                                        @endphp
                                        <a style="text-decoration: none; color: black"
                                           href="{{route('leadfamilyperson',[$familyId,$admin_id,'pend_id' => $pend_id])}}">
                                            <div class="py-2 d-flex open-month-items my-2 px-2 px-sm-3">
                                                <div class="col my-auto">
                                                    <div class="">
                                                        <span
                                                            class="fw-600">{{$pendency->first_name}} {{$pendency->last_name}}</span>
                                                    </div>
                                                </div>
                                                <div class="col-auto d-flex align-items-center">
                                                    <div class="btn ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="#000"
                                                             class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                            <path
                                                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                        </svg>
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
                <div class="col-12 col-md-12 col-lg-12 g-0">
                    <div class="personal-appointments">
                        <div class="header px-3 px-sm-3 justify-content-between">
                            <div class="">
                                <span>Private Termine</span>
                            </div>
                            <div class="">
                                <span>{{$countpersonalApp}}</span>
                            </div>
                        </div>
                        <div class="content pt-2">
                            <div class="overflow-div mx-3 mt-4 row">
                                @foreach($personalApp as $perApp)
                                    <div class="col-12 col-sm-12 col-md-6 g-0">
                                        <div class="py-2 d-flex personal-app-items m-2 px-2 px-sm-3">
                                            <div class="col my-auto">
                                                <div class="">
                                                    <span class="fw-600">{{$perApp->title}}</span>
                                                </div>
                                                <div class="">
                                                    <span class="fw-400">Adresse: {{$perApp->address}}</span>
                                                </div>
                                                <div class="">
                                                    <span class="fw-400">Datum: {{$perApp->date}}</span>
                                                </div>
                                                <div class="">
                                                    <span class="fw-400">Zeit: {{$perApp->time}}</span>
                                                </div>
                                                <div class="">
                                                    <span class="fw-400">Kommentar: {{$perApp->comment}}</span>
                                                </div>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <div class="btn ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="#000"
                                                         class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="button-div mt-2">
                                <div class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="90"
                                         viewBox="0 0 105 71">
                                        <g id="Group_1170" data-name="Group 1170" transform="translate(-434 -2907)">
                                            <rect id="Rectangle_977" data-name="Rectangle 977" width="105" height="71"
                                                  rx="8" transform="translate(434 2907)" fill="#0c71c3"/>
                                            <path id="Path_2005" data-name="Path 2005" d="M541.911,1942.5h27.942"
                                                  transform="translate(-69.382 1000)" fill="none" stroke="#fff"
                                                  stroke-linecap="round" stroke-width="3"/>
                                            <path id="Path_2006" data-name="Path 2006" d="M0,0H27.942"
                                                  transform="translate(486.5 2928.529) rotate(90)" fill="none"
                                                  stroke="#fff" stroke-linecap="round" stroke-width="3"/>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--        Modali--}}
                <div class="modal fade" style="top: 1% !important;" id="exampleModal" tabindex="-1"
                     aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content p-3" style="border-radius: 43px !important;">
                            <div class="modal-header" style="border-bottom: 0 !important;">
                                <h5 class="modal-title mx-2" id="exampleModalLabel"
                                    style="font-family: 'Montserrat' !important;"><b>Privaten Termin hinzufügen</b></h5>
                                <button type="button" class="btn-close" style="opacity: 1 !important;"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="" action="{{route('addPersonalAppointment')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="apporconId" value="1">
                                    <div class="px-2">
                                        <label style="font-family: 'Montserrat' !important;"><b>Titel</b></label>
                                        <input type="text"
                                               style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                               name="title" class="form-control mb-3" required>
                                        <label style="font-family: 'Montserrat' !important;"><b>Datum</b></label>
                                        <input type="date"
                                               style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                               name="date" class="form-control mb-3" required>
                                        <label style="font-family: 'Montserrat' !important;"><b>Zeit</b></label>
                                        <input type="time"
                                               style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                               name="time" class="form-control mb-3" required>
                                        <label style="font-family: 'Montserrat' !important;"><b>Adress</b></label>
                                        <input type="text"
                                               style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                               name="address" class="form-control mb-3" required>
                                        <label style="font-family: 'Montserrat' !important;"><b>Kommentar</b></label>
                                        <textarea type="text"
                                                  style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                                  rows="3" name="comment" class="form-control mb-3"
                                                  required>
                                                    </textarea>
                                        <label style="font-family: 'Montserrat' !important;"><b>Zuweisen</b></label>

                                        <select class="form-select mb-2"
                                                style="font-family: 'Montserrat' !important;border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important;"
                                                name="roleid">
                                            @if(!Auth::guard('admins')->user()->hasRole('backoffice'))
                                                @foreach($admins as $admin)

                                                    <option value="{{$admin->id}}">{{$admin->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>

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
                                                            style="font-family: 'Montserrat' !important; width: 100%; font-weight: 600 !important; border: 1px solid #6C757D; font-size: 18px !important; background-color: #6C757D; color: #fff; border-radius: 8px;">
                                                        Schliessen
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
                {{--End--}}

            @endif
            @endif
            @if(Auth::guard('admins')->user()->hasRole('salesmanager'))
                <div class="modal fade" id="finstatus" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background: #f8f8f8; border-radius: 43px">
                            <div class="modal-header mx-3 pt-4" style="border-bottom: none !important;">
                                <h4>Status</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        style="opacity: 1 !important;"></button>
                            </div>
                            <div class="modal-body p-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="text-center my-1 fw-bold"
                                             style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                            {{$zuruckCount}}
                                            <br>
                                            Zuruckgezogen
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center my-1 fw-bold"
                                             style="padding: 15px;background-color: #eeeeee; border-radius: 15px">
                                            {{$abgCount}}
                                            <br>
                                            Abgelehnt
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <div class="text-center my-1 fw-bold"
                                             style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                            {{$offenCount}}
                                            <br>
                                            Offen
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center my-1 fw-bold"
                                             style="padding: 15px;background-color: #eeeeee; border-radius: 15px">
                                            {{$aufgenomenCount}}
                                            <br>
                                            Aufgenomen
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12">
                                        <div class="text-center fw-bold"
                                             style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                            {{$provisionertCount}}
                                            <br>
                                            Provisionert
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="border-top: none !important; display: block;">
                                <div class="row mx-4 pb-4">
                                    <div class="col mx-auto">
                                        <button type="button" class="btn w-100 px-3"
                                                style=" color: #ffffff !important; background-color: #6C757D !important;border-radius: 8px !important;"
                                                data-bs-dismiss="modal"><b>Schliessen</b></button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <section class="my-5">
                    <div class="statistics ">
                        <div class="mx-4 py-3" style="background-color: #f7f7f7; border-radius: 15px;">
                            <div class="header mx-4 py-3">
                                <span class="fs-5 fw-bold">Statistics</span>
                            </div>
                            <div class="content mx-4">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="my-1 text-start ">
                                            <button class="border-0 w-100 py-2 fw-bold text-start" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#finstatus"
                                                    style="background-color: #fff; color: #434343; border-radius: 8px;">
                                                    <span class="px-3">
                                                        <svg id="Group_1037" data-name="Group 1037"
                                                             xmlns="http://www.w3.org/2000/svg" width="40"
                                                             viewBox="0 0 52.853 52.855">
                                                        <path id="Path_1944" data-name="Path 1944"
                                                              d="M71.791,11.473H48.807A1.425,1.425,0,0,0,47.384,12.9V35.88A1.425,1.425,0,0,0,48.807,37.3H71.791a1.425,1.425,0,0,0,1.423-1.423V12.9a1.425,1.425,0,0,0-1.423-1.423M70.368,34.457H50.232V14.321H70.368Z"
                                                              transform="translate(-20.36 15.553)"/>
                                                        <path id="Path_1945" data-name="Path 1945"
                                                              d="M60.319,11.8A1.425,1.425,0,0,0,58.9,13.22v9.764H38.758V2.848h19.3a1.424,1.424,0,0,0,0-2.848H37.335a1.425,1.425,0,0,0-1.423,1.423V24.407a1.425,1.425,0,0,0,1.423,1.425H60.319a1.425,1.425,0,0,0,1.423-1.425V13.22A1.425,1.425,0,0,0,60.319,11.8"
                                                              transform="translate(-35.912)"/>
                                                        <path id="Path_1946" data-name="Path 1946"
                                                              d="M59.747,1.91a1.42,1.42,0,0,0-2,.071L45.9,13.228,40.431,8.022v0a1.423,1.423,0,0,0-2.4,1.069,1.408,1.408,0,0,0,.441.994l6.509,6.193A1.446,1.446,0,0,0,46,16.665h0a1.42,1.42,0,0,0,.989-.445l12.838-12.3a1.42,1.42,0,0,0-.085-2.009"
                                                              transform="translate(-33.044 2.079)"/>
                                                        <path id="Path_1947" data-name="Path 1947"
                                                              d="M49.567,28.079a1.421,1.421,0,0,0,.429,1,1.46,1.46,0,0,0,2.014-.024l5.383-5.515,5.383,5.512a1.423,1.423,0,1,0,2.038-1.986L59.381,21.5l5.43-5.564a1.4,1.4,0,0,0,.408-1.011,1.413,1.413,0,0,0-.429-1,1.429,1.429,0,0,0-2.014.026l-5.383,5.517L52.01,13.95a1.423,1.423,0,0,0-2.443.978,1.409,1.409,0,0,0,.405,1.011L55.4,21.5l-5.432,5.566a1.409,1.409,0,0,0-.405,1.011"
                                                              transform="translate(-17.401 18.331)"/>
                                                        <path id="Path_1948" data-name="Path 1948"
                                                              d="M49.83,17.954a1.414,1.414,0,0,0-.973-.5,1.462,1.462,0,0,0-1.034.332,1.427,1.427,0,0,0-.167,2.007L50.6,23.276c-4.071-.271-7.2-1.395-9.064-3.26a6.155,6.155,0,0,1-1.941-4.092,1.429,1.429,0,0,0-1.4-1.449h0a1.444,1.444,0,0,0-1.446,1.392,8.987,8.987,0,0,0,2.716,6.1c2.457,2.5,6.3,3.9,11.422,4.158l-3.232,3.826a1.423,1.423,0,0,0,2.174,1.837l5.072-6a1.414,1.414,0,0,0,0-1.837Z"
                                                              transform="translate(-34.778 19.623)"/>
                                                        <path id="Path_1949" data-name="Path 1949"
                                                              d="M54.7,14.346a1.463,1.463,0,0,0,2,.17,1.424,1.424,0,0,0,.167-2.007L53.918,9.015c4.061.257,7.187,1.38,9.074,3.27a6.246,6.246,0,0,1,1.941,4.092,1.424,1.424,0,0,0,2.848.057,9,9,0,0,0-2.716-6.1c-2.464-2.5-6.306-3.9-11.422-4.165l3.232-3.818a1.424,1.424,0,0,0-.167-2A1.419,1.419,0,0,0,54.7.509l-5.074,6a1.414,1.414,0,0,0,0,1.837Z"
                                                              transform="translate(-17.781 0.002)"/>
                                                    </svg></span>
                                                Status
                                            </button>
                                        </div>
                                    </div>
{{--                                    <div class="col-12 col-md-4">--}}
{{--                                        <div class="my-1 text-start">--}}
{{--                                            <button class="border-0 w-100 py-2 fw-bold text-start"--}}
{{--                                                    style="background-color: #fff; color: #434343; border-radius: 8px;">--}}
{{--                                                <span class="px-3"><svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                                        width="40"--}}
{{--                                                                        viewBox="0 0 53.428 53.428">--}}
{{--                                                                      <g id="Group_1038" data-name="Group 1038" transform="translate(-1191.744 -529.001)">--}}
{{--                                                                        <path id="Path_1950" data-name="Path 1950"--}}
{{--                                                                              d="M94.4,50.088a23.374,23.374,0,1,1,23.374-23.374A23.373,23.373,0,0,1,94.4,50.088m0,3.34A26.714,26.714,0,1,0,67.683,26.714,26.713,26.713,0,0,0,94.4,53.428"--}}
{{--                                                                              transform="translate(1124.061 529.001)"/>--}}
{{--                                                                        <path id="Path_1951" data-name="Path 1951"--}}
{{--                                                                              d="M90.478,41.162A18.366,18.366,0,1,1,108.843,22.8,18.364,18.364,0,0,1,90.478,41.162m0,1.67A20.036,20.036,0,1,0,70.443,22.8,20.034,20.034,0,0,0,90.478,42.832"--}}
{{--                                                                              transform="translate(1127.98 532.92)"/>--}}
{{--                                                                        <path id="Path_1952" data-name="Path 1952"--}}
{{--                                                                              d="M73.472,13.293a4.345,4.345,0,0,1,4.62-4.37A4.444,4.444,0,0,1,81.7,10.508l-1.51,1.367a2.5,2.5,0,0,0-1.982-.983,2.253,2.253,0,0,0-2.34,2.4,2.253,2.253,0,0,0,2.34,2.4,2.492,2.492,0,0,0,1.982-.987l1.51,1.372a4.444,4.444,0,0,1-3.613,1.585,4.346,4.346,0,0,1-4.62-4.37"--}}
{{--                                                                              transform="translate(1132.28 541.671)"/>--}}
{{--                                                                        <path id="Path_1953" data-name="Path 1953"--}}
{{--                                                                              d="M85.3,8.993v8.4H82.923V14.118h-3.24v3.277H77.306v-8.4h2.376v3.156h3.24V8.993Z"--}}
{{--                                                                              transform="translate(1137.725 541.771)"/>--}}
{{--                                                                        <path id="Path_1954" data-name="Path 1954" d="M83.676,10.829v1.849h3.71v1.837h-3.71v2.88H81.3v-8.4h6.59v1.837Z"--}}
{{--                                                                              transform="translate(1143.395 541.77)"/>--}}
{{--                                                                      </g>--}}
{{--                                                                    </svg></span>--}}
{{--                                                Finanzen--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12 col-md-4">--}}
{{--                                        <div class="my-1">--}}
{{--                                            <button class="border-0 w-100 py-2 fw-bold text-start "--}}
{{--                                                    style="background-color: #fff; color: #434343; border-radius: 8px;">--}}
{{--                                                <span class="px-3">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35.152"--}}
{{--                                                         viewBox="0 0 46.152 52.855">--}}
{{--  <g id="Group_1041" data-name="Group 1041" transform="translate(-916 -529.621)">--}}
{{--    <path id="Path_1943" data-name="Path 1943"--}}
{{--          d="M4.421.152h26.9c.047.052.095.107.145.157q7.218,7.233,14.437,14.458a.743.743,0,0,1,.247.583q-.011,13.693,0,27.389V48a4.693,4.693,0,0,1-.455,2.113A4.865,4.865,0,0,1,41.029,53q-13,0-26.009,0c-3.377,0-6.755.009-10.132,0A4.892,4.892,0,0,1,.206,49.411c-.092-.325-.14-.662-.206-.994V4.734c.017-.076.038-.152.05-.23A4.836,4.836,0,0,1,3.086.531,9.922,9.922,0,0,1,4.421.152m23.6,3.294h-.334q-10.474,0-20.945,0A3.318,3.318,0,0,0,3.3,6.878q0,19.7,0,39.393a3.869,3.869,0,0,0,.071.776A3.291,3.291,0,0,0,6.681,49.7H39.459a3.277,3.277,0,0,0,2.021-.633,3.381,3.381,0,0,0,1.369-2.9q-.014-13.725,0-27.448v-.4H42.5c-3.154,0-6.309.009-9.461-.012a5.707,5.707,0,0,1-1.613-.249,4.893,4.893,0,0,1-3.406-4.791q-.007-4.717,0-9.435V3.446m3.3,1.779v.221q0,3.088,0,6.174a3.29,3.29,0,0,0,3.4,3.4q3.074.007,6.145,0c.085,0,.171-.007.287-.012L31.317,5.225"--}}
{{--          transform="translate(916 529.469)"/>--}}
{{--    <rect id="Rectangle_898" data-name="Rectangle 898" width="26.319" height="3.275"--}}
{{--          transform="translate(925.912 554.405)"/>--}}
{{--    <rect id="Rectangle_899" data-name="Rectangle 899" width="26.322" height="3.271"--}}
{{--          transform="translate(925.909 567.622)"/>--}}
{{--    <rect id="Rectangle_900" data-name="Rectangle 900" width="26.322" height="3.271"--}}
{{--          transform="translate(925.909 561.015)"/>--}}
{{--    <rect id="Rectangle_901" data-name="Rectangle 901" width="9.848" height="3.275"--}}
{{--          transform="translate(925.916 541.199)"/>--}}
{{--    <rect id="Rectangle_902" data-name="Rectangle 902" width="9.859" height="3.271"--}}
{{--          transform="translate(925.909 547.802)"/>--}}
{{--  </g>--}}
{{--</svg>--}}
{{--                                                </span>--}}

{{--                                                Aussagen--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
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
                                                            <h5><b>Mitarbeiterbesprechungen</b></h5>
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
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="5" height="13"
                                                                             viewBox="0 0 5 13">
                                                                            <g id="Group_528" data-name="Group 528"
                                                                               transform="translate(-0.239 0)">
                                                                                <circle id="Ellipse_6"
                                                                                        data-name="Ellipse 6" cx="2.5"
                                                                                        cy="2.5" r="2.5"
                                                                                        transform="translate(0.239 0)"
                                                                                        fill="#000"/>
                                                                                <circle id="Ellipse_7"
                                                                                        data-name="Ellipse 7" cx="2.5"
                                                                                        cy="2.5" r="2.5"
                                                                                        transform="translate(0.239 8)"
                                                                                        fill="#000"/>
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
                                                                        Datum: {{$consult->date}}
                                                                    </span>
                                                                </div>
                                                                <div class="">
                                                                    <span style="font-family: 'Montserrat';">
                                                                        Zeit: {{$consult->time}}
                                                                    </span>
                                                                </div>
                                                                <div class="">
                                                <span style="font-family: 'Montserrat';">
                                                    Kommentar: {{$consult->comment}}
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30.751"
                                                             height="29.429"
                                                             viewBox="0 0 30.751 29.429">
                                                            <g id="Group_42" data-name="Group 42"
                                                               transform="translate(1.5 1.5)">
                                                                <line id="Line_11" data-name="Line 11" y2="26.429"
                                                                      transform="translate(13.876 0)" fill="none"
                                                                      stroke="#fff"
                                                                      stroke-linecap="round" stroke-width="3"/>
                                                                <line id="Line_12" data-name="Line 12" x1="27.751"
                                                                      transform="translate(0 12.437)" fill="none"
                                                                      stroke="#fff"
                                                                      stroke-linecap="round" stroke-width="3"/>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="modal fade" id="consultmodal" tabindex="-1"
                                                     aria-labelledby="exampleModalLabel" style="top: 7% !important;"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content p-3"
                                                             style="border-radius: 43px !important;">
                                                            <div class="modal-header"
                                                                 style="border-bottom: 0 !important;">
                                                                <h5 class="modal-title mx-2"
                                                                    style="font-family: 'Montserrat' !important;"
                                                                    id="exampleModalLabel"><b>Beratung Hinzufügen</b>
                                                                </h5>
                                                                <button type="button" style="opacity: 1 !important;"
                                                                        class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class=""
                                                                      action="{{route('addPersonalAppointment')}}"
                                                                      method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="apporconId" value="2">
                                                                    <div class="px-2">
                                                                        <label
                                                                            style="font-family: 'Montserrat' !important;">Titel</label>
                                                                        <input type="text"
                                                                               style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important;"
                                                                               name="title" class="form-control mb-3"
                                                                               required>
                                                                        <label
                                                                            style="font-family: 'Montserrat' !important;">Datum</label>
                                                                        <input type="date"
                                                                               style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                                                               name="date" class="form-control mb-3"
                                                                               required>
                                                                        <label
                                                                            style="font-family: 'Montserrat' !important;">Zeit</label>
                                                                        <input type="time"
                                                                               style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important;"
                                                                               name="time" class="form-control mb-3"
                                                                               required>
                                                                        <label
                                                                            style="font-family: 'Montserrat' !important;">Adress</label>
                                                                        <input type="text"
                                                                               style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important;"
                                                                               name="address" class="form-control mb-3"
                                                                               required>
                                                                        <label
                                                                            style="font-family: 'Montserrat' !important;">Kommentar</label>
                                                                        <textarea type="text" name="comment"
                                                                                  style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important;"
                                                                                  class="form-control mb-3"
                                                                                  required></textarea>
                                                                    </div>

                                                                    <div class="modal-footer px-1"
                                                                         style="border-top: 0 !important; justify-content: flex-start !important;">
                                                                        <div class="row" style="width: 100%;">
                                                                            <div class="col-md-4 col-5 p-0">
                                                                                <div style="padding: 2%;">
                                                                                    <button type="button"
                                                                                            class="btn py-2"
                                                                                            style="font-family: 'Montserrat' !important; width: 100%; font-weight: 600 !important; border: 1px solid #6C757D; font-size: 18px !important; background-color: #6C757D; color: #fff; border-radius: 8px;"
                                                                                            data-bs-dismiss="modal">
                                                                                        Schliessen
                                                                                    </button>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4 col-5 p-0">
                                                                                <div style="padding: 2%;">
                                                                                    <input type="submit"
                                                                                           style="font-family: 'Montserrat' !important; width: 100%; border: 1px solid #4EC590; font-weight: 600 !important; font-size: 18px !important; background-color: #4EC590; color: #fff; border-radius: 8px;"
                                                                                           class="btn py-2"
                                                                                           value="Sparen">
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
                                                        <h5><b>Private Termine</b></h5>
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
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="5"
                                                                         height="13"
                                                                         viewBox="0 0 5 13">
                                                                        <g id="Group_528" data-name="Group 528"
                                                                           transform="translate(-0.239 0)">
                                                                            <circle id="Ellipse_6" data-name="Ellipse 6"
                                                                                    cx="2.5" cy="2.5"
                                                                                    r="2.5"
                                                                                    transform="translate(0.239 0)"
                                                                                    fill="#000"/>
                                                                            <circle id="Ellipse_7" data-name="Ellipse 7"
                                                                                    cx="2.5" cy="2.5"
                                                                                    r="2.5"
                                                                                    transform="translate(0.239 8)"
                                                                                    fill="#000"/>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                            <span style="font-family: 'Montserrat';">
                                                Adress: {{$perApp->address}}
                                            </span>
                                                            </div>
                                                            <div class="">
                                            <span style="font-family: 'Montserrat';">
                                                Datum: {{$perApp->date}}
                                            </span>
                                                            </div>
                                                            <div class="">
                                            <span style="font-family: 'Montserrat';">
                                                Zeit: {{$perApp->time}}
                                            </span>
                                                            </div>
                                                            <div class="">
                                            <span style="font-family: 'Montserrat';">
                                                Kommentar: {{$perApp->comment}}
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30.751"
                                                         height="29.429"
                                                         viewBox="0 0 30.751 29.429">
                                                        <g id="Group_42" data-name="Group 42"
                                                           transform="translate(1.5 1.5)">
                                                            <line id="Line_11" data-name="Line 11" y2="26.429"
                                                                  transform="translate(13.876 0)" fill="none"
                                                                  stroke="#fff"
                                                                  stroke-linecap="round" stroke-width="3"/>
                                                            <line id="Line_12" data-name="Line 12" x1="27.751"
                                                                  transform="translate(0 12.437)" fill="none"
                                                                  stroke="#fff"
                                                                  stroke-linecap="round" stroke-width="3"/>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                 aria-labelledby="exampleModalLabel"
                                                 aria-hidden="true" style="top: 7% !important;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content p-3"
                                                         style="border-radius: 43px !important;">
                                                        <div class="modal-header" style="border-bottom: 0 !important;">
                                                            <h5 class="modal-title mx-2" id="exampleModalLabel"
                                                                style="font-family: 'Montserrat';"><b>Private
                                                                    Termin Hinzufügen</b></h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="" action="{{route('addPersonalAppointment')}}"
                                                                  method="post">
                                                                @csrf
                                                                <input type="hidden" name="apporconId" value="1">
                                                                <div class="px-2">
                                                                    <label
                                                                        style="font-family: 'Montserrat';">Titel</label>
                                                                    <input type="text"
                                                                           style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                                                           name="title" class="form-control mb-3"
                                                                           required>
                                                                    <label
                                                                        style="font-family: 'Montserrat' !important;">Datum</label>
                                                                    <input type="date"
                                                                           style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                                                           name="date" class="form-control mb-3"
                                                                           required>
                                                                    <label
                                                                        style="font-family: 'Montserrat';">Zeit</label>
                                                                    <input type="time"
                                                                           style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                                                           name="time" class="form-control mb-3"
                                                                           required>
                                                                    <label
                                                                        style="font-family: 'Montserrat';">Adress</label>
                                                                    <input type="text"
                                                                           style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                                                           name="address" class="form-control mb-3"
                                                                           required>
                                                                    <label
                                                                        style="font-family: 'Montserrat';">Kommentar</label>
                                                                    <textarea type="text"
                                                                              style="border-radius: 8px; background-color: #EFEFEF !important; border: 1px solid #EFEFEF !important; font-family: 'Montserrat';"
                                                                              name="comment" class="form-control mb-3"
                                                                              required></textarea>
                                                                </div>

                                                                <div class="modal-footer px-1"
                                                                     style="border-top: 0 !important; justify-content: flex-start !important;">
                                                                    <div class="row" style="width: 100%;">
                                                                        <div class="col-md-4 col-5 p-0">
                                                                            <div style="padding: 2%;">
                                                                                <button type="button" class="btn py-2"
                                                                                        data-bs-dismiss="modal"
                                                                                        style="font-family: 'Montserrat' !important; width: 100%; font-weight: 600 !important; border: 1px solid #6C757D; font-size: 18px !important; background-color: #6C757D; color: #fff; border-radius: 8px;">
                                                                                    Schliessen
                                                                                </button>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-5 p-0">
                                                                            <div style="padding: 2%;">
                                                                                <input type="submit"
                                                                                       style="font-family: 'Montserrat' !important; width: 100%; border: 1px solid #4EC590; font-weight: 600 !important; font-size: 18px !important; background-color: #4EC590; color: #fff; border-radius: 8px;"
                                                                                       class="btn py-2" value="Sparen">
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
                                <div onclick="window.location.href='{{route('leads')}}'" style="cursor: pointer" class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center"
                                         style="background-color: #8A8BF9; border-radius: 18px;  margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="pt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#fff"
                                                 class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                <path fill-rule="evenodd"
                                                      d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                            </svg>
                                        </div>
                                        <div class="py-2">
                            <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">
                                {{$leadscount}}
                            </span>
                                            <br>
                                            <span class="fw-bold fs-5 text-white"
                                                  style="font-family: 'Montserrat' !important;">
                                Neue Leads
                            </span>
                                        </div>
                                    </div>
                                </div>
{{--                                <div  class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">--}}
{{--                                    <div  class="text-center"--}}
{{--                                         style="background-color: #F88DC4; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">--}}
{{--                                        <div  class="pt-3">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#fff"--}}
{{--                                                 class="bi bi-bell-fill" viewBox="0 0 16 16">--}}
{{--                                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                    <div class="py-2">--}}
{{--                                        <span class="fw-bold fs-5 text-white"--}}
{{--                                              style="font-family: 'Montserrat' !important;">--}}
{{--                                            {{$offen}}--}}
{{--                                        </span>--}}
{{--                                            <br>--}}
{{--                                            <span class="fw-bold fs-5 text-white"--}}
{{--                                                  style="font-family: 'Montserrat' !important;">--}}
{{--                                 Aufgaben öffnen--}}
{{--                            </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div  class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">--}}
{{--                                    <div class="text-center"--}}
{{--                                         style="background-color: #4EC590; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">--}}
{{--                                        <div class="pt-3">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#fff"--}}
{{--                                                 class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">--}}
{{--                                                <path--}}
{{--                                                    d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <div class="py-2">--}}
{{--                            <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">--}}
{{--                                {{$pendingcnt}}--}}
{{--                            </span>--}}
{{--                                            <br>--}}
{{--                                            <span class="fw-bold fs-5 text-white"--}}
{{--                                                  style="font-family: 'Montserrat' !important;">--}}
{{--                                Steht Aus--}}
{{--                            </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div onclick="window.location.href='{{route('Appointments')}}'" style="cursor: pointer" class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center"
                                         style="background-color: #4e5ec5; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="pt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#fff"
                                                 class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                            </svg>
                                        </div>
                                        <div class="py-2">
                                            <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">
                                                {{$todayAppointCount}}
                                            </span>
                                            <br>
                                            <span class="fw-bold fs-5 text-white"
                                                  style="font-family: 'Montserrat' !important;">
                                                Heute Termin
                                            </span>
                                        </div>
                                    </div>
                                </div>

{{--                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">--}}
{{--                                    <div class="text-center"--}}
{{--                                         style="background-color: #c7cb81; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">--}}
{{--                                        <div class="pt-3">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#fff"--}}
{{--                                                 class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">--}}
{{--                                                <path--}}
{{--                                                    d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <div class="py-2">--}}
{{--                                                <span class="fw-bold fs-5 text-white" style="font-family: 'Montserrat' !important;">--}}
{{--                                                    0--}}
{{--                                                </span>--}}
{{--                                            <br>--}}
{{--                                            <span class="fw-bold fs-5 text-white"--}}
{{--                                                  style="font-family: 'Montserrat' !important;">--}}
{{--                                                HR Comm--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">--}}
{{--                                    <div class="text-center box-1 "--}}
{{--                                         style="margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">--}}
{{--                                        <div class="py-4 ">--}}
{{--                                            <div class="py-2">--}}
{{--                                                <svg id="Group_549" data-name="Group 549"--}}
{{--                                                     xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                     width="29.713" height="29.713" viewBox="0 0 29.713 29.713">--}}
{{--                                                    <rect id="Rectangle_9" data-name="Rectangle 9" width="29.713"--}}
{{--                                                          height="29.713"--}}
{{--                                                          rx="14.857" transform="translate(0)" fill="#4ec590"/>--}}
{{--                                                    <g id="Group_42" data-name="Group 42"--}}
{{--                                                       transform="translate(10.03 10.03)">--}}
{{--                                                        <line id="Line_11" data-name="Line 11" y2="9.437"--}}
{{--                                                              transform="translate(4.719 0)"--}}
{{--                                                              fill="none" stroke="#fff" stroke-linecap="round"--}}
{{--                                                              stroke-width="2"/>--}}
{{--                                                        <line id="Line_12" data-name="Line 12" x1="9.437"--}}
{{--                                                              transform="translate(0 4.441)"--}}
{{--                                                              fill="none" stroke="#fff" stroke-linecap="round"--}}
{{--                                                              stroke-width="2"/>--}}
{{--                                                    </g>--}}
{{--                                                </svg>--}}

{{--                                            </div>--}}
{{--                                            <div class="py-1">--}}
{{--                                <span class="text-muted" style="font-family: 'Montserrat' !important;">--}}
{{--                                    Neues hinzufügen--}}
{{--                                </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>

                </section>


                @endif


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

                    .activedate {
                        background-color: #4CC590 !important;
                        color: #ffffff !important;
                    }

                </style>
                <style scoped>
                    .form-control {
                        border: transparent !important;
                        font-family: 'Montserrat';
                    }
                </style>
                <style>
                    /*Per Notification */
                    .coloriii a {
                        color: #7F00FF !important;
                    }
                </style>
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@200;800;900&display=swap');

                    body {
                        font-family: 'Montserrat', sans-serif;
                    }

                    .number-item {
                        background-color: #EFEFEF;
                        border-radius: 8px;
                    }

                    .answer-item {
                        background-color: #EFF8FF;
                        border-radius: 8px;
                    }

                    .open-month-items {
                        background-color: #FFC428;
                        border-radius: 8px;
                    }

                    .personal-app-items {
                        background-color: #fff;
                        border: 1px solid #70707080;
                        border-radius: 8px;
                    }

                    .fw-600 {
                        font-weight: 600;
                    }

                    .add-text {
                        background-color: #0C71C3;
                        border-top-right-radius: 8px;
                        border-bottom-right-radius: 8px;
                        font-weight: 650;
                        color: #fff;
                        display: flex;
                        align-items: center;
                    }


                    /* overflow-scroll divvvvvvvvv */
                    .overflow-div {
                        padding-right: 15px;
                    }

                    .overflow-div::-webkit-scrollbar {
                        width: 7px;
                    }

                    /* Track */
                    .overflow-div::-webkit-scrollbar-track {
                        background: #EFEFEF !important;
                        border-radius: 10px;
                    }

                    /* Handle */
                    .overflow-div::-webkit-scrollbar-thumb {
                        background: #0C71C3;
                        border-radius: 10px;
                    }

                    /* Handle on hover */
                    .overflow-div::-webkit-scrollbar-thumb:hover {
                        background: #0C71C3;
                        border-radius: 10px;
                    }


                    .to-do-div-new {
                    }

                    .to-do-div-new .header {
                        border-bottom: 1px solid #70707050;
                        border-top: 1px solid #70707050;
                        border-left: 1px solid #70707050;
                        display: flex;
                        align-items: center;
                        font-weight: bold;
                        height: 60px;
                        background-color: #D1EBFF;
                    }

                    .to-do-div-new .content {
                        height: 60vh;
                    }

                    .to-do-div-new .content .overflow-div {
                        overflow: auto;
                        height: 50vh;

                    }

                    .to-do-div-new .content .button-div button {
                        background-color: #0C71C3;
                        font-weight: 700;
                        color: #fff;
                        border: none;
                        border-radius: 8px;
                    }

                    .to-do-div-new .content label {
                        font-weight: 500;
                    }

                    .to-do-div-new input {
                        border: solid 1px #707070 !important;
                    }

                    .to-do-div-new textarea {
                        border: solid 1px #707070 !important;
                    }

                    .to-do-div-new select {
                        border: solid 1px #707070 !important;
                    }


                    .informational-numbers {
                    }

                    .informational-numbers .header {
                        border-bottom: 1px solid #70707050;
                        border-top: 1px solid #70707050;
                        border-right: 1px solid #70707050;
                        border-left: 1px solid #70707050;
                        display: flex;
                        align-items: center;
                        font-weight: bold;
                        height: 60px;
                        background-color: #D1EBFF;
                    }

                    .informational-numbers .content {
                        height: 60vh;
                        border-left: 1px solid #70707050;
                    }

                    .informational-numbers .content input {
                        border: solid 1px #707070 !important;
                    }

                    .informational-numbers .content .overflow-div {
                        height: 50vh;
                        overflow: auto;
                    }

                    .informational-numbers .content .overflow-div span {
                        font-size: 18px;
                    }


                    .answered-pendencies {
                    }

                    .answered-pendencies .header {
                        border-bottom: 1px solid #70707050;
                        border-top: 1px solid #70707050;
                        /* border-right: 1px solid #70707050; */
                        border-left: 1px solid #70707050;
                        display: flex;
                        align-items: center;
                        font-weight: bold;
                        height: 60px;
                        background-color: #EFEFEF;
                    }

                    .answered-pendencies .content {
                        height: 60vh;
                    }

                    .answered-pendencies .content .overflow-div {
                        overflow: auto;
                        height: 50vh;
                    }


                    .open-for-month {
                    }

                    .open-for-month .header {
                        border-bottom: 1px solid #70707050;
                        border-top: 1px solid #70707050;
                        border-right: 1px solid #70707050;
                        border-left: 1px solid #70707050;
                        display: flex;
                        align-items: center;
                        font-weight: bold;
                        height: 60px;
                        background-color: #EFEFEF;
                    }

                    .open-for-month .content {
                        height: 60vh;
                        border-left: 1px solid #70707050;

                    }

                    .open-for-month .content .overflow-div {
                        overflow: auto;
                        height: 50vh;
                    }


                    .personal-appointments {
                    }

                    .personal-appointments .header {
                        border-bottom: 1px solid #70707050;
                        border-top: 1px solid #70707050;
                        border-right: 1px solid #70707050;
                        border-left: 1px solid #70707050;
                        display: flex;
                        align-items: center;
                        font-weight: bold;
                        height: 60px;
                        background-color: #EFEFEF;
                    }

                    .personal-appointments .content {
                        height: 45vh;
                    }

                    .personal-appointments .content .overflow-div {
                        height: 27vh;
                        overflow: auto;

                    }

                </style>
