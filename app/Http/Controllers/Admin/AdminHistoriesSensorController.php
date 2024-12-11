<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Laililmahfud\Adminportal\Controllers\AdminController;
use App\Services\SensorsParametersLogsService;

class AdminHistoriesSensorController extends AdminController
{
    protected $routePath = "admin.histories-sensors";
    protected $pageTitle = "History Sensor";
    protected $resourcePath = "admin.histories-sensors";
    protected $moduleService = SensorsParametersLogsService::class;
    protected $bulkAction = false;

    protected $tableColumns = [
        ["label" => "Sensors Parameter", "name" => "sensors_parameters_logs.sensors_parameters_id"],
        ["label" => "Value", "name" => "sensors_parameters_logs.value"],
    ];

    protected $rules = [
        "sensors_parameters_id" => "required",
        "value" => "required|numeric",
    ];

    public function view()
    {
        return view('admin.histories-sensors.chart');
    }
}
