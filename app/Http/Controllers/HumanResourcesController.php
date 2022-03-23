<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use App\Models\BankInformation;
use App\Models\EmployeePersonalData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HumanResourcesController extends Controller
{
    public function createAbsence(Request $request)
    {
        $employeeId = $request->employeeId;

        $decryptedEmployeeId = Crypt::decrypt($employeeId);
        $decryptedEmployeeId /= 1244;

        $absence = Absence::create([
            'employee_id' => $decryptedEmployeeId,
            'from' => $request->from,
            'to' => $request->to,
            'type' => $request->type,
            'description' => $request->description
        ]);

        return [
            'message' => 'Absence was created successfully.',
            'data' => $absence
        ];
    }

    public function updateAbsenceById(Request $request)
    {
        $employeeId = $request->employeeId;
        $absenceId = $request->absenceId;

        $decryptedEmployeeId = Crypt::decrypt($employeeId);
        $decryptedEmployeeId /= 1244;

        $decryptedAbsenceId = Crypt::decrypt($absenceId);
        $decryptedAbsenceId /= 1244;

        $existingEmployeeAbsence = Absence::where('id', $decryptedAbsenceId)->where('employee_id', $employeeId)->first();

        $newAbsenceData = [
            'from' => $request->from ? $request->from : $existingEmployeeAbsence->from,
            'to' => $request->to ? $request->to : $existingEmployeeAbsence->to,
            'type' => $request->type ? $request->type : $existingEmployeeAbsence->type,
            'description' => $request->description ? $request->description : $existingEmployeeAbsence->description
        ];

        if($existingEmployeeAbsence){
            $existingEmployeeAbsence->update($newAbsenceData);
        }else{
            return 'No absence data found';
        }
    }

    public function getAllEmployeeAbsences(Request $request)
    {
        $employeeId = $request->employeeId;

        $decryptedEmployeeId = Crypt::decrypt($employeeId);
        $decryptedEmployeeId /= 1244;

        return Absence::where('employee_id', $employeeId)->get();
    }

    public function removeAbsence(Request $request)
    {
        $employeeId = $request->employeeId;

        $decryptedEmployeeId = Crypt::decrypt($employeeId);
        $decryptedEmployeeId /= 1244;

        $absence = Absence::where('employee_id', $decryptedEmployeeId)->first();
        return $absence->delete();
    }

    public function addBankInformationData(Request $request)
    {
        $employeeId = $request->employeeId;

        $decryptedEmployeeId = Crypt::decrypt($employeeId);
        $decryptedEmployeeId /= 1244;

        $bankData = BankInformation::create([
            'employee_id' => $decryptedEmployeeId,
            'bank' => $request->bank,
            'iban' => $request->iban
        ]);

        if($bankData){
            return [
                'message' => 'Bank Data was added successfully.',
                'data' => $bankData
            ];
        }
    }

    public function updateBankInformation(Request $request)
    {
        $employeeId = $request->employeeId;

        $decryptedEmployeeId = Crypt::decrypt($employeeId);
        $decryptedEmployeeId /= 1244;

        $existingBankInformation = BankInformation::where('employee_id', $decryptedEmployeeId)->first();

        $newBankInformation = [
            'bank' => $request->bank ? $request->bank : $existingBankInformation->bank,
            'iban' => $request->iban ? $request->iban : $existingBankInformation->iban
        ];

        if($existingBankInformation){
            return $existingBankInformation->update($newBankInformation);
        }else{
            return 'No Bank Information data found.';
        }
    }

    public function getEmployeeBankInformation(Request $request)
    {
        $employeeId = $request->employeeId;

        $decryptedEmployeeId = Crypt::decrypt($employeeId);
        $decryptedEmployeeId /= 1244;

        return BankInformation::where('employee_id', $decryptedEmployeeId)->first();
    }

    public function createPersonalData(Request $request)
    {
        $personalData = EmployeePersonalData::create([
            'name' => $request->name,
            'prename' => $request->prename,
            'email' => $request->email,
            'address' => $request->address,
            'zip' => $request->zip,
            'city' => $request->city,
            'phone' => $request->phone
        ]);

        if($personalData){
            return [
                'message' => 'Personal Data was created successfully.',
                'data' => $personalData
            ];
        }
    }

    public function getEmployeePersonalDataById(Request $request)
    {
        $employeeId = $request->employeeId;

        $decryptedEmployeeId = Crypt::decrypt($employeeId);
        $decryptedEmployeeId /= 1244;

        return EmployeePersonalData::where('id', $decryptedEmployeeId)->first();
    }

    public function getAllEmployees()
    {
        return EmployeePersonalData::all();
    }

    public function updatePersonalData(Request $request)
    {
        $employeeId = $request->employeeId;

        $decryptedEmployeeId = Crypt::decrypt($employeeId);
        $decryptedEmployeeId /= 1244;

        $existingPersonalData = EmployeePersonalData::where('id', $decryptedEmployeeId)->first();

        $newPersonalData = [
            'name' => $request->name ? $request->name : $existingPersonalData->name,
            'prename' => $request->prename ? $request->prename : $existingPersonalData->prename,
            'email' => $request->email ? $request->email : $existingPersonalData->email,
            'address' => $request->address ? $request->address : $existingPersonalData->address,
            'zip' => $request->zip ? $request->zip : $existingPersonalData->zip,
            'city' => $request->city ? $request->city : $existingPersonalData->city,
            'phone' => $request->phone ? $request->phone : $existingPersonalData->phone
        ];

        if($existingPersonalData){
            return $existingPersonalData->update($newPersonalData);
        }else{
            return 'No personal data found';
        }
    }

    public function removePersonalData(Request $request)
    {
        $employeeId = $request->employeeId;

        $decryptedEmployeeId = Crypt::decrypt($employeeId);
        $decryptedEmployeeId /= 1244;

        $personalData = EmployeePersonalData::where('id', $decryptedEmployeeId)->first();
        return $personalData->delete();
    }
}
