<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CommonFormValidationService
{
    public function validateRequest(array $data)
    {
        $rules = match ($data['source_blade'] ?? null) {

            'std' => [
                'name' => ['required', 'string', 'max:50'],
            ],

            'board' => [
                'name' => ['required', 'string', 'max:50'],
            ],

            'medium' => [
                'name' => ['required', 'string', 'max:50'],
            ],

            'modeofpayment' => [
                'name' => ['required', 'string', 'max:50'],
            ],

            'typeofpayment' => [
                'name' => ['required', 'string', 'max:50'],
            ],

            'student_form' => [
                'name'      => 'required|string|max:100',
                'mname'     => 'required|string|max:100',
                'lname'     => 'required|string|max:100',

                'dob'       => 'required|date',
                'age'       => 'required|numeric|min:1|max:100',

                'fmobile'   => 'required|digits:10',
                'mmobile'   => 'nullable|digits:10',

                'standard'  => 'required|integer|exists:v1_scc_standards,id',
                'medium'    => 'required|integer|exists:v1_scc_medium,id',
                'board'     => 'required|integer|exists:v1_scc_boards,id',

                'gender'    => 'required|in:male,female',

                'school'    => 'required|string|max:255',
                'home'      => 'required|string|max:500',

                'totalfees'      => 'required|numeric|min:0',
                'fees'           => 'required|numeric|min:0',
                'typeofpayment'  => 'required|integer|exists:v1_scc_type_of_payments,id',
                'modeofpayment'  => 'required|integer|exists:v1_scc_mode_of_payments,id',

                'student_photo'       => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'government_identity' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
                'mark_sheet'          => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            ],

            default => [],
        };

        $messages = [
            // Student Info
            'name.required'   => 'Full Name is required',
            'mname.required'  => 'Middle Name is required',
            'lname.required'  => 'Last Name is required',

            'dob.required'    => 'DOB is required',
            'dob.date'        => 'DOB must be a valid date',

            'age.required'    => 'Age is required',
            'age.numeric'     => 'Age must be a number',

            'fmobile.required' => 'Father Mobile is required',
            'fmobile.digits'   => 'Father Mobile must be exactly 10 digits',

            'mmobile.digits'   => 'Mother Mobile must be exactly 10 digits',

            'standard.required' => 'Standard is required',
            'medium.required'   => 'Medium is required',
            'board.required'    => 'Board is required',

            'gender.required'   => 'Gender is required',
            'gender.in'         => 'Gender must be male or female',

            'school.required'   => 'School Name is required',
            'home.required'     => 'Home Address is required',

            // Payment
            'totalfees.required' => 'Total Fees is required',
            'totalfees.numeric'  => 'Total Fees must be numeric',

            'fees.required'      => 'Payment is required',
            'fees.numeric'       => 'Payment must be numeric',

            'typeofpayment.required' => 'Type of Payment is required',
            'modeofpayment.required' => 'Mode of Payment is required',

            // Documents
            'student_photo.required' => 'Student Photo is required',
            'student_photo.image'    => 'Student Photo must be an image',
            'student_photo.mimes'    => 'Student Photo must be jpg, jpeg, png',

            'government_identity.required' => 'Government Identity is required',
            'government_identity.mimes'    => 'Government Identity must be jpg, jpeg, png or pdf',

            'mark_sheet.required' => 'Last Year Marksheet is required',
            'mark_sheet.mimes'    => 'Last Year Marksheet must be jpg, jpeg, png or pdf',
        ];


        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return $validator->validated();
    }
}
