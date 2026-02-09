<?php

namespace App\Http\Repository;

use App\Http\Contract\StudentInterface;
use App\Models\StudentGeneralInfo;
use App\Models\StudentPaymentInfo;
use App\Models\StudentDocumentInfo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\CommonFileUploadService;

class StudentRepository implements StudentInterface {

private CommonFileUploadService $commonFileUploadService;

public function __construct(CommonFileUploadService $commonFileUploadService)
{
    $this->commonFileUploadService = $commonFileUploadService;
}

public function save(array $data, Request $request): array
{
        DB::beginTransaction();

        try {

            // 1) Save General Info
            $student = new StudentGeneralInfo();
            $student->uuid = Str::uuid();
            $student->first_name = $data['name'];
            $student->middle_name = $data['mname'];
            $student->last_name = $data['lname'];
            $student->dob = $data['dob'];
            $student->age = $data['age'];
            $student->fmobile = $data['fmobile'];
            $student->mmobile = $data['mmobile'];
            $student->standard = $data['standard'];
            $student->medium = $data['medium'];
            $student->board = $data['board'];
            $student->gender = $data['gender'];
            $student->schoolname = $data['school'];
            $student->address = $data['home'];
            $student->status = 1;
            $student->save();

            // 2) Save Payment Info
            $payment = new StudentPaymentInfo();
            $payment->student_id = $student->id;
            $payment->total_fees = $data['totalfees'];
            $payment->paid_amount = $data['fees'];
            $payment->mode_of_payment = $data['modeofpayment'];
            $payment->type_of_payment = $data['typeofpayment'];
            $payment->status = 1;
            $payment->save();

            $photoPath = $this->commonFileUploadService->upload(
                $request->file('student_photo'),
                'students/photos'
            );

            $govtPath = $this->commonFileUploadService->upload(
                $request->file('government_identity'),
                'students/identity'
            );

            $marksheetPath = $this->commonFileUploadService->upload(
                $request->file('mark_sheet'),
                'students/marksheets'
            );

            // 3) Save Document Info
            $document = new StudentDocumentInfo();
            $document->student_id = $student->id;
            $document->student_photo = $photoPath;
            $document->government_identity = $govtPath;
            $document->last_year_marksheet = $marksheetPath;
            $document->status = 1;
            $document->save();


            DB::commit();

            return ['status'=> true,'message'=>'Passed'];

        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();

            return ['status'=> false,'message'=>'Failed'];
        }
    }

    public function update(int $id, array $validated, Request $request): array
    {
        DB::beginTransaction();

        try {

            $student = StudentGeneralInfo::where('id', $id)
                ->where('status', 1)
                ->firstOrFail();

            // update student general info
            $student->update([
                'name'     => $validated['name'],
                'mname'    => $validated['mname'],
                'lname'    => $validated['lname'],
                'dob'      => $validated['dob'],
                'age'      => $validated['age'],
                'fmobile'  => $validated['fmobile'],
                'mmobile'  => $validated['mmobile'] ?? null,
                'standard' => $validated['standard'],
                'medium'   => $validated['medium'],
                'board'    => $validated['board'],
                'gender'   => $validated['gender'],
                'school'   => $validated['school'],
                'home'     => $validated['home'],
            ]);

            // update payment info
            $payment = StudentPaymentInfo::where('student_id', $student->id)->first();

            if ($payment) {
                $payment->update([
                    'totalfees'     => $validated['totalfees'],
                    'fees'          => $validated['fees'],
                    'typeofpayment' => $validated['typeofpayment'],
                    'modeofpayment' => $validated['modeofpayment'],
                ]);
            } else {
                StudentPaymentInfo::create([
                    'student_id'    => $student->id,
                    'totalfees'     => $validated['totalfees'],
                    'fees'          => $validated['fees'],
                    'typeofpayment' => $validated['typeofpayment'],
                    'modeofpayment' => $validated['modeofpayment'],
                    'status'        => 1,
                ]);
            }

            // update documents info
            $documents = StudentDocumentInfo::where('student_id', $student->id)->first();
dd($documents);
            if (!$documents) {
                $documents = StudentDocumentInfo::create([
                    'student_id' => $student->id,
                    'status' => 1,
                ]);
            }

            $photoPath = $this->commonFileUploadService->replaceFile(
                $request->file('student_photo'),
                'students/photos',
                $documents->student_photo
            );

            $govPath = $this->commonFileUploadService->replaceFile(
                $request->file('government_identity'),
                'students/government',
                $documents->government_identity
            );

            $marksheetPath = $this->commonFileUploadService->replaceFile(
                $request->file('mark_sheet'),
                'students/marksheet',
                $documents->last_year_marksheet
            );

            $documents->update([
                'student_photo'       => $photoPath,
                'government_identity' => $govPath,
                'last_year_marksheet' => $marksheetPath,
            ]);

            DB::commit();

            return [
                'status' => true,
                'message' => 'Student Updated Successfully'
            ];

        } catch (\Exception $e) {

            DB::rollBack();

            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }

}
