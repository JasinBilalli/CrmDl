@extends('template.navbar')
@section('content')
    <head>
        <title>
            Tasks
        </title>
        <link rel="icon" type="image/png" href="img/Favicon.png">
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
    @if(Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin'))
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6 g-0">
                        <div class="open-tasks">
                            <div class="header px-3 px-sm-3 justify-content-between">
                                <div class="">
                                    <span>Offene Aufgaben</span>
                                </div>
                                <div class="col-auto ">
                                    5
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
                                    5
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
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                                                         height="35" viewBox="0 0 40 35">
                                                        <defs>
                                                            <pattern id="pattern" preserveAspectRatio="none"
                                                                     width="100%" height="100%" viewBox="0 0 156 138">
                                                                <image width="156" height="138"
                                                                       xlink:href="data:image/png;base64,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"/>
                                                            </pattern>
                                                        </defs>
                                                        <rect id="Screen_Shot_2021-12-16_at_17.30.22"
                                                              data-name="Screen Shot 2021-12-16 at 17.30.22" width="40"
                                                              height="35" fill="url(#pattern)"/>
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
                                                                        Comment: {{$perApp->comment}}
                                                                        <br>
                                                                        Address: {{$perApp->address}}
                                                                        <br>
                                                                        Date: {{$perApp->date}}
                                                                        <br>
                                                                        Time: {{$perApp->time}}
                                                                        <br>
                                                                        From: {{App\Models\Admins::find($perApp->assignfrom)->name}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"
                                                             style="border-top: none !important; display: block;">
                                                            <div class="row mx-4 pb-4">
                                                                <div class="col-3 mx-auto">
                                                                    <button type="button" class="btn w-100 px-3"
                                                                            style=" color: #ffffff !important; background-color: #6C757D !important;border-radius: 8px !important;"
                                                                            data-bs-dismiss="modal"><b>Close</b>
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
                                    3
                                </div>
                            </div>
                            <div class="content ps-3">
                                <div class="overflow-div mt-3">
                                    <table class="table table-borderless">
                                        <thead>
                                        <tr class="sticky-class" style="border-bottom: 1px solid #70707050 !important;">
                                            <th scope="col">Datum</th>
                                            <th scope="col">Kundename</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Type</th>
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
                                                        <span class="submited-btn py-2 px-4">Submited</span>
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
                                                            <h4>Pendenzen Info</h4>
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
                                                                        Time:
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
                                                                    data-bs-dismiss="modal"><b>Close</b></button>

                                                            <a href="{{route('leadfamilyperson',[$taskId,'admin_id' => $admin_id,'pend_id' => $task->pid])}}">
                                                                <button type="button" class="btn px-3"
                                                                        style=" color: #ffffff !important; background-color: #6C757D !important;border-radius: 8px !important;"
                                                                        data-bs-dismiss="modal"><b>Open</b></button>
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
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6 g-0">
                        <div class="answered-div">
                            <div class="header px-3 px-sm-3 justify-content-between">
                                <div class="">
                                    <span>Answered Tasks</span>
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
                                                <input type="text" class="form-control" placeholder="Search by name" name="searchpend">
                                                <button type="submit" class="py-1 px-3 px-sm-4 px-md-5 ms-2 fw-bold border-0 search-button-task">
                                                    Search
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
                                                        <h6 class="m-1"><b>Client:</b> {{ucfirst($task->first_name)}}
                                                        </h6>
                                                        <h6 class="m-1"><b>Title:</b> {{$task->title}}</h6>
                                                        <h6 class="m-1"><b>Addressed
                                                                to:</b> {{\App\Models\Admins::find($task->admin_id)->name}}
                                                        </h6>
                                                        <h6 class="m-1"><b>Date & Time:</b> {{$task->updated_at}}</h6>
                                                        <h6 class="m-1"><b>Description:</b>
                                                            <span> {{$task->description }}</span></h6>
                                                        <a href="{{route('leadfamilyperson',['id' => $taskId,'admin_id' => $admin_id,'pend_id' => $pend_id])}}">
                                                            <button class="btn m-1"
                                                                    style="background-color: #0C71C3; color: #fff; font-weight: 600; padding-left: 8%; padding-right: 8%;">
                                                                Open
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
                                    <span>Open Tasks</span>
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
                                                <input type="text" class="form-control" placeholder="Search by name" name="searchopen">
                                                <button type="submit" class="py-1 px-3 px-sm-4 px-md-5 ms-2 fw-bold border-0 search-button-task">
                                                    Search
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
                                                        <h6 class="m-1"><b>Client: {{ucfirst($task->first_name)}}</b>
                                                        </h6>
                                                        <h6 class="m-1"><b>Title:</b> {{$task->title}}</h6>
                                                        <h6 class="m-1"><b>Addressed
                                                                to:</b> {{\App\Models\Admins::find($task->admin_id)->name}}
                                                        </h6>
                                                        <h6 class="m-1"><b>Date & Time:</b> {{$task->updated_at}}</h6>
                                                        <h6 class="m-1"><b>Description:</b>
                                                            <span> {{$task->description}} </span></h6>
                                                        <a href="{{route('leadfamilyperson',['id' => $taskId,'admin_id' => $admin_id,'pend_id' => $pend_id])}}">
                                                            <button class="btn m-1"
                                                                    style="background-color: #0C71C3; color: #fff; font-weight: 600; padding-left: 8%; padding-right: 8%;">
                                                                Open
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

                                    {{--                        <div class="answered-items ms-1 ms-sm-2 ms-md-4 me-2 me-sm-3 my-2">--}}
                                    {{--                            <div class="answ-head d-flex justify-content-between px-2 py-2"--}}
                                    {{--                                 style="cursor: pointer; align-items: center;" onclick="answOpenFunct1()">--}}
                                    {{--                                <div class="">--}}
                                    {{--                                            <span class="fw-600 fs-5">--}}
                                    {{--                                                Altin Ahmetaj--}}
                                    {{--                                            </span>--}}
                                    {{--                                </div>--}}
                                    {{--                                <div class="">--}}
                                    {{--                                            <span class="px-1">--}}
                                    {{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"--}}
                                    {{--                                                     viewBox="0 0 23.115 23.115">--}}
                                    {{--                                                    <g id="Group_1107" data-name="Group 1107"--}}
                                    {{--                                                       transform="translate(1 1)">--}}
                                    {{--                                                        <path id="Path_162" data-name="Path 162"--}}
                                    {{--                                                              d="M1257.6,1673.108a10.559,10.559,0,0,1-15.674,9.236c-.177-.1-4.611,1.322-4.611,1.322l1.554-3.875a10.558,10.558,0,1,1,18.731-6.683Z"--}}
                                    {{--                                                              transform="translate(-1236.48 -1662.55)" fill="none"--}}
                                    {{--                                                              stroke="#070707" stroke-linecap="round"--}}
                                    {{--                                                              stroke-linejoin="round" stroke-width="2" />--}}
                                    {{--                                                    </g>--}}
                                    {{--                                                </svg>--}}
                                    {{--                                            </span>--}}
                                    {{--                                    <span class="px-1">--}}
                                    {{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"--}}
                                    {{--                                                     viewBox="0 0 23.679 13.3">--}}
                                    {{--                                                    <g id="Group_1170" data-name="Group 1170"--}}
                                    {{--                                                       transform="translate(-996.011 -1301.161)">--}}
                                    {{--                                                        <path id="Path_1978" data-name="Path 1978"--}}
                                    {{--                                                              d="M0,0,9.679,9.718,0,19.436"--}}
                                    {{--                                                              transform="translate(998.133 1312.34) rotate(-90)"--}}
                                    {{--                                                              fill="none" stroke="#000" stroke-linecap="round"--}}
                                    {{--                                                              stroke-linejoin="round" stroke-width="3" />--}}
                                    {{--                                                    </g>--}}
                                    {{--                                                </svg>--}}
                                    {{--                                            </span>--}}
                                    {{--                                </div>--}}
                                    {{--                            </div>--}}
                                    {{--                            <div class="answ-cont px-2 pb-2" style="display: none;" id="answContent1">--}}
                                    {{--                                <div class="client-div">--}}
                                    {{--                                    <span class="fw-600">Client:</span>--}}
                                    {{--                                    <span>Enis Demolli</span>--}}
                                    {{--                                </div>--}}
                                    {{--                                <div class="title-div">--}}
                                    {{--                                    <span class="fw-600">Title:</span>--}}
                                    {{--                                    <span>Lorem Ipsum</span>--}}
                                    {{--                                </div>--}}
                                    {{--                                <div class="time-date-div">--}}
                                    {{--                                    <span class="fw-600">Date&Time:</span>--}}
                                    {{--                                    <span>03.02.2022 13:00Uhr</span>--}}
                                    {{--                                </div>--}}
                                    {{--                                <div class="description-div">--}}
                                    {{--                                    <span class="fw-600">Description:</span>--}}
                                    {{--                                    <span>Ich habe mit dem Mann den--}}
                                    {{--                                                Termin vereinbart. Die Frau wird bei der--}}
                                    {{--                                                Terminzeit anwesend sein. Er ist für den--}}
                                    {{--                                                Vergleich offen.</span>--}}
                                    {{--                                </div>--}}
                                    {{--                            </div>--}}
                                    {{--                        </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        {{--        <div class="row px-4 justify-content-center">--}}
        {{--            <div class="col-md-6 col-12 mb-3 pe-5">--}}
        {{--                <div style="background: #F7F7F7; border-radius: 25px; padding: 5%;">--}}
        {{--                    <div class="row">--}}
        {{--                        <div class="col-12" style="cursor: pointer;">--}}
        {{--                            <span style="color: #000; font-size: larger;"><b>Answered Tasks</b><span--}}
        {{--                                    style="color: #4EC590; padding-left: 10px;"><b>{{count($answered)}}</b></span></span>--}}
        {{--                            <br><br>--}}
        {{--                            <form action="{{route('tasks')}}" style="width: 100%;" method="post">--}}
        {{--                                @csrf--}}
        {{--                                <div class="input-group mb-3" style="border-radius: 8px !important;">--}}
        {{--                                    <input type="text" name="searchpend"--}}
        {{--                                           style=" font-weight: 500; border: transparent !important;"--}}
        {{--                                           placeholder="Search by name" class="form-control">--}}
        {{--                                    <input type="submit" class="btn"--}}
        {{--                                           style="background-color: #4EC590; color: #fff; font-weight: 600; padding-left: 8%; padding-right: 8%;"--}}
        {{--                                           value="Search">--}}
        {{--                                </div>--}}
        {{--                                <!-- <input type="text" name="searchpend" class="form-control" placeholder="Search by name">--}}
        {{--                                <input type="submit" class="btn btn-danger" value="Search"> -->--}}
        {{--                            </form>--}}

        {{--                        </div>--}}

        {{--                    </div>--}}
        {{--                    <br>--}}
        {{--                    <script>--}}
        {{--                        var intvaluecount = 1;--}}
        {{--                        var truefalsee = [];--}}

        {{--                        var intvaluecount2 = 1;--}}
        {{--                        var truefalsee2 = [];--}}
        {{--                    </script>--}}
        {{--                    <div id="collapse__">--}}
        {{--                        <div class="collapse2___ pe-3" style="height: 350px; overflow: scroll; overflow-x: hidden;">--}}
        {{--                            @foreach($answered as $task)--}}
        {{--                                @php--}}
        {{--                                    $leadss = $task->family_id * 1244;--}}
        {{--                                    $admin_id = Crypt::encrypt($task->admin_id * 1244);--}}

        {{--                                    $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);--}}
        {{--                                    $pend_id = $task->pid;--}}
        {{--                                @endphp--}}
        {{--                                <div style="background: #4EC590; color: #fff; border-radius: 8px; cursor: pointer;">--}}
        {{--                                    <a data-bs-toggle="collapse" id="demo23{{$taskId}}" style="text-decoration:none;">--}}
        {{--                                        <div class="px-3 py-2">--}}
        {{--                                            <h5 class="m-1">--}}
        {{--                                                <b>{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}} </b><span--}}
        {{--                                                    style="float: right;"><span><span class="px-2"--}}
        {{--                                                                                      style="font-size: 19px;"><i--}}
        {{--                                                                class="bi bi-chat justify-content-end"></i></span></span><span--}}
        {{--                                                        id="demo23span{{$taskId}}"--}}
        {{--                                                        class="bi bi-chevron-down"></span></span></h5>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}

        {{--                                    <div id="demo{{$taskId}}" class="collapse px-3 py-2">--}}
        {{--                                        <h6 class="m-1"><b>Client:</b> {{ucfirst($task->first_name)}}</h6>--}}
        {{--                                        <h6 class="m-1"><b>Title:</b> {{$task->title}}</h6>--}}
        {{--                                        <h6 class="m-1"><b>Addressed--}}
        {{--                                                to:</b> {{\App\Models\Admins::find($task->admin_id)->name}}</h6>--}}
        {{--                                        <h6 class="m-1"><b>Date & Time:</b> {{$task->updated_at}}</h6>--}}
        {{--                                        <h6 class="m-1"><b>Description:</b> <span> {{$task->description }}</span></h6>--}}
        {{--                                        <a href="{{route('leadfamilyperson',['id' => $taskId,'admin_id' => $admin_id,'pend_id' => $pend_id])}}">--}}
        {{--                                            <button class="btn m-1"--}}
        {{--                                                    style="background-color: #fff; color: #4EC590; font-weight: 600; padding-left: 8%; padding-right: 8%;">--}}
        {{--                                                Open--}}
        {{--                                            </button>--}}
        {{--                                        </a>--}}
        {{--                                    </div>--}}
        {{--                                    <script>--}}
        {{--                                        truefalsee["sss" + intvaluecount] = false;--}}
        {{--                                        $(document).ready(function () {--}}
        {{--                                            $("#demo23{{$taskId}}").click(function () {--}}

        {{--                                                $("#demo{{$taskId}}").collapse('toggle');--}}
        {{--                                                if (truefalsee["sss" + intvaluecount] === false) {--}}
        {{--                                                    $("#demo23span{{$taskId}}").addClass("bi bi-chevron-down bi-chevron-up");--}}
        {{--                                                    truefalsee["sss" + intvaluecount] = true;--}}
        {{--                                                } else {--}}
        {{--                                                    $("#demo23span{{$taskId}}").removeClass("bi bi-chevron-up");--}}
        {{--                                                    truefalsee["sss" + intvaluecount] = false;--}}
        {{--                                                }--}}
        {{--                                            });--}}
        {{--                                        });--}}
        {{--                                        intvaluecount++;--}}
        {{--                                    </script>--}}
        {{--                                </div>--}}
        {{--                                <br>--}}
        {{--                            @endforeach--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="col-md-6 col-12 mb-3 ps-5">--}}
        {{--                <div style="background: #f8f8f8;border-radius: 25px; padding: 5%;">--}}
        {{--                    <div class="row">--}}
        {{--                        <span style="color: #000; font-size: larger;"><b>Open Tasks</b><span--}}
        {{--                                style="color: #EF696A; padding-left: 10px;"><b>{{count($opened)}}</b></span></span>--}}
        {{--                        <br><br>--}}
        {{--                        <div class="col-12" style="cursor: pointer;" id="Offene_Aufgaben__1">--}}
        {{--                            <form action="{{route('tasks')}}" style="width: 100%;" method="post">--}}
        {{--                                @csrf--}}
        {{--                                <div class="input-group mb-3" style="border-radius: 8px !important;">--}}
        {{--                                    <input type="text" name="searchopen" placeholder="Search by name"--}}
        {{--                                           style=" font-weight: 500; border: transparent !important;"--}}
        {{--                                           class="form-control">--}}
        {{--                                    <input type="submit" class="btn"--}}
        {{--                                           style="background-color: #EF696A; color: #fff; font-weight: 600; padding-left: 8%; padding-right: 8%;"--}}
        {{--                                           value="Search">--}}
        {{--                                </div>--}}
        {{--                            </form>--}}

        {{--                        </div>--}}

        {{--                    </div>--}}
        {{--                    <br>--}}
        {{--                    <div id="first_collapse">--}}
        {{--                        <div class="collapse23___ pe-3" style="height: 350px; overflow: scroll; overflow-x: hidden;">--}}
        {{--                            @foreach($opened as $task)--}}
        {{--                                @php--}}
        {{--                                    $leadss = $task->family_id * 1244;--}}
        {{--                                    $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);--}}
        {{--                                    $pend_id = $task->pid;--}}
        {{--                                @endphp--}}

        {{--                                <div style="background: #EF696A; color: #fff; border-radius: 8px; cursor: pointer">--}}

        {{--                                    @php--}}
        {{--                                        $leadss = $task->admin_id * 1244;--}}
        {{--                                        $taskAdminId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);--}}

        {{--                                        $leadss = Auth::user()->id * 1244;--}}
        {{--                                        $authUserId= \Illuminate\Support\Facades\Crypt::encrypt($leadss);--}}
        {{--                                        $admin_id = \Illuminate\Support\Facades\Crypt::encrypt($task->admin_id * 1244);--}}
        {{--                                    @endphp--}}

        {{--                                    <a data-bs-toggle="collapse" id="demo23_2{{$authUserId}}"--}}
        {{--                                       style="text-decoration:none;">--}}
        {{--                                        <div class="px-3 py-2">--}}
        {{--                                            <h5 class="m-1" style="text-overflow: ellipsis; overflow:hidden;">--}}
        {{--                                                <b>{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}} </b>--}}
        {{--                                                <span style="float: right;">--}}
        {{--                                        <span--}}
        {{--                                            onclick="window.location.href='{{route('chat',[$taskAdminId,$authUserId])}}'">--}}
        {{--                                            <span class="px-2" style="font-size: 19px;">--}}
        {{--                                                <i class="bi bi-chat justify-content-end"></i>--}}
        {{--                                            </span>--}}
        {{--                                        </span>--}}
        {{--                                        <span id="demo23span_2{{$authUserId}}" class="bi bi-chevron-down"></span>--}}
        {{--                                    </span>--}}
        {{--                                            </h5>--}}
        {{--                                        </div>--}}
        {{--                                    </a>--}}


        {{--                                    <div id="demo_2{{$authUserId}}" class="collapse px-3 py-2">--}}
        {{--                                        <h6 class="m-1"><b>Client: {{ucfirst($task->first_name)}}</b></h6>--}}
        {{--                                        <h6 class="m-1"><b>Title:</b> {{$task->title}}</h6>--}}
        {{--                                        <h6 class="m-1"><b>Addressed--}}
        {{--                                                to:</b> {{\App\Models\Admins::find($task->admin_id)->name}}</h6>--}}
        {{--                                        <h6 class="m-1"><b>Date & Time:</b> {{$task->updated_at}}</h6>--}}
        {{--                                        <h6 class="m-1"><b>Description:</b> <span> {{$task->description}} </span></h6>--}}
        {{--                                        <a href="{{route('leadfamilyperson',['id' => $taskId,'admin_id' => $admin_id,'pend_id' => $pend_id])}}">--}}
        {{--                                            <button class="btn m-1"--}}
        {{--                                                    style="background-color: #fff; color: rgb(239, 105, 106); font-weight: 600; padding-left: 8%; padding-right: 8%;">--}}
        {{--                                                Open--}}
        {{--                                            </button>--}}
        {{--                                        </a>--}}

        {{--                                    </div>--}}
        {{--                                    <script>--}}
        {{--                                        truefalsee2["sss" + intvaluecount2] = false;--}}
        {{--                                        $(document).ready(function () {--}}
        {{--                                            $("#demo23_2{{$authUserId}}").click(function () {--}}

        {{--                                                $("#demo_2{{$authUserId}}").collapse('toggle');--}}
        {{--                                                if (truefalsee2["sss" + intvaluecount2] === false) {--}}
        {{--                                                    $("#demo23span_2{{$authUserId}}").addClass("bi bi-chevron-down bi-chevron-up");--}}
        {{--                                                    truefalsee2["sss" + intvaluecount2] = true;--}}
        {{--                                                } else {--}}
        {{--                                                    $("#demo23span_2{{$authUserId}}").removeClass("bi bi-chevron-up");--}}
        {{--                                                    truefalsee2["sss" + intvaluecount2] = false;--}}
        {{--                                                }--}}
        {{--                                            });--}}
        {{--                                        });--}}
        {{--                                        intvaluecount2++;--}}
        {{--                                    </script>--}}
        {{--                                </div>--}}

        {{--                                <br>--}}
        {{--                            @endforeach--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}

        {{--        </div>--}}
    @endif
@endsection
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
