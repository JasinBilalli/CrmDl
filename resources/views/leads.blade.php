@extends('template.navbar')
@section('content')
    <leads></leads>
    @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('salesmanager'))
        <div class="container-fluid p-0">
            <div class="col-12 g-0">
                <div class="import-leads-div  px-3">
                    <form action="{{route('importleads')}}" enctype="multipart/form-data" method="post">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>


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
        height: 80vh !important;
        overflow: auto;
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


    .assigned-leads {
        height: 90vh;
    }

    .assigned-leads .header {
        border-bottom: 1px solid #70707050;
        border-top: 1px solid #70707050;
        border-left: 1px solid #70707050;
        display: flex;
        align-items: center;
        font-weight: bold;
        height: 60px;
        background-color: #EFEFEF;
    }

    .assigned-leads .content {
    }


    .lead-statistics {
        height: 90vh;
        background-color: #EFEFEF;
        border-left: 1px solid #70707050;
    }

    .lead-statistics .header {
        border-bottom: 1px solid #70707050;
        border-top: 1px solid #70707050;
        /* border-right: 1px solid #70707050; */
        /* border-left: 1px solid #70707050; */
        display: flex;
        align-items: center;
        font-weight: bold;
        height: 60px;
        background-color: #EFEFEF;
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

    .assigned-items1 .button-div button {
        background-color: #0C71C3;
        color: #fff;
        border-radius: 8px;
    }

    /* overflow-scroll divvvvvvvvv */
    .overflow-div1 {
        padding-right: 15px;
        height: 75vh !important;
        overflow: auto;
    }

    .overflow-div1::-webkit-scrollbar {
        width: 7px;
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
        border-top: 1px solid #70707050;
        background-color: #EFEFEF;
        height: 25vh;
    }

    .assigned-leads1 {
        height: 100vh;
    }

    .assigned-leads1 .header {
        border-bottom: 1px solid #70707050;
        border-top: 1px solid #70707050;
        border-left: 1px solid #70707050;
        display: flex;
        align-items: center;
        font-weight: bold;
        height: 60px;
        background-color: #EFEFEF;
    }

    .assigned-leads1 .content {
    }

    .assigned-leads1 .button-div button {
        background-color: #0C71C3;
        color: #fff;
        font-weight: bold;
        border: none;
        border-radius: 12px;
    }

    .lead-statistics1 {
        height: 100vh;
        background-color: #EFEFEF;
        border-left: 1px solid #70707050;
    }

    .lead-statistics1 .header {
        border-bottom: 1px solid #70707050;
        border-top: 1px solid #70707050;
        /* border-right: 1px solid #70707050; */
        /* border-left: 1px solid #70707050; */
        display: flex;
        align-items: center;
        font-weight: bold;
        height: 60px;
        background-color: #EFEFEF;
    }

    .lead-statistics1 .content {
    }

    @media (max-width: 575.98px) {
        .overflow-div {
            padding-right: 5px;
        }
    }
</style>
