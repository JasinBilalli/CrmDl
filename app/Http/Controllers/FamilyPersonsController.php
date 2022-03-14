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
                if (Auth::guard('admins')->user()->id == $lead->lead->assign_to_id || Pendency::find((int) $req->pend_id)->admin_id == Auth::user()->id) {
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