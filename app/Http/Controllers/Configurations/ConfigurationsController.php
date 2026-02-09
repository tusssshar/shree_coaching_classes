<?php

namespace App\Http\Controllers\Configurations;

use App\Http\Command\CreateCommand;
use App\Http\Controllers\Controller;
use App\Http\Handler\CreateHandlerInterface;
use App\Services\CommonConfigurationService;
use App\Services\CommonFormValidationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ConfigurationsController extends Controller
{
    private CommonFormValidationService $commonFormValidationService;

    private CreateHandlerInterface $handler;

    private CommonConfigurationService $commonConfigurationService;

    public function __construct(
        CommonFormValidationService $commonFormValidationService,
        CreateHandlerInterface $handler,
        CommonConfigurationService $commonConfigurationService
    ) {
        $this->commonFormValidationService = $commonFormValidationService;
        $this->handler = $handler;
        $this->commonConfigurationService = $commonConfigurationService;
    }

    public function index()
    {
        return view('admin.configurations.add.index');
    }

    public function listConfigurations()
    {
        $allData = $this->commonConfigurationService->getConfigurationList(config('constants.DEFAULT_STDANDARD_LIST'));

        return view('admin.configurations.list.index', compact('allData'));
    }

    public function loadPage($type)
    {
        return view("admin.configurations.add.$type");
    }

    public function showTable($type)
    {
        $allData = $this->commonConfigurationService->getConfigurationList($type);

        return view('admin.configurations.list.table', compact('allData'));
    }

    public function validateRequest($data)
    {
        $this->commonFormValidationService->validateRequest($data);
    }

    public function addConfigurations(Request $request)
    {
        $command = new CreateCommand(
            name: $request->input('name'),
            type: $request->input('source_blade')
        );

        $this->handler->handle($command);

        return back()->with('success', 'Saved successfully');
    }
}
