<?php

namespace App\Http\Controllers;

use App\Events\SendNotification;
use App\Exports\LeadsExport;
use App\Models\Admins;
use App\Models\appointment;
use App\Models\CostumerProduktAutoversicherung;
use App\Models\CostumerProduktGrundversicherung;
use App\Models\CostumerProduktHausrat;
use App\Models\CostumerProduktRechtsschutz;
use App\Models\CostumerProduktVorsorge;
use App\Models\CostumerProduktZusatzversicherung;
use App\Models\family;
use App\Models\lead;
use App\Models\notification;
use App\Models\Pendency;
use App\Models\PersonalAppointment;
use App\Notifications\SendNotificationn;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Collection;
use PhpParser\Node\Name\FullyQualified;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\LeadDataFahrzeug;

class TasksController extends Controller
{
public function assignpendency(Request $req){
  $id = (int) $req->id;
$title = $req->title ? $req->title : "";

    $pendency = new Pendency();
    $pendency->title = $title;
    $fid = (int) $req->id;
  $pendency->admin_id = (int) $req->admin;
  $pendency->family_id = $fid;
  $pendency->description = filter_var($req->desc,FILTER_SANITIZE_STRING);
  if($fid == 0){
  $pendency->type = "Order";
}
else{
  $pendency->type = "Task";
}
  $pendency->title = filter_var($req->task,FILTER_SANITIZE_STRING);
  $pendency->save();

  $url =  '<a href="'. route("leadfamilyperson",[Crypt::encrypt((int) $req->id * 1244),"admin_id" => Crypt::encrypt($pendency->admin_id * 1244),"pend_id" => $pendency->id]) . '"> Ihnen wurde ein Anhängsel zugeteilt für:' . family::find((int) $req->id)->first_name . '</a>';
  Admins::find((int) $req->admin)->notify(new SendNotificationn($url));
  $family = DB::table('family_person')->where('id','=',$id)->update(['status' => 'Submited']);
}
  public function accepttask($id)
  {

  }
  public function dnotifications()
  {
    notification::where('receiver_id', Auth::guard('admins')->user()->id)->where('done', 0)->update(['done' => 1]);
  }
  public function today(Request $req)
  {
    $user = auth()->user();
    $urole = auth()->user()->getRoleNames();

    $some_date = Carbon::now()->format('H:i');
    $now = (int) str_replace(':', '', $some_date);

    $admin = Auth::guard('admins')->user();
    $today = Carbon::now()->format("Y-m-d");
    $data = null;
    $cnt = 0;
    if ($req->date != null) {
      if ($urole->contains('admin') || $urole->contains('salesmanager')) {
        foreach (DB::table('leads')
        ->where('wantsonline', 0)
        ->where('appointment_date', $req->date)
        ->whereNotNull('assign_to_id')
        ->orderBy('time','desc')
        ->where('completed',0)
        ->select('leads.first_name','leads.last_name','leads.address','leads.id')
        ->paginate(15) as $d){
            $data[$cnt] = $d;
            $val = (int) $d->id;
            $data[$cnt]->id = Crypt::encrypt($val * 1244);
            $cnt++;

        }
      } elseif ($urole->contains('fs')) {
          foreach (DB::table('leads')
                       ->where('wantsonline', 0)
                       ->where('appointment_date', $req->date)
                       ->whereNotNull('assign_to_id')
                       ->orderBy('time','desc')
                       ->where('completed',0)
              ->where('leads.assign_to_id',$user->id)
                       ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                       ->paginate(15) as $d){
              $data[$cnt] = $d;
              $val = (int) $d->id;
              $data[$cnt]->id = Crypt::encrypt($val * 1244);
              $cnt++;

          }


      }
      elseif($urole->contains('digital')) {
        foreach (DB::table('leads')
                       ->where('wantsonline', 1)
                       ->where('appointment_date', $req->date)
                       ->orderBy('time','desc')
                       ->where('completed',0)
                       ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                       ->paginate(15) as $d){
              $data[$cnt] = $d;
              $val = (int) $d->id;
              $data[$cnt]->id = Crypt::encrypt($val * 1244);
              $cnt++;

          }
      }
    } else {
      if ($urole->contains('admin') || $urole->contains('salesmanager')) {
        if ($now > 2300) {
            foreach (DB::table('leads')
                         ->where('wantsonline', 0)
                         ->whereNotNull('assign_to_id')
                         ->orderBy('time','desc')
                         ->where('completed',0)
                         ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                         ->where('appointment_date', Carbon::now()->addDays()->toDateString())
                         ->paginate(15) as $d){
                $data[$cnt] = $d;
                $val = (int) $d->id;
                $data[$cnt]->id = Crypt::encrypt($val * 1244);
                $cnt++;

            }
        } else {

            foreach (DB::table('leads')
                         ->where('wantsonline', 0)
                         ->whereNotNull('assign_to_id')
                         ->orderBy('time','desc')
                         ->where('completed',0)
                         ->where('appointment_date',Carbon::now()->format('Y-m-d'))
                         ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                         ->paginate(15) as $d){
                $data[$cnt] = $d;
                $val = (int) $d->id;
                $data[$cnt]->id = Crypt::encrypt($val * 1244);
                $cnt++;

            }
        }
      }
      if ($urole->contains('fs')) {
        if ($now > 2300) {
            foreach (DB::table('leads')
                         ->where('wantsonline', 0)
                         ->whereNotNull('assign_to_id')
                         ->orderBy('time','desc')
                         ->where('completed',0)
                         ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                         ->where('appointment_date', Carbon::now()->addDays()->toDateString())
                         ->where('leads.assign_to_id',$user->id)
                         ->paginate(15) as $d){
                $data[$cnt] = $d;
                $val = (int) $d->id;
                $data[$cnt]->id = Crypt::encrypt($val * 1244);
                $cnt++;

            }
        } else {
            foreach (DB::table('leads')
                         ->where('wantsonline', 0)
                         ->whereNotNull('assign_to_id')
                         ->orderBy('time','desc')
                         ->where('completed',0)
                         ->where('appointment_date',Carbon::now()->format('Y-m-d'))
                         ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                         ->where('leads.assign_to_id',$user->id)
                         ->paginate(15) as $d){
                $data[$cnt] = $d;
                $val = (int) $d->id;
                $data[$cnt]->id = Crypt::encrypt($val * 1244);
                $cnt++;

            }
        }
      }
      elseif($urole->contains('digital')){
        if ($now > 2300) {
          foreach (DB::table('leads')
                       ->where('wantsonline', 1)
                       ->whereNotNull('assign_to_id')
                       ->orderBy('time','desc')
                       ->where('completed',0)
                       ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                       ->where('appointment_date', Carbon::now()->addDays()->toDateString())
                       ->paginate(15) as $d){
              $data[$cnt] = $d;
              $val = (int) $d->id;
              $data[$cnt]->id = Crypt::encrypt($val * 1244);
              $cnt++;

          }
      } else {
          foreach (DB::table('leads')
                       ->where('wantsonline', 1)
                       ->orderBy('time','desc')
                       ->where('completed',0)
                       ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                       ->paginate(15) as $d){
              $data[$cnt] = $d;
              $val = (int) $d->id;
              $data[$cnt]->id = Crypt::encrypt($val * 1244);
              $cnt++;

          }

      }
      }
    }
    return $data;
  }

  public function vuedate(Request $req)
  {
    $page = $req->page;
    $day = Carbon::now()->format('d');
    $month = Carbon::now()->format('m');
    $year = Carbon::now()->format('Y');
    $fullcalendar = [];
    $br = 1;
    $dayofweek = 6;
      Carbon::setLocale('de');
    for ($i = 0; $i <= 365; $i++) {
      $fullcalendar[$i]['date'] =  Carbon::now()->addDays($i)->format('Y-m-d');
      $fullcalendar[$i]['dayn'] =  substr(Carbon::now()->addDays($i)->format('l'),0,3);
      $fullcalendar[$i]['day'] =   Carbon::now()->addDays($i)->format('d');
      $fullcalendar[$i]['month'] = Carbon::now()->addDays($i)->format('M');
      $fullcalendar[$i]['year'] =  Carbon::now()->addDays($i)->format('Y');
    }

    $calendar = [];
    $calendar[0] = $fullcalendar[$page - 4];
    $calendar[1] = $fullcalendar[$page - 3];
    $calendar[2] = $fullcalendar[$page - 2];
    $calendar[3] = $fullcalendar[$page - 1];
    return $calendar;


    return $fullcalendar;
  }

  public function searchword()
  {
      if(Auth::guard('admins')->user()->hasRole('fs')){
          $data = DB::table('family_person')
              ->join('leads','family_person.leads_id','=','leads.id')
              ->where('leads.assign_to_id','=',Auth::guard('admins')->user()->id)
              ->where('family_person.status','Done')
              ->select('family_person.*')
              ->orderBy('family_person.first_name','asc')
              ->get();

          $cnt = 0;
          $grundversicherungP = $retchsschutzP = $vorsorgeP = $zusatzversicherungP = $autoversicherungP = $hausratP = null;
          $mandatiert = [];
          foreach ($data as $dat) {
              $grundversicherungP[$cnt] = CostumerProduktGrundversicherung::where('person_id_PG', $dat->id)->first();
              $retchsschutzP[$cnt] = CostumerProduktRechtsschutz::where('person_id_PR',$dat->id)->first();
              $vorsorgeP[$cnt] = CostumerProduktVorsorge::where('person_id_PV',$dat->id)->first();
              $zusatzversicherungP[$cnt] = CostumerProduktZusatzversicherung::where('person_id_PZ',$dat->id)->first();
              $autoversicherungP[$cnt] = CostumerProduktAutoversicherung::where('person_id_PA', $dat->id)->first();
              $hausratP[$cnt] = CostumerProduktHausrat::where('person_id_PH', $dat->id)->first();
              $family_person[$cnt] = family::where('id',$dat->id)->first();
              if(LeadDataFahrzeug::where('person_id',$dat->id)->first()){
                  if(LeadDataFahrzeug::where('person_id',$dat->id)->first()->mandatiert == null){
                      $mandatiert[$cnt]['mandatiert'] = false;
                  }
                  else{
                      $mandatiert[$cnt]['mandatiert'] = true;
                  }
              }
              else{
                  $mandatiert[$cnt]['mandatiert'] = false;
              }

              $sumGegen[$cnt]['grsum'] = CostumerProduktGrundversicherung::where('person_id_PG', $dat->id)->get()->sum('total_commisions_PG');
              $totaliGegen[$cnt]['totali'] = CostumerProduktGrundversicherung::where('person_id_PG', $dat->id)->count();
              $sumNeuen[$cnt]['nesum'] = CostumerProduktZusatzversicherung::where('person_id_PZ', $dat->id)->get()->sum('total_commisions_PZ');
              $totaliNeuen[$cnt]['netotali'] = CostumerProduktZusatzversicherung::where('person_id_PZ', $dat->id)->count();
              $statusGegen[$cnt]['statusGegen'] = CostumerProduktGrundversicherung::where('person_id_PG', $dat->id)->get();
              $statusNeuen[$cnt]['statusNeuen'] = CostumerProduktZusatzversicherung::where('person_id_PZ', $dat->id)->get();

              $cnt++;
          }
          return view('costumers', compact('data','statusGegen','statusNeuen','sumGegen','sumNeuen','totaliNeuen','totaliGegen', 'mandatiert','grundversicherungP','retchsschutzP','vorsorgeP','autoversicherungP','hausratP','zusatzversicherungP','family_person'));

      }else{
          $data = family::where('status','Done')->orderBy('first_name','asc')->get();
          $cnt = 0;
          $mandatiert = [];
          foreach ($data as $dat) {
              $grundversicherungP[$cnt] = CostumerProduktGrundversicherung::where('person_id_PG', $dat->id)->first();
              $retchsschutzP[$cnt] = CostumerProduktRechtsschutz::where('person_id_PR',$dat->id)->first();
              $vorsorgeP[$cnt] = CostumerProduktVorsorge::where('person_id_PV',$dat->id)->first();
              $zusatzversicherungP[$cnt] = CostumerProduktZusatzversicherung::where('person_id_PZ',$dat->id)->first();
              $autoversicherungP[$cnt] = CostumerProduktAutoversicherung::where('person_id_PA', $dat->id)->first();
              $hausratP[$cnt] = CostumerProduktHausrat::where('person_id_PH', $dat->id)->first();
              $family_person[$cnt] = family::where('id',$dat->id)->first();
              if(LeadDataFahrzeug::where('person_id',$dat->id)->first()){
                  if(LeadDataFahrzeug::where('person_id',$dat->id)->first()->mandatiert == null){
                      $mandatiert[$cnt]['mandatiert'] = false;
                  }
                  else{
                      $mandatiert[$cnt]['mandatiert'] = true;
                  }
              }
              else{
                  $mandatiert[$cnt]['mandatiert'] = false;
              }

              $sumGegen[$cnt]['grsum'] = CostumerProduktGrundversicherung::where('person_id_PG', $dat->id)->get()->sum('total_commisions_PG');
              $totaliGegen[$cnt]['totali'] = CostumerProduktGrundversicherung::where('person_id_PG', $dat->id)->count();
              $sumNeuen[$cnt]['nesum'] = CostumerProduktZusatzversicherung::where('person_id_PZ', $dat->id)->get()->sum('total_commisions_PZ');
              $totaliNeuen[$cnt]['netotali'] = CostumerProduktZusatzversicherung::where('person_id_PZ', $dat->id)->count();
              $statusGegen[$cnt]['statusGegen'] = CostumerProduktGrundversicherung::where('person_id_PG', $dat->id)->get();
              $statusNeuen[$cnt]['statusNeuen'] = CostumerProduktZusatzversicherung::where('person_id_PZ', $dat->id)->get();

              $cnt++;
          }
          return view('costumers', compact('data','statusGegen','statusNeuen','sumNeuen','totaliNeuen','sumGegen','totaliGegen','mandatiert', 'grundversicherungP','retchsschutzP','vorsorgeP','autoversicherungP','hausratP','zusatzversicherungP','family_person'));

      }
  }
  public function costumers(Request $request)
  {
        $grundversicherungP = null;
        $retchsschutzP = null;
        $vorsorgeP = null;
        $zusatzversicherungP = null;
        $autoversicherungP = null;
        $hausratP = null;
        $family_person = null;
        $sumGegen = null;
        $totaliGegen = null;
        $sumNeuen = null;
        $totaliNeuen = null;
        $statusGegen = null;
        $statusNeuen = null;
        $mandatiert = [];
        $data = collect();
      $cnt = 0;
      $date1 = date('Y-m-d', strtotime($request->searchdate1));
      $n = date('Y-m-d', strtotime($request->searchdate2));
      $date2 = date('Y-m-d', strtotime($n . "+1 days"));
      $searchname = $request->searchname;
      $user = auth()->user();

    if(Auth::user()->hasRole('fs') || Auth::user()->hasRole('digital')){
if($searchname == null) {
    foreach (family::with('hausrat')->with('lead')->with('grund')->with('rech')->with('vor')->with('zus')->with('auto')->whereIn('status', ['Open'])
                 ->get() as $fam) {
        if ($fam->lead->assign_to_id == $user->id) $data->push($fam);
    }
}

      if ($searchname != null){

          foreach(family::with('hausrat')->with('df')->with('lead')->with('grund')->with('rech')->with('vor')->with('zus')->with('auto')->whereIn('status', ['Done'])->where('first_name','like','%'.$searchname . '%')->get() as $item){
              if($item->lead->assign_to_id == $user->id){
                  $data->push($item);
              }
          }
    }
        if (isset($request->searchdate1) && isset($request->searchdate2)) {

      foreach(family::with('hausrat')->with('lead')->with('grund')->with('rech')->with('vor')->with('zus')->with('auto')->whereIn('status', ['Done'])->where('first_name','like','%'.$searchname . '%')->whereBetween('family_person.created_at', [$date1, $date2])->get() as $item) {
                if ($item->lead->assign_to_id == $user->id){
                    $data->push($item);
                }
            }
        }

        $cnt = 0;

        foreach ($data as $dat) {
            $grundversicherungP[$cnt] = $dat->grund->first();
            $retchsschutzP[$cnt] = $dat->rech->first();
            $vorsorgeP[$cnt] = $dat->vor->first();
            $zusatzversicherungP[$cnt] = $dat->zus->first();
            $autoversicherungP[$cnt] = $dat->auto->first();
            $hausratP[$cnt] = $dat->hausrat;
            $family_person[$cnt] = $dat;
            if($dat->df){
              if($dat->df->mandatiert == null){
                $mandatiert[$cnt]['mandatiert'] = false;
              }
              else{
                $mandatiert[$cnt]['mandatiert'] = true;
              }
            }
            else{
              $mandatiert[$cnt]['mandatiert'] = false;
            }

            $sumGegen[$cnt]['grsum'] = $dat->grund->sum('total_commisions_PG');
            $totaliGegen[$cnt]['totali'] = $dat->grund->count();
            $sumNeuen[$cnt]['nesum'] = $dat->zus->sum('total_commisions_PZ');
            $totaliNeuen[$cnt]['netotali'] = $dat->zus->count();
            $statusGegen[$cnt]['statusGegen'] = $dat->grund;
            $statusNeuen[$cnt]['statusNeuen'] = $dat->zus;

            $cnt++;
        }


        return view('costumers', compact('sumGegen','statusGegen','statusNeuen','sumNeuen','totaliNeuen','totaliGegen','data','mandatiert','grundversicherungP','retchsschutzP','vorsorgeP','autoversicherungP','hausratP','zusatzversicherungP','family_person'));

    }else {
        if($searchname == null) {
            $data = family::with('hausrat')->with('lead')->with('grund')->with('rech')->with('vor')->with('zus')->with('auto')->whereIn('status', ['Open'])->get();

        }

        if ($searchname != null){

            $data = family::with('hausrat')->with('df')->with('lead')->with('grund')->with('rech')->with('vor')->with('zus')->with('auto')->whereIn('status', ['Done'])->where('first_name','like','%'.$searchname . '%')->get();


        }
        if (isset($request->searchdate1) && isset($request->searchdate2)) {

            $data = family::with('hausrat')->with('lead')->with('grund')->with('rech')->with('vor')->with('zus')->with('auto')->whereIn('status', ['Done'])->where('first_name','like','%'.$searchname . '%')->whereBetween('family_person.created_at', [$date1, $date2])->get();


        }

        $cnt = 0;

        foreach ($data as $dat) {
            $grundversicherungP[$cnt] = $dat->grund->first();
            $retchsschutzP[$cnt] = $dat->rech->first();
            $vorsorgeP[$cnt] = $dat->vor->first();
            $zusatzversicherungP[$cnt] = $dat->zus->first();
            $autoversicherungP[$cnt] = $dat->auto->first();
            $hausratP[$cnt] = $dat->hausrat;
            $family_person[$cnt] = $dat;
            if($dat->df){
                if($dat->df->mandatiert == null){
                    $mandatiert[$cnt]['mandatiert'] = false;
                }
                else{
                    $mandatiert[$cnt]['mandatiert'] = true;
                }
            }
            else{
                $mandatiert[$cnt]['mandatiert'] = false;
            }

            $sumGegen[$cnt]['grsum'] = $dat->grund->sum('total_commisions_PG');
            $totaliGegen[$cnt]['totali'] = $dat->grund->count();
            $sumNeuen[$cnt]['nesum'] = $dat->zus->sum('total_commisions_PZ');
            $totaliNeuen[$cnt]['netotali'] = $dat->zus->count();
            $statusGegen[$cnt]['statusGegen'] = $dat->grund;
            $statusNeuen[$cnt]['statusNeuen'] = $dat->zus;

            $cnt++;
        }
        $contracts = [];




        return view('costumers', compact('mandatiert','totaliGegen',
            'sumGegen','data','contracts','grundversicherungP','retchsschutzP','vorsorgeP',
            'autoversicherungP','hausratP','zusatzversicherungP','family_person','sumNeuen',
            'totaliNeuen','statusGegen','statusNeuen'));
    }
  }

  public function tasks(Request $req,$az = false)
  {

    $user = auth()->user();
    $pending = collect([]);
    $open = collect();
      $pend = collect([]);
    $start = microtime(true);
       $cnt = 0;
       $cnt1 = 0;
       $leadsss = Crypt::encrypt(Auth::user()->id * 1244);
       $urole = $user->getRoleNames()->toArray();
       if (in_array('backoffice',$urole) || in_array('admin',$urole)) {
        if (isset($req->searchpend)) {
            foreach (Pendency::with('adminpend')->with('family')
                ->where('pendencies.done', '=', 1)
                ->where('pendencies.completed', 0)
                ->select('pendencies.admin_id', 'pendencies.family_id', 'pendencies.*', 'pendencies.id as pid')
                ->paginate(120) as $task) {
                $pending->push($task);
                if(stristr($task->family->first_name,$req->searchpend)) $pend->push($task);
            }
        }
        else
        {
            $pend = Pendency::with('adminpend')->with('family')
                    ->where('pendencies.done', '=', 1)
                    ->where('pendencies.completed', 0)
                    ->select('pendencies.admin_id', 'pendencies.family_id', 'pendencies.*', 'pendencies.id as pid')
                    ->paginate(120);
            $pending = $pend;
            }
        if (isset($req->searchopen)) {
          foreach(Pendency::with('adminpend')->with('family')
                ->where('pendencies.done',0)
                ->where('pendencies.completed',0)
                ->select('pendencies.admin_id','pendencies.family_id','pendencies.*','pendencies.id as pid',)
                ->paginate(120) as $task){
              if(stristr($task->family->first_name,$req->searchopen)) $open->push($task);


            }
        } else {
            $open = Pendency::with('adminpend')->with('family')
                ->where('pendencies.done',0)
                ->where('pendencies.completed',0)
                ->select('pendencies.admin_id','pendencies.family_id','pendencies.*','pendencies.id as pid')
                ->paginate(120);
        }


        $answered = [];
        $opened = [];

        $answered = $pend;
            $opened = $open;
    }


    if (in_array('fs',$urole) || in_array('admin',$urole)) {
if(in_array('admin',$urole)){
      $tasks = family::with('adminpend')
      ->whereIn('family_person.status',['Open'])
      ->select('family_person.*')
      ->orderBy('family_person.created_at','desc')
      ->paginate(120);

      $cntt = 0;

      $realopen = [];
      $opencnt = 0;
      $pendingcnt = 0;

      $opencnt = $tasks->count();



    }
    else{
      $tasks = family::with('adminpend')
      ->join('leads','family_person.leads_id','=','leads.id')
      ->where('status','Open')
      ->where('leads.assign_to_id',$user->id)
      ->select('family_person.*')
      ->orderBy('family_person.created_at','desc')
      ->paginate(120);

       $tasks2 = [];
      $cntt = 0;

      $realopen = [];

      $opencnt = 0;
      $pendingcnt = 0;



       $opencnt = $tasks->count();

       $pending = Pendency::with('adminpend')
       ->where('completed','=',0)
       ->where('admin_id',$user->id)
       ->select('pendencies.*','pendencies.family_id as id','pendencies.id as pid','pendencies.type')
       ->paginate(120);





    }
    $cnt = 0;
    $costumers = collect();
    $birthdays = [];
    $todaydate = Carbon::now()->format('m-d');
    foreach (family::where('birthdate','like','%'.Carbon::now()->format('m-d').'%')->take(120)->get() as $cos){
   if (substr($cos->birthdate, 5) == $todaydate) {
    $birthdays[$cnt]['birthday'] = $cos->birthdate;
    $now = (int) Carbon::now()->format('Y');
    $birth = (int) substr($cos->birthdate, -10, -6);
    $birthdays[$cnt]['age'] = $now - $birth;
    $birthdays[$cnt]['id'] = $cos->id;
    $birthdays[$cnt]['name'] = ucfirst($cos->first_name);
    $birthdays[$cnt]['lname'] = ucfirst($cos->last_name);
    $cnt++;
  }
    }








  }

  $personalApp = DB::table('personalappointment')->where('AppOrCon',1)->where('user_id',$user->id)->where('date','>=',Carbon::now()->format('Y-m-d'))->get();

if(in_array('backoffice',$urole)) return view('tasks',compact('answered','pend','opened','leadsss'));
if(in_array('fs',$urole)) return view('tasks', compact('personalApp','opencnt', 'pendingcnt', 'realopen', 'pending', 'birthdays', 'tasks','leadsss'));
// dd($personalApp,$opencnt, $pendingcnt, $realopen, $pending, $birthdays, $tasks,$answered,$pend,$opened,$leadsss);
if(in_array('admin',$urole)) return view('tasks', compact('personalApp','opencnt', 'pendingcnt', 'realopen', 'pending', 'birthdays', 'tasks','answered','pend','opened','leadsss'));


  }

  public function confirmsms(Request $request)
  {
    $user_id = Auth::guard('admins')->user()->id;
    $cc = $request->cc;
    $number = $request->numberphone;
    $phonenumber = $cc . $number;
    if (Admins::where('id', $user_id)->update(['phonenumber' => $phonenumber, 'firsttime' => 0])) {
      return redirect()->route('dashboard');
    }
  }
  public function dates()
  {


  }
}
