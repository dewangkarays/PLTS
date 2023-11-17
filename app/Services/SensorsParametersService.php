<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\SensorsParameters;
use Laililmahfud\Adminportal\Services\AdminService;

class SensorsParametersService extends AdminService
{
    public function __construct(
        public $model = SensorsParameters::class,
    ) {
    }

    public function datatable(Request $request, $perPage = 10)
    {
        $search = $request->search ?? '';

        return $this->model::where(function ($q) use ($search) {
            $q->orWhere("sensors_id", "like", "%" . $search . "%");
            $q->orWhere("name", "like", "%" . $search . "%");
            $q->orWhere("unit", "like", "%" . $search . "%");;
        })
            ->select("*")
            ->paginate($perPage);
    }

    public function store(Request $request)
    {
        return $this->model::create([
            "sensors_id" => $request->sensors_id,
            "name" => $request->name,
            "unit" => $request->unit,
        ]);
    }

    public function update(Request $request, $uuid)
    {
        $data =  $request->only(['sensors_id', 'name', 'unit']);

        return $this->model::whereUuid($uuid)->update($data);
    }
}
