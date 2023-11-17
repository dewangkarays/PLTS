<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Sensors;
use Laililmahfud\Adminportal\Services\AdminService;

class SensorsService extends AdminService
{
    public function __construct(
        public $model = Sensors::class,
    ) {
    }

    public function datatable(Request $request, $perPage = 10)
    {
        $search = $request->search ?? '';

        return $this->model::where(function ($q) use ($search) {
            $q->orWhere("name", "like", "%" . $search . "%");;
        })
            ->select("*")
            ->paginate($perPage);
    }

    public function store(Request $request)
    {
        return $this->model::create([
            "name" => $request->name,
        ]);
    }

    public function update(Request $request, $uuid)
    {
        $data =  $request->only(['name']);

        return $this->model::whereUuid($uuid)->update($data);
    }
}
