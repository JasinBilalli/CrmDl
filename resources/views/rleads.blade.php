@extends('template.navbar')
@section('content')
<div class="row g-0 mx-2">
    <div class="col-12 col-md-12 col-lg-12 ">
        <div class="pending-divv m-2">
            @if(!Auth::guard('admins')->user()->hasRole('fs'))
            <div class="header justify-content-between">
                <div class="d-flex">
                    <div class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30"  fill="currentColor" class="bi bi-clipboard-x" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z" />
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                        </svg>
                    </div>
                    <div class="txt-01">
                        <span class="ps-2">Abgelehnte Leads </span>
                    </div>
                </div>
                <div class="h-100 fs-5 px-4 count">
                    6
                </div>
            </div>
            <div class="content px-3">
                <div class="overflow-div pe-3">
                    <table class="table table-22 table-borderless">
                        <thead>
                            <tr class="sticky-class">
                                <th scope="col">Vorname</th>
                                <th scope="col">Telefonnummer</th>
                                <th scope="col">Anzahl der Personen</th>
                                <th scope="col">Grund</th>
                            </tr>
                        </thead>
                        <tbody id="body-table-edit">
                            @foreach($leads as $lead)
                            <tr class="table-content" style="cursor: pointer">
                                <td scope="row">{{$lead->first_name}}</td>
                                <td>{{$lead->telephone}}</td>
                                <td>{{$lead->number_of_persons}}</td>
                                <td>{{$lead->status}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>


@endsection

<style>
    td {
        padding-top: 15px !important;
        padding-bottom: 15px !important;
    }

    th {
        padding-top: 15px !important;
        padding-bottom: 15px !important;
    }

    .txt-01 {
        font-size: 1.1rem;
        font-weight: 600;
        padding-top: 0.3rem;
        padding-bottom: 0.3rem;
    }

    .overflow-div {
        /* padding-right: 15px; */
    }

    .overflow-div::-webkit-scrollbar {
        width: 7px;
        height: 7px;
    }

    /* Track */
    .overflow-div::-webkit-scrollbar-track {
        background: #fff !important;
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

    .pending-divv .header {
        /* border-bottom: 1px solid #70707050; */
        /* border-top: 1px solid #70707050; */
        /* border-right: 1px solid #70707050; */
        /* border-left: 1px solid #70707050; */
        display: flex;
        align-items: center;
        font-weight: bold;
        height: 60px;
        background-color: #fff;
    }

    .pending-divv .content {
        height: 62vh;
        min-height: 500px;
        background-color: #EFEFEF;
        border-top-left-radius: 10px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .pending-divv .content .overflow-div {
        height: 60vh;
        min-height: 460px;
        overflow: auto;
        background-color: #EFEFEF;
        /* padding: 0 !important; */
    }

    .count {
        background-color: #EFEFEF;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        vertical-align: middle;
        display: flex;
        align-items: center;
    }

    .table-22 td:first-child {
        border-top-left-radius: 15px;
    }

    .table-22 td:last-child {
        border-top-right-radius: 15px;
    }

    .table-22 td:first-child {
        border-bottom-left-radius: 15px;
    }

    .table-22 td:last-child {
        border-bottom-right-radius: 15px;
    }

    .table-22 tr {
        background-color: #fff;
    }

    .sticky-class {
        font-weight: 500 !important;
        color: #76767690 !important;
        position: sticky !important;
        top: 0;
        background-color: #EFEFEF !important;
    }

    .table-content {
        /* border-bottom: 0.5px solid #70707050 !important; */
        border-bottom: 5px solid #EFEFEF;
        font-weight: 600 !important;
        color: #434343;
        border-radius: 5px !important;
    }
</style>

<script>
    var ids = [];
    var cnt = 0;

    function getid(x) {
        ids[cnt] = x.value;
        cnt++;
    }
    // function callModalFunct() {
    //             document.getElementById("mod01").style.display = "block";
    //         }
    //         function callModalFunct1() {
    //             document.getElementById("mod02").style.display = "block";
    //         }
</script>
<style>
    /*Per Notification */
    .coloriii a {
        color: black !important;
    }
</style>