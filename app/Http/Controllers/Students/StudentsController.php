<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Services\CommonConfigurationService;
use App\Services\CommonFormValidationService;
use App\Http\Handler\CreateHandlerInterface;
use Illuminate\Http\Request;
use App\Http\Repository\StudentRepository;
use App\Models\StudentGeneralInfo;


class StudentsController extends Controller
{
    private StudentRepository $studentRepository;

    private CommonFormValidationService $commonFormValidationService;

    private CreateHandlerInterface $handler;

    private CommonConfigurationService $commonConfigurationService;

    public function __construct(
        CommonFormValidationService $commonFormValidationService,
        CreateHandlerInterface $handler,
        CommonConfigurationService $commonConfigurationService,
        StudentRepository $studentRepository
    ) {
        $this->commonFormValidationService = $commonFormValidationService;
        $this->handler = $handler;
        $this->commonConfigurationService = $commonConfigurationService;
        $this->studentRepository = $studentRepository;
    }

    public function index()
    {
        $allData = $this->commonConfigurationService->getAllConfiguration();
        return view('admin.students.index',compact('allData'));
    }

    public function list()
    {
        $allData = $this->commonConfigurationService->getAllConfiguration();

        $students = StudentGeneralInfo::with(['standardData', 'mediumData', 'boardData'])
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.students.studentlist', compact('allData', 'students'));
    }

    public function save(Request $request){
        $validated = $this->commonFormValidationService->validateRequest($request->all());
        
        $result = $this->studentRepository->save($validated, $request);
    
        if ($result['status'] == true) {
            return redirect()->back()->with('success', $result['message']);
        }

        return redirect()->back()->with('error', $result['message']);
    }

    public function edit($id)
    {
        $allData = $this->commonConfigurationService->getAllConfiguration();

        $student = \App\Models\StudentGeneralInfo::with(['paymentInfo', 'documentInfo',
        'standardData', 'mediumData', 'boardData', 'typeOfPaymentData' , 'modeOfPaymentData'])
            ->where('id', $id)
            ->where('status', 1)
            ->firstOrFail();
        //dd($student);
        return view('admin.students.edit', compact('student', 'allData'));
    }


    public function update(Request $request, $id)
    {
        $validated = $this->commonFormValidationService->validateRequest($request->all());

        $result = $this->studentRepository->update($id, $validated, $request);

        if ($result['status'] == true) {
            return redirect()->back()->with('success', $result['message']);
        }

        return redirect()->back()->with('error', $result['message']);
    }

}
