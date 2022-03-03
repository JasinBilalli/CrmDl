<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  public function bindtest(data $data){
      $data->addanother();
      $data->addanother();
      $data->addanother();
  }
  public function test2(data $data){
return dd($data->counter);
  }
}
