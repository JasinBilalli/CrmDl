@extends('template.navbar')
@section('content')
@foreach($leads as $lead)
<div class="p-3 text-center d-flex justify-content-center">
<div class="row col-10">
        <div class="col-3 pe-0 openLeadsFirstDiv">
            <div class="">
                <div class="whiteee p-3">
                    <div class="namme mb-2">
                        <span class="fs-4 fw-bold">{{$lead->first_name}}</span>
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
                            <span class="grayyy1 fw-500">{{$lead->number_of_persons}} Personen</span>
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
            <div class="py-3 h-100">
                <div class="text-center">
                    <span class="openLeadsSpanText">Received/New</span>
                </div>
                <div class="my-auto h-75">
                    <div class="greyBorderDiv mt-2 my-auto">
                        <div class="receivedDiv h-100 my-auto ps-4">
                            Received
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col px-0 assignedToCol">
            <div class="py-3 h-100" >
                <div class="text-center">
                    <span class="openLeadsSpanText">Assigned to</span>
                </div>
                <div class="my-auto h-75">
                    @if($lead->assign_to_id != null)
                    <div class="orangeBorderDiv  mt-2 my-auto" style="background-color: #FEC278;">
                        <div class="assignedToDiv h-100 my-auto ps-4">
                            {{$lead->admin->name}}
                        </div>
                    </div>
                    @else
                    <div class="orangeBorderDiv  mt-2 my-auto">
                        <div class="assignedToDiv h-100 my-auto ps-4">

                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @if($lead->rejected == 1)
        <div class="col-6 px-0 lostCol">
            <div class="py-3 h-100">
                <div class="text-center">
                    <span class="openLeadsSpanText">Lost</span>
                </div>
                <div class="my-auto h-75">
                    <div class="redBorderDiv mt-2 my-auto h-100" style="background-color: #FF6262;">
                        <div class="lostDiv my-auto h-100 justify-content-center ps-4">
                            Lost
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col px-0 wonCol" style="display: none;">
            <div class="py-3 h-100">
                <div class="text-center">
                    <span class="openLeadsSpanText">Won</span>
                </div>
                <div class="my-auto h-75">
                    <div class="greenBorderDiv mt-2 my-auto">
                        <div class="wonDiv my-auto h-100 ps-5 ms-5">
                            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="59.804" height="43.804" viewBox="0 0 59.804 43.804">
                                <path id="Path_379" data-name="Path 379" d="M8370.12,1003.732l20.094,20.423,35.472-40.187" transform="translate(-8367.999 -981.851)" fill="none" stroke="#feffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @elseif($lead->rejected == 0 && $lead->assign_to_id != null && $lead->assign_to_id != 0 && $lead->appointment_date != null)
        <div class="col px-0 lostCol" style="display: none;">
            <div class="py-3 h-100">
                <div class="text-center">
                    <span class="openLeadsSpanText">Lost</span>
                </div>
                <div class="my-auto h-75">
                    <div class="redBorderDiv mt-2 my-auto h-100">
                        <div class="lostDiv my-auto h-100 justify-content-center ps-4">
                            Lost
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 px-0 wonCol">
            <div class="py-3 h-100">
                <div class="text-center">
                    <span class="openLeadsSpanText">Won</span>
                </div>
                <div class="my-auto h-75">
                    <div class="greenBorderDiv mt-2 my-auto" style="background-color: #4EC590;">
                        <div class="wonDiv my-auto h-100 ps-5 ms-5">
                            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="59.804" height="43.804" viewBox="0 0 59.804 43.804">
                                <path id="Path_379" data-name="Path 379" d="M8370.12,1003.732l20.094,20.423,35.472-40.187" transform="translate(-8367.999 -981.851)" fill="none" stroke="#feffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="col px-0 lostCol">
            <div class="py-3 h-100">
                <div class="text-center">
                    <span class="openLeadsSpanText">Lost</span>
                </div>
                <div class="my-auto h-75">
                    <div class="redBorderDiv mt-2 my-auto h-100">
                        <div class="lostDiv my-auto h-100 justify-content-center ps-4">
                            Lost
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col px-0 wonCol">
            <div class="py-3 h-100">
                <div class="text-center">
                    <span class="openLeadsSpanText">Won</span>
                </div>
                <div class="my-auto h-75">
                    <div class="greenBorderDiv mt-2 my-auto">
                        <div class="wonDiv my-auto h-100 ps-5 ms-5">
                            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="59.804" height="43.804" viewBox="0 0 59.804 43.804">
                                <path id="Path_379" data-name="Path 379" d="M8370.12,1003.732l20.094,20.423,35.472-40.187" transform="translate(-8367.999 -981.851)" fill="none" stroke="#feffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
    @endforeach
    @if($leads->count() > 1)
    <div class="d-flex justify-content-center mt-4"><nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        @if($leads->currentPage() > 1)
        <span> <a href="{{route('leadshistory',['page' => $leads->currentPage() -1])}}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"></span>
        « Previous
            @endif

                </span> <a href="{{route('leadshistory',['page' => $leads->currentPage() +1 ,])}}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Next »
                </a></div> <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between"><div><p class="text-sm text-gray-700 leading-5">

                </p></div> <div></div></div></nav>
                @endif
@endsection

<style>
    html, body{
        overflow-x: hidden !important;
    }
</style>
<style>
    /*Per Notification */
    .coloriii a{
        color: black !important;
    }
</style>
