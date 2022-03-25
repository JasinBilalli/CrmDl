@extends('template.navbar')
@section('content')

    <title>Termine Annehmen</title>

<section class="my-0 my-sm-5">
    <div class="container-fluid">
        <div class="wrapper-div  px-4 py-0 py-sm-4 mx-0 mx-sm-3">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-6">
                    <div class="map-div mx-1 mx-sm-4 my-3">
                        <div class="mapouter">
                            <div class="gmap_canvas img-fluid">
                                <iframe width="100%" height="100%" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q='+{{$lead->address}}+'&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="my-3">
                        <div class="py-1">
                            <div class="mx-3">
                                    <span class="fs-3 fw-bold text-color-header">
                                         {{$lead->first_name}} {{$lead->last_name}}
                                    </span>
                            </div>
                            <div class="mx-3">
                                    <span class="fs-6 text-color-header">
                                        <span class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12.587" height="16.243"
                                                 viewBox="0 0 8.587 12.243">
                                                <path id="Path_170" data-name="Path 170"
                                                      d="M1507.522,2353.695l.285-.4c.45-.637.916-1.3,1.32-1.908a17.1,17.1,0,0,0,1.607-2.977,3.3,3.3,0,0,0,.287-1.836,3.541,3.541,0,0,0-3.492-2.981,3.5,3.5,0,0,0-2.866,1.494,3.146,3.146,0,0,0-.606,2.37,6.507,6.507,0,0,0,.733,1.932,32.418,32.418,0,0,0,2.511,4.006c.072.1.145.2.22.3m.009-9.063h.024a2.481,2.481,0,0,1-.023,4.963h-.028a2.486,2.486,0,0,1-2.446-2.508,2.475,2.475,0,0,1,2.474-2.455m0,9.964c-.23-.312-.449-.6-.66-.9a32.713,32.713,0,0,1-2.552-4.072,7.013,7.013,0,0,1-.785-2.091,3.7,3.7,0,0,1,.695-2.752,4.05,4.05,0,0,1,7.31,1.7,3.861,3.861,0,0,1-.319,2.12,17.67,17.67,0,0,1-1.656,3.068C1508.941,2352.621,1508.181,2353.663,1507.534,2354.6Zm0-9.438a1.955,1.955,0,0,0-.021,3.91h.023a1.955,1.955,0,0,0,.018-3.91Z"
                                                      transform="translate(-1503.243 -2342.783)" fill="#656565"
                                                      stroke="#656565" stroke-width="0.5" />
                                            </svg>
                                        </span>
                                        {{$lead->address}}, {{$lead->city}}
                                    </span>
                            </div>
                        </div>
                        @if($lead->assigned != 0)
                        <div class="info-divv px-2 my-3">
                            <div class="row">
                                <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-4">
{{--                                    <div class="white-thingy my-2">--}}
{{--                                        <div class="text-div py-3 ps-2">--}}
{{--                                            <span class="fw-600 ">Agent:</span> <span class="fs-6">{{$lead->agent}}</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="white-thingy my-2">--}}
{{--                                        <div class="text-div py-3 ps-2">--}}
{{--                                            <span class="fw-600 ">Berater:</span> <span class="fs-6">{{$lead->berater}}</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">Vorname:</span> <span class="fs-6">{{$lead->first_name}} </span>
                                        </div>
                                    </div>
                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">Nachname:</span> <span class="fs-6">{{$lead->last_name}}</span>
                                        </div>
                                    </div>
                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">Nationalitat:</span> <span
                                                class="fs-6">{{$lead->nationality}}</span>
                                        </div>
                                    </div>
                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">Sprache: </span><span class="fs-6">{{$lead->sprache}}</span>
                                        </div>
                                    </div>
                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">Tel. Privat</span> <span class="fs-6">{{$lead->telephone}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">Datum:</span> <span class="fs-6">{{$lead->appointment_date}}</span>
                                        </div>
                                    </div>
                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">Zeit:</span> <span class="fs-6">{{$lead->time}}</span>
                                        </div>
                                    </div>
                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">Tag:</span> <span class="fs-6">{{\Carbon\Carbon::parse($lead->appointment_date)->format('l')}}</span>
                                        </div>
                                    </div>
                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">Personen:</span> <span class="fs-6">{{$lead->number_of_persons}}</span>
                                        </div>
                                    </div>
                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">Strasse:</span> <span class="fs-6">{{$lead->address}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">Nr:</span> <span class="fs-6">{{$lead->nr}}</span>
                                        </div>
                                    </div>
                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">Ort</span> <span class="fs-6">{{$lead->city}}</span>
                                        </div>
                                    </div>
                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">PLZ:</span> <span class="fs-6">{{$lead->postal_code}}</span>
                                        </div>
                                    </div>

                                    <div class="white-thingy my-2">
                                        <div class="text-div py-3 ps-2">
                                            <span class="fw-600 ">Zufriedenheit:</span> <span class="fs-6">{{$lead->zufriedenheit}}</span>
                                        </div>
                                    </div>
{{--                                    <div class="white-thingy my-2">--}}
{{--                                        <div class="text-div py-3 ps-2">--}}
{{--                                            <span class="fw-600 ">Gesundheit:</span><span class="fs-6">{{$lead->gesundheit}}</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                </div>
                            </div>
                            <div class="white-thingy my-2">
                                <div class="text-div py-3 ps-2">
                                    <span class="fw-600 ">Bemerkung:</span> <span class="fs-6">{{$lead->bemerkung}}</span>
                                </div>
                            </div>
                        </div>
                            @php
                                $leadss = $lead->id * 1244;
                                $leadId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                            @endphp
                            <div class="button-div d-flex justify-content-center">
                                <a style="text-decoration: none" href="{{route('dealnotclosed',Crypt::decrypt($leadId) / 1244)}}">
                                <button class="close-btn py-2 px-2 mx-2">
                                    Schliessen
                                </button>
                                </a>
                                <a style="text-decoration: none" href="{{route('dealclosed',$leadId)}}">
                                <button class="go-btn py-2 px-2 mx-2">
                                    Weiter
                                </button>
                                </a>
                            </div>
                        @elseif($lead->assigned != 1)
                            @php
                                $leadss = $lead->id * 1244;
                                $leadId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                            @endphp
                            <a style="text-decoration: none" href="{{route('acceptleadinfo',$leadId)}}">
                                <button class="go-btn py-2 mx-2">
                                    Annehmen
                                </button>
                            </a>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



@endsection




<style>
    .close-btn {
        color: #FF0D13;
        font-weight: 600;
        background-color: #fff;
        border: 1px #FF0D13 solid;
        border-radius: 13px;
        width: 100px;
    }
    .go-btn {
        color: #fff;
        font-weight: 600;
        background-color: #63D4A4;
        border: 1px #63D4A4 solid;
        border-radius: 13px;
        width: 100px;
    }
    .text-div {
        font-size: 13px;
    }
    .white-thingy {
        background-color: #fff;
        border-radius: 10px;

    }

    .fw-600 {
        font-weight: 600;
    }

    .wrapper-div {
        background-color: #EFEFEF;
        border-radius: 25px;
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

    .text-color-header {
        color: #656565;
    }

    .people-icon-div {
        background-color: #525353;
        margin: 3px;
    }

    .static-btn {
        background-color: #F0F0EF !important;
        border-radius: 8px !important;
    }

    .people-svg-span {
        border-radius: 8px;
    }

     .mapouter {
         position: relative;
         text-align: right;
         width: 100%;
         height: 70vh;
     }
    @media (max-width: 575.98px) {
        .mapouter {
            height:40vh;
        }
        .wrapper-div {
            border-radius: 0px;
        }
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 60vh;
        width: 100%;
        border-radius: 21px !important;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

</style>


<style>
    /*Per Notification */
    .coloriii a{
        color: black !important;
    }
</style>


