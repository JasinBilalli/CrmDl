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
    public function family_persons($id,$admin_id = null,Request $req)
    {
 
     Session::put('pend_id',(int) $req->pend_id);
 
        $idd = Crypt::decrypt($id);
        $idd /= 1244;
        $cnt = 0;
        $cnt1 = 0;
        $lead = family::find($idd);
 $admin_id = $req->admin_id;
 


            if (Auth::guard('admins')->user()->hasRole('fs')) {
                
                if ($lead->lead->assign_to_id == Auth::user()->id || Pendency::find((int) $req->pend_id)->admin_id == Auth::user()->id) {
                    try {
                        
                        $data = LeadDataKK::where('person_id', '=', $idd)->firstOrFail();
                       
                        return redirect()->route('acceptdata', [Crypt::encrypt($idd*1244),'accept' => false,'admin_id' => $admin_id]);
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
                    $data = LeadDataKK::where('person_id', '=', $idd)->firstOrFail();
                    return redirect()->route('acceptdata', [Crypt::encrypt($idd*1244),'accept' => false,'admin_id' => $admin_id]);
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
            return redirect()->back()->with('message', 'Family person was updated');
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
        return redirect()->back()->with('success', 'Update successfuly');
    }
}
