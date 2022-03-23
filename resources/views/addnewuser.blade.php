@if(Auth::guard('admins')->user()->hasRole('admin'))
    @extends('template.navbar')
    @section('content')
        <title>Registrieren</title>
<section style="display:flex; justify-content: center; width: 100%;">
    <div class="col-12 col-sm-10 col-md-5 my-auto p-5 boxShadowMob" style="border-radius: 39px;position: absolute; top: 12%; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
        <div class="">
            <form class="form1" method="post" action="{{route('registernewuser')}}" onsubmit ="return verifyPassword()">
                @csrf
                <div class="text-center my-3">
                    <div class="">
                        <span class="fs-4 lh-1" style="color: #707070;">
                            <b>Registrieren</b>
                        </span>
                    </div>
                </div>
                <input name="addedroles" id="addedroles" style="display:none" type="number" value="0">
                <br>
                <div class="input-group mb-3">
                    <input placeholder="Vorname" autocomplete="off" type="text" name="user_name" class="form-control"
                           aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input placeholder="Email" autocomplete="off" type="text" name="user_email" class="form-control"
                           aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input placeholder="Telefonnummer" autocomplete="off" type="number" name="phone_number" class="form-control"
                           aria-describedby="basic-addon1">
                </div>
                <span id = "message" style="color:red"> </span>
                <div class="input-group mb-3">
                    <input placeholder="Passwort" type="password" name="user_password" class="form-control"
                           aria-describedby="basic-addon1"  id = "pswd" autocomplete="off">
                </div>
                <div class="input-group mb-3">
                    <input placeholder=" Retype Passwort" type="password" name="retype_password" class="form-control"
                           aria-describedby="basic-addon1" id="password" autocomplete="off">
                </div>
                <div class="mb-3" id="roles">
                    <select name="role_name" class="form-select py-2 w-100">
                        @foreach($roles as $role)
                        <option>{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center mt-2"><i class="bi bi-plus-square" style="font-size: 22px; cursor: pointer;" title="Add another role" onclick="addanother()"></i></div>
                <div class="pt-2">
                    <input type="submit" class="py-2 w-100 border-0 fw-bold" value="Registrieren">
                </div>
            </form>
        </div>
    </div>
</section>



    @endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <script>
            var cnt = 1;
            function addanother(){
               document.getElementById('roles').innerHTML += "<select class='form-select py-2 w-100 mt-2' name='role_name" + cnt + "' id='" + cnt + "'>";
               @foreach($roles as $role)
                document.getElementById(cnt.toString()).innerHTML += '<option value="{{$role->name}}">{{$role->name}}</option>';
                @endforeach
                    document.getElementById('addedroles').value = cnt;
                cnt++;
            }

        </script>
<style>
    .form1 input {
        border: none;
        border-radius: 8px;
        background-color: #EFEFEF;
    }

    .form1 input[type="submit"] {
        background-color: #4EC590;
        border-radius: 8px;
        color: #fff;
        transition: .4s all ease;
    }

    .form1 input[type="submit"]:hover {
        background-color: #fff;
        border-radius: 8px;
        color: #4EC590;
        border: 1px solid #4EC590 !important;
    }

    .form1 select {
        border: none;
        border-radius: 8px;
        background-color: #EFEFEF;
    }

    .form1 .form-control:focus {
        box-shadow: none;
        background-color: #EFEFEF;
    }
    @media (max-width: 575.98px) {
        .boxShadowMob {
            box-shadow: none !important;
        }
    }
</style>
@endif
<style>
    /*Per Notification */
    .coloriii a{
        color: black !important;
    }
</style>
