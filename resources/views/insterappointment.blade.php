@extends('template.navbar')
@section('content')
        <title>Termin Einfügen</title>
    <section>
        <div class="container">
        @if($errors->any())
        <div class="text-center">
            {!! implode('<br />', $errors->all(':message')) !!}
        </div>
    @endif
            <div class="form-div my-4 py-4 mx-3 mx-sm-5" style="background-color: #EFEFEF; border-radius: 20px;">
                <form action="{{route('addappointment')}}" method="post">
                    @csrf
                <div class="row mx-3">
                    <div class="col">
                        <div class="mx-2">
                            <div class="mb-2">
                                <label for="" class="mb-1">Agent:</label>
                                <input type="text"  class="form-control" value="" name="agent" >
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Qualität:</label>
                                <input type="text" class="form-control" value="" name="berater" >
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Vorname</label>
                                <input type="text" name="fname" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Nachname</label>
                                <input type="text" name="lname" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Datum</label>
                                <input type="date" class="form-control" name="appdate" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Zeit</label>
                                <input type="time" class="form-control" name="apptime" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Sprache</label>
                                <input type="text" name="sprache" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Personen</label>
                                <input type="number" name="count" class="form-control" required="required">
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Nationalität:</label>
                                <input type="text" name="country" class="form-control" required>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="mx-2">
                            <div class="mb-2">
                                <label for="" class="mb-1">Strasse</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Nr</label>
                                <input type="text" name="nr" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">PLZ</label>
                                <input type="number" name="postal" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Ort</label>
                                <input type="text" name="location" class="form-control" required>
                            </div>

                            <div class="mb-2">

                                @if(Auth::guard('admins')->user()->hasRole('fs'))
                                    <label for="" class="mb-1">Zuweisen</label>
                                    <select name="admin" class="form-control">
                                        <option value="{{$admins->id}}">{{$admins->name}}</option>
                                    </select>
                                @elseif(Auth::user()->hasRole('salesmanager'))

                                @else
                                <label for="" class="mb-1">Besprechungsformular</label>
                                <select onchange="hideadmin()" name="online" id="selecti" class="form-control">
                                <option value="no">Physisch</option>
                                <option value="yes">Online</option>
                                </select>

                            </div>
                            <div id="admin">
                                <label for="admin" class="">Zuweisen</label>
                                <br>
                                <select name="admin" class="form-control">
                                        @foreach($admins as $admin)
                                            @if(!$admin->hasRole('digital'))
                                                <option value="{{$admin->id}}">{{$admin->name}}</option>
                                            @endif
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Tel. Privat</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Zufriedenheit</label>
                                <input type="text" name="zufriedenheit" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="exampleFormControlTextarea1" class="form-label">Bemerkung:</label>
                                <textarea class="form-control" name="bemerkung" id="exampleFormControlTextarea1" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="my-4">
                        <button class="py-2 px-5 mx-5 border-0 fw-bold"
                                style="background-color: #0C71C3; color: #fff; border-radius: 8px;">Annehmen</button>
                    </div>
                </form>
            </div>
        </div>
    </section>



        <section>
            <div class="container">
                <div class="form-div my-4 py-4 mx-3  mx-sm-5" style="background-color: #EFEFEF; border-radius: 20px;">
                    <div class="mb-4 mx-5">
                        <span class="fs-5 fw-600">Oder per Datei einfügen</span>
                    </div>
                    <form method="post" action="{{route('addappointmentfile')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="row mx-3">
                            <div class="col">
                                <div class="mx-2">
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="file">
                                    </div>
                                    <div class="my-4">
                                        <button type="submit" class="py-2 px-5 border-0 fw-bold"
                                                style="background-color: #0C71C3; color: #fff; border-radius: 8px;">Annehmen</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div onclick="openExamplePic()">
                        <span class="btn fw-600 mx-5" style="border: 1px solid #434343;border-radius: 5px">Beispiel</span>
                    </div>
                    <br>
                    <div style="display: none" class="w-100" id="picture">
                        <img src="exceExample.png" alt="pic" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>



 



    <script type="text/javascript">
        function openExamplePic() {
            var x = document.getElementById('picture');
            if (x.style.display == 'none') {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function hideadmin() {
            var x = document.getElementById('selecti').value;
            if (x == "no") {
                document.getElementById('admin').style.display = "inline";
            } else {
                document.getElementById('admin').style.display = "none";
            }
        }
    </script>
@endsection
<style>
    body {
        overflow-x: hidden;
    }
</style>
<style>
    /*Per Notification */
    .coloriii a{
        color: black !important;
    }
</style>
