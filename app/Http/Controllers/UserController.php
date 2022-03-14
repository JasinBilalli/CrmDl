<?php

namespace App\Http\Controllers;

use App\Events\RejectLead;
use App\Imports\LeadImport;
use App\Imports\LeadsImport;
use App\Imports\TestImport;
use App\Models\Admins;
use App\Models\CostumerProduktAutoversicherung;
use App\Models\CostumerProduktGrundversicherung;
use App\Models\CostumerProduktHausrat;
use App\Models\CostumerProduktRechtsschutz;
use App\Models\CostumerProduktVorsorge;
use App\Models\CostumerProduktZusatzversicherung;
use App\Models\Deletedlead;
use App\Models\PendingRejectedLead;
use App\Models\PersonalAppointment;
use App\Models\rejectedlead;
use App\Models\Trainings;
use App\Models\User;
use App\Mail\confirmcode;
use App\Models\appointment;
use App\Models\campaigns;
use App\Models\chat;
use App\Models\Costumer;
use App\Models\family;
use App\Models\lead;
use App\Models\notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Maatwebsite\Excel\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use Nexmo;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Middleware\confirmedcode;
use App\Models\lead_history;
use App\Models\lead_info;
use App\Traits\FileManagerTrait;
use Illuminate\Support\Facades\DB;
use Faker;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;
use App\Models\LeadDataPlus;
use App\Notifications\SendNotificationn;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    use FileManagerTrait;

    public function __construct()
    {
        $this->middleware(confirmedcode::class);
    }

    public function rleads()
    {
        $leads = DB::table('leads_history')
            ->join('leads', 'leads_history.leads_id', 'leads.id')
            ->select('leads.first_name', 'leads.id', 'leads.telephone', 'leads_history.status', 'leads.number_of_persons')
            ->get();

        return view('rleads', compact('leads'));
    }

    public function closenots()
    {
        notification::where('receiver_id', Auth::guard('admins')->user()->id)->update(['done' => 1]);
    }

    public function addslead(Request $req)
    {
        $lead = new lead();
        $lead->first_name = filter_var($req->name, FILTER_SANITIZE_STRING);
        $lead->last_name = filter_var($req->lname, FILTER_SANITIZE_STRING);
        $lead->telephone = filter_var($req->telephone, FILTER_SANITIZE_STRING);
        $lead->birthdate = filter_var($req->geburstdatum, FILTER_SANITIZE_STRING);
        $lead->number_of_persons = (int)$req->haushalt;
        $lead->campaign_id = (int)$req->campaign;
        $lead->address = filter_var($req->plzort,FILTER_SANITIZE_STRING);
        $lead->save();
        $leadi = new lead_info();
        $leadi->grund = filter_var($req->grund,FILTER_SANITIZE_STRING);
        $leadi->kampagne = filter_var($req->kampagne,FILTER_SANITIZE_STRING);
        $leadi->lead_id = (int) $lead->id;
        $leadi->krankenkasse = filter_var($req->krankenkasse,FILTER_SANITIZE_STRING);
        $leadi->wichtig = filter_var($req->wichtig,FILTER_SANITIZE_STRING);
        $leadi->bewertung = filter_var($req->bewertung,FILTER_SANITIZE_STRING);
        $leadi->teilnahme = filter_var($req->teilnahme,FILTER_SANITIZE_STRING);
        $leadi->save();
        $lead->slug = 'qwessse12wssew-' . uniqid();
        if ($lead->save()) {
            return redirect()->route('leads')->with('success', 'Lead wurde erfolgreich eingefügt');
        } else {
            return redirect()->back()->with('fail', 'Fehler beim Einfügen');
        }
    }

    public function acceptapp($id)
    {
        $lead = lead::find($id);
        if (Auth::guard('admins')->user()->hasRole('admin')) {
            $lead->assigned = 1;
            $lead->save();
            return redirect()->back();
        } else if ($lead->assign_to_id == Auth::guard('admins')->user()->id) {
            $lead->assigned = 1;
            $lead->save();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function smsconfirmation()
    {
        return view('confirmcode');
    }

    public function rnlogin()
    {

        if (!auth()->check()) {

            return view('login');
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function notifications()
    {

    }

    public function getlead($campaign)
    {
        $campaign = campaigns::where('name', $campaign)->get();

        return view('getlead', compact('campaign'));
    }

    public function addappointment(Request $req)
    {
        $req->validate([
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'postal' => 'required',
            'location' => 'required',
            'count' => 'min:1',
            'appdate' => 'required',
            'apptime' => 'required',
            'nr' => 'required',
            'zufriedenheit' => 'required',
            'bemerkung' => 'required',
            'sprache' => 'required'
        ]);

        $lead = new lead();
        $lead->agent = filter_var($req->input('agent'), FILTER_SANITIZE_STRING);
        $lead->berater = filter_var($req->input('berater'), FILTER_SANITIZE_STRING);
        $lead->first_name = filter_var($req->input('fname'), FILTER_SANITIZE_STRING);
        $lead->last_name = filter_var($req->input('lname'), FILTER_SANITIZE_STRING);
        $lead->telephone = filter_var($req->input('phone'), FILTER_SANITIZE_STRING);
        $lead->address = filter_var($req->input('address'), FILTER_SANITIZE_STRING);
        $lead->postal_code = filter_var($req->input('postal'), FILTER_SANITIZE_STRING);
        $lead->city = filter_var($req->input('nr') . $req->input('location'), FILTER_SANITIZE_STRING);
        $lead->nationality = filter_var($req->input('country'), FILTER_SANITIZE_STRING);
        $lead->appointment_date = filter_var($req->input('appdate'), FILTER_SANITIZE_STRING);
        $lead->time = filter_var($req->input('apptime'), FILTER_SANITIZE_STRING);
        $lead->sprache = filter_var($req->input('sprache'), FILTER_SANITIZE_STRING);
        $lead->zufriedenheit = filter_var($req->input('zufriedenheit'), FILTER_SANITIZE_STRING);
        $lead->bemerkung = filter_var($req->input('bemerkung'), FILTER_SANITIZE_STRING);
        $lead->number_of_persons = (int)$req->input('count');
        $lead->campaign_id = (int)$req->input('campaign');
        $lead->assigned = 1;
        $campaign = campaigns::where('id', $req->input('campaign'))->get();
        if ($req->input('online') == 'yes') {
            $lead->wantsonline = 1;
        } else {
            $lead->wantsonline = 0;
            if (Auth::guard('admins')->user()->hasRole('fs')) {
                $lead->assign_to_id = Auth::guard('admins')->user()->id;
            } else {
                if ($req->input('admin') != '') {
                    Admins::findorFail($req->input('admin'));
                    $lead->assign_to_id = (int)$req->input('admin');
                } else {
                    $lead->assigned = 0;
                }
            }
        }
        $address = [];

        $address = filter_var($req->input('address'), FILTER_SANITIZE_STRING);
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&key=AIzaSyDscxZzYju_pJGNA2zu1lXOqJuubCdPu0o';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($responseJson);
        if ($response->status == 'OK') {
            $latitude = $response->results[0]->geometry->location->lat;
            $longitude = $response->results[0]->geometry->location->lng;
        } else {

            $lead->latitude = "0";
            $lead->longitude = "0";
        }


        if ($lead->save()) {
            if (Auth::user()->hasRole('salesmanager')) {
                $lead->assign_to_id = null;
            }
            $lead->slug = Str::slug(filter_var($req->input('fname'),FILTER_SANITIZE_STRING)) . '-' . $lead->id;
            $lead->save();
            return redirect()->route('dashboard')->with('success', 'Termin wurde erfolgreich durchgeführt!');
        } else {
            return redirect()->back()->with('fail', 'Ihre Aktion schlägt fehl');
        }
    }


    public function dlead($id)
    {
        //   lead::where('id',$id)->delete();
        $id = Crypt::decrypt($id) / 1244;
        $leads = lead::find($id);
        return view('deletedlead', compact('leads'));
    }

    public function deletedlead(Request $request, $id)
    {

        $leads = lead::find($id);
        if (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice') || $leads->assign_to_id == Auth::guard('admins')->user()->id) {
            $deletedlead = new Deletedlead();
            $deletedlead->name = filter_var($leads->first_name,FILTER_SANITIZE_STRING);
            $deletedlead->address = filter_var($leads->address,FILTER_SANITIZE_STRING);
            $deletedlead->count = (int) $leads->number_of_persons;
            $deletedlead->date = Carbon::now();
            $deletedlead->reason = filter_var($request->reason,FILTER_SANITIZE_STRING);
            $deletedlead->comment = filter_var($request->comment,FILTER_SANITIZE_STRING);

            $deletedlead->save();


            if ($leads->delete()) {
                return redirect()->route('leads')->with('success', 'Lead erfolgreich gelöscht');
            } else {
                return redirect()->route('leads')->with('fail', 'Lead gelöscht fehlgeschlagen');
            }
        } else {
            return redirect()->back();
        }
    }

    public function addappointmentfile(Request $request)
    {

        // $request->validate([
        //     'file' => 'required|mimes:xlsx,xls,csv'
        // ]);
        $file = $request->file('file');

        if (\Maatwebsite\Excel\Facades\Excel::import(new LeadImport, $file)) {
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }

    }


    public function insertappointment()
    {
        if (Auth::guard('admins')->user()->hasRole('fs')) {
            $admins = Auth::guard('admins')->user();
        } else {
            $admins = Admins::role(['fs'])->get();
        }
        return view('insterappointment', compact('admins'));
    }


    public function leads(Request $req)
    {

        return view('leads');
    }

    public function asignlead(Request $req, $id)
    {

        $req->validate([
            'personen' => 'required',
            'apptime' => 'required',
            'appointmentdate' => 'required'
        ]);


        $lead = lead::find($id);
        $lead->berater =  $req->berater ?  filter_var($req->berater,FILTER_SANITIZE_STRING) : $lead->berater;
        $lead->address =  $req->address ?  filter_var($req->nr . $req->address,FILTER_SANITIZE_STRING) : $lead->address;
        $lead->assign_to_id = Auth::user()->id;
        $lead->nationality = $req->nationality ?  filter_var($req->nationality,FILTER_SANITIZE_STRING) : $lead->nationality;
        $lead->telephone = $req->telephone ?  filter_var($req->telephone,FILTER_SANITIZE_STRING) : $lead->telephone;
        $lead->time = $req->apptime ? filter_var($req->input('apptime'), FILTER_SANITIZE_STRING) : null;
        $lead->postal_code = $req->zip ?  filter_var($req->zip,FILTER_SANITIZE_STRING) : $lead->postal_code;
        $lead->first_name = $req->name ?  filter_var($req->name,FILTER_SANITIZE_STRING) : $lead->first_name;
        $lead->last_name = $req->lname ?  filter_var($req->lname,FILTER_SANITIZE_STRING) : $lead->last_name;
        $lead->number_of_persons = $req->personen ?  filter_var($req->personen,FILTER_SANITIZE_STRING) : $lead->number_of_persons;
        $lead->city = $req->ort ?  filter_var($req->ort,FILTER_SANITIZE_STRING) : $lead->city;
        $lead->appointment_date = $req->appointmentdate ? filter_var($req->input('appointmentdate'), FILTER_SANITIZE_STRING) : null;
        $lead->assigned = 1;
        $lead->gesundheit = $req->gesundheit ?  filter_var($req->gesundheit,FILTER_SANITIZE_STRING) : $lead->gesundheit;
        $lead->zufriedenheit = $req->zufriedenheit ?  filter_var($req->zufriedenheit,FILTER_SANITIZE_STRING) : $lead->zufriedenheit;
        $lead->bemerkung = $req->bemerkung ?  filter_var($req->bemerkung,FILTER_SANITIZE_STRING) : $lead->bemerkung;
        $lead->sprache = $req->sprache ?  filter_var($req->sprache,FILTER_SANITIZE_STRING) : $lead->sprache;
        $lead->agent = $req->agent ?  filter_var($req->agent,FILTER_SANITIZE_STRING) : $lead->agent;


        if ($lead->save()) {
            return redirect()->route('leads')->with('success', 'Ihre Aktion wurde erfolgreich ausgeführt');
        } else {
            return redirect()->route('leads')->with('fail', 'Ihre Aktion ist fehlgeschlagen');
        }
    }

    public function appointbyadmin($id)
    {
        $lead = lead::find($id);
        return view('appointadmin', compact('lead'));
    }

    public function reject($id)
    {
        $lead = lead::find($id);
        $lead->assigned = 0;
        $lead->save();
        return redirect()->route('');
    }

    public function alead($id)
    {
        // $id = Crypt::decrypt($id) / 1244;

        if (lead::find($id)->assigned == 1 && lead::find($id)->assign_to_id != null) {
            return redirect()->back();
        } else {
            $role = Role::find(1);
            $admin = Admins::find(lead::find($id)->assign_to_id);
            $lead = lead::find($id);
            return view('alead', compact('admin', 'lead'));
        }
    }


    public function trylogin(Request $req)
    {
        $email = filter_var($req->input('email'), FILTER_SANITIZE_STRING);
        $password = filter_var($req->input('password'), FILTER_SANITIZE_STRING);

        $remember = $req->input('remember') == 'on' ? true : false;
        if (Auth::guard('admins')->attempt(['email' => $email, 'password' => $password], $remember)) {
            session()->regenerate();
            $pin = random_int(1000, 99999);
            $user = auth()->user();
            $user->confirmed = 0;
            $user->pin = $pin;



            //  Nexmo::message()->send([
            //  'to' => '38345917726',
            //  'from' => env('NEXMO_KEY'),
            // 'text' => '12345']);
            $user->save();
            //\Mail::to(Auth::guard('admins')->user()->email)->send(new confirmcode($pin));


            return redirect()->route('dashboard');


        } else {
            return redirect()->route('rnlogin')->with('message','Anmeldeinformationen falsch');
        }
    }

    public function confirmcode(Request $req)
    {
        $c1 = (int)$req->input('c1');
        $c2 = (int)$req->input('c2');
        $c3 = (int)$req->input('c3');
        $c4 = (int)$req->input('c4');
        $pin = $c1 . $c2 . $c3 . $c4;
        $pin = (int)$pin;
        $user = Admins::find(Auth::guard('admins')->user()->id);
        if ($pin === $user->pin) {
            $user->confirmed = 1;
            $user->save();
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('notauth', 'PIN war falsch');
        }
    }

    public function logout(Request $request)
    {
        if (Auth::guard('admins')->check()) {
            $perdoruesi = Admins::where('id', Auth::guard('admins')->user()->id)->first();
            $perdoruesi->online = 0;
            $perdoruesi->confirmed = 0;
            $perdoruesi->save();
            Auth::guard('admins')->logout();
            $request->session()->regenerateToken();
            session()->flush();
        }
        return redirect()->route('rnlogin');
    }


    public function completeapp(Request $req, $id)
    {
        $idd = Crypt::decrypt($id);
        $idd /= 1244;
        $lead = lead::find($idd);

        $cnt = $lead->number_of_persons;
        $pcnt = 0;
        for ($i = 1; $i <= $cnt; $i++) {
            if ($req->input('fname' . $i) != null && $req->input('birthday' . $i) != null && $req->input('lname' . $i) != null) {
                $family = new family();
                $family->first_name = filter_var($req->input('fname' . $i),FILTER_SANITIZE_STRING);
                $family->birthdate = filter_var($req->input('birthday' . $i),FILTER_SANITIZE_STRING);
                $family->last_name = filter_var($req->input('lname' . $i),FILTER_SANITIZE_STRING);
                $family->leads_id = (int)$idd;
                $family->status = "Open";
                $family->save();
                $pcnt++;
            }
        }
        $bo = Admins::role(['backoffice', 'admin'])->get();
        foreach ($bo as $b) {
            $url = '<a href="' . route("tasks") . '">' . $pcnt . ' Personen wurden aus einem Termin hinzugefügt </a>';
            $b->notify(new SendNotificationn($url));
        }
        $lead->status_task = "open";
        $lead->completed = 1;
        $lead->save();
        return redirect()->route('tasks');


    }

    public function filterbydateapp(Request $req)
    {
        $req->validate([
            'fbydate' => 'required'
        ]);

        $appointments = lead::where('appointment_date', date('Y-m-d', strtotime($req->input('fbydate'))))->where('admin_id', Auth::guard('admins')->user()->id)->where('wantsonline', 0)->get();

        $leadscount = lead::where('assign_to_id', null)->where('assigned', 0)->get()->count();
        $todayAppointCount = lead::where('assign_to_id', Auth::guard('admins')->user()->id)->where('appointmentdate', Carbon::now()->toDateString())->where('wantsonline', 0)->where('assigned', 1)->get()->count();

        return view('dashboard', compact('appointments', 'leadscount', 'todayAppointCount'));
    }

    public function dealclosed($id)
    {

        $id = Crypt::decrypt($id) / 1244;

        $app = lead::where('id', $id)->first();
        if ($app->assign_to_id == Auth::guard('admins')->user()->id || Auth::guard('admins')->user()->hasRole('admin') || $app->wantsonline == 1 && Auth::user()->hasRole('digital')) {
            return view('completelead', compact('app'));
        } else {
            return redirect()->back();
        }
    }

    public function dealnotclosed($id)
    {

        $leads = lead::where('id', $id)->first();
        if ($leads->assign_to_id != null && $leads->assign_to_id == Auth::guard('admins')->user()->id || Auth::guard('admins')->user()->hasRole('admin')) {
            return view('rejectedleads', compact('leads'));
        } else {
            return redirect()->back();
        }
    }

    public function pending_rejectedlead(Request $request)
    {
        $leads_id = (int)$request->leadsid;

        if ($request->pending == 1) {
            $pending_rejcted = new PendingRejectedLead();
            $pending_rejcted->lead_id = $leads_id;
            $pending_rejcted->begrundung =  filter_var($request->reason,FILTER_SANITIZE_STRING);
            $pending_rejcted->pending_or_reject = 1;

            if ($pending_rejcted->save()) {
                lead::where('id', $leads_id)->update(['assign_to_id' => null, 'assigned' => 0, 'rejected' => 1]);
                return redirect()->back()->with('success', 'Erfolgreich abgelehnt');
            } else {
                return redirect()->back()->with('fail', 'Kann nicht abgelehnt werden');
            }
        } else {
            $pending_rejcted = new PendingRejectedLead();
            $pending_rejcted->lead_id = $leads_id;
            $pending_rejcted->begrundung =  filter_var($request->reason,FILTER_SANITIZE_STRING);
            $pending_rejcted->pending_or_reject = 0;

            if ($pending_rejcted->save()) {
                lead::where('id', $leads_id)->update(['assign_to_id' => null, 'assigned' => 0, 'rejected' => 1]);
                return redirect()->back()->with('success', 'Erfolgreich abgelehnt');
            } else {
                return redirect()->back()->with('fail', 'Kann nicht abgelehnt werden');
            }
        }

    }

    public function rejectedleads(Request $request)
    {
        $leads_id = (int)$request->leadsid;

        $image = $request->hasFile('image') ? $this->storeFile($request->input('image'), 'img') : null;

        $rejectedlead = new lead_history();

        $rejectedlead->leads_id = $leads_id;
        $rejectedlead->status =  filter_var($request->reason,FILTER_SANITIZE_STRING);
        $rejectedlead->image = $image;
        $rejectedlead->admin_id = Auth::user()->id;

        if ($rejectedlead->save()) {
            lead::where('id', $leads_id)->update(['assign_to_id' => 9999999]);
            return redirect()->back()->with('success', 'Aktion wurde erfolgreich durchgeführt');
        } else {
            return redirect()->back()->with('success', 'Aktion fehlgeschlagen');
        }

    }

    public function rejectlead(Request $request, $id)
    {
        $id = Crypt::decrypt($id) / 1244;

        $rejectlead = new rejectedlead();

        $rejectlead->leads_id = $id;
        $rejectlead->reason = filter_var($request->reason,FILTER_SANITIZE_URL);
        $file = $request->file('image');
        $rejectlead->image = $this->storeFile($file, 'img');

        if ($rejectlead->save()) {
            return redirect()->route('dashboard')->with('success', 'Aktion erfolgreich durchgeführt');
        } else {
            return redirect()->route('dashboard')->with('fail', 'Aktion fehlgeschlagen');

        }
    }

    public function dashboard(Request $req)
    {
        $user = auth()->user();
        

        $urole = $user->getRoleNames()->toArray();

        $getmonth = isset($req->getmonth) ? $req->getmonth : "";
        
                $taskcnt = 0;
        
                date_default_timezone_set('Europe/Berlin');
        
                //codi per statistics
                $grundversicherungP = CostumerProduktGrundversicherung::where('status_PG', 'Provisionert')->count();
                $retchsschutzP = CostumerProduktRechtsschutz::where('status_PR', 'Provisionert')->count();
                $vorsorgeP = CostumerProduktVorsorge::where('status_PV', 'Provisionert')->count();
                $zusatzversicherungP = CostumerProduktZusatzversicherung::where('status_PZ', 'Provisionert')->count();
                $autoversicherungP = CostumerProduktAutoversicherung::where('status_PA', 'Provisionert')->count();
                $hausratP = CostumerProduktHausrat::where('status_PH', 'Provisionert')->count();
        
        
                $grundversicherungOffen = CostumerProduktGrundversicherung::where('status_PG', 'Offen')->count();
                $retchsschutzOffen = CostumerProduktRechtsschutz::where('status_PR', 'Offen')->count();
                $vorsorgeOffen = CostumerProduktVorsorge::where('status_PV', 'Offen')->count();
                $zusatzversicherungOffen = CostumerProduktZusatzversicherung::where('status_PZ', 'Offen')->count();
                $autoversicherungOffen = CostumerProduktAutoversicherung::where('status_PA', 'Offen')->count();
                $hausratOffen = CostumerProduktHausrat::where('status_PH', 'Offen')->count();
        
        
                $grundversicherungAuf = CostumerProduktGrundversicherung::where('status_PG', 'Aufgenomen')->count();
                $retchsschutzAuf = CostumerProduktRechtsschutz::where('status_PR', 'Aufgenomen')->count();
                $vorsorgeAuf = CostumerProduktVorsorge::where('status_PV', 'Aufgenomen')->count();
                $zusatzversicherungAuf = CostumerProduktZusatzversicherung::where('status_PZ', 'Aufgenomen')->count();
                $autoversicherungAuf = CostumerProduktAutoversicherung::where('status_PA', 'Aufgenomen')->count();
                $hausratAuf = CostumerProduktHausrat::where('status_PH', 'Aufgenomen')->count();
        
                $grundversicherungA = CostumerProduktGrundversicherung::where('status_PG', 'Abgelehnt')->count();
                $retchsschutzA = CostumerProduktRechtsschutz::where('status_PR', 'Abgelehnt')->count();
                $vorsorgeA = CostumerProduktVorsorge::where('status_PV', 'Abgelehnt')->count();
                $zusatzversicherungA = CostumerProduktZusatzversicherung::where('status_PZ', 'Abgelehnt')->count();
                $autoversicherungA = CostumerProduktAutoversicherung::where('status_PA', 'Abgelehnt')->count();
                $hausratA = CostumerProduktHausrat::where('status_PH', 'Abgelehnt')->count();
        
                $grundversicherungZ = CostumerProduktGrundversicherung::where('status_PG', 'Zuruckgezogen')->count();
                $retchsschutzZ = CostumerProduktRechtsschutz::where('status_PR', 'Zuruckgezogen')->count();
                $vorsorgeZ = CostumerProduktVorsorge::where('status_PV', 'Zuruckgezogen')->count();
                $zusatzversicherungZ = CostumerProduktZusatzversicherung::where('status_PZ', 'Zuruckgezogen')->count();
                $autoversicherungZ = CostumerProduktAutoversicherung::where('status_PA', 'Zuruckgezogen')->count();
                $hausratZ = CostumerProduktHausrat::where('status_PH', 'Zuruckgezogen')->count();
                //perfundion
        
        
                if (auth()->check()) {
                    $pendingcnt = 0;
                    $opencnt = 0;
                    $done = 0;
                    $recorded = 0;
                    $morethan30 = [];
                    $pendencies = [];
                    $taskcnt = 0;
                    $tasks = null;
        
                    if (in_array('backoffice',$urole) || in_array('admin',$urole) || in_array('salesmanager',$urole)) {
                        $pcnt = 0;
                        $mcnt = 0;
                        foreach (family::with('adminpend')
                                     ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                                     ->select('family_person.first_name', 'pendencies.family_id', 'family_person.id', 'family_person.last_name', 'pendencies.created_at', 'pendencies.done', 'pendencies.completed', 'pendencies.admin_id', 'pendencies.id as pid', 'pendencies.description')
                                     ->orderBy('family_person.first_name', 'asc')
                                     ->where('done', 1)
                                     ->orderBy('pendencies.created_at')
                                     ->paginate(200) as $task) {
                            if ($task->completed == 0) {
                                $pendencies[$pcnt] = $task;
                                $pcnt++;
                            }
                            if (strtotime($task->created_at) < strtotime(Carbon::now()->subDays(30)->format('Y-m-d'))) {
                                $morethan30[$mcnt] = $task;
                                $mcnt++;
                            }
        
                        }
        
        
                        $pendingcnt = DB::table('family_person')
                            ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                            ->select('family_person.first_name', 'pendencies.family_id', 'family_person.id', 'family_person.last_name')
                            ->where('pendencies.done', '<>', 1)
                            ->orderBy('family_person.first_name', 'asc')
                            ->count();
        
        
                    }
                    if (in_array('fs',$urole) || in_array('admin',$urole) || in_array('salesmanager',$urole) || in_array('digital',$urole)) {
        
                        if (in_array('fs',$urole)) {
        
                            $pendingcnt = DB::table('family_person')
                                ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                                ->where('pendencies.done', '<>', 1)
                                ->where('pendencies.admin_id', $user->user()->id)
                                ->count();
        
        
                            $tasks = DB::table('leads')
                                ->where('completed', '=', '0')
                                ->where('status_contract', '!=', 'Done')
                                ->orWhereNull('status_contract')
                                ->where('status_task', '!=', 'Done')
                                ->where('assign_to_id', $user->user()->id)
                                ->count();
                            $done = DB::table('leads')
                                ->where('completed', 1)
                                ->where('status_contract', 'Done')
                                ->where('assign_to_id', $user->user()->id)
                                ->where('status_task', 'Done')
                                ->count();
        
        
                        } elseif (in_array('admin',$urole)) {
        
                            $pending = DB::table('family_person')
                                ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                                ->where('pendencies.done', '=', 0)
                                ->select('family_person.first_name as first_name', 'family_person.last_name as last_name', 'pendencies.*', 'family_person.id as id')
                                ->count();
                            $tasks = DB::table('leads')
                                ->where('completed', '=', '0')
                                ->where('status_contract', '!=', 'Done')
                                ->orWhereNull('status_contract')
                                ->where('status_task', '!=', 'Done')
                                ->count();
                            $done = DB::table('family_person')
                                ->join('pendencies', 'family_person.id', 'pendencies.family_id')
                                ->where('pendencies.completed', 1)
                                ->count();
        
                        } else {
                            $pending = DB::table('family_person')
                                ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                                ->where('pendencies.done', '=', 0)
                                ->select('family_person.first_name as first_name', 'family_person.last_name as last_name', 'pendencies.*', 'family_person.id as id')
                                ->where('pendencies.admin_id', $user->user()->id)
                                ->count();
                            $tasks = DB::table('leads')
                                ->where('completed', '=', '0')
                                ->where('status_contract', '!=', 'Done')
                                ->orWhereNull('status_contract')
                                ->where('status_task', '!=', 'Done')
                                ->where('assign_to_id', $user->user()->id)
                                ->count();
                            $done = DB::table('leads')
                                ->where('completed', 1)
                                ->where('status_contract', 'Done')
                                ->where('assign_to_id', $user->user()->id)
                                ->where('status_task', 'Done')
                                ->count();
                        }
                        $percnt = 0.00;
        
                        if ($tasks != 0) {
                            $percnt = (100 / $tasks) * $done;
                        }
        
                        if (in_array('fs',$urole)) {
                            $offen = DB::table('leads')
                            ->join('family_person','leads.id','family_person.leads_id')
                            ->where('leads.assign_to_id',$user->user()->id)
                            ->whereIn('family_person.status',['Open'])
                            ->count();
        
                            $leadscount = $leadscount = DB::table('leads')->where('completed', '0')->where('assigned', 0)->orderBy('updated_at', 'asc')->where('leads.assign_to_id', $user->user()->id)->where('wantsonline', 0)->where('rejected', 0)->count();
                        } else {
                            $offen = DB::table('family_person')
                                ->join('leads', 'family_person.leads_id', '=', 'leads.id')
                                ->whereIn('family_person.status',['Open'])
                                ->where('leads.assign_to_id', $user->id)
                                ->count();
        
                            $leadscount = DB::table('leads')
                                ->whereNull('assign_to_id')
                                ->where('assigned', 0)->where('completed', 0)
                                ->where('rejected', 0)
                                ->where('wantsonline', 0)
                                ->count();
                        }
                    }
                    if (in_array('fs',$urole) || in_array('digital',$urole)) {
                        if (in_array('fs',$urole)) {
                            $todayAppointCount = lead::where('assign_to_id', $user->id)->where('appointment_date', Carbon::now()->toDateString())->where('wantsonline', 0)->where('assigned', 1)->get()->count();
                        } else {
                            $todayAppointCount = lead::where('assign_to_id', $user->id)->where('appointment_date', Carbon::now()->toDateString())->where('wantsonline', 1)->where('assigned', 1)->get()->count();
                        }
        
                        $grundprov = 0;
                        $grundoffen = 0;
                        $grundauf = 0;
                        $autoprov = 0;
                        $autoffen = 0;
                        $autoauf = 0;
                        $zusaprov = 0;
                        $zusaoffen = 0;
                        $zusauf = 0;
                        $hausprov = 0;
                        $hausoffen = 0;
                        $hausauf = 0;
                        $rechprov = 0;
                        $rechoffen = 0;
                        $rechauf = 0;
                        $vorsprov = 0;
                        $voroff = 0;
                        $vorauf = 0;
        
                        foreach (DB::table('family_person')
                                     ->join('leads', 'family_person.leads_id', 'leads.id')
                                     ->where('leads.assign_to_id', $user->id)
                                     ->join('costumer_produkt_grundversicherung', 'costumer_produkt_grundversicherung.person_id_PG', 'family_person.id')
                                     ->select('costumer_produkt_grundversicherung.status_PG')
                                     ->get() as $status) {
        
                            if ($status->status_PG == 'Provisionert') {
                                $grundprov++;
                            } elseif ($status->status_PG == 'Offen') {
                                $grundoffen++;
                            } elseif ($status->status_PG == 'Aufgenomen') {
                                $grundauf++;
                            }
        
                        }
                        foreach (DB::table('family_person')
                                     ->join('leads', 'family_person.leads_id', 'leads.id')
                                     ->where('leads.assign_to_id', $user->id)
                                     ->join('costumer_produkt_autoversicherung', 'costumer_produkt_autoversicherung.person_id_PA', 'family_person.id')
                                     ->select('costumer_produkt_autoversicherung.status_PA')
                                     ->get() as $status) {
                            if ($status->status_PA == 'Provisionert') {
                                $autoprov++;
                            } elseif ($status->status_PA == 'Offen') {
                                $autoffen++;
                            } elseif ($status->status_PA == 'Aufgenomen') {
                                $autoauf++;
                            }
                        }
                        foreach (DB::table('family_person')
                                     ->join('leads', 'family_person.leads_id', 'leads.id')
                                     ->where('leads.assign_to_id', $user->id)
                                     ->join('costumer_podukt_zusatzversicherung', 'costumer_podukt_zusatzversicherung.person_id_PZ', 'family_person.id')
                                     ->select('costumer_podukt_zusatzversicherung.status_PZ')
                                     ->get() as $status) {
                            if ($status->status_PZ == 'Provisionert') {
                                $zusaprov++;
                            } elseif ($status->status_PZ == 'Offen') {
                                $zusaoffen++;
                            } elseif ($status->status_PZ == 'Aufgenomen') {
                                $zusauf++;
                            }
                        }
                        foreach (DB::table('family_person')
                                     ->join('leads', 'family_person.leads_id', 'leads.id')
                                     ->where('leads.assign_to_id', $user->id)
                                     ->join('costumer_produkt_hausrat', 'costumer_produkt_hausrat.person_id_PH', 'family_person.id')
                                     ->select('costumer_produkt_hausrat.status_PH')
                                     ->get() as $status) {
                            if ($status->status_PH == 'Provisionert') {
                                $hausprov++;
                            } elseif ($status->status_PH == 'Offen') {
                                $hausoffen++;
                            } elseif ($status->status_PH == 'Aufgenomen') {
                                $hausauf++;
                            }
                        }
                        foreach (DB::table('family_person')
                                     ->join('leads', 'family_person.leads_id', 'leads.id')
                                     ->where('leads.assign_to_id', $user->id)
                                     ->join('costumer_produkt_rechtsschutz', 'costumer_produkt_rechtsschutz.person_id_PR', 'family_person.id')
                                     ->select('costumer_produkt_rechtsschutz.status_PR')
                                     ->get() as $status) {
                            if ($status->status_PR == 'Provisionert') {
                                $rechprov++;
                            } elseif ($status->status_PR == 'Offen') {
                                $rechoffen++;
                            } elseif ($status->status_PR == 'Aufgenomen') {
                                $rechauf++;
                            }
                        }
                        foreach (DB::table('family_person')
                                     ->join('leads', 'family_person.leads_id', 'leads.id')
                                     ->where('leads.assign_to_id', $user->id)
                                     ->join('costumer_produkt_vorsorge', 'costumer_produkt_vorsorge.person_id_PV', 'family_person.id')
                                     ->select('costumer_produkt_vorsorge.status_PV')
                                     ->get() as $status) {
        
                            if ($status->status_PV == 'Provisionert') {
                                $vorsprov++;
                            } elseif ($status->status_PV == 'Offen') {
                                $vorauf++;
                            } elseif ($status->status_PV == 'Aufgenomen') {
                                $vorauf++;
                            }
                        }
                        $provisionertCount = $vorsprov + $rechprov + $hausprov + $zusaprov + $autoprov + $grundprov;
                        $offenCount = $voroff + $rechoffen + $hausoffen + $zusaoffen + $autoffen + $grundoffen;
                        $aufgenomenCount = $vorauf + $rechauf + $hausauf + $zusauf + $autoauf + $grundauf;
        
                        $fc = family::count();
                        if ($fc > 0) {
                            $fmcount = (100 / $fc) * $provisionertCount;
                        } else {
                            $fmcount = 0;
                        }
        
                        $counterat = [
                            'provisionertCount' => $provisionertCount,
                            'offenCount' => $offenCount,
                            'aufgenomenCount' => $aufgenomenCount,
                            'familyCount' => $fmcount
                        ];
                        return view('dashboard', compact('user','urole','done', 'tasks', 'pendingcnt', 'leadscount', 'todayAppointCount', 'percnt', 'pendencies', 'pendingcnt', 'counterat', 'offen'));
                    } elseif (in_array('backoffice',$urole)) {
                        return view('dashboard', compact('user','urole','pendencies', 'morethan30'));
                    } elseif (in_array('salesmanager',$urole)) {
        
        
                        $consultation = PersonalAppointment::where('user_id', $user->id)->where('AppOrCon', 2)->where('date', '>=', Carbon::now()->format('Y-m-d'))->get();
        
                        $countconsultation = $consultation->count();
        
                        $todayAppointCount = lead::where('appointment_date', Carbon::now()->toDateString())->where('assigned', 1)->count();
        
        
                        $personalApp = PersonalAppointment::where('AppOrCon', 1)->where('user_id', $user->id)->where('date', '>=', Carbon::now()->format('Y-m-d'))->get();
                        $countpersonalApp = $personalApp->count();
                        $admins = Admins::all();
        
                        $provisionertCount = $grundversicherungP + $retchsschutzP + $vorsorgeP + $zusatzversicherungP + $autoversicherungP + $hausratP;
                        $offenCount = $grundversicherungOffen + $retchsschutzOffen + $vorsorgeOffen + $zusatzversicherungOffen + $autoversicherungOffen + $hausratOffen;
                        $aufgenomenCount = $grundversicherungAuf + $retchsschutzAuf + $vorsorgeAuf + $zusatzversicherungAuf + $autoversicherungAuf + $hausratAuf;
                        $zuruckCount = $grundversicherungZ + $retchsschutzZ + $vorsorgeZ + $zusatzversicherungZ + $autoversicherungZ + $hausratZ;
                        $abgCount = $grundversicherungA + $retchsschutzA + $vorsorgeA + $zusatzversicherungA + $autoversicherungA + $hausratA;
        
        
                        return view('dashboard', compact('user','urole','personalApp', 'consultation', 'done', 'tasks', 'pending', 'leadscount', 'todayAppointCount', 'percnt', 'pendencies', 'pendingcnt', 'morethan30', 'recorded', 'countpersonalApp', 'countconsultation', 'provisionertCount', 'offenCount', 'aufgenomenCount', 'zuruckCount', 'abgCount', 'offen'));
        
                    } elseif (in_array('admin',$urole)) {
                        $personalApp = PersonalAppointment::where('AppOrCon', 1)->where('assignfrom', $user->id)->where('date', '>=', Carbon::now()->format('Y-m-d'))->get();
                        $countpersonalApp = $personalApp->count();
                        $admins = Cache::remember('admins', 7200, function () {
                            return Admins::all();
                        });
                     
                        $todayAppointCount = lead::where('appointment_date', Carbon::now()->toDateString())->where('assigned', 1)->count();
        
                        //
        
        
                        $provisionertCount = $grundversicherungP + $retchsschutzP + $vorsorgeP + $zusatzversicherungP + $autoversicherungP + $hausratP;
                        $offenCount = $grundversicherungOffen + $retchsschutzOffen + $vorsorgeOffen + $zusatzversicherungOffen + $autoversicherungOffen + $hausratOffen;
                        $aufgenomenCount = $grundversicherungAuf + $retchsschutzAuf + $vorsorgeAuf + $zusatzversicherungAuf + $autoversicherungAuf + $hausratAuf;
                        $zuruckCount = $grundversicherungZ + $retchsschutzZ + $vorsorgeZ + $zusatzversicherungZ + $autoversicherungZ + $hausratZ;
                        $abgCount = $grundversicherungA + $retchsschutzA + $vorsorgeA + $zusatzversicherungA + $autoversicherungA + $hausratA;
                       $fcount = family::count();
                        if ($fcount > 0) {
                            $fmcount = (100 / $fcount) * $provisionertCount;
                        } else {
                            $fmcount = 0;
                        }
        
                        $counterat = [
                            'provisionertCount' => $provisionertCount,
                            'offenCount' => $offenCount,
                            'aufgenomenCount' => $aufgenomenCount,
                            'abgCount' => $abgCount,
                            'zuruckCount' => $zuruckCount,
                            'familyCount' => $fmcount
                        ];
        

                return view('dashboard', compact('user','urole','done', 'admins', 'counterat', 'personalApp', 'tasks', 'pending', 'leadscount', 'todayAppointCount', 'percnt', 'pendencies', 'pendingcnt', 'morethan30', 'recorded', 'countpersonalApp', 'offen'));
            }

        }

    }

    public function addnewuser()
    {
        if (Auth::guard('admins')->user()->hasRole('admin')) {
            $roles = Role::all();
            return view('addnewuser', compact('roles'));
        }
    }

    public function registernewuser(Request $request)
    {
        $admins = new Admins();

        $admins->name = filter_var($request->user_name, FILTER_SANITIZE_STRING);
        $admins->email = filter_var($request->user_email, FILTER_SANITIZE_STRING);
        $admins->phonenumber = filter_var($request->user_name, FILTER_SANITIZE_STRING);
        if ($request->user_password == $request->retype_password){
            if ($request->user_password != '' && ($request->user_password > 8)) {
                $admins->password = Hash::make($request->user_password);
            }
        }else{
            return redirect()->back()->with('fail', 'Ncuk');
        }


        $admins->assignRole(filter_var($request->role_name, FILTER_SANITIZE_STRING));

        if ($admins->save()) {
            return redirect()->route('dashboard')->with('success', 'Benutzerregistrierung erfolgreich');
        } else {
            return redirect()->route('dashboard')->with('fail', 'Benutzer konnte sich nicht registrieren');
        }
    }
}
