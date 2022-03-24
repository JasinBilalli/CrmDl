<?php


use App\Http\Controllers\HumanResourcesController;
use App\Models\EmployeePersonalData;

route::post('createAbsence',[HumanResourcesController::class,'createAbsence'])->name('createAbsence');
    route::post('updateAbsence',[HumanResourcesController::class,'updateAbsenceById'])->name('updateAbsenceById');
    route::get('getAllEmployeeAbsences',[HumanResourcesController::class,'getAllEmployeeAbsences'])->name('getAllEmployeeAbsences');
    route::post('removeAbsence',[HumanResourcesController::class,'removeAbsence'])->name('removeAbsence');
    route::post('addBankInformationData',[HumanResourcesController::class,'addBankInformationData'])->name('addBankInformationData');
    route::post('updateBankInformation',[HumanResourcesController::class,'updateBankInformation'])->name('updateBankInformation');
    //route::get('getEmployeeBankInformation',[HumanResourcesController::class,'getEmployeeBankInformation'])->name('getEmployeeBankInformation');
    route::get('getBankInfo/{id}',[HumanResourcesController::class,'getEmployeeBankInformation'])->name('getBankInfo');

    route::post('createPersonalData',[HumanResourcesController::class,'createPersonalData'])->name('createPersonalData');
    route::get('getEmployeePersonalDataById',[HumanResourcesController::class,'getEmployeePersonalDataById'])->name('getEmployeePersonalDataById');
    //route::get('getAllEmployees',[HumanResourcesController::class,'getAllEmployees'])->name('getAllEmployees');
    route::get('getAllEmployees/{id}',[HumanResourcesController::class,'getHRs'])->name('getAllEmployees');
    route::post('updatePersonalData',[HumanResourcesController::class,'updatePersonalData'])->name('updatePersonalData');
    route::post('removePersonalData',[HumanResourcesController::class,'removePersonalData'])->name('removePersonalData');
    route::get('hr_view', function (){
        $admins = \App\Models\Admins::where('admin_id',null)->get();
        return view('hr',['admins' => $admins]);
})->name('hr_view');
?>
