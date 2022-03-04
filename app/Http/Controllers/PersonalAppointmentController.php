<?php

namespace App\Http\Controllers;

use App\Models\PersonalAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalAppointmentController extends Controller
{
    public function addPersonalAppointment(Request $request){
        $personalApp = new PersonalAppointment();

        $personalApp->title = $request->title;
        $personalApp->date = $request->date;
        $personalApp->time = $request->time;
        $personalApp->address = $request->address;
        $personalApp->comment = $request->comment;
        if(Auth::guard('admins')->user()->hasRole('admin')){
            $personalApp->user_id = $request->roleid;
            $personalApp->assignfrom = Auth::user()->id;

        }else {
            $personalApp->user_id = Auth::user()->id;
            $personalApp->assignfrom = Auth::user()->id;
        }
        $personalApp->AppOrCon = $request->apporconId;

        if($personalApp->save()){
            return redirect()->route('dashboard')->with('success','Ihre Aktion erfolgreich abgeschlossen');
        }else{
            return redirect()->route('dashboard')->with('fail','Ihre Aktion schlägt fehl');

        }
    }
}
