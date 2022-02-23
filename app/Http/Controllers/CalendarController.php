<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\LeadsImport;
use App\Models\Admins;
use App\Models\Deletedlead;
use App\Models\rejectedlead;
use App\Models\User;
use App\Mail\confirmcode;
use App\Models\appointment;
use App\Models\campaigns;
use App\Models\chat;
use App\Models\Costumer;
use App\Models\family;
use App\Models\lead;
use App\Models\notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Nexmo;
use Illuminate\Support\Str;
use DB;
use App\Models\PersonalAppointment;

class CalendarController extends Controller
{
    public function calendar()
    {
        $maps = null;

        if(Auth::guard('admins')->user()->hasRole('admin')){
            $maps = DB::table('leads')->where('appointment_date',Carbon::now()->format('Y-m-d'))->select('leads.first_name','leads.last_name','leads.latitude','leads.longitude')->get();
        }else{
            $maps = DB::table('leads')->where('appointment_date',Carbon::now()->format('Y-m-d'))->where('assign_to_id',Auth::guard('admins')->user()->id)->select('leads.first_name','leads.last_name','leads.latitude','leads.longitude')->get();
        }
        $personalApp = PersonalAppointment::where('user_id',Auth::user()->id)->where('AppOrCon',1)->where('date','>=',Carbon::now()->format('Y-m-d'))->get();

        return view('calendar',compact('maps','personalApp'));
    }
}
