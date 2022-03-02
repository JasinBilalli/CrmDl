<?php

namespace App\Http\Controllers;
use App\Models\PersonalAppointment;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Flash;
use Auth;
use App\Models\Admins;
use App\Models\lead;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use DateTime;

class AppointmentsController extends Controller
{

    public function index(Request $request)
    {
		$input = $request->all();
		if(array_key_exists('trie', $input) && ( $input['trie'] == "asc" || $input['trie']== "desc" )){$trie = $input['trie'];}else{$trie = "asc" ;};

		if(array_key_exists('date_in', $input) ){ $date_in = $input['date_in'];}else { $date_in = date('Y-m-d'); }
		$date_in =  new DateTime($date_in);



		if(array_key_exists('region', $input) ){if($input['region'] == "all"){$regionQ='appointment_date' ; $regionI = $date_in ; $regionO="all";}else{$regionQ='city' ; $regionI  = $input['region'];$regionO= $input['region'] ;}}else{ $regionQ='appointment_date' ; $regionI = $date_in ;$regionO="all";};

		if(array_key_exists('rejected', $input) ){if($input['rejected'] == "all"){$rejectedQ='appointment_date' ; $rejectedI = $date_in ;$rejectedO="all";}else{$rejectedQ='rejected' ; $rejectedI = $input['rejected'];$rejectedO=$input['rejected'];}}else{ $rejectedQ='appointment_date' ; $rejectedI = $date_in ;$rejectedO="all";};

		if(array_key_exists('sprache', $input) ){if($input['sprache'] == "all"){$spracheQ='appointment_date' ; $spracheI = $date_in ; $spracheO="all"; }else{$spracheQ='sprache' ; $spracheI = $input['sprache']; $spracheO=$input['sprache']; }}else{ $spracheQ='appointment_date' ; $spracheI = $date_in ;$spracheO="all";};



		if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('salesmanager'))
		{
			$users= admins::select('*','admins.id as id')->join('model_has_roles', 'model_has_roles.model_id', '=', 'admins.id')
			->where('model_has_roles.role_id',7)
			->get();

			$regions = lead::select('city')->whereNull('assign_to_id')->distinct()->orderBy('city', 'asc')->where('appointment_date',Carbon::now()->format('Y-m-d'))->get();
			$langues = lead::select('sprache')->whereNull('assign_to_id')->distinct()->orderBy('sprache', 'asc')->whereNotNull('sprache')->where('appointment_date',Carbon::now()->format('Y-m-d'))->get();

			$appointments_events = lead::select('*')->whereNull('assign_to_id')->where('appointment_date',$date_in)->orderBy('time', $trie)->where($regionQ,$regionI)->where($rejectedQ,$rejectedI)->where($spracheQ,$spracheI)->where('completed',0)->get();


			$appointments = lead::select('*','leads.id as id')->join('model_has_roles', 'model_has_roles.model_id', '=', 'leads.assign_to_id')
			->where('model_has_roles.role_id',7)->whereNotNull('leads.assign_to_id')->where('leads.assigned',1)->where('leads.completed',0)->whereNotNull('leads.appointment_date')->where('leads.wantsonline',0)->where('leads.rejected',0)->get();


			$maps = DB::table('leads')->where('appointment_date',Carbon::now()->format('Y-m-d'))->select('leads.first_name','leads.last_name','leads.latitude','leads.longitude')->get();

			return view('appointment')->with('users',$users)->with('appointments_events',$appointments_events)->with('appointments',$appointments)->with('regions',$regions)->with('langues',$langues)->with('regionO',$regionO)->with('rejectedO',$rejectedO)->with('spracheO',$spracheO)->with('trie',$trie)->with('maps',$maps)->with('date_in',$date_in);
		}else{
			$users="";$appointments_events = "";
			$regions ="";
			$langues = "";
			$appointments = lead::select('*')->where('assign_to_id',auth::guard('admins')->user()->id)->whereNotNull('appointment_date')->where('completed',0)->where('wantsonline',0)->where('rejected',0)->get();


            $personalApp = PersonalAppointment::where('AppOrCon',1)->where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->where('date','>=',Carbon::now()->format('Y-m-d'))->get();

            $maps = DB::table('leads')->where('appointment_date',Carbon::now()->format('Y-m-d'))->where('assign_to_id', \Illuminate\Support\Facades\Auth::guard('admins')->user()->id)->select('leads.first_name','leads.last_name','leads.latitude','leads.longitude')->get();

			return view('appointment')
                ->with('users',$users)
                ->with('appointments_events',$appointments_events)
                ->with('appointments',$appointments)
                ->with('regions',$regions)
                ->with('langues',$langues)
                ->with('regionO',$regionO)
                ->with('rejectedO',$rejectedO)
                ->with('spracheO',$spracheO)
                ->with('trie',$trie)
                ->with('personalApp',$personalApp)
                ->with('maps',$maps)
				->with('date_in',$date_in);
		}
	}

	public function Dropajax(Request $request)
    {
		$input = $request->all();
		$pieces = explode("-", $input['nom_lead']);
		$id_lead = $pieces['0'];
		$date = Carbon::parse(substr($request->ctime,0,15))->format('Y-m-d');
	if(lead::find($id_lead)->appointment_date == $date){
		$appointment = lead::where('id', $pieces['0'])
              ->update(['assigned' => 1,'assign_to_id' => $input['id_user'],'rejected' => 0]);
		if($appointment){return "Mit Erfolg hochgeladen !!!!";} else {return "ERROR !!!";}
	}
	else{
		return "Falsch, Termin sollte seinem Datum zugeordnet werden (" . lead::find($id_lead)->appointment_date . ") !!!";
	}
}

	public function changeTS(Request $request){
		$input = $request->all();
		if($input['ts_id'] == "0"){$input['ts_id'] = null;}
		$appointment = lead::where('id', $input['id_lead_input'])
              ->update(['assign_to_id' => $input['ts_id']]);
		if($appointment){session(['msg' => 'Success !!!']);  return redirect()->back();} else {return "ERROR !!!";}
	}
}
