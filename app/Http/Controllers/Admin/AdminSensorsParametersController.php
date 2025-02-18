<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sensors;
use Illuminate\Http\Request;
use Laililmahfud\Adminportal\Controllers\AdminController;
use App\Services\SensorsParametersService;

class AdminSensorsParametersController extends AdminController
{
    protected $routePath = "admin.sensors-parameters";
    protected $pageTitle = "Sensors Parameters";
    protected $resourcePath = "admin.sensors-parameters";
    protected $moduleService = SensorsParametersService::class;
    protected $bulkAction = false;

    protected $tableColumns = [
        ["label" => "Sensor", "name" => "sensors_id"],
        ["label" => "Parameter", "name" => "parameter"],
        ["label" => "Name", "name" => "name"],
        ["label" => "Unit", "name" => "unit"],
    ];

    protected $rules = [
        "sensors_id" => "required",
        "name" => "required|min:3|max:150",
        "unit" => "nullable",
    ];

    public function create(Request $request)
    {
        $this->data = [
            'sensors' => Sensors::all(),
        ];
        return parent::create($request); // TODO: Change the autogenerated stub
    }
    public function edit(Request $request, $uuid)
    {
        $this->data = [
            'sensors' => Sensors::all(),
        ];
        return parent::edit($request, $uuid); // TODO: Change the autogenerated stub
    }
}
