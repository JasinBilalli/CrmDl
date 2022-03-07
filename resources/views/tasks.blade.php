@extends('template.navbar')
@section('content')
    <head>
        <title>
            Tasks
        </title>
        <link rel="icon" type="image/png" href="{{config('app.url')}}imgs/Favicon.png">
    </head>

    <style>
        body {
            overflow-x: hidden;
        }
        .overflow-divvv::-webkit-scrollbar {
            width: 1px !important;
        }
        /* Track */
        .overflow-divvv::-webkit-scrollbar-track {
            background: transparent !important;
            border-radius: 10px !important;
        }
        /* Handle */
        .overflow-divvv::-webkit-scrollbar-thumb {
            background: #c9cad8 !important;
            border-radius: 10px !important;
        }
        /* Handle on hover */
        .overflow-divvv::-webkit-scrollbar-thumb:hover {
            background: #707070 !important;
            border-radius: 10px !important;
        }
        .tab-lookalike2 {
            background-color: #FFEAE4 !important;
            color: #434343 !important;
            border-bottom-left-radius: 0px !important;
            border-bottom-right-radius: 0px !important;
            border-top-left-radius: 5px !important;
            border-top-right-radius: 5px !important;
        }
        .tab-lookalike1 {
            background-color: #F7F7F7 !important;
            color: #434343 !important;
            border-bottom-left-radius: 0px !important;
            border-bottom-right-radius: 0px !important;
            border-top-left-radius: 5px !important;
            border-top-right-radius: 5px !important;
        }
        .tab-lookalike {
            background-color: #F7F7F7 !important;
            color: #FF4000 !important;
            border-bottom-left-radius: 0px !important;
            border-bottom-right-radius: 0px !important;
            border-top-left-radius: 5px !important;
            border-top-right-radius: 5px !important;
        }
        .header-open-task1 {
            background-color: #F7F7F7 !important;
            border-bottom-left-radius: 20px !important;
            border-bottom-right-radius: 20px !important;
            border-top-left-radius: 20px !important;
            border-top-right-radius: 0px !important;
        }
        .header-open-task1-pink {
            background-color: #FFEAE4 !important;
            border-bottom-left-radius: 20px !important;
            border-bottom-right-radius: 20px !important;
            border-top-left-radius: 20px !important;
            border-top-right-radius: 0px;
        }
        .priority-spnn {
            background-color: #ad2b2b !important;
            border-radius: 35px !important;
            color: #fff !important;
        }
        .open-task-box {
            border-radius: 35px !important;
            background-color: #fff;
            border: none !important;
        }
        .pendzen-box {
            border-radius: 35px !important;
            background-color: #EAECF0 !important;
            border: none !important;
        }
        .third-box {
            border-radius: 35px !important;
            background-color: #fff !important;
            border: #707070 1px solid !important;
        }
        .task-box {
            background-color: #F7F7F7 !important;
            border-radius: 12px !important;
        }
        .name-spnnnn {
            font-weight: 600 !important;
        }
        .fw-600 {
            font-weight: 600 !important;
        }
        .spn-muted {
            color: #707070 !important;
            font-weight: 600 !important;
            font-size: 14px !important;
        }
        .spn-normal {
            font-weight: 600;
            font-size: 14px !important;
        }
    </style>
    {{--    mobile tasks--}}

    </style>
    @if(Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin'))
        {{--        mobile--}}
        <section class="mobile-tasks">
            <div class="row g-0">
                <div class="col-12 col-md-6">
                    <div class="offene-div my-3 mx-3">
                        <div class="d-flex justify-content-between">
                            <span class="fw-600 fs-5">Offene Aufgaben</span>
                            <span onclick="secondDivToggleFunct()" class="fw-600 px-4 pb-1 pt-1 fs-5 number-offene"
                                  style="background-color: #F7F7F7; color: #FF4000;">{{count($tasks)}}</span>
                        </div>
                        <div id="firstDivToggle" class="py-5 sjfg" onclick="firstDivToggleFunct()">
                            <div class="text-center">
                            <span class="fs-4 fw-bold" style="color: #BCC1CD;">
                                Drücken um
                                aufzuklappen
                            </span>
                            </div>
                        </div>
                        <div id="secondDivToggle" class="wrapper p-2" style="display: none;">
                            <div class="overflow-divv1">
                                @foreach($tasks as $task)
                                    @php
                                        $leadss = $task->id * 1244;
                                        $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                        $admin_id = Crypt::encrypt(Auth::user()->id * 1244);
                                    @endphp
                                    <a href="{{route('leadfamilyperson',[$taskId,$admin_id])}}">
                                        <div class="offene-item-one py-2 px-3 m-2">

                                            <div class="d-flex justify-content-between">
                                                <div class="name-divs">
                                                    <div class="name fs-5 fw-bold" style="color: #535353;">
                                                        {{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}}
                                                    </div>
                                                    <div class="status fw-bold" style="color: #535353;">
                                                        Status: {{ucfirst($task->status)}}
                                                    </div>
                                                </div>
                                                <div class="svg-divv">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.253" height="15.484"
                                                         viewBox="0 0 6.253 15.484">
                                                        <g id="Group_1178" data-name="Group 1178"
                                                           transform="translate(-1054.727 -165.697)">
                                                            <ellipse id="Ellipse_6" data-name="Ellipse 6" cx="3.127" cy="2.978"
                                                                     rx="3.127" ry="2.978" transform="translate(1054.727 165.697)"
                                                                     fill="#535353" />
                                                            <ellipse id="Ellipse_7" data-name="Ellipse 7" cx="3.127" cy="2.978"
                                                                     rx="3.127" ry="2.978" transform="translate(1054.727 175.225)"
                                                                     fill="#535353" />
                                                        </g>
                                                    </svg>

                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12  col-md-6">
                    <div class="pendzen-div  my-3 mx-3">
                        <div class="d-flex justify-content-between">
                            <span class="fw-600 fs-5">Pendenzen</span>
                            <span onclick="secondDivToggleFunct22()" class="fw-600 px-4 pb-1 pt-1 fs-5 number-offene"
                                  style="background-color: #FF400010; color: #FF4000;">{{count($pending)}}</span>
                        </div>
                        <div id="firstDivToggle22" class="py-5 sjfg1" onclick="firstDivToggleFunct22()">
                            <div class="text-center">
                            <span class="fs-4 fw-bold" style="color: #BCC1CD;">
                                Drücken um
                                aufzuklappen
                            </span>
                            </div>
                        </div>
                        <div id="secondDivToggle22" class="wrapper1 p-2" style="display: none;">
                            <div class="overflow-divv2">
                                @foreach($pending as $task)
                                    @php
                                        $leadss = $task->id * 1244;
                                        $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                        $admin_id = \Illuminate\Support\Facades\Crypt::encrypt($task->admin_id * 1244);
                                        $pend_id = $task->pid;
                                    @endphp
                                    <div class="offene-item-one py-2 px-3 m-2" data-bs-target="#statss{{$task->pid}}"
                                         data-bs-toggle="modal">
                                        <div class="d-flex justify-content-between">
                                            <div class="name-divs">
                                                <div class="name fs-5 fw-bold" style="color: #535353;">
                                                    {{ucfirst($task->first_name)}}  {{ucfirst($task->last_name)}}
                                                </div>
                                                <div class="comment fw-bold" style="color: #535353;">
                                                    Art:
                                                    @if($task->type == "task")
                                                        <span class="submited-btn1 py-1 px-3">
                                                {{ucfirst($task->type)}}
                                                </span>
                                                    @else
                                                        <span class="submited-btn py-1 px-3">Eingereicht</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="svg-divv">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6.253" height="15.484"
                                                     viewBox="0 0 6.253 15.484">
                                                    <g id="Group_1178" data-name="Group 1178"
                                                       transform="translate(-1054.727 -165.697)">
                                                        <ellipse id="Ellipse_6" data-name="Ellipse 6" cx="3.127" cy="2.978"
                                                                 rx="3.127" ry="2.978" transform="translate(1054.727 165.697)"
                                                                 fill="#535353" />
                                                        <ellipse id="Ellipse_7" data-name="Ellipse 7" cx="3.127" cy="2.978"
                                                                 rx="3.127" ry="2.978" transform="translate(1054.727 175.225)"
                                                                 fill="#535353" />
                                                    </g>
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="statss{{$task->pid}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content"
                                                 style="background: #f8f8f8; border-radius: 43px">
                                                <div class="modal-header mx-3 pt-4"
                                                     style="border-bottom: none !important;">
                                                    <h4>Pendenzen Infos</h4>
                                                    <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"
                                                            style="opacity: 1 !important;"></button>
                                                </div>
                                                <div class="modal-body p-3">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="text-center my-1 fw-bold"
                                                                 style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                                                Datum:
                                                                <br>
                                                                {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $task->created_at)->format('Y-m-d')}}
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="text-center my-1 fw-bold"
                                                                 style="padding: 15px;background-color: #eeeeee; border-radius: 15px">
                                                                Zeit:
                                                                <br>
                                                                {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $task->created_at)->format('H:i')}}

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-2">
                                                        <div class="col-6">
                                                            <div class="text-center my-1 fw-bold"
                                                                 style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                                                Kundenname:
                                                                <br>
                                                                {{ucfirst($task->first_name)}}
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="text-center my-1 fw-bold"
                                                                 style="padding: 15px;background-color: #eeeeee; border-radius: 15px">
                                                                Titel
                                                                <br>
                                                                {{$task->title}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-2">
                                                        <div class="col-12">
                                                            <div class="text-center fw-bold"
                                                                 style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                                                Beschreibung:
                                                                <br>
                                                                {{$task->description}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer text-center"
                                                     style="border-top: none !important; display: block;">

                                                    <button type="button" class="btn px-3"
                                                            style=" color: #ffffff !important; background-color: #6C757D !important;border-radius: 8px !important;"
                                                            data-bs-dismiss="modal"><b>Schliessen</b></button>

                                                    <a href="{{route('leadfamilyperson',[$taskId,'admin_id' => $admin_id,'pend_id' => $task->pid])}}">
                                                        <button type="button" class="btn px-3"
                                                                style=" color: #ffffff !important; background-color: #6C757D !important;border-radius: 8px !important;"
                                                                data-bs-dismiss="modal"><b>Offen</b></button>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12  col-md-6">
                    <div class="kundenbirung-div  my-3 ">
                        <div class="d-flex justify-content-between">
                            <span class="fw-600 ps-4 fs-5">Kundenbindung</span>
                            <span class="fw-600 pe-4 pb-1 pt-1 fs-5 number-offene" style="color: #434343;">{{count($birthdays) + count($personalApp)}}</span>
                        </div>
                        <div class="wrapper2 p-2">
                            <div class="overflow-divv1">
                                @foreach($birthdays as $birth)
                                    <div class="offene-item-one22 py-2 px-3 m-2">
                                        <div class="d-flex ">
                                            <div class="my-auto col-auto pe-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" fill="currentColor"
                                                     class="bi bi-balloon" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                          d="M8 9.984C10.403 9.506 12 7.48 12 5a4 4 0 0 0-8 0c0 2.48 1.597 4.506 4 4.984ZM13 5c0 2.837-1.789 5.227-4.52 5.901l.244.487a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.244-.487C4.789 10.227 3 7.837 3 5a5 5 0 0 1 10 0Zm-6.938-.495a2.003 2.003 0 0 1 1.443-1.443C7.773 2.994 8 2.776 8 2.5c0-.276-.226-.504-.498-.459a3.003 3.003 0 0 0-2.46 2.461c-.046.272.182.498.458.498s.494-.227.562-.495Z" />
                                                </svg>
                                            </div>
                                            <div class="name-divs col">
                                                <div class="name fs-5 fw-bold" style="color: #535353;">
                                                    {{$birth['name']}}
                                                </div>
                                                <div class="comment fw-bold" style="color: #535353;">
                                                    {{$birth['birthday']}} ({{$birth['age']}} Jahre)
                                                </div>
                                            </div>
                                            <div class="svg-divv">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6.253" height="15.484"
                                                     viewBox="0 0 6.253 15.484">
                                                    <g id="Group_1178" data-name="Group 1178"
                                                       transform="translate(-1054.727 -165.697)">
                                                        <ellipse id="Ellipse_6" data-name="Ellipse 6" cx="3.127" cy="2.978"
                                                                 rx="3.127" ry="2.978" transform="translate(1054.727 165.697)"
                                                                 fill="#535353" />
                                                        <ellipse id="Ellipse_7" data-name="Ellipse 7" cx="3.127" cy="2.978"
                                                                 rx="3.127" ry="2.978" transform="translate(1054.727 175.225)"
                                                                 fill="#535353" />
                                                    </g>
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach($personalApp as $perApp)
                                    <div class="offene-item-one22 py-2 px-3 m-2" data-bs-toggle="modal"
                                         data-bs-target="#exampleModall{{$perApp->id}}">
                                        <div class="d-flex ">
                                            <div class="my-auto col-auto pe-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" fill="currentColor"
                                                     class="bi bi-file-medical" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.5 4.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L7 6l-.549.317a.5.5 0 1 0 .5.866l.549-.317V7.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L9 6l.549-.317a.5.5 0 1 0-.5-.866l-.549.317V4.5zM5.5 9a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z" />
                                                    <path
                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                </svg>
                                            </div>
                                            <div class="name-divs col">
                                                <div class="name fs-5 fw-bold" style="color: #535353;">
                                                    {{$perApp->title}}
                                                </div>
                                                <div class="comment fw-bold" style="color: #535353;">
                                                    {{$perApp->date}} ({{$perApp->time}})
                                                </div>
                                            </div>
                                            <div class="svg-divv">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6.253" height="15.484"
                                                     viewBox="0 0 6.253 15.484">
                                                    <g id="Group_1178" data-name="Group 1178"
                                                       transform="translate(-1054.727 -165.697)">
                                                        <ellipse id="Ellipse_6" data-name="Ellipse 6" cx="3.127" cy="2.978"
                                                                 rx="3.127" ry="2.978" transform="translate(1054.727 165.697)"
                                                                 fill="#535353" />
                                                        <ellipse id="Ellipse_7" data-name="Ellipse 7" cx="3.127" cy="2.978"
                                                                 rx="3.127" ry="2.978" transform="translate(1054.727 175.225)"
                                                                 fill="#535353" />
                                                    </g>
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModall{{$perApp->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content"
                                                 style="background: #f8f8f8; border-radius: 43px">
                                                <div class="modal-header mx-3 pt-4"
                                                     style="border-bottom: none !important;">
                                                    <h4>Personal Appointment</h4>
                                                    <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"
                                                            style="opacity: 1 !important;"></button>
                                                </div>
                                                <div class="modal-body p-3">
                                                    <div class="row my-2">
                                                        <div class="col-12">
                                                            <div class=" fw-bold"
                                                                 style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                                                Title: {{$perApp->title}}
                                                                <br>
                                                                Kommentar: {{$perApp->comment}}
                                                                <br>
                                                                Adress: {{$perApp->address}}
                                                                <br>
                                                                Datum: {{$perApp->date}}
                                                                <br>
                                                                Zeit: {{$perApp->time}}
                                                                <br>
                                                                Von: {{App\Models\Admins::find($perApp->assignfrom)->name}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer"
                                                     style="border-top: none !important; display: block;">
                                                    <div class="row mx-4 pb-4">
                                                        <div class=" mx-auto">
                                                            <button type="button" class="btn w-100 px-3"
                                                                    style=" color: #ffffff !important; background-color: #6C757D !important;border-radius: 8px !important;"
                                                                    data-bs-dismiss="modal"><b>Schliessen</b>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--        Desktop--}}
        <section class="desktop-tasks">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6 g-0">
                        <div class="open-tasks">
                            <div class="header px-3 px-sm-3 justify-content-between">
                                <div class="">
                                    <span>Offene Aufgaben</span>
                                </div>
                                <div class="col-auto ">
                                    {{count($tasks)}}
                                </div>
                            </div>
                            <div class="content ps-3">
                                <div class="overflow-div">
                                    <table class="table table-borderless table-striped table-1">
                                        <thead>
                                        <tr class="sticky-class">
                                            <th scope="col">Datum</th>
                                            <th scope="col">Beschreibung</th>
                                            <th scope="col">Kundename</th>
                                            <th scope="col" class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                     viewBox="0 0 28.391 27.587">
                                                    <g id="Group_17" data-name="Group 17" transform="translate(1.25)">
                                                        <line id="Line_5" data-name="Line 5" x2="25.891"
                                                              transform="translate(0 24.217)" fill="none"
                                                              stroke="#8e8e8e"
                                                              stroke-linecap="round" stroke-width="2.5"/>
                                                        <line id="Line_6" data-name="Line 6" x2="25.891"
                                                              transform="translate(0 13.488)" fill="none"
                                                              stroke="#8e8e8e"
                                                              stroke-linecap="round" stroke-width="2.5"/>
                                                        <line id="Line_7" data-name="Line 7" x2="25.891"
                                                              transform="translate(0 2.76)" fill="none" stroke="#8e8e8e"
                                                              stroke-linecap="round" stroke-width="2.5"/>
                                                        <g id="Ellipse_4" data-name="Ellipse 4"
                                                           transform="translate(4.926 21.457)" fill="#8e8e8e"
                                                           stroke="#8e8e8e" stroke-width="1">
                                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065"
                                                                     stroke="none"/>
                                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565"
                                                                     fill="none"/>
                                                        </g>
                                                        <g id="Ellipse_5" data-name="Ellipse 5"
                                                           transform="translate(16.186 10.728)" fill="#8e8e8e"
                                                           stroke="#8e8e8e" stroke-width="1">
                                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065"
                                                                     stroke="none"/>
                                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565"
                                                                     fill="none"/>
                                                        </g>
                                                        <g id="Ellipse_6" data-name="Ellipse 6"
                                                           transform="translate(4.926)" fill="#8e8e8e" stroke="#8e8e8e"
                                                           stroke-width="1">
                                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065"
                                                                     stroke="none"/>
                                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565"
                                                                     fill="none"/>
                                                        </g>
                                                    </g>
                                                </svg>

                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody id="body-table-edit">
                                        @foreach($tasks as $task)
                                            @php
                                                $leadss = $task->id * 1244;
                                                $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                                $admin_id = Crypt::encrypt(Auth::user()->id * 1244);
                                            @endphp
                                            <tr class="table-content1" style="cursor: pointer">
                                                <td scope="row"
                                                    onclick="window.location.href='{{route('leadfamilyperson',[$taskId,$admin_id])}}'">{{ Carbon\Carbon::parse($task->created_at)->format('Y-m-d') }}</td>
                                                <td onclick="window.location.href='{{route('leadfamilyperson',[$taskId,$admin_id])}}'">{{ucfirst($task->first_name)}}</td>
                                                <td onclick="window.location.href='{{route('leadfamilyperson',[$taskId,$admin_id])}}'">{{ucfirst($task->last_name)}}</td>
                                                <td class="text-center"
                                                    onclick="window.location.href='{{route('leadfamilyperson',[$taskId,$admin_id])}}'">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="4.838"
                                                         height="21.425"
                                                         viewBox="0 0 4.838 21.425">
                                                        <g id="Group_1088" data-name="Group 1088"
                                                           transform="translate(0.082)">
                                                            <circle id="Ellipse_57" data-name="Ellipse 57" cx="2.419"
                                                                    cy="2.419" r="2.419" transform="translate(-0.082)"
                                                                    fill="#ccc"/>
                                                            <circle id="Ellipse_58" data-name="Ellipse 58" cx="2.419"
                                                                    cy="2.419" r="2.419"
                                                                    transform="translate(-0.082 8.294)"
                                                                    fill="#ccc"/>
                                                            <circle id="Ellipse_59" data-name="Ellipse 59" cx="2.419"
                                                                    cy="2.419" r="2.419"
                                                                    transform="translate(-0.082 16.587)"
                                                                    fill="#ccc"/>
                                                        </g>
                                                    </svg>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 g-0">
                        <div class="birthday-div">
                            <div class="header px-3 px-sm-3 justify-content-between">
                                <div class="">
                                    <span>Geburstage/Jubiläen</span>
                                </div>
                                <div class="col-auto">
                                    {{count($birthdays) + count($personalApp)}}
                                </div>
                            </div>
                            <div class="content  ps-3">
                                <div class="overflow-div">
                                    <table class="table table-borderless table-striped table-2">
                                        <thead>
                                        <tr class="sticky-class">
                                            <th scope="col">Datum</th>
                                            <th scope="col">Wann</th>
                                            <th scope="col">Kundename</th>
                                            <th scope="col" class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                     viewBox="0 0 28.391 27.587">
                                                    <g id="Group_17" data-name="Group 17" transform="translate(1.25)">
                                                        <line id="Line_5" data-name="Line 5" x2="25.891"
                                                              transform="translate(0 24.217)" fill="none"
                                                              stroke="#8e8e8e"
                                                              stroke-linecap="round" stroke-width="2.5"/>
                                                        <line id="Line_6" data-name="Line 6" x2="25.891"
                                                              transform="translate(0 13.488)" fill="none"
                                                              stroke="#8e8e8e"
                                                              stroke-linecap="round" stroke-width="2.5"/>
                                                        <line id="Line_7" data-name="Line 7" x2="25.891"
                                                              transform="translate(0 2.76)" fill="none" stroke="#8e8e8e"
                                                              stroke-linecap="round" stroke-width="2.5"/>
                                                        <g id="Ellipse_4" data-name="Ellipse 4"
                                                           transform="translate(4.926 21.457)" fill="#8e8e8e"
                                                           stroke="#8e8e8e" stroke-width="1">
                                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065"
                                                                     stroke="none"/>
                                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565"
                                                                     fill="none"/>
                                                        </g>
                                                        <g id="Ellipse_5" data-name="Ellipse 5"
                                                           transform="translate(16.186 10.728)" fill="#8e8e8e"
                                                           stroke="#8e8e8e" stroke-width="1">
                                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065"
                                                                     stroke="none"/>
                                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565"
                                                                     fill="none"/>
                                                        </g>
                                                        <g id="Ellipse_6" data-name="Ellipse 6"
                                                           transform="translate(4.926)" fill="#8e8e8e" stroke="#8e8e8e"
                                                           stroke-width="1">
                                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065"
                                                                     stroke="none"/>
                                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565"
                                                                     fill="none"/>
                                                        </g>
                                                    </g>
                                                </svg>

                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody id="body-table-edit">
                                        @foreach($birthdays as $birth)
                                            <tr class="table-content1">
                                                <td scope="row">{{$birth['birthday']}} </td>
                                                <td>({{$birth['age']}})</td>
                                                <td>{{$birth['name']}}</td>
                                                <td class="text-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" fill="currentColor"
                                                         class="bi bi-balloon" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                              d="M8 9.984C10.403 9.506 12 7.48 12 5a4 4 0 0 0-8 0c0 2.48 1.597 4.506 4 4.984ZM13 5c0 2.837-1.789 5.227-4.52 5.901l.244.487a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.244-.487C4.789 10.227 3 7.837 3 5a5 5 0 0 1 10 0Zm-6.938-.495a2.003 2.003 0 0 1 1.443-1.443C7.773 2.994 8 2.776 8 2.5c0-.276-.226-.504-.498-.459a3.003 3.003 0 0 0-2.46 2.461c-.046.272.182.498.458.498s.494-.227.562-.495Z" />
                                                    </svg>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @foreach($personalApp as $perApp)
                                            <tr class="table-content1" style="cursor: pointer">
                                                <td scope="row" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{$perApp->id}}">{{$perApp->date}} </td>
                                                <td data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{$perApp->id}}">{{$perApp->title}}</td>
                                                <td data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{$perApp->id}}"></td>
                                                <td class="text-center" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{$perApp->id}}">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="4.838"
                                                         height="21.425"
                                                         viewBox="0 0 4.838 21.425">
                                                        <g id="Group_1088" data-name="Group 1088"
                                                           transform="translate(0.082)">
                                                            <circle id="Ellipse_57" data-name="Ellipse 57" cx="2.419"
                                                                    cy="2.419" r="2.419" transform="translate(-0.082)"
                                                                    fill="#ccc"/>
                                                            <circle id="Ellipse_58" data-name="Ellipse 58" cx="2.419"
                                                                    cy="2.419" r="2.419"
                                                                    transform="translate(-0.082 8.294)"
                                                                    fill="#ccc"/>
                                                            <circle id="Ellipse_59" data-name="Ellipse 59" cx="2.419"
                                                                    cy="2.419" r="2.419"
                                                                    transform="translate(-0.082 16.587)"
                                                                    fill="#ccc"/>
                                                        </g>
                                                    </svg>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="exampleModal{{$perApp->id}}" tabindex="-1"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content"
                                                         style="background: #f8f8f8; border-radius: 43px">
                                                        <div class="modal-header mx-3 pt-4"
                                                             style="border-bottom: none !important;">
                                                            <h4>Personal Appointment</h4>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"
                                                                    style="opacity: 1 !important;"></button>
                                                        </div>
                                                        <div class="modal-body p-3">
                                                            <div class="row my-2">
                                                                <div class="col-12">
                                                                    <div class=" fw-bold"
                                                                         style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                                                        Title: {{$perApp->title}}
                                                                        <br>
                                                                        Kommentar: {{$perApp->comment}}
                                                                        <br>
                                                                        Adress: {{$perApp->address}}
                                                                        <br>
                                                                        Datum: {{$perApp->date}}
                                                                        <br>
                                                                        Zeit: {{$perApp->time}}
                                                                        <br>
                                                                        Von: {{App\Models\Admins::find($perApp->assignfrom)->name}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"
                                                             style="border-top: none !important; display: block;">
                                                            <div class="row mx-4 pb-4">
                                                                <div class=" mx-auto">
                                                                    <button type="button" class="btn w-100 px-3"
                                                                            style=" color: #ffffff !important; background-color: #6C757D !important;border-radius: 8px !important;"
                                                                            data-bs-dismiss="modal"><b>Schliessen</b>
                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 g-0">
                        <div class="pending-divv">
                            <div class="header px-3 px-sm-3 justify-content-between">
                                <div class="">
                                    <span>Pendenze / Zur Nachbearbeitung </span>
                                </div>
                                <div class="col-auto">
                                    {{count($pending)}}
                                </div>
                            </div>
                            <div class="content ps-3">
                                <div class="overflow-div mt-3">
                                    <table class="table table-borderless">
                                        <thead>
                                        <tr class="sticky-class" style="border-bottom: 1px solid #70707050 !important;">
                                            <th scope="col">Datum</th>
                                            <th scope="col">Kundename</th>
                                            <th scope="col">Titel</th>
                                            <th scope="col">Beschreibung</th>
                                            <th scope="col">Art</th>
                                            <th scope="col" class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                     viewBox="0 0 28.391 27.587">
                                                    <g id="Group_17" data-name="Group 17" transform="translate(1.25)">
                                                        <line id="Line_5" data-name="Line 5" x2="25.891"
                                                              transform="translate(0 24.217)" fill="none"
                                                              stroke="#8e8e8e"
                                                              stroke-linecap="round" stroke-width="2.5"/>
                                                        <line id="Line_6" data-name="Line 6" x2="25.891"
                                                              transform="translate(0 13.488)" fill="none"
                                                              stroke="#8e8e8e"
                                                              stroke-linecap="round" stroke-width="2.5"/>
                                                        <line id="Line_7" data-name="Line 7" x2="25.891"
                                                              transform="translate(0 2.76)" fill="none" stroke="#8e8e8e"
                                                              stroke-linecap="round" stroke-width="2.5"/>
                                                        <g id="Ellipse_4" data-name="Ellipse 4"
                                                           transform="translate(4.926 21.457)" fill="#8e8e8e"
                                                           stroke="#8e8e8e" stroke-width="1">
                                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065"
                                                                     stroke="none"/>
                                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565"
                                                                     fill="none"/>
                                                        </g>
                                                        <g id="Ellipse_5" data-name="Ellipse 5"
                                                           transform="translate(16.186 10.728)" fill="#8e8e8e"
                                                           stroke="#8e8e8e" stroke-width="1">
                                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065"
                                                                     stroke="none"/>
                                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565"
                                                                     fill="none"/>
                                                        </g>
                                                        <g id="Ellipse_6" data-name="Ellipse 6"
                                                           transform="translate(4.926)" fill="#8e8e8e" stroke="#8e8e8e"
                                                           stroke-width="1">
                                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065"
                                                                     stroke="none"/>
                                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565"
                                                                     fill="none"/>
                                                        </g>
                                                    </g>
                                                </svg>

                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody id="body-table-edit">
                                        @foreach($pending as $task)
                                            @php
                                                $leadss = $task->id * 1244;
                                                $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                                $admin_id = \Illuminate\Support\Facades\Crypt::encrypt($task->admin_id * 1244);
                                                $pend_id = $task->pid;
                                            @endphp
                                            <tr class="table-content" style="cursor: pointer">
                                                <td scope="row" data-bs-target="#stats{{$task->pid}}"
                                                    data-bs-toggle="modal">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$task->created_at)->format('Y-m-d')}}</td>
                                                <td data-bs-target="#stats{{$task->pid}}"
                                                    data-bs-toggle="modal">{{ucfirst($task->first_name)}}  {{ucfirst($task->last_name)}}</td>
                                                <td data-bs-target="#stats{{$task->pid}}"
                                                    data-bs-toggle="modal">{{$task->title}}</td>
                                                <td data-bs-target="#stats{{$task->pid}}"
                                                    data-bs-toggle="modal">{{$task->description}}</td>
                                                <td data-bs-target="#stats{{$task->pid}}" data-bs-toggle="modal">
                                                    @if($task->type == "task")
                                                        <span class="submited-btn1 py-2 px-4">
                                                        {{ucfirst($task->type)}}
                                                        </span>
                                                    @else
                                                        <span class="submited-btn py-2 px-4">Eingereicht</span>
                                                    @endif
                                                </td>
                                                <td class="text-center" data-bs-target="#stats{{$task->pid}}"
                                                    data-bs-toggle="modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="4"
                                                         viewBox="0 0 7 31">
                                                        <g id="Group_860" data-name="Group 860"
                                                           transform="translate(0.082)">
                                                            <circle id="Ellipse_57" data-name="Ellipse 57" cx="3.5"
                                                                    cy="3.5"
                                                                    r="3.5" transform="translate(-0.082)"
                                                                    fill="#767676"/>
                                                            <circle id="Ellipse_58" data-name="Ellipse 58" cx="3.5"
                                                                    cy="3.5"
                                                                    r="3.5" transform="translate(-0.082 12)"
                                                                    fill="#767676"/>
                                                            <circle id="Ellipse_59" data-name="Ellipse 59" cx="3.5"
                                                                    cy="3.5"
                                                                    r="3.5" transform="translate(-0.082 24)"
                                                                    fill="#767676"/>
                                                        </g>
                                                    </svg>

                                                </td>
                                            </tr>
                                            <div class="modal fade" id="stats{{$task->pid}}" tabindex="-1"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content"
                                                         style="background: #f8f8f8; border-radius: 43px">
                                                        <div class="modal-header mx-3 pt-4"
                                                             style="border-bottom: none !important;">
                                                            <h4>Pendenzen Infos</h4>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"
                                                                    style="opacity: 1 !important;"></button>
                                                        </div>
                                                        <div class="modal-body p-3">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="text-center my-1 fw-bold"
                                                                         style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                                                        Datum:
                                                                        <br>
                                                                        {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $task->created_at)->format('Y-m-d')}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="text-center my-1 fw-bold"
                                                                         style="padding: 15px;background-color: #eeeeee; border-radius: 15px">
                                                                        Zeit:
                                                                        <br>
                                                                        {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $task->created_at)->format('H:i')}}

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row my-2">
                                                                <div class="col-6">
                                                                    <div class="text-center my-1 fw-bold"
                                                                         style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                                                        Kundenname:
                                                                        <br>
                                                                        {{ucfirst($task->first_name)}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="text-center my-1 fw-bold"
                                                                         style="padding: 15px;background-color: #eeeeee; border-radius: 15px">
                                                                        Titel
                                                                        <br>
                                                                        {{$task->title}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row my-2">
                                                                <div class="col-12">
                                                                    <div class="text-center fw-bold"
                                                                         style="padding: 15px;background-color: #eeeeee;border-radius: 15px">
                                                                        Beschreibung:
                                                                        <br>
                                                                        {{$task->description}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer text-center"
                                                             style="border-top: none !important; display: block;">

                                                            <button type="button" class="btn px-3"
                                                                    style=" color: #ffffff !important; background-color: #6C757D !important;border-radius: 8px !important;"
                                                                    data-bs-dismiss="modal"><b>Schliessen</b></button>

                                                            <a href="{{route('leadfamilyperson',[$taskId,'admin_id' => $admin_id,'pend_id' => $task->pid])}}">
                                                                <button type="button" class="btn px-3"
                                                                        style=" color: #ffffff !important; background-color: #6C757D !important;border-radius: 8px !important;"><b>Offen</b></button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
        <section class="mobile-tasks">
            <div class="row g-0">
                <div class="col-12 col-md-6">
                    <div class="offene-div my-3 mx-3">
                        <div class="d-flex justify-content-between">
                            <span class="fw-600 fs-5">Beantwortete Aufgaben</span>
                            <span onclick="secondDivToggleFunct33()" class="fw-600 px-4 pb-1 pt-1 fs-5 number-offene"
                                  style="background-color: #F7F7F7; color: #FF4000;">{{count($answered)}}</span>
                        </div>
                        <div id="firstDivToggle33" class="py-5 sjfg" onclick="firstDivToggleFunct33()">
                            <div class="text-center">
                            <span class="fs-4 fw-bold" style="color: #BCC1CD;">
                                Drücken um
                                aufzuklappen
                            </span>
                            </div>
                        </div>
                        <script>
                            var intvaluecount = 1;
                            var truefalsee = [];
                            var intvaluecount2 = 1;
                            var truefalsee2 = [];
                        </script>
                        <div id="secondDivToggle33" class="wrapper p-2" style="display: none;">
                            <div class="overflow-divv1">
                                @foreach($answered as $task)
                                    @php
                                                   $leadss = $task->family_id * 1244;
                                                    $admin_id = Crypt::encrypt($task->admin_id * 1244);
                                                    $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                                    $pend_id = $task->pid;
                                                    $leadss = $task->admin_id * 1244;
                                                    $taskAdminId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                                    $leadss = Auth::user()->id * 1244;
                                                    $authUserId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                    @endphp
                                    <div class="answered-items ms-2 ms-sm-2 ms-md-4 me-2 me-sm-3 my-3">
                                        <a data-bs-toggle="collapse" id="demo23{{$taskId}}"
                                           style="text-decoration:none;">
                                            <div class="px-2 py-2 ">
                                                <div class="m-1 d-flex justify-content-between">
                                                    <div class="fw-bold">{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}} </div>
                                                    <div class="col-auto">
                                                                    <span>
                                                                        <span class="px-2" style="font-size: 19px;">
                                                                            <i class="bi bi-chat justify-content-end"></i>
                                                                        </span>
                                                                    </span>
                                                        <span id="demo23span{{$taskId}}" class="bi bi-chevron-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div id="demo{{$taskId}}" class="collapse px-3 py-2">
                                            <h6 class="m-1"><b>Klientin:</b> {{ucfirst($task->first_name)}}
                                            </h6>
                                            <h6 class="m-1"><b>Titel:</b> {{$task->title}}</h6>
                                            <h6 class="m-1"><b>Adresse
                                                    zu:</b> {{\App\Models\Admins::find($task->admin_id)->name}}
                                            </h6>
                                            <h6 class="m-1"><b>Datum & Zeit:</b> {{$task->updated_at}}</h6>
                                            <h6 class="m-1"><b>Beschreibung:</b>
                                                <span> {{$task->description }}</span></h6>
                                            <a href="{{route('leadfamilyperson',['id' => $taskId,'admin_id' => $admin_id,'pend_id' => $pend_id])}}">
                                                <button class="btn m-1"
                                                        style="background-color: #0C71C3; color: #fff; font-weight: 600; padding-left: 8%; padding-right: 8%;">
                                                    Offen
                                                </button>
                                            </a>
                                        </div>
                                        <script>
                                            truefalsee["sss" + intvaluecount] = false;
                                            $(document).ready(function () {
                                                $("#demo23{{$taskId}}").click(function () {

                                                    $("#demo{{$taskId}}").collapse('toggle');
                                                    if (truefalsee["sss" + intvaluecount] === false) {
                                                        $("#demo23span{{$taskId}}").addClass("bi bi-chevron-down bi-chevron-up");
                                                        truefalsee["sss" + intvaluecount] = true;
                                                    } else {
                                                        $("#demo23span{{$taskId}}").removeClass("bi bi-chevron-up");
                                                        truefalsee["sss" + intvaluecount] = false;
                                                    }
                                                });
                                            });
                                            intvaluecount++;
                                        </script>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12  col-md-6">
                    <div class="pendzen-div  my-3 mx-3">
                        <div class="d-flex justify-content-between">
                            <span class="fw-600 fs-5">Aufgaben öffnen</span>
                            <span onclick="secondDivToggleFunct44()" class="fw-600 px-4 pb-1 pt-1 fs-5 number-offene"
                                  style="background-color: #F7F7F7; color: #FF4000;">{{count($opened)}}</span>
                        </div>
                        <div id="firstDivToggle44" class="py-5 sjfg2" onclick="firstDivToggleFunct44()">
                            <div class="text-center">
                            <span class="fs-4 fw-bold" style="color: #BCC1CD;">
                                Drücken um
                                aufzuklappen
                            </span>
                            </div>
                        </div>
                        <div id="secondDivToggle44" class="wrapper3 p-2" style="display: none;">
                            <div class="overflow-divv2">
                                @foreach($opened as $task)
                                    @php
                                        $leadss = $task->family_id * 1244;
                                        $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                        $pend_id = $task->pid;
                                    @endphp
                                    <div class="answered-items ms-3 ms-sm-2 ms-md-4 me-2 me-sm-3 my-3">

                                        @php
                                            $leadss = $task->admin_id * 1244;
                                            $taskAdminId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                            $leadss = Auth::user()->id * 1244;
                                            $authUserId= \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                            $admin_id = \Illuminate\Support\Facades\Crypt::encrypt($task->admin_id * 1244);
                                        @endphp
                                        <a data-bs-toggle="collapse" id="demo23_2{{$authUserId}}"
                                           style="text-decoration:none;">
                                            <div class="px-2 py-2">
                                                <div class="m-1 d-flex justify-content-between"
                                                     style="text-overflow: ellipsis; overflow:hidden;">
                                                    <div class="fw-bold">{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}} </div>
                                                    <div class="col-auto">
                                                                    <span style="cursor:pointer;" onclick="window.location.href='{{route('chat',[$taskAdminId,$authUserId])}}'">
                                                                        <span class="px-2" style="font-size: 19px;">
                                                                            <i class="bi bi-chat justify-content-end"></i>
                                                                        </span>
                                                                    </span>
                                                        <span id="demo23span_2{{$authUserId}}" class="bi bi-chevron-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div id="demo_2{{$authUserId}}" class="collapse px-3 py-2">
                                            <h6 class="m-1"><b>Klientin: {{ucfirst($task->first_name)}}</b>
                                            </h6>
                                            <h6 class="m-1"><b>Titel:</b> {{$task->title}}</h6>
                                            <h6 class="m-1"><b>Adresse
                                                    zu:</b> {{\App\Models\Admins::find($task->admin_id)->name}}
                                            </h6>
                                            <h6 class="m-1"><b>Datum & Zeit:</b> {{$task->updated_at}}</h6>
                                            <h6 class="m-1"><b>Beschreibung:</b>
                                                <span> {{$task->description}} </span></h6>
                                            <a href="{{route('leadfamilyperson',['id' => $taskId,'admin_id' => $admin_id,'pend_id' => $pend_id])}}">
                                                <button class="btn m-1"
                                                        style="background-color: #0C71C3; color: #fff; font-weight: 600; padding-left: 8%; padding-right: 8%;">
                                                    Offen
                                                </button>
                                            </a>

                                        </div>
                                        <script>
                                            truefalsee2["sss" + intvaluecount2] = false;
                                            $(document).ready(function () {
                                                $("#demo23_2{{$authUserId}}").click(function () {
                                                    $("#demo_2{{$authUserId}}").collapse('toggle');
                                                    if (truefalsee2["sss" + intvaluecount2] === false) {
                                                        $("#demo23span_2{{$authUserId}}").addClass("bi bi-chevron-down bi-chevron-up");
                                                        truefalsee2["sss" + intvaluecount2] = true;
                                                    } else {
                                                        $("#demo23span_2{{$authUserId}}").removeClass("bi bi-chevron-up");
                                                        truefalsee2["sss" + intvaluecount2] = false;
                                                    }
                                                });
                                            });
                                            intvaluecount2++;
                                        </script>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="desktop-tasks">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6 g-0">
                        <div class="answered-div">
                            <div class="header px-3 px-sm-3 justify-content-between">
                                <div class="">
                                    <span>Beantwortete Aufgaben</span>
                                </div>
                                <div class="col-auto">
                                    {{count($answered)}}
                                </div>
                            </div>
                            <div class="content">
                                <div class="button-divv mx-0 mx-sm-1 mx-md-4 mx-lg-4 py-2">
                                    <div class="d-flex py-2 px-3 px-sm-2" style="align-items: center;">
                                        <form action="{{route('tasks')}}" style="width: 100%;" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <div class=" btn search-icon ps-3 pe-2">
                                                <span class="">
                                                    <svg id="Group_1" data-name="Group 1" xmlns="http://www.w3.org/2000/svg"
                                                         width="22.03" viewBox="0 0 28.03 24.48">
                                                        <g id="Ellipse_2" data-name="Ellipse 2" fill="none" stroke="#0c71c3"
                                                           stroke-linecap="round" stroke-width="2">
                                                            <ellipse cx="10.648" cy="10.648" rx="10.648" ry="10.648"
                                                                     stroke="none"/>
                                                            <ellipse cx="10.648" cy="10.648" rx="9.648" ry="9.648"
                                                                     fill="none"/>
                                                        </g>
                                                        <line id="Line_4" data-name="Line 4" x2="7.305" y2="6.113"
                                                              transform="translate(19.316 16.958)" fill="none"
                                                              stroke="#0c71c3" stroke-linecap="round" stroke-width="2"/>
                                                    </svg>
                                                </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Suche nach Name" name="searchpend">
                                                <button type="submit" class="py-1 px-3 px-sm-4 px-md-5 ms-2 fw-bold border-0 search-button-task">
                                                    Suche..
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="overflow-div px-3 px-sm-3 px-md-3 me-2">
                                    <script>
                                        var intvaluecount = 1;
                                        var truefalsee = [];
                                        var intvaluecount2 = 1;
                                        var truefalsee2 = [];
                                    </script>
                                    <div id="collapse__">
                                        <div class="collapse2___ "
                                        >
                                            @foreach($answered as $task)
                                                @php
                                                    $leadss = $task->family_id * 1244;
                                                    $admin_id = Crypt::encrypt($task->admin_id * 1244);
                                                    $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                                    $pend_id = $task->pid;
                                                @endphp
                                                <div class="answered-items ms-2 ms-sm-2 ms-md-4 me-2 me-sm-3 my-3">
                                                    <a data-bs-toggle="collapse" id="demo23{{$taskId}}"
                                                       style="text-decoration:none;">
                                                        <div class="px-2 py-2 ">
                                                            <div class="m-1 d-flex justify-content-between">
                                                                <div class="fw-bold">{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}} </div>
                                                                <div class="col-auto">
                                                                    <span>
                                                                        <span class="px-2" style="font-size: 19px;">
                                                                            <i class="bi bi-chat justify-content-end"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span id="demo23span{{$taskId}}" class="bi bi-chevron-down"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div id="demo{{$taskId}}" class="collapse px-3 py-2">
                                                        <h6 class="m-1"><b>Klientin:</b> {{ucfirst($task->first_name)}}
                                                        </h6>
                                                        <h6 class="m-1"><b>Titel:</b> {{$task->title}}</h6>
                                                        <h6 class="m-1"><b>Adresse
                                                                zu:</b> {{\App\Models\Admins::find($task->admin_id)->name}}
                                                        </h6>
                                                        <h6 class="m-1"><b>Datum & Zeit:</b> {{$task->updated_at}}</h6>
                                                        <h6 class="m-1"><b>Beschreibung:</b>
                                                            <span> {{$task->description }}</span></h6>
                                                        <a href="{{route('leadfamilyperson',['id' => $taskId,'admin_id' => $admin_id,'pend_id' => $pend_id])}}">
                                                            <button class="btn m-1"
                                                                    style="background-color: #0C71C3; color: #fff; font-weight: 600; padding-left: 8%; padding-right: 8%;">
                                                                Offen
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <script>
                                                        truefalsee["sss" + intvaluecount] = false;
                                                        $(document).ready(function () {
                                                            $("#demo23{{$taskId}}").click(function () {
                                                                $("#demo{{$taskId}}").collapse('toggle');
                                                                if (truefalsee["sss" + intvaluecount] === false) {
                                                                    $("#demo23span{{$taskId}}").addClass("bi bi-chevron-down bi-chevron-up");
                                                                    truefalsee["sss" + intvaluecount] = true;
                                                                } else {
                                                                    $("#demo23span{{$taskId}}").removeClass("bi bi-chevron-up");
                                                                    truefalsee["sss" + intvaluecount] = false;
                                                                }
                                                            });
                                                        });
                                                        intvaluecount++;
                                                    </script>
                                                </div>

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 g-0">
                        <div class="open-tasks-bo">
                            <div class="header px-3 px-sm-3 justify-content-between">
                                <div class="">
                                    <span>Aufgaben öffnen</span>
                                </div>
                                <div class="col-auto">
                                    {{count($opened)}}
                                </div>
                            </div>
                            <div class="content">
                                <div class="button-divv mx-0 mx-sm-1 mx-md-4 mx-lg-4 py-2">
                                    <div class="d-flex py-2 px-3 px-sm-2" style="align-items: center;">
                                        <form action="{{route('tasks')}}" style="width: 100%;" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <div class=" btn search-icon ps-3 pe-2">
                                            <span class="">
                                                <svg id="Group_1" data-name="Group 1" xmlns="http://www.w3.org/2000/svg"
                                                     width="22.03" viewBox="0 0 28.03 24.48">
                                                    <g id="Ellipse_2" data-name="Ellipse 2" fill="none" stroke="#0c71c3"
                                                       stroke-linecap="round" stroke-width="2">
                                                        <ellipse cx="10.648" cy="10.648" rx="10.648" ry="10.648"
                                                                 stroke="none"/>
                                                        <ellipse cx="10.648" cy="10.648" rx="9.648" ry="9.648"
                                                                 fill="none"/>
                                                    </g>
                                                    <line id="Line_4" data-name="Line 4" x2="7.305" y2="6.113"
                                                          transform="translate(19.316 16.958)" fill="none"
                                                          stroke="#0c71c3" stroke-linecap="round" stroke-width="2"/>
                                                </svg>
                                            </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Suche nach Name" name="searchopen">
                                                <button type="submit" class="py-1 px-3 px-sm-4 px-md-5 ms-2 fw-bold border-0 search-button-task">
                                                    Suchen..
                                                </button>

                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="overflow-div px-1 px-sm-1 px-md-2 me-3">
                                    <div id="first_collapse">
                                        <div class="collapse23___   ">
                                            @foreach($opened as $task)
                                                @php
                                                    $leadss = $task->family_id * 1244;
                                                    $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                                    $pend_id = $task->pid;
                                                @endphp

                                                <div class="answered-items ms-3 ms-sm-2 ms-md-4 me-2 me-sm-3 my-3">

                                                    @php
                                                        $leadss = $task->admin_id * 1244;
                                                        $taskAdminId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                                        $leadss = Auth::user()->id * 1244;
                                                        $authUserId= \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                                        $admin_id = \Illuminate\Support\Facades\Crypt::encrypt($task->admin_id * 1244);
                                                    @endphp
                                                    <a data-bs-toggle="collapse" id="demo23_2{{$authUserId}}"
                                                       style="text-decoration:none;">
                                                        <div class="px-2 py-2">
                                                            <div class="m-1 d-flex justify-content-between"
                                                                 style="text-overflow: ellipsis; overflow:hidden;">
                                                                <div class="fw-bold">{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}} </div>
                                                                <div class="col-auto">
                                                                    <span style="cursor:pointer;" onclick="window.location.href='{{route('chat',[$taskAdminId,$authUserId])}}'">
                                                                        <span class="px-2" style="font-size: 19px;">
                                                                            <i class="bi bi-chat justify-content-end"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span id="demo23span_2{{$authUserId}}" class="bi bi-chevron-down"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div id="demo_2{{$authUserId}}" class="collapse px-3 py-2">
                                                        <h6 class="m-1"><b>Klientin: {{ucfirst($task->first_name)}}</b>
                                                        </h6>
                                                        <h6 class="m-1"><b>Titel:</b> {{$task->title}}</h6>
                                                        <h6 class="m-1"><b>Adresse
                                                                zu:</b> {{\App\Models\Admins::find($task->admin_id)->name}}
                                                        </h6>
                                                        <h6 class="m-1"><b>Datum & Zeit:</b> {{$task->updated_at}}</h6>
                                                        <h6 class="m-1"><b>Beschreibung:</b>
                                                            <span> {{$task->description}} </span></h6>
                                                        <a href="{{route('leadfamilyperson',['id' => $taskId,'admin_id' => $admin_id,'pend_id' => $pend_id])}}">
                                                            <button class="btn m-1"
                                                                    style="background-color: #0C71C3; color: #fff; font-weight: 600; padding-left: 8%; padding-right: 8%;">
                                                                Offen
                                                            </button>
                                                        </a>

                                                    </div>
                                                    <script>
                                                        truefalsee2["sss" + intvaluecount2] = false;
                                                        $(document).ready(function () {
                                                            $("#demo23_2{{$authUserId}}").click(function () {
                                                                $("#demo_2{{$authUserId}}").collapse('toggle');
                                                                if (truefalsee2["sss" + intvaluecount2] === false) {
                                                                    $("#demo23span_2{{$authUserId}}").addClass("bi bi-chevron-down bi-chevron-up");
                                                                    truefalsee2["sss" + intvaluecount2] = true;
                                                                } else {
                                                                    $("#demo23span_2{{$authUserId}}").removeClass("bi bi-chevron-up");
                                                                    truefalsee2["sss" + intvaluecount2] = false;
                                                                }
                                                            });
                                                        });
                                                        intvaluecount2++;
                                                    </script>
                                                </div>
                                            @endforeach
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

@endsection
<script>
    function firstDivToggleFunct() {
        $('#firstDivToggle').slideUp(200);
        $('#secondDivToggle').slideDown(200);
    }
    function firstDivToggleFunct22() {
        $('#firstDivToggle22').slideUp(200);
        $('#secondDivToggle22').slideDown(200);
    }
    function firstDivToggleFunct33() {
        $('#firstDivToggle33').slideUp(200);
        $('#secondDivToggle33').slideDown(200);
    }
    function firstDivToggleFunct44() {
        $('#firstDivToggle44').slideUp(200);
        $('#secondDivToggle44').slideDown(200);
    }
    function secondDivToggleFunct() {
        $('#secondDivToggle').slideUp(200);
        $('#firstDivToggle').slideDown(200);
    }
    function secondDivToggleFunct22() {
        $('#secondDivToggle22').slideUp(200);
        $('#firstDivToggle22').slideDown(200);
    }
    function secondDivToggleFunct33() {
        $('#secondDivToggle33').slideUp(200);
        $('#firstDivToggle33').slideDown(200);
    }
    function secondDivToggleFunct44() {
        $('#secondDivToggle44').slideUp(200);
        $('#firstDivToggle44').slideDown(200);
    }
</script>
<script>
    var intvaluecount = 1;
    var truefalsee = [];
    var intvaluecount2 = 1;
    var truefalsee2 = [];
</script>

<style>
    body {
        overflow-x: hidden;
    }
    .overflow-divvv::-webkit-scrollbar {
        width: 1px !important;
    }
    /* Track */
    .overflow-divvv::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px !important;
    }
    /* Handle */
    .overflow-divvv::-webkit-scrollbar-thumb {
        background: #c9cad8 !important;
        border-radius: 10px !important;
    }
    /* Handle on hover */
    .overflow-divvv::-webkit-scrollbar-thumb:hover {
        background: #707070 !important;
        border-radius: 10px !important;
    }
    .tab-lookalike2 {
        background-color: #FFEAE4 !important;
        color: #434343 !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        border-top-left-radius: 5px !important;
        border-top-right-radius: 5px !important;
    }
    .tab-lookalike1 {
        background-color: #F7F7F7 !important;
        color: #434343 !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        border-top-left-radius: 5px !important;
        border-top-right-radius: 5px !important;
    }
    .tab-lookalike {
        background-color: #F7F7F7 !important;
        color: #FF4000 !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        border-top-left-radius: 5px !important;
        border-top-right-radius: 5px !important;
    }
    .header-open-task1 {
        background-color: #F7F7F7 !important;
        border-bottom-left-radius: 20px !important;
        border-bottom-right-radius: 20px !important;
        border-top-left-radius: 20px !important;
        border-top-right-radius: 0px !important;
    }
    .header-open-task1-pink {
        background-color: #FFEAE4 !important;
        border-bottom-left-radius: 20px !important;
        border-bottom-right-radius: 20px !important;
        border-top-left-radius: 20px !important;
        border-top-right-radius: 0px;
    }
    .priority-spnn {
        background-color: #ad2b2b !important;
        border-radius: 35px !important;
        color: #fff !important;
    }
    .open-task-box {
        border-radius: 35px !important;
        background-color: #fff;
        border: none !important;
    }
    .pendzen-box {
        border-radius: 35px !important;
        background-color: #EAECF0 !important;
        border: none !important;
    }
    .third-box {
        border-radius: 35px !important;
        background-color: #fff !important;
        border: #707070 1px solid !important;
    }
    .task-box {
        background-color: #F7F7F7 !important;
        border-radius: 12px !important;
    }
    .name-spnnnn {
        font-weight: 600 !important;
    }
    .fw-600 {
        font-weight: 600 !important;
    }
    .spn-muted {
        color: #707070 !important;
        font-weight: 600 !important;
        font-size: 14px !important;
    }
    .spn-normal {
        font-weight: 600;
        font-size: 14px !important;
    }
    .mobile-tasks {
        display: none;
    }
    .desktop-tasks {
        display: block;
    }
    @media (max-width: 575.98px) {
        .mobile-tasks {
            display: block;
        }
        .desktop-tasks {
            display: none;
        }
    }
</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@200;800;900&display=swap');
    body {
        font-family: 'Montserrat', sans-serif;
    }
    .fw-600 {
        font-weight: 600;
    }
    .form-control {
        border-color: #ced4da !important;
        box-shadow: none !important;
    }
    .number-offene {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }
    .sjfg {
        background-color: #F7F7F7;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }
    .sjfg1 {
        background-color: #FF400010;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }
    .sjfg2 {
        background-color: #f7f7f7;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }
    .offene-item-one {
        background-color: #fff;
        border-radius: 10px;
    }
    .overflow-divv1 {
        height: 37vh;
        overflow: auto;
    }
    .overflow-divv2 {
        height: 28vh;
        overflow: auto;
    }
    .wrapper {
        background-color: #F7F7F7;
        border-bottom-left-radius: 15px;
        border-top-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }
    .wrapper1 {
        background-color: #FF400010;
        border-bottom-left-radius: 15px;
        border-top-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }
    .wrapper2 {
        background-color: #fff;
        border-bottom-left-radius: 15px;
        border-top-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }
    .wrapper3 {
        background-color: #F7F7F7;
        border-bottom-left-radius: 15px;
        border-top-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }
    .offene-item-one22 {
        background-color: #F7F7F7;
        border-radius: 10px;
    }
    .overflow-divv1::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }
    /* Track */
    .overflow-divv1::-webkit-scrollbar-track {
        background: #ffffff !important;
        border-radius: 10px;
    }
    /* Handle */
    .overflow-divv1::-webkit-scrollbar-thumb {
        background: #5b6466;
        border-radius: 10px;
    }
    /* Handle on hover */
    .overflow-divv1::-webkit-scrollbar-thumb:hover {
        background: #5b6466;
        border-radius: 10px;
    }
    .overflow-divv2::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }
    /* Track */
    .overflow-divv2::-webkit-scrollbar-track {
        background: #ffffff !important;
        border-radius: 10px;
    }
    /* Handle */
    .overflow-divv2::-webkit-scrollbar-thumb {
        background: #FF4000;
        border-radius: 10px;
    }
    /* Handle on hover */
    .overflow-divv2::-webkit-scrollbar-thumb:hover {
        background: #FF4000;
        border-radius: 10px;
    }
</style>
<style>
    /*Per Notification */
    .coloriii a {
        color: black !important;
    }
</style>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@200;800;900&display=swap');
    body {
        font-family: 'Montserrat', sans-serif;
    }
    .fw-600 {
        font-weight: 600;
    }
    .form-control {
        border-color: #ced4da !important;
        box-shadow: none !important;
    }
    .search-button-task {
        color: #fff;
        background-color: #0C71C3;
        border-radius: 8px !important;
    }
    .submited-btn {
        background-color: #FFC428;
        color: #fff;
        border-radius: 35px;
    }
    .submited-btn1 {
        background-color: #c71a1a;
        color: #fff;
        border-radius: 35px;
    }
    .table-1 tr:first-child td:first-child {
        border-top-left-radius: 10px;
    }
    .table-1 tr:first-child td:last-child {
        border-top-right-radius: 10px;
    }
    .table-1 tr:last-child td:first-child {
        border-bottom-left-radius: 10px;
    }
    .table-1 tr:last-child td:last-child {
        border-bottom-right-radius: 10px;
    }
    .table-2 tr:first-child td:first-child {
        border-top-left-radius: 10px;
    }
    .table-2 tr:first-child td:last-child {
        border-top-right-radius: 10px;
    }
    .table-2 tr:last-child td:first-child {
        border-bottom-left-radius: 10px;
    }
    .table-2 tr:last-child td:last-child {
        border-bottom-right-radius: 10px;
    }
    .sticky-class {
        font-weight: 500 !important;
        color: #76767690 !important;
        position: sticky !important;
        top: 0;
        background-color: #fff !important;
    }
    .table-content {
        border-bottom: 0.5px solid #70707050 !important;
        font-weight: 600 !important;
        color: #434343;
        border-radius: 5px !important;
    }
    .table-content1 {
        /* border-bottom: 0.5px solid #70707050 !important; */
        font-weight: 600 !important;
        color: #434343;
        border-radius: 5px !important;
    }
    td {
        padding-top: 15px !important;
        padding-bottom: 15px !important;
    }
    th {
        padding-top: 15px !important;
        padding-bottom: 15px !important;
    }
    .search-icon {
        color: #0C71C3;
        background-color: #fff;
        border: 1px solid #707070 !important;
        border-right: none !important;
        border-top-left-radius: 10px !important;
        border-bottom-left-radius: 10px !important;
    }
    /* overflow-scroll divvvvvvvvv */
    .overflow-div {
        padding-right: 15px;
    }
    .overflow-div::-webkit-scrollbar {
        width: 7px;
        height: 7px;
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
    .answered-items {
        background-color: #EFEFEF;
        border-radius: 8px;
    }
    /* .answered-div {} */
    .answered-div .header {
        border-bottom: 1px solid #70707050;
        border-top: 1px solid #70707050;
        border-left: 1px solid #70707050;
        display: flex;
        align-items: center;
        font-weight: bold;
        height: 60px;
        background-color: #D1EBFF;
    }
    .answered-div .content {
        height: 60vh;
    }
    .answered-div .content .overflow-div {
        overflow: auto;
        height: 50vh;
    }
    .answered-div .content .button-div button {
        background-color: #0C71C3;
        font-weight: 700;
        color: #fff;
        border: none;
        border-radius: 8px;
    }
    .answered-div .content label {
        font-weight: 500;
    }
    .answered-div .content input,
    textarea {
        border-color: #707070 !important;
        border-top-right-radius: 8px !important;
        border-bottom-right-radius: 8px !important;
        border-left: none !important;
    }
    /* .open-tasks-bo {} */
    .open-tasks-bo .header {
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
    .open-tasks-bo .content {
        height: 60vh;
        border-left: 1px solid #70707050;
    }
    .open-tasks-bo .content .overflow-div {
        height: 50vh;
        overflow: auto;
    }
    /* .open-tasks-bo .content .overflow-div span {
        font-size: 18px;
    } */
    /* .open-tasks {} */
    .open-tasks .header {
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
    .open-tasks .content {
        height: 60vh;
    }
    .open-tasks .content .overflow-div {
        overflow: auto;
        height: 59vh;
    }
    .open-tasks-bo .content input {
        border-color: #707070 !important;
        border-top-right-radius: 8px !important;
        border-bottom-right-radius: 8px !important;
        border-left: none !important;
    }
    /* .birthday-div {} */
    .birthday-div .header {
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
    .birthday-div .content {
        height: 60vh;
        border-left: 1px solid #70707050;
    }
    .birthday-div .content .overflow-div {
        overflow: auto;
        height: 59vh;
    }
    /* .pending-divv {} */
    .pending-divv .header {
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
    .pending-divv .content {
        height: 60vh;
    }
    .pending-divv .content .overflow-div {
        height: 55vh;
        overflow: auto;
    }
</style>

