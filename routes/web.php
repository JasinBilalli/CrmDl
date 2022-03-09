<?php

use App\Events\SendNotification;
use App\Models\CostumerProduktGrundversicherung;
use App\Models\CostumerProduktRechtsschutz;
use App\Models\CostumerProduktVorsorge;
use App\Models\CostumerProduktZusatzversicherung;
use App\Models\CostumerStatusGrundversicherung;
use App\Models\CostumerStatusHausrat;
use App\Models\CostumerStatusRetchsschutz;
use App\Models\CostumerStatusVorsorge;
use App\Models\CostumerStatusZusatzversicherung;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\confirmcode;
use App\Http\Middleware\confirmedadmin;
use App\Http\Middleware\confirmedcode;
use App\Mail\confirmcode as MailConfirmcode;
use Carbon\Carbon;
use App\Http\Controllers\TasksController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\TodoController;
use App\Models\Admins;
use App\Models\todo;
use App\Models\family;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\FamilyPersonsController;
use App\Http\Controllers\LeadDataController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TeamController;
use App\Imports\leadinfo;
use App\Imports\newlead;
use App\Listeners\SendNotificationListener;
use App\Models\campaigns;
use App\Models\data;
use App\Models\lead;
use App\Models\lead_info;
use App\Models\LeadDataPlus;
use App\Models\notification;
use App\Notifications\SendNotification as NotificationsSendNotification;
use App\Notifications\SendNotificationn;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Musonza\Chat\Chat;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\URL;
use function Clue\StreamFilter\fun;
use App\Models\TestClass;
use FontLib\TrueType\Collection;
use Monolog\Test\TestCase;
use Vonage\Voice\Endpoint\App;

route::prefix('')->middleware('confirmcode')->group(function(){
   route::get('addlead',function(){
      $campaigns = campaigns::all();
      return view('addlead',compact('campaigns'));
   })->middleware('role:admin|fs|salesmanager');
   route::post('importleads',function(Request $req){
      $file = $req->file('file');
      \Maatwebsite\Excel\Facades\Excel::import(new newlead, $file);
      \Maatwebsite\Excel\Facades\Excel::import(new leadinfo, $file);
      $admins = Admins::role(['salesmanager','admin'])->get();
      foreach($admins as $admin){
         $admin->notify(new SendNotificationn('<a href="' . route('leads') . '">Bestimmte Leads wurden gerade importiert</a>'));
      }
      return redirect()->back();
   })->name('importleads')->middleware('role:admin|salesmanager');
   route::get('getleads',function(){
      if (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('salesmanager') || Auth::guard('admins')->user()->hasRole('backoffice')) {
         $leads['leads'] = lead::with('campaign')->with('info')->where('completed', '0')->where('assigned', 0)->where('assign_to_id', null)->where('wantsonline',0)->where('rejected',0)->orderBy('updated_at','asc')->select('leads.*')->paginate(100);
     } elseif (Auth::guard('admins')->user()->hasRole('fs')) {
      $leads['leads'] = lead::with('campaign')->with('info')->where('completed', '0')->where('assigned', 0)->orderBy('updated_at','asc')->where('leads.assign_to_id',Auth::user()->id)->where('wantsonline',0)->where('rejected',0)->select('leads.*')->paginate(100);
   }
$instagram = 0;
$sanascout = 0;
$facebook = 0;
   for($i = 0; $i < count($leads['leads']); $i++){
$leadinfo = $leads['leads'][$i]->info;

     $leads['leads'][$i]->grund = $leadinfo ? $leadinfo->grund : null;
     $leads['leads'][$i]->krankenkasse = $leadinfo ? $leadinfo->krankenkasse : null;
     $leads['leads'][$i]->bewertung = $leadinfo ? $leadinfo->bewerung : null;
     $leads['leads'][$i]->wichtig = $leadinfo ? $leadinfo->wichtig : null;
     $leads['leads'][$i]->kampagne = $leadinfo ? $leadinfo->kampagne : null;
     $leads['leads'][$i]->teilnahme = $leadinfo ? $leadinfo->teilnahme : null;
     if($leads['leads'][$i]->campaign_id == 1) $instagram++;
     elseif($leads['leads'][$i]->campaign_id == 2) $facebook++;
     else $sanascout++;
     
   }
 
     $leads['admins'] = Admins::role(['fs'])->get();
     $leads['admin'] = Auth::user()->getRoleNames();
     $leads['sanascout'] = $sanascout;
     $leads['instagram'] = $instagram;
     $leads['facebook'] = $facebook;

     return $leads;
   })->middleware('role:admin|fs|salesmanager');
   route::post('addslead',[UserController::class,'addslead'])->name('addslead')->middleware('role:admin|fs|salesmanager');
   route::get('assigntofs/{admin}',function($admin = null,Request $req){
      $array = $req->array;
      $array = explode(",",$array);
      if(Admins::find($admin)->hasRole('fs')){
        foreach($array as $arr){
       lead::find($arr)->update(['assign_to_id' => $admin,'updated_at' => Carbon::now()->format('Y-m-d')]);
        }
      }
      else{
         foreach($array as $arr){
            lead::find($arr)->update(['assign_to_id' => $admin,'updated_at' => Carbon::now()->format('Y-m-d'),'assigned' => 1]);
             }
      }
      Admins::find($admin)->notify(new SendNotificationn('<a href="' . route('leads') . '">Ihnen wurden ' . count($array) . ' Leads zugewiesen!</a>'));
   })->name('assigntofs')->middleware('role:admin|salesmanager');
   route::get('assignpendency',[TasksController::class,'assignpendency'])->middleware('role:backoffice|admin');
    route::get('acceptapp/{id}',[UserController::class,'acceptapp']);
    route::get('closenots',[UserController::class,'closenots']);
    route::get('notifications',[UserController::class,'notifications']);
    route::get('insterappointment',[UserController::class,'insertappointment'])->name('insertappointment')->middleware('role:admin|salesmanager|fs');
    route::get('/',[UserController::class,'dashboard'])->name('dashboard');
    route::get('leads',[UserController::class,'leads'])->name('leads')->middleware('role:admin|fs|salesmanager');
    route::post('asignlead/{id}',[UserController::class,'asignlead'])->name('asignlead')->middleware('role:admin|fs|salesmanager');
    route::get('alead/{id}',[UserController::class,'alead'])->name('alead');
    route::get('dlead/{id}',[UserController::class,'dlead'])->name('dlead');
      route::post('deletedlead/{id}',[UserController::class,'deletedlead'])->name('deletedlead')->middleware('role:admin|fs|salesmanager');
    route::post('addappointment',[UserController::class,'addappointment'])->name('addappointment')->middleware('role:admin|fs|salesmanager');
    route::post('edit_costumer_kundportfolio/{id}',[\App\Http\Controllers\CostumerFormController::class,'edit_costumer_kundportfolio'])->name('edit_costumer_kundportfolio')->middleware('role:admin|backoffice,admins');
    route::get('dealclosed/{id}',[UserController::class,'dealclosed'])->name('dealclosed')->middleware('role:admin|fs|salesmanager');
    Route::get('changeTS', 'App\Http\Controllers\AppointmentsController@changeTS')->name('changeTS')->middleware('role:admin|salesmanager');
      route::post('completeapp/{id}',[UserController::class,'completeapp'])->name('completeapp')->middleware('role:admin|fs|salesmanager');
    route::get('dealnotclosed/{id}',[UserController::class,'dealnotclosed'])->name('dealnotclosed')->middleware('role:admin|fs|salesmanager');
    route::post('rejectedleads',[UserController::class,'rejectedleads'])->name('rejectedleads')->middleware('role:admin|fs|salesmanager');
    route::post('pending_rejectedlead',[UserController::class,'pending_rejectedlead'])->name('pending_rejectedlead')->middleware('role:admin|fs|salesmanager');
    route::post('rejectlead/{id}',[UserController::class,'rejectlead'])->name('rejectlead')->middleware('role:admin|fs|salesmanager');
    route::get('addnewuser',[UserController::class,'addnewuser'])->name('addnewuser')->middleware('role:admin');
    route::post('registernewuser',[UserController::class,'registernewuser'])->name('registernewuser')->middleware('role:admin');
    route::get('acceptappointment/{id}',function ($id){
        $idd = Crypt::decrypt($id);
        $idd /= 1244;
        $lead = lead::find($idd);

        return view('acceptappointment',compact('lead'));
    })->name('acceptappointment');
    route::get('acceptleadinfo/{id}',function ($id){
        $idd = Crypt::decrypt($id);
        $idd /= 1244;
        $app = lead::find($idd)->update(['assigned' => 1]);
        return redirect()->back();
    })->name('acceptleadinfo')->middleware('role:admin|fs|salesmanager');

   route::get('leadfamilyperson/{id}/{admin_id?}',[FamilyPersonsController::class,'family_persons'])->name('leadfamilyperson')->middleware('role:admin|fs|backoffice');


    route::post('createLeadDataKK/{leadIdd}/{personIdd}',[LeadDataController::class,'createLeadDataKK'])->name('createLeadDataKK')->middleware('role:admin|fs|backoffice');
    route::post('updateLeadDataKK/{leadId}/{personId}',[LeadDataController::class,'updateLeadDataKK'])->name('updateLeadDataKK')->middleware('role:admin|fs|backoffice');

   route::any('tasks',[TasksController::class,'tasks'])->name('tasks')->middleware('role:admin|fs|backoffice');
   route::get('searchword',[TasksController::class,'searchword'])->name('searchword')->middleware('role:admin|fs|backoffice|salesmanager');
    route::get('costumer/{costumerId}',[TodoController::class,'getDataForTaskByCostumerId'])->name('getDataForTaskByCostumerId');
   route::any('costumers',[TasksController::class,'costumers'])->name('costumers')->middleware('role:admin|fs|backoffice|salesmanager');
   route::get('costumer_form/{id}',[\App\Http\Controllers\CostumerFormController::class,'costumer_form'])->name('costumer_form');
   route::post('save_costumer_form/{id}',[\App\Http\Controllers\CostumerFormController::class,'save_costumer_form'])->name('save_costumer_form');
   route::any('search',[TasksController::class,'costumers'])->name('search');
   route::get('todayappointments',[TasksController::class,'today'])->middleware('role:admin|fs|backoffice');
   route::get('vuedate',[TasksController::class,'vuedate'])->middleware('role:admin|fs|backoffice');
   route::get('chat/{u1}/{u2}',[ChatController::class,'chat'])->name('chat');
   route::any('addappointmentfile',[UserController::class,'addappointmentfile'])->name('addappointmentfile')->middleware('role:admin|fs|backoffice');
      route::get('addtodo',[TodoController::class,'addtodo']);

   route::get('todos',[TodoController::class,'todos']);
   route::get('deletetodo',[TodoController::class,'deletetodo']);
   route::get('donetodo',[TodoController::class,'donetodo']);
   route::get('addnumber',[TodoController::class,'addnumber']);
   route::get('deletenumber',[TodoController::class,'deletenumber']);
   route::get('numbers',[TodoController::class,'numbers']);
   route::get('calendar',[CalendarController::class,'calendar'])->name('calendar')->middleware('role:admin|fs|salesmanager|management,admins');
   route::get('accepttask/{id}',[TasksController::class,'accepttask'])->name('accepttask')->middleware('role:admin|fs|salesmanager');
   route::post('addPersonalAppointment',[\App\Http\Controllers\PersonalAppointmentController::class,'addPersonalAppointment'])->name('addPersonalAppointment')->middleware('role:admin|fs|salesmanager');
   route::post('confirmsms',[TasksController::class,'confirmsms'])->name('confirmsms');
Route::get('login',[UserController::class,'rnlogin'])->name('rnlogin')->withoutMiddleware([confirmedcode::class]);
route::post('trylogin',[UserController::class,'trylogin'])->name('trylogin')->withoutMiddleware([confirmedcode::class]);
route::any('acceptdata/{id}/{accept?}',[LeadDataController::class,'acceptdata'])->name('acceptdata')->middleware('role:admin|fs|backoffice|salesmanager');
route::get('smsverification',[UserController::class,'smsconfirmation'])->name('smsconfirmation')->withoutMiddleware([confirmedcode::class]);
route::get('smsconfirm',function (){
    $Admin = Admins::find(12);
    return view('confirm_sms');
})->name('smsconfirm')->withoutMiddleware([confirmedcode::class]);
route::post('confirmcode',[UserController::class,'confirmcode'])->name('confirmcode')->withoutMiddleware([confirmedcode::class]);
route::get('logout',[UserController::class,'logout'])->name('logout')->withoutMiddleware([confirmedcode::class]);
route::get('status',[StatusController::class,'status'])->name('status');
// route::get('editclientdata/{id}',[StatusController::class,'editclientdata'])->name('editclientdata');
// route::post('editclientform/{id}',[StatusController::class,'editclientform'])->name('editclientform');
route::get('file/{file?}',function($file = null,Request $request){
        if(Storage::disk('img')->exists($file)){
           $file = Storage::disk('img')->get($file);
           $response = Response::make($file, 200);
         $response->header('Content-Type', 'file');
           return $response;
        }
        else{
           return redirect(URL::previous());
        }
})->middleware('role:admin|backoffice|salesmanager|management,admins')->name('showfile');
});
Route::get('Appointments', 'App\Http\Controllers\AppointmentsController@index')->name('Appointments')->middleware('role:admin|fs|salesmanager');
Route::get('Dropajax', 'App\Http\Controllers\AppointmentsController@Dropajax')->name('Dropajax')->middleware('role:admin|fs|salesmanager');
route::get('getchat/{u1}/{u2}',[ChatController::class,'getchat']);
route::any('sendmessage/{u1}/{u2}',[ChatController::class,'sendmessage']);
route::get('getadmin',function (){
   return Auth::guard('admins')->user()->id;
});

route::get('rleads',[UserController::class,'rleads'])->name('rleads');
route::get('leadhistory',function(Request $request){
   if(!Auth::user()->hasRole('fs')){
   $leads = lead::with('info')->with('admin')->orderBy('created_at','desc')->paginate(40);}
   else{
      $leads = lead::with('info')->with('admin')->where('assign_to_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(40);
   }
   return view('leadshistory',compact('leads'));
})->name('leadshistory');
route::get('fsadmins',[TodoController::class,'fsadmins'])->middleware('role:admin|backoffice');
route::post('rejectupdate',[LeadDataController::class,'rejectupdate'])->name('rejectupdate')->middleware('role:admin|backoffice');
route::get('getnotifications',function(){
   $cnt = 0;


   $user = auth()->user();
   foreach($user->notifications()->orderBy('created_at','desc')->select('notifications.data','notifications.created_at')->paginate(60) as $not){
      $data['notifications'][$cnt] = $not;
      $obj = Carbon::parse($not->created_at);
      $data['notifications'][$cnt]['read_at'] = $not->read_at;
      $data['notifications'][$cnt]['data'] = $data['notifications'][$cnt]['data'] . ' <div style="font-weight:600">   ' . $obj->format('d/m/y | H:i'). '</div>';
      $cnt++;
   }
   $data['cnt']  = $user->notifications()->whereNull('read_at')->count();
 return $data;
});
route::get('readnotifications',function(){
Auth::user()->unreadNotifications->markAsRead();
});
route::get('getrole',function(){
 return Auth::user()->getRoleNames()[0];
});
route::get('forgot_password',function (){
    return view('forgot_password');
})->name('forgot_password_blade');
route::post('forgotpassword',[\App\Http\Controllers\ForgotPassController::class,'forgot_password'])->name('forgot_password');
route::get('changepasswrd/{token}/{id}',[\App\Http\Controllers\ForgotPassController::class,'changepasswrd'])->name('changepasswrd');
route::post('update_password/{token}/{id}',[\App\Http\Controllers\ForgotPassController::class,'update_password'])->name('update_password');





