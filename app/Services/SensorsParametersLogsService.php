<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\SensorsParametersLogs;
use Laililmahfud\Adminportal\Services\AdminService;

class SensorsParametersLogsService extends AdminService
{
    public function __construct(
        public $model = SensorsParametersLogs::class,
    ) {}

    public function datatable(Request $request, $perPage = 10)
    {
        $search = $request->search ?? '';

        return $this->model::join("sensors_parameters", "sensors_parameters_logs.sensors_parameters_id", "sensors_parameters.id")
            ->where(function ($q) use ($search) {
                $q->orWhere("sensors_parameters_logs.value", "like", "%" . $search . "%");;
            })
            ->select("sensors_parameters_logs.*", "sensors_parameters.name as sensors_parameters_name")
            ->datatable($perPage, "sensors_parameters_logs.created_at");
    }

    public function store(Request $request)
    {
        return $this->model::create([
            "sensors_parameters_id" => $request->sensors_parameters_id,
            "value" => $request->value,
        ]);
    }

    public function update(Request $request, $uuid)
    {
        $data =  $request->only(['sensors_parameters_id', 'value']);

        return $this->model::whereUuid($uuid)->update($data);
    }
}
