@extends('template.navbar')
@section('content')
    @if($errors->any())
        <div class="text-center">
            {!! implode('<br />', $errors->all(':message')) !!}
        </div>
    @endif
    <title>Zugewiesen Lead</title>

    <section>
        <div class="container">
            <div class="form-div my-4 py-4 mx-2 mx-sm-5" style="background-color: #EFEFEF; border-radius: 20px;">
                <form action="{{route('asignlead',$lead->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="countt" id="countt">
                    <div class="row mx-4">
                        <div class="col">
                            <div class="mx-2">
                                <div class="mb-2">
                                    <label for="" class="mb-1">Agent:</label>
                                    <input type="text"  class="form-control" value="{{$lead->agent}}" name="agent" >
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Qualität:</label>
                                    <input type="text" class="form-control" value="{{$admin->name}}" name="berater" >
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Gesundheit</label>
                                    <input type="text" class="form-control" value="" name="gesundheit">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Datum</label>
                                    <input type="date" class="form-control" name="appointmentdate" min="1900-01-01" max="9999-12-31">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Zeit</label>
                                    <input class="form-control" type="time" name="apptime">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Sprache</label>
                                    <input type="text" class="form-control" value="" name="sprache">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Personen</label>
                                    <input type="number" class="form-control" value="{{$lead->number_of_persons}}" name="personen">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Nationalitat:</label>
                                    <input type="text" class="form-control" value="{{$lead->nationality}}" name="nationality">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Vorname</label>
                                    <input type="text" name="name" class="form-control" value="{{$lead->first_name}}">
                                </div>
                            </div>
                        </div>
                        <div class="col" >
                            <div class="mx-2">
                                <div class="mb-2">
                                    <label for="" class="mb-1">Nachname</label>
                                    <input type="text" class="form-control" value="{{$lead->last_name}}" name="lname" >
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Strasse</label>
                                    <input type="text" class="form-control" value="{{$lead->address}}" name="address">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Nr</label>
                                    <input type="number" class="form-control" value="" name="nr">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">PLZ</label>
                                    <input type="text" class="form-control" value="{{$lead->postal_code}}" name="postal_code">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Ort</label>
                                    <input type="text" class="form-control" value="{{$lead->city}}" name="ort">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Tel. Privat</label>
                                    <input type="text" class="form-control" name="telephone" value="{{$lead->telephone}}">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Zufriedenheit</label>
                                    <input type="text" class="form-control" value="" name="zufriedenheit">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Bemerkung:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bemerkung"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4">
                        <button type="submit" class="py-2 px-5 mx-5 border-0 fw-bold"
                                style="background-color: #0C71C3; color: #fff; border-radius: 8px;">Annehmen
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>






@endsection

<style>
    /*Per Notification */
    .coloriii a{
        color: black !important;
    }
</style>
