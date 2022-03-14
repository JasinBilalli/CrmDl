@extends('template.navbar')
@section('content')
    <leads></leads>
    @php $user = auth(); @endphp
    @if($user->user()->hasRole('admin') || $user->user()->hasRole('salesmanager'))
        <div class="container-fluid p-0">
            <div class="col-12 g-0">
                <div class="import-leads-div px-3 m-1">
                    <form action="{{route('importleads')}}" class="mb-2" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="head py-3">
                            <span class="fs-5 fw-bold">Leads Importieren</span>
                        </div>
                        <div class="content py-3">
                            <input type="file" class="form-control" name="file" id="file">
                            <input type="submit" class="mt-2 btn py-2" value="Senden"
                                   style="background-color: #0C71C3; color: #ffffff; font-weight: bold; border: none; border-radius: 12px;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

    @php $csrf_token = csrf_token();@endphp



@endsection




<style scoped>
    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 900px !important;
        }

        .modaldialogg {
            max-width: 500px !important;
            top: 10%;
        }
    }
</style>
<style>
    /*Per Notification */
    .coloriii a {
        color: black !important;
    }
</style>

<script>
    var ids = [];
    var cnt = 0;

    function getid(x) {
        ids[cnt] = x.value;
        cnt++;
    }

    window.data = @json(compact('csrf_token'))
    // function callModalFunct() {
    //             document.getElementById("mod01").style.display = "block";
    //         }
    //         function callModalFunct1() {
    //             document.getElementById("mod02").style.display = "block";
    //         }
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@200;800;900&display=swap');

    body {
        font-family: 'Montserrat', sans-serif;
        overflow-x: hidden !important;
    }

    .grayyy1 {
        color: #88889D;
    }

    .fw-500 {
        font-weight: 500;
    }

    .assigned-items {
        background-color: #EFEFEF;
        border-radius: 15px;
    }

    .assigned-items .button-div button {
        background-color: #0C71C3;
        color: #fff;
        border-radius: 8px;
    }

    /* overflow-scroll divvvvvvvvv */
    .overflow-div {
        padding-right: 15px;
        height: 600px !important;
        overflow: auto;
    }

    .overflow-div::-webkit-scrollbar {
        width: 0px;
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


    .assigned-leads {
        height: 90vh;
    }

    .assigned-leads .header {
        /* border-bottom: 1px solid #70707050; */
        /* border-top: 1px solid #70707050; */
        /* border-left: 1px solid #70707050; */
        display: flex;
        align-items: center;
        font-weight: bold;
        height: 60px;
        background-color: #fff;
    }

    .assigned-leads .content {
        background-color: #EFEFEF;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        border-top-left-radius: 10px;
        border-top-right-radius: 0px;
    }


    .lead-statistics {
        /* height: 90vh; */
        background-color: #fff;
        /* border-left: 1px solid #70707050; */
    }

    .lead-statistics .header {
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

    .lead-statistics .content {
    }

    @media (max-width: 575.98px) {
        .overflow-div {
            padding-right: 5px;
        }

    }
</style>


{{--Else--}}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@200;800;900&display=swap');

    body {
        font-family: 'Montserrat', sans-serif;
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

    .grayyy1 {
        color: #88889D;
    }

    .fw-500 {
        font-weight: 500;
    }

    .assigned-items {
        background-color: #fff;
        border-radius: 15px;
    }

    .assigned-items1 .button-div button {
        background-color: #0C71C3;
        color: #fff;
        border-radius: 8px;
    }

    /* overflow-scroll divvvvvvvvv */
    .overflow-div1 {
        padding-right: 15px;
        height: 560px !important;
        overflow: auto;
    }

    .overflow-div1::-webkit-scrollbar {
        width: 0px;
    }

    /* Track */
    .overflow-div1::-webkit-scrollbar-track {
        background: #EFEFEF !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-div1::-webkit-scrollbar-thumb {
        background: #0C71C3;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-div1::-webkit-scrollbar-thumb:hover {
        background: #0C71C3;
        border-radius: 10px;
    }

    .form-check .form-check-input[type=checkbox] {
        border-radius: .25em;
        height: 29px;
        width: 29px;
    }


    .import-leads-div {
        /* border-top: 1px solid #70707050; */
        background-color: #EFEFEF;
        border-radius: 10px;
        /* height: 25vh; */
    }
    .form-remove-mb {
        margin-block-end: 0rem !important;
    }

    .assigned-leads1 {
        height: auto;
    }

    .assigned-leads1 .header {
        /* border-bottom: 1px solid #70707050; */
        /* border-top: 1px solid #70707050; */
        /* border-left: 1px solid #70707050; */
        display: flex;
        align-items: center;
        font-weight: bold;
        height: 60px;
        background-color: #fff;
    }

    .assigned-leads1 .content {
        background-color: #EFEFEF;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        border-top-left-radius: 10px;
        border-top-right-radius: 0px;
    }

    .assigned-leads1 .button-div button {
        background-color: #0C71C3;
        color: #fff;
        font-weight: bold;
        border: none;
        border-radius: 12px;
    }

    .lead-statistics1 {
        height: max-content;
        background-color: #fff;
        border-bottom-right-radius: 8px !important;
        border-bottom-left-radius: 8px !important;
        /* border-left: 1px solid #70707050; */
    }

    .lead-statistics1 .header {
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
    .content-wrapper {
        background-color: #EFEFEF !important;
        height: 676px;
        border-radius: 10px;
    }
    .content-wrapper1 {
        background-color: #EFEFEF !important;
        height: 614px;
        border-radius: 10px;
    }

    .lead-statistics1 .content {
        border-top-left-radius: 8px !important;
        border-top-right-radius: 8px !important;
    }

    @media (max-width: 991.98px) {
        .overflow-div {
            padding-right: 5px;
        }
        .content-wrapper {
            height: auto;
        }
        .content-wrapper1 {
            height: auto;
        }
        .lead-statistics {
            height: auto;
        }
        .lead-statistics1 {
            height: auto;
        }
    }
</style>

{{--Mobile Leads Style--}}
<style>
    .gray-div-1 {
        color: #88889D;
    }

    .assigned-leads-div-11 {
        border-radius: 0;
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

    .white-divv {
        background-color: #fff;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }

    .lead-offnen-new {
        background-color: #0C71C3;
        color: #fff;
        border-bottom-left-radius: 15px !important;
        border-bottom-right-radius: 15px !important;
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

    .form-check .form-check-input[type=checkbox] {
        border-radius: 0.25em;
        height: 29px;
        width: 29px;
    }
    /*.mobile-leads {*/
    /*    display: none;*/
    /*}*/
    /*.desktop-leads {*/
    /*    display: block;*/
    /*}*/
    @media (max-width: 575.98px) {
        .namme span {
            font-size: 1.25rem !important;
        }
        body {
            background-color: #EFEFEF !important;
        }
        .assigned-items {
            background-color: #fff !important;
        }
        .assigned-items .button-div button {
            width: 100%;
            background-color: #0C71C3;
            color: #fff;
            border-bottom-left-radius: 15px !important;
            border-bottom-right-radius: 15px !important;
            border-top-left-radius: 0px !important;
            border-top-right-radius: 0px !important;
        }
        .modal-content {
            border-radius: 0 !important;
        }
        .assigned-items .button-div button {
            font-size:  1.25rem !important;
        }
        .assigned-leads1 .content .overflow-div1 {
            overflow-x: hidden !important;
        }

    }
</style>
