<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToDoRequest;
use App\Models\Admins;
use App\Models\Costumer;
use App\Models\family;
use Illuminate\Http\Request;
use App\Models\todo;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function numbers(){
        return todo::where('number',1)->where('admin_id',Auth::guard('admins')->user()->id)->get();
    }

    public function addnumber(Request $req){
        if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice'))
        {
        $todo = new todo();
        $todo->text = filter_var($req->number,FILTER_SANITIZE_STRING);
        $todo->admin_id = Auth::guard('admins')->user()->id;
        $todo->number = 1;
        $todo->save();
      }
    }
    public function fsadmins(Request $req){
        return Admins::find((int) $req->admin_id);
    }

      public function deletenumber(Request $req){
        if(Auth::guard('admins')->check()){
            $id = (int) $req->id;
            $todo = todo::find($id);
            if($todo->admin_id == Auth::guard('admins')->user()->id){
            todo::find($id)->delete();}
            else{
                return redirect()->back();
            }
        }
    }

    public function addtodo(ToDoRequest $req){
      $todo = new todo();
      $todo->text = filter_var($req->todo,FILTER_SANITIZE_STRING);
      $todo->admin_id = Auth::guard('admins')->user()->id;
      if($todo->save()){
          return redirect()->route('dashboard')->with('success', 'Erfolgreich eingefügt');
      }else{
          return redirect()->route('dashboard')->with('fail','Fehler beim Einfügen');
      }

    }
    public function todos(){
        if(Auth::guard('admins')->check()){
            if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice')){
        $data['costumers'] = family::all();
        $data['admins'] = Admins::role(['fs'])->get();
        return $data;
            }
        }
    }
    public function deletetodo(Request $req){
        if(Auth::guard('admins')->check()){
            $id = (int) $req->id;
            $todo = todo::find($id);
            if($todo->admin_id == Auth::guard('admins')->user()->id){
            todo::find($id)->delete();}
            else{
                return redirect()->back();
            }
        }
    }
    public function donetodo(Request $req){
        if(Auth::guard('admins')->check()){
            $id = (int) $req->id;
            $todo = todo::where('id',$id)->get();
            if($todo->assign_to_id == Auth::guard('admins')->user()->id || Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice')){
            $todo->update(['done' => 1]);
            }
        }
    }

    public function getDataForTaskByCostumerId($costumerId)
    {
        return family::where('id', $costumerId)->first();
    }

    public function createToDoTasks($id, $pendencyId, Request $request)
    {
        $decryptedId = Crypt::decrypt($id);
        $decryptedPendencyId = Crypt::decrypt($pendencyId);

        $data = [
            'admin_id' => $decryptedId,
            'pendency_id' => $decryptedPendencyId,
            'costumer' => $request->costumer,
            'text' => $request->text,
            'comment' => $request->comment,
            'done' => 'Opened'
        ];

        return todo::create($data);
    }

    public function getAllOpenedToDoTasks()
    {
        return todo::where('done', 'Opened')->get();
    }

    public function getAllAnsweredTasks()
    {
        return todo::where('done', 'Answered')->get();
    }
}
