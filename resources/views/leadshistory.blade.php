@extends('template.navbar')
@section('content')
@foreach($leads as $lead)
    <div class="row g-0 m-3 flexDirRow">
        <div class="col-3 pe-0 openLeadsFirstDiv">
            <div class="">
                <div class="whiteee p-3">
                    <div class="namme mb-2">
                        <span class="fs-4 fw-bold">{{$lead->first_name}} (19.1.1986)</span>
                    </div>
                    <div class="adresse row">
                        <div class="col-4 pe-0">
                            <span class="">Adresse:</span>
                        </div>
                        <div class="col ps-0">
                            <span class="grayyy1 fw-500 ">{{$lead->address}}</span>
                        </div>
                    </div>
                    <div class="haushalt row">
                        <div class="col-4 pe-0">
                            <span class="">Haushalt:</span>
                        </div>
                        <div class="col ps-0">
                            <span class="grayyy1 fw-500">{{$lead->number_of_persons}}</span>
                        </div>
                    </div>
                    <div class="grund row">
                        <div class="col-4 pe-0">
                            <span class="">Grund:</span>
                        </div>
                        <div class="col ps-0">
                            <span class="grayyy1 fw-500">@if($lead->info != null) {{$lead->info->grund}} @endif</span>
                        </div>
                    </div>
                    <div class="kampagne row">
                        <div class="col-4 pe-0">
                            <span class="">Kampagne:</span>
                        </div>
                        <div class="col ps-0">
                            <span class="grayyy1 fw-500">@if($lead->info != null) {{$lead->info->kampagne}} @endif</span>
                        </div>
                    </div>
                </div>
                <div class="grayyy" style="cursor: pointer;">
                    <div class="lead-offnen text-center py-2">
                        <span class="fs-4 fw-bold">Lead öffnen</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col px-0 receivedCol">
            <div class="py-0 py-sm-0 py-md-3 py-lg-3 py-xl-3 py-xxl-3 h-100">
                <div class="text-center hideTextMob">
                    <span class="openLeadsSpanText">Erhalten/Neu</span>
                </div>
                <div class="my-auto h-75">
                    <div
                        class="greyBorderDiv py-5 py-sm-5 py-md-0 py-lg-0 py-xl-0 py-xxl-0 mt-0 mt-sm-0 mt-md-2 mt-lg-2 mt-xxl-2 mt-xl-2 my-auto">
                        <div class="receivedDiv h-100 my-auto ps-0 ps-sm-0 ps-md-4 ps-lg-4 ps-xl-4 ps-xxl-4">
                        Empfangen
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col px-0 assignedToCol">
            <div class="py-0 py-sm-0 py-md-3 py-lg-3 py-xl-3 py-xxl-3 h-100">
                <div class="text-center hideTextMob">
                    <span class="openLeadsSpanText">Zugewiesen An</span>
                </div>
                <div class="my-auto h-75">
                @if($lead->assign_to_id != null)
                    <div
                        class="orangeBorderDiv py-5 py-sm-5 py-md-0 py-lg-0 py-xl-0 py-xxl-0 mt-0 mt-sm-0 mt-md-2 mt-lg-2 mt-xxl-2 mt-xl-2 my-auto">
                        <div
                            class="assignedToDiv h-100 my-auto ps-0 ps-sm-0 ps-md-4 ps-lg-4 ps-xl-4 ps-xxl-4 pt-5 pt-sm-5 pt-md-0 pt-lg-0 pt-xl-0 pt-xxl-0">
                            
                        </div>
                    </div>
                    @else
                    <div
                        class="orangeBorderDiv py-5 py-sm-5 py-md-0 py-lg-0 py-xl-0 py-xxl-0 mt-0 mt-sm-0 mt-md-2 mt-lg-2 mt-xxl-2 mt-xl-2 my-auto">
                        <div
                            class="assignedToDiv h-100 my-auto ps-0 ps-sm-0 ps-md-4 ps-lg-4 ps-xl-4 ps-xxl-4 pt-5 pt-sm-5 pt-md-0 pt-lg-0 pt-xl-0 pt-xxl-0">
                            
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @if($lead->rejected == 1)
        <div class="col px-0 lostCol">
            <div class="py-0 py-sm-0 py-md-3 py-lg-3 py-xl-3 py-xxl-3 h-100">
                <div class="text-center hideTextMob">
                    <span class="openLeadsSpanText">Hat Verloren</span>
                </div>
                <div class="my-auto h-75">
                    <div
                        class="redBorderDiv py-5 py-sm-5 py-md-0 py-lg-0 py-xl-0 py-xxl-0 mt-0 mt-sm-0 mt-md-2 mt-lg-2 mt-xxl-2 mt-xl-2 my-auto h-100">
                        <div
                            class="lostDiv my-auto h-100 justify-content-center ps-0 ps-sm-0 ps-md-4 ps-lg-4 ps-xl-4 ps-xxl-4 pt-5 pt-sm-5 pt-md-0 pt-lg-0 pt-xl-0 pt-xxl-0">
                            Hat Verloren
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col px-0 wonCol">
            <div class="py-0 py-sm-0 py-md-3 py-lg-3 py-xl-3 py-xxl-3 h-100">
                <div class="text-center hideTextMob">
                    <span class="openLeadsSpanText">Gewonnen</span>
                </div>
                <div class="my-auto h-75">
                    <div
                        class="greenBorderDiv py-5 py-sm-5 py-md-0 py-lg-0 py-xl-0 py-xxl-0 mt-0 mt-sm-0 mt-md-2 mt-lg-2 mt-xxl-2 mt-xl-2 my-auto">
                        <div
                            class="wonDiv my-auto h-100 pt-5 pt-sm-5 pt-md-0 pt-lg-0 pt-xl-0 pt-xxl-0 ps-0 ps-sm-0 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 ms-0 ms-sm-0 ms-md-5 ms-lg-5 ms-xl-5 ms-xxl-5">
                            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="59.804" height="43.804"
                                viewBox="0 0 59.804 43.804">
                                <path id="Path_379" data-name="Path 379"
                                    d="M8370.12,1003.732l20.094,20.423,35.472-40.187"
                                    transform="translate(-8367.999 -981.851)" fill="none" stroke="#feffff"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @elseif($lead->rejected == 0 && $lead->assign_to_id != null && $lead->assign_to_id != 0 && $lead->appointment_date != null)
        <div class="col px-0 lostCol">
            <div class="py-0 py-sm-0 py-md-3 py-lg-3 py-xl-3 py-xxl-3 h-100">
                <div class="text-center hideTextMob">
                    <span class="openLeadsSpanText">Hat Verloren</span>
                </div>
                <div class="my-auto h-75">
                    <div
                        class="redBorderDiv py-5 py-sm-5 py-md-0 py-lg-0 py-xl-0 py-xxl-0 mt-0 mt-sm-0 mt-md-2 mt-lg-2 mt-xxl-2 mt-xl-2 my-auto h-100">
                        <div
                            class="lostDiv my-auto h-100 justify-content-center ps-0 ps-sm-0 ps-md-4 ps-lg-4 ps-xl-4 ps-xxl-4 pt-5 pt-sm-5 pt-md-0 pt-lg-0 pt-xl-0 pt-xxl-0">
                            Hat Verloren
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col px-0 wonCol">
            <div class="py-0 py-sm-0 py-md-3 py-lg-3 py-xl-3 py-xxl-3 h-100">
                <div class="text-center hideTextMob">
                    <span class="openLeadsSpanText">Gewonnen</span>
                </div>
                <div class="my-auto h-75">
                    <div
                        class="greenBorderDiv py-5 py-sm-5 py-md-0 py-lg-0 py-xl-0 py-xxl-0 mt-0 mt-sm-0 mt-md-2 mt-lg-2 mt-xxl-2 mt-xl-2 my-auto">
                        <div
                            class="wonDiv my-auto h-100 pt-5 pt-sm-5 pt-md-0 pt-lg-0 pt-xl-0 pt-xxl-0 ps-0 ps-sm-0 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 ms-0 ms-sm-0 ms-md-5 ms-lg-5 ms-xl-5 ms-xxl-5">
                            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="59.804" height="43.804"
                                viewBox="0 0 59.804 43.804">
                                <path id="Path_379" data-name="Path 379"
                                    d="M8370.12,1003.732l20.094,20.423,35.472-40.187"
                                    transform="translate(-8367.999 -981.851)" fill="none" stroke="#feffff"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="col px-0 lostCol">
            <div class="py-0 py-sm-0 py-md-3 py-lg-3 py-xl-3 py-xxl-3 h-100">
                <div class="text-center hideTextMob">
                    <span class="openLeadsSpanText">Hat Verloren</span>
                </div>
                <div class="my-auto h-75">
                    <div
                        class="redBorderDiv py-5 py-sm-5 py-md-0 py-lg-0 py-xl-0 py-xxl-0 mt-0 mt-sm-0 mt-md-2 mt-lg-2 mt-xxl-2 mt-xl-2 my-auto h-100">
                        <div
                            class="lostDiv my-auto h-100 justify-content-center ps-0 ps-sm-0 ps-md-4 ps-lg-4 ps-xl-4 ps-xxl-4 pt-5 pt-sm-5 pt-md-0 pt-lg-0 pt-xl-0 pt-xxl-0">
                            Hat Verloren
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col px-0 wonCol">
            <div class="py-0 py-sm-0 py-md-3 py-lg-3 py-xl-3 py-xxl-3 h-100">
                <div class="text-center hideTextMob">
                    <span class="openLeadsSpanText">Gewonnen</span>
                </div>
                <div class="my-auto h-75">
                    <div
                        class="greenBorderDiv py-5 py-sm-5 py-md-0 py-lg-0 py-xl-0 py-xxl-0 mt-0 mt-sm-0 mt-md-2 mt-lg-2 mt-xxl-2 mt-xl-2 my-auto">
                        <div
                            class="wonDiv my-auto h-100 pt-5 pt-sm-5 pt-md-0 pt-lg-0 pt-xl-0 pt-xxl-0 ps-0 ps-sm-0 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 ms-0 ms-sm-0 ms-md-5 ms-lg-5 ms-xl-5 ms-xxl-5">
                            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="59.804" height="43.804"
                                viewBox="0 0 59.804 43.804">
                                <path id="Path_379" data-name="Path 379"
                                    d="M8370.12,1003.732l20.094,20.423,35.472-40.187"
                                    transform="translate(-8367.999 -981.851)" fill="none" stroke="#feffff"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
@endforeach
    <style>
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

        .lead-statistics-header {
            background-color: #F7F7F7;
            border-bottom-left-radius: 0px !important;
            border-bottom-right-radius: 0px !important;
            border-top-left-radius: 30px !important;
            border-top-right-radius: 30px !important;
        }

        .lead-statistics {
            background-color: #F7F7F7;
            border-bottom-left-radius: 30px !important;
            border-bottom-right-radius: 30px !important;
            border-top-left-radius: 0px !important;
            border-top-right-radius: 0px !important;
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

        @media (max-width: 575.99px) {
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


@endsection