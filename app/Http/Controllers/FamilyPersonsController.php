<?php

namespace App\Http\Controllers;

use App\Models\family;
use App\Models\FamilyPerson;
use App\Models\lead;
use App\Models\data;
use App\Models\LeadDataKK;
use App\Models\Pendency;
use Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;
use Illuminate\Support\Facades\Crypt;


class FamilyPersonsController extends Controller
{
    public function fmembers($family,lead $lid){
        $user = auth()->user();
        $urole = $user->getRoleNames()->toArray();
        if($lid->assign_to_id == $user->id || in_array('backoffice',$urole) || in_array('admin',$urole)) {
            return $lid->family()->where('id', '<>', $family)->get()->toArray();
        }
    }
    public function linkthat($id,$pid){
        if(!LeadDataKK::where('krank_id',$id)->first()) {
            $leaddk = new LeadDataKK();
            $leaddk->leads_id = family::find($id)->lead->id;
            $leaddk->person_id = $id;
            $leaddk->skiped = 1;
            $leaddk->krank_id = $pid;
            $leaddk->save();
            $pend = Pendency::where('family_id', $pid)->first();
            if (!$pend) {
                Pendency::create(['admin_id' => \auth()->user()->id, 'family_id' => $pid]);
            }
        }
    }
    public function family_persons($id,Request $req,$admin_id = null)
    {
        Session::put('pend_id',(int) $req->pend_id);
        $idd = Crypt::decrypt($id);
        $idd /= 1244;
        $cnt = 0;
        $cnt1 = 0;
        $lead = family::with('lead')->find($idd);
        $admin_id = $req->admin_id;


        if (Auth::guard('admins')->user()->hasRole('fs')) {
            if (Auth::guard('admins')->user()->id == $lead->lead->assign_to_id || Pendency::find((int) $req->pend_id)->admin_id == Auth::user()->id) {
                try {

                    $data = LeadDataKK::where('person_id', '=', $idd)->where('imported',0)->where('skiped',0)->firstOrFail();

                    return redirect()->route('acceptdata', [Crypt::encrypt($idd*1244),'accept' => false,'admin_id' => $admin_id,'vorsorge' => $req->vorsorge]);
                }
                catch (Exception $e) {

                    return view('documentsform', compact('lead'));
                }
            }
            else {

                return redirect()->back();
            }
        }
        else {
            try {
                $data = LeadDataKK::where('person_id', '=', $idd)->where('imported',0)->where('skiped',0)->firstOrFail();
                return redirect()->route('acceptdata', [Crypt::encrypt($idd*1244),'accept' => false,'admin_id' => $admin_id,'vorsorge' => $req->vorsorge]);
            }
            catch (Exception $e) {
                return view('documentsform', compact('lead'));
            }
        }
    }

    public function getAllFamilyPersonsOfLead($id)
    {
        $familyPersons = family::where('leads_id', $id)->get();
        return $familyPersons;
    }

    public function updateFamilyPerson($id, Request $request)
    {
        $family =  family::where('id', $id)->get();
        if (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice') ||  $family->lead->assign_to_id == Auth::guard('admins')->user()->id) {
            $family->update($request->all());
            return redirect()->back()->with('message', 'Familienmitglied wurde aktualisiert');
        } else {
            return redirect()->back();
        }
    }

    public function deleteFamilyPerson($id, $leadId)
    {
        $family = family::where('id', $id)->where('leads_id', $leadId)->get();
        if (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->id == $family->lead->id) {
            $family->delete();
        }
    }

    public function updateleadfamilyperson(Request $request, $id)
    {
        $idd = Crypt::decrypt($id);
        $idd /= 1244;

        family::where('id', $idd)->update(['first_name' => $request->familyfirstname, 'last_name' => $request->familylastname]);
        return redirect()->back()->with('success', 'Update erfolgreich');
    }
}
