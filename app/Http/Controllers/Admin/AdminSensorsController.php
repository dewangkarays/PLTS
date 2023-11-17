<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Laililmahfud\Adminportal\Controllers\AdminController;
use App\Services\SensorsService;

class AdminSensorsController extends AdminController
{
    protected $routePath = "admin.sensors";
    protected $pageTitle = "Sensors";
    protected $resourcePath = "admin.sensors";
    protected $moduleService = SensorsService::class;
    protected $bulkAction = false;

    protected $tableColumns = [
        ["label" => "Name", "name" => "name"],
    ];

    protected $rules = [
        "name" => "required|min:3|max:150",
    ];
    
    
}
